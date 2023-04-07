<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditController extends AbstractController
{
    #[Route('/article/edit/{id}', name: 'article_edit')]
    public function edit($id, ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find($id);

        return $this->render('pages/edit.html.twig', [
            'article' => $article,
        ]);
    }
}
