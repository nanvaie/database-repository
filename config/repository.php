<?php

return [

    'php_version' => env('REPOSITORY_PHP_VERSION', '8.0'),

    'path' => [
        'namespace' => [
            'entities' => 'App\Models\Entities',
            'factories' => 'App\Models\Factories',
            'resources' => 'App\Models\Resources',
            'repositories' => 'App\Models\Repositories',
        ],

        'stub' => [
            'entities' => 'stubs/repository.entity.',
            'factories' => 'stubs/repository.factory.',
            'resources' => 'stubs/repository.resource.',
            'repositories' => [
                'base' => 'stubs/repository.base.',
                'mysql' => 'stubs/repository.mysql.',
                'interface' => 'stubs/repository.interface.',
            ]
        ],

        'relative' => [
            'entities' => 'app/Models/Entities/',
            'factories' => 'app/Models/Factories/',
            'resources' => 'app/Models/Resources/',
            'repositories' => 'app/Models/Repositories/',
        ],

    ]

];