<?php
include_once "lib.php";

$string = file_get_contents("aoc_units.json");
$json_a = json_decode($string, true);
$availability = csv_to_availability("aoc_matrix.csv");

foreach($json_a['data'] as &$unit) {
  if(array_key_exists($unit['name'], $availability)) {
    $unit = array_replace($unit, $availability[$unit['name']]);
    $unit['t'] .= " ".join(" ", $unit['avail']);
  }
}

echo json_encode($json_a);
?>