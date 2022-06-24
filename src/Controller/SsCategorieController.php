<?php

namespace App\Controller;

use App\Entity\SsCategorie;
use App\Form\SsCategorieType;
use App\Repository\SsCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
use App\Form\CategorieType;
#[Route('/ss/categorie')]
class SsCategorieController extends AbstractController
{
    #[Route('/', name: 'app_ss_categorie_index', methods: ['GET'])]
    public function index(SsCategorieRepository $ssCategorieRepository): Response
    {
        return $this->render('ss_categorie/index.html.twig', [
            'ss_categories' => $ssCategorieRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ss_categorie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SsCategorieRepository $ssCategorieRepository): Response
    {
        $ssCategorie = new SsCategorie();
        $form = $this->createForm(SsCategorieType::class, $ssCategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ssCategorieRepository->add($ssCategorie, true);

            return $this->redirectToRoute('app_ss_categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ss_categorie/new.html.twig', [
            'ss_categorie' => $ssCategorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ss_categorie_show', methods: ['GET'])]
    public function show(SsCategorie $ssCategorie): Response
    {
        return $this->render('ss_categorie/show.html.twig', [
            'ss_categorie' => $ssCategorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ss_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SsCategorie $ssCategorie, SsCategorieRepository $ssCategorieRepository): Response
    {
        $form = $this->createForm(SsCategorieType::class, $ssCategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ssCategorieRepository->add($ssCategorie, true);

            return $this->redirectToRoute('app_ss_categorie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ss_categorie/edit.html.twig', [
            'ss_categorie' => $ssCategorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ss_categorie_delete', methods: ['POST'])]
    public function delete(Request $request, SsCategorie $ssCategorie, SsCategorieRepository $ssCategorieRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ssCategorie->getId(), $request->request->get('_token'))) {
            $ssCategorieRepository->remove($ssCategorie, true);
        }

        return $this->redirectToRoute('app_ss_categorie_index', [], Response::HTTP_SEE_OTHER);
    }
}
