<?php

/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 30/11/2017
 * Time: 07:09 PM
 */
class User
{
    protected $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function checkInput($string)
    {
        $string = htmlspecialchars($string);
        $string = trim($string);
        $string = stripcslashes($string);


        return $string;
    }


    /**
     * @param $email
     * @param $password
     */
    public function login($email, $password)
    {

//        $stmt = $this->pdo->prepare("SELECT 'user_id' FROM 'users' WHERE 'email' = :email AND 'password' = :password");
//        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
//        $stmt->bindParam(":password", md5($password), PDO::PARAM_STR);
//        $stmt->execute();
//
//        $user = $stmt->fetch(PDO::FETCH_OBJ);
//        $count = $stmt->rowCount();
//
//        if ($count > 0) {
//            $_SESSION['user_id'] = $user->user_id;
//            header("Location:home.php");
//        } else {
//            return false;
//        }
//
//        return true;
    }

}