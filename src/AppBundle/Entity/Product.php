<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

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
     * @UniqueEntity(fields={"ean"}, message="This ean is entry")
     */
    private $ean;

    /**
     * @var bool
     */
    private $active;

    /**
     * @ORM\Table()
     * @ORM\Entity(repositoryClass=" AppBundle\Entity\DoctrineProductRepository")
     */
    public function __construct($data){
        //ToDo 8: Implement create product. Assume input data is correct
        $this->ean = '';
        $this->name = '';
        $this->price = 0;
        $this->active = 0;
        if(isset($data)) {
            $this->ean = $data['ean'];
            $this->name = $data['name'];
            $this->price = $data['price'];
            $this->active = $data['active'];
        }
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
