<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use AppBundle\Entity\Product;
use AppBundle\Entity\ProductRepository;

final class GetProducts
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @return Product[]
     */
    public function __invoke()
    {
        //ToDo 6: Call repository function to obtain active products
        return $this->productRepository->getActiveProducts();
    }
}