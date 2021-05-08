<?php


namespace App\Creators;

use App\SortingAlgorithms\SortingAlgorithmInterface;

interface AlgorithmCreatorInterface
{
    public static function createAlgorithm(): SortingAlgorithmInterface;
}