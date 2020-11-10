<?php
include("dbconnection/dbconnection.php");
include("model/students.php");
$student = new Students;
$getStudents = $student->getStudents ();
echo "<pre>";
print_r($getStudents);
echo "</pre>";
?>
