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
    public function addOrderAction(Request $request)
    {
        return $this->render("AppBundle:Orders:add-order.html.twig");
    }

    public function manageOrdersAction(Request $request)
    {
        return $this->render("AppBundle:Orders:manage-orders.html.twig");
    }
   
}
