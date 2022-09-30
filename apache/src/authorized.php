<?php
    if (!isset($_GET['role'])) {
        echo 'Nothing new has been done for you yet';
        exit(0);
    }
    else {
        $role = $_GET['role'];
        if ($role == 'admin'){
            echo "<a href='admin.php'>Get List of Users</.a>";
            echo "<br>";
            echo "<a href='terminal.php'>Administrator's Terminal</.a>";
        }
    }
