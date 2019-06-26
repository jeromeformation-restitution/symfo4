<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/produit/formulaire")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request): Response
    {
        dump($request->request);
        return $this->render('produit/formulaire.html.twig');
    }


    /**
     * @Route(
     *     "/produit/{slug}",
     *     requirements={"slug"="[a-z0-9\-]+"},
     *     methods={"GET"}
     *     )
     * @param string $slug
     * @return Response
     */
    public function show(string $slug): Response
    {
        var_dump($slug);
        return $this->render('produit/show.html.twig');
    }
}
