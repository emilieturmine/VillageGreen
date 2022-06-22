<?php
//reste a refaire les association avec les tables avec $manager->persist($disc1);

// Pour associer vos entités
//$disc1->setArtist($artist1);
// ou 
//$artist1->addDisc($disc1);

//$manager->flush();
namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Produit;
use App\Entity\Commande;
use App\Entity\Categorie;
use App\Entity\Livraison;
use App\Entity\Fournisseur;
use App\Entity\SsCategorie;
use App\Entity\LigneDeCommande;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
        private $uph;

        public function __construct(UserPasswordHasherInterface $uph)
        {
                $this->uph = $uph;        
        }

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
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */

        // CategorieFixtures

        $categorie1 = new Categorie();
        $categorie1->setNom("Instruments à vents");
        $categorie1->setPhoto("c1.png");
                $manager->persist($categorie1);
     
        $categorie2 = new Categorie();
        $categorie2->setNom("Pianos");
        $categorie2->setPhoto("c2.png");
        $manager->persist($categorie2);

        $categorie3 = new Categorie();
        $categorie3->setNom("Batteries");
        $categorie3->setPhoto("c3.jpg");
        $manager->persist($categorie3);

        $categorie4 = new Categorie();
        $categorie4->setNom("Guitares");
        $categorie4->setPhoto("c4.png");
        $manager->persist($categorie4);

        $categorie5 = new Categorie();
        $categorie5->setNom("Amplis");
        $categorie5->setPhoto("c5.png");
        $manager->persist($categorie5);

       
        $categorie6 = new Categorie();
        $categorie6->setNom("Cables");
        $categorie6->setPhoto("c6.png");
        $manager->persist($categorie6);

        $categorie7 = new Categorie();
        $categorie7->setNom("Mixages");
        $categorie7->setPhoto("c7.png");
        $manager->persist($categorie7);

        $categorie8= new Categorie();
        $categorie8->setNom("Micros");
        $categorie8->setPhoto("c8.png");
        $manager->persist($categorie8);
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
// SSCategorieFixtures

  $sscategorie1 = new SsCategorie();
         $sscategorie1->setNom("Flûtes");
         $sscategorie1->setPhoto("sc1.jpg ");
         $sscategorie1->setCatParent($categorie1);
        $manager->persist( $sscategorie1);

         $sscategorie2 = new SsCategorie();
         $sscategorie2->setNom("Trompettes");
         $sscategorie2->setPhoto("sc2.jpg");
         $sscategorie2->setCatParent($categorie1);
        $manager->persist( $sscategorie2);


         $sscategorie3 = new SsCategorie();
         $sscategorie3->setNom("Clarinettes");
         $sscategorie3->setPhoto("sc3.jpg");
         $sscategorie3->setCatParent($categorie1);
        $manager->persist( $sscategorie3);


         $sscategorie4 = new SsCategorie();
         $sscategorie4->setNom("Saxophone");
         $sscategorie4->setPhoto("sc4.jpg");
         $sscategorie4->setCatParent($categorie1);
        $manager->persist( $sscategorie4);

  $sscategorie5 = new SsCategorie();
         $sscategorie5->setNom("piano");
         $sscategorie5->setPhoto("sc5.png");
         $sscategorie5->setCatParent($categorie2);
        $manager->persist( $sscategorie5);

         $sscategorie6 = new SsCategorie();
         $sscategorie6->setNom("Claviers");
         $sscategorie6->setPhoto("sc6.jpg");
         $sscategorie6->setCatParent($categorie2);
        $manager->persist( $sscategorie6);

         $sscategorie7 = new SsCategorie();
         $sscategorie7->setNom("Synthetiseur");
         $sscategorie7->setPhoto("ssc7.jpg");
         $sscategorie7->setCatParent($categorie2);
        $manager->persist( $sscategorie7);

         $sscategorie8 = new SsCategorie();
         $sscategorie8->setNom("Accessoires");
         $sscategorie8->setPhoto("sc10.png");
         $sscategorie8->setCatParent($categorie2);
        $manager->persist( $sscategorie8);

         $sscategorie9 = new SsCategorie();
         $sscategorie9->setNom("Partitions");
         $sscategorie9->setPhoto("sc11.jpg");
         $sscategorie9->setCatParent($categorie2);
        $manager->persist( $sscategorie9);

 $sscategorie10 = new SsCategorie();
         $sscategorie10->setNom("Acoustiques");
         $sscategorie10->setPhoto("sc13.jpg");
         $sscategorie10->setCatParent($categorie3);
        $manager->persist( $sscategorie10);

        $sscategorie11 = new SsCategorie();
        $sscategorie11->setNom("Electronique");
        $sscategorie11->setPhoto("sc14.jpg");
        $sscategorie11->setCatParent($categorie3);
        $manager->persist($sscategorie11);

        $sscategorie12 = new SsCategorie();
        $sscategorie12->setNom("Accessoires");
        $sscategorie12->setPhoto("sc15.jpg");
        $sscategorie12->setCatParent($categorie3);
        $manager->persist($sscategorie12);

        $sscategorie13 = new SsCategorie();
        $sscategorie13->setNom("Percussions");
        $sscategorie13->setPhoto("sc16.png");
        $sscategorie13->setCatParent($categorie3);
        $manager->persist($sscategorie13);

        $sscategorie14 = new SsCategorie();
        $sscategorie14->setNom("Enfant");
        $sscategorie14->setPhoto("sc17.jpg");
        $sscategorie14->setCatParent($categorie3);
        $manager->persist($sscategorie14);

 $sscategorie15 = new SsCategorie();
        $sscategorie15->setNom("Electriques");
        $sscategorie15->setPhoto("sc19.jpg");
        $sscategorie15->setCatParent($categorie4);
        $manager->persist($sscategorie15);

        $sscategorie16 = new SsCategorie();
        $sscategorie16->setNom("Classique");
        $sscategorie16->setPhoto("sc20.jpg");
        $sscategorie16->setCatParent($categorie4);
        $manager->persist($sscategorie16);

        $sscategorie17 = new SsCategorie();
        $sscategorie17->setNom("Folk");
        $sscategorie17->setPhoto("sc21.jpg");
        $sscategorie17->setCatParent($categorie4);
        $manager->persist($sscategorie17);

        $sscategorie18 = new SsCategorie();
        $sscategorie18->setNom("Ukulele");
        $sscategorie18->setPhoto("sc22.jpg");
        $sscategorie18->setCatParent($categorie4);
        $manager->persist($sscategorie18);

         $sscategorie23 = new SsCategorie();
         $sscategorie23->setNom("Cordes");
         $sscategorie23->setPhoto("sc23.jpg");
         $sscategorie23->setCatParent($categorie4);
        $manager->persist( $sscategorie23);

  $sscategorie25 = new SsCategorie();
         $sscategorie25->setNom("Enceintes");
         $sscategorie25->setPhoto("sc25.jpg");
         $sscategorie25->setCatParent($categorie5);
        $manager->persist( $sscategorie25);

         $sscategorie26 = new SsCategorie();
         $sscategorie26->setNom("Caisson");
         $sscategorie26->setPhoto("sc26.jpg");
         $sscategorie26->setCatParent($categorie5);
        $manager->persist( $sscategorie26);

         $sscategorie27 = new SsCategorie();
         $sscategorie27->setNom("Basses");
         $sscategorie27->setPhoto("sc27.jpg");
         $sscategorie27->setCatParent($categorie5);
        $manager->persist( $sscategorie27);

         $sscategorie28 = new SsCategorie();
         $sscategorie28->setNom("Amplis");
         $sscategorie28->setPhoto("sc28.jpg");
         $sscategorie28->setCatParent($categorie5);
        $manager->persist( $sscategorie28);

         $sscategorie29 = new SsCategorie();
         $sscategorie29->setNom("Casques");
         $sscategorie29->setPhoto("sc29.jpg");
         $sscategorie29->setCatParent($categorie5);
        $manager->persist( $sscategorie29);


/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
        //UtilisateurFixture

        $user1 = new User();
        $user1->setEmail("ultrices.a.auctor@accumsan.co.uk");
        $user1->setRoles(["ROLE_USER"]);
        $user1->setPassword($this->uph->hashPassword($user1, "Afpa1234"));
        $user1->setPseudo("In");
        $user1->setNom("Santiago");
        $user1->setPrenom("Dexter");
        $user1->setAdresse("13 rue retu");
        $user1->setCp(80000);
        $user1->setVille("Amiens");
        $user1->setCoefficient("0.24");
        $user1->setCommercial(NULL);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail("iaculis.quis@orci.ca");
        $user2->setRoles(["ROLE_USER"]);
        $user2->setPassword($this->uph->hashPassword($user2, "Afpa1234"));
        $user2->setPseudo("Maecenas");
        $user2->setNom("Vasquez");
        $user2->setPrenom("Carol");
        $user2->setAdresse("2057 Curabitur Road");
        $user2->setCp(62000);
        $user2->setVille("Arras");
        $user2->setCoefficient("0.30");
        $user2->setCommercial($user1);
        $manager->persist($user2);

        $user3 = new User();
        $user3->setEmail("a @sodalesmauris.co.uk");
        $user3->setRoles(["ROLE_USER"]);
        $user3->setPassword($this->uph->hashPassword($user3, "Afpa1234"));
        $user3->setPseudo("euismod");
        $user3->setNom("Cortez");
        $user3->setPrenom("Troy");
        $user3->setAdresse("287 -6448 Tincidunt Ave ");
        $user3->setCp(30000);
        $user3->setVille("Marseille");
        $user3->setCoefficient(0, 15);
        $user3->setCommercial($user1);
        $manager->persist($user3);

        $user4 = new User();
        $user4->setEmail("emilie.turmine@villagegreen.com");
        $user4->setRoles(["ROLE_ADMIN"]);
        $user4->setPassword($this->uph->hashPassword($user4, "azerty"));
        $user4->setPseudo("emilie");
        $user4->setNom("Turmine");
        $user4->setPrenom("Emilie");
        $user4->setAdresse("7 rue de la toile ");
        $user4->setCp(30000);
        $user4->setVille("Saturne");
        $user4->setCoefficient(0,30);
        $user4->setCommercial(NULL);
        $manager->persist($user4);
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
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
        $produit1->setSsCategorie($sscategorie8);
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
        $produit2->setSsCategorie($sscategorie10);
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
        $produit3->setSsCategorie($sscategorie10);
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
        $produit4->setSsCategorie($sscategorie8);
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
        $produit5->setSsCategorie($sscategorie8);
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
        $produit1->setSsCategorie($sscategorie17);
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
        $produit7->setSsCategorie($sscategorie7);
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
        $produit8->setFournisseur($fournisseur6);
        $produit8->setSsCategorie($sscategorie7);
        $produit8->setPhoto2("p82.jpg");
        $produit8->setPhoto3("p83.jpg");
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
        $produit9->setSsCategorie($sscategorie5);
        $manager->persist($produit9);

       $produit10 = new Produit();
       $produit10->setReference("166859");
       $produit10->setLibelle("TRS-21G Soprano Recorder");
       $produit10->setDescription("    Doigté allemand
       3 pièces
      
       Couleur: Blanc
       Etui et écouvillon incl.
   ");
       $produit10->setPrixUnitaire(3,98);
       $produit10->setPhoto("p101.jpg");
       $produit10->setStock(50);
       $produit10->setTva(5, 00);
       $produit10->setPrixAchat(0.50);
       $produit10->setPhoto2("p102.jpg");
       $produit10->setPhoto3("p103.jpg");
       $produit10->setFournisseur($fournisseur2);
        $produit10->setSsCategorie($sscategorie1);
        $manager->persist($produit10);

       $produit11 = new Produit();
       $produit11->setReference("140092");
       $produit11->setLibelle("YRS-24 B Soprano Recorder");
       $produit11->setDescription("    Corps en ABS
       3 pièces
       Couleur: Blanc
       Trousse incl.
   ");
       $produit11->setPrixUnitaire(8.90);
       $produit11->setPhoto("p111.jpg");
       $produit11->setPhoto2("p112.jpg");
       $produit11->setPhoto3("p113.jpg");
       $produit11->setStock(50);
       $produit11->setTva(5, 00);
       $produit11->setPrixAchat(2);
       $produit11->setFournisseur($fournisseur3);
        $produit11->setSsCategorie($sscategorie1);
        $manager->persist($produit11);

        $produit12 = new Produit();
        $produit12->setReference("200795");
        $produit12->setLibelle("506B Symphony Sopranino");
        $produit12->setDescription("    Série Symphony
        Corps marron foncé
        3 pièces
        Trousse incl.
    ");
        $produit12->setPrixUnitaire(18.90);
        $produit12->setPhoto("p121.jpg");
        $produit12->setPhoto2("p122.jpg");
        $produit12->setPhoto3("p123.jpg");
        $produit12->setStock(50);
        $produit12->setTva(5, 00);
        $produit12->setPrixAchat(3);
        $produit12->setFournisseur($fournisseur3);
        $produit12->setSsCategorie($sscategorie1);
        $manager->persist($produit12);

        $produit13 = new Produit();
        $produit13->setReference("120131");
        $produit13->setLibelle("4105 Rottenburgh Sopranino");
        $produit13->setDescription("
        Double trou
        Etui, écouvillon, chiffon, tableau de doigtés et set d'entretien incl.
    ");
        $produit13->setPrixUnitaire(275);
        $produit13->setPhoto("p131.jpg");
        $produit13->setPhoto2("p132.jpg");
        $produit13->setPhoto3("p133.jpg");
        $produit13->setStock(2);
        $produit13->setTva(5, 00);
        $produit13->setPrixAchat(100);
        $produit13->setFournisseur($fournisseur2);
        $produit13->setSsCategorie($sscategorie1);
        $manager->persist($produit13);

        $produit14 = new Produit();
        $produit14->setReference("150560");
        $produit14->setLibelle("Mollenhauer 2296 Canta Alto Recorder");
        $produit14->setDescription("   Corps en poirier naturel
        Doigté allemand
        Trousse en coton incl.");
        $produit14->setPrixUnitaire(375);
        $produit14->setPhoto("p141.jpg");
        $produit14->setPhoto2("p142.jpg");
        $produit14->setPhoto3("p143.jpg");
        $produit14->setStock(2);
        $produit14->setTva(5, 00);
        $produit14->setPrixAchat(175);
        $produit14->setFournisseur($fournisseur2);
        $produit14->setSsCategorie($sscategorie1);
        $manager->persist($produit14);

        $produit15 = new Produit();
        $produit15->setReference("200801");
        $produit15->setLibelle("509B Symphony Alto Recorder
        ");
        $produit15->setDescription("      Série Symphony
        En matière plastique
        Corps marron foncé
        Trousse et repose-pouce amovible incl.
    
    ");
        $produit15->setPrixUnitaire(38);
        $produit15->setPhoto("p151.jpg");
        $produit15->setPhoto2("p152.jpg");
        $produit15->setPhoto3("p153.jpg");
        $produit15->setStock(2);
        $produit15->setTva(5, 00);
        $produit15->setPrixAchat(4);
        $produit15->setFournisseur($fournisseur1);
        $produit15->setSsCategorie($sscategorie1);
        $manager->persist($produit15);

        $produit16 = new Produit();
        $produit16->setReference("490150");
        $produit16->setLibelle(" 5431KC Denner Tenor with Key");
        $produit16->setDescription("    Doigté baroque
        Double trou
        En cerisier
        Etui et accessoires incl.
    ");
        $produit16->setPrixUnitaire(1229);
        $produit16->setPhoto("p161.jpg");
        $produit16->setPhoto2("p162.jpg");
        $produit16->setPhoto3("p163.jpg");
        $produit16->setStock(1);
        $produit16->setTva(5, 00);
        $produit16->setPrixAchat(750);
        $produit16->setFournisseur($fournisseur2);
        $produit16->setSsCategorie($sscategorie1);
        $manager->persist($produit16);

        $produit17 = new Produit();
        $produit17->setReference("166866");
        $produit17->setLibelle("TRB-31B Matt Bass Recorder");
        $produit17->setDescription("Le YDP-144 noir vous offre une expérience pianistique proche de celle un authentique piano à queue ',
");
        $produit17->setPrixUnitaire(99);
        $produit17->setPhoto("p171.jpg");
        $produit17->setPhoto2("p172.jpg");
        $produit17->setPhoto3("p173.jpg");
        $produit17->setStock(10);
        $produit17->setTva(5, 00);
        $produit17->setPrixAchat(50);
        $produit17->setFournisseur($fournisseur6);
        $produit17->setSsCategorie($sscategorie1);
        $manager->persist($produit17);

        $produit18 = new Produit();
        $produit18->setReference("469561");
        $produit18->setLibelle("Nataraj Bansuri Pro Flute D");
        $produit18->setDescription("    Flûte traversière indienne en bambou
        Tonalité: Ré
        Qualité professionnelle
        Couverture en soie incl.
       ");
        $produit18->setPrixUnitaire(66);
        $produit18->setPhoto("p181.jpg");
        $produit18->setPhoto2("p182.jpg");
        $produit18->setPhoto3("p183.jpg");
        $produit18->setStock(1);
        $produit18->setTva(5, 00);
        $produit18->setPrixAchat(16);
        $produit18->setFournisseur($fournisseur1);
        $produit18->setSsCategorie($sscategorie1);
        $manager->persist($produit18);

        $produit19 = new Produit();
        $produit19->setReference("519031");
        $produit19->setLibelle("Artinoise Re.corder Black");
        $produit19->setDescription("   
        Capteurs tactiles pour la reconnaissance des doigtés
        Capteur d'air pour mesurer la force de la respiration
        Capteur d'inertie supplémentaire pour donner plus d'expressivité au jeu
        Fabriquée en Italie
    ");
        $produit19->setPrixUnitaire(66);
        $produit19->setPhoto("p191.jpg");
        $produit19->setPhoto2("p192.jpg");
        $produit19->setPhoto3("p193.jpg");
        $produit19->setStock(1);
        $produit19->setTva(5, 00);
        $produit19->setPrixAchat(40);
        $produit19->setFournisseur($fournisseur7);
        $produit19->setSsCategorie($sscategorie1);
        $manager->persist($produit19);

        $produit20 = new Produit();
        $produit20->setReference("315977");
        $produit20->setLibelle("Shaman Double Flute");
        $produit20->setDescription("   
        Fabriquée par le maître artisan Turquoise Bear
        En pin
        Huilée avec de l'huile d'amande
        Livrée en trousse
    ");
        $produit20->setPrixUnitaire(159);
        $produit20->setPhoto("p201.jpg");
        $produit20->setPhoto2("p202.jpg");
        $produit20->setPhoto3("p203.jpg");
        $produit20->setStock(1);
        $produit20->setTva(5, 00);
        $produit20->setPrixAchat(75);
        $produit20->setFournisseur($fournisseur3);
        $produit20->setSsCategorie($sscategorie1);
        $manager->persist($produit20);

        $produit21 = new Produit();
        $produit21->setReference("514853");
        $produit21->setLibelle(" Duduk Premium in A");
        $produit21->setDescription("
    
            Tonalité: La
            Qualité de concert
            Fabriqué à partir de bois d'abricotier séché pendant env. 10 à 12 ans
            
        
        ");
        $produit21->setPrixUnitaire(311);
        $produit21->setPhoto("p211.jpg");
        $produit21->setPhoto2("p212.jpg");
        $produit21->setPhoto3("p213.jpg");
        $produit21->setStock(1);
        $produit21->setTva(5, 00);
        $produit21->setPrixAchat(150);
        $produit21->setFournisseur($fournisseur8);
        $produit21->setSsCategorie($sscategorie1);
        $manager->persist($produit21);

/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
        //CommandeFixtures

        $commande1 = new Commande();
        $commande1->setDate(new \DateTime(2021 - 04 - 20));
        $commande1->setTotal(1232);
        $commande1->setStatut("livree");
        $commande1->setCpF(80560);
        $commande1->setVilleF("khkhkkhgs");
        $commande1->setUser($user2);
        $manager->persist($commande1);

        $commande2 = new Commande();
        $commande2->setDate(new \DateTime(2021 - 04 - 20));
        $commande2->setTotal(699);
        $commande2->setStatut("livree");
        $commande2->setCpF(80560);
        $commande2->setVilleF("khkhkkhgs");
        $commande2->setUser($user2);
        $manager->persist($commande2);

/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */

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
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
/***************************************************************************************************************************** */
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
