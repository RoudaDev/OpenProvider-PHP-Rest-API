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
    class StatisticsSpamExpertsStatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\StatisticsSpamExpertsStatistics';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\StatisticsSpamExpertsStatistics';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\StatisticsSpamExpertsStatistics();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('activated_at', $data)) {
                $object->setActivatedAt($data['activated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
            }
            if (\array_key_exists('exists', $data)) {
                $object->setExists($data['exists']);
            }
            if (\array_key_exists('expired_at', $data)) {
                $object->setExpiredAt($data['expired_at']);
            }
            if (\array_key_exists('incoming_count', $data)) {
                $object->setIncomingCount($data['incoming_count']);
            }
            if (\array_key_exists('incoming_limit', $data)) {
                $object->setIncomingLimit($data['incoming_limit']);
            }
            if (\array_key_exists('outgoing_count', $data)) {
                $object->setOutgoingCount($data['outgoing_count']);
            }
            if (\array_key_exists('outgoing_limit', $data)) {
                $object->setOutgoingLimit($data['outgoing_limit']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('with_outgoing_filter', $data)) {
                $object->setWithOutgoingFilter($data['with_outgoing_filter']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('activatedAt') && null !== $object->getActivatedAt()) {
                $data['activated_at'] = $object->getActivatedAt();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('exists') && null !== $object->getExists()) {
                $data['exists'] = $object->getExists();
            }
            if ($object->isInitialized('expiredAt') && null !== $object->getExpiredAt()) {
                $data['expired_at'] = $object->getExpiredAt();
            }
            if ($object->isInitialized('incomingCount') && null !== $object->getIncomingCount()) {
                $data['incoming_count'] = $object->getIncomingCount();
            }
            if ($object->isInitialized('incomingLimit') && null !== $object->getIncomingLimit()) {
                $data['incoming_limit'] = $object->getIncomingLimit();
            }
            if ($object->isInitialized('outgoingCount') && null !== $object->getOutgoingCount()) {
                $data['outgoing_count'] = $object->getOutgoingCount();
            }
            if ($object->isInitialized('outgoingLimit') && null !== $object->getOutgoingLimit()) {
                $data['outgoing_limit'] = $object->getOutgoingLimit();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('withOutgoingFilter') && null !== $object->getWithOutgoingFilter()) {
                $data['with_outgoing_filter'] = $object->getWithOutgoingFilter();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\StatisticsSpamExpertsStatistics' => false];
        }
    }
} else {
    class StatisticsSpamExpertsStatisticsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\StatisticsSpamExpertsStatistics';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\StatisticsSpamExpertsStatistics';
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
            $object = new \Rouda\OpenProviderAPI\Model\StatisticsSpamExpertsStatistics();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('activated_at', $data)) {
                $object->setActivatedAt($data['activated_at']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
            }
            if (\array_key_exists('exists', $data)) {
                $object->setExists($data['exists']);
            }
            if (\array_key_exists('expired_at', $data)) {
                $object->setExpiredAt($data['expired_at']);
            }
            if (\array_key_exists('incoming_count', $data)) {
                $object->setIncomingCount($data['incoming_count']);
            }
            if (\array_key_exists('incoming_limit', $data)) {
                $object->setIncomingLimit($data['incoming_limit']);
            }
            if (\array_key_exists('outgoing_count', $data)) {
                $object->setOutgoingCount($data['outgoing_count']);
            }
            if (\array_key_exists('outgoing_limit', $data)) {
                $object->setOutgoingLimit($data['outgoing_limit']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('with_outgoing_filter', $data)) {
                $object->setWithOutgoingFilter($data['with_outgoing_filter']);
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
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('exists') && null !== $object->getExists()) {
                $data['exists'] = $object->getExists();
            }
            if ($object->isInitialized('expiredAt') && null !== $object->getExpiredAt()) {
                $data['expired_at'] = $object->getExpiredAt();
            }
            if ($object->isInitialized('incomingCount') && null !== $object->getIncomingCount()) {
                $data['incoming_count'] = $object->getIncomingCount();
            }
            if ($object->isInitialized('incomingLimit') && null !== $object->getIncomingLimit()) {
                $data['incoming_limit'] = $object->getIncomingLimit();
            }
            if ($object->isInitialized('outgoingCount') && null !== $object->getOutgoingCount()) {
                $data['outgoing_count'] = $object->getOutgoingCount();
            }
            if ($object->isInitialized('outgoingLimit') && null !== $object->getOutgoingLimit()) {
                $data['outgoing_limit'] = $object->getOutgoingLimit();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('withOutgoingFilter') && null !== $object->getWithOutgoingFilter()) {
                $data['with_outgoing_filter'] = $object->getWithOutgoingFilter();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\StatisticsSpamExpertsStatistics' => false];
        }
    }
}