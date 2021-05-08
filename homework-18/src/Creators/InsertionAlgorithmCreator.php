<?php

namespace App\Creators;

use App\SortingAlgorithms\Insertion;
use App\SortingAlgorithms\SortingAlgorithmInterface;

class InsertionAlgorithmCreator implements AlgorithmCreatorInterface
{
    public static function createAlgorithm(): SortingAlgorithmInterface
    {
        return new Insertion();
    }
}