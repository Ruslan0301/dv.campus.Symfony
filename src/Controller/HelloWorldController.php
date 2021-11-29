<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWorldController extends AbstractController
{
    /**
     * @Route("/hello/world", name="hello_world")
     */
    public function index(): Response
    {
        return $this->render('hello_world/index.html.twig', [
            'title'=> 'HelloSymfony',
            'controller_name' => 'HelloWorldController',
        ]);
    }
}
