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
    class OrderEasyDmarcOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderEasyDmarcOrder';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderEasyDmarcOrder';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\OrderEasyDmarcOrder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('activated_at', $data)) {
                $object->setActivatedAt($data['activated_at']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\OrderDomain', 'json', $context));
            }
            if (\array_key_exists('easydmarc_email_address', $data)) {
                $object->setEasydmarcEmailAddress($data['easydmarc_email_address']);
            }
            if (\array_key_exists('expired_at', $data)) {
                $object->setExpiredAt($data['expired_at']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('recent_easydmarc_action', $data)) {
                $object->setRecentEasydmarcAction($this->denormalizer->denormalize($data['recent_easydmarc_action'], 'Rouda\\OpenProviderAPI\\Model\\OrderRecentEasyDmarcAction', 'json', $context));
            }
            if (\array_key_exists('record_host', $data)) {
                $object->setRecordHost($data['record_host']);
            }
            if (\array_key_exists('record_type', $data)) {
                $object->setRecordType($data['record_type']);
            }
            if (\array_key_exists('record_value', $data)) {
                $object->setRecordValue($data['record_value']);
            }
            if (\array_key_exists('renew_at', $data)) {
                $object->setRenewAt($data['renew_at']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('activatedAt') && null !== $object->getActivatedAt()) {
                $data['activated_at'] = $object->getActivatedAt();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('easydmarcEmailAddress') && null !== $object->getEasydmarcEmailAddress()) {
                $data['easydmarc_email_address'] = $object->getEasydmarcEmailAddress();
            }
            if ($object->isInitialized('expiredAt') && null !== $object->getExpiredAt()) {
                $data['expired_at'] = $object->getExpiredAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('recentEasydmarcAction') && null !== $object->getRecentEasydmarcAction()) {
                $data['recent_easydmarc_action'] = $this->normalizer->normalize($object->getRecentEasydmarcAction(), 'json', $context);
            }
            if ($object->isInitialized('recordHost') && null !== $object->getRecordHost()) {
                $data['record_host'] = $object->getRecordHost();
            }
            if ($object->isInitialized('recordType') && null !== $object->getRecordType()) {
                $data['record_type'] = $object->getRecordType();
            }
            if ($object->isInitialized('recordValue') && null !== $object->getRecordValue()) {
                $data['record_value'] = $object->getRecordValue();
            }
            if ($object->isInitialized('renewAt') && null !== $object->getRenewAt()) {
                $data['renew_at'] = $object->getRenewAt();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderEasyDmarcOrder' => false];
        }
    }
} else {
    class OrderEasyDmarcOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderEasyDmarcOrder';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderEasyDmarcOrder';
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
            $object = new \Rouda\OpenProviderAPI\Model\OrderEasyDmarcOrder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('activated_at', $data)) {
                $object->setActivatedAt($data['activated_at']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\OrderDomain', 'json', $context));
            }
            if (\array_key_exists('easydmarc_email_address', $data)) {
                $object->setEasydmarcEmailAddress($data['easydmarc_email_address']);
            }
            if (\array_key_exists('expired_at', $data)) {
                $object->setExpiredAt($data['expired_at']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('recent_easydmarc_action', $data)) {
                $object->setRecentEasydmarcAction($this->denormalizer->denormalize($data['recent_easydmarc_action'], 'Rouda\\OpenProviderAPI\\Model\\OrderRecentEasyDmarcAction', 'json', $context));
            }
            if (\array_key_exists('record_host', $data)) {
                $object->setRecordHost($data['record_host']);
            }
            if (\array_key_exists('record_type', $data)) {
                $object->setRecordType($data['record_type']);
            }
            if (\array_key_exists('record_value', $data)) {
                $object->setRecordValue($data['record_value']);
            }
            if (\array_key_exists('renew_at', $data)) {
                $object->setRenewAt($data['renew_at']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('activatedAt') && null !== $object->getActivatedAt()) {
                $data['activated_at'] = $object->getActivatedAt();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('easydmarcEmailAddress') && null !== $object->getEasydmarcEmailAddress()) {
                $data['easydmarc_email_address'] = $object->getEasydmarcEmailAddress();
            }
            if ($object->isInitialized('expiredAt') && null !== $object->getExpiredAt()) {
                $data['expired_at'] = $object->getExpiredAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('recentEasydmarcAction') && null !== $object->getRecentEasydmarcAction()) {
                $data['recent_easydmarc_action'] = $this->normalizer->normalize($object->getRecentEasydmarcAction(), 'json', $context);
            }
            if ($object->isInitialized('recordHost') && null !== $object->getRecordHost()) {
                $data['record_host'] = $object->getRecordHost();
            }
            if ($object->isInitialized('recordType') && null !== $object->getRecordType()) {
                $data['record_type'] = $object->getRecordType();
            }
            if ($object->isInitialized('recordValue') && null !== $object->getRecordValue()) {
                $data['record_value'] = $object->getRecordValue();
            }
            if ($object->isInitialized('renewAt') && null !== $object->getRenewAt()) {
                $data['renew_at'] = $object->getRenewAt();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderEasyDmarcOrder' => false];
        }
    }
}