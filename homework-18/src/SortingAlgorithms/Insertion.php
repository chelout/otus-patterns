<?php

namespace App\SortingAlgorithms;

class Insertion implements SortingAlgorithmInterface
{
    public function sort(array $array): array
    {
        foreach ($array as $i => $iValue) {
            $val = $iValue;
            $j = $i - 1;
            while ($j >= 0 && $array[$j] > $val) {
                $array[$j + 1] = $array[$j];
                $j--;
            }
            $array[$j + 1] = $val;
        }

        return $array;
    }
}