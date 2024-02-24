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
    class ResellerResellerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ResellerReseller';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ResellerReseller';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ResellerReseller();
            if (\array_key_exists('balance', $data) && \is_int($data['balance'])) {
                $data['balance'] = (double) $data['balance'];
            }
            if (\array_key_exists('reserved_balance', $data) && \is_int($data['reserved_balance'])) {
                $data['reserved_balance'] = (double) $data['reserved_balance'];
            }
            if (\array_key_exists('vatperc', $data) && \is_int($data['vatperc'])) {
                $data['vatperc'] = (double) $data['vatperc'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\ResellerResellerAdditionalData', 'json', $context));
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProviderAPI\\Model\\ContactAddress', 'json', $context));
            }
            if (\array_key_exists('balance', $data)) {
                $object->setBalance($data['balance']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('company_name', $data)) {
                $object->setCompanyName($data['company_name']);
            }
            if (\array_key_exists('contacts', $data)) {
                $values = [];
                foreach ($data['contacts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\PersoncontactContact', 'json', $context);
                }
                $object->setContacts($values);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('fax', $data)) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProviderAPI\\Model\\CustomerFax', 'json', $context));
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProviderAPI\\Model\\ContactName', 'json', $context));
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProviderAPI\\Model\\ContactPhone', 'json', $context));
            }
            if (\array_key_exists('reserved_balance', $data)) {
                $object->setReservedBalance($data['reserved_balance']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], 'Rouda\\OpenProviderAPI\\Model\\ResellerSettings', 'json', $context));
            }
            if (\array_key_exists('statistics', $data)) {
                $object->setStatistics($this->denormalizer->denormalize($data['statistics'], 'Rouda\\OpenProviderAPI\\Model\\ResellerStatistics', 'json', $context));
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('tier', $data)) {
                $object->setTier($data['tier']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            if (\array_key_exists('vatperc', $data)) {
                $object->setVatperc($data['vatperc']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('balance') && null !== $object->getBalance()) {
                $data['balance'] = $object->getBalance();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
                $values = [];
                foreach ($object->getContacts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contacts'] = $values;
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('reservedBalance') && null !== $object->getReservedBalance()) {
                $data['reserved_balance'] = $object->getReservedBalance();
            }
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            if ($object->isInitialized('statistics') && null !== $object->getStatistics()) {
                $data['statistics'] = $this->normalizer->normalize($object->getStatistics(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('tier') && null !== $object->getTier()) {
                $data['tier'] = $object->getTier();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('vatperc') && null !== $object->getVatperc()) {
                $data['vatperc'] = $object->getVatperc();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ResellerReseller' => false];
        }
    }
} else {
    class ResellerResellerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ResellerReseller';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ResellerReseller';
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
            $object = new \Rouda\OpenProviderAPI\Model\ResellerReseller();
            if (\array_key_exists('balance', $data) && \is_int($data['balance'])) {
                $data['balance'] = (double) $data['balance'];
            }
            if (\array_key_exists('reserved_balance', $data) && \is_int($data['reserved_balance'])) {
                $data['reserved_balance'] = (double) $data['reserved_balance'];
            }
            if (\array_key_exists('vatperc', $data) && \is_int($data['vatperc'])) {
                $data['vatperc'] = (double) $data['vatperc'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\ResellerResellerAdditionalData', 'json', $context));
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProviderAPI\\Model\\ContactAddress', 'json', $context));
            }
            if (\array_key_exists('balance', $data)) {
                $object->setBalance($data['balance']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('company_name', $data)) {
                $object->setCompanyName($data['company_name']);
            }
            if (\array_key_exists('contacts', $data)) {
                $values = [];
                foreach ($data['contacts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\PersoncontactContact', 'json', $context);
                }
                $object->setContacts($values);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('fax', $data)) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProviderAPI\\Model\\CustomerFax', 'json', $context));
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProviderAPI\\Model\\ContactName', 'json', $context));
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProviderAPI\\Model\\ContactPhone', 'json', $context));
            }
            if (\array_key_exists('reserved_balance', $data)) {
                $object->setReservedBalance($data['reserved_balance']);
            }
            if (\array_key_exists('settings', $data)) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], 'Rouda\\OpenProviderAPI\\Model\\ResellerSettings', 'json', $context));
            }
            if (\array_key_exists('statistics', $data)) {
                $object->setStatistics($this->denormalizer->denormalize($data['statistics'], 'Rouda\\OpenProviderAPI\\Model\\ResellerStatistics', 'json', $context));
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('tier', $data)) {
                $object->setTier($data['tier']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            if (\array_key_exists('vatperc', $data)) {
                $object->setVatperc($data['vatperc']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('balance') && null !== $object->getBalance()) {
                $data['balance'] = $object->getBalance();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('contacts') && null !== $object->getContacts()) {
                $values = [];
                foreach ($object->getContacts() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['contacts'] = $values;
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('reservedBalance') && null !== $object->getReservedBalance()) {
                $data['reserved_balance'] = $object->getReservedBalance();
            }
            if ($object->isInitialized('settings') && null !== $object->getSettings()) {
                $data['settings'] = $this->normalizer->normalize($object->getSettings(), 'json', $context);
            }
            if ($object->isInitialized('statistics') && null !== $object->getStatistics()) {
                $data['statistics'] = $this->normalizer->normalize($object->getStatistics(), 'json', $context);
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('tier') && null !== $object->getTier()) {
                $data['tier'] = $object->getTier();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('vatperc') && null !== $object->getVatperc()) {
                $data['vatperc'] = $object->getVatperc();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ResellerReseller' => false];
        }
    }
}