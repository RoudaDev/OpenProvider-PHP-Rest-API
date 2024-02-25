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
    class ZoneRecordWithOriginalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ZoneRecordWithOriginal();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('original_record', $data) && $data['original_record'] !== null) {
                $object->setOriginalRecord($this->denormalizer->denormalize($data['original_record'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context));
            }
            elseif (\array_key_exists('original_record', $data) && $data['original_record'] === null) {
                $object->setOriginalRecord(null);
            }
            if (\array_key_exists('record', $data) && $data['record'] !== null) {
                $object->setRecord($this->denormalizer->denormalize($data['record'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context));
            }
            elseif (\array_key_exists('record', $data) && $data['record'] === null) {
                $object->setRecord(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('originalRecord') && null !== $object->getOriginalRecord()) {
                $data['original_record'] = $this->normalizer->normalize($object->getOriginalRecord(), 'json', $context);
            }
            if ($object->isInitialized('record') && null !== $object->getRecord()) {
                $data['record'] = $this->normalizer->normalize($object->getRecord(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal' => false];
        }
    }
} else {
    class ZoneRecordWithOriginalNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal';
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
            $object = new \Rouda\OpenProvider\Api\Model\ZoneRecordWithOriginal();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('original_record', $data) && $data['original_record'] !== null) {
                $object->setOriginalRecord($this->denormalizer->denormalize($data['original_record'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context));
            }
            elseif (\array_key_exists('original_record', $data) && $data['original_record'] === null) {
                $object->setOriginalRecord(null);
            }
            if (\array_key_exists('record', $data) && $data['record'] !== null) {
                $object->setRecord($this->denormalizer->denormalize($data['record'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecord', 'json', $context));
            }
            elseif (\array_key_exists('record', $data) && $data['record'] === null) {
                $object->setRecord(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('originalRecord') && null !== $object->getOriginalRecord()) {
                $data['original_record'] = $this->normalizer->normalize($object->getOriginalRecord(), 'json', $context);
            }
            if ($object->isInitialized('record') && null !== $object->getRecord()) {
                $data['record'] = $this->normalizer->normalize($object->getRecord(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneRecordWithOriginal' => false];
        }
    }
}