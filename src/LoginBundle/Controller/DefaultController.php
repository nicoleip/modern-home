<?php

namespace LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('LoginBundle:Users');

            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));

            if ($user) {
                return $this->render('LoginBundle:Default:login.html.twig', array('name' => $user->getUsername()));
            }
            else{
                return $this->render('LoginBundle:Default:login.html.twig', array('error' => 'Wrong credentials'));
            }
        }
        else {
              return $this->render('LoginBundle:Default:login.html.twig');
        }
    }

}
