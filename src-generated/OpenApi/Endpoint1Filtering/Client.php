<?php

namespace Generated\OpenApi\Endpoint1Filtering;

class Client extends \Generated\OpenApi\Endpoint1Filtering\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1GetResponse|\Psr\Http\Message\ResponseInterface
     */
    public function getEndpoint1(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\Endpoint1Filtering\Endpoint\GetEndpoint1(), $fetch);
    }
    /**
     * 
     *
     * @param null|\Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1PostBody $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function postEndpoint1(?\Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1PostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Generated\OpenApi\Endpoint1Filtering\Endpoint\PostEndpoint1($requestBody), $fetch);
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
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Generated\OpenApi\Endpoint1Filtering\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}