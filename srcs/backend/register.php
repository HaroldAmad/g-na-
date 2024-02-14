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

    <div class="landingpage_signup">
        <div class="music_player">
            <div class="">
                <h1> SIGN UP </h1>
                <form action="includes/signup.inc.php" method="post">
                    
                    <div class="signup">
                        <i class="fa fa-user icon"></i>
                        <!--<label for="username">Username: </label>-->
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    
                    <div class="signup">
                        <i class="fa fa-envelope icon"></i>
                        <!--<label for="email">Email: </label>-->
                        <input type="email" name="email" placeholder="E-Mail" required>
                    </div>
                    
                    <div class="signup">
                        <i class="fa fa-key icon"></i>
                        <!--<label for="pwd">Password: </label>-->
                        <input type="password" name="pwd" placeholder="Password" required>    
                    </div>
                    <button type="submit">Submit</button>
                </form>
                <?php
                check_signup_errors();
                ?>
                <img src="../pictures/12.png">    
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>