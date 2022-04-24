<?php
namespace Kernel\DB;

require_once 'Settings/init.php';

class DBClass
{
    private static $dbh = null;

    private function __construct()
    {}

    private function __clone()
    {}

    public static function getCnnection()
    {
        if(self::$dbh){
            return self::$dbh;
        }
        return self::$dbh = new \PDO('mysql:host=localhost;
                                     dbname=final',
                                     DB_USER,
                                     DB_PASSWORD
                                    );
    }
}