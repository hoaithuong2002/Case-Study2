<?php


namespace App\Model;
use PDO;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn ='mysql:host=localhost;dbname=product_management;charset=utf8';
        $this->user = 'root';
        $this->password = 'Hoaithuong2105@';
    }

    public function connect()
    {
        try {
            $product = new PDO($this->dsn,$this->user,$this->password);
            Echo 'kết nối thành công ';
            return $product;
        }catch (\Exception $e){
            echo $e->getMessage();
        }
}
}