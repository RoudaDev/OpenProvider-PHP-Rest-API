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
    class StatisticsGetStatisticsResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsGetStatisticsResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsGetStatisticsResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\StatisticsGetStatisticsResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsCurrencyStatistics', 'json', $context));
            }
            elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
                $object->setCurrency(null);
            }
            if (\array_key_exists('customer', $data) && $data['customer'] !== null) {
                $object->setCustomer($this->denormalizer->denormalize($data['customer'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsCustomerStatistics', 'json', $context));
            }
            elseif (\array_key_exists('customer', $data) && $data['customer'] === null) {
                $object->setCustomer(null);
            }
            if (\array_key_exists('dns', $data) && $data['dns'] !== null) {
                $object->setDns($this->denormalizer->denormalize($data['dns'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsDnsStatistics', 'json', $context));
            }
            elseif (\array_key_exists('dns', $data) && $data['dns'] === null) {
                $object->setDns(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsDomainStatistics', 'json', $context));
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('license', $data) && $data['license'] !== null) {
                $object->setLicense($this->denormalizer->denormalize($data['license'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsLicenseStatistics', 'json', $context));
            }
            elseif (\array_key_exists('license', $data) && $data['license'] === null) {
                $object->setLicense(null);
            }
            if (\array_key_exists('spam_experts', $data) && $data['spam_experts'] !== null) {
                $object->setSpamExperts($this->denormalizer->denormalize($data['spam_experts'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSpamExpertsStatistics', 'json', $context));
            }
            elseif (\array_key_exists('spam_experts', $data) && $data['spam_experts'] === null) {
                $object->setSpamExperts(null);
            }
            if (\array_key_exists('ssl', $data) && $data['ssl'] !== null) {
                $object->setSsl($this->denormalizer->denormalize($data['ssl'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatistics', 'json', $context));
            }
            elseif (\array_key_exists('ssl', $data) && $data['ssl'] === null) {
                $object->setSsl(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
            }
            if ($object->isInitialized('customer') && null !== $object->getCustomer()) {
                $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
            }
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $data['dns'] = $this->normalizer->normalize($object->getDns(), 'json', $context);
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('license') && null !== $object->getLicense()) {
                $data['license'] = $this->normalizer->normalize($object->getLicense(), 'json', $context);
            }
            if ($object->isInitialized('spamExperts') && null !== $object->getSpamExperts()) {
                $data['spam_experts'] = $this->normalizer->normalize($object->getSpamExperts(), 'json', $context);
            }
            if ($object->isInitialized('ssl') && null !== $object->getSsl()) {
                $data['ssl'] = $this->normalizer->normalize($object->getSsl(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\StatisticsGetStatisticsResponseData' => false];
        }
    }
} else {
    class StatisticsGetStatisticsResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsGetStatisticsResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsGetStatisticsResponseData';
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
            $object = new \Rouda\OpenProvider\Api\Model\StatisticsGetStatisticsResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('currency', $data) && $data['currency'] !== null) {
                $object->setCurrency($this->denormalizer->denormalize($data['currency'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsCurrencyStatistics', 'json', $context));
            }
            elseif (\array_key_exists('currency', $data) && $data['currency'] === null) {
                $object->setCurrency(null);
            }
            if (\array_key_exists('customer', $data) && $data['customer'] !== null) {
                $object->setCustomer($this->denormalizer->denormalize($data['customer'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsCustomerStatistics', 'json', $context));
            }
            elseif (\array_key_exists('customer', $data) && $data['customer'] === null) {
                $object->setCustomer(null);
            }
            if (\array_key_exists('dns', $data) && $data['dns'] !== null) {
                $object->setDns($this->denormalizer->denormalize($data['dns'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsDnsStatistics', 'json', $context));
            }
            elseif (\array_key_exists('dns', $data) && $data['dns'] === null) {
                $object->setDns(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsDomainStatistics', 'json', $context));
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('license', $data) && $data['license'] !== null) {
                $object->setLicense($this->denormalizer->denormalize($data['license'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsLicenseStatistics', 'json', $context));
            }
            elseif (\array_key_exists('license', $data) && $data['license'] === null) {
                $object->setLicense(null);
            }
            if (\array_key_exists('spam_experts', $data) && $data['spam_experts'] !== null) {
                $object->setSpamExperts($this->denormalizer->denormalize($data['spam_experts'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSpamExpertsStatistics', 'json', $context));
            }
            elseif (\array_key_exists('spam_experts', $data) && $data['spam_experts'] === null) {
                $object->setSpamExperts(null);
            }
            if (\array_key_exists('ssl', $data) && $data['ssl'] !== null) {
                $object->setSsl($this->denormalizer->denormalize($data['ssl'], 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatistics', 'json', $context));
            }
            elseif (\array_key_exists('ssl', $data) && $data['ssl'] === null) {
                $object->setSsl(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $this->normalizer->normalize($object->getCurrency(), 'json', $context);
            }
            if ($object->isInitialized('customer') && null !== $object->getCustomer()) {
                $data['customer'] = $this->normalizer->normalize($object->getCustomer(), 'json', $context);
            }
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $data['dns'] = $this->normalizer->normalize($object->getDns(), 'json', $context);
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('license') && null !== $object->getLicense()) {
                $data['license'] = $this->normalizer->normalize($object->getLicense(), 'json', $context);
            }
            if ($object->isInitialized('spamExperts') && null !== $object->getSpamExperts()) {
                $data['spam_experts'] = $this->normalizer->normalize($object->getSpamExperts(), 'json', $context);
            }
            if ($object->isInitialized('ssl') && null !== $object->getSsl()) {
                $data['ssl'] = $this->normalizer->normalize($object->getSsl(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\StatisticsGetStatisticsResponseData' => false];
        }
    }
}