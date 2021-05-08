<?php

namespace App\SortingAlgorithms;

class Selection implements SortingAlgorithmInterface
{
    public function sort(array $array): array
    {
        $n = count($array);
        foreach ($array as $i => $value) {
            $min = $i;
            for ($j = $i + 1; $j < $n; $j++) {
                if ($array[$j] < $array[$min]) {
                    $min = $j;
                }
            }
            [$array[$i], $array[$min]] = [$array[$min], $value];
        }

        return $array;
    }
}