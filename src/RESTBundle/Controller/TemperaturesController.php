<?php

namespace RESTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TemperaturesController extends Controller
{

    /**
     * @Route("/temperatures/current")
     */
    public function currentTemperaturesAction()
    {
        $DB = $this->get("database.access");
        return new Response(json_encode($DB->selectCurrentTemperatures()));
    }

    /**
     * @Route("/temperatures/{controller}/{time}")
     */
    public function controllerTemperaturesByTimeAction($controller, int $time)
    {
        $DB = $this->get("database.access");
        return new Response(json_encode($DB->selectControllerTemperatures( $controller, $time )));
    }

}
