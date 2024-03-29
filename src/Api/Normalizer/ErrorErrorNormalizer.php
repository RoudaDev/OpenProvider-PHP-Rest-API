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
    class ErrorErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ErrorError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ErrorError';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ErrorError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data) && $data['code'] !== null) {
                $object->setCode($data['code']);
            }
            elseif (\array_key_exists('code', $data) && $data['code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $object->setData($data['data']);
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('desc', $data) && $data['desc'] !== null) {
                $object->setDesc($data['desc']);
            }
            elseif (\array_key_exists('desc', $data) && $data['desc'] === null) {
                $object->setDesc(null);
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
                $data['data'] = $object->getData();
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ErrorError' => false];
        }
    }
} else {
    class ErrorErrorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ErrorError';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ErrorError';
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
            $object = new \Rouda\OpenProvider\Api\Model\ErrorError();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data) && $data['code'] !== null) {
                $object->setCode($data['code']);
            }
            elseif (\array_key_exists('code', $data) && $data['code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $object->setData($data['data']);
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('desc', $data) && $data['desc'] !== null) {
                $object->setDesc($data['desc']);
            }
            elseif (\array_key_exists('desc', $data) && $data['desc'] === null) {
                $object->setDesc(null);
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
                $data['data'] = $object->getData();
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ErrorError' => false];
        }
    }
}