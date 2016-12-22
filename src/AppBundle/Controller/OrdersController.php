<?php
/**
 * Created by PhpStorm.
 * User: nikol.paraskova
 * Date: 17.11.2016 г.
 * Time: 17:06
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OrdersController extends Controller
{
    public function addOrderIndexAction(Request $request)

    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('AppBundle:Products');

        $productData = $repository->findAll();
        return $this->render("AppBundle:Orders:add-order.html.twig", [
            'productData' => $productData
        ]);
    }
    
    
    

    public function manageOrdersIndexAction(Request $request)
    {
        return $this->render("AppBundle:Orders:manage-orders.html.twig");
    }
   
}
