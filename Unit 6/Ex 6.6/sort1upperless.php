<?php
// Create and sort an array...
$a = array('david', 'apple', 'Sue', 'Xena');

echo "Original array : <br />";

for ($i=0; $i<sizeof($a); $i++) {
  echo $a[$i] . "<br />";
  }

sort ($a);

echo "Sorted array: <br />";

for ($i=0; $i<sizeof($a); $i++) {
  echo $a[$i] . "<br />";
  }

?>
