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
    class DomainNameserverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainNameserver';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainNameserver';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainNameserver();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
                $object->setIp($data['ip']);
            }
            elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
                $object->setIp(null);
            }
            if (\array_key_exists('ip6', $data) && $data['ip6'] !== null) {
                $object->setIp6($data['ip6']);
            }
            elseif (\array_key_exists('ip6', $data) && $data['ip6'] === null) {
                $object->setIp6(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('seq_nr', $data) && $data['seq_nr'] !== null) {
                $object->setSeqNr($data['seq_nr']);
            }
            elseif (\array_key_exists('seq_nr', $data) && $data['seq_nr'] === null) {
                $object->setSeqNr(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('ip6') && null !== $object->getIp6()) {
                $data['ip6'] = $object->getIp6();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('seqNr') && null !== $object->getSeqNr()) {
                $data['seq_nr'] = $object->getSeqNr();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainNameserver' => false];
        }
    }
} else {
    class DomainNameserverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainNameserver';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainNameserver';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainNameserver();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
                $object->setIp($data['ip']);
            }
            elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
                $object->setIp(null);
            }
            if (\array_key_exists('ip6', $data) && $data['ip6'] !== null) {
                $object->setIp6($data['ip6']);
            }
            elseif (\array_key_exists('ip6', $data) && $data['ip6'] === null) {
                $object->setIp6(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('seq_nr', $data) && $data['seq_nr'] !== null) {
                $object->setSeqNr($data['seq_nr']);
            }
            elseif (\array_key_exists('seq_nr', $data) && $data['seq_nr'] === null) {
                $object->setSeqNr(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('ip6') && null !== $object->getIp6()) {
                $data['ip6'] = $object->getIp6();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('seqNr') && null !== $object->getSeqNr()) {
                $data['seq_nr'] = $object->getSeqNr();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainNameserver' => false];
        }
    }
}