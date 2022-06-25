<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


#[Route('/panier', name: 'panier_')]
class PanierController extends AbstractController
{
    #[Route('/panier', name: 'index')]

    public function index(SessionInterface $session,ProduitRepository $produitRepository)
    {
        $panier = $session->get("panier",[]);
// on fabrique les données

        $dataPanier=[];
        $total= 0;
            foreach($panier as $id=>$quantite){
                $produit = $produitRepository->find($id);
                $dataPanier []= [
                    "produit"=>$produit,
                    "quantite"=>$quantite];
                $total += $produit->getPrixUnitaire() * $quantite ;     
            }
            return $this->render('panier/index.html.twig', compact("dataPanier","total"));
    }

    #[Route("/add/{id}", name:"add")]

    public function add(Produit $produit ,SessionInterface $session){

// on recupere le panier actuel

        $panier= $session->get("panier",[]);
        $id=$produit->getId();

            if (!empty($panier[$id])){$panier[$id]++;}else{$panier[$id]=1;}
// on sauvegarde dans la session
        $session->set("panier",$panier);
            return $this->redirecttoRoute("panier_index");

    }


    #[Route("/remove/{id}", name:"remove")]

    public function remove(Produit $produit ,SessionInterface $session){
// on recupere le panier actuel
        $panier= $session->get("panier",[]);
        $id=$produit->getId();
            if (!empty($panier[$id])){ 
                if($panier[$id]>1){$panier[$id]--;}else{unset($panier[$id]);}}
             
// on sauvegarde dans la session
        $session->set("panier",$panier);
            return $this->redirecttoRoute("panier_index");

    }

    #[Route("/delete/{id}", name:"delete")]

    public function delete(Produit $produit ,SessionInterface $session){
// on recupere le panier actuel
        $panier= $session->get("panier",[]);
        $id=$produit->getId();
            if (!empty($panier[$id])){ 
                unset($panier[$id]);}
             
// on sauvegarde dans la session
        $session->set("panier",$panier);
            return $this->redirecttoRoute("panier_index");

    }

    #[Route("/delete", name:"delete_all")]

    public function deleteAll(SessionInterface $session){

        $session->set("panier",[]);
        
             
            return $this->redirecttoRoute("panier_index");

    }





}
