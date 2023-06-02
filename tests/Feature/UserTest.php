<?php

use Validators\Login;
use Models\User;

it('Should be able to login', function()
{
    $user = new User;
    $user->__set("email", "admin@mercadolivro.com");
    $user->__set("password", password_hash("adminadmin", PASSWORD_BCRYPT));

    $login = new Login;
    $login->login($user->__get("email"), $user->__get("password"));
});

todo('Should be able to signup');