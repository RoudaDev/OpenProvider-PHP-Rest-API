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
    class HistoryZoneHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\HistoryZoneHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
            }
            if (\array_key_exists('is', $data)) {
                $object->setIs($data['is']);
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
            }
            if (\array_key_exists('was', $data)) {
                $object->setWas($data['was']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory' => false];
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
            return $type === 'Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory';
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
            $object = new \Rouda\OpenProviderAPI\Model\HistoryZoneHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('date', $data)) {
                $object->setDate($data['date']);
            }
            if (\array_key_exists('is', $data)) {
                $object->setIs($data['is']);
            }
            if (\array_key_exists('source', $data)) {
                $object->setSource($data['source']);
            }
            if (\array_key_exists('was', $data)) {
                $object->setWas($data['was']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory' => false];
        }
    }
}