<?php
namespace app\model;

class Database{
    private $host = 'localhost';
    private $db  = 'teste';
    private $user = 'luki';
    private $password = '';
    private $charset = 'utf8mb4';

    private $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

}
