<?php

namespace Generated\OpenApi\NoEndpointFiltering\Endpoint;

class GetEndpoint2 extends \Generated\OpenApi\NoEndpointFiltering\Runtime\Client\BaseEndpoint implements \Generated\OpenApi\NoEndpointFiltering\Runtime\Client\Endpoint
{
    use \Generated\OpenApi\NoEndpointFiltering\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/endpoint/2';
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
     * @return null|\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint2GetResponse200
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint2GetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}