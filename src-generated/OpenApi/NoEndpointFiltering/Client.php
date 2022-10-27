<?php

namespace Generated\OpenApi\NoEndpointFiltering;

class Client extends \Generated\OpenApi\NoEndpointFiltering\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint1GetResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getEndpoint1(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\NoEndpointFiltering\Endpoint\GetEndpoint1(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint1PostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndpoint1(?\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint1PostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\NoEndpointFiltering\Endpoint\PostEndpoint1($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint2GetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getEndpoint2(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\NoEndpointFiltering\Endpoint\GetEndpoint2(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint2PostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndpoint2(?\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint2PostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\NoEndpointFiltering\Endpoint\PostEndpoint2($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint3GetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getEndpoint3(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\NoEndpointFiltering\Endpoint\GetEndpoint3(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint3PostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndpoint3(?\Generated\OpenApi\NoEndpointFiltering\Model\Endpoint3PostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\NoEndpointFiltering\Endpoint\PostEndpoint3($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Generated\OpenApi\NoEndpointFiltering\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}