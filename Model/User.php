<?php namespace Models;

class User
{
    /** @var string Actual user's email */
    private string $_email;

    /** @var string Actual user's password */
    private string $_password;

    /**
     * @param mixed The variable's name to be set
     * @param mixed The new variable's value
     * 
     * @return void
     */
    public function __set($variable, $value): void
    {
        $this->$$variable = $value;
    }

    /**
     * @param mixed The variable's name to get
     * 
     * @return mixed
     */
    public function __get($variable): mixed
    {
        return $this->$$variable;
    }
}