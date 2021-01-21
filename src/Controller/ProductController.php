<?php

namespace App\Controller;

use app\Model\ProductManager;
use app\Model\Product;


class ProductController
{
    public $process;

    public function __construct()
    {
        $connection = new DBConnection();
        $this->process = new ProductDB($connection->connect());
    }

    public function addProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'src/View/addProduct.php';
        } else {

            $name = $_POST['name'];
            $category = $_POST['category'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $date = $_POST['date'];
            $description = $_POST['description'];

            $product = new Product($name, $category, $price, $amount, $date, $description);
            $this->process->addProduct($product);
            $message = 'Add Completed';
            include 'src/View/addProduct.php';
        }
    }

    public function ViewProduct()
    {
        $products = $this->process->listProduct();
        include 'src/View/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->process->get($id);
            include 'src/View/delete.php';
        } else {
            $id = $_POST['id'];
            $this->process->delete($id);
            header('location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->process->get($id);
            include 'src/View/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['productCode'], $_POST['productName'], $_POST['productCategory'], $_POST['productVerdor'], $_POST['productDescription'], $_POST['quantityInStock'], $_POST['buyPrice']);
            $this->process->update($id, $product);
            header('location: index.php');
        }
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $keyword = $_REQUEST['key'];
            var_dump($keyword);
            $productSearch = $this->process->search($keyword);
            include "src/View/search.php";
        }
    }
}