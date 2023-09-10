<?php
include "class/Student.php";
include "class/Floor.php";
include "class/Grade.php";
include "class/Room.php";
include "function.php";



$student = findOneStudent(301);

if ($student) {
    echo $student; // Cela affichera les détails de l'étudiant
} else {
    echo "Aucun étudiant trouvé avec cet ID.";
}

$grade = findOneGrade(6);

if ($grade) {
    echo $grade; // Cela affichera les détails de l'étudiant
} else {
    echo "Aucun étudiant trouvé avec cet grade";
}

$floor = findOneFloor(2);

if ($floor) {
    echo $floor; // Cela affichera les détails de l'étudiant
} else {
    echo "Aucun étudiant trouvé avec cet grade";
}

$room = findOneRoom(2);

if ($room) {
    echo $room; // Cela affichera les détails de l'étudiant
} else {
    echo "Aucun étudiant trouvé avec cet grade";
}


/*
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
echo $floor2;*/

?>