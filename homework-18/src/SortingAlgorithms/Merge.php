<?php

namespace App\SortingAlgorithms;

class Merge implements SortingAlgorithmInterface
{
    public function sort(array $array): array
    {
        if (count($array) === 1) {
            return $array;
        }
        $mid = count($array) / 2;
        $left = array_slice($array, 0, $mid);
        $right = array_slice($array, $mid);
        $left = $this->sort($left);
        $right = $this->sort($right);

        return $this->merge($left, $right);
    }

    private function merge($left, $right): array
    {
        $result = [];
        while (count($left) > 0 && count($right) > 0) {
            if ($left[0] > $right[0]) {
                $result[] = $right[0];
                $right = array_slice($right, 1);
            } else {
                $result[] = $left[0];
                $left = array_slice($left, 1);
            }
        }

        while (count($left) > 0) {
            $result[] = $left[0];
            $left = array_slice($left, 1);
        }

        while (count($right) > 0) {
            $result[] = $right[0];
            $right = array_slice($right, 1);
        }

        return $result;
    }
}