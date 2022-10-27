<?php

namespace Generated\OpenApi\Endpoint1Filtering\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Generated\OpenApi\Endpoint1Filtering\Runtime\Normalizer\CheckArray;
use Generated\OpenApi\Endpoint1Filtering\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class Endpoint1PostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Generated\\OpenApi\\Endpoint1Filtering\\Model\\Endpoint1PostBody';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Generated\\OpenApi\\Endpoint1Filtering\\Model\\Endpoint1PostBody';
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
        $object = new \Generated\OpenApi\Endpoint1Filtering\Model\Endpoint1PostBody();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint1Filtering\Validator\Endpoint1PostBodyConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('post-field-1', $data)) {
            $object->setPostField1($data['post-field-1']);
            unset($data['post-field-1']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPostField1()) {
            $data['post-field-1'] = $object->getPostField1();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint1Filtering\Validator\Endpoint1PostBodyConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}