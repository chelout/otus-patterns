<?php

namespace App\Creators;

use App\SortingAlgorithms\Selection;
use App\SortingAlgorithms\SortingAlgorithmInterface;

class SelectionAlgorithmCreator implements AlgorithmCreatorInterface
{
    public static function createAlgorithm(): SortingAlgorithmInterface
    {
        return new Selection();
    }
}