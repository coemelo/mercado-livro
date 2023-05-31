<?php

class Database
{
    private $_user = 'root';
    private $_password = '';
    private $_database = 'mercado-livro';

    public function connect()
    {
        try
        {
            $pdo = new PDO("mysql:host=localhost;port=3306;dbname=" . $this->_database, $this->_user, $this->_password);
            return $pdo;
        }
        catch(PDOException $e)
        {
            die('Connection Error!');
        }
    }

    public function login()
    {
        header("location: ../../public/home.php");
    }

    public function exit()
    {
        $pdo = null;
    }
}