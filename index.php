<?php
require "src/Model/DBConnect.php";
require "src/Model/category.php";
require "src/Model/CategoryManager.php";
require "src/Model/Product.php";
require "src/Model/ProductManager.php";
require "src/Model/Customers.php";
require "src/Model/CustomerManager.php";
$controller = new \App\Controller\ProductController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<div class="container">
    <a href="./index.php"><h1>Product</h1></a>
    <?php
    $page = isset($_REQUEST["page"]) ? $_REQUEST["page"] : null;
    switch ($page) {
        case "add":
            $controller->add();
            break;
        case "detail":
            $controller->detail();
            break;
        case "delete":
            $controller->delete();
            break;
        case "edit":
            $controller->edit();
            break;
        default:
            $controller->index();
    }
    ?>
</div>

</body>
</html>