<?php
declare(strict_types=1);

namespace App\Connection;

abstract class Connection
{
    public static function getConnection(): \PDO
    {
        // metodo PDO para conceccion con database
       $database = 'db_store';
       $username = 'root';
       $password = '123456';

       return new \PDO('mysql:host=localhost;dbname='.$database,$username,$password);
    }
}

