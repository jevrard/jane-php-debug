<?php

$rootDir = realpath(__DIR__ .  '/../../');

return [
    'openapi-file' => __DIR__ .  '/open-api.yaml',
    'directory' => $rootDir . '/src-generated/OpenApi/NoEndpointFiltering',
    'namespace' => 'Generated\OpenApi\NoEndpointFiltering',
    'validation' => true,
];