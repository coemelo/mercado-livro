<?php namespace Validators;

use Database\Database;

class Login
{

    /**
     * @param array the email and password sent by the user
     * 
     * @return void
     */
    public static function check_null_fields(array $params): void
    {
        foreach($params as $param):
            if(empty($param)): 
                die(header("location: ../../../index.php?error=nullparams")); 
            endif;
        endforeach;
    }

    /**
     * @param mixed the user's email
     * 
     * @return void
     */
    public static function validate_email($email): void
    {
        $clean_email = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!filter_var($clean_email, FILTER_VALIDATE_EMAIL)): 
            die(header("location: ../../../index.php?error=invalidInput")); 
        endif;
    }

    /**
     * @param string the user's email
     * 
     * @return void
     */
    public static function check_if_user_exists(string $email): void
    {
        $db = new Database;
        $user = $db->find_user_by_email($email);

        if(!$user):
            die(header("location: ../../../index.php?error=incorrectField")); 
        endif;
    }

    /**
     * @param string user's email
     * @param mixed user's password
     * 
     * @return void
     */
    public static function verify_password(string $email, $password): void
    {
        $db = new Database;
        $user = $db->find_user_by_email($email);

        if(!password_verify($password, $user->password)): 
            die(header("location: ../../../index.php?error=incorrectField")); 
        endif;
    }

    /**
     * @param mixed user's email
     * @param mixed user's password
     * 
     * @return void
     */
    public static function login($email, $password): void
    {
        self::check_null_fields([$email, $password]);
        self::validate_email($email);
        self::check_if_user_exists($email);
        self::verify_password($email, $password);

        header("location: ../../public/home.php");
    }
}