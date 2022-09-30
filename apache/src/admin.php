<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Page</title>
    <style>span { margin: 10px; }</style>
</head>
<body>
<h1>List of users</h1>
<table>
    <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
    <?php
    $mysqli = new mysqli("db", "user", "password", "appDB");
    $result = $mysqli->query("SELECT * FROM users");
    foreach ($result as $row){
        echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
    }
    ?>
</table>
</body>
</html>