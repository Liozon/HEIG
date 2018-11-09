<h1>Liste de prix</h1>

<p>
<a href="exercice_3-2.php?langue=fr">français</a>
<a href="exercice_3-2.php?langue=en">anglais</a>
<a href="exercice_3-2.php?langue=de">allemand</a>
</p>

<?php

define ("TAUX_EURO", 1.22);

$langue = $_GET["langue"];

print ("Langue choisie : " . $langue . "<br>");

/*
 * Inclusion du fichier contenant les informations des articles en fonction de la langue choisie
 * Si aucune langue n'est choisie, on prend la langue française par défaut
 */
switch($langue){
     case 'en':
         include('exercice_3-2_anglais.php');
         break;
     case 'de':
         include('exercice_3-2_allemand.php');
         break;
     default:
         include('exercice_3-2_francais.php');
}
?>

<table>
  <tr>
    <th>Description</th>
    <th>Prix </th>
  </tr>
  <tr>
    <td><?php print DESCRIPTION_ARTICLE_1; ?></td>
    <td>
    <?php
    /*
     * Si la monnaie à utiliser est l'euro, on affiche les prix en euro,
     * Sinon on les affiches en francs suisses
     */
    print (DEVISE == 'EURO')? (PRIX_ARTICLE_1*TAUX_EURO) : PRIX_ARTICLE_1 ;
    ?>
    </td>
  </tr>
  <tr>
    <td><?php print DESCRIPTION_ARTICLE_2; ?></td>
    <td>
      <?php
      /*
       * Si la monnaie à utiliser est l'euro, on affiche les prix en euro,
       * Sinon on les affiches en francs suisses
       */
      print (DEVISE == 'EURO')? (PRIX_ARTICLE_2*TAUX_EURO) : PRIX_ARTICLE_2 ;
      ?>
    </td>
  </tr>
  <tr>
    <td><?php print DESCRIPTION_ARTICLE_3; ?></td>
    <td>
      <?php
      /*
       * Si la monnaie à utiliser est l'euro, on affiche les prix en euro,
       * Sinon on les affiches en francs suisses
       */
      print (DEVISE == 'EURO')? (PRIX_ARTICLE_3*TAUX_EURO) : PRIX_ARTICLE_3 ;
      ?>
    </td>
  </tr>
  <tr>
    <td><?php print DESCRIPTION_ARTICLE_4; ?></td>
    <td>
      <?php
      /*
       * Si la monnaie à utiliser est l'euro, on affiche les prix en euro,
       * Sinon on les affiches en francs suisses
       */
      print (DEVISE == 'EURO')? (PRIX_ARTICLE_4*TAUX_EURO) : PRIX_ARTICLE_4 ;
      ?>
    </td>
  </tr>
</table>
