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
        $db_temperatures = $this->get("temperatures.access");
        return new Response(json_encode($db_temperatures->selectCurrentTemperatures()));
    }

    /**
     * @Route("/temperatures/{controller}/{time}")
     */
    public function controllerTemperaturesByTimeAction($controller, int $time)
    {
        $db_temperatures = $this->get("temperatures.access");
        return new Response(json_encode($db_temperatures->selectControllerTemperatures( $controller, $time )));
    }

}
