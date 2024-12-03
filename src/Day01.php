<?php

declare(strict_types=1);

namespace Dannyvdsluijs\AdventOfCode2017;

use Dannyvdsluijs\AdventOfCode2017\Concerns\ContentReader;

class Day01
{
    use ContentReader;

    public function partOne(): string
    {
        $content = $this->readInput();
        $sum = [];

        for ($x = 0, $max = strlen($content); $x < $max; $x++) {
            $char = $content[$x];
            $nextPosition = ($x + 1) % $max;
            $next = $content[$nextPosition];
            if ($char !== $next) {
                continue;
            }

            $sum[] = (int) $char;
        }

        return (string) array_sum($sum);
    }

    public function partTwo(): string
    {
        $content = $this->readInput();
        $sum = [];

        for ($x = 0, $max = strlen($content); $x < $max; $x++) {
            $char = $content[$x];
            $nextPosition = ($x + $max / 2) % $max;
            $next = $content[$nextPosition];
            if ($char !== $next) {
                continue;
            }

            $sum[] = (int) $char;
        }

        return (string) array_sum($sum);
    }
}