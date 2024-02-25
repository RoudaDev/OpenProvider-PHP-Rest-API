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
    class ZoneZoneNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneZone';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneZone';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ZoneZone();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active', $data) && $data['active'] !== null) {
                $object->setActive($data['active']);
            }
            elseif (\array_key_exists('active', $data) && $data['active'] === null) {
                $object->setActive(null);
            }
            if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
                $object->setCreationDate($data['creation_date']);
            }
            elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('dnskey', $data) && $data['dnskey'] !== null) {
                $object->setDnskey($data['dnskey']);
            }
            elseif (\array_key_exists('dnskey', $data) && $data['dnskey'] === null) {
                $object->setDnskey(null);
            }
            if (\array_key_exists('history', $data) && $data['history'] !== null) {
                $values = [];
                foreach ($data['history'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory', 'json', $context);
                }
                $object->setHistory($values);
            }
            elseif (\array_key_exists('history', $data) && $data['history'] === null) {
                $object->setHistory(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
                $object->setIp($data['ip']);
            }
            elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
                $object->setIp(null);
            }
            if (\array_key_exists('is_deleted', $data) && $data['is_deleted'] !== null) {
                $object->setIsDeleted($data['is_deleted']);
            }
            elseif (\array_key_exists('is_deleted', $data) && $data['is_deleted'] === null) {
                $object->setIsDeleted(null);
            }
            if (\array_key_exists('is_shadow', $data) && $data['is_shadow'] !== null) {
                $object->setIsShadow($data['is_shadow']);
            }
            elseif (\array_key_exists('is_shadow', $data) && $data['is_shadow'] === null) {
                $object->setIsShadow(null);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] !== null) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            elseif (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] === null) {
                $object->setIsSpamexpertsEnabled(null);
            }
            if (\array_key_exists('modification_date', $data) && $data['modification_date'] !== null) {
                $object->setModificationDate($data['modification_date']);
            }
            elseif (\array_key_exists('modification_date', $data) && $data['modification_date'] === null) {
                $object->setModificationDate(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('premium_dns', $data) && $data['premium_dns'] !== null) {
                $object->setPremiumDns($this->denormalizer->denormalize($data['premium_dns'], 'Rouda\\OpenProvider\\Api\\Model\\ZonePremiumDnsData', 'json', $context));
            }
            elseif (\array_key_exists('premium_dns', $data) && $data['premium_dns'] === null) {
                $object->setPremiumDns(null);
            }
            if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
                $object->setProvider($data['provider']);
            }
            elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
                $object->setProvider(null);
            }
            if (\array_key_exists('records', $data) && $data['records'] !== null) {
                $values_1 = [];
                foreach ($data['records'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\RecordRecordInfo', 'json', $context);
                }
                $object->setRecords($values_1);
            }
            elseif (\array_key_exists('records', $data) && $data['records'] === null) {
                $object->setRecords(null);
            }
            if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
                $object->setResellerId($data['reseller_id']);
            }
            elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
                $object->setResellerId(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneZone' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneZone';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneZone';
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
            $object = new \Rouda\OpenProvider\Api\Model\ZoneZone();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active', $data) && $data['active'] !== null) {
                $object->setActive($data['active']);
            }
            elseif (\array_key_exists('active', $data) && $data['active'] === null) {
                $object->setActive(null);
            }
            if (\array_key_exists('creation_date', $data) && $data['creation_date'] !== null) {
                $object->setCreationDate($data['creation_date']);
            }
            elseif (\array_key_exists('creation_date', $data) && $data['creation_date'] === null) {
                $object->setCreationDate(null);
            }
            if (\array_key_exists('dnskey', $data) && $data['dnskey'] !== null) {
                $object->setDnskey($data['dnskey']);
            }
            elseif (\array_key_exists('dnskey', $data) && $data['dnskey'] === null) {
                $object->setDnskey(null);
            }
            if (\array_key_exists('history', $data) && $data['history'] !== null) {
                $values = [];
                foreach ($data['history'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\HistoryZoneHistory', 'json', $context);
                }
                $object->setHistory($values);
            }
            elseif (\array_key_exists('history', $data) && $data['history'] === null) {
                $object->setHistory(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
                $object->setIp($data['ip']);
            }
            elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
                $object->setIp(null);
            }
            if (\array_key_exists('is_deleted', $data) && $data['is_deleted'] !== null) {
                $object->setIsDeleted($data['is_deleted']);
            }
            elseif (\array_key_exists('is_deleted', $data) && $data['is_deleted'] === null) {
                $object->setIsDeleted(null);
            }
            if (\array_key_exists('is_shadow', $data) && $data['is_shadow'] !== null) {
                $object->setIsShadow($data['is_shadow']);
            }
            elseif (\array_key_exists('is_shadow', $data) && $data['is_shadow'] === null) {
                $object->setIsShadow(null);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] !== null) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            elseif (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] === null) {
                $object->setIsSpamexpertsEnabled(null);
            }
            if (\array_key_exists('modification_date', $data) && $data['modification_date'] !== null) {
                $object->setModificationDate($data['modification_date']);
            }
            elseif (\array_key_exists('modification_date', $data) && $data['modification_date'] === null) {
                $object->setModificationDate(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('premium_dns', $data) && $data['premium_dns'] !== null) {
                $object->setPremiumDns($this->denormalizer->denormalize($data['premium_dns'], 'Rouda\\OpenProvider\\Api\\Model\\ZonePremiumDnsData', 'json', $context));
            }
            elseif (\array_key_exists('premium_dns', $data) && $data['premium_dns'] === null) {
                $object->setPremiumDns(null);
            }
            if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
                $object->setProvider($data['provider']);
            }
            elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
                $object->setProvider(null);
            }
            if (\array_key_exists('records', $data) && $data['records'] !== null) {
                $values_1 = [];
                foreach ($data['records'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\RecordRecordInfo', 'json', $context);
                }
                $object->setRecords($values_1);
            }
            elseif (\array_key_exists('records', $data) && $data['records'] === null) {
                $object->setRecords(null);
            }
            if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
                $object->setResellerId($data['reseller_id']);
            }
            elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
                $object->setResellerId(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneZone' => false];
        }
    }
}