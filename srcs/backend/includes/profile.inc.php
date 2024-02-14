<?php

declare(strict_types=1);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['profile_text'])) {
    session_start();
    $profile_text = $_POST['profile_text'];
    $user_id = $_SESSION["user_id"];
    require_once 'dbh.inc.php';
    require_once 'profile_model.inc.php';
    require_once 'profile_contr.inc.php';

    create_user_description($pdo, $user_id, $profile_text);
    header("Location: ../../profile.php");
} else {
    http_response_code(400); 
    echo "Error: Profile text not provided.";
}
?>
