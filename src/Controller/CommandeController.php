<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\LigneDeCommande;
use App\Repository\ProduitRepository;
use App\Repository\LigneDeCommandeRepository;
use App\Entity\Produit;

#[Route('/commande')]
class CommandeController extends AbstractController
{
    #[Route('/', name: 'app_commande_index', methods: ['GET'])]
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

   
    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande, LigneDeCommande $ligneDeCommande,Produit $produit): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
            'lignedecommande'=>$ligneDeCommande,
            'produit'=>$produit,
        ]);
    }

    
}
