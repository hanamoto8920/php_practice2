<?php
function sum($a, $b, $c) 
{
  $total = $a + $b + $c;

  // if ($total < 0) {
  //   return 'マイナス';
  // } else {
  //   return $total;
  // }
  return $total < 0 ? 'マイナスじゃ' : $total;
}
echo sum(100, 200, 300) . PHP_EOL;
echo sum(-100, -200, -300) . PHP_EOL;
echo sum(100, 200, 300) . PHP_EOL;
echo sum(-100, -200, -300) . PHP_EOL;
echo sum(100, 200, 300) . PHP_EOL;
echo sum(-100, -200, -300) . PHP_EOL;
echo sum(100, 200, 300) . PHP_EOL;
echo sum(-100, -200, -300) . PHP_EOL;
?>