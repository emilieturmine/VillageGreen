<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use App\Entity\Categorie;
use App\Entity\SsCategorie;
use App\Entity\Produit;
class CatalogueController extends AbstractController
{
    #[Route('/catalogue', name: 'app_catalogue')]
    public function index(CategorieRepository $categorieRepository, ProduitRepository $produitRepository): Response
    { $categories = $categorieRepository->findAllCategorie();
        $produits = $produitRepository->findAllMVentesHome();
        return $this->render('catalogue/index.html.twig', [
            'controller_name' => 'CatalogueController',
            'categories' => $categories,
            'produits' => $produits,
        ]);
    }
    #[Route('/catalogue_categorie/{categorie}', name: 'app_catalogue_categorie')]
    public function app_catalogue_categorie(Categorie $categorie): Response
    {
        
        return $this->render('catalogue/categorie.html.twig', [
            'categorie' => $categorie,

        ]);
    }
    #[Route('/catalogue_sscategorie/{sscategorie}', name: 'app_catalogue_ssCategorie')]
    public function app_catalogue_sscategorie(SsCategorie $sscategorie): Response
    {
        
        return $this->render('catalogue/ssCategorie.html.twig', [
            'sscategorie' => $sscategorie,
           
        ]);
    }
    #[Route('/catalogue_produit/{produit}', name: 'app_catalogue_produit')]
    public function app_catalogue_produit(Produit $produit): Response
    {
        
        return $this->render('catalogue/detailproduit.html.twig', [
            'produit' => $produit
        ]);
    }
   

}
