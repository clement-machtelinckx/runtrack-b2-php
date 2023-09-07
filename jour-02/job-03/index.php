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

if (isset($_GET['input-email']) && isset($_GET['input-fullname']) && isset($_GET['input-birthdate']) && isset($_GET['input-grade-id'])) {
    // Récupérez la valeur de l'adresse e-mail à partir de $_GET
    
    $email = $_GET['input-email'];
    $name = $_GET['input-fullname'];
    $date = $_GET['input-birthdate'];
    $grade = $_GET['input-grade-id'];
    $genre = $_GET['genre'];
    $sql = "INSERT INTO student (grade_id, email, fullname, birthdate, gender)
    VALUES (:grade, :email, :name, :date, :genre)";

 
try {
    $sth = $conn->prepare($sql);
    $sth->bindParam(':grade', $grade, PDO::PARAM_INT);
    $sth->bindParam(':email', $email, PDO::PARAM_STR);
    $sth->bindParam(':name', $name, PDO::PARAM_STR);
    $sth->bindParam(':date', $date, PDO::PARAM_STR);
    $sth->bindParam(':genre', $genre, PDO::PARAM_STR);

    $sth->execute();
    echo "Données insérées avec succès.";
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
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
        <input type="email" name="input-email" placeholder="Enter student's email">
        <input type="text" name="input-fullname" placeholder="Enter student's name">
        <input type="date" name="input-birthdate" placeholder="Enter student's birthdate">
        <input type="number" name="input-grade-id" placeholder="Enter student's grade id">
    <label for="genre">Genre :</label>
    <select name="genre">
        <option value="homme">Male</option>
        <option value="femme">Female</option>
    </select>
        <button type="submit">Search</button>
    </form>
</body>


