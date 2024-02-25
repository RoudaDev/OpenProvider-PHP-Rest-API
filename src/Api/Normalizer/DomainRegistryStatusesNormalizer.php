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
    class DomainRegistryStatusesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatuses';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatuses';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainRegistryStatuses();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('client_hold', $data) && $data['client_hold'] !== null) {
                $object->setClientHold($this->denormalizer->denormalize($data['client_hold'], 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatus', 'json', $context));
            }
            elseif (\array_key_exists('client_hold', $data) && $data['client_hold'] === null) {
                $object->setClientHold(null);
            }
            if (\array_key_exists('client_transfer_prohibited', $data) && $data['client_transfer_prohibited'] !== null) {
                $object->setClientTransferProhibited($this->denormalizer->denormalize($data['client_transfer_prohibited'], 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatus', 'json', $context));
            }
            elseif (\array_key_exists('client_transfer_prohibited', $data) && $data['client_transfer_prohibited'] === null) {
                $object->setClientTransferProhibited(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('clientHold') && null !== $object->getClientHold()) {
                $data['client_hold'] = $this->normalizer->normalize($object->getClientHold(), 'json', $context);
            }
            if ($object->isInitialized('clientTransferProhibited') && null !== $object->getClientTransferProhibited()) {
                $data['client_transfer_prohibited'] = $this->normalizer->normalize($object->getClientTransferProhibited(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatuses' => false];
        }
    }
} else {
    class DomainRegistryStatusesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatuses';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatuses';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainRegistryStatuses();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('client_hold', $data) && $data['client_hold'] !== null) {
                $object->setClientHold($this->denormalizer->denormalize($data['client_hold'], 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatus', 'json', $context));
            }
            elseif (\array_key_exists('client_hold', $data) && $data['client_hold'] === null) {
                $object->setClientHold(null);
            }
            if (\array_key_exists('client_transfer_prohibited', $data) && $data['client_transfer_prohibited'] !== null) {
                $object->setClientTransferProhibited($this->denormalizer->denormalize($data['client_transfer_prohibited'], 'Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatus', 'json', $context));
            }
            elseif (\array_key_exists('client_transfer_prohibited', $data) && $data['client_transfer_prohibited'] === null) {
                $object->setClientTransferProhibited(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('clientHold') && null !== $object->getClientHold()) {
                $data['client_hold'] = $this->normalizer->normalize($object->getClientHold(), 'json', $context);
            }
            if ($object->isInitialized('clientTransferProhibited') && null !== $object->getClientTransferProhibited()) {
                $data['client_transfer_prohibited'] = $this->normalizer->normalize($object->getClientTransferProhibited(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainRegistryStatuses' => false];
        }
    }
}