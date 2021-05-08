<?php

require __DIR__ . '/../vendor/autoload.php';

use App\SortCommand;
use Symfony\Component\Console\Application;

$application = new Application();

$application->add(new SortCommand());

$application->run();
