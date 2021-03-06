<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude(
        [
            'public',
            'storage',
            'vendor',
            'node_modules'
        ]
    )
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    ->fixers(
        [
            'array_element_no_space_before_comma',
            'array_element_white_space_after_comma',
            'blankline_after_open_tag',
            'double_arrow_multiline_whitespaces',
            'duplicate_semicolon',
            'extra_empty_lines',
            'function_typehint_space',
            'include',
            'join_function',
            'list_commas',
            'multiline_array_trailing_comma',
            'namespace_no_leading_whitespace',
            'new_with_braces',
            'no_blank_lines_after_class_opening',
            'no_empty_lines_after_phpdocs',
            'object_operator',
            'operators_spaces',
            'phpdoc_indent',
            'phpdoc_inline_tag',
            'phpdoc_no_access',
            'phpdoc_no_empty_return',
            'phpdoc_no_package',
            'phpdoc_params',
            'phpdoc_scalar',
            'phpdoc_separation',
            'phpdoc_short_description',
            'phpdoc_to_comment',
            'phpdoc_trim',
            'phpdoc_type_to_var',
            'phpdoc_types',
            'print_to_echo',
            'remove_leading_slash_use',
            'remove_lines_between_uses',
            'return',
            'self_accessor',
            'short_bool_cast',
            'single_array_no_trailing_comma',
            'single_quote',
            'spaces_before_semicolon',
            'spaces_cast',
            'standardize_not_equal',
            'ternary_spaces',
            'trim_array_spaces',
            'unalign_double_arrow',
            'unalign_equals',
            'unary_operators_spaces',
            'unneeded_control_parentheses',
            'unused_use',
            'whitespacy_lines',
            'concat_with_spaces',
            'header_comment',
            'multiline_spaces_before_semicolon',
            'newline_after_open_tag',
            'ordered_use',
            'php4_constructor',
            'phpdoc_order',
            'short_array_syntax',
        ]
    )
    ->finder($finder);