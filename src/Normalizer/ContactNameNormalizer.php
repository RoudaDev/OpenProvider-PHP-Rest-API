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
    class ContactNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ContactName';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ContactName';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ContactName();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first_name', $data)) {
                $object->setFirstName($data['first_name']);
            }
            if (\array_key_exists('full_name', $data)) {
                $object->setFullName($data['full_name']);
            }
            if (\array_key_exists('initials', $data)) {
                $object->setInitials($data['initials']);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
            }
            if (\array_key_exists('prefix', $data)) {
                $object->setPrefix($data['prefix']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('fullName') && null !== $object->getFullName()) {
                $data['full_name'] = $object->getFullName();
            }
            if ($object->isInitialized('initials') && null !== $object->getInitials()) {
                $data['initials'] = $object->getInitials();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('prefix') && null !== $object->getPrefix()) {
                $data['prefix'] = $object->getPrefix();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ContactName' => false];
        }
    }
} else {
    class ContactNameNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ContactName';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ContactName';
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
            $object = new \Rouda\OpenProviderAPI\Model\ContactName();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('first_name', $data)) {
                $object->setFirstName($data['first_name']);
            }
            if (\array_key_exists('full_name', $data)) {
                $object->setFullName($data['full_name']);
            }
            if (\array_key_exists('initials', $data)) {
                $object->setInitials($data['initials']);
            }
            if (\array_key_exists('last_name', $data)) {
                $object->setLastName($data['last_name']);
            }
            if (\array_key_exists('prefix', $data)) {
                $object->setPrefix($data['prefix']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['first_name'] = $object->getFirstName();
            }
            if ($object->isInitialized('fullName') && null !== $object->getFullName()) {
                $data['full_name'] = $object->getFullName();
            }
            if ($object->isInitialized('initials') && null !== $object->getInitials()) {
                $data['initials'] = $object->getInitials();
            }
            if ($object->isInitialized('lastName') && null !== $object->getLastName()) {
                $data['last_name'] = $object->getLastName();
            }
            if ($object->isInitialized('prefix') && null !== $object->getPrefix()) {
                $data['prefix'] = $object->getPrefix();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ContactName' => false];
        }
    }
}