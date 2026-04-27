<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PostRepository;


final class PostController extends AbstractController
{
 
#[Route('/post', name: 'post_index')]
public function index(PostRepository $postRepository): Response
{
    $posts = $postRepository->findAll();

    return $this->render('post/index.html.twig', [
        'posts' => $posts,
    ]);
}
}


