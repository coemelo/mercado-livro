<?php
    require_once('../../database/Database.php');
    require_once('./validators/null.validator.php');
    require_once('./validators/email.validator.php');
    require_once('./validators/user.validator.php');
    require_once('./validators/password.validator.php');

    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    // Connect with the database
    $db = new Database();
    $db->connect();

    // Check if empty inputs
    checkNull([$user_email, $user_password]);

    // Validate user's inputs
    validateEmail($user_email);

    // Check if user exists
    user_exists($user_email);

    // Check password
    check_password($user_email, $user_password);

    // loggin, create a session and go to home.php
    $db->login();
    $db->exit();
    
?>