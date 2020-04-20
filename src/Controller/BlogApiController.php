<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogApiController extends AbstractController
{
    /**
     * @Route("/api/posts", name="posts_api")
     */
    public function posts()
    {
        return $this->json([
            ['title' => 'Title 1'],
            ['title' => 'Title 2'],
        ]);
    }
}
