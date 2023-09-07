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

if (isset($_GET['input-email-student'])) {
    // Récupérez la valeur de l'adresse e-mail à partir de $_GET
    $email = $_GET['input-email-student'];

    $sql = "SELECT id, grade_id, email, fullname, birthdate, gender FROM student WHERE email = :email";

    $sth = $conn->prepare($sql);
    $sth->bindParam(':email', $email, PDO::PARAM_STR);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
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
        <input type="text" name="input-email-student" placeholder="Enter student's email">
        <button type="submit">Search</button>
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
</html>
