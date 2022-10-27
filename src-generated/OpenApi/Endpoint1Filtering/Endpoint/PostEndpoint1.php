<?php

namespace Generated\OpenApi\Endpoint1Filtering\Endpoint;

class PostEndpoint1 extends \Generated\OpenApi\Endpoint1Filtering\Runtime\Client\BaseEndpoint implements \Generated\OpenApi\Endpoint1Filtering\Runtime\Client\Endpoint
{
    /**
     * 
     *
     * @param null|\Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1PostBody $requestBody 
     */
    public function __construct(?\Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1PostBody $requestBody = null)
    {
        $this->body = $requestBody;
    }
    use \Generated\OpenApi\Endpoint1Filtering\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/endpoint/1';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1PostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}