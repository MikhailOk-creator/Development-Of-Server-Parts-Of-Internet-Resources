<html lang="en">
<head>
<title>Hello world page</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<h1>Таблица пользователей данного продукта</h1>
<table>
    <tr><th>Id</th><th>Name</th><th>Surname</th></tr>
<?php
$mysqli = new mysqli("database", "user", "password", "appDB");
$result = $mysqli->query("SELECT * FROM users");
foreach ($result as $row){
    echo "<tr><td>{$row['ID']}</td><td>{$row['name']}</td><td>{$row['surname']}</td></tr>";
}
?>
</table>
<h3>Practice 2</h3>
<ul>
    <li><a href="Practice_2/1_draw/drawer.php">Draw (task 1)</a></li>
    <li><a href="Practice_2/2_sort/sort.php">Sort (task 2)</a></li>
    <li><a href="Practice_2/3_admin/admin.php">Administration Page (task 3)</a></li>
</ul>
<?php
phpinfo();
?>
</body>
</html>