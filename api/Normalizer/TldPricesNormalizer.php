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
    class TldPricesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TldPrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TldPrices';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\TldPrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('create_price', $data) && $data['create_price'] !== null) {
                $object->setCreatePrice($this->denormalizer->denormalize($data['create_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('create_price', $data) && $data['create_price'] === null) {
                $object->setCreatePrice(null);
            }
            if (\array_key_exists('domicile_price', $data) && $data['domicile_price'] !== null) {
                $object->setDomicilePrice($this->denormalizer->denormalize($data['domicile_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('domicile_price', $data) && $data['domicile_price'] === null) {
                $object->setDomicilePrice(null);
            }
            if (\array_key_exists('max_period', $data) && $data['max_period'] !== null) {
                $object->setMaxPeriod($data['max_period']);
            }
            elseif (\array_key_exists('max_period', $data) && $data['max_period'] === null) {
                $object->setMaxPeriod(null);
            }
            if (\array_key_exists('min_period', $data) && $data['min_period'] !== null) {
                $object->setMinPeriod($data['min_period']);
            }
            elseif (\array_key_exists('min_period', $data) && $data['min_period'] === null) {
                $object->setMinPeriod(null);
            }
            if (\array_key_exists('renew_price', $data) && $data['renew_price'] !== null) {
                $object->setRenewPrice($this->denormalizer->denormalize($data['renew_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('renew_price', $data) && $data['renew_price'] === null) {
                $object->setRenewPrice(null);
            }
            if (\array_key_exists('reseller_price', $data) && $data['reseller_price'] !== null) {
                $object->setResellerPrice($this->denormalizer->denormalize($data['reseller_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPriceWithPromoInfo', 'json', $context));
            }
            elseif (\array_key_exists('reseller_price', $data) && $data['reseller_price'] === null) {
                $object->setResellerPrice(null);
            }
            if (\array_key_exists('restore_price', $data) && $data['restore_price'] !== null) {
                $object->setRestorePrice($this->denormalizer->denormalize($data['restore_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('restore_price', $data) && $data['restore_price'] === null) {
                $object->setRestorePrice(null);
            }
            if (\array_key_exists('setup_price', $data) && $data['setup_price'] !== null) {
                $object->setSetupPrice($this->denormalizer->denormalize($data['setup_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('setup_price', $data) && $data['setup_price'] === null) {
                $object->setSetupPrice(null);
            }
            if (\array_key_exists('soft_restore_price', $data) && $data['soft_restore_price'] !== null) {
                $object->setSoftRestorePrice($this->denormalizer->denormalize($data['soft_restore_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('soft_restore_price', $data) && $data['soft_restore_price'] === null) {
                $object->setSoftRestorePrice(null);
            }
            if (\array_key_exists('trade_price', $data) && $data['trade_price'] !== null) {
                $object->setTradePrice($this->denormalizer->denormalize($data['trade_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('trade_price', $data) && $data['trade_price'] === null) {
                $object->setTradePrice(null);
            }
            if (\array_key_exists('transfer_price', $data) && $data['transfer_price'] !== null) {
                $object->setTransferPrice($this->denormalizer->denormalize($data['transfer_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('transfer_price', $data) && $data['transfer_price'] === null) {
                $object->setTransferPrice(null);
            }
            if (\array_key_exists('update_price', $data) && $data['update_price'] !== null) {
                $object->setUpdatePrice($this->denormalizer->denormalize($data['update_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('update_price', $data) && $data['update_price'] === null) {
                $object->setUpdatePrice(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\TldPrices' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TldPrices';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TldPrices';
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
            $object = new \Rouda\OpenProvider\Api\Model\TldPrices();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('create_price', $data) && $data['create_price'] !== null) {
                $object->setCreatePrice($this->denormalizer->denormalize($data['create_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('create_price', $data) && $data['create_price'] === null) {
                $object->setCreatePrice(null);
            }
            if (\array_key_exists('domicile_price', $data) && $data['domicile_price'] !== null) {
                $object->setDomicilePrice($this->denormalizer->denormalize($data['domicile_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('domicile_price', $data) && $data['domicile_price'] === null) {
                $object->setDomicilePrice(null);
            }
            if (\array_key_exists('max_period', $data) && $data['max_period'] !== null) {
                $object->setMaxPeriod($data['max_period']);
            }
            elseif (\array_key_exists('max_period', $data) && $data['max_period'] === null) {
                $object->setMaxPeriod(null);
            }
            if (\array_key_exists('min_period', $data) && $data['min_period'] !== null) {
                $object->setMinPeriod($data['min_period']);
            }
            elseif (\array_key_exists('min_period', $data) && $data['min_period'] === null) {
                $object->setMinPeriod(null);
            }
            if (\array_key_exists('renew_price', $data) && $data['renew_price'] !== null) {
                $object->setRenewPrice($this->denormalizer->denormalize($data['renew_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('renew_price', $data) && $data['renew_price'] === null) {
                $object->setRenewPrice(null);
            }
            if (\array_key_exists('reseller_price', $data) && $data['reseller_price'] !== null) {
                $object->setResellerPrice($this->denormalizer->denormalize($data['reseller_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPriceWithPromoInfo', 'json', $context));
            }
            elseif (\array_key_exists('reseller_price', $data) && $data['reseller_price'] === null) {
                $object->setResellerPrice(null);
            }
            if (\array_key_exists('restore_price', $data) && $data['restore_price'] !== null) {
                $object->setRestorePrice($this->denormalizer->denormalize($data['restore_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('restore_price', $data) && $data['restore_price'] === null) {
                $object->setRestorePrice(null);
            }
            if (\array_key_exists('setup_price', $data) && $data['setup_price'] !== null) {
                $object->setSetupPrice($this->denormalizer->denormalize($data['setup_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('setup_price', $data) && $data['setup_price'] === null) {
                $object->setSetupPrice(null);
            }
            if (\array_key_exists('soft_restore_price', $data) && $data['soft_restore_price'] !== null) {
                $object->setSoftRestorePrice($this->denormalizer->denormalize($data['soft_restore_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('soft_restore_price', $data) && $data['soft_restore_price'] === null) {
                $object->setSoftRestorePrice(null);
            }
            if (\array_key_exists('trade_price', $data) && $data['trade_price'] !== null) {
                $object->setTradePrice($this->denormalizer->denormalize($data['trade_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('trade_price', $data) && $data['trade_price'] === null) {
                $object->setTradePrice(null);
            }
            if (\array_key_exists('transfer_price', $data) && $data['transfer_price'] !== null) {
                $object->setTransferPrice($this->denormalizer->denormalize($data['transfer_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('transfer_price', $data) && $data['transfer_price'] === null) {
                $object->setTransferPrice(null);
            }
            if (\array_key_exists('update_price', $data) && $data['update_price'] !== null) {
                $object->setUpdatePrice($this->denormalizer->denormalize($data['update_price'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrice', 'json', $context));
            }
            elseif (\array_key_exists('update_price', $data) && $data['update_price'] === null) {
                $object->setUpdatePrice(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\TldPrices' => false];
        }
    }
}