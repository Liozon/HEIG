<?php
// Auteur: Julien Muggli

// Règle le fuseau horaire par défaut (disponible dès PHP 5.2)
date_default_timezone_set('Europe/Zurich');

// Création de la classe texte
class Texte {
  public $paragraphes;

  function __construct() {
    $this->paragraphes = [];
  }

  function ajouterParagraphe($paragraphe) {
    array_push($this->paragraphes, $paragraphe);
  }

}

// Création de la classe paragraphe
class Paragraphe {
  public $mots;

  function __construct() {
    $this->phrases = [];
  }

  function ajouterPhrase($mot) {
    array_push($this->phrases, $mot);
  }

}

// Création de la classe mot
class Mot {
  public $mots;

  function __construct() {
    $this->mots = [];
  }

  function ajouterMot($mot) {
    array_push($this->mots, $mot);
  }

}

// Nouveau texte
$texte = new Texte();

// Formation de la première phrase
$mot1 = new Mot();
$mot1->ajouterMot('Voici');
$mot1->ajouterMot('le');
$mot1->ajouterMot('premier');
$mot1->ajouterMot('paragraphe');

// Formation de la deuxième phrase
$mot2 = new Mot();
$mot2->ajouterMot('Servez');
$mot2->ajouterMot('à');
$mot2->ajouterMot('ces');
$mot2->ajouterMot('messieurs');
$mot2->ajouterMot('des');
$mot2->ajouterMot('bières');
$mot2->ajouterMot('et');
$mot2->ajouterMot('des');
$mot2->ajouterMot('kiwis.');

// Formation de la troisième phrase
$mot3 = new Mot();
$mot3->ajouterMot('Une');
$mot3->ajouterMot('phrase');
$mot3->ajouterMot('de');
$mot3->ajouterMot('plus,');
$mot3->ajouterMot('qui');
$mot3->ajouterMot('contient');
$mot3->ajouterMot('une');
$mot3->ajouterMot('virgule.');

// Création d'un nouveau paragraphe
$paragraphe1 = new Paragraphe();
// Attribution des phrases dans le paragraphe
$paragraphe1->ajouterPhrase($mot1);
$paragraphe1->ajouterPhrase($mot2);
$paragraphe1->ajouterPhrase($mot3);

// Formation de la deuxième phrase
$mot4 = new Mot();
$mot4->ajouterMot('Voici');
$mot4->ajouterMot('le');
$mot4->ajouterMot('2ème');
$mot4->ajouterMot('paragraphe,');
$mot4->ajouterMot('qui');
$mot4->ajouterMot('consiste');
$mot4->ajouterMot('en');
$mot4->ajouterMot('une');
$mot4->ajouterMot('seule');
$mot4->ajouterMot('phrase.');

// Création du deuxième paragraphe
$paragraphe2 = new Paragraphe();
// Attribution des phrases dans le paragraphe
$paragraphe2->ajouterPhrase($mot4);

// Construction du texte avec les deux parahgraphes
$texte->ajouterParagraphe($paragraphe1);
$texte->ajouterParagraphe($paragraphe2);

?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <title>Examen PHP - Exercice 3</title>
        <meta charset="utf-8">
    </head>

    <body>
        <table cellspacing="0">
            <?php
foreach ($texte->paragraphes as $key => $paragraphe) {
  ?>
                <?php
  foreach ($paragraphe->phrases as $key1 => $mot) {
    ?>
                    <tr>
                        <?php
    foreach ($mot->mots as $key2 => $mot) {?>
                            <td>
                                <?php echo $mot; ?>
                            </td>
                            <?php } ?>
                    </tr>
                    <?php
  } ?>
                        <?php
} ?>
        </table>
        <style>
            tr,
            td,
            table {
                border: 1px solid #000;
                padding: 10px;
            }

            tr,
            td {
                border-spacing: 0px;
                display: inline-block;
            }

            td {
                margin-right: -5px;
            }
        </style>
    </body>

    </html>