<?php


namespace App\Model;


class CustomerManager
{
  protected $dbConnect;


    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllCustomer()
    {
        $statement ="SELECT * FROM `customers`";
            $data = $this->dbConnect->query($statement);
        $customers = [];
        foreach ($data as $item) {
            $customers[] = new Student($item["customerNumber"],$item['customerName'],$item['contactLastName'],$item['email']);
        }
        return $customers;
    }
}