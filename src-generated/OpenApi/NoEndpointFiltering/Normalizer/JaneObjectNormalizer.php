<?php

namespace Generated\OpenApi\NoEndpointFiltering\Normalizer;

use Generated\OpenApi\NoEndpointFiltering\Runtime\Normalizer\CheckArray;
use Generated\OpenApi\NoEndpointFiltering\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = array('Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint1GetResponse' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint1GetResponseNormalizer', 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint1PostBody' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint1PostBodyNormalizer', 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint2GetResponse200' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint2GetResponse200Normalizer', 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint2PostBody' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint2PostBodyNormalizer', 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint3GetResponse200' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint3GetResponse200Normalizer', 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint3GetResponse200Field3' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint3GetResponse200Field3Normalizer', 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint3PostBody' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint3PostBodyNormalizer', 'Generated\\OpenApi\\NoEndpointFiltering\\Model\\Endpoint3PostBodyPostField3' => 'Generated\\OpenApi\\NoEndpointFiltering\\Normalizer\\Endpoint3PostBodyPostField3Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\Generated\\OpenApi\\NoEndpointFiltering\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}