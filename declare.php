<?php
declare(strict_types=1);
function getA(int $score): ?string
{
  return $score >= 100 ? 'いいね！' : null;
}

echo getA(200) . PHP_EOL;
echo getA(20) . PHP_EOL;