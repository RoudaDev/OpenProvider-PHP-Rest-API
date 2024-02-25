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
    class DomainSuggestNameDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainSuggestNameDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainSuggestNameDomainRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainSuggestNameDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('language', $data) && $data['language'] !== null) {
                $object->setLanguage($data['language']);
            }
            elseif (\array_key_exists('language', $data) && $data['language'] === null) {
                $object->setLanguage(null);
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($data['limit']);
            }
            elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
                $object->setProvider($data['provider']);
            }
            elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
                $object->setProvider(null);
            }
            if (\array_key_exists('sensitive', $data) && $data['sensitive'] !== null) {
                $object->setSensitive($data['sensitive']);
            }
            elseif (\array_key_exists('sensitive', $data) && $data['sensitive'] === null) {
                $object->setSensitive(null);
            }
            if (\array_key_exists('tlds', $data) && $data['tlds'] !== null) {
                $values = [];
                foreach ($data['tlds'] as $value) {
                    $values[] = $value;
                }
                $object->setTlds($values);
            }
            elseif (\array_key_exists('tlds', $data) && $data['tlds'] === null) {
                $object->setTlds(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('sensitive') && null !== $object->getSensitive()) {
                $data['sensitive'] = $object->getSensitive();
            }
            if ($object->isInitialized('tlds') && null !== $object->getTlds()) {
                $values = [];
                foreach ($object->getTlds() as $value) {
                    $values[] = $value;
                }
                $data['tlds'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainSuggestNameDomainRequest' => false];
        }
    }
} else {
    class DomainSuggestNameDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainSuggestNameDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainSuggestNameDomainRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainSuggestNameDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('language', $data) && $data['language'] !== null) {
                $object->setLanguage($data['language']);
            }
            elseif (\array_key_exists('language', $data) && $data['language'] === null) {
                $object->setLanguage(null);
            }
            if (\array_key_exists('limit', $data) && $data['limit'] !== null) {
                $object->setLimit($data['limit']);
            }
            elseif (\array_key_exists('limit', $data) && $data['limit'] === null) {
                $object->setLimit(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('provider', $data) && $data['provider'] !== null) {
                $object->setProvider($data['provider']);
            }
            elseif (\array_key_exists('provider', $data) && $data['provider'] === null) {
                $object->setProvider(null);
            }
            if (\array_key_exists('sensitive', $data) && $data['sensitive'] !== null) {
                $object->setSensitive($data['sensitive']);
            }
            elseif (\array_key_exists('sensitive', $data) && $data['sensitive'] === null) {
                $object->setSensitive(null);
            }
            if (\array_key_exists('tlds', $data) && $data['tlds'] !== null) {
                $values = [];
                foreach ($data['tlds'] as $value) {
                    $values[] = $value;
                }
                $object->setTlds($values);
            }
            elseif (\array_key_exists('tlds', $data) && $data['tlds'] === null) {
                $object->setTlds(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('limit') && null !== $object->getLimit()) {
                $data['limit'] = $object->getLimit();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('sensitive') && null !== $object->getSensitive()) {
                $data['sensitive'] = $object->getSensitive();
            }
            if ($object->isInitialized('tlds') && null !== $object->getTlds()) {
                $values = [];
                foreach ($object->getTlds() as $value) {
                    $values[] = $value;
                }
                $data['tlds'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainSuggestNameDomainRequest' => false];
        }
    }
}