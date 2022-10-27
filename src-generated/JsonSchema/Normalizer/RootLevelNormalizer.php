<?php

namespace Generated\JsonSchema\Normalizer;

use Generated\JsonSchema\Runtime\Normalizer\CheckArray;
use Generated\JsonSchema\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RootLevelNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Generated\\JsonSchema\\Model\\RootLevel';
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return $data instanceof \Generated\JsonSchema\Model\RootLevel;
    }

    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Generated\JsonSchema\Model\RootLevel();
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\JsonSchema\Validator\RootLevelConstraint());
            $context['skip_validation'] = true;
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('subLevel-1', $data)) {
            $object->setSubLevel1($this->denormalizer->denormalize($data['subLevel-1'], 'Generated\\JsonSchema\\Model\\SubLevel1', 'json', $context));
        }
        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getSubLevel1()) {
            $data['subLevel-1'] = $this->normalizer->normalize($object->getSubLevel1(), 'json', $context);
        }
        if (!($context['skip_validation'] ?? false)) {
            $this->validate($data, new \Generated\JsonSchema\Validator\RootLevelConstraint());
            $context['skip_validation'] = true;
        }
        return $data;
    }
}