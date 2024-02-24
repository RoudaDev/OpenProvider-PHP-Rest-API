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
    class TransactionListTransactionsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\TransactionListTransactionsResponseDataResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\TransactionListTransactionsResponseDataResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\TransactionListTransactionsResponseDataResults();
            if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
                $data['discount'] = (double) $data['discount'];
            }
            if (\array_key_exists('exchange_rate', $data) && \is_int($data['exchange_rate'])) {
                $data['exchange_rate'] = (double) $data['exchange_rate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('discount', $data)) {
                $object->setDiscount($data['discount']);
            }
            if (\array_key_exists('exchange_rate', $data)) {
                $object->setExchangeRate($data['exchange_rate']);
            }
            if (\array_key_exists('object_type', $data)) {
                $object->setObjectType($data['object_type']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProviderAPI\\Model\\TransactionPrices', 'json', $context));
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
            }
            if (\array_key_exists('reference_id', $data)) {
                $object->setReferenceId($data['reference_id']);
            }
            if (\array_key_exists('setup', $data)) {
                $object->setSetup($this->denormalizer->denormalize($data['setup'], 'Rouda\\OpenProviderAPI\\Model\\TransactionPrices', 'json', $context));
            }
            if (\array_key_exists('subject', $data)) {
                $object->setSubject($data['subject']);
            }
            if (\array_key_exists('total', $data)) {
                $object->setTotal($this->denormalizer->denormalize($data['total'], 'Rouda\\OpenProviderAPI\\Model\\TransactionPrices', 'json', $context));
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
                $data['discount'] = $object->getDiscount();
            }
            if ($object->isInitialized('exchangeRate') && null !== $object->getExchangeRate()) {
                $data['exchange_rate'] = $object->getExchangeRate();
            }
            if ($object->isInitialized('objectType') && null !== $object->getObjectType()) {
                $data['object_type'] = $object->getObjectType();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('referenceId') && null !== $object->getReferenceId()) {
                $data['reference_id'] = $object->getReferenceId();
            }
            if ($object->isInitialized('setup') && null !== $object->getSetup()) {
                $data['setup'] = $this->normalizer->normalize($object->getSetup(), 'json', $context);
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $this->normalizer->normalize($object->getTotal(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\TransactionListTransactionsResponseDataResults' => false];
        }
    }
} else {
    class TransactionListTransactionsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\TransactionListTransactionsResponseDataResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\TransactionListTransactionsResponseDataResults';
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
            $object = new \Rouda\OpenProviderAPI\Model\TransactionListTransactionsResponseDataResults();
            if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
                $data['discount'] = (double) $data['discount'];
            }
            if (\array_key_exists('exchange_rate', $data) && \is_int($data['exchange_rate'])) {
                $data['exchange_rate'] = (double) $data['exchange_rate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('action', $data)) {
                $object->setAction($data['action']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('discount', $data)) {
                $object->setDiscount($data['discount']);
            }
            if (\array_key_exists('exchange_rate', $data)) {
                $object->setExchangeRate($data['exchange_rate']);
            }
            if (\array_key_exists('object_type', $data)) {
                $object->setObjectType($data['object_type']);
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProviderAPI\\Model\\TransactionPrices', 'json', $context));
            }
            if (\array_key_exists('quantity', $data)) {
                $object->setQuantity($data['quantity']);
            }
            if (\array_key_exists('reference_id', $data)) {
                $object->setReferenceId($data['reference_id']);
            }
            if (\array_key_exists('setup', $data)) {
                $object->setSetup($this->denormalizer->denormalize($data['setup'], 'Rouda\\OpenProviderAPI\\Model\\TransactionPrices', 'json', $context));
            }
            if (\array_key_exists('subject', $data)) {
                $object->setSubject($data['subject']);
            }
            if (\array_key_exists('total', $data)) {
                $object->setTotal($this->denormalizer->denormalize($data['total'], 'Rouda\\OpenProviderAPI\\Model\\TransactionPrices', 'json', $context));
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('action') && null !== $object->getAction()) {
                $data['action'] = $object->getAction();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('discount') && null !== $object->getDiscount()) {
                $data['discount'] = $object->getDiscount();
            }
            if ($object->isInitialized('exchangeRate') && null !== $object->getExchangeRate()) {
                $data['exchange_rate'] = $object->getExchangeRate();
            }
            if ($object->isInitialized('objectType') && null !== $object->getObjectType()) {
                $data['object_type'] = $object->getObjectType();
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            if ($object->isInitialized('quantity') && null !== $object->getQuantity()) {
                $data['quantity'] = $object->getQuantity();
            }
            if ($object->isInitialized('referenceId') && null !== $object->getReferenceId()) {
                $data['reference_id'] = $object->getReferenceId();
            }
            if ($object->isInitialized('setup') && null !== $object->getSetup()) {
                $data['setup'] = $this->normalizer->normalize($object->getSetup(), 'json', $context);
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('total') && null !== $object->getTotal()) {
                $data['total'] = $this->normalizer->normalize($object->getTotal(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\TransactionListTransactionsResponseDataResults' => false];
        }
    }
}