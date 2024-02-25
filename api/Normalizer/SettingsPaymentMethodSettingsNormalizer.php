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
    class SettingsPaymentMethodSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodSettings';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodSettings';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SettingsPaymentMethodSettings();
            if (\array_key_exists('transaction_fee', $data) && \is_int($data['transaction_fee'])) {
                $data['transaction_fee'] = (double) $data['transaction_fee'];
            }
            if (\array_key_exists('transaction_fee_absolute', $data) && \is_int($data['transaction_fee_absolute'])) {
                $data['transaction_fee_absolute'] = (double) $data['transaction_fee_absolute'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($this->denormalizer->denormalize($data['limit'], 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits', 'json', $context));
            }
            elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] !== null) {
                $object->setTransactionFee($data['transaction_fee']);
            }
            elseif (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] === null) {
                $object->setTransactionFee(null);
            }
            if (\array_key_exists('transaction_fee_absolute', $data) && $data['transaction_fee_absolute'] !== null) {
                $object->setTransactionFeeAbsolute($data['transaction_fee_absolute']);
            }
            elseif (\array_key_exists('transaction_fee_absolute', $data) && $data['transaction_fee_absolute'] === null) {
                $object->setTransactionFeeAbsolute(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $this->normalizer->normalize($object->getLimit(), 'json', $context);
            }
            if ($object->isInitialized('transactionFee') && null !== $object->getTransactionFee()) {
                $data['transaction_fee'] = $object->getTransactionFee();
            }
            if ($object->isInitialized('transactionFeeAbsolute') && null !== $object->getTransactionFeeAbsolute()) {
                $data['transaction_fee_absolute'] = $object->getTransactionFeeAbsolute();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodSettings' => false];
        }
    }
} else {
    class SettingsPaymentMethodSettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodSettings';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodSettings';
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
            $object = new \Rouda\OpenProvider\Api\Model\SettingsPaymentMethodSettings();
            if (\array_key_exists('transaction_fee', $data) && \is_int($data['transaction_fee'])) {
                $data['transaction_fee'] = (double) $data['transaction_fee'];
            }
            if (\array_key_exists('transaction_fee_absolute', $data) && \is_int($data['transaction_fee_absolute'])) {
                $data['transaction_fee_absolute'] = (double) $data['transaction_fee_absolute'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($this->denormalizer->denormalize($data['limit'], 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimits', 'json', $context));
            }
            elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] !== null) {
                $object->setTransactionFee($data['transaction_fee']);
            }
            elseif (\array_key_exists('transaction_fee', $data) && $data['transaction_fee'] === null) {
                $object->setTransactionFee(null);
            }
            if (\array_key_exists('transaction_fee_absolute', $data) && $data['transaction_fee_absolute'] !== null) {
                $object->setTransactionFeeAbsolute($data['transaction_fee_absolute']);
            }
            elseif (\array_key_exists('transaction_fee_absolute', $data) && $data['transaction_fee_absolute'] === null) {
                $object->setTransactionFeeAbsolute(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $this->normalizer->normalize($object->getLimit(), 'json', $context);
            }
            if ($object->isInitialized('transactionFee') && null !== $object->getTransactionFee()) {
                $data['transaction_fee'] = $object->getTransactionFee();
            }
            if ($object->isInitialized('transactionFeeAbsolute') && null !== $object->getTransactionFeeAbsolute()) {
                $data['transaction_fee_absolute'] = $object->getTransactionFeeAbsolute();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodSettings' => false];
        }
    }
}