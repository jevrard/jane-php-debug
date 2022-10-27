<?php

$rootDir = realpath(__DIR__ .  '/../../');

return [
    'openapi-file' => __DIR__ .  '/open-api.yaml',
    'directory' => $rootDir . '/src-generated/OpenApi/Endpoint3Filtering',
    'namespace' => 'Generated\OpenApi\Endpoint3Filtering',
    'validation' => true,
    'whitelisted-paths' => ['\/3$'],
];