<?php

namespace App\Controller;

use App\Entity\LigneDeCommande;
use App\Form\LigneDeCommandeType;
use App\Repository\LigneDeCommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ligne/de/commande')]
class LigneDeCommandeController extends AbstractController
{
    #[Route('/', name: 'app_ligne_de_commande_index', methods: ['GET'])]
    public function index(LigneDeCommandeRepository $ligneDeCommandeRepository): Response
    {
        return $this->render('ligne_de_commande/index.html.twig', [
            'ligne_de_commandes' => $ligneDeCommandeRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_ligne_de_commande_show', methods: ['GET'])]
    public function show(LigneDeCommande $ligneDeCommande): Response
    {
        return $this->render('ligne_de_commande/show.html.twig', [
            'ligne_de_commande' => $ligneDeCommande,
        ]);
    }

    

   
}
