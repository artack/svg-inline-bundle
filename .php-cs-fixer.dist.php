<?php

/*
 * This document has been generated with
 * https://mlocati.github.io/php-cs-fixer-configurator/#version:2.16.4|configurator
 * you can change this configuration by importing this file.
 */
$config = new PhpCsFixer\Config();
return $config
    ->registerCustomFixers(new PhpCsFixerCustomFixers\Fixers())
    ->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        '@Symfony' => true,
        '@Symfony:risky' => true,
        'use_arrow_functions' => true,
        'backtick_to_shell_exec' => true,
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true
        ],
        'linebreak_after_opening_tag' => true,
        'list_syntax' => ['syntax' => 'short'],
        'mb_str_functions' => true,
        'no_php4_constructor' => true,
        'phpdoc_line_span' => ['const' => 'single'],
        'phpdoc_types' => ['groups' => ['simple', 'alias']],
        'self_static_accessor' => true,
        'static_lambda' => true,
        'no_unused_imports' => true,
        'method_argument_space' => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'trailing_comma_in_multiline' => [
            'elements' => [
                'arrays',
                'arguments',
                'parameters',
                'match',
            ],
        ],
        'nullable_type_declaration_for_default_null_value' => true,
        \PhpCsFixerCustomFixers\Fixer\CommentSurroundedBySpacesFixer::name() => true,
        \PhpCsFixerCustomFixers\Fixer\ConstructorEmptyBracesFixer::name() => true,
        \PhpCsFixerCustomFixers\Fixer\MultilineCommentOpeningClosingAloneFixer::name() => true,
        \PhpCsFixerCustomFixers\Fixer\MultilinePromotedPropertiesFixer::name() => ['minimum_number_of_parameters' => 2],
        \PhpCsFixerCustomFixers\Fixer\NoDoctrineMigrationsGeneratedCommentFixer::name() => true,
        \PhpCsFixerCustomFixers\Fixer\NoUselessCommentFixer::name() => true,
        \PhpCsFixerCustomFixers\Fixer\NoUselessDirnameCallFixer::name() => true,
    ])
    ->setFinder(PhpCsFixer\Finder::create()
        ->in(__DIR__.'/src')
    );
