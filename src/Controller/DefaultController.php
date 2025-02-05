<?php

nameSpace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route('/program', name: 'app_index')]
    public function index(): Response {
        return $this->render('program/index.html.twig' , [
            'website' => 'Bienvenue !',
        ]);
    }
}
?>