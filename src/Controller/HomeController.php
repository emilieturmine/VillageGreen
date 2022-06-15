<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Repository\ActuRepository;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use App\Repository\FournisseurRepository;
use App\Repository\SsCategorieRepository;
use App\Repository\LigneDeCommandeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SsCategorie;
use App\Entity\Fournisseur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(CategorieRepository $categorieRepository, FournisseurRepository $fournisseurRepository, ProduitRepository $produitRepository, ActuRepository $actuRepository,SsCategorieRepository $ssCategorieRepository): Response
    {
        $categories = $categorieRepository->findAllCategorie();
        $fournisseurs = $fournisseurRepository->findAllFournisseurHome();
        $produits = $produitRepository->findAllMVentesHome();
        $actus = $actuRepository->findAllActu();
        // $sscategories = $ssCategorieRepository->findAllSsCatByCatID();
        
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'fournisseurs' => $fournisseurs,
            'produits' => $produits,
            'actus' => $actus,
            // 'sscategories' => $sscategories

        ]);
    }

    #[Route('/marques', name: 'app_marques_index', methods: ['GET'])]
    public function marques(FournisseurRepository $fournisseurRepository): Response
    {
        return $this->render('home/marques.html.twig', [
            'fournisseurs' => $fournisseurRepository->findAll(),
        ]);
    }
    #[Route('/marques_produit/{fournisseur}', name: 'app_marques_produit')]
    public function app_marques_produit(Fournisseur $fournisseur): Response
    {
        
        return $this->render('home/fournisseur_produit.html.twig', [
            'fournisseur' => $fournisseur,
           
        ]);}
    
    #[Route('/MeilleureVente', name: 'mvente')]
    public function Mvente(ProduitRepository  $produitRepository): Response
    {
        $produits = $produitRepository->findAllMVentes();
        return $this->render('home/mvente.html.twig', [
            'produits' => $produits

        ]);
    }
}
