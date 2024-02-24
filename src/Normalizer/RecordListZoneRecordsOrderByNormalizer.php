<?php

namespace Rouda\OpenProviderAPI\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Rouda\OpenProviderAPI\Runtime\Normalizer\CheckArray;
use Rouda\OpenProviderAPI\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RecordListZoneRecordsOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsOrderBy';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\RecordListZoneRecordsOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('prio', $data)) {
                $object->setPrio($data['prio']);
            }
            if (\array_key_exists('ttl', $data)) {
                $object->setTtl($data['ttl']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('prio') && null !== $object->getPrio()) {
                $data['prio'] = $object->getPrio();
            }
            if ($object->isInitialized('ttl') && null !== $object->getTtl()) {
                $data['ttl'] = $object->getTtl();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsOrderBy' => false];
        }
    }
} else {
    class RecordListZoneRecordsOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsOrderBy';
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
            $object = new \Rouda\OpenProviderAPI\Model\RecordListZoneRecordsOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('prio', $data)) {
                $object->setPrio($data['prio']);
            }
            if (\array_key_exists('ttl', $data)) {
                $object->setTtl($data['ttl']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('prio') && null !== $object->getPrio()) {
                $data['prio'] = $object->getPrio();
            }
            if ($object->isInitialized('ttl') && null !== $object->getTtl()) {
                $data['ttl'] = $object->getTtl();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsOrderBy' => false];
        }
    }
}