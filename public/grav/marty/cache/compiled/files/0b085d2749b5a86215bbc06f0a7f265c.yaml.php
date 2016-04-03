<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/public/grav/marty/user/plugins/simplesearch/simplesearch.yaml',
    'modified' => 1456428052,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => 'blog'
        ],
        'filter_combinator' => 'and',
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
