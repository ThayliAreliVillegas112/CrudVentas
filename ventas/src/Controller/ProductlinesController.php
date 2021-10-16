<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductlinesController extends AbstractController{

    
    public function getProductlines(){

        $em = $this->getDoctrine()->getManager();

        $query =$em->createQuery("SELECT  p.textdescription, p.htmldescription, p.image FROM App:Productlines p");
        $listProductlines = $query->getResult();
        return $this->render('productlines/productlines.html.twig', [
            'lista' => $listProductlines
        ]);
    }
}
