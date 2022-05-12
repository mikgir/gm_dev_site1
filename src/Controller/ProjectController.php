<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/project', name: 'project')]
    public function index(): Response
    {
        return $this->render('project/index.html.twig', [
            'title' => 'portfolio',
        ]);
    }

    /**
     * @param $id
     * @return Response
     */
    #[Route('/project/show/{$id}', name: 'project_show')]
    public function show($id): Response
    {
        return $this->render('project/show.html.twig', [
            'title'=>'project'
        ]);
    }
}
