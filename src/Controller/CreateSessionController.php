<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreateSessionController extends AbstractController
{
    #[Route('/create/session', name: 'app_create_session')]
    public function index(): Response
    {
        return $this->render('create_session/index.html.twig', [
            'controller_name' => 'CreateSessionController',
        ]);
    }
}
