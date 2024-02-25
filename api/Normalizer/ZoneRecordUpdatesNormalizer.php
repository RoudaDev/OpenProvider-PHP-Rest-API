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
    class ZoneRecordUpdatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ZoneRecordUpdates();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('add', $data) && $data['add'] !== null) {
                $values = [];
                foreach ($data['add'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setAdd($values);
            }
            elseif (\array_key_exists('add', $data) && $data['add'] === null) {
                $object->setAdd(null);
            }
            if (\array_key_exists('remove', $data) && $data['remove'] !== null) {
                $values_1 = [];
                foreach ($data['remove'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setRemove($values_1);
            }
            elseif (\array_key_exists('remove', $data) && $data['remove'] === null) {
                $object->setRemove(null);
            }
            if (\array_key_exists('replace', $data) && $data['replace'] !== null) {
                $values_2 = [];
                foreach ($data['replace'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setReplace($values_2);
            }
            elseif (\array_key_exists('replace', $data) && $data['replace'] === null) {
                $object->setReplace(null);
            }
            if (\array_key_exists('update', $data) && $data['update'] !== null) {
                $values_3 = [];
                foreach ($data['update'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal', 'json', $context);
                }
                $object->setUpdate($values_3);
            }
            elseif (\array_key_exists('update', $data) && $data['update'] === null) {
                $object->setUpdate(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('add') && null !== $object->getAdd()) {
                $values = [];
                foreach ($object->getAdd() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['add'] = $values;
            }
            if ($object->isInitialized('remove') && null !== $object->getRemove()) {
                $values_1 = [];
                foreach ($object->getRemove() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['remove'] = $values_1;
            }
            if ($object->isInitialized('replace') && null !== $object->getReplace()) {
                $values_2 = [];
                foreach ($object->getReplace() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['replace'] = $values_2;
            }
            if ($object->isInitialized('update') && null !== $object->getUpdate()) {
                $values_3 = [];
                foreach ($object->getUpdate() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['update'] = $values_3;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates' => false];
        }
    }
} else {
    class ZoneRecordUpdatesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates';
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
            $object = new \Rouda\OpenProvider\Api\Model\ZoneRecordUpdates();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('add', $data) && $data['add'] !== null) {
                $values = [];
                foreach ($data['add'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setAdd($values);
            }
            elseif (\array_key_exists('add', $data) && $data['add'] === null) {
                $object->setAdd(null);
            }
            if (\array_key_exists('remove', $data) && $data['remove'] !== null) {
                $values_1 = [];
                foreach ($data['remove'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setRemove($values_1);
            }
            elseif (\array_key_exists('remove', $data) && $data['remove'] === null) {
                $object->setRemove(null);
            }
            if (\array_key_exists('replace', $data) && $data['replace'] !== null) {
                $values_2 = [];
                foreach ($data['replace'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setReplace($values_2);
            }
            elseif (\array_key_exists('replace', $data) && $data['replace'] === null) {
                $object->setReplace(null);
            }
            if (\array_key_exists('update', $data) && $data['update'] !== null) {
                $values_3 = [];
                foreach ($data['update'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal', 'json', $context);
                }
                $object->setUpdate($values_3);
            }
            elseif (\array_key_exists('update', $data) && $data['update'] === null) {
                $object->setUpdate(null);
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
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['add'] = $values;
            }
            if ($object->isInitialized('remove') && null !== $object->getRemove()) {
                $values_1 = [];
                foreach ($object->getRemove() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['remove'] = $values_1;
            }
            if ($object->isInitialized('replace') && null !== $object->getReplace()) {
                $values_2 = [];
                foreach ($object->getReplace() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['replace'] = $values_2;
            }
            if ($object->isInitialized('update') && null !== $object->getUpdate()) {
                $values_3 = [];
                foreach ($object->getUpdate() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['update'] = $values_3;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates' => false];
        }
    }
}