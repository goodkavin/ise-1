<?php
require 'connect.php';

$data = array();

$query = trim($_POST['query']);
$key = trim($_POST['key']);

date_default_timezone_set('Asia/Bangkok');
$stamp = date("Y-m-d H:i:s");

if(empty($query)) exit();

if($query == "university") {
	$sql = "SELECT * FROM university WHERE university_name LIKE '%{$key}%'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_assoc($result)) {
	    array_push($data, $row['university_name']);
	}
	echo json_encode($data);
} else if($query == "course"){
	$sql = "SELECT * FROM course WHERE course_2_university LIKE '%{$key}%'";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
?>
<table class="table table-bordered table-striped">
	<thead>
        <tr>
            <th colspan="3" style="border-bottom: 0px; border-radius: 6px 0 0 0;">Chulalongkorn</th>
            <th colspan="2" style="border-bottom: 0px;">External Institution</th>
            <th rowspan="2" style="border-bottom: 0px; text-align: center; vertical-align: middle;">Date Approved</th>
            <th rowspan="2" style="border-bottom: 0px; text-align: center; vertical-align: middle;"><img src="img/ok.png" width="24"></th>
            <th rowspan="2" style="border-bottom: 0px; border-radius: 0 6px 0 0; text-align: center; vertical-align: middle;">Action</th>
        </tr>
		<tr>
			<th>Program</th>
			<th>Course #</th>
            <th>Course Title</th>
			<th>Course #</th>
			<th>Course Title</th>
        </tr>
    </thead>
	<tbody>
		<?php while($row = mysqli_fetch_assoc($result)) { ?>
		<tr>
            <td><?php echo $row['program'];?></td>
            <td><?php echo $row['course_1_number'];?></td>
            <td><?php echo $row['course_1_title'];?></td>
            <td><?php echo $row['course_2_number'];?></td>
            <td><?php echo $row['course_2_title'];?></td>
            <td><?php echo $row['approve'];?></td>
            <td><?php echo "<img src=\"img/" . $row['status'] . ".png\" width=\"24\">";?></td>
            <td id="add" style="font-weight: bold;"><input type="hidden" value="<?=$row['id']?>">Take</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
	} else {
?>
<div style="text-align: center; font-weight: bold;">No Result Found...</div>
<?php
	}
} else if($query == "request"){
    $program = $_POST['program'];
    $course_1_number = $_POST['course_1_number'];
    $course_1_title = $_POST['course_1_title'];
    $course_1_credit = $_POST['course_1_credit'];
    $course_1_hour = $_POST['course_1_hour'];
    $course_2_number = $_POST['course_2_number'];
    $course_2_title = $_POST['course_2_title'];
    $course_2_credit = $_POST['course_2_credit'];
    $course_2_hour = $_POST['course_2_hour'];
    $course_2_detail = $_POST['course_2_detail'];
    $course_2_university = $_POST['course_2_university'];
    $course_2_country = $_POST['course_2_country'];

    if(empty($course_1_number)) { echo "Please fill CU Course #"; exit();}
    if(empty($course_1_title)) { echo "Please fill CU Course Title"; exit();}
    if(empty($course_1_credit)) { echo "Please fill CU Course Credit"; exit();}
    if(empty($course_1_hour)) { echo "Please fill CU Course Hour"; exit();}
    if(empty($program)) { echo "Please fill Program "; exit();}
    if(empty($course_2_number)) { echo "Please fill EX Course #"; exit();}
    if(empty($course_2_title)) { echo "Please fill EX Course Title"; exit();}
    if(empty($course_2_credit)) { echo "Please fill EX Course Credit"; exit();}
    if(empty($course_2_hour)) { echo "Please fill EX Course Hour"; exit();}

    $sql = "INSERT INTO course VALUES ('', '$program', '$course_1_number', '$course_1_title', '$course_1_credit', '$course_1_hour', '$course_2_number', '$course_2_title', '$course_2_detail', '$course_2_credit', '$course_2_hour', '$course_2_university', '$course_2_country', '0', '0', '', 'hold', '$stamp')";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else if($query == "take") {
    $application_id = $_POST['application_id'];
    $university_no = $_POST['university_no'];
    $course_id = $_POST['course_id'];

    $sql = "SELECT * FROM application_course WHERE application_id = '".$application_id."' AND university = '".$university_no."' AND course_id = '".$course_id."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "You already take this course";
        exit();
    }

    $sql = "INSERT INTO application_course VALUES ('', '$application_id', '$university_no', '$course_id', '$stamp')";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else if($query == "remove") {
    $application_id = $_POST['application_id'];
    $university_no = $_POST['university_no'];
    $course_id = $_POST['course_id'];

    $sql = "DELETE FROM application_course WHERE application_id = '".$application_id."' AND university = '".$university_no."' AND course_id = '".$course_id."'";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else if($query == "application_course") {
    $application_id = $_POST['application_id'];
    $university_no = $_POST['university_no'];

    $sql = "SELECT * FROM course INNER JOIN application_course ON application_course.course_id = course.id WHERE application_course.application_id = '".$application_id."' AND application_course.university = '".$university_no."' ORDER BY FIELD(course.status, 'ok', 'hold', 'cancle')";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
?>
<table class="table table-bordered table-striped" id="course">
    <thead>
      <tr>
          <th colspan="4" style="border-bottom: 0px; border-radius: 6px 0 0 0;">Chulalongkorn</th>
          <th colspan="4" style="border-bottom: 0px;">Dartmouth College</th>
          <th rowspan="2" style="border-bottom: 0px; text-align: center; vertical-align: middle;"><img src="img/ok.png" width="24"></th>
          <th rowspan="2" style="border-bottom: 0px; border-radius: 0 6px 0 0; text-align: center; vertical-align: middle;">X</th>
      </tr>
      <tr>
        <th>Course #</th>
        <th>Course Title</th>
        <th>Credit</th>
        <th>Hours</th>
        <th>Course #</th>
        <th>Course Title</th>
        <th>Credit/ECTS</th>
        <th>Hours</th>
      </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['course_1_number'];?></td>
            <td><?php echo $row['course_1_title'];?></td>
            <td><?php echo $row['course_1_credit'];?></td>
            <td><?php echo $row['course_1_hour'];?></td>
            <td><?php echo $row['course_2_number'];?></td>
            <td><?php echo $row['course_2_title'];?></td>
            <td><?php echo $row['course_2_credit'];?></td>
            <td><?php echo $row['course_2_hour'];?></td>
            <td><?php echo "<img src=\"img/" . $row['status'] . ".png\" width=\"24\">";?></td>
            <td id="remove" style="font-weight: bold;"><input type="hidden" value="<?=$row['course_id']?>">X</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php
    } else {
?>
<div style="text-align: center; font-weight: bold;">No Result Found...</div>
<?php
    }
}
?>