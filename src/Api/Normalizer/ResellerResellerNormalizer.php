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
    class ResellerResellerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ResellerReseller';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ResellerReseller';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ResellerReseller();
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
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAddress', 'json', $context));
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('balance', $data) && $data['balance'] !== null) {
                $object->setBalance($data['balance']);
            }
            elseif (\array_key_exists('balance', $data) && $data['balance'] === null) {
                $object->setBalance(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
                $object->setCompanyName($data['company_name']);
            }
            elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
                $values = [];
                foreach ($data['contacts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact', 'json', $context);
                }
                $object->setContacts($values);
            }
            elseif (\array_key_exists('contacts', $data) && $data['contacts'] === null) {
                $object->setContacts(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProvider\\Api\\Model\\CustomerFax', 'json', $context));
            }
            elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
                $object->setFax(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $object->setLocale($data['locale']);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProvider\\Api\\Model\\ContactName', 'json', $context));
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProvider\\Api\\Model\\ContactPhone', 'json', $context));
            }
            elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('reserved_balance', $data) && $data['reserved_balance'] !== null) {
                $object->setReservedBalance($data['reserved_balance']);
            }
            elseif (\array_key_exists('reserved_balance', $data) && $data['reserved_balance'] === null) {
                $object->setReservedBalance(null);
            }
            if (\array_key_exists('settings', $data) && $data['settings'] !== null) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerSettings', 'json', $context));
            }
            elseif (\array_key_exists('settings', $data) && $data['settings'] === null) {
                $object->setSettings(null);
            }
            if (\array_key_exists('statistics', $data) && $data['statistics'] !== null) {
                $object->setStatistics($this->denormalizer->denormalize($data['statistics'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerStatistics', 'json', $context));
            }
            elseif (\array_key_exists('statistics', $data) && $data['statistics'] === null) {
                $object->setStatistics(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('tier', $data) && $data['tier'] !== null) {
                $object->setTier($data['tier']);
            }
            elseif (\array_key_exists('tier', $data) && $data['tier'] === null) {
                $object->setTier(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
            }
            if (\array_key_exists('vatperc', $data) && $data['vatperc'] !== null) {
                $object->setVatperc($data['vatperc']);
            }
            elseif (\array_key_exists('vatperc', $data) && $data['vatperc'] === null) {
                $object->setVatperc(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\ResellerReseller' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ResellerReseller';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ResellerReseller';
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
            $object = new \Rouda\OpenProvider\Api\Model\ResellerReseller();
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
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAddress', 'json', $context));
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('balance', $data) && $data['balance'] !== null) {
                $object->setBalance($data['balance']);
            }
            elseif (\array_key_exists('balance', $data) && $data['balance'] === null) {
                $object->setBalance(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
                $object->setCompanyName($data['company_name']);
            }
            elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('contacts', $data) && $data['contacts'] !== null) {
                $values = [];
                foreach ($data['contacts'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact', 'json', $context);
                }
                $object->setContacts($values);
            }
            elseif (\array_key_exists('contacts', $data) && $data['contacts'] === null) {
                $object->setContacts(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProvider\\Api\\Model\\CustomerFax', 'json', $context));
            }
            elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
                $object->setFax(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $object->setLocale($data['locale']);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProvider\\Api\\Model\\ContactName', 'json', $context));
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProvider\\Api\\Model\\ContactPhone', 'json', $context));
            }
            elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('reserved_balance', $data) && $data['reserved_balance'] !== null) {
                $object->setReservedBalance($data['reserved_balance']);
            }
            elseif (\array_key_exists('reserved_balance', $data) && $data['reserved_balance'] === null) {
                $object->setReservedBalance(null);
            }
            if (\array_key_exists('settings', $data) && $data['settings'] !== null) {
                $object->setSettings($this->denormalizer->denormalize($data['settings'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerSettings', 'json', $context));
            }
            elseif (\array_key_exists('settings', $data) && $data['settings'] === null) {
                $object->setSettings(null);
            }
            if (\array_key_exists('statistics', $data) && $data['statistics'] !== null) {
                $object->setStatistics($this->denormalizer->denormalize($data['statistics'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerStatistics', 'json', $context));
            }
            elseif (\array_key_exists('statistics', $data) && $data['statistics'] === null) {
                $object->setStatistics(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('tier', $data) && $data['tier'] !== null) {
                $object->setTier($data['tier']);
            }
            elseif (\array_key_exists('tier', $data) && $data['tier'] === null) {
                $object->setTier(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
            }
            if (\array_key_exists('vatperc', $data) && $data['vatperc'] !== null) {
                $object->setVatperc($data['vatperc']);
            }
            elseif (\array_key_exists('vatperc', $data) && $data['vatperc'] === null) {
                $object->setVatperc(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\ResellerReseller' => false];
        }
    }
}