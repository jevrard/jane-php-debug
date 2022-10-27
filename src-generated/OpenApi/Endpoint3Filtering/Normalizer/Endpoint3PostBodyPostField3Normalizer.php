<?php

namespace Generated\OpenApi\Endpoint3Filtering\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Generated\OpenApi\Endpoint3Filtering\Runtime\Normalizer\CheckArray;
use Generated\OpenApi\Endpoint3Filtering\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class Endpoint3PostBodyPostField3Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null) : bool
    {
        return $type === 'Generated\\OpenApi\\Endpoint3Filtering\\Model\\Endpoint3PostBodyPostField3';
    }
    public function supportsNormalization($data, $format = null) : bool
    {
        return is_object($data) && get_class($data) === 'Generated\\OpenApi\\Endpoint3Filtering\\Model\\Endpoint3PostBodyPostField3';
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
        $object = new \Generated\OpenApi\Endpoint3Filtering\Model\Endpoint3PostBodyPostField3();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint3Filtering\Validator\Endpoint3PostBodyPostField3Constraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('post-sub-field-3', $data)) {
            $object->setPostSubField3($data['post-sub-field-3']);
            unset($data['post-sub-field-3']);
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
        if (null !== $object->getPostSubField3()) {
            $data['post-sub-field-3'] = $object->getPostSubField3();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\OpenApi\Endpoint3Filtering\Validator\Endpoint3PostBodyPostField3Constraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}