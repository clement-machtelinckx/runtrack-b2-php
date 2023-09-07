<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
        function find_all_student(){
            
        }
    ?>

<table border=1>
    <tr>
        <th>ID</th>
        <th>Grade</th>
        <th>Email</th>
        <th>Nom</th>
        <th>Birth date</th>
        <th>gender</th>

    </tr>
    <?php while($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
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