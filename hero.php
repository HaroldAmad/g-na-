<?php
require_once "includes/login_model.inc.php";
require_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G Na!</title>
</head>
<body>
    <a href="includes/logout.inc.php">Logout</a>
    <?php
    session_start();
    $info = get_info($pdo, $_SESSION["user_id"]);
    echo $info["username"];
    ?>
</body>
</html>