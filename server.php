<?php 

include __DIR__."/db.php";

header("Content-type: application/json");

$filterDatabase = $albums;
//PRELEVO IL GENRE DALLA QUERY
$filter = strtolower($_GET["genre"]);

if (empty($filter)) {
  //SE IL GENRE è VUOTO RESTITUISCI ARRAY TOTALE
  $filteredDatabase = $albums;
} else {
  //ALTRIMENTI
  $filteredDatabase = [];
  // PER OGNI ALBUM CONTROLLA IL GENRE
  foreach ($albums as $album) {
    //SE IL GENRE FOSSE UGUALE A QUELLO PASSATO NELLA QUERY, PUSHALO NELL'ARRAY
    if (strtolower($album["genre"]) == $filter) {
      //RESTITUISCI ARRAY FILTRATO PER GENERE
      $filteredDatabase[] = $album;
    }
  }
}
//FAI L'ENCODE IN JSON
echo json_encode($filteredDatabase);







?>