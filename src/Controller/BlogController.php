<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @return Response
     */
    #[Route('/blog', name: 'blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'title' => 'Blogs',
        ]);
    }

    /**
     * @param $id
     * @return Response
     */
    #[Route('/blog/show/{$id}', name: 'blog_show')]
    public function show($id): Response
    {
        return $this->render('blog/show.html.twig', [
            'title'=>'blog'
        ]);
    }
}
