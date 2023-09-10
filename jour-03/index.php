<?php
include "class/Student.php";

$student = new Student(302, 7, "clem@gmail.com", "clem macht","22/03/92","Male");
$student2 = new Student();

echo $student ;
echo $student2;
?>