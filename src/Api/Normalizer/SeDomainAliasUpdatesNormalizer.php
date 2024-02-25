<?php

namespace Rouda\OpenProvider\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Rouda\OpenProvider\Api\Runtime\Normalizer\CheckArray;
use Rouda\OpenProvider\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class SeDomainAliasUpdatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainAliasUpdates';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainAliasUpdates';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SeDomainAliasUpdates();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('add', $data) && $data['add'] !== null) {
                $values = [];
                foreach ($data['add'] as $value) {
                    $values[] = $value;
                }
                $object->setAdd($values);
            }
            elseif (\array_key_exists('add', $data) && $data['add'] === null) {
                $object->setAdd(null);
            }
            if (\array_key_exists('remove', $data) && $data['remove'] !== null) {
                $values_1 = [];
                foreach ($data['remove'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRemove($values_1);
            }
            elseif (\array_key_exists('remove', $data) && $data['remove'] === null) {
                $object->setRemove(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('add') && null !== $object->getAdd()) {
                $values = [];
                foreach ($object->getAdd() as $value) {
                    $values[] = $value;
                }
                $data['add'] = $values;
            }
            if ($object->isInitialized('remove') && null !== $object->getRemove()) {
                $values_1 = [];
                foreach ($object->getRemove() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['remove'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SeDomainAliasUpdates' => false];
        }
    }
} else {
    class SeDomainAliasUpdatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainAliasUpdates';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainAliasUpdates';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SeDomainAliasUpdates();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('add', $data) && $data['add'] !== null) {
                $values = [];
                foreach ($data['add'] as $value) {
                    $values[] = $value;
                }
                $object->setAdd($values);
            }
            elseif (\array_key_exists('add', $data) && $data['add'] === null) {
                $object->setAdd(null);
            }
            if (\array_key_exists('remove', $data) && $data['remove'] !== null) {
                $values_1 = [];
                foreach ($data['remove'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setRemove($values_1);
            }
            elseif (\array_key_exists('remove', $data) && $data['remove'] === null) {
                $object->setRemove(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('add') && null !== $object->getAdd()) {
                $values = [];
                foreach ($object->getAdd() as $value) {
                    $values[] = $value;
                }
                $data['add'] = $values;
            }
            if ($object->isInitialized('remove') && null !== $object->getRemove()) {
                $values_1 = [];
                foreach ($object->getRemove() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['remove'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SeDomainAliasUpdates' => false];
        }
    }
}