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
    class LicenseLicenseWithPriceVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\LicenseLicenseWithPriceVersion';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\LicenseLicenseWithPriceVersion';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\LicenseLicenseWithPriceVersion();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('activation_code', $data)) {
                $object->setActivationCode($data['activation_code']);
            }
            if (\array_key_exists('billing_type', $data)) {
                $object->setBillingType($data['billing_type']);
            }
            if (\array_key_exists('comment', $data)) {
                $object->setComment($data['comment']);
            }
            if (\array_key_exists('contract', $data)) {
                $object->setContract($data['contract']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('items', $data)) {
                $values = [];
                foreach ($data['items'] as $value) {
                    $values[] = $value;
                }
                $object->setItems($values);
            }
            if (\array_key_exists('key_id', $data)) {
                $object->setKeyId($data['key_id']);
            }
            if (\array_key_exists('key_number', $data)) {
                $object->setKeyNumber($data['key_number']);
            }
            if (\array_key_exists('order_date', $data)) {
                $object->setOrderDate($data['order_date']);
            }
            if (\array_key_exists('parent_key_id', $data)) {
                $object->setParentKeyId($data['parent_key_id']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('product', $data)) {
                $object->setProduct($data['product']);
            }
            if (\array_key_exists('sku_values', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['sku_values'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setSkuValues($values_1);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('activationCode') && null !== $object->getActivationCode()) {
                $data['activation_code'] = $object->getActivationCode();
            }
            if ($object->isInitialized('billingType') && null !== $object->getBillingType()) {
                $data['billing_type'] = $object->getBillingType();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('contract') && null !== $object->getContract()) {
                $data['contract'] = $object->getContract();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values = [];
                foreach ($object->getItems() as $value) {
                    $values[] = $value;
                }
                $data['items'] = $values;
            }
            if ($object->isInitialized('keyId') && null !== $object->getKeyId()) {
                $data['key_id'] = $object->getKeyId();
            }
            if ($object->isInitialized('keyNumber') && null !== $object->getKeyNumber()) {
                $data['key_number'] = $object->getKeyNumber();
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('parentKeyId') && null !== $object->getParentKeyId()) {
                $data['parent_key_id'] = $object->getParentKeyId();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['product'] = $object->getProduct();
            }
            if ($object->isInitialized('skuValues') && null !== $object->getSkuValues()) {
                $values_1 = [];
                foreach ($object->getSkuValues() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['sku_values'] = $values_1;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\LicenseLicenseWithPriceVersion' => false];
        }
    }
} else {
    class LicenseLicenseWithPriceVersionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\LicenseLicenseWithPriceVersion';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\LicenseLicenseWithPriceVersion';
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
            $object = new \Rouda\OpenProviderAPI\Model\LicenseLicenseWithPriceVersion();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('activation_code', $data)) {
                $object->setActivationCode($data['activation_code']);
            }
            if (\array_key_exists('billing_type', $data)) {
                $object->setBillingType($data['billing_type']);
            }
            if (\array_key_exists('comment', $data)) {
                $object->setComment($data['comment']);
            }
            if (\array_key_exists('contract', $data)) {
                $object->setContract($data['contract']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('items', $data)) {
                $values = [];
                foreach ($data['items'] as $value) {
                    $values[] = $value;
                }
                $object->setItems($values);
            }
            if (\array_key_exists('key_id', $data)) {
                $object->setKeyId($data['key_id']);
            }
            if (\array_key_exists('key_number', $data)) {
                $object->setKeyNumber($data['key_number']);
            }
            if (\array_key_exists('order_date', $data)) {
                $object->setOrderDate($data['order_date']);
            }
            if (\array_key_exists('parent_key_id', $data)) {
                $object->setParentKeyId($data['parent_key_id']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('product', $data)) {
                $object->setProduct($data['product']);
            }
            if (\array_key_exists('sku_values', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['sku_values'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setSkuValues($values_1);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
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
            if ($object->isInitialized('activationCode') && null !== $object->getActivationCode()) {
                $data['activation_code'] = $object->getActivationCode();
            }
            if ($object->isInitialized('billingType') && null !== $object->getBillingType()) {
                $data['billing_type'] = $object->getBillingType();
            }
            if ($object->isInitialized('comment') && null !== $object->getComment()) {
                $data['comment'] = $object->getComment();
            }
            if ($object->isInitialized('contract') && null !== $object->getContract()) {
                $data['contract'] = $object->getContract();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('items') && null !== $object->getItems()) {
                $values = [];
                foreach ($object->getItems() as $value) {
                    $values[] = $value;
                }
                $data['items'] = $values;
            }
            if ($object->isInitialized('keyId') && null !== $object->getKeyId()) {
                $data['key_id'] = $object->getKeyId();
            }
            if ($object->isInitialized('keyNumber') && null !== $object->getKeyNumber()) {
                $data['key_number'] = $object->getKeyNumber();
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('parentKeyId') && null !== $object->getParentKeyId()) {
                $data['parent_key_id'] = $object->getParentKeyId();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['product'] = $object->getProduct();
            }
            if ($object->isInitialized('skuValues') && null !== $object->getSkuValues()) {
                $values_1 = [];
                foreach ($object->getSkuValues() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['sku_values'] = $values_1;
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\LicenseLicenseWithPriceVersion' => false];
        }
    }
}