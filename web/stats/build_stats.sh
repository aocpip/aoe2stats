#!/bin/sh
for group in `ls aoc_*.php dlc_*.php de_*.php`
do
  echo "Processing $group";
  php5 $group > `echo "build/$group" | sed s/php/json/`;
done