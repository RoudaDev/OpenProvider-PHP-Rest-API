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
    class SettingsTransactionFeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsTransactionFee';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsTransactionFee';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SettingsTransactionFee();
            if (\array_key_exists('bank', $data) && \is_int($data['bank'])) {
                $data['bank'] = (double) $data['bank'];
            }
            if (\array_key_exists('credit_card', $data) && \is_int($data['credit_card'])) {
                $data['credit_card'] = (double) $data['credit_card'];
            }
            if (\array_key_exists('ideal', $data) && \is_int($data['ideal'])) {
                $data['ideal'] = (double) $data['ideal'];
            }
            if (\array_key_exists('paypal', $data) && \is_int($data['paypal'])) {
                $data['paypal'] = (double) $data['paypal'];
            }
            if (\array_key_exists('western_union', $data) && \is_int($data['western_union'])) {
                $data['western_union'] = (double) $data['western_union'];
            }
            if (\array_key_exists('yandex', $data) && \is_int($data['yandex'])) {
                $data['yandex'] = (double) $data['yandex'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bank', $data) && $data['bank'] !== null) {
                $object->setBank($data['bank']);
            }
            elseif (\array_key_exists('bank', $data) && $data['bank'] === null) {
                $object->setBank(null);
            }
            if (\array_key_exists('credit_card', $data) && $data['credit_card'] !== null) {
                $object->setCreditCard($data['credit_card']);
            }
            elseif (\array_key_exists('credit_card', $data) && $data['credit_card'] === null) {
                $object->setCreditCard(null);
            }
            if (\array_key_exists('ideal', $data) && $data['ideal'] !== null) {
                $object->setIdeal($data['ideal']);
            }
            elseif (\array_key_exists('ideal', $data) && $data['ideal'] === null) {
                $object->setIdeal(null);
            }
            if (\array_key_exists('paypal', $data) && $data['paypal'] !== null) {
                $object->setPaypal($data['paypal']);
            }
            elseif (\array_key_exists('paypal', $data) && $data['paypal'] === null) {
                $object->setPaypal(null);
            }
            if (\array_key_exists('western_union', $data) && $data['western_union'] !== null) {
                $object->setWesternUnion($data['western_union']);
            }
            elseif (\array_key_exists('western_union', $data) && $data['western_union'] === null) {
                $object->setWesternUnion(null);
            }
            if (\array_key_exists('yandex', $data) && $data['yandex'] !== null) {
                $object->setYandex($data['yandex']);
            }
            elseif (\array_key_exists('yandex', $data) && $data['yandex'] === null) {
                $object->setYandex(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bank') && null !== $object->getBank()) {
                $data['bank'] = $object->getBank();
            }
            if ($object->isInitialized('creditCard') && null !== $object->getCreditCard()) {
                $data['credit_card'] = $object->getCreditCard();
            }
            if ($object->isInitialized('ideal') && null !== $object->getIdeal()) {
                $data['ideal'] = $object->getIdeal();
            }
            if ($object->isInitialized('paypal') && null !== $object->getPaypal()) {
                $data['paypal'] = $object->getPaypal();
            }
            if ($object->isInitialized('westernUnion') && null !== $object->getWesternUnion()) {
                $data['western_union'] = $object->getWesternUnion();
            }
            if ($object->isInitialized('yandex') && null !== $object->getYandex()) {
                $data['yandex'] = $object->getYandex();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsTransactionFee' => false];
        }
    }
} else {
    class SettingsTransactionFeeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsTransactionFee';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsTransactionFee';
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
            $object = new \Rouda\OpenProvider\Api\Model\SettingsTransactionFee();
            if (\array_key_exists('bank', $data) && \is_int($data['bank'])) {
                $data['bank'] = (double) $data['bank'];
            }
            if (\array_key_exists('credit_card', $data) && \is_int($data['credit_card'])) {
                $data['credit_card'] = (double) $data['credit_card'];
            }
            if (\array_key_exists('ideal', $data) && \is_int($data['ideal'])) {
                $data['ideal'] = (double) $data['ideal'];
            }
            if (\array_key_exists('paypal', $data) && \is_int($data['paypal'])) {
                $data['paypal'] = (double) $data['paypal'];
            }
            if (\array_key_exists('western_union', $data) && \is_int($data['western_union'])) {
                $data['western_union'] = (double) $data['western_union'];
            }
            if (\array_key_exists('yandex', $data) && \is_int($data['yandex'])) {
                $data['yandex'] = (double) $data['yandex'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bank', $data) && $data['bank'] !== null) {
                $object->setBank($data['bank']);
            }
            elseif (\array_key_exists('bank', $data) && $data['bank'] === null) {
                $object->setBank(null);
            }
            if (\array_key_exists('credit_card', $data) && $data['credit_card'] !== null) {
                $object->setCreditCard($data['credit_card']);
            }
            elseif (\array_key_exists('credit_card', $data) && $data['credit_card'] === null) {
                $object->setCreditCard(null);
            }
            if (\array_key_exists('ideal', $data) && $data['ideal'] !== null) {
                $object->setIdeal($data['ideal']);
            }
            elseif (\array_key_exists('ideal', $data) && $data['ideal'] === null) {
                $object->setIdeal(null);
            }
            if (\array_key_exists('paypal', $data) && $data['paypal'] !== null) {
                $object->setPaypal($data['paypal']);
            }
            elseif (\array_key_exists('paypal', $data) && $data['paypal'] === null) {
                $object->setPaypal(null);
            }
            if (\array_key_exists('western_union', $data) && $data['western_union'] !== null) {
                $object->setWesternUnion($data['western_union']);
            }
            elseif (\array_key_exists('western_union', $data) && $data['western_union'] === null) {
                $object->setWesternUnion(null);
            }
            if (\array_key_exists('yandex', $data) && $data['yandex'] !== null) {
                $object->setYandex($data['yandex']);
            }
            elseif (\array_key_exists('yandex', $data) && $data['yandex'] === null) {
                $object->setYandex(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('bank') && null !== $object->getBank()) {
                $data['bank'] = $object->getBank();
            }
            if ($object->isInitialized('creditCard') && null !== $object->getCreditCard()) {
                $data['credit_card'] = $object->getCreditCard();
            }
            if ($object->isInitialized('ideal') && null !== $object->getIdeal()) {
                $data['ideal'] = $object->getIdeal();
            }
            if ($object->isInitialized('paypal') && null !== $object->getPaypal()) {
                $data['paypal'] = $object->getPaypal();
            }
            if ($object->isInitialized('westernUnion') && null !== $object->getWesternUnion()) {
                $data['western_union'] = $object->getWesternUnion();
            }
            if ($object->isInitialized('yandex') && null !== $object->getYandex()) {
                $data['yandex'] = $object->getYandex();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsTransactionFee' => false];
        }
    }
}