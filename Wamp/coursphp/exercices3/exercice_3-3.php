<?php
function Affichage_Liste($debut, $fin){
  $num_colonne = 0;
  print "<table>\n";
  print "<tr>\n";
  for ($i = $debut ; $i <= $fin ; $i++){
    print "<td>";
    print $i .' ';;
    print "</td>\n";
    $num_colonne += 1;
    if ($num_colonne == NOMBRE_COLONNES)
    {
      print "</tr>\n";
      print "<tr>\n";
      $num_colonne = 0;
    }
  }
  print "</tr>\n";
  print "</table>\n";
}
define ("NOMBRE_COLONNES", 15);
Affichage_Liste(23, 112);

?>