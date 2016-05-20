<?php

namespace Model;

use Doctrine\DBAL\DriverManager;

class Model
{
    public static function getConnection()
    {    
        $connParams = array(
            'dbname' => 'contact',
            'user' => 'root',
            'password' => 'apdi',
            'host' => '192.168.0.19',
            'driver' => 'pdo_mysql'
        );

        return DriverManager::getConnection($connParams);
    }
}

