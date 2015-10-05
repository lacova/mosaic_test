<?php

namespace AppBundle\Entity;

use AppBundle\Entity\Product;

interface ProductRepository
{
    /**
     * @param Product $product
     */
    public function addProduct(Product $product);

    /**
     * @param string $ean
     * @return Product
     */
    public function getProductByEan($ean);

    /**
     * @return Product[]
     */
    public function getActiveProducts();
}