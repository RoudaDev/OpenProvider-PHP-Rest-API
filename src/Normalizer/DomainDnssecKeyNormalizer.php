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
    class DomainDnssecKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainDnssecKey();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('alg', $data)) {
                $object->setAlg($data['alg']);
            }
            if (\array_key_exists('flags', $data)) {
                $object->setFlags($data['flags']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
            }
            if (\array_key_exists('pub_key', $data)) {
                $object->setPubKey($data['pub_key']);
            }
            if (\array_key_exists('readonly', $data)) {
                $object->setReadonly($data['readonly']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('alg') && null !== $object->getAlg()) {
                $data['alg'] = $object->getAlg();
            }
            if ($object->isInitialized('flags') && null !== $object->getFlags()) {
                $data['flags'] = $object->getFlags();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('pubKey') && null !== $object->getPubKey()) {
                $data['pub_key'] = $object->getPubKey();
            }
            if ($object->isInitialized('readonly') && null !== $object->getReadonly()) {
                $data['readonly'] = $object->getReadonly();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey' => false];
        }
    }
} else {
    class DomainDnssecKeyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainDnssecKey();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('alg', $data)) {
                $object->setAlg($data['alg']);
            }
            if (\array_key_exists('flags', $data)) {
                $object->setFlags($data['flags']);
            }
            if (\array_key_exists('protocol', $data)) {
                $object->setProtocol($data['protocol']);
            }
            if (\array_key_exists('pub_key', $data)) {
                $object->setPubKey($data['pub_key']);
            }
            if (\array_key_exists('readonly', $data)) {
                $object->setReadonly($data['readonly']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('alg') && null !== $object->getAlg()) {
                $data['alg'] = $object->getAlg();
            }
            if ($object->isInitialized('flags') && null !== $object->getFlags()) {
                $data['flags'] = $object->getFlags();
            }
            if ($object->isInitialized('protocol') && null !== $object->getProtocol()) {
                $data['protocol'] = $object->getProtocol();
            }
            if ($object->isInitialized('pubKey') && null !== $object->getPubKey()) {
                $data['pub_key'] = $object->getPubKey();
            }
            if ($object->isInitialized('readonly') && null !== $object->getReadonly()) {
                $data['readonly'] = $object->getReadonly();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey' => false];
        }
    }
}