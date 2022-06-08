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

    #[Route('/home_categorie/{categorie}', name: 'app_home_categorie')]
    public function app_home_categorie(Categorie $categorie): Response
    {
        
        return $this->render('home/categorie.html.twig', [
            'categorie' => $categorie,

        ]);
    }
    #[Route('/home_sscategorie/{sscategorie}', name: 'app_home_sscategorie')]
    public function app_home_sscategorie(SsCategorie $sscategorie): Response
    {
        
        return $this->render('home/sscategorie.html.twig', [
            'sscategorie' => $sscategorie,
           
        ]);
    }
    #[Route('/home_produit/{produit}', name: 'app_home_produit')]
    public function app_home_produit(Produit $produit): Response
    {
        
        return $this->render('home/detailproduit.html.twig', [
            'produit' => $produit
        ]);
    }
    
    #[Route('/MeilleureVente', name: 'mvente')]
    public function Mvente(ProduitRepository  $produitRepository): Response
    {
        $produits = $produitRepository->findAllMVentes();
        return $this->render('home/mvente.html.twig', [
            'produits' => $produits

        ]);
    }
}
