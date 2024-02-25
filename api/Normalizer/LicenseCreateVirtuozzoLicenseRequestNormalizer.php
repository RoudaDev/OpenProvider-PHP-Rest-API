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
    class LicenseCreateVirtuozzoLicenseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\LicenseCreateVirtuozzoLicenseRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\LicenseCreateVirtuozzoLicenseRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\LicenseCreateVirtuozzoLicenseRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_keys', $data) && $data['attached_keys'] !== null) {
                $values = [];
                foreach ($data['attached_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setAttachedKeys($values);
            }
            elseif (\array_key_exists('attached_keys', $data) && $data['attached_keys'] === null) {
                $object->setAttachedKeys(null);
            }
            if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
                $object->setComment($data['comment']);
            }
            elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
                $object->setComment(null);
            }
            if (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] !== null) {
                $object->setIpAddressBinding($data['ip_address_binding']);
            }
            elseif (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] === null) {
                $object->setIpAddressBinding(null);
            }
            if (\array_key_exists('items', $data) && $data['items'] !== null) {
                $values_1 = [];
                foreach ($data['items'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setItems($values_1);
            }
            elseif (\array_key_exists('items', $data) && $data['items'] === null) {
                $object->setItems(null);
            }
            if (\array_key_exists('parent_key_id', $data) && $data['parent_key_id'] !== null) {
                $object->setParentKeyId($data['parent_key_id']);
            }
            elseif (\array_key_exists('parent_key_id', $data) && $data['parent_key_id'] === null) {
                $object->setParentKeyId(null);
            }
            if (\array_key_exists('pcs_capacity', $data) && $data['pcs_capacity'] !== null) {
                $object->setPcsCapacity($data['pcs_capacity']);
            }
            elseif (\array_key_exists('pcs_capacity', $data) && $data['pcs_capacity'] === null) {
                $object->setPcsCapacity(null);
            }
            if (\array_key_exists('period', $data) && $data['period'] !== null) {
                $object->setPeriod($data['period']);
            }
            elseif (\array_key_exists('period', $data) && $data['period'] === null) {
                $object->setPeriod(null);
            }
            if (\array_key_exists('restrict_ip_binding', $data) && $data['restrict_ip_binding'] !== null) {
                $object->setRestrictIpBinding($data['restrict_ip_binding']);
            }
            elseif (\array_key_exists('restrict_ip_binding', $data) && $data['restrict_ip_binding'] === null) {
                $object->setRestrictIpBinding(null);
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
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
            if ($object->isInitialized('parentKeyId') && null !== $object->getParentKeyId()) {
                $data['parent_key_id'] = $object->getParentKeyId();
            }
            if ($object->isInitialized('pcsCapacity') && null !== $object->getPcsCapacity()) {
                $data['pcs_capacity'] = $object->getPcsCapacity();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('restrictIpBinding') && null !== $object->getRestrictIpBinding()) {
                $data['restrict_ip_binding'] = $object->getRestrictIpBinding();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\LicenseCreateVirtuozzoLicenseRequest' => false];
        }
    }
} else {
    class LicenseCreateVirtuozzoLicenseRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\LicenseCreateVirtuozzoLicenseRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\LicenseCreateVirtuozzoLicenseRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\LicenseCreateVirtuozzoLicenseRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_keys', $data) && $data['attached_keys'] !== null) {
                $values = [];
                foreach ($data['attached_keys'] as $value) {
                    $values[] = $value;
                }
                $object->setAttachedKeys($values);
            }
            elseif (\array_key_exists('attached_keys', $data) && $data['attached_keys'] === null) {
                $object->setAttachedKeys(null);
            }
            if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
                $object->setComment($data['comment']);
            }
            elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
                $object->setComment(null);
            }
            if (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] !== null) {
                $object->setIpAddressBinding($data['ip_address_binding']);
            }
            elseif (\array_key_exists('ip_address_binding', $data) && $data['ip_address_binding'] === null) {
                $object->setIpAddressBinding(null);
            }
            if (\array_key_exists('items', $data) && $data['items'] !== null) {
                $values_1 = [];
                foreach ($data['items'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setItems($values_1);
            }
            elseif (\array_key_exists('items', $data) && $data['items'] === null) {
                $object->setItems(null);
            }
            if (\array_key_exists('parent_key_id', $data) && $data['parent_key_id'] !== null) {
                $object->setParentKeyId($data['parent_key_id']);
            }
            elseif (\array_key_exists('parent_key_id', $data) && $data['parent_key_id'] === null) {
                $object->setParentKeyId(null);
            }
            if (\array_key_exists('pcs_capacity', $data) && $data['pcs_capacity'] !== null) {
                $object->setPcsCapacity($data['pcs_capacity']);
            }
            elseif (\array_key_exists('pcs_capacity', $data) && $data['pcs_capacity'] === null) {
                $object->setPcsCapacity(null);
            }
            if (\array_key_exists('period', $data) && $data['period'] !== null) {
                $object->setPeriod($data['period']);
            }
            elseif (\array_key_exists('period', $data) && $data['period'] === null) {
                $object->setPeriod(null);
            }
            if (\array_key_exists('restrict_ip_binding', $data) && $data['restrict_ip_binding'] !== null) {
                $object->setRestrictIpBinding($data['restrict_ip_binding']);
            }
            elseif (\array_key_exists('restrict_ip_binding', $data) && $data['restrict_ip_binding'] === null) {
                $object->setRestrictIpBinding(null);
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
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
            if ($object->isInitialized('parentKeyId') && null !== $object->getParentKeyId()) {
                $data['parent_key_id'] = $object->getParentKeyId();
            }
            if ($object->isInitialized('pcsCapacity') && null !== $object->getPcsCapacity()) {
                $data['pcs_capacity'] = $object->getPcsCapacity();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('restrictIpBinding') && null !== $object->getRestrictIpBinding()) {
                $data['restrict_ip_binding'] = $object->getRestrictIpBinding();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\LicenseCreateVirtuozzoLicenseRequest' => false];
        }
    }
}