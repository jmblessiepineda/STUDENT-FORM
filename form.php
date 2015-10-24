<?php 
	$firstName = $_POST['fname'];
	$middleName = $_POST['mname'];
	$lastName = $_POST['lname'];
	$gen = $_POST['gender'];
	$month = $_POST['filter'];
	$day = $_POST['day'];
	$year = $_POST['year'];
	$course = $_POST['program'];
	$studentType = $_POST['type'];
	$add = $_POST['address'];
 ?>

First Name: <strong><?php echo $firstName;  ?></strong><br />
Middle Name: <strong><?php echo $middleName;  ?></strong><br />
Last Name: <strong><?php echo $lastName;  ?></strong><br />
Gender: <strong><?php echo $gen;  ?></strong><br />
Birthday: <strong><?php echo $month . " " . $day . ", " . $year;  ?></strong><br />
Course <strong><?php echo $course;  ?></strong><br />
Student Type: <strong><?php echo $studentType;  ?></strong><br />
Address: <strong><?php echo $add;  ?></strong><br />

