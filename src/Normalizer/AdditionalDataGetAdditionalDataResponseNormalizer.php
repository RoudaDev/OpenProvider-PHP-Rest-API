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
    class AdditionalDataGetAdditionalDataResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\AdditionalDataGetAdditionalDataResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\AdditionalDataGetAdditionalDataResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\AdditionalDataGetAdditionalDataResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
            }
            if (\array_key_exists('data', $data)) {
                $values = [];
                foreach ($data['data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\AdditionalDataSpecification', 'json', $context);
                }
                $object->setData($values);
            }
            if (\array_key_exists('desc', $data)) {
                $object->setDesc($data['desc']);
            }
            if (\array_key_exists('maintenance', $data)) {
                $object->setMaintenance($data['maintenance']);
            }
            if (\array_key_exists('warnings', $data)) {
                $values_1 = [];
                foreach ($data['warnings'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\ErrorWarning', 'json', $context);
                }
                $object->setWarnings($values_1);
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
                $values = [];
                foreach ($object->getData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['data'] = $values;
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            if ($object->isInitialized('maintenance') && null !== $object->getMaintenance()) {
                $data['maintenance'] = $object->getMaintenance();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['warnings'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\AdditionalDataGetAdditionalDataResponse' => false];
        }
    }
} else {
    class AdditionalDataGetAdditionalDataResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\AdditionalDataGetAdditionalDataResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\AdditionalDataGetAdditionalDataResponse';
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
            $object = new \Rouda\OpenProviderAPI\Model\AdditionalDataGetAdditionalDataResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data)) {
                $object->setCode($data['code']);
            }
            if (\array_key_exists('data', $data)) {
                $values = [];
                foreach ($data['data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\AdditionalDataSpecification', 'json', $context);
                }
                $object->setData($values);
            }
            if (\array_key_exists('desc', $data)) {
                $object->setDesc($data['desc']);
            }
            if (\array_key_exists('maintenance', $data)) {
                $object->setMaintenance($data['maintenance']);
            }
            if (\array_key_exists('warnings', $data)) {
                $values_1 = [];
                foreach ($data['warnings'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\ErrorWarning', 'json', $context);
                }
                $object->setWarnings($values_1);
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
                $values = [];
                foreach ($object->getData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['data'] = $values;
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            if ($object->isInitialized('maintenance') && null !== $object->getMaintenance()) {
                $data['maintenance'] = $object->getMaintenance();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values_1 = [];
                foreach ($object->getWarnings() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['warnings'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\AdditionalDataGetAdditionalDataResponse' => false];
        }
    }
}