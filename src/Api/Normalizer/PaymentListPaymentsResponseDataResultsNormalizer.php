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
    class PaymentListPaymentsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\PaymentListPaymentsResponseDataResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\PaymentListPaymentsResponseDataResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\PaymentListPaymentsResponseDataResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], 'Rouda\\OpenProvider\\Api\\Model\\PaymentPrices', 'json', $context));
            }
            elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
                $object->setAmount(null);
            }
            if (\array_key_exists('confirmation_date', $data) && $data['confirmation_date'] !== null) {
                $object->setConfirmationDate($data['confirmation_date']);
            }
            elseif (\array_key_exists('confirmation_date', $data) && $data['confirmation_date'] === null) {
                $object->setConfirmationDate(null);
            }
            if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
                $object->setCreationDate($data['creation_date']);
            }
            elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_processed', $data) && $data['is_processed'] !== null) {
                $object->setIsProcessed($data['is_processed']);
            }
            elseif (\array_key_exists('is_processed', $data) && $data['is_processed'] === null) {
                $object->setIsProcessed(null);
            }
            if (\array_key_exists('method', $data) && $data['method'] !== null) {
                $object->setMethod($data['method']);
            }
            elseif (\array_key_exists('method', $data) && $data['method'] === null) {
                $object->setMethod(null);
            }
            if (\array_key_exists('payment_date', $data) && $data['payment_date'] !== null) {
                $object->setPaymentDate($data['payment_date']);
            }
            elseif (\array_key_exists('payment_date', $data) && $data['payment_date'] === null) {
                $object->setPaymentDate(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
            }
            if ($object->isInitialized('confirmationDate') && null !== $object->getConfirmationDate()) {
                $data['confirmation_date'] = $object->getConfirmationDate();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isProcessed') && null !== $object->getIsProcessed()) {
                $data['is_processed'] = $object->getIsProcessed();
            }
            if ($object->isInitialized('method') && null !== $object->getMethod()) {
                $data['method'] = $object->getMethod();
            }
            if ($object->isInitialized('paymentDate') && null !== $object->getPaymentDate()) {
                $data['payment_date'] = $object->getPaymentDate();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\PaymentListPaymentsResponseDataResults' => false];
        }
    }
} else {
    class PaymentListPaymentsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\PaymentListPaymentsResponseDataResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\PaymentListPaymentsResponseDataResults';
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
            $object = new \Rouda\OpenProvider\Api\Model\PaymentListPaymentsResponseDataResults();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], 'Rouda\\OpenProvider\\Api\\Model\\PaymentPrices', 'json', $context));
            }
            elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
                $object->setAmount(null);
            }
            if (\array_key_exists('confirmation_date', $data) && $data['confirmation_date'] !== null) {
                $object->setConfirmationDate($data['confirmation_date']);
            }
            elseif (\array_key_exists('confirmation_date', $data) && $data['confirmation_date'] === null) {
                $object->setConfirmationDate(null);
            }
            if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
                $object->setCreationDate($data['creation_date']);
            }
            elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_processed', $data) && $data['is_processed'] !== null) {
                $object->setIsProcessed($data['is_processed']);
            }
            elseif (\array_key_exists('is_processed', $data) && $data['is_processed'] === null) {
                $object->setIsProcessed(null);
            }
            if (\array_key_exists('method', $data) && $data['method'] !== null) {
                $object->setMethod($data['method']);
            }
            elseif (\array_key_exists('method', $data) && $data['method'] === null) {
                $object->setMethod(null);
            }
            if (\array_key_exists('payment_date', $data) && $data['payment_date'] !== null) {
                $object->setPaymentDate($data['payment_date']);
            }
            elseif (\array_key_exists('payment_date', $data) && $data['payment_date'] === null) {
                $object->setPaymentDate(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
            }
            if ($object->isInitialized('confirmationDate') && null !== $object->getConfirmationDate()) {
                $data['confirmation_date'] = $object->getConfirmationDate();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isProcessed') && null !== $object->getIsProcessed()) {
                $data['is_processed'] = $object->getIsProcessed();
            }
            if ($object->isInitialized('method') && null !== $object->getMethod()) {
                $data['method'] = $object->getMethod();
            }
            if ($object->isInitialized('paymentDate') && null !== $object->getPaymentDate()) {
                $data['payment_date'] = $object->getPaymentDate();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\PaymentListPaymentsResponseDataResults' => false];
        }
    }
}