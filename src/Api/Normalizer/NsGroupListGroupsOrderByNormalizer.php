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
    class NsGroupListGroupsOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\NsGroupListGroupsOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\NsGroupListGroupsOrderBy';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\NsGroupListGroupsOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_count', $data) && $data['domain_count'] !== null) {
                $object->setDomainCount($data['domain_count']);
            }
            elseif (\array_key_exists('domain_count', $data) && $data['domain_count'] === null) {
                $object->setDomainCount(null);
            }
            if (\array_key_exists('ns_count', $data) && $data['ns_count'] !== null) {
                $object->setNsCount($data['ns_count']);
            }
            elseif (\array_key_exists('ns_count', $data) && $data['ns_count'] === null) {
                $object->setNsCount(null);
            }
            if (\array_key_exists('ns_group', $data) && $data['ns_group'] !== null) {
                $object->setNsGroup($data['ns_group']);
            }
            elseif (\array_key_exists('ns_group', $data) && $data['ns_group'] === null) {
                $object->setNsGroup(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('domainCount') && null !== $object->getDomainCount()) {
                $data['domain_count'] = $object->getDomainCount();
            }
            if ($object->isInitialized('nsCount') && null !== $object->getNsCount()) {
                $data['ns_count'] = $object->getNsCount();
            }
            if ($object->isInitialized('nsGroup') && null !== $object->getNsGroup()) {
                $data['ns_group'] = $object->getNsGroup();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\NsGroupListGroupsOrderBy' => false];
        }
    }
} else {
    class NsGroupListGroupsOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\NsGroupListGroupsOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\NsGroupListGroupsOrderBy';
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
            $object = new \Rouda\OpenProvider\Api\Model\NsGroupListGroupsOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_count', $data) && $data['domain_count'] !== null) {
                $object->setDomainCount($data['domain_count']);
            }
            elseif (\array_key_exists('domain_count', $data) && $data['domain_count'] === null) {
                $object->setDomainCount(null);
            }
            if (\array_key_exists('ns_count', $data) && $data['ns_count'] !== null) {
                $object->setNsCount($data['ns_count']);
            }
            elseif (\array_key_exists('ns_count', $data) && $data['ns_count'] === null) {
                $object->setNsCount(null);
            }
            if (\array_key_exists('ns_group', $data) && $data['ns_group'] !== null) {
                $object->setNsGroup($data['ns_group']);
            }
            elseif (\array_key_exists('ns_group', $data) && $data['ns_group'] === null) {
                $object->setNsGroup(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('domainCount') && null !== $object->getDomainCount()) {
                $data['domain_count'] = $object->getDomainCount();
            }
            if ($object->isInitialized('nsCount') && null !== $object->getNsCount()) {
                $data['ns_count'] = $object->getNsCount();
            }
            if ($object->isInitialized('nsGroup') && null !== $object->getNsGroup()) {
                $data['ns_group'] = $object->getNsGroup();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\NsGroupListGroupsOrderBy' => false];
        }
    }
}