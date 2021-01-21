<?php


namespace App\Model;


class CategoryManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function GetAllCategory()
    {
        $statement = "SELECT * FROM categories ";
        $data = $this->dbConnect->query($statement);
        echo "<pre>";
        print_r((isset($data[0])) ? $data[0] : 'Null');
        $categories = [];
        foreach ($data as $item) {
            $categories[] = new category ($item["categoryID"], $item['categoryName'], $item['textDescription'], $item["htmlDescription"], $item["image"]);
        }
        return $categories;
    }

    public function addCategory($category)
    {
        $categoryID = $category->getCategoryID();
        $categoryName = $category->getCategoryName();
        $textDescription = $category->getTextDescription();
        $htmlDescription = $category->getHtmlDescription();
        $image = $category->getImage();
        $sql = "INSERT INTO `categories`(`categoryID`, `categoryName`, `textDescription`, `htmlDescription`, `image`) VALUES (`categoryID`, `categoryName`, `textDescription`, `htmlDescription`, `image`)";
        $this->dbConnect->execute($sql);
    
    }

    public function deleteCategory($categoryID)
    {
        $sql = "DELETE FROM `categories` WHERE categoryID='$categoryID'";
        $this->dbConnect->execute($sql);
    }
    public function updateCategory($categoryID, $category)
    {
        $categoryName = $category->getcategoryName();
        $textDescription = $category->getDescription();
        $htmlDescription = $category->getHtmlDescription();
        $image = $category->getImage();
        $sql = "UPDATE `categories` SET `categoryName`='$categoryName',`textDescription`='$textDescription' WHERE categoryID='$categoryID'";
        $this->dbConnect->execute($sql);
    }

    public function getCategory($categoryID)
    {
        $sql = "SELECT * FROM categories where categoryID='$categoryID'";
        return $this->dbConnect->query($sql);
    }
}