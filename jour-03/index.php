<?php
include "class/Student.php";
include "class/Floor.php";
include "class/Grade.php";
include "class/Room.php";
include "function.php";



/*test job 5*/


$grade = findOneGrade(4);
$students = $grade->getStudents();

$room = findOneRoom(6);

$grades = $room->getGrades();


$floor = findOneFloor(2);

$rooms = $floor->getRooms();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>
</head>
<body>
    <h1>Student list </h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Nom complet</th>
            <th>Date de naissance</th>
            <th>Genre</th>
        </tr>
        <?php foreach ($students as $student) { ?>
            <tr>
                <td><?php echo $student->getId(); ?></td>
                <td><?php echo $student->getEmail(); ?></td>
                <td><?php echo $student->getFullname(); ?></td>
                <td><?php echo $student->getBirthdate(); ?></td>
                <td><?php echo $student->getGender(); ?></td>
            </tr>
        <?php } ?>
    </table>
    <h1>Grade list</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Room_ID</th>
            <th>Name</th>
            <th>Year</th>

        </tr>
        <?php foreach ($grades as $gradeBis) { ?>
            <tr>
                <td><?php echo $gradeBis->getId(); ?></td>
                <td><?php echo $gradeBis->getRoom_id(); ?></td>
                <td><?php echo $gradeBis->getName(); ?></td>
                <td><?php echo $gradeBis->getYear(); ?></td>
            </tr>
        <?php } ?>
    </table>


    <h1>Room list </h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>floor_id</th>
            <th>Name</th>
            <th>Capacity</th>
        </tr>

        <?php foreach ($rooms as $roombis) { ?>
            <tr>
                <td><?php echo $roombis->getId(); ?></td>
                <td><?php echo $roombis->getFloorId(); ?></td>
                <td><?php echo $roombis->getName(); ?></td>
                <td><?php echo $roombis->getCapacity(); ?></td>

            </tr>
        <?php } ?>
    </table>


</body>
</html>

<?php
/* test Job 4 */ 



/*
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

*/



          /* test job 1, 2, 3 */

/*
$student = new Student(1, 1, "email@email.com", "Terry Cristinelli","1990-01-18","Male");
$student2 = new Student();

echo $student ;
echo $student2;
*/
/*
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