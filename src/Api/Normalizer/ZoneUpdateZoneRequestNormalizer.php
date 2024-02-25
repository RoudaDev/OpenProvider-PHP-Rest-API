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
    class ZoneUpdateZoneRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneUpdateZoneRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneUpdateZoneRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ZoneUpdateZoneRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneDomain', 'json', $context));
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] !== null) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            elseif (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] === null) {
                $object->setIsSpamexpertsEnabled(null);
            }
            if (\array_key_exists('master_ip', $data) && $data['master_ip'] !== null) {
                $object->setMasterIp($data['master_ip']);
            }
            elseif (\array_key_exists('master_ip', $data) && $data['master_ip'] === null) {
                $object->setMasterIp(null);
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
                $object->setRecords($this->denormalizer->denormalize($data['records'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates', 'json', $context));
            }
            elseif (\array_key_exists('records', $data) && $data['records'] === null) {
                $object->setRecords(null);
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
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
            }
            if ($object->isInitialized('masterIp') && null !== $object->getMasterIp()) {
                $data['master_ip'] = $object->getMasterIp();
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
                $data['records'] = $this->normalizer->normalize($object->getRecords(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneUpdateZoneRequest' => false];
        }
    }
} else {
    class ZoneUpdateZoneRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneUpdateZoneRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneUpdateZoneRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\ZoneUpdateZoneRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneDomain', 'json', $context));
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] !== null) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            elseif (\array_key_exists('is_spamexperts_enabled', $data) && $data['is_spamexperts_enabled'] === null) {
                $object->setIsSpamexpertsEnabled(null);
            }
            if (\array_key_exists('master_ip', $data) && $data['master_ip'] !== null) {
                $object->setMasterIp($data['master_ip']);
            }
            elseif (\array_key_exists('master_ip', $data) && $data['master_ip'] === null) {
                $object->setMasterIp(null);
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
                $object->setRecords($this->denormalizer->denormalize($data['records'], 'Rouda\\OpenProvider\\Api\\Model\\ZoneRecordUpdates', 'json', $context));
            }
            elseif (\array_key_exists('records', $data) && $data['records'] === null) {
                $object->setRecords(null);
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
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
            }
            if ($object->isInitialized('masterIp') && null !== $object->getMasterIp()) {
                $data['master_ip'] = $object->getMasterIp();
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
                $data['records'] = $this->normalizer->normalize($object->getRecords(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneUpdateZoneRequest' => false];
        }
    }
}