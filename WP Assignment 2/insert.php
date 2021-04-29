<?php

global $er_no;
global $sname;
global $semester;
global $gender;
global $qualification;



$mysqli = new mysqli("localhost", "root", "", "db2");

if(isset($_POST['submit'])){

$er_no = $mysqli->real_escape_string($_POST['er_no']);
$sname = $mysqli->real_escape_string($_POST['sname']);
$semester = $mysqli->real_escape_string($_POST['semester']);
$gender = $mysqli->real_escape_string($_POST['gender']);
$qualification = $mysqli->real_escape_string($_POST['qualification']);

$query = "INSERT INTO `user` (er_no, sname, semester, gender, qualification) VALUES ('$er_no','$sname','$semester','$gender','$qualification')";

$mysqli->query($query);
$mysqli->close();
echo "Entered data successfully\n";

}	