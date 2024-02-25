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
    class SettingsPaymentMethodLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SettingsPaymentMethodLimits();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
                $object->setMaximum($this->denormalizer->denormalize($data['maximum'], 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit', 'json', $context));
            }
            elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
                $object->setMaximum(null);
            }
            if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
                $object->setMinimum($this->denormalizer->denormalize($data['minimum'], 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit', 'json', $context));
            }
            elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
                $object->setMinimum(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('maximum') && null !== $object->getMaximum()) {
                $data['maximum'] = $this->normalizer->normalize($object->getMaximum(), 'json', $context);
            }
            if ($object->isInitialized('minimum') && null !== $object->getMinimum()) {
                $data['minimum'] = $this->normalizer->normalize($object->getMinimum(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits' => false];
        }
    }
} else {
    class SettingsPaymentMethodLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits';
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
            $object = new \Rouda\OpenProvider\Api\Model\SettingsPaymentMethodLimits();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('maximum', $data) && $data['maximum'] !== null) {
                $object->setMaximum($this->denormalizer->denormalize($data['maximum'], 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit', 'json', $context));
            }
            elseif (\array_key_exists('maximum', $data) && $data['maximum'] === null) {
                $object->setMaximum(null);
            }
            if (\array_key_exists('minimum', $data) && $data['minimum'] !== null) {
                $object->setMinimum($this->denormalizer->denormalize($data['minimum'], 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit', 'json', $context));
            }
            elseif (\array_key_exists('minimum', $data) && $data['minimum'] === null) {
                $object->setMinimum(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('maximum') && null !== $object->getMaximum()) {
                $data['maximum'] = $this->normalizer->normalize($object->getMaximum(), 'json', $context);
            }
            if ($object->isInitialized('minimum') && null !== $object->getMinimum()) {
                $data['minimum'] = $this->normalizer->normalize($object->getMinimum(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits' => false];
        }
    }
}