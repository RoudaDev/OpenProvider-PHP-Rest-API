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
    class DomainCheckDomainResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainResult';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainCheckDomainResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('claim_key', $data)) {
                $object->setClaimKey($data['claim_key']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
            }
            if (\array_key_exists('is_premium', $data)) {
                $object->setIsPremium($data['is_premium']);
            }
            if (\array_key_exists('premium', $data)) {
                $object->setPremium($this->denormalizer->denormalize($data['premium'], 'Rouda\\OpenProviderAPI\\Model\\DomainPremiumPrice', 'json', $context));
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProviderAPI\\Model\\DomainPriceGroup', 'json', $context));
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('whois', $data)) {
                $object->setWhois($data['whois']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('claimKey') && null !== $object->getClaimKey()) {
                $data['claim_key'] = $object->getClaimKey();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('isPremium') && null !== $object->getIsPremium()) {
                $data['is_premium'] = $object->getIsPremium();
            }
            if ($object->isInitialized('premium') && null !== $object->getPremium()) {
                $data['premium'] = $this->normalizer->normalize($object->getPremium(), 'json', $context);
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            if ($object->isInitialized('reason') && null !== $object->getReason()) {
                $data['reason'] = $object->getReason();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('whois') && null !== $object->getWhois()) {
                $data['whois'] = $object->getWhois();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainResult' => false];
        }
    }
} else {
    class DomainCheckDomainResultNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainResult';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainResult';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainCheckDomainResult();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('claim_key', $data)) {
                $object->setClaimKey($data['claim_key']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
            }
            if (\array_key_exists('is_premium', $data)) {
                $object->setIsPremium($data['is_premium']);
            }
            if (\array_key_exists('premium', $data)) {
                $object->setPremium($this->denormalizer->denormalize($data['premium'], 'Rouda\\OpenProviderAPI\\Model\\DomainPremiumPrice', 'json', $context));
            }
            if (\array_key_exists('price', $data)) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProviderAPI\\Model\\DomainPriceGroup', 'json', $context));
            }
            if (\array_key_exists('reason', $data)) {
                $object->setReason($data['reason']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('whois', $data)) {
                $object->setWhois($data['whois']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('claimKey') && null !== $object->getClaimKey()) {
                $data['claim_key'] = $object->getClaimKey();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('isPremium') && null !== $object->getIsPremium()) {
                $data['is_premium'] = $object->getIsPremium();
            }
            if ($object->isInitialized('premium') && null !== $object->getPremium()) {
                $data['premium'] = $this->normalizer->normalize($object->getPremium(), 'json', $context);
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            if ($object->isInitialized('reason') && null !== $object->getReason()) {
                $data['reason'] = $object->getReason();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('whois') && null !== $object->getWhois()) {
                $data['whois'] = $object->getWhois();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainResult' => false];
        }
    }
}