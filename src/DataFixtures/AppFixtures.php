<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Fournisseur;
use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\LigneDeCommande;
use App\Entity\Livraison;
use App\Entity\Produit;
use App\Entity\Utilisateur;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // FournisseurFixtures

        $fournisseur1= new Fournisseur();
            $fournisseur1->setNom("Roland");
            $fournisseur1->setAdresse("324 rue de la zic");
            $fournisseur1->setCp(79000);
            $fournisseur1->setVille("Saxa");
            $manager->persist($fournisseur1);
            
            $fournisseur2= new Fournisseur();
            $fournisseur2->setNom("Sennheiser");
            $fournisseur2->setAdresse("48 boulebvard des airs");
            $fournisseur2->setCp(87000);
            $fournisseur2->setVille("Cantigny");
            $manager->persist($fournisseur2);
            
            $fournisseur3= new Fournisseur();
            $fournisseur3->setNom("Yamaha");
            $fournisseur3->setAdresse("789 route de paris");
            $fournisseur3->setCp(90000);
            $fournisseur3->setVille("Versaille");
            $manager->persist($fournisseur3);
       
// CategorieFixtures

            $categorie1= new Categorie();
            $categorie1->setNom("batteries");
            $categorie1->setPhoto("c1.png");
            $categorie1->setCategorie(NULL);
            $manager->persist($categorie1);
            
            $categorie2= new Categorie();
            $categorie2->setNom("guitares");
            $categorie2->setPhoto("c12.png");
            $categorie2->setCategorie(NULL);
            $manager->persist($categorie2);
            
            $categorie3= new Categorie();
            $categorie3->setNom("claviers");
            $categorie3->setPhoto("c14.png");
            $categorie3->setCategorie(NULL);
            $manager->persist($categorie3);
            
            
            $categorie4= new Categorie();
            $categorie4->setNom("accessoires");
            $categorie4->setPhoto("c9.png");
            $categorie4->setCategorie(1);
            $manager->persist($categorie4);
            
            
            $categorie5= new Categorie();
            $categorie5->setNom("batterie");
            $categorie5->setPhoto("c10.png");
            $categorie5->setCategorie(1);
            $manager->persist($categorie5);
            
            
            $categorie6= new Categorie();
            $categorie6->setNom("guitare");
            $categorie6->setPhoto("c4.png");
            $categorie6->setCategorie(2);
            $manager->persist($categorie6);
            
            $categorie7= new Categorie();
            $categorie7->setNom("cable");
            $categorie7->setPhoto("c2.png");
            $categorie7->setCategorie(2);
            $manager->persist($categorie7);
            
            

            $categorie8= new Categorie();
            $categorie8->setNom("piano");
            $categorie8->setPhoto("c5.png");
            $categorie8->setCategorie(3);
            $manager->persist($categorie8);
            
            $categorie9= new Categorie();
            $categorie9->setNom("clavier");
            $categorie9->setPhoto("c14.png");
            $categorie9->setCategorie(3);
            $manager->persist($categorie9);
            
//UtilisateurFixture

$utilisateur1= new Utilisateur();
$utilisateur1->setPseudo("In");
$utilisateur1->setMdp("XJN42SCO8YL");
$utilisateur1->setNom("Santiago");
$utilisateur1->setPrenom("Dexter");
$utilisateur1->setEmail("ultrices.a.auctor@accumsan.co.uk");
$utilisateur1->setRole("admistration");
$utilisateur1->setAdresse("13 rue retu");
$utilisateur1->setCp(80000);
$utilisateur1->setVille("Amiens");
$utilisateur1->setCoefficient("0.24");
$utilisateur1->setCommercial(NULL);
$manager->persist($utilisateur1);

$utilisateur2= new Utilisateur();
$utilisateur2->setPseudo("Maecenas");
$utilisateur2->setMdp("EGY57MUM3UN");
$utilisateur2->setNom("Vasquez");
$utilisateur2->setPrenom("Carol");
$utilisateur2->setEmail("iaculis.quis@orci.ca");
$utilisateur2->setRole("client particulier");
$utilisateur2->setAdresse("2057 Curabitur Road");
$utilisateur2->setCp(62000);
$utilisateur2->setVille("Arras");
$utilisateur2->setCoefficient("0.30");
$utilisateur2->setCommercial("1");
$manager->persist($utilisateur2);

$utilisateur3= new Utilisateur();
$utilisateur3->setPseudo("euismod");
$utilisateur3->setMdp("LYD05OPA7DQ");
$utilisateur3->setNom("Cortez");
$utilisateur3->setPrenom("Troy");
$utilisateur3->setEmail("a @sodalesmauris.co.uk");
$utilisateur3->setRole("client professionnel");
$utilisateur3->setAdresse("287 -6448 Tincidunt Ave ");
$utilisateur3->setCp(30000);
$utilisateur3->setVille("Marseille");
$utilisateur3->setCoefficient("0.15");
$utilisateur3->setCommercial("1");
$manager->persist($utilisateur3);

//ProduitFixtures


$produit1= new Produit();
$produit1->setReference("3700408373542");
$produit1->setLibelle("Shiver - Câble jack 6,35mm longueur 3m");
$produit1->setDescription("Ce produit permet de relier toutes sources audio équipées vers un amplificateur ou une table de mixage.");
$produit1->setPrixUnitaire(6);
$produit1->setPhoto("i5.webp");
$produit1->setStock(15);
$produit1->setTva(0.16);
$produit1->setPrixAchat(1);
$produit1->setFournisseur(2);
$produit1->setCategorie(7);
$manager->persist($produit1);

$produit2= new Produit();
$produit2->setReference("0633816503009");
$produit2->setLibelle("Pearl - Export Rock 22");
$produit2->setDescription("Après plusieurs années d\'absence,la batterie la plus vendue de l\'histoire fait son grand retour");
$produit2->setPrixUnitaire(759.99);
$produit2->setPhoto("i1.webp");
$produit2->setStock(2);
$produit2->setTva(5.5);
$produit2->setPrixAchat(500);
$produit2->setFournisseur(1);
$produit2->setCategorie(5);
$manager->persist($produit2);

$produit3= new Produit();
$produit3->setReference("0019239393050");
$produit3->setLibelle("Gretsch - Catalina Club CLUB 4 Futs");
$produit3->setDescription("Grosse caisse,Tom ,Stand tom ,Caisse claire ,...");
$produit3->setPrixUnitaire(669.99);
$produit3->setPhoto("i2.webp");
$produit3->setStock(2);
$produit3->setTva(5.5);
$produit3->setPrixAchat(400);
$produit3->setFournisseur(1);
$produit3->setCategorie(4);
$manager->persist($produit3);

$produit4= new Produit();
$produit4->setReference("3700166300088");
$produit4->setLibelle("Yellow cable - HP03- Câble haut parleur jack - 3 m");
$produit4->setDescription("Câble haut-parleur jack-jack  longueur de 3 mètres, suffisant pour connecter un baffle à une tête ampli.");
$produit4->setPrixUnitaire(10);
$produit4->setPhoto('i6.png');
$produit4->setStock(20);
$produit4->setTva(0.16);
$produit4->setPrixAchat(2);
$produit4->setFournisseur(2);
$produit4->setCategorie(7);
$manager->persist($produit4);

$produit5= new Produit();
$produit5->setReference("0885978901340");
$produit5->setLibelle("Fender - Malibu Player Artic Gold");
$produit5->setDescription("Une guitare électro-acoustique à un prix abordable avec de nombreux atouts pour un musicien");
$produit5->setPrixUnitaire(325);
$produit5->setPhoto("i14.jpg");
$produit5->setStock(2);
$produit5->setTva(0.16);
$produit5->setPrixAchat(140);
$produit5->setFournisseur(3);
$produit5->setCategorie(6);
$manager->persist($produit5);

$produit6= new Produit();
$produit6->setReference("4957812589017");
$produit6->setLibelle("Yamaha - GSLG200S - Guitare cordes acier naturel");
$produit6->setDescription("La guitare silencieuse Yamaha SLG200S délivre une performance presque inaudible avec un son acoustique incroyablement naturel.
");
$produit6->setPrixUnitaire(700);
$produit6->setPhoto("i15.webp");
$produit6->setStock(2);
$produit6->setTva(0.16);
$produit6->setPrixAchat(550);
$produit6->setFournisseur(3);
$produit6->setCategorie(6);
$manager->persist($produit6);

$produit7= new Produit();
$produit7->setReference("0694318024874");
$produit7->setLibelle("Akai Professional MPK Mini mk3 - Clavier maître");
$produit7->setDescription("Un contrôleur remis au goût du jour.Le MPK Mini, qui fait partie des claviers de contrôle les plus vendus au monde");
$produit7->setPrixUnitaire(101);
$produit7->setPhoto("i17.webp");
$produit7->setStock(1);
$produit7->setTva(0.16);
$produit7->setPrixAchat(50);
$produit7->setFournisseur(1);
$produit7->setCategorie(9);
$manager->persist($produit7);


$produit8= new Produit();
$produit8->setReference("3700408361969");
$produit8->setLibelle("Shiver - DPS200B Piano numérique Noir");
$produit8->setDescription("Le Shiver DPS200 est un piano numérique accessible sans concession.");
$produit8->setPrixUnitaire(699.00);
$produit8->setPhoto("i18.webp");
$produit8->setStock(1);
$produit8->setTva(0.16);
$produit8->setPrixAchat(420);
$produit8->setFournisseur(1);
$produit8->setCategorie(9);
$manager->persist($produit8);



$produit9= new Produit();
$produit9->setReference("4957812638401");
$produit9->setLibelle("Yamaha - Arius YDP-144 noir");
$produit9->setDescription("Le YDP-144 noir vous offre une expérience pianistique proche de celle un authentique piano à queue ',
");
$produit9->setPrixUnitaire(929);
$produit9->setPhoto("i19.webp");
$produit9->setStock(1);
$produit9->setTva(0.16);
$produit9->setPrixAchat(750);
$produit9->setFournisseur(2);
$produit9->setCategorie(8);
$manager->persist($produit9);

//CommandeFixtures

$commande1= new Commande();
$commande1->setDate("2021-04-20");
$commande1->setTotal(1232);
$commande1->setStatut("livree");
$commande1->setCpF(80560);
$commande1->setVilleF("khkhkkhgs");
$commande1->setUtilisateur(2);
$manager->persist($commande1);

$commande2= new Commande();
$commande2->setDate("2021-04-20");
$commande2->setTotal(699);
$commande2->setStatut("livree");
$commande2->setCpF(80560);
$commande2->setVilleF("khkhkkhgs");
$commande2->setUtilisateur(2);
$manager->persist($commande2);

$commande3= new Commande();
$commande3->setDate("2021-04-20");
$commande3->setTotal();
$commande3->setStatut("en cours");
$commande3->setCpF(80560);
$commande3->setVilleF("khkhkkhgs");
$commande3->setUtilisateur(3);
$manager->persist($commande3);

//LivraisonFixtures

$livraison1= new Livraison();
$livraison1->setDate("2021-05-01");
$livraison1->setAdresseL("59 rue tyugkhgk");
$livraison1->setCpL(80560);
$livraison1->setVilleL("khkhkkhgs");
$livraison1->setCommande(1);
$manager->persist($livraison1);

$livraison2= new Livraison();
$livraison2->setDate("2021-05-01");
$livraison2->setAdresseL("59 rue tyugkhgk");
$livraison2->setCpL(80560);
$livraison3->setVilleL("khkhkkhgs");
$livraison3->setCommande(3);
$manager->persist($livraison3);

//LigneCommandeFixture


$ligne1= new LigneDeCommande();
$ligne1->setQuantite(1);
$ligne1->setPrixVente(929);
$ligne1->setTotalLigne(929);
$ligne1->setProduit(9);
$ligne1->setCommande(1);
$manager->persist($ligne1);

$ligne2= new LigneDeCommande();
$ligne2->setQuantite(3);
$ligne2->setPrixVente(101);
$ligne2->setTotalLigne(303);
$ligne2->setProduit(7);
$ligne2->setCommande(1);
$manager->persist($ligne2);

$ligne3= new LigneDeCommande();
$ligne3->setQuantite(1);
$ligne3->setPrixVente(699);
$ligne3->setTotalLigne(699);
$ligne3->setProduit(8);
$ligne3->setCommande(2);
$manager->persist($ligne3);

$ligne4= new LigneDeCommande();
$ligne4->setQuantite(1);
$ligne4->setPrixVente(700);
$ligne4->setTotalLigne(700);
$ligne4->setProduit(6);
$ligne4->setCommande(1);
$manager->persist($ligne4);

$manager->flush();
}
}