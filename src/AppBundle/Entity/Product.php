<?php

namespace AppBundle\Entity;

class Product
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var bool
     */
    private $active;

    /**
     *
     */
    public function __construct(){
        //ToDo 8: Implement create product. Assume input data is correct
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }
}