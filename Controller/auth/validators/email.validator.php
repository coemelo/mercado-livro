2<?php 
    function validateEmail(string $email): void
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($email, FILTER_SANITIZE_EMAIL)): die(header("location: ../../../index.php?error=invalidInput")); endif;
    }
?>