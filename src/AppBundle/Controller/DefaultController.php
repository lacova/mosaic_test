<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $products = $this->container->get('get_products')->__invoke();

        //ToDo 7: Pass products to the twig template
        return $this->render('default/products_list.html.twig');
    }

    public function importAction()
    {
        $appDir = $this->get('kernel')->getRootDir();

        $csvPath = $appDir . "/Resources/csv/products.csv";

        $this->container->get('import_products')->__invoke($csvPath);
    }
}
