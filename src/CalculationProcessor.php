<?php

declare(strict_types=1);

namespace MaximTsikhonov\PhpNod;

class CalculationProcessor
{
    public function nod(int $num1, int $num2): int
    {
        while ($num1 != $num2)
        {
            if ($num1 > $num2) $num1 =  $num1 - $num2;
            else $num2 = $num2 - $num1;
        }
        return $num2;
    }
}
