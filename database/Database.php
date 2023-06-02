<?php namespace Database;

use PDO;
use PDOException;

class Database
{
    /** @var string Server's username */
    private string $_user = 'root';

    /** @var string Server's password */
    private string $_password = '';

    /** @var string Database's name */
    private string $_database = 'mercado-livro';

    /**
     * @return PDO
     */
    public function connect(): PDO
    {
        try
        {
            $pdo = new PDO("mysql:host=localhost;port=3306;dbname=" . $this->_database, $this->_user, $this->_password);
            return $pdo;
        }
        catch(PDOException $e)
        {
            die("
                <body style='width: 100vw; height: 100vh; text-align: center; padding: 5rem 0'>
                    <h1 style='margin: 5rem auto;'> Sorry! Connection Error, come back later. </h1>
                    <p>We're under maintenance.</p>
                </body>
            ");
        }
    }

    /**
     * @param string user's email
     * 
     * @return object|false
     */
    public function find_user_by_email(string $email): object|false
    {
        $pdo = $this->connect();

        $stmt = $pdo->prepare("SELECT * from users where email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetchObject();

        $pdo = null;

        return $user;
        
    }
}