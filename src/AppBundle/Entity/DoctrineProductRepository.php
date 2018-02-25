<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

final class DoctrineProductRepository extends EntityRepository implements ProductRepository
{
    /**
     * @param $product
     */
    public function addProduct(Product $product)
    {
        $this->_em->persist($product);

        //ToDo 2: Something is missing to save the product to the database;

        if(!$this->getProductByEan($product->getEan())) {
            $this->_em->flush();
        }
    }

    /**
     * @param string $ean
     * @return Product
     */
    public function getProductByEan($ean)
    {
        //ToDo 3: return product given the $ean.
        return $this->getEntityManager()
            ->getRepository(Product::class)
            ->findOneBy(['ean' => $ean]);
    }

    /**
     * Get all products that are active
     *
     * @return Product[]
     */
    public function getActiveProducts()
    {
        //ToDo 4: Get all the products that are ACTIVE in the database.
        return $this->getEntityManager()
                    ->getRepository(Product::class)
                    ->findBy(['active' => 1], ['name' => 'ASC']);
    }
}