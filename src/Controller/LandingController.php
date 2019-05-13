<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\MetaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     * @param MetaRepository $metaRepository
     * @return Response
     */
    public function index(MetaRepository $metaRepository) : Response
    {
        return $this->render('landing/index.html.twig', [
            'metas' => $metaRepository->findAll(),
        ]);
    }
    public function getMeta(MetaRepository $metaRepository): Response
    {
        return $this->render('base.html.twig', [
            'metas' => $metaRepository->findAll(),
        ]);
    }
    /*public function getArticles(ArticleRepository $articleRepository): Response
    {
        return $this->render('landing/index.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }*/
}
