<?php

namespace App;

use App\Creators\InsertionAlgorithmCreator;
use App\Creators\MergeAlgorithmCreator;
use App\Creators\SelectionAlgorithmCreator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SortCommand extends Command
{
    protected static $defaultName = 'sort';

    protected function configure(): void
    {
        // the short description shown while running "php bin/console list"
        $this->setDescription('Sorts array with selected algorithm.')
            ->addArgument('algorithm', InputArgument::REQUIRED, 'Sorting algorithm')
            ->addArgument('file_path', InputArgument::REQUIRED, 'File path');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $algorithmName = $input->getArgument('algorithm');
        $filePath = $input->getArgument('file_path');

        if (! file_exists($filePath)) {
            throw new InvalidArgumentException('File ' . $filePath . ' not found!');
        }

        $algorithm = match ($algorithmName) {
            'insertion' => InsertionAlgorithmCreator::createAlgorithm(),
            'merge' => MergeAlgorithmCreator::createAlgorithm(),
            'selection' => SelectionAlgorithmCreator::createAlgorithm(),
            default => throw new InvalidArgumentException('Algorithm ' . $algorithmName . ' is not defined!'),
        };

        $stream = fopen($filePath, 'rb');
        while (($number = fgets($stream)) !== false) {
            $array[] = (int) $number;
        }

        $result = $algorithm->sort($array);
        $output->writeln($result);

        return Command::SUCCESS;
    }
}