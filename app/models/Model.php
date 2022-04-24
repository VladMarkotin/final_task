<?php
namespace App\Model;


use Kernel\DB\DBClass as DBClass;

class Model
{
    private $dbh = null;

    public function __construct()
    {
        //var_dump(class_exists(DBClass::class));
        $this->dbh = DBClass::getCnnection();
    }

    public function getDbh()
    {
        return $this->dbh;
    }
}