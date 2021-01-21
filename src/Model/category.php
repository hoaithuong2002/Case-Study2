<?php


namespace App\Model;


class category
{
    protected $categoryID;
    protected $categoryName;
    protected $textDescription;
    protected $htmlDescription;
    protected $image;

    /**
     * category constructor.
     * @param $categoryID
     * @param $categoryName
     * @param $textDescription
     * @param $htmlDescription
     * @param $image
     */
    public function __construct($categoryID, $categoryName, $textDescription, $htmlDescription, $image)
    {
        $this->categoryID = $categoryID;
        $this->categoryName = $categoryName;
        $this->textDescription = $textDescription;
        $this->htmlDescription = $htmlDescription;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    /**
     * @param mixed $categoryID
     */
    public function setCategoryID($categoryID)
    {
        $this->categoryID = $categoryID;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return mixed
     */
    public function getTextDescription()
    {
        return $this->textDescription;
    }

    /**
     * @param mixed $textDescription
     */
    public function setTextDescription($textDescription)
    {
        $this->textDescription = $textDescription;
    }

    /**
     * @return mixed
     */
    public function getHtmlDescription()
    {
        return $this->htmlDescription;
    }

    /**
     * @param mixed $htmlDescription
     */
    public function setHtmlDescription($htmlDescription)
    {
        $this->htmlDescription = $htmlDescription;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}