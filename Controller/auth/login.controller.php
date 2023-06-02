<?php require_once __DIR__ . '/../../vendor/autoload.php';

use Validators\Login;

$user_email = $_POST['email'];
$user_password = $_POST['password'];

Login::login($user_email, $user_password);
    
?>