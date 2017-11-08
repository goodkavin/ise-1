<?php
include 'connect.php';

$course_institute = $_POST['course_institute'];
$course_number = $_POST['course_number'];
$course_title = $_POST['course_title'];
$ins_country = $_POST['ins_country'];
$ins_name = $_POST['ins_name'];
$program = $_POST['program'];

$sql = "SELECT * FROM course WHERE id > 0";

if($course_institute=="ise") $course = "course_1_"; else $course = "course_2_";
if($course_number!=null) $sql = $sql . " AND " . $course . "number LIKE '%{$course_number}%'";
if($course_title!=null) $sql = $sql . " AND " . $course . "title LIKE '%{$course_title}%'";
if($ins_country!=null) $sql = $sql . " AND course_2_country = '" . $ins_country . "'";
if($ins_name!=null) $sql = $sql . " AND course_2_university LIKE '%{$ins_name}%'";
if($program!=null && $program!="all") $sql = $sql . " AND program = '" . $program . "'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
?>

<table class="table table-bordered table-striped">
	<thead>
        <tr>
            <th colspan="3" style="border-bottom: 0px; border-radius: 6px 0 0 0;">Chulalongkorn</th>
            <th colspan="4" style="border-bottom: 0px;">External Institution</th>
            <th rowspan="2" style="border-bottom: 0px; text-align: center; vertical-align: middle;">Date</th>
            <th rowspan="2" style="border-bottom: 0px; border-radius: 0 6px 0 0; text-align: center; vertical-align: middle;">Status</th>
        </tr>
		<tr>
			<th>Program</th>
			<th>Course #</th>
            <th>Course Title</th>
			<th>Course #</th>
			<th>Course Title</th>
			<th>Institution</th>
			<th>Country</th>
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
            <td><?php echo $row['course_2_university'];?></td>
            <td><?php echo $row['course_2_country'];?></td>
            <td><?php echo $row['approve'];?></td>
            <td><?php echo "<img src=\"img/" . $row['status'] . ".png\" width=\"24\">";?></td>
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
?>