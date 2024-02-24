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
    class RecordListZoneRecordsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\RecordListZoneRecordsResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
            }
            if (\array_key_exists('data', $data)) {
                $object->setData($this->denormalizer->denormalize($data['data'], 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponseData', 'json', $context));
            }
            if (\array_key_exists('desc', $data)) {
                $object->setDesc($data['desc']);
            }
            if (\array_key_exists('maintenance', $data)) {
                $object->setMaintenance($data['maintenance']);
            }
            if (\array_key_exists('warnings', $data)) {
                $values = [];
                foreach ($data['warnings'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\ErrorWarning', 'json', $context);
                }
                $object->setWarnings($values);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            if ($object->isInitialized('maintenance') && null !== $object->getMaintenance()) {
                $data['maintenance'] = $object->getMaintenance();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values = [];
                foreach ($object->getWarnings() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['warnings'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponse' => false];
        }
    }
} else {
    class RecordListZoneRecordsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponse';
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
            $object = new \Rouda\OpenProviderAPI\Model\RecordListZoneRecordsResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
            }
            if (\array_key_exists('data', $data)) {
                $object->setData($this->denormalizer->denormalize($data['data'], 'Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponseData', 'json', $context));
            }
            if (\array_key_exists('desc', $data)) {
                $object->setDesc($data['desc']);
            }
            if (\array_key_exists('maintenance', $data)) {
                $object->setMaintenance($data['maintenance']);
            }
            if (\array_key_exists('warnings', $data)) {
                $values = [];
                foreach ($data['warnings'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\ErrorWarning', 'json', $context);
                }
                $object->setWarnings($values);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            if ($object->isInitialized('maintenance') && null !== $object->getMaintenance()) {
                $data['maintenance'] = $object->getMaintenance();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values = [];
                foreach ($object->getWarnings() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['warnings'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\RecordListZoneRecordsResponse' => false];
        }
    }
}