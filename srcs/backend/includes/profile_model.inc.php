<?php
declare(strict_types=1);

function get_info(object $pdo, string $userId)
{
    $query = "SELECT username FROM users WHERE user_id = :user_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $userId);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $userId)
{
    $query = "SELECT email FROM users WHERE user_id = :user_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $userId);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_description(object $pdo, int $user_id, string $description) 
{
    $query = "INSERT INTO user_description (user_id, profile_text) VALUES (:user_id, :description);";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->bindParam(":description", $description);
    $stmt->execute();
}

function get_description(object $pdo, string $userId)
{
    $query = "SELECT profile_text FROM user_description WHERE user_id = :user_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $userId);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function update_description(object $pdo, int $user_id, string $description) 
{
    $query = "UPDATE user_description SET profile_text = :description WHERE user_id = :user_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
}
?>
