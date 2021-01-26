<?php 

include __DIR__."/db.php";

header("Content-type: application/json");

$filterDatabase = $albums;

$filter = strtolower($_GET["genre"]);

if (empty($filter)) {
  $filteredDatabase = $albums;
} else {
  $filteredDatabase = [];

  foreach ($albums as $album) {
    if (strtolower($album["genre"]) == $filter) {
      $filteredDatabase[] = $album;
    }
  }
}

echo json_encode($filteredDatabase);







?>