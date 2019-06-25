<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    /**
     * retour d'une reponse contenant du html
     * @return Response
     */
    public function index():Response
    {
        $response = new Response('<h1>bonjour</h1>');
        return $response;
    }
}
