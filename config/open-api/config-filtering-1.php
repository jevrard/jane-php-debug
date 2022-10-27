<?php

$rootDir = realpath(__DIR__ .  '/../../');

return [
    'openapi-file' => __DIR__ .  '/open-api.yaml',
    'directory' => $rootDir . '/src-generated/OpenApi/Endpoint1Filtering',
    'namespace' => 'Generated\OpenApi\Endpoint1Filtering',
    'validation' => true,
    'whitelisted-paths' => ['\/1$'],
];