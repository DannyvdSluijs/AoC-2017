<?php

declare(strict_types=1);

namespace Dannyvdsluijs\AdventOfCode2017;

use Dannyvdsluijs\AdventOfCode2017\Concerns\ContentReader;

class Day02
{
    use ContentReader;

    public function partOne(): string
    {
        $content = $this->readInputAsGridOfNumbers();
        $diff = [];
        foreach ($content as $line) {
            $diff[] = max($line) - min($line);
        }

        return (string) array_sum($diff);
    }

    public function partTwo(): string
    {
        $content = $this->readInputAsGridOfNumbers();
        $values = [];
        foreach ($content as $line) {
            foreach ($line as $keyOne => $valueOne) {
                foreach ($line as $keyTwo => $valueTwo) {
                    if ($keyOne === $keyTwo) {
                        continue;
                    }

                    if (intdiv($valueOne, $valueTwo) === $valueOne / $valueTwo) {
                        $values[] = $valueOne / $valueTwo;
                        continue 2;
                    }
                }
            }
        }

        return (string) array_sum($values);
    }
}