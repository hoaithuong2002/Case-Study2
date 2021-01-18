<?php


class Product
{
    protected $productCode;
    protected $productName;
    protected $productCategory;
    protected $productVendor;
    protected $productDescription;
    protected $quantityInStock;
    protected $buyPrice;

    /**
     * Product constructor.
     * @param $productCode
     * @param $productName
     * @param $productCategory
     * @param $productVendor
     * @param $productDescription
     * @param $quantityInStock
     * @param $buyPrice
     */
    public function __construct($productCode, $productName, $productCategory, $productVendor, $productDescription, $quantityInStock, $buyPrice)
    {
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->productCategory = $productCategory;
        $this->productVendor = $productVendor;
        $this->productDescription = $productDescription;
        $this->quantityInStock = $quantityInStock;
        $this->buyPrice = $buyPrice;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @param mixed $productCode
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }

    /**
     * @param mixed $productCategory
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;
    }

    /**
     * @return mixed
     */
    public function getProductVendor()
    {
        return $this->productVendor;
    }

    /**
     * @param mixed $productVendor
     */
    public function setProductVendor($productVendor)
    {
        $this->productVendor = $productVendor;
    }

    /**
     * @return mixed
     */
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * @param mixed $productDescription
     */
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
    }

    /**
     * @return mixed
     */
    public function getQuantityInStock()
    {
        return $this->quantityInStock;
    }

    /**
     * @param mixed $quantityInStock
     */
    public function setQuantityInStock($quantityInStock)
    {
        $this->quantityInStock = $quantityInStock;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * @param mixed $buyPrice
     */
    public function setBuyPrice($buyPrice)
    {
        $this->buyPrice = $buyPrice;
    }
}