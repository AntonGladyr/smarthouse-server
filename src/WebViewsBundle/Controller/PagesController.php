<?php

namespace WebViewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends Controller
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return $this->render('WebViewsBundle:Pages:home.html.twig');
    }



    /**
     * @Route("/login", name="login")
     */
    public function signIn(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('WebViewsBundle:Pages:login.html.twig',
            array('error' => $error));
    }

    /**
     * @Route("/logs")
     */
    public function commandsLog()
    {
        return $this->render('WebViewsBundle:Pages:home.html.twig');
    }
}
