<?php

namespace App\SortingAlgorithms;

interface SortingAlgorithmInterface
{
    public function sort(array $array): array;
}