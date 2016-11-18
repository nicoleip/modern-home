<?php
/**
 * Created by PhpStorm.
 * User: nikol.paraskova
 * Date: 17.11.2016 г.
 * Time: 17:14
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SettingsController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Settings:settings.html.twig');
    }
}
