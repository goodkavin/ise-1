<?php
require 'connect.php';

$data = array();

$query = trim($_POST['query']);
$key = trim($_POST['key']);

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
            <td id="add"><input type="hidden" value="<?=$row['id']?>">Take</td>
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
    $sender = $_POST['sender'];
    date_default_timezone_set('Asia/Bangkok');
    $stamp = date("Y-m-d H:i:s");


    $sql = "INSERT INTO course VALUES ('', '$program', '$course_1_number', '$course_1_title', '$course_1_credit', '$course_1_hour', '$course_2_number', '$course_2_title', '$course_2_detail', '$course_2_credit', '$course_2_hour', '$course_2_university', '$course_2_country', '0', '0', '', 'hold', '$stamp')";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>