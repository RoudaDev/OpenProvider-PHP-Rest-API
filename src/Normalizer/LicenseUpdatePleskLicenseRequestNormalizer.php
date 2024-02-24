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
    class LicenseUpdatePleskLicenseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\LicenseUpdatePleskLicenseRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\LicenseUpdatePleskLicenseRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\LicenseUpdatePleskLicenseRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_keys', $data)) {
                $values = [];
                foreach ($data['attached_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setAttachedKeys($values);
            }
            if (\array_key_exists('comment', $data)) {
                $object->setComment($data['comment']);
            }
            if (\array_key_exists('ip_address_binding', $data)) {
                $object->setIpAddressBinding($data['ip_address_binding']);
            }
            if (\array_key_exists('items', $data)) {
                $values_1 = [];
                foreach ($data['items'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setItems($values_1);
            }
            if (\array_key_exists('key_id', $data)) {
                $object->setKeyId($data['key_id']);
            }
            if (\array_key_exists('parent_key_id', $data)) {
                $object->setParentKeyId($data['parent_key_id']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('restrict_ip_binding', $data)) {
                $object->setRestrictIpBinding($data['restrict_ip_binding']);
            }
            if (\array_key_exists('suspended', $data)) {
                $object->setSuspended($data['suspended']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('attachedKeys') && null !== $object->getAttachedKeys()) {
                $values = [];
                foreach ($object->getAttachedKeys() as $value) {
                    $values[] = $value;
                }
                $data['attached_keys'] = $values;
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('ipAddressBinding') && null !== $object->getIpAddressBinding()) {
                $data['ip_address_binding'] = $object->getIpAddressBinding();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values_1 = [];
                foreach ($object->getItems() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['items'] = $values_1;
            }
            if ($object->isInitialized('keyId') && null !== $object->getKeyId()) {
                $data['key_id'] = $object->getKeyId();
            }
            if ($object->isInitialized('parentKeyId') && null !== $object->getParentKeyId()) {
                $data['parent_key_id'] = $object->getParentKeyId();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('restrictIpBinding') && null !== $object->getRestrictIpBinding()) {
                $data['restrict_ip_binding'] = $object->getRestrictIpBinding();
            }
            if ($object->isInitialized('suspended') && null !== $object->getSuspended()) {
                $data['suspended'] = $object->getSuspended();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\LicenseUpdatePleskLicenseRequest' => false];
        }
    }
} else {
    class LicenseUpdatePleskLicenseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\LicenseUpdatePleskLicenseRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\LicenseUpdatePleskLicenseRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\LicenseUpdatePleskLicenseRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_keys', $data)) {
                $values = [];
                foreach ($data['attached_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setAttachedKeys($values);
            }
            if (\array_key_exists('comment', $data)) {
                $object->setComment($data['comment']);
            }
            if (\array_key_exists('ip_address_binding', $data)) {
                $object->setIpAddressBinding($data['ip_address_binding']);
            }
            if (\array_key_exists('items', $data)) {
                $values_1 = [];
                foreach ($data['items'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setItems($values_1);
            }
            if (\array_key_exists('key_id', $data)) {
                $object->setKeyId($data['key_id']);
            }
            if (\array_key_exists('parent_key_id', $data)) {
                $object->setParentKeyId($data['parent_key_id']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('restrict_ip_binding', $data)) {
                $object->setRestrictIpBinding($data['restrict_ip_binding']);
            }
            if (\array_key_exists('suspended', $data)) {
                $object->setSuspended($data['suspended']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('attachedKeys') && null !== $object->getAttachedKeys()) {
                $values = [];
                foreach ($object->getAttachedKeys() as $value) {
                    $values[] = $value;
                }
                $data['attached_keys'] = $values;
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('ipAddressBinding') && null !== $object->getIpAddressBinding()) {
                $data['ip_address_binding'] = $object->getIpAddressBinding();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values_1 = [];
                foreach ($object->getItems() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['items'] = $values_1;
            }
            if ($object->isInitialized('keyId') && null !== $object->getKeyId()) {
                $data['key_id'] = $object->getKeyId();
            }
            if ($object->isInitialized('parentKeyId') && null !== $object->getParentKeyId()) {
                $data['parent_key_id'] = $object->getParentKeyId();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('restrictIpBinding') && null !== $object->getRestrictIpBinding()) {
                $data['restrict_ip_binding'] = $object->getRestrictIpBinding();
            }
            if ($object->isInitialized('suspended') && null !== $object->getSuspended()) {
                $data['suspended'] = $object->getSuspended();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\LicenseUpdatePleskLicenseRequest' => false];
        }
    }
}