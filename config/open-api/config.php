<?php

$rootDir = realpath(__DIR__ .  '/../../');

return [
    'openapi-file' => __DIR__ .  '/open-api.yaml',
    'directory' => $rootDir . '/src-generated/OpenApi/Endpoint2Filtering',
    'namespace' => 'Generated\OpenApi\Endpoint2Filtering',
    'validation' => true,
    'whitelisted-paths' => ['\/2$'],
];