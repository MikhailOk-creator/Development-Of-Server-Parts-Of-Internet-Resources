<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/terminal_style.css" type="text/css">
    <title>Administration Page</title>
</head>
<body>
<div class="commandline-container">
    Terminal
    <div class="commandline">
        <form action="" method="post">
            <input name="command" class="input" type="text">
        </form>
        <div class="output">
            <?php
                $output = null;
                $ret_val = null;
                $forbidden_commands = ['rm rf /', 'rm --no-preserve-root -rfv /'];
                if (!empty($_POST['command'])) {
                    $command = $_POST['command'];
                    if (!in_array($command, $forbidden_commands)) {
                        exec($command, $output, $ret_val);
                        foreach ($output as $value) {
                            echo $value, " ";
                        }
                    }
                    else {
                        echo "Forbidden command!";
                    }
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>