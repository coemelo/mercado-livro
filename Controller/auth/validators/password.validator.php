<?php require_once('../../database/Database.php');

    function check_password($email, $password): bool
    {
        $db = new Database();
        $pdo = $db->connect();

        $stmt = $pdo->prepare("SELECT * from users where email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetchObject();

        if(! password_verify($password, $user->password)): die(header("location: ../../../index.php?error=incorretField")); endif;

        return true;
    }
?>