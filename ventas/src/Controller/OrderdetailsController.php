<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderdetailsController extends AbstractController{
    public function index(){
        return $this->render('orderdetails/orderdetails.html.twig');
    }
}
