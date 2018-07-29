<?php

namespace AppBundle\Controller;

use Signedpay\API\Api;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends Controller
{
    /**
     * @Route("/product/{id}", name="product.item")
     */
    public function indexAction()
    {
        $this->get(Api::class)->initPayment();
    }
}
