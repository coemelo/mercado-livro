<?php require_once('../../database/Database.php');

function user_exists(string $email): bool
{
    $db = new Database();

    $pdo = $db->connect();

    $stmt = $pdo->prepare("SELECT * from users where email = ?");
    $stmt->execute([$email]);
    $users = $stmt->fetchAll();

    if(empty($users)): die(header("location: ../../../index.php?error=incorrectField")); endif;

    return true;
}

?>