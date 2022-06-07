<?php

namespace App\Controller;

use App\Repository\ActuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategorieRepository;
use App\Repository\FournisseurRepository;
use App\Repository\LigneDeCommandeRepository;
use App\Repository\ProduitRepository;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(CategorieRepository $categorieRepository, FournisseurRepository $fournisseurRepository, ProduitRepository $produitRepository, ActuRepository $actuRepository): Response
    {
        $categories = $categorieRepository->findAllCategorie();
        $fournisseurs = $fournisseurRepository->findAllFournisseur();
        $produits = $produitRepository->findAllMVentesHome();
        $actus = $actuRepository->findAllActu();
        return $this->render('home/index.html.twig', [
            'categories' => $categories,
            'fournisseurs' => $fournisseurs,
            'produits' => $produits,
            'actus' => $actus

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
