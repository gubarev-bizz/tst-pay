<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends Controller
{
    /**
     * @Route("/", name="product.list")
     */
    public function listAction()
    {
        return $this->render('@App/Product/list.html.twig');
    }

    /**
     * @Route("/product/{id}", name="product.item")
     */
    public function itemAction($id)
    {
        return $this->render('@App/Product/item.html.twig');
    }
}
