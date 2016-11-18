<?php
/**
 * Created by PhpStorm.
 * User: nikol.paraskova
 * Date: 17.11.2016 г.
 * Time: 11:26
 */

namespace AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriesController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Categories:categories.html.twig');
    }
}
