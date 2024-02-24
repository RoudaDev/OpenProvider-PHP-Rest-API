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
    class ZoneCreateZoneRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ZoneCreateZoneRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ZoneCreateZoneRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ZoneCreateZoneRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\ZoneDomain', 'json', $context));
            }
            if (\array_key_exists('is_spamexperts_enabled', $data)) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            if (\array_key_exists('master_ip', $data)) {
                $object->setMasterIp($data['master_ip']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('records', $data)) {
                $values = [];
                foreach ($data['records'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setRecords($values);
            }
            if (\array_key_exists('secured', $data)) {
                $object->setSecured($data['secured']);
            }
            if (\array_key_exists('template_name', $data)) {
                $object->setTemplateName($data['template_name']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
            }
            if ($object->isInitialized('masterIp') && null !== $object->getMasterIp()) {
                $data['master_ip'] = $object->getMasterIp();
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('records') && null !== $object->getRecords()) {
                $values = [];
                foreach ($object->getRecords() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['records'] = $values;
            }
            if ($object->isInitialized('secured') && null !== $object->getSecured()) {
                $data['secured'] = $object->getSecured();
            }
            if ($object->isInitialized('templateName') && null !== $object->getTemplateName()) {
                $data['template_name'] = $object->getTemplateName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ZoneCreateZoneRequest' => false];
        }
    }
} else {
    class ZoneCreateZoneRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ZoneCreateZoneRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ZoneCreateZoneRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\ZoneCreateZoneRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\ZoneDomain', 'json', $context));
            }
            if (\array_key_exists('is_spamexperts_enabled', $data)) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            if (\array_key_exists('master_ip', $data)) {
                $object->setMasterIp($data['master_ip']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('records', $data)) {
                $values = [];
                foreach ($data['records'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\ZoneRecord', 'json', $context);
                }
                $object->setRecords($values);
            }
            if (\array_key_exists('secured', $data)) {
                $object->setSecured($data['secured']);
            }
            if (\array_key_exists('template_name', $data)) {
                $object->setTemplateName($data['template_name']);
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
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
            }
            if ($object->isInitialized('masterIp') && null !== $object->getMasterIp()) {
                $data['master_ip'] = $object->getMasterIp();
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('records') && null !== $object->getRecords()) {
                $values = [];
                foreach ($object->getRecords() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['records'] = $values;
            }
            if ($object->isInitialized('secured') && null !== $object->getSecured()) {
                $data['secured'] = $object->getSecured();
            }
            if ($object->isInitialized('templateName') && null !== $object->getTemplateName()) {
                $data['template_name'] = $object->getTemplateName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ZoneCreateZoneRequest' => false];
        }
    }
}