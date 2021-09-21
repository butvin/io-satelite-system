<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    public function index(): Response
    {
        $data = $_SERVER;

        return $this->render('app/index.html.twig', [
            'controller_name' => 'AppController',
            'data' => $data,
        ]);
    }
}