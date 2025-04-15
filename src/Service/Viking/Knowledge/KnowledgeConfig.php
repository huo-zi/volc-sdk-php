<?php

namespace Volc\Service\Viking\Knowledge;

class KnowledgeConfig
{
    public static $region = [
        'cn-beijing' => [
            'host' => 'https://api-knowledgebase.mlp.cn-beijing.volces.com',
            'config' => [
                'timeout' => 10,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => 'cn-beijing',
                    'service' => 'air',
                ],
            ],
        ],
    ];

    public static $apiList = [
        'collections' => [
            'method' => 'post',
            'url' => '/api/knowledge/collection/list',
            'config' => [],
        ],
        'collectionInfo' => [
            'method' => 'post',
            'url' => '/api/knowledge/collection/info',
            'config' => [],
        ],
        'collectionCreate' => [
            'method' => 'post',
            'url' => '/api/knowledge/collection/create',
            'config' => [],
        ],
        'collectionUpdate' => [
            'method' => 'post',
            'url' => '/api/knowledge/collection/update',
            'config' => [],
        ],
        'collectionDelete' => [
            'method' => 'post',
            'url' => '/api/knowledge/collection/delete ',
            'config' => [],
        ],
        'searchKnowledge' => [
            'method' => 'post',
            'url' => '/api/knowledge/collection/search_knowledge',
            'config' => [],
        ],
        'chatCompletions' => [
            'method' => 'post',
            'url' => '/api/knowledge/chat/completions',
            'config' => [],
        ],
        'docAdd' => [
            'method' => 'post',
            'url' => '/api/knowledge/doc/add',
            'config' => [],
        ],
        'docInfo' => [
            'method' => 'post',
            'url' => '/api/knowledge/doc/info',
            'config' => [],
        ],
        'docList' => [
            'method' => 'post',
            'url' => '/api/knowledge/doc/list',
            'config' => [],
        ],
        'docUpdateMeta' => [
            'method' => 'post',
            'url' => '/api/knowledge/doc/update_meta',
            'config' => [],
        ],
        'docDelete' => [
            'method' => 'post',
            'url' => '/api/knowledge/doc/delete',
            'config' => [],
        ],
        'pointList' => [
            'method' => 'post',
            'url' => '/api/knowledge/point/list',
            'config' => [],
        ],
        'pointUpdate' => [
            'method' => 'post',
            'url' => '/api/knowledge/point/update',
            'config' => [],
        ],
        'pointInfo' => [
            'method' => 'post',
            'url' => '/api/knowledge/point/info',
            'config' => [],
        ],
        'pointAdd' => [
            'method' => 'post',
            'url' => '/api/knowledge/point/add',
            'config' => [],
        ],
        'pointDelete' => [
            'method' => 'post',
            'url' => '/api/knowledge/point/delete',
            'config' => [],
        ],
    ];
}
