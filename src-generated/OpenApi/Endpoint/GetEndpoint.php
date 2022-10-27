<?php

namespace Generated\OpenApi\Endpoint;

class GetEndpoint extends \Generated\OpenApi\Runtime\Client\BaseEndpoint implements \Generated\OpenApi\Runtime\Client\Endpoint
{
    use \Generated\OpenApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/endpoint';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Generated\OpenApi\Model\RootLevel
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Generated\\OpenApi\\Model\\RootLevel', 'json');
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}