<?php


namespace App\Model;


class Customers
{
    protected $customerNumber;
    protected $customerName;
    protected $contactLastName;
    protected $contactFistName;
    protected $phone;
    protected $addressLine1;
    protected $addressLine2;
    protected $city;
    protected $state;
    protected $postalCode;
    protected $country;
    protected $creditLimit;

    public function __construct( $customerName, $contactLastName, $contactFistName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $creditLimit)
    {
        $this->customerName = $customerName;
        $this->contactLastName = $contactLastName;
        $this->contactFistName = $contactFistName;
        $this->phone = $phone;
        $this->addressLine1 = $addressLine1;
        $this->addressLine2 = ((!empty($addressLine2)) ? $addressLine2 : "");
        $this->city = $city;
        $this->state = $state;
        $this->postalCode = ((!empty($postalCode)) ? $postalCode : "");
        $this->country = $country;
        $this->creditLimit = ((!empty($creditLimit)) ? $creditLimit : "");
    }

    /**
     * @return mixed
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     * @param mixed $customerNumber
     */
    public function setCustomerNumber($customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerName($customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getContactLastName()
    {
        return $this->contactLastName;
    }

    /**
     * @param mixed $contactLastName
     */
    public function setContactLastName($contactLastName): void
    {
        $this->contactLastName = $contactLastName;
    }

    /**
     * @return mixed
     */
    public function getContactFistName()
    {
        return $this->contactFistName;
    }

    /**
     * @param mixed $contactFistName
     */
    public function setContactFistName($contactFistName): void
    {
        $this->contactFistName = $contactFistName;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param mixed $addressLine1
     */
    public function setAddressLine1($addressLine1): void
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return mixed
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }

    /**
     * @param mixed $addressLine2
     */
    public function setAddressLine2($addressLine2): void
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode): void
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCreditLimit()
    {
        return $this->creditLimit;
    }

    /**
     * @param mixed $creditLimit
     */
    public function setCreditLimit($creditLimit): void
    {
        $this->creditLimit = $creditLimit;
    }


}