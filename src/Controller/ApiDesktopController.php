<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Fournisseur;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;
use App\Entity\SsCategorie;
use Symfony\Component\HttpFoundation\Request;

class ApiDesktopController extends AbstractController
{
    #[Route('/desktop/liste', name: 'app_desktop_liste',methods:['get'])]
    public function Liste(ProduitRepository $repo): Response
    {
        $liste=$repo->findAll();
        return $this->json($liste,200,["Content-type"=>"application/json"],["groups"=>"read:liste"]);
    }

    #[Route('/api/liste2/{cat}', name: 'app_desktop_liste2',methods:['get'])]
    public function Liste2(Categorie $cat): Response
    {
        $liste=$cat->getSsCategories();
        return $this->json($liste,200,["Content-type"=>"application/json"],["groups"=>"read:liste"]);
    }

    #[Route('/desktop/ajout', name: 'app_desktop_ajout',methods:['post'])]
    public function Ajout( Request $request,EntityManagerInterface $em): Response
    {
        $body = json_decode($request->getContent());
        $id = $body -> id; 
        $reference = $body -> reference; 
        $libelle = $body -> libelle; 
        $description = $body -> description; 
        $prixUnitaire = $body -> prixUnitaire; 
        $photo = $body -> photo; 
        $stock = $body -> stock; 
        $tva = $body -> tva; 
        $prixAchat = $body -> prixAchat; 
        $id_fournisseur = $body -> fournisseur;
        $fournisseur = $em->getRepository(Fournisseur::class)->find($id_fournisseur);
        $photo2 = $body -> photo2; 
        $photo3 = $body -> photo3; 
        $id_ssCategorie = $body -> ssCategorie; 
        $ssCategorie = $em->getRepository(SsCategorie::class)->find($id_ssCategorie);

        $p = new Produit();
        $p->getID($id);
        $p->setReference($reference);
        $p->setLibelle($libelle);
        $p->setDescription($description);
        $p->setPrixUnitaire($prixUnitaire);
        $p->setPhoto($photo);
        $p->setStock($stock);
        $p->setTva($tva);
        $p->setPrixAchat($prixAchat);
        $p->setFournisseur($fournisseur);
        $p->setPhoto2($photo2);
        $p->setPhoto3($photo3);
        $p->setSsCategorie($ssCategorie);

        $em->persist($p);
        $em->flush();

        return $this->json($p,200,["content-type"=>"application/json"],["groups" => "read:liste"]);
    
    
    
    
    }
//     #[Route('/desktop/liste/{id}', name: 'app_desktop_details', methods: ['GET'])]
//     public function details(Produit $produit): Response
//     {$produit->findByID();
//         return $this->json($produit,200,["Content-type"=>"application/json"],["groups"=>"read:liste"]);
//     }
 }
