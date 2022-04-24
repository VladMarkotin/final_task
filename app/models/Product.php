<?php
namespace App\Model;


use App\Model\Model;

class Product extends Model
{
    public function product()
    {
        $dbh   = $this->getDbh();
        $query = "SELECT * FROM products";
        $result = [];
        foreach ($dbh->query($query) as $row) {
            $result[] = $row['name'];
            $result[] = $row['details'];
            $result[] = $row['price'];
        }
    
        return $result;
    }
}