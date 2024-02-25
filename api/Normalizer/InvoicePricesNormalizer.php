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
    class InvoicePricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrices';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\InvoicePrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('product', $data) && $data['product'] !== null) {
                $object->setProduct($this->denormalizer->denormalize($data['product'], 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrice', 'json', $context));
            }
            elseif (\array_key_exists('product', $data) && $data['product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('reseller', $data) && $data['reseller'] !== null) {
                $object->setReseller($this->denormalizer->denormalize($data['reseller'], 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrice', 'json', $context));
            }
            elseif (\array_key_exists('reseller', $data) && $data['reseller'] === null) {
                $object->setReseller(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['product'] = $this->normalizer->normalize($object->getProduct(), 'json', $context);
            }
            if ($object->isInitialized('reseller') && null !== $object->getReseller()) {
                $data['reseller'] = $this->normalizer->normalize($object->getReseller(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\InvoicePrices' => false];
        }
    }
} else {
    class InvoicePricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrices';
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
            $object = new \Rouda\OpenProvider\Api\Model\InvoicePrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('product', $data) && $data['product'] !== null) {
                $object->setProduct($this->denormalizer->denormalize($data['product'], 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrice', 'json', $context));
            }
            elseif (\array_key_exists('product', $data) && $data['product'] === null) {
                $object->setProduct(null);
            }
            if (\array_key_exists('reseller', $data) && $data['reseller'] !== null) {
                $object->setReseller($this->denormalizer->denormalize($data['reseller'], 'Rouda\\OpenProvider\\Api\\Model\\InvoicePrice', 'json', $context));
            }
            elseif (\array_key_exists('reseller', $data) && $data['reseller'] === null) {
                $object->setReseller(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('product') && null !== $object->getProduct()) {
                $data['product'] = $this->normalizer->normalize($object->getProduct(), 'json', $context);
            }
            if ($object->isInitialized('reseller') && null !== $object->getReseller()) {
                $data['reseller'] = $this->normalizer->normalize($object->getReseller(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\InvoicePrices' => false];
        }
    }
}