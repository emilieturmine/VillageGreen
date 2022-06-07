<?php
//reste a refaire les association avec les tables avec $manager->persist($disc1);

// Pour associer vos entités
//$disc1->setArtist($artist1);
// ou 
//$artist1->addDisc($disc1);

//$manager->flush();
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

        $fournisseur1 = new Fournisseur();
        $fournisseur1->setNom("Roland");
        $fournisseur1->setAdresse("324 rue de la zic");
        $fournisseur1->setCp(79000);
        $fournisseur1->setVille("Saxa");
        $fournisseur1->setPhoto("f1.png");
        $manager->persist($fournisseur1);

        $fournisseur2 = new Fournisseur();
        $fournisseur2->setNom("Sennheiser");
        $fournisseur2->setAdresse("48 boulebvard des airs");
        $fournisseur2->setCp(87000);
        $fournisseur2->setVille("Cantigny");
        $fournisseur2->setPhoto("f2.png");
        $manager->persist($fournisseur2);

        $fournisseur3 = new Fournisseur();
        $fournisseur3->setNom("Yamaha");
        $fournisseur3->setAdresse("789 route de paris");
        $fournisseur3->setCp(90000);
        $fournisseur3->setVille("Versaille");
        $fournisseur3->setPhoto("f3.png");
        $manager->persist($fournisseur3);

        $fournisseur4 = new Fournisseur();
        $fournisseur4->setNom("abc");
        $fournisseur4->setAdresse("324 rue de la zic");
        $fournisseur4->setCp(79000);
        $fournisseur4->setVille("Saxa");
        $fournisseur4->setPhoto("f4.jfif");
        $manager->persist($fournisseur4);

        $fournisseur5 = new Fournisseur();
        $fournisseur5->setNom("Acme");
        $fournisseur5->setAdresse("324 rue de la zic");
        $fournisseur5->setCp(79000);
        $fournisseur5->setVille("Saxa");
        $fournisseur5->setPhoto("f5.jfif");
        $manager->persist($fournisseur5);

        $fournisseur6 = new Fournisseur();
        $fournisseur6->setNom("Bam Music");
        $fournisseur6->setAdresse("324 rue de la zic");
        $fournisseur6->setCp(79000);
        $fournisseur6->setVille("Saxa");
        $fournisseur6->setPhoto("f6.png");
        $manager->persist($fournisseur6);

        $fournisseur7 = new Fournisseur();
        $fournisseur7->setNom("Boss Music");
        $fournisseur7->setAdresse("324 rue de la zic");
        $fournisseur7->setCp(79000);
        $fournisseur7->setVille("Saxa");
        $fournisseur7->setPhoto("f7.jfif");
        $manager->persist($fournisseur7);

        $fournisseur8 = new Fournisseur();
        $fournisseur8->setNom("Besson");
        $fournisseur8->setAdresse("324 rue de la zic");
        $fournisseur8->setCp(79000);
        $fournisseur8->setVille("Saxa");
        $fournisseur8->setPhoto("f8.png");
        $manager->persist($fournisseur8);

        $fournisseur9 = new Fournisseur();
        $fournisseur9->setNom("Bosch");
        $fournisseur9->setAdresse("324 rue de la zic");
        $fournisseur9->setCp(79000);
        $fournisseur9->setVille("Saxa");
        $fournisseur9->setPhoto("f9.png");
        $manager->persist($fournisseur9);

        $fournisseur10 = new Fournisseur();
        $fournisseur10->setNom("Cordial");
        $fournisseur10->setAdresse("324 rue de la zic");
        $fournisseur10->setCp(79000);
        $fournisseur10->setVille("Saxa");
        $fournisseur10->setPhoto("f10.png");
        $manager->persist($fournisseur10);

        $fournisseur11 = new Fournisseur();
        $fournisseur11->setNom("Cameo Music");
        $fournisseur11->setAdresse("324 rue de la zic");
        $fournisseur11->setCp(79000);
        $fournisseur11->setVille("Saxa");
        $fournisseur11->setPhoto("f11.png");
        $manager->persist($fournisseur11);

        $fournisseur12 = new Fournisseur();
        $fournisseur12->setNom("Dpa Microphones");
        $fournisseur12->setAdresse("324 rue de la zic");
        $fournisseur12->setCp(79000);
        $fournisseur12->setVille("Saxa");
        $fournisseur12->setPhoto("f12.jfif");
        $manager->persist($fournisseur12);


        // CategorieFixtures

        $categorie1 = new Categorie();
        $categorie1->setNom("Instruments à vents");
        $categorie1->setPhoto("c1.png");
        $categorie1->setCategorie(NULL);
        $manager->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2->setNom("Flûtes");
        $categorie2->setPhoto("c2.jfif");
        $categorie2->setCategorie($categorie1);
        $manager->persist($categorie2);

        $categorie3 = new Categorie();
        $categorie3->setNom("Trompettes");
        $categorie3->setPhoto("c3.jfif");
        $categorie3->setCategorie($categorie1);
        $manager->persist($categorie3);


        $categorie4 = new Categorie();
        $categorie4->setNom("Clarinettes");
        $categorie4->setPhoto("c4.jfif");
        $categorie4->setCategorie($categorie1);
        $manager->persist($categorie4);


        $categorie5 = new Categorie();
        $categorie5->setNom("Saxophone");
        $categorie5->setPhoto("c5.jfif");
        $categorie5->setCategorie($categorie1);
        $manager->persist($categorie5);


        $categorie6 = new Categorie();
        $categorie6->setNom("Pianos");
        $categorie6->setPhoto("c6.jpg");
        $categorie6->setCategorie(NULL);
        $manager->persist($categorie6);

        $categorie7 = new Categorie();
        $categorie7->setNom("piano");
        $categorie7->setPhoto("c7.png");
        $categorie7->setCategorie($categorie2);
        $manager->persist($categorie7);



        $categorie8 = new Categorie();
        $categorie8->setNom("Claviers");
        $categorie8->setPhoto("c8.jpg");
        $categorie8->setCategorie($categorie2);
        $manager->persist($categorie8);

        $categorie9 = new Categorie();
        $categorie9->setNom("Synthetiseur");
        $categorie9->setPhoto("c9.jpg");
        $categorie9->setCategorie($categorie2);
        $manager->persist($categorie9);

        $categorie10 = new Categorie();
        $categorie10->setNom("Accessoires");
        $categorie10->setPhoto("c10.png");
        $categorie10->setCategorie($categorie2);
        $manager->persist($categorie10);

        $categorie11 = new Categorie();
        $categorie11->setNom("Partitions");
        $categorie11->setPhoto("c11.jfif");
        $categorie11->setCategorie($categorie2);
        $manager->persist($categorie11);

        $categorie12 = new Categorie();
        $categorie12->setNom("Batteries");
        $categorie12->setPhoto("c12.jpg");
        $categorie12->setCategorie(NULL);
        $manager->persist($categorie12);

        $categorie13 = new Categorie();
        $categorie13->setNom("Acoustiques");
        $categorie13->setPhoto("c13.jpg");
        $categorie13->setCategorie($categorie12);
        $manager->persist($categorie13);

        $categorie14 = new Categorie();
        $categorie14->setNom("Electronique");
        $categorie14->setPhoto("c14.jpg");
        $categorie14->setCategorie($categorie12);
        $manager->persist($categorie14);

        $categorie15 = new Categorie();
        $categorie15->setNom("Accessoires");
        $categorie15->setPhoto("c15.jpg");
        $categorie15->setCategorie($categorie12);
        $manager->persist($categorie15);

        $categorie16 = new Categorie();
        $categorie16->setNom("Percussions");
        $categorie16->setPhoto("c16.png");
        $categorie16->setCategorie($categorie12);
        $manager->persist($categorie16);

        $categorie17 = new Categorie();
        $categorie17->setNom("Enfant");
        $categorie17->setPhoto("c17.jpg");
        $categorie17->setCategorie($categorie12);
        $manager->persist($categorie17);

        $categorie18 = new Categorie();
        $categorie18->setNom("Guitares");
        $categorie18->setPhoto("c18.png");
        $categorie18->setCategorie(NULL);
        $manager->persist($categorie18);

        $categorie19 = new Categorie();
        $categorie19->setNom("Electriques");
        $categorie19->setPhoto("c19.jpg");
        $categorie19->setCategorie($categorie18);
        $manager->persist($categorie19);

        $categorie20 = new Categorie();
        $categorie20->setNom("Classique");
        $categorie20->setPhoto("c20.jpg");
        $categorie20->setCategorie($categorie18);
        $manager->persist($categorie20);

        $categorie21 = new Categorie();
        $categorie21->setNom("Folk");
        $categorie21->setPhoto("c21.jpg");
        $categorie21->setCategorie($categorie18);
        $manager->persist($categorie21);

        $categorie22 = new Categorie();
        $categorie22->setNom("Ukulele");
        $categorie22->setPhoto("c22.jpg");
        $categorie22->setCategorie($categorie18);
        $manager->persist($categorie22);

        $categorie23 = new Categorie();
        $categorie23->setNom("Cordes");
        $categorie23->setPhoto("c23.jpg");
        $categorie23->setCategorie($categorie18);
        $manager->persist($categorie23);

        $categorie24 = new Categorie();
        $categorie24->setNom("Amplis");
        $categorie24->setPhoto("c24.png");
        $categorie24->setCategorie(NULL);
        $manager->persist($categorie24);

        $categorie25 = new Categorie();
        $categorie25->setNom("Enceintes");
        $categorie25->setPhoto("c25.jpg");
        $categorie25->setCategorie($categorie24);
        $manager->persist($categorie25);

        $categorie26 = new Categorie();
        $categorie26->setNom("Caisson");
        $categorie26->setPhoto("c26.jfif");
        $categorie26->setCategorie($categorie24);
        $manager->persist($categorie26);

        $categorie27 = new Categorie();
        $categorie27->setNom("Basses");
        $categorie27->setPhoto("c27.jfif");
        $categorie27->setCategorie($categorie24);
        $manager->persist($categorie27);

        $categorie28 = new Categorie();
        $categorie28->setNom("Amplis");
        $categorie28->setPhoto("c28.jfif");
        $categorie28->setCategorie($categorie24);
        $manager->persist($categorie28);

        $categorie29 = new Categorie();
        $categorie29->setNom("Casques");
        $categorie29->setPhoto("c29.jfif");
        $categorie29->setCategorie($categorie24);
        $manager->persist($categorie29);

        $categorie30 = new Categorie();
        $categorie30->setNom("Cables");
        $categorie30->setPhoto("c30.png");
        $categorie30->setCategorie(NULL);
        $manager->persist($categorie30);

        $categorie31 = new Categorie();
        $categorie31->setNom("Mixages");
        $categorie31->setPhoto("c31.png");
        $categorie31->setCategorie(NULL);
        $manager->persist($categorie31);

        $categorie32 = new Categorie();
        $categorie32->setNom("Micros");
        $categorie32->setPhoto("c32.png");
        $categorie32->setCategorie(NULL);
        $manager->persist($categorie32);

        //UtilisateurFixture

        $utilisateur1 = new Utilisateur();
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

        $utilisateur2 = new Utilisateur();
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
        $utilisateur2->setCommercial($utilisateur1);
        $manager->persist($utilisateur2);

        $utilisateur3 = new Utilisateur();
        $utilisateur3->setPseudo("euismod");
        $utilisateur3->setMdp("LYD05OPA7DQ");
        $utilisateur3->setNom("Cortez");
        $utilisateur3->setPrenom("Troy");
        $utilisateur3->setEmail("a @sodalesmauris.co.uk");
        $utilisateur3->setRole("client professionnel");
        $utilisateur3->setAdresse("287 -6448 Tincidunt Ave ");
        $utilisateur3->setCp(30000);
        $utilisateur3->setVille("Marseille");
        $utilisateur3->setCoefficient(0, 15);
        $utilisateur3->setCommercial($utilisateur1);
        $manager->persist($utilisateur3);

        //ProduitFixtures


        $produit1 = new Produit();
        $produit1->setReference("3700408373542");
        $produit1->setLibelle("Shiver - Câble jack 6,35mm longueur 3m");
        $produit1->setDescription("Ce produit permet de relier toutes sources audio équipées vers un amplificateur ou une table de mixage.");
        $produit1->setPrixUnitaire(6);
        $produit1->setPhoto("p11.jpg");
        $produit1->setStock(15);
        $produit1->setTva(5, 00);
        $produit1->setPrixAchat(1);
        $produit1->setFournisseur($fournisseur1);
        $produit1->setCategorie($categorie30);
        $produit1->setPhoto2("p12.jfif");
        $produit1->setPhoto3("p13.jfif");
        $manager->persist($produit1);

        $produit2 = new Produit();
        $produit2->setReference("0633816503009");
        $produit2->setLibelle("Pearl - Export Rock 22");
        $produit2->setDescription("Après plusieurs années d\'absence,la batterie la plus vendue de l\'histoire fait son grand retour");
        $produit2->setPrixUnitaire(759.99);
        $produit2->setPhoto("p21.jpg");
        $produit2->setStock(2);
        $produit2->setTva(5, 00);
        $produit2->setPrixAchat(500);
        $produit2->setFournisseur($fournisseur2);
        $produit2->setCategorie($categorie12);
        $produit2->setPhoto2(NULL);
        $produit2->setPhoto3(NULL);
        $manager->persist($produit2);

        $produit3 = new Produit();
        $produit3->setReference("0019239393050");
        $produit3->setLibelle("Gretsch - Catalina Club CLUB 4 Futs");
        $produit3->setDescription("Grosse caisse,Tom ,Stand tom ,Caisse claire ,...");
        $produit3->setPrixUnitaire(669.99);
        $produit3->setPhoto("p31.jpg");
        $produit3->setStock(2);
        $produit3->setTva(5, 00);
        $produit3->setPrixAchat(400);
        $produit3->setFournisseur($fournisseur3);
        $produit3->setCategorie($categorie12);
        $produit3->setPhoto2(NULL);
        $produit3->setPhoto3(NULL);
        $manager->persist($produit3);

        $produit4 = new Produit();
        $produit4->setReference("3700166300088");
        $produit4->setLibelle("Yellow cable - HP03- Câble haut parleur jack - 3 m");
        $produit4->setDescription("Câble haut-parleur jack-jack  longueur de 3 mètres, suffisant pour connecter un baffle à une tête ampli.");
        $produit4->setPrixUnitaire(10);
        $produit4->setPhoto('p41.jfif');
        $produit4->setStock(20);
        $produit4->setTva(5, 00);
        $produit4->setPrixAchat(2);
        $produit4->setFournisseur($fournisseur4);
        $produit4->setCategorie($categorie30);
        $produit4->setPhoto2(NULL);
        $produit4->setPhoto3(NULL);
        $manager->persist($produit4);

        $produit5 = new Produit();
        $produit5->setReference("0885978901340");
        $produit5->setLibelle("Fender - Malibu Player Artic Gold");
        $produit5->setDescription("Une guitare électro-acoustique à un prix abordable avec de nombreux atouts pour un musicien");
        $produit5->setPrixUnitaire(325);
        $produit5->setPhoto("p51.jpg");
        $produit5->setStock(2);
        $produit5->setTva(5, 00);
        $produit5->setPrixAchat(140);
        $produit5->setFournisseur($fournisseur5);
        $produit5->setCategorie($categorie19);
        $produit5->setPhoto2("p52.jfif");
        $produit5->setPhoto3("p53.jpg");
        $manager->persist($produit5);

        $produit6 = new Produit();
        $produit6->setReference("4957812589017");
        $produit6->setLibelle("Yamaha - GSLG200S - Guitare cordes acier naturel");
        $produit6->setDescription("La guitare silencieuse Yamaha SLG200S délivre une performance presque inaudible avec un son acoustique incroyablement naturel.
");
        $produit6->setPrixUnitaire(700);
        $produit6->setPhoto("p61.jpg");
        $produit6->setStock(2);
        $produit6->setTva(5, 00);
        $produit6->setPrixAchat(550);
        $produit6->setFournisseur($fournisseur6);
        $produit6->setCategorie($categorie19);
        $produit6->setPhoto2("p62.jpg");
        $produit6->setPhoto3(NULL);
        $manager->persist($produit6);

        $produit7 = new Produit();
        $produit7->setReference("0694318024874");
        $produit7->setLibelle("Akai Professional MPK Mini mk3 - Clavier maître");
        $produit7->setDescription("Un contrôleur remis au goût du jour.Le MPK Mini, qui fait partie des claviers de contrôle les plus vendus au monde");
        $produit7->setPrixUnitaire(101);
        $produit7->setPhoto("p71.jpg");
        $produit7->setStock(1);
        $produit7->setTva(5, 00);
        $produit7->setPrixAchat(50);
        $produit7->setFournisseur($fournisseur7);
        $produit7->setCategorie($categorie8);
        $produit7->setPhoto2("p72.jfif");
        $produit7->setPhoto3("p73.jfif");
        $manager->persist($produit7);


        $produit8 = new Produit();
        $produit8->setReference("3700408361969");
        $produit8->setLibelle("Shiver - DPS200B Piano numérique Noir");
        $produit8->setDescription("Le Shiver DPS200 est un piano numérique accessible sans concession.");
        $produit8->setPrixUnitaire(699.00);
        $produit8->setPhoto("p81.jpg");
        $produit8->setStock(1);
        $produit8->setTva(5, 00);
        $produit8->setPrixAchat(420);
        $produit8->setFournisseur($fournisseur8);
        $produit8->setCategorie($categorie7);
        $produit7->setPhoto2("p82.jpg");
        $produit7->setPhoto3("p83.jpg");
        $manager->persist($produit8);



        $produit9 = new Produit();
        $produit9->setReference("4957812638401");
        $produit9->setLibelle("Yamaha - Arius YDP-144 noir");
        $produit9->setDescription("Le YDP-144 noir vous offre une expérience pianistique proche de celle un authentique piano à queue ',
");
        $produit9->setPrixUnitaire(929);
        $produit9->setPhoto("p91.jpg");
        $produit9->setStock(1);
        $produit9->setTva(5, 00);
        $produit9->setPrixAchat(750);
        $produit9->setFournisseur($fournisseur9);
        $produit9->setCategorie($categorie10);
        $manager->persist($produit9);

        //CommandeFixtures

        $commande1 = new Commande();
        $commande1->setDate(new \DateTime(2021 - 04 - 20));
        $commande1->setTotal(1232);
        $commande1->setStatut("livree");
        $commande1->setCpF(80560);
        $commande1->setVilleF("khkhkkhgs");
        $commande1->setUtilisateur($utilisateur2);
        $manager->persist($commande1);

        $commande2 = new Commande();
        $commande2->setDate(new \DateTime(2021 - 04 - 20));
        $commande2->setTotal(699);
        $commande2->setStatut("livree");
        $commande2->setCpF(80560);
        $commande2->setVilleF("khkhkkhgs");
        $commande2->setUtilisateur($utilisateur2);
        $manager->persist($commande2);



        //LivraisonFixtures

        $livraison1 = new Livraison();
        $livraison1->setDate(new \DateTime(2021 - 04 - 20));
        $livraison1->setAdresseL("59 rue tyugkhgk");
        $livraison1->setCpL(80560);
        $livraison1->setVilleL("khkhkkhgs");
        $livraison1->setCommande($commande1);
        $manager->persist($livraison1);

        $livraison2 = new Livraison();
        $livraison2->setDate(new \DateTime(2021 - 04 - 20));
        $livraison2->setAdresseL("59 rue tyugkhgk");
        $livraison2->setCpL(80560);
        $livraison2->setVilleL("khkhkkhgs");
        $livraison2->setCommande($commande2);
        $manager->persist($livraison2);

        $livraison3 = new Livraison();
        $livraison3->setDate(new \DateTime(2021 - 04 - 20));
        $livraison3->setAdresseL("59 rue tyugkhgk");
        $livraison3->setCpL(80560);
        $livraison3->setVilleL("khkhkkhgs");
        $livraison3->setCommande($commande2);
        $manager->persist($livraison3);

        //LigneCommandeFixture


        $ligne1 = new LigneDeCommande();
        $ligne1->setQuantite(1);
        $ligne1->setPrixVente(929);
        $ligne1->setTotalLigne(929);
        $ligne1->setProduit($produit9);
        $ligne1->setCommande($commande1);
        $manager->persist($ligne1);

        $ligne2 = new LigneDeCommande();
        $ligne2->setQuantite(3);
        $ligne2->setPrixVente(101);
        $ligne2->setTotalLigne(303);
        $ligne2->setProduit($produit7);
        $ligne2->setCommande($commande1);
        $manager->persist($ligne2);

        $ligne3 = new LigneDeCommande();
        $ligne3->setQuantite(1);
        $ligne3->setPrixVente(699);
        $ligne3->setTotalLigne(699);
        $ligne3->setProduit($produit8);
        $ligne3->setCommande($commande2);
        $manager->persist($ligne3);

        $ligne4 = new LigneDeCommande();
        $ligne4->setQuantite(1);
        $ligne4->setPrixVente(700);
        $ligne4->setTotalLigne(700);
        $ligne4->setProduit($produit6);
        $ligne4->setCommande($commande1);
        $manager->persist($ligne4);

        $manager->flush();
    }
}
