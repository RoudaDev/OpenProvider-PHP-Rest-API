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
    class DomainAbuseDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainAbuseDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abuse_id', $data)) {
                $object->setAbuseId($data['abuse_id']);
            }
            if (\array_key_exists('is_domain_held', $data)) {
                $object->setIsDomainHeld($data['is_domain_held']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('abuseId') && null !== $object->getAbuseId()) {
                $data['abuse_id'] = $object->getAbuseId();
            }
            if ($object->isInitialized('isDomainHeld') && null !== $object->getIsDomainHeld()) {
                $data['is_domain_held'] = $object->getIsDomainHeld();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails' => false];
        }
    }
} else {
    class DomainAbuseDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainAbuseDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abuse_id', $data)) {
                $object->setAbuseId($data['abuse_id']);
            }
            if (\array_key_exists('is_domain_held', $data)) {
                $object->setIsDomainHeld($data['is_domain_held']);
            }
            if (\array_key_exists('message', $data)) {
                $object->setMessage($data['message']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('abuseId') && null !== $object->getAbuseId()) {
                $data['abuse_id'] = $object->getAbuseId();
            }
            if ($object->isInitialized('isDomainHeld') && null !== $object->getIsDomainHeld()) {
                $data['is_domain_held'] = $object->getIsDomainHeld();
            }
            if ($object->isInitialized('message') && null !== $object->getMessage()) {
                $data['message'] = $object->getMessage();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails' => false];
        }
    }
}