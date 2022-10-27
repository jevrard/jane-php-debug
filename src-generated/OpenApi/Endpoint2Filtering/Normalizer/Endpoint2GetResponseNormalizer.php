<?php

namespace Generated\OpenApi\Endpoint2Filtering\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Generated\OpenApi\Endpoint2Filtering\Runtime\Normalizer\CheckArray;
use Generated\OpenApi\Endpoint2Filtering\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class Endpoint2GetResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Generated\\OpenApi\\Endpoint2Filtering\\Model\\Endpoint2GetResponse';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Generated\\OpenApi\\Endpoint2Filtering\\Model\\Endpoint2GetResponse';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Generated\OpenApi\Endpoint2Filtering\Model\Endpoint2GetResponse();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint2Filtering\Validator\Endpoint2GetResponseConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('field-2', $data)) {
            $object->setField2($data['field-2']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getField2()) {
            $data['field-2'] = $object->getField2();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint2Filtering\Validator\Endpoint2GetResponseConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}