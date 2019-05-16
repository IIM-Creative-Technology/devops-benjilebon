<?php

namespace App\Controller;

use App\Entity\Meta;
use App\Form\MetaType;
use App\Repository\MetaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/meta")
 */
class MetaController extends AbstractController
{
    /**
     * @Route("/", name="meta_index", methods={"GET"})
     */
    public function index(MetaRepository $metaRepository): Response
    {
        return $this->render('meta/index.html.twig', [
            'metas' => $metaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="meta_show", methods={"GET"})
     */
    public function show(Meta $metum): Response
    {
        return $this->render('meta/show.html.twig', [
            'metas' => $metum,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="meta_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Meta $metum, MetaRepository $metaRepository): Response
    {
        $form = $this->createForm(MetaType::class, $metum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meta_index', [
                'id' => $metum->getId(),
            ]);
        }

        return $this->render('meta/edit.html.twig', [
            'metas' => $metaRepository->findAll(),
            'metos' => $metum,
            'form' => $form->createView(),
        ]);
    }
}
