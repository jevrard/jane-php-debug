<?php

namespace Generated\OpenApi\Endpoint1Filtering\Endpoint;

class GetEndpoint1 extends \Generated\OpenApi\Endpoint1Filtering\Runtime\Client\BaseEndpoint implements \Generated\OpenApi\Endpoint1Filtering\Runtime\Client\Endpoint
{
    use \Generated\OpenApi\Endpoint1Filtering\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/endpoint/1';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1GetResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Generated\\OpenApi\\Endpoint1Filtering\\Model\\Endpoint1GetResponse', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}