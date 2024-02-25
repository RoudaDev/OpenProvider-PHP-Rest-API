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
    class HistoryZoneHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\HistoryZoneHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data) && $data['date'] !== null) {
                $object->setDate($data['date']);
            }
            elseif (\array_key_exists('date', $data) && $data['date'] === null) {
                $object->setDate(null);
            }
            if (\array_key_exists('is', $data) && $data['is'] !== null) {
                $object->setIs($data['is']);
            }
            elseif (\array_key_exists('is', $data) && $data['is'] === null) {
                $object->setIs(null);
            }
            if (\array_key_exists('source', $data) && $data['source'] !== null) {
                $object->setSource($data['source']);
            }
            elseif (\array_key_exists('source', $data) && $data['source'] === null) {
                $object->setSource(null);
            }
            if (\array_key_exists('was', $data) && $data['was'] !== null) {
                $object->setWas($data['was']);
            }
            elseif (\array_key_exists('was', $data) && $data['was'] === null) {
                $object->setWas(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('is') && null !== $object->getIs()) {
                $data['is'] = $object->getIs();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }
            if ($object->isInitialized('was') && null !== $object->getWas()) {
                $data['was'] = $object->getWas();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory' => false];
        }
    }
} else {
    class HistoryZoneHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory';
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
            $object = new \Rouda\OpenProvider\Api\Model\HistoryZoneHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data) && $data['date'] !== null) {
                $object->setDate($data['date']);
            }
            elseif (\array_key_exists('date', $data) && $data['date'] === null) {
                $object->setDate(null);
            }
            if (\array_key_exists('is', $data) && $data['is'] !== null) {
                $object->setIs($data['is']);
            }
            elseif (\array_key_exists('is', $data) && $data['is'] === null) {
                $object->setIs(null);
            }
            if (\array_key_exists('source', $data) && $data['source'] !== null) {
                $object->setSource($data['source']);
            }
            elseif (\array_key_exists('source', $data) && $data['source'] === null) {
                $object->setSource(null);
            }
            if (\array_key_exists('was', $data) && $data['was'] !== null) {
                $object->setWas($data['was']);
            }
            elseif (\array_key_exists('was', $data) && $data['was'] === null) {
                $object->setWas(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('date') && null !== $object->getDate()) {
                $data['date'] = $object->getDate();
            }
            if ($object->isInitialized('is') && null !== $object->getIs()) {
                $data['is'] = $object->getIs();
            }
            if ($object->isInitialized('source') && null !== $object->getSource()) {
                $data['source'] = $object->getSource();
            }
            if ($object->isInitialized('was') && null !== $object->getWas()) {
                $data['was'] = $object->getWas();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory' => false];
        }
    }
}