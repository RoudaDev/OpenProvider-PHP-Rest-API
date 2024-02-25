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
    class LicenseLicenseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\LicenseLicenseItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\LicenseLicenseItem';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\LicenseLicenseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('item', $data) && $data['item'] !== null) {
                $object->setItem($data['item']);
            }
            elseif (\array_key_exists('item', $data) && $data['item'] === null) {
                $object->setItem(null);
            }
            if (\array_key_exists('product', $data) && $data['product'] !== null) {
                $object->setProduct($data['product']);
            }
            elseif (\array_key_exists('product', $data) && $data['product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('sku_values', $data) && $data['sku_values'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['sku_values'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setSkuValues($values);
            }
            elseif (\array_key_exists('sku_values', $data) && $data['sku_values'] === null) {
                $object->setSkuValues(null);
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
            if ($object->isInitialized('item') && null !== $object->getItem()) {
                $data['item'] = $object->getItem();
            }
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['product'] = $object->getProduct();
            }
            if ($object->isInitialized('skuValues') && null !== $object->getSkuValues()) {
                $values = [];
                foreach ($object->getSkuValues() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['sku_values'] = $values;
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\LicenseLicenseItem' => false];
        }
    }
} else {
    class LicenseLicenseItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\LicenseLicenseItem';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\LicenseLicenseItem';
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
            $object = new \Rouda\OpenProvider\Api\Model\LicenseLicenseItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('item', $data) && $data['item'] !== null) {
                $object->setItem($data['item']);
            }
            elseif (\array_key_exists('item', $data) && $data['item'] === null) {
                $object->setItem(null);
            }
            if (\array_key_exists('product', $data) && $data['product'] !== null) {
                $object->setProduct($data['product']);
            }
            elseif (\array_key_exists('product', $data) && $data['product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('sku_values', $data) && $data['sku_values'] !== null) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['sku_values'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setSkuValues($values);
            }
            elseif (\array_key_exists('sku_values', $data) && $data['sku_values'] === null) {
                $object->setSkuValues(null);
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
            if ($object->isInitialized('item') && null !== $object->getItem()) {
                $data['item'] = $object->getItem();
            }
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['product'] = $object->getProduct();
            }
            if ($object->isInitialized('skuValues') && null !== $object->getSkuValues()) {
                $values = [];
                foreach ($object->getSkuValues() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['sku_values'] = $values;
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\LicenseLicenseItem' => false];
        }
    }
}