<?php
/**
 * Created by PhpStorm.
 * User: nikol.paraskova
 * Date: 17.11.2016 г.
 * Time: 16:05
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReportController extends Controller
{
    public function indexAction(Request $request){
        return $this->render('AppBundle:Report:report.html.twig');
    }

}
