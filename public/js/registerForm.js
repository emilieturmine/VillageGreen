//Création des différentes variables nécessaires au controle du formulaire.
//variables pour récupérer les informations. 
var email = document.getElementById("email").value;//valeur alphanumérique
// var plainPassword = document.getElementById("plainPassword").value;
var pseudo = document.getElementById("pseudo").value;
var nom = document.getElementById("nom").value;
var prenom = document.getElementById("prenom").value;
var adresse = document.getElementById("adresse").value;
var cp = document.getElementById("cp").value;
var Ville = document.getElementById("Ville").value;
var agreeTerms = document.getElementById("agreeTerms").checked;
var Formulaire = new Array();
//création d'un tableau pour les données récupérées
var ConfirmationEnvoi = true;
// pour confirmer l'envoi du formulaire
//variables pour les messages d'erreur
var erreurEmail = document.getElementById("erreurEmail");
// var erreurPlainPassword = document.getElementById("erreurPlainPassword");
var erreurPseudo = document.getElementById("erreurPseudo");
var erreurNom = document.getElementById("erreurNom");
var erreurPrenom = document.getElementById("erreurPrenom");
var erreurAdresse = document.getElementById("erreurAdresse");
var erreurCp = document.getElementById("erreurCp");
var erreurVille = document.getElementById("erreurVille");
var erreurAgreeTerms = document.getElementById("erreurAgreeTerms");
// variable pour controler la saisie avec utilisation des expressions réguliere 
var emailValid = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
var pseudoValid = /^[A-Z][A-Za-z\é\è\ê\-]+$/;
var nomValid = /^[A-Z][A-Za-z\é\è\ê\-]+$/;
var prenomValid = /^[A-Z][A-Za-z\é\è\ê\-]+$/;
var adresseValid = /^[0-9][A-Z][A-Za-z\é\è\ê\-]+$/;
var cpValid = /^[0-9]+$/;
var villeValid = /^[A-Z][A-Za-z\é\è\ê\-]+$/;
//variable pour les évenements, créer un evenement lors du click sur un des boutons
var FormValid = document.getElementById("bouton_envoi");
FormValid.addEventListener("click", validation);
//validation du formulaire avec verification grace a la fonction "validation".
var reset = document.getElementById("reset");
reset.addEventListener("click", reinitialisation);
// efface ttes les données entrées dans le formulaire grace à la fonction "reinitialisation"
function reinitialisation()
//lorsque cette fonction est appelée on veut que le contenu des variables si dessous soit vides
{ 
    erreurEmail.textContent = "";
    // erreurPlainPassword.textContent = "";
    erreurPseudo.textContent = "";
    erreurNom.textContent = "";
    erreurPrenom.textContent = "";
    erreurAdresse.textContent = "";
    erreurCp.textContent = "";
    erreurVille.textContent = "";
    erreurAgreeTerms.textContent = "";
}
//Création d'une fonction pour lancer toutes les autres en une fois
function validation() {
  ConfirmationEnvoi = true;
  EmailVerif();
//   PlainPasswordVerif();
  PseudoVerif();
  NomVerif();
  PrenomVerif();
  AdresseVerif();
  CpVerif();
  VilleVerif();
  AgreeTermsVerif();
  EnvoiFormulaire();
  Envoi();
}


//Création des différentes fonctions nécessaires au controle du formulaire

//pour l'email 
function EmailVerif() {
    email = document.getElementById("email").value;
    if (email == "") {
      erreurEmail.textContent = "Veuillez entrer votre adresse email";
      erreurEmail.style.color = "red";
      ConfirmationEnvoi = false;
    } else {
      if (emailValid.test(email) == false) {
        // utilisation expression réguliere
        erreurEmail.textContent = "La syntaxe utilisé n'est pas reconnu par le programme (exemple@domaine.fr)";
        erreurEmail.style.color = "red";
        ConfirmationEnvoi = false;
      } else {
        erreurEmail.textContent = "";
      }
    }
  }

  function PseudoVerif() {
    nom = document.getElementById("Pseudo").value;
    // récupération des informations entrée pour le nom
    if (pseudo == "") {
      // si rien est entrée pour la question nom alors le texte affecté à la variable ErreurNom apparait en rouge et le formulaire ne s'envoie pas
      erreurPseudo.textContent = "Veuillez entrer votre pseudo";
      erreurPseudo.style.color = "red";
      ConfirmationEnvoi = false;
    } else {
      //sinon
      if (pseudoValid.test(pseudo) == false) {
        // si le nom entré n'est pas conforme alors le texte affecté à la variable ErreurNom apparait en rouge et le formulaire ne s'envoie pas
        erreurPseudo.textContent = "La syntaxe utilisé n'est pas reconnu par le programme";
        erreurPseudo.style.color = "red";
        ConfirmationEnvoi = false;
      } else {
        // si le nom entré est conforme rien ne s'affiche
        erreurPseudo.textContent = "";
      }
    }
    //pour le prénom mm fonctionnement que pour nom mais les variables utilisés sont différentes
  }

//pour le nom

function NomVerif() {
  nom = document.getElementById("nom").value;
  // récupération des informations entrée pour le nom
  if (nom == "") {
    // si rien est entrée pour la question nom alors le texte affecté à la variable ErreurNom apparait en rouge et le formulaire ne s'envoie pas
    erreurNom.textContent = "Veuillez entrer votre Nom";
    erreurNom.style.color = "red";
    ConfirmationEnvoi = false;
  } else {
    //sinon
    if (nomValid.test(nom) == false) {
      // si le nom entré n'est pas conforme alors le texte affecté à la variable ErreurNom apparait en rouge et le formulaire ne s'envoie pas
      erreurNom.textContent = "La syntaxe utilisé n'est pas reconnu par le programme";
      erreurNom.style.color = "red";
      ConfirmationEnvoi = false;
    } else {
      // si le nom entré est conforme rien ne s'affiche
      erreurNom.textContent = "";
    }
  }
  //pour le prénom mm fonctionnement que pour nom mais les variables utilisés sont différentes
}
function PrenomVerif() {
  prenom = document.getElementById("prenom").value;
  if (prenom == "") {
    erreurPrenom.textContent = "Veuillez entrer votre prénom";
    erreurPrenom.style.color = "red";
    ConfirmationEnvoi = false;
  } else {
    if (prenomValid.test(prenom) == false) {
      erreurPrenom.textContent = "La syntaxe utilisé n'est pas reconnu par le programme";
      erreurPrenom.style.color = "red";
      ConfirmationEnvoi = false;
    } else {
      erreurPrenom.textContent = "";
    }
  }
}


//pour l'adresse
function AdresseVerif() {
  // on récupere les informations 
  adresse = document.getElementById("adresse").value;
  if (adresse == "") {
    erreurAdresse.textContent = "Veuillez entrer votre adresse";
    erreurAdresse.style.color = "red";
    ConfirmationEnvoi = false;
  } else {
    if (adresseValid.test(adresse) == false) {
      erreurAdresse.textContent = "La syntaxe utilisé n'est pas reconnu par le programme";
      erreurAdresse.style.color = "red";
      ConfirmationEnvoi = false;
    } else {
      erreurAdresse.textContent = "";
    }
  }
}

function CpVerif() {
  cp = document.getElementById("cp").value;
  var cpValid = document.getElementById("cp").value.length;
  //on veut verifier le nombre de chiffre enté pour verifier la veracité du code postal entré
  if (cp == "") {
    erreurCp.textContent = "Veuillez entrez votre code postal";
    erreurCp.style.color = "red";
    ConfirmationEnvoi = false;
  } else {
    if (5 < CpVerif) {
      // si il y a plus de 5 chiffres
      erreurCp.textContent = "Veuillez entrer un code postale valide ( 5 chiffres)";
      erreurCp.style.color = "red";
      ConfirmationEnvoi = false;
    } else {
      if (5 > CpVerif) {
        //si il y a moins de 5 chiffres
        erreurCp.textContent = "Veuillez entrer un code postale valide ( 5 chiffres)";
        erreurCp.style.color = "red";
        ConfirmationEnvoi = false;
      } else {
        erreurCp.textContent = "";
        cp = cp;
      }
    }
  }
}
//pour la ville

function VilleVerif() {
  ville = document.getElementById("ville").value;
  // récupération des informations entrée pour le nom
  if (ville == "") {
    // si rien est entrée pour la question nom alors le texte affecté à la variable ErreurNom apparait en rouge et le formulaire ne s'envoie pas
    erreurVille.textContent = "Veuillez entrer votre ville";
    erreurVille.style.color = "red";
    ConfirmationEnvoi = false;
  } else {
    //sinon
    if (villeValid.test(ville) == false) {
      // si le nom entré n'est pas conforme alors le texte affecté à la variable ErreurNom apparait en rouge et le formulaire ne s'envoie pas
      erreurVille.textContent = "La syntaxe utilisé n'est pas reconnu par le programme";
      erreurVille.style.color = "red";
      ConfirmationEnvoi = false;
    } else {
      // si le nom entré est conforme rien ne s'affiche
      erreurVille.textContent = "";
    }
  }
}

// pour agreeterms
function   AgreeTermsVerif() {
  agreeTerms = document.getElementById("agreeTerms").checked;
  if (agreeTerms == false) {
    erreurAgreeTerm.textContent = "Cochez la case pour accepter le traitement";
    erreurAgreeTerm.style.color = "red";
    ConfirmationEnvoi = false;
  } else {
    erreurAgreeTerm.textContent = "";
    agreeTerms = "Accepté";
  }
}
//pour l'envoi formulaire
function EnvoiFormulaire() {
  // si pour toutes fonctions au dessus la variable confirmationnvoi est vrai alors les informations récoltés sont enregistrées dans le tableau
  if (ConfirmationEnvoi == true) {
    Formulaire = new Array(
      email,
      pseudo,
      nom,
      prenom,
      adresse,
      cp,
      ville,
      agreeTerms
    );
    console.log(formulaire);// le tableau est visible dans la console
    window.alert(
      "Les infos sont récupérés sur Javascript " + Formulaire
    );// affiche une fenetre avec le texte ci dessus et les données recoltés

  }
}

function Envoi() {
  //si un des confirmation envoi est faux alors pas d'envoi du formulaire
  if (ConfirmationEnvoi == false) {
    return false;
  }
  return true;
  //sinon envoi du formulaire
}