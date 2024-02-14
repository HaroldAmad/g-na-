<?php
require_once 'includes/config_session.inc.php';
require_once "includes/login_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href = "../style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="profile">
    
    <div class="navbar">
        <a href="../../index.php">
            <img src="../../srcs/pictures/icon.png" alt="Icon">
        </a>
        <p> G! Tara Na! </p>      
    </div>
        
    <div class="landingpage_login">
        <div class="music_player">
            <div class="">
                <h1> LOGIN </h1>
                <form action="includes/login.inc.php" method="post">
                    <div class="login">
                        <!--<label for="username">Username: </label>-->
                        <i class="fa fa-user icon"></i>
                        <input type="text" placeholder="Username" name="username">
                    </div>
                    <div class="login">
                        <!--label for="pwd">Password: </label>-->
                        <i class="fa fa-key icon"></i>
                        <input type="password" placeholder="Password" name="pwd">
                    </div>
                    <button type="submit">Login</button>
                </form>
                <a href="register.php">
                        <button type="submit">Sign Up</button>
                    </a>
                <?php
                check_login_errors();
                ?>
                <img src="../pictures/11.png">
                <!--<div>
                    <a href="register.php">Sign Up!</a>
                </div>-->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>