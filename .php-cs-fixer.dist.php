<?php

$finder = PhpCsFixer\Finder::create()
    ->in('app/')
    ->in('config/')
    ->in('database/')
    ->in('routes/')
    ->in('tests/');

/**
 * Rule detail in https://mlocati.github.io/php-cs-fixer-configurator
 * Or run command:
 * php-cs-fixer describe @PSR12
 * php-cs-fixer describe class_attributes_separation
 */
return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true,
        'class_definition' => [
            'space_before_parenthesis' => false,
        ],
        'control_structure_braces' => true,
        'control_structure_continuation_position' => [
            'position' => 'same_line',
        ],
        'no_multiple_statements_per_line' => true,
        'declare_parentheses' => true,
        'braces_position' => [
            'functions_opening_brace' => 'next_line_unless_newline_at_signature_end',
            'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
            'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
            'anonymous_functions_opening_brace' => 'same_line',
        ],
        'new_with_parentheses' => [
            'anonymous_class' => false,
            'named_class' => true,
        ],
        // Use single quote when possible, 'string', "example with 'single-quotes'"
        'single_quote' => true,
        // Surround operators +, -, *, /, &&, ||, ... by space
        'binary_operator_spaces' => [
            'default' => 'single_space',
        ],
        'array_indentation' => true,
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'list_syntax' => [
            'syntax' => 'short',
        ],
        'whitespace_after_comma_in_array' => [
            'ensure_single_space' => true,
        ],
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'no_spaces_around_offset' => true,
        'no_multiline_whitespace_around_double_arrow' => true,
        'trim_array_spaces' => true,
        /*
        Bad:  function foo(int | string $x)
        Good: function foo(int|string $x)

        Bad:  catch (ErrorA | ErrorB $e)
        Good: catch (ErrorA|ErrorB $e)
        */
        'types_spaces' => true,
        'unary_operator_spaces' => true,
        // (int) $b instead of (int)$b
        'cast_spaces' => [
            'space' => 'single',
        ],
        'method_chaining_indentation' => true,
        'no_trailing_comma_in_singleline' => true,
        // Multi-line arrays, arguments list, parameters list and `match` expressions must have a trailing comma
        'trailing_comma_in_multiline' => [
            'after_heredoc' => true,
            'elements' => ['arrays', 'match', 'arguments', 'parameters'],
        ],
        // Use ??= when possible
        'assign_null_coalescing_to_coalesce_equal' => true,
        // Use ?? instead of isset
        'ternary_to_null_coalescing' => true,
        // Must have one blank line before continue, return, throw
        'blank_line_before_statement' => [
            'statements' => ['continue', 'return', 'throw'],
        ],
        // Class constants, properties, methods must be separated with one blank line.
        'class_attributes_separation' => [
            'elements' => [
                'const' => 'one',
                'property' => 'one',
                'method' => 'one',
                'trait_import' => 'none',
            ],
        ],
        'class_reference_name_casing' => true,
        'object_operator_without_whitespace' => true,
        'type_declaration_spaces' => [
            'elements' => [
                'function',
                'property',
            ],
        ],
        'lambda_not_used_import' => true,
        'multiline_whitespace_before_semicolons' => [
            'strategy' => 'no_multi_line',
        ],
        'no_empty_statement' => true,
        'no_extra_blank_lines' => [
            'tokens' => [
                'extra',
                'throw',
                'use',
                'return',
                'curly_brace_block',
                'parenthesis_brace_block',
                'square_brace_block',
                'switch',
                'case',
                'default',
            ],
        ],
        'no_unneeded_control_parentheses' => [
            'statements' => ['break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'],
        ],
        'no_unused_imports' => true,
        'no_useless_return' => true,
        'no_superfluous_elseif' => true,
        'no_useless_else' => true,
        'phpdoc_indent' => true,
        'phpdoc_no_package' => true,
        'phpdoc_no_useless_inheritdoc' => true,
        'phpdoc_scalar' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_tag_type' => [
            'tags' => [
                'inheritdoc' => 'inline',
            ],
        ],
        'phpdoc_trim' => true,
        'no_superfluous_phpdoc_tags' => true,
        'phpdoc_var_without_name' => true,
        'php_unit_method_casing' => [
            'case' => 'snake_case',
        ],
    ])
    ->setFinder($finder);
