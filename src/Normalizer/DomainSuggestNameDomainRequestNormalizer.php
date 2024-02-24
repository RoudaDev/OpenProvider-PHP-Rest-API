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
    class DomainSuggestNameDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainSuggestNameDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainSuggestNameDomainRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainSuggestNameDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('sensitive', $data)) {
                $object->setSensitive($data['sensitive']);
            }
            if (\array_key_exists('tlds', $data)) {
                $values = [];
                foreach ($data['tlds'] as $value) {
                    $values[] = $value;
                }
                $object->setTlds($values);
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
            return ['Rouda\\OpenProviderAPI\\Model\\DomainSuggestNameDomainRequest' => false];
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
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainSuggestNameDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainSuggestNameDomainRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainSuggestNameDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
            }
            if (\array_key_exists('limit', $data)) {
                $object->setLimit($data['limit']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('sensitive', $data)) {
                $object->setSensitive($data['sensitive']);
            }
            if (\array_key_exists('tlds', $data)) {
                $values = [];
                foreach ($data['tlds'] as $value) {
                    $values[] = $value;
                }
                $object->setTlds($values);
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
            return ['Rouda\\OpenProviderAPI\\Model\\DomainSuggestNameDomainRequest' => false];
        }
    }
}