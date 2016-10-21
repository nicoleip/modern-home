<?php

namespace LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Attribute;
use LoginBundle\Modals\Login;


class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('LoginBundle:Users');

        $session = $request->getSession();

        if($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');
            $remember = $request->get('remember');

            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('LoginBundle:Users');

            $user = $repository->findOneBy(array('username' => $username, 'password' => $password));

            if ($user) {
                if($remember == 'remember-me'){
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                }

                return $this->redirect("/dashboard");
                /*$this->render('LoginBundle:Default:login.html.twig', array('name' => $user->getUsername()));*/
            }
            else{
                return $this->render('LoginBundle:Default:login.html.twig', array('error' => 'Wrong credentials'));
            }
        }
        else {
            if($session->has('login')){
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $repository->findOneBy(array('username' => $username, 'password' => $password));

                if($user){
                    return $this->redirect("/dashboard");
                }
            }
            return $this->render('LoginBundle:Default:login.html.twig');
        }

    }

    public function logoutAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        return $this->render('LoginBundle:Default:login.html.twig');
    }

}
