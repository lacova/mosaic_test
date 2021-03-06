<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use AppBundle\Service\GetProducts;

class DefaultController extends Controller
{

    public function indexAction()
    {
        //ToDo 11: Call get_products service to retrieve all products
        $products = $this->get('get_product')->__invoke();

        //ToDo 7: Pass products to the twig template
        return $this->render('default/products_list.html.twig', ['products' => $products]);
    }

    public function importAction()
    {
        $appDir = $this->get('kernel')->getRootDir();

        $csvPath = $appDir . "/Resources/csv/products.csv";

        $this->get('import_products')->__invoke($csvPath);

        return $this->indexAction();
    }
}
