<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G Na!</title>
</head>
<body>
    <form action="includes/signup.inc.php" method="post">
        <label for="username">Username: </label>
        <input type="text" name="username" placeholder="Username" required>
        <label for="email">Email: </label>
        <input type="email" name="email" placeholder="E-Mail" required>
        <label for="pwd">Password: </label>
        <input type="password" name="pwd" placeholder="Password" required>
        <button type="submit">Submit</button>
    </form>
    <?php
    check_signup_errors();
    ?>
</body>
</html>