<?php
include_once "lib.php";

$string = file_get_contents("aoc_structures.json");
$json_a = json_decode($string, true);
$availability = csv_to_availability("aoc_matrix.csv");

foreach($json_a['data'] as &$structure) {
  if(array_key_exists($structure['name'], $availability)) {
    $structure = array_replace($structure, $availability[$structure['name']]);
    $structure['t'] .= " ".join(" ", $structure['avail']);
  }
}

echo json_encode($json_a);
?>