<?php
include_once "lib.php";

$file_string = file_get_contents("aoc_technologies.json");
$json_a = json_decode($file_string, true);
$availability = csv_to_availability("aoc_matrix.csv");

foreach($json_a['data'] as &$tech) {
  if(array_key_exists($tech['name'], $availability)) {
    $tech = array_replace($tech, $availability[$tech['name']]);
    $tech['t'] .= " ".join(" ", $tech['avail']);
  }
}

echo json_encode($json_a);
?>