<?php

$rootDir = realpath(__DIR__ .  '/../../');

return [
    'openapi-file' => __DIR__ .  '/open-api.yaml',
    'directory' => $rootDir . '/src-generated/OpenApi',
    'namespace' => 'Generated\OpenApi',
    'validation' => true,
];