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
     * @Route("/power")
     */
    public function powerInfo() {
    	return $this->render('WebViewsBundle:Pages:power.html.twig');
    }

    /**
     * @Route("/air")
     */
    public function temperatureInfo() {
    	return $this->render('WebViewsBundle:Pages:air.html.twig');
    }

    /**
     * @Route("/water")
     */
    public function waterInfo() {
    	return $this->render('WebViewsBundle:Pages:water.html.twig');
    }

    /**
     * @Route("/login")
     */
    public function signIn(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('WebViewsBundle:Pages:login.html.twig',
            array('error' => $error));
    }
}
