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
        return $this->render('WebViewsBundle:Pages:power.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'))
        );
    }

    /**
     * @Route("/air")
     */
    public function temperatureInfo() {
        /*
          {
                "destination": "client",
                "type": "controls/air",
                "controls": {
                    "GD10": {
                        "Example1": {
                            "type": "number",
                            "range": [10, 40],
                            "label": "warning",
                            "value": 10
                        },
                        "Example2": {
                            "type": "number",
                            "range": [100, 1000],
                            "label": "warning",
                            "value": 150
                        },
                        "Example3": {
                            "type": "number",
                            "range": [0, 1],
                            "label": "warning",
                            "value": 0
                        }
                    }
                }
            }

         */

    	return $this->render('WebViewsBundle:Pages:air.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'))
        );
    }

    /**
     * @Route("/water")
     */
    public function waterInfo() {
        return $this->render('WebViewsBundle:Pages:water.html.twig',
            array('host'=>$this->getParameter('websocket.host'),
                'port'=>$this->getParameter('websocket.port'))
        );
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
