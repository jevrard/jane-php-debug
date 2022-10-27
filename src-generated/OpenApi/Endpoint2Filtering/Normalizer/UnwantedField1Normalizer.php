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
class UnwantedField1Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Generated\\OpenApi\\Endpoint2Filtering\\Model\\UnwantedField1';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Generated\\OpenApi\\Endpoint2Filtering\\Model\\UnwantedField1';
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
        $object = new \Generated\OpenApi\Endpoint2Filtering\Model\UnwantedField1();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint2Filtering\Validator\UnwantedField1Constraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('foo1', $data)) {
            $object->setFoo1($data['foo1']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getFoo1()) {
            $data['foo1'] = $object->getFoo1();
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint2Filtering\Validator\UnwantedField1Constraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}