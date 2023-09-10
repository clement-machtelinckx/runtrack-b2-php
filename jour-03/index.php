<?php
include "class/Student.php";
include "class/Floor.php";
include "class/Grade.php";
include "class/Room.php";

$student = new Student(1, 1, "email@email.com", "Terry Cristinelli","1990-01-18","Male");
$student2 = new Student();

echo $student ;
echo $student2;

$grade = new Grade(1, 8, "Bachelor 1", "2023-01-09");
$grade2 = new Grade();

echo $grade;
echo $grade2;

$room = new Room(1, 1, "RDC Food and Drink", 90);
$room2 = new Room();

echo $room;
echo $room2;

$floor = new Floor(1, "Rez de chaussée", 0);
$floor2 = new Floor();

echo $floor;
echo $floor2;
?>