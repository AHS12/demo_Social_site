<?php
/**
 * Created by PhpStorm.
 * User: MD AZIZUL HAKIM
 * Date: 30/11/2017
 * Time: 06:51 PM
 */

//using PDO

$dsn = 'mysql:host = localhost; dbname = tweety';
$userName = 'root';
$password = '';


try {
    $pdo = new PDO($dsn, $userName, $password);
} catch (PDOException $exception) {
    echo "Connection Error!!" . $exception->getMessage();
}

?>