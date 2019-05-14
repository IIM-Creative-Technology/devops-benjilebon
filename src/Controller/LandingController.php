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
     * @param ArticleRepository $articleRepository
     * @return Response
     */
    public function index(MetaRepository $metaRepository, ArticleRepository $articleRepository) : Response
    {
        return $this->render('landing/index.html.twig', [
            'metas' => $metaRepository->findAll(),
            'articles' => $articleRepository->findAll(),
        ]);
    }
    public function getMeta(MetaRepository $metaRepository): Response
    {
        return $this->render('base.html.twig', [
            'metas' => $metaRepository->findAll(),
        ]);
    }
    /**
     * @Route("/products/{slug}", name="product_slug")
     */
    public function showProduct(ArticleRepository $articleRepository,MetaRepository $metaRepository, $slug)
    {
        $product = $articleRepository->findOneBy(array('slug' => $slug));

        return $this->render('article/slugshow.html.twig', [
            'product' => $product,
            'metas' => $metaRepository->findAll(),
        ]);
    }
}
