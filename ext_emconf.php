<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'File backend layouts',
    'description' => 'File based backend layouts provider',
    'version' => '1.0.0',
    'category' => 'misc',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Thorben Nissen',
    'author_email' => 'thorben@webcoast.dk',
    'author_company' => 'WEBcoast',
    'autoload' => [
        'psr-4' => [
            'WEBcoast\\FileBackendLayouts\\' => 'Classes'
        ]
    ]
];
