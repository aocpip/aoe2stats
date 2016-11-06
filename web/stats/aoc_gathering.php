<?php
$string = file_get_contents("aoc_gathering.json");
$json_a = json_decode($string, true);

echo json_encode($json_a);
?>