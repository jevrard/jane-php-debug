<?php

$rootDir = realpath(__DIR__ .  '/../../');

return [
    'json-schema-file' => __DIR__ .  '/json-schema.json',
    'directory' => $rootDir . '/src-generated/JsonSchema',
    'namespace' => 'Generated\JsonSchema',
    'root-class' => 'RootLevel',
    'validation' => true,
];