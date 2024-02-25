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
    class ContactClientIpListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ContactClientIpList();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allow', $data) && $data['allow'] !== null) {
                $values = [];
                foreach ($data['allow'] as $value) {
                    $values[] = $value;
                }
                $object->setAllow($values);
            }
            elseif (\array_key_exists('allow', $data) && $data['allow'] === null) {
                $object->setAllow(null);
            }
            if (\array_key_exists('deny', $data) && $data['deny'] !== null) {
                $values_1 = [];
                foreach ($data['deny'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setDeny($values_1);
            }
            elseif (\array_key_exists('deny', $data) && $data['deny'] === null) {
                $object->setDeny(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('allow') && null !== $object->getAllow()) {
                $values = [];
                foreach ($object->getAllow() as $value) {
                    $values[] = $value;
                }
                $data['allow'] = $values;
            }
            if ($object->isInitialized('deny') && null !== $object->getDeny()) {
                $values_1 = [];
                foreach ($object->getDeny() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['deny'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList' => false];
        }
    }
} else {
    class ContactClientIpListNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList';
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
            $object = new \Rouda\OpenProvider\Api\Model\ContactClientIpList();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allow', $data) && $data['allow'] !== null) {
                $values = [];
                foreach ($data['allow'] as $value) {
                    $values[] = $value;
                }
                $object->setAllow($values);
            }
            elseif (\array_key_exists('allow', $data) && $data['allow'] === null) {
                $object->setAllow(null);
            }
            if (\array_key_exists('deny', $data) && $data['deny'] !== null) {
                $values_1 = [];
                foreach ($data['deny'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setDeny($values_1);
            }
            elseif (\array_key_exists('deny', $data) && $data['deny'] === null) {
                $object->setDeny(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('allow') && null !== $object->getAllow()) {
                $values = [];
                foreach ($object->getAllow() as $value) {
                    $values[] = $value;
                }
                $data['allow'] = $values;
            }
            if ($object->isInitialized('deny') && null !== $object->getDeny()) {
                $values_1 = [];
                foreach ($object->getDeny() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['deny'] = $values_1;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList' => false];
        }
    }
}