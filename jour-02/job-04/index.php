<?php
$servername = "localhost";
$username = "root";
$password = "Clement2203$";
$dbname = "Ip_official";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie";
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

function find_all_students_grades($grade, $conn){
    $sql = "SELECT s.id, s.grade_id, s.email, s.fullname, s.birthdate, s.gender, s.grade_id
    FROM student AS s
    INNER JOIN grade ON s.grade_id = grade.id
    WHERE s.grade_id = :grade";

    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':grade', $grade, PDO::PARAM_INT);
    $stmt->execute();
    
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$result = [];

if (isset($_GET["input-grade-id"])){
    $grade = $_GET["input-grade-id"];
    $result = find_all_students_grades($grade, $conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input type="number" name="input-grade-id" placeholder="Enter student's grade id">
        <button type="submit">Enter</button>
    </form>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Grade</th>
            <th>Email</th>
            <th>Nom</th>
            <th>Birth date</th>
            <th>Gender</th>
        </tr>
        <?php foreach ($result as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['grade_id']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['fullname']; ?></td>
                <td><?php echo $row['birthdate']; ?></td>
                <td><?php echo $row['gender']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
