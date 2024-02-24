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
    class ProductSslProductPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ProductSslProductPrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('extra_domain_price', $data)) {
                $object->setExtraDomainPrice($this->denormalizer->denormalize($data['extra_domain_price'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPriceGroup', 'json', $context));
            }
            if (\array_key_exists('extra_wildcard_domain_price', $data)) {
                $object->setExtraWildcardDomainPrice($this->denormalizer->denormalize($data['extra_wildcard_domain_price'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPriceGroup', 'json', $context));
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPriceGroup', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('extraDomainPrice') && null !== $object->getExtraDomainPrice()) {
                $data['extra_domain_price'] = $this->normalizer->normalize($object->getExtraDomainPrice(), 'json', $context);
            }
            if ($object->isInitialized('extraWildcardDomainPrice') && null !== $object->getExtraWildcardDomainPrice()) {
                $data['extra_wildcard_domain_price'] = $this->normalizer->normalize($object->getExtraWildcardDomainPrice(), 'json', $context);
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices' => false];
        }
    }
} else {
    class ProductSslProductPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices';
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
            $object = new \Rouda\OpenProviderAPI\Model\ProductSslProductPrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('extra_domain_price', $data)) {
                $object->setExtraDomainPrice($this->denormalizer->denormalize($data['extra_domain_price'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPriceGroup', 'json', $context));
            }
            if (\array_key_exists('extra_wildcard_domain_price', $data)) {
                $object->setExtraWildcardDomainPrice($this->denormalizer->denormalize($data['extra_wildcard_domain_price'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPriceGroup', 'json', $context));
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPriceGroup', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('extraDomainPrice') && null !== $object->getExtraDomainPrice()) {
                $data['extra_domain_price'] = $this->normalizer->normalize($object->getExtraDomainPrice(), 'json', $context);
            }
            if ($object->isInitialized('extraWildcardDomainPrice') && null !== $object->getExtraWildcardDomainPrice()) {
                $data['extra_wildcard_domain_price'] = $this->normalizer->normalize($object->getExtraWildcardDomainPrice(), 'json', $context);
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices' => false];
        }
    }
}