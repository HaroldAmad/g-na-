<?php
require_once "backend/includes/profile_model.inc.php";
require_once "backend/includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G! Tara Na! About</title>
    <style>
      #descriptionInput {
        display: none; /* Initially hide the input area */
      }
    </style>
    <link rel="stylesheet" type="text/css" href = "style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="user">
<a href="backend/includes/logout.inc.php">Logout</a>
  <h1>
      <?php
      session_start();
      $username = get_info($pdo, $_SESSION["user_id"]);
      echo $username["username"];
      ?>
  </h1>
  <h2>
      <?php
      $email = get_email($pdo, $_SESSION["user_id"]);
      echo $email["email"];
      ?>
  </h2>
  <h3>
      <?php
      $profile_text = get_description($pdo, $_SESSION["user_id"]);
      echo $profile_text["profile_text"];
      ?>
  </h3>
  <?php
  if (empty($profile_text)) {
      // If the user does not have a profile text, display the input field
      echo '
      <form action="backend/includes/profile.inc.php" method="post">
          <input type="text" name="profile_text" placeholder="Enter your profile text">
          <button type="submit" name="submit_profile">Submit</button>
      </form>';
  }
  ?>

  <div id="descriptionDisplay">
    <p>User Description: <span id="descriptionText">.</span></p>
    <button onclick="showEdit()">Edit</button>
  </div>
  <form action="backend/includes/profileupdate.inc.php" method="post">
    <div id="descriptionInput">
      <textarea name="profile_text" id="descriptionTextarea"></textarea>
      <button type ="Submit" onclick="saveDescription()">Save</button>
    </div>
  </form>
    <div class="navbar">
        <a href="../index.php">
            <img src="../srcs/pictures/icon.png" alt="Icon">
        </a>
        <p> G! Tara Na! </p>    
        <div class="right_side">
            <a href="../index.php">Home</a>
            <a href="../srcs/about.html">About</a>
            <a href="../srcs/instructions.html">How Does it Work</a>
            <div class="icon_circle">
                <a href="../srcs/backend/login.php"> 
                <i class="fa fa-user icon"></i>
                </a>
            </div>
        </div>   
    </div>

    <header></header>

    <div class="header__wrapper">
        <div class="cols__container">
          <div class="left__col">


            <div class="img__container">
                <img src="pictures/profile.png" alt="Sharmaine Rey" />
                <span></span>
              </div>
            
            <!--<div class="user_socials">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <i class="fab fa-facebook icon"></i> Facebook </li>
                    <li class="list-group-item"> <i class="fab fa-instagram icon"></i> Instagram </li>
                    <li class="list-group-item"> <i class="fab fa-twitter icon"></i> Twitter </li>
                  </ul>
                  
                <ul>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                  </ul>
            </div>-->

            <div class="user_info">

                <p> <i class="fa fa-envelope icon"> </i> sharmaine@gmail.com </p>
                <br class="br">
                <div class="bio">
                    <p>
                      Hey there! I'm Sharmaine Rey, a self-proclaimed chord enthusiast on a perpetual quest for the perfect strum. 
                    </p>
                </div>
                <div class="profile_tag_container">
                    <h3> <i class="fa fa-music icon"> </i>Interests </h3>
                    <div class="profile_tag_section">
                        <div class="profile_tag"> <p> Guitarist </p> </div>
                        <div class="profile_tag"> <p> DJ </p> </div>
                    </div>
                </div>
                <div class="">
                    <h3> <i class="fa fa-link icon"> </i>Socials </h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <i class="fab fa-facebook icon"></i> Facebook </li>
                        <li class="list-group-item"> <i class="fab fa-instagram icon"></i> Instagram </li>
                        <li class="list-group-item"> <i class="fab fa-twitter icon"></i> Twitter </li>
                      </ul>
                </div>
            </div>
          </div>
          <div class="right__col">
            <h1> Sharmaine Rey </h1>
            <br class="br">

           <!-- <div class="bio">
                <p>
                  Hey there! I'm Sharmaine Rey, a self-proclaimed chord enthusiast on a perpetual quest for the perfect strum. Born into a family where music was as essential as air, my journey with the guitar started as a curious exploration and has evolved into a heartfelt pursuit of harmony.
                </p>
            </div>
            <br class="br">-->

            <!--<nav>
              <ul>
                <li><a href="">Favourite Chords</a></li>
              </ul>
              <button>Follow</button>
            </nav>-->

            <h2> Favourite Chords </h2>
            <div class="favourite_chords_cards">
                <div class="row row-cols-1 row-cols-md-3 g-3">
                    <div class="col">
                      <div class="card">
                        <img id="favourite_chords" src="chords/majors/C.svg" class="card-img-top" alt="...">
                        <!--<div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>-->
                      </div>
                    </div>
    
                    <div class="col">
                      <div class="card">
                        <img id="favourite_chords" src="chords/majors/e.svg" class="card-img-top" alt="...">
                        <!--<div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>-->
                      </div>
                    </div>
    
                    <div class="col">
                      <div class="card">
                        <img id="favourite_chords" src="chords/majors/g.svg" class="card-img-top" alt="...">
                        <!--<div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer">
                          <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>-->
                      </div>
                    </div>
                    

            </div>           
            
  
            <!--<div class="photos">
              <img src="img/img_1.avif" alt="Photo" />
              <img src="img/img_2.avif" alt="Photo" />
              <img src="img/img_3.avif" alt="Photo" />
              <img src="img/img_4.avif" alt="Photo" />
              <img src="img/img_5.avif" alt="Photo" />
              <img src="img/img_6.avif" alt="Photo" />
            </div>-->
          </div>
        </div>
      </div>
    </div>
</body>
<script>
  function showEdit() {
    // Hide display area, show input area
    document.getElementById("descriptionDisplay").style.display = "none";
    document.getElementById("descriptionInput").style.display = "block";

    // Set textarea value to current description
    var currentDescription = document.getElementById("descriptionText").innerText;
    document.getElementById("descriptionTextarea").value = currentDescription;
  }

  function saveDescription() {
    // Get the new description from the textarea
    var newDescription = document.getElementById("descriptionTextarea").value;

    // Update the displayed description
    document.getElementById("descriptionText").innerText = newDescription;

    // Hide input area, show display area
    document.getElementById("descriptionInput").style.display = "none";
    document.getElementById("descriptionDisplay").style.display = "block";
  }
</script>
</html>