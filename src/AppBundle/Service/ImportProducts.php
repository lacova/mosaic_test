<?php

namespace AppBundle\Service;

use AppBundle\Entity\Product;
use AppBundle\Entity\ProductRepository;

final class ImportProducts
{
    /**
     * @var ProductRepository
     */
    private $productRepository;

    //ToDo 5: Implement incomplete construct function. Pass required parameters and set them.
    /**
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
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
        $dataProduct = array();
        
        $row = 0;

        if (($handle = fopen($csvFilePath , "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Eléments séparés par un point-virgule, à modifier si necessaire
                $num = count($data); // Nombre d'éléments sur la ligne traitée
                if($row > 0 && $num === 4) {
                    for ($c = 0; $c < $num; $c++) {
                        $dataProduct = array(
                                "name" => $data[0],
                                "price" => $data[1],
                                "ean" => $data[2],
                                "active" => $data[3]
                        );
                    }
                    $product = new Product($dataProduct);
                    $this->productRepository->addProduct($product);
                }
                $row++;
            }
            fclose($handle);    
        }
    }
}