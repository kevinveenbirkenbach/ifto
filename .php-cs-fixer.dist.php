<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('var')
    ->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@PER-CS1.0' => true,
        '@PER-CS1.0:risky' => true,

        '@PHP82Migration' => true,
        '@PHP80Migration:risky' => true,

        '@PHPUnit100Migration:risky' => true,
    ])
    ->setFinder($finder);
