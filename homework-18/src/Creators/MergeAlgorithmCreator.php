<?php

namespace App\Creators;

use App\SortingAlgorithms\Merge;
use App\SortingAlgorithms\SortingAlgorithmInterface;

class MergeAlgorithmCreator implements AlgorithmCreatorInterface
{
    public static function createAlgorithm(): SortingAlgorithmInterface
    {
        return new Merge();
    }
}