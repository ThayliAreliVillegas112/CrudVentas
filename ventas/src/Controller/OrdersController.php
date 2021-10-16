<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrdersController extends AbstractController{
   
    public function getOrders(){

        $em = $this->getDoctrine()->getManager();

        $query =$em->createQuery("SELECT r.orderdate, r.requireddate, r.shippeddate, r.status, r.comments  FROM App:Orders r");
        $listOrders = $query->getResult();
        return $this->render('orders/orders.html.twig', [
            'lista' => $listOrders
        ]);
    }
}
