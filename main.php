<?php
$tax = 1.1;

function sum($a, $b, $c) {
  // global $tax;
  $tax = 1.08;
  return ($a + $b + $c) * $tax;

}

echo sum(100, 200, 300) + sum(300, 400, 500) . PHP_EOL;

?>