<?php

declare(strict_types=1);

function reverseString(string $text): string
{
    return strrev($text);
}

$__in = json_decode('["", "robot", "Ramen", "I\'m hungry!", "racecar", "drawer"]', true);
$__out = [];
foreach ($__in as $x) {
  try { $__out[] = ["ok" => true, "v" => reverseString($x)]; }
  catch (\Throwable $e) { $__out[] = ["ok" => false, "e" => get_class($e)]; }
}
echo json_encode(["out" => $__out]);
