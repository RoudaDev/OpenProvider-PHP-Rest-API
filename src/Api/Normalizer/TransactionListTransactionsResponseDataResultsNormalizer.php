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
    class TransactionListTransactionsResponseDataResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TransactionListTransactionsResponseDataResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TransactionListTransactionsResponseDataResults';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\TransactionListTransactionsResponseDataResults();
            if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
                $data['discount'] = (double) $data['discount'];
            }
            if (\array_key_exists('exchange_rate', $data) && \is_int($data['exchange_rate'])) {
                $data['exchange_rate'] = (double) $data['exchange_rate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('action', $data) && $data['action'] !== null) {
                $object->setAction($data['action']);
            }
            elseif (\array_key_exists('action', $data) && $data['action'] === null) {
                $object->setAction(null);
            }
            if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
                $object->setCreationDate($data['creation_date']);
            }
            elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('discount', $data) && $data['discount'] !== null) {
                $object->setDiscount($data['discount']);
            }
            elseif (\array_key_exists('discount', $data) && $data['discount'] === null) {
                $object->setDiscount(null);
            }
            if (\array_key_exists('exchange_rate', $data) && $data['exchange_rate'] !== null) {
                $object->setExchangeRate($data['exchange_rate']);
            }
            elseif (\array_key_exists('exchange_rate', $data) && $data['exchange_rate'] === null) {
                $object->setExchangeRate(null);
            }
            if (\array_key_exists('object_type', $data) && $data['object_type'] !== null) {
                $object->setObjectType($data['object_type']);
            }
            elseif (\array_key_exists('object_type', $data) && $data['object_type'] === null) {
                $object->setObjectType(null);
            }
            if (\array_key_exists('price', $data) && $data['price'] !== null) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProvider\\Api\\Model\\TransactionPrices', 'json', $context));
            }
            elseif (\array_key_exists('price', $data) && $data['price'] === null) {
                $object->setPrice(null);
            }
            if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
                $object->setQuantity($data['quantity']);
            }
            elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('reference_id', $data) && $data['reference_id'] !== null) {
                $object->setReferenceId($data['reference_id']);
            }
            elseif (\array_key_exists('reference_id', $data) && $data['reference_id'] === null) {
                $object->setReferenceId(null);
            }
            if (\array_key_exists('setup', $data) && $data['setup'] !== null) {
                $object->setSetup($this->denormalizer->denormalize($data['setup'], 'Rouda\\OpenProvider\\Api\\Model\\TransactionPrices', 'json', $context));
            }
            elseif (\array_key_exists('setup', $data) && $data['setup'] === null) {
                $object->setSetup(null);
            }
            if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
                $object->setSubject($data['subject']);
            }
            elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
                $object->setSubject(null);
            }
            if (\array_key_exists('total', $data) && $data['total'] !== null) {
                $object->setTotal($this->denormalizer->denormalize($data['total'], 'Rouda\\OpenProvider\\Api\\Model\\TransactionPrices', 'json', $context));
            }
            elseif (\array_key_exists('total', $data) && $data['total'] === null) {
                $object->setTotal(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\TransactionListTransactionsResponseDataResults' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TransactionListTransactionsResponseDataResults';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TransactionListTransactionsResponseDataResults';
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
            $object = new \Rouda\OpenProvider\Api\Model\TransactionListTransactionsResponseDataResults();
            if (\array_key_exists('discount', $data) && \is_int($data['discount'])) {
                $data['discount'] = (double) $data['discount'];
            }
            if (\array_key_exists('exchange_rate', $data) && \is_int($data['exchange_rate'])) {
                $data['exchange_rate'] = (double) $data['exchange_rate'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('action', $data) && $data['action'] !== null) {
                $object->setAction($data['action']);
            }
            elseif (\array_key_exists('action', $data) && $data['action'] === null) {
                $object->setAction(null);
            }
            if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
                $object->setCreationDate($data['creation_date']);
            }
            elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('discount', $data) && $data['discount'] !== null) {
                $object->setDiscount($data['discount']);
            }
            elseif (\array_key_exists('discount', $data) && $data['discount'] === null) {
                $object->setDiscount(null);
            }
            if (\array_key_exists('exchange_rate', $data) && $data['exchange_rate'] !== null) {
                $object->setExchangeRate($data['exchange_rate']);
            }
            elseif (\array_key_exists('exchange_rate', $data) && $data['exchange_rate'] === null) {
                $object->setExchangeRate(null);
            }
            if (\array_key_exists('object_type', $data) && $data['object_type'] !== null) {
                $object->setObjectType($data['object_type']);
            }
            elseif (\array_key_exists('object_type', $data) && $data['object_type'] === null) {
                $object->setObjectType(null);
            }
            if (\array_key_exists('price', $data) && $data['price'] !== null) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProvider\\Api\\Model\\TransactionPrices', 'json', $context));
            }
            elseif (\array_key_exists('price', $data) && $data['price'] === null) {
                $object->setPrice(null);
            }
            if (\array_key_exists('quantity', $data) && $data['quantity'] !== null) {
                $object->setQuantity($data['quantity']);
            }
            elseif (\array_key_exists('quantity', $data) && $data['quantity'] === null) {
                $object->setQuantity(null);
            }
            if (\array_key_exists('reference_id', $data) && $data['reference_id'] !== null) {
                $object->setReferenceId($data['reference_id']);
            }
            elseif (\array_key_exists('reference_id', $data) && $data['reference_id'] === null) {
                $object->setReferenceId(null);
            }
            if (\array_key_exists('setup', $data) && $data['setup'] !== null) {
                $object->setSetup($this->denormalizer->denormalize($data['setup'], 'Rouda\\OpenProvider\\Api\\Model\\TransactionPrices', 'json', $context));
            }
            elseif (\array_key_exists('setup', $data) && $data['setup'] === null) {
                $object->setSetup(null);
            }
            if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
                $object->setSubject($data['subject']);
            }
            elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
                $object->setSubject(null);
            }
            if (\array_key_exists('total', $data) && $data['total'] !== null) {
                $object->setTotal($this->denormalizer->denormalize($data['total'], 'Rouda\\OpenProvider\\Api\\Model\\TransactionPrices', 'json', $context));
            }
            elseif (\array_key_exists('total', $data) && $data['total'] === null) {
                $object->setTotal(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\TransactionListTransactionsResponseDataResults' => false];
        }
    }
}