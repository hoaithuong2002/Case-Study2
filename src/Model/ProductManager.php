<?php


namespace App\Model;


class ProductManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAllProduct()
    {
        $statement = 'SELECT * FROM products ';
        $data = $this->dbConnect->query($statement);
        $products = [];
        foreach ($data as $item) {
            $products[] = new Product($item['productCode'], $item['productName'], $item['productCategory'], $item['productVerdor'],$item['productDescription'],$item['quantityInStock'],$item['buyPrice']);
        }
        return $products;
    }

    public function addProduct($product)
    {
        $productCode = $product->getProductCode();
        $productName = $product->getProductName();
        $productCategory = $product->getProductCategory();
        $productVerdor = $product->getProductVerdor();
        $productDescription = $product->getProductDescription();
        $quantityInStock = $product->getQuantityInStock();
        $buyPrice = $product->getBuyPrice();
        $sql = "INSERT INTO `products`(`productCode`, `productName`, `productCategory`, `productVerdor`, `productDescription`, `quantityInStock`, `buyPrice`) VALUES (`productCode`, `productName`, `productCategory`, `productVerdor`, `productDescription`, `quantityInStock`, `buyPrice`)";
             $this->dbConnect->execute($sql);
    }

    public function deleteProduct($productCode)
    {
        $sql = "DELETE FROM `products` WHERE productCode='$productCode'";
        $this->dbConnect->execute($sql);
    }

    public function updateProduct($productCode , $product)
    {
        $productName = $product->getProductName();
        $productCategory = $product->getProductCategory();
        $productVerdor = $product->getProductVerdor();
        $productDescription = $product->getProductDescription();
        $quantityInStock = $product->getQuantityInStock();
        $buyPrice = $product->getBuyPrice();
        $sql = "UPDATE `products` SET `productCode`=$productCode,`productName`=$productName,`productCategory`=$productCategory,`productVerdor`=$productVerdor, `productDescription`=$productDescription,`quantityInStock`=$quantityInStock,`buyPrice`=$buyPrice) WHERE productCode ='$productCode'";
        $this->dbConnect->execute($sql);
    }

}