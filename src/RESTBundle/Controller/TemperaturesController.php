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
     * @Route("/temperatures/controller/{controller_name}")
     */
    public function allControllerTemperaturesAction($controller_name)
    {
        $DB = $this->get("database.access");
        return new Response(json_encode($DB->selectAllControllerTemperatures($controller_name)));
    }

}
