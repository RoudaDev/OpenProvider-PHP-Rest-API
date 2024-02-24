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
    class ZoneZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ZoneZone';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ZoneZone';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ZoneZone();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('dnskey', $data)) {
                $object->setDnskey($data['dnskey']);
            }
            if (\array_key_exists('history', $data)) {
                $values = [];
                foreach ($data['history'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory', 'json', $context);
                }
                $object->setHistory($values);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('ip', $data)) {
                $object->setIp($data['ip']);
            }
            if (\array_key_exists('is_deleted', $data)) {
                $object->setIsDeleted($data['is_deleted']);
            }
            if (\array_key_exists('is_shadow', $data)) {
                $object->setIsShadow($data['is_shadow']);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data)) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            if (\array_key_exists('modification_date', $data)) {
                $object->setModificationDate($data['modification_date']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('premium_dns', $data)) {
                $object->setPremiumDns($this->denormalizer->denormalize($data['premium_dns'], 'Rouda\\OpenProviderAPI\\Model\\ZonePremiumDnsData', 'json', $context));
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('records', $data)) {
                $values_1 = [];
                foreach ($data['records'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\RecordRecordInfo', 'json', $context);
                }
                $object->setRecords($values_1);
            }
            if (\array_key_exists('reseller_id', $data)) {
                $object->setResellerId($data['reseller_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('active') && null !== $object->getActive()) {
                $data['active'] = $object->getActive();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('dnskey') && null !== $object->getDnskey()) {
                $data['dnskey'] = $object->getDnskey();
            }
            if ($object->isInitialized('history') && null !== $object->getHistory()) {
                $values = [];
                foreach ($object->getHistory() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['history'] = $values;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('isDeleted') && null !== $object->getIsDeleted()) {
                $data['is_deleted'] = $object->getIsDeleted();
            }
            if ($object->isInitialized('isShadow') && null !== $object->getIsShadow()) {
                $data['is_shadow'] = $object->getIsShadow();
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['modification_date'] = $object->getModificationDate();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('premiumDns') && null !== $object->getPremiumDns()) {
                $data['premium_dns'] = $this->normalizer->normalize($object->getPremiumDns(), 'json', $context);
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('records') && null !== $object->getRecords()) {
                $values_1 = [];
                foreach ($object->getRecords() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['records'] = $values_1;
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ZoneZone' => false];
        }
    }
} else {
    class ZoneZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ZoneZone';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ZoneZone';
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
            $object = new \Rouda\OpenProviderAPI\Model\ZoneZone();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('dnskey', $data)) {
                $object->setDnskey($data['dnskey']);
            }
            if (\array_key_exists('history', $data)) {
                $values = [];
                foreach ($data['history'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\HistoryZoneHistory', 'json', $context);
                }
                $object->setHistory($values);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('ip', $data)) {
                $object->setIp($data['ip']);
            }
            if (\array_key_exists('is_deleted', $data)) {
                $object->setIsDeleted($data['is_deleted']);
            }
            if (\array_key_exists('is_shadow', $data)) {
                $object->setIsShadow($data['is_shadow']);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data)) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            if (\array_key_exists('modification_date', $data)) {
                $object->setModificationDate($data['modification_date']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('premium_dns', $data)) {
                $object->setPremiumDns($this->denormalizer->denormalize($data['premium_dns'], 'Rouda\\OpenProviderAPI\\Model\\ZonePremiumDnsData', 'json', $context));
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('records', $data)) {
                $values_1 = [];
                foreach ($data['records'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\RecordRecordInfo', 'json', $context);
                }
                $object->setRecords($values_1);
            }
            if (\array_key_exists('reseller_id', $data)) {
                $object->setResellerId($data['reseller_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('active') && null !== $object->getActive()) {
                $data['active'] = $object->getActive();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('dnskey') && null !== $object->getDnskey()) {
                $data['dnskey'] = $object->getDnskey();
            }
            if ($object->isInitialized('history') && null !== $object->getHistory()) {
                $values = [];
                foreach ($object->getHistory() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['history'] = $values;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('isDeleted') && null !== $object->getIsDeleted()) {
                $data['is_deleted'] = $object->getIsDeleted();
            }
            if ($object->isInitialized('isShadow') && null !== $object->getIsShadow()) {
                $data['is_shadow'] = $object->getIsShadow();
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['modification_date'] = $object->getModificationDate();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('premiumDns') && null !== $object->getPremiumDns()) {
                $data['premium_dns'] = $this->normalizer->normalize($object->getPremiumDns(), 'json', $context);
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('records') && null !== $object->getRecords()) {
                $values_1 = [];
                foreach ($object->getRecords() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['records'] = $values_1;
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ZoneZone' => false];
        }
    }
}