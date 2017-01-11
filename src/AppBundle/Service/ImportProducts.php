<?php

namespace AppBundle\Service;

use AppBundle\Entity\ProductRepository;

final class ImportProducts
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    //ToDo 5: Implement incomplete construct function. Pass required parameters and set them.
    public function __construct()
    {
    }

    /**
     * @param string $csvFilePath
     *
     * @throws @FileNotFoundException when the requested file cannot be found
     */
    public function __invoke($csvFilePath)
    {
        //ToDo 12: Implement function to read the CSV and store it to the database
        //Tip: Being $product a Product instance, the following method adds it to the database:
        $this->productRepository->addProduct($product);
    }
}