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
    class TldPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\TldPrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\TldPrices';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\TldPrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('create_price', $data)) {
                $object->setCreatePrice($this->denormalizer->denormalize($data['create_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('domicile_price', $data)) {
                $object->setDomicilePrice($this->denormalizer->denormalize($data['domicile_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('max_period', $data)) {
                $object->setMaxPeriod($data['max_period']);
            }
            if (\array_key_exists('min_period', $data)) {
                $object->setMinPeriod($data['min_period']);
            }
            if (\array_key_exists('renew_price', $data)) {
                $object->setRenewPrice($this->denormalizer->denormalize($data['renew_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('reseller_price', $data)) {
                $object->setResellerPrice($this->denormalizer->denormalize($data['reseller_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPriceWithPromoInfo', 'json', $context));
            }
            if (\array_key_exists('restore_price', $data)) {
                $object->setRestorePrice($this->denormalizer->denormalize($data['restore_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('setup_price', $data)) {
                $object->setSetupPrice($this->denormalizer->denormalize($data['setup_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('soft_restore_price', $data)) {
                $object->setSoftRestorePrice($this->denormalizer->denormalize($data['soft_restore_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('trade_price', $data)) {
                $object->setTradePrice($this->denormalizer->denormalize($data['trade_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('transfer_price', $data)) {
                $object->setTransferPrice($this->denormalizer->denormalize($data['transfer_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('update_price', $data)) {
                $object->setUpdatePrice($this->denormalizer->denormalize($data['update_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('createPrice') && null !== $object->getCreatePrice()) {
                $data['create_price'] = $this->normalizer->normalize($object->getCreatePrice(), 'json', $context);
            }
            if ($object->isInitialized('domicilePrice') && null !== $object->getDomicilePrice()) {
                $data['domicile_price'] = $this->normalizer->normalize($object->getDomicilePrice(), 'json', $context);
            }
            if ($object->isInitialized('maxPeriod') && null !== $object->getMaxPeriod()) {
                $data['max_period'] = $object->getMaxPeriod();
            }
            if ($object->isInitialized('minPeriod') && null !== $object->getMinPeriod()) {
                $data['min_period'] = $object->getMinPeriod();
            }
            if ($object->isInitialized('renewPrice') && null !== $object->getRenewPrice()) {
                $data['renew_price'] = $this->normalizer->normalize($object->getRenewPrice(), 'json', $context);
            }
            if ($object->isInitialized('resellerPrice') && null !== $object->getResellerPrice()) {
                $data['reseller_price'] = $this->normalizer->normalize($object->getResellerPrice(), 'json', $context);
            }
            if ($object->isInitialized('restorePrice') && null !== $object->getRestorePrice()) {
                $data['restore_price'] = $this->normalizer->normalize($object->getRestorePrice(), 'json', $context);
            }
            if ($object->isInitialized('setupPrice') && null !== $object->getSetupPrice()) {
                $data['setup_price'] = $this->normalizer->normalize($object->getSetupPrice(), 'json', $context);
            }
            if ($object->isInitialized('softRestorePrice') && null !== $object->getSoftRestorePrice()) {
                $data['soft_restore_price'] = $this->normalizer->normalize($object->getSoftRestorePrice(), 'json', $context);
            }
            if ($object->isInitialized('tradePrice') && null !== $object->getTradePrice()) {
                $data['trade_price'] = $this->normalizer->normalize($object->getTradePrice(), 'json', $context);
            }
            if ($object->isInitialized('transferPrice') && null !== $object->getTransferPrice()) {
                $data['transfer_price'] = $this->normalizer->normalize($object->getTransferPrice(), 'json', $context);
            }
            if ($object->isInitialized('updatePrice') && null !== $object->getUpdatePrice()) {
                $data['update_price'] = $this->normalizer->normalize($object->getUpdatePrice(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\TldPrices' => false];
        }
    }
} else {
    class TldPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\TldPrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\TldPrices';
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
            $object = new \Rouda\OpenProviderAPI\Model\TldPrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('create_price', $data)) {
                $object->setCreatePrice($this->denormalizer->denormalize($data['create_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('domicile_price', $data)) {
                $object->setDomicilePrice($this->denormalizer->denormalize($data['domicile_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('max_period', $data)) {
                $object->setMaxPeriod($data['max_period']);
            }
            if (\array_key_exists('min_period', $data)) {
                $object->setMinPeriod($data['min_period']);
            }
            if (\array_key_exists('renew_price', $data)) {
                $object->setRenewPrice($this->denormalizer->denormalize($data['renew_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('reseller_price', $data)) {
                $object->setResellerPrice($this->denormalizer->denormalize($data['reseller_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPriceWithPromoInfo', 'json', $context));
            }
            if (\array_key_exists('restore_price', $data)) {
                $object->setRestorePrice($this->denormalizer->denormalize($data['restore_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('setup_price', $data)) {
                $object->setSetupPrice($this->denormalizer->denormalize($data['setup_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('soft_restore_price', $data)) {
                $object->setSoftRestorePrice($this->denormalizer->denormalize($data['soft_restore_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('trade_price', $data)) {
                $object->setTradePrice($this->denormalizer->denormalize($data['trade_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('transfer_price', $data)) {
                $object->setTransferPrice($this->denormalizer->denormalize($data['transfer_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('update_price', $data)) {
                $object->setUpdatePrice($this->denormalizer->denormalize($data['update_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('createPrice') && null !== $object->getCreatePrice()) {
                $data['create_price'] = $this->normalizer->normalize($object->getCreatePrice(), 'json', $context);
            }
            if ($object->isInitialized('domicilePrice') && null !== $object->getDomicilePrice()) {
                $data['domicile_price'] = $this->normalizer->normalize($object->getDomicilePrice(), 'json', $context);
            }
            if ($object->isInitialized('maxPeriod') && null !== $object->getMaxPeriod()) {
                $data['max_period'] = $object->getMaxPeriod();
            }
            if ($object->isInitialized('minPeriod') && null !== $object->getMinPeriod()) {
                $data['min_period'] = $object->getMinPeriod();
            }
            if ($object->isInitialized('renewPrice') && null !== $object->getRenewPrice()) {
                $data['renew_price'] = $this->normalizer->normalize($object->getRenewPrice(), 'json', $context);
            }
            if ($object->isInitialized('resellerPrice') && null !== $object->getResellerPrice()) {
                $data['reseller_price'] = $this->normalizer->normalize($object->getResellerPrice(), 'json', $context);
            }
            if ($object->isInitialized('restorePrice') && null !== $object->getRestorePrice()) {
                $data['restore_price'] = $this->normalizer->normalize($object->getRestorePrice(), 'json', $context);
            }
            if ($object->isInitialized('setupPrice') && null !== $object->getSetupPrice()) {
                $data['setup_price'] = $this->normalizer->normalize($object->getSetupPrice(), 'json', $context);
            }
            if ($object->isInitialized('softRestorePrice') && null !== $object->getSoftRestorePrice()) {
                $data['soft_restore_price'] = $this->normalizer->normalize($object->getSoftRestorePrice(), 'json', $context);
            }
            if ($object->isInitialized('tradePrice') && null !== $object->getTradePrice()) {
                $data['trade_price'] = $this->normalizer->normalize($object->getTradePrice(), 'json', $context);
            }
            if ($object->isInitialized('transferPrice') && null !== $object->getTransferPrice()) {
                $data['transfer_price'] = $this->normalizer->normalize($object->getTransferPrice(), 'json', $context);
            }
            if ($object->isInitialized('updatePrice') && null !== $object->getUpdatePrice()) {
                $data['update_price'] = $this->normalizer->normalize($object->getUpdatePrice(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\TldPrices' => false];
        }
    }
}