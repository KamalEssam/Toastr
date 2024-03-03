<?php

/*
 * This file is part of the Kamal/toastr package.
 *
 * (c) Kamal Essam <kessam1@outlook.com>
 */

$header = <<<'EOF'
This file is part of the Kamal/toastr package.
(c) Kamal Essam <kessam1@outlook.com>
EOF;

$rules = array(
    '@Symfony' => true,
    'header_comment' => array('header' => $header),
    'array_syntax' => array('syntax' => 'long'),
    'visibility_required' => array('elements' => array('property', 'method')),
);

$finder = new PhpCsFixer\Finder();
$finder->in(__DIR__)->exclude(__DIR__.'/vendor');

$config = new PhpCsFixer\Config();

return $config->setFinder($finder)
    ->setUsingCache(false)
    ->setRiskyAllowed(true)
    ->setRules($rules);
