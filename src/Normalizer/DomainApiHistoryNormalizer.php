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
    class DomainApiHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainApiHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainApiHistory';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainApiHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cmd', $data)) {
                $object->setCmd($data['cmd']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
            }
            if (\array_key_exists('domain_id', $data)) {
                $object->setDomainId($data['domain_id']);
            }
            if (\array_key_exists('in', $data)) {
                $object->setIn($data['in']);
            }
            if (\array_key_exists('out', $data)) {
                $object->setOut($data['out']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $data['cmd'] = $object->getCmd();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('domainId') && null !== $object->getDomainId()) {
                $data['domain_id'] = $object->getDomainId();
            }
            if ($object->isInitialized('in') && null !== $object->getIn()) {
                $data['in'] = $object->getIn();
            }
            if ($object->isInitialized('out') && null !== $object->getOut()) {
                $data['out'] = $object->getOut();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainApiHistory' => false];
        }
    }
} else {
    class DomainApiHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainApiHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainApiHistory';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainApiHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cmd', $data)) {
                $object->setCmd($data['cmd']);
            }
            if (\array_key_exists('created_at', $data)) {
                $object->setCreatedAt($data['created_at']);
            }
            if (\array_key_exists('domain_id', $data)) {
                $object->setDomainId($data['domain_id']);
            }
            if (\array_key_exists('in', $data)) {
                $object->setIn($data['in']);
            }
            if (\array_key_exists('out', $data)) {
                $object->setOut($data['out']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $data['cmd'] = $object->getCmd();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('domainId') && null !== $object->getDomainId()) {
                $data['domain_id'] = $object->getDomainId();
            }
            if ($object->isInitialized('in') && null !== $object->getIn()) {
                $data['in'] = $object->getIn();
            }
            if ($object->isInitialized('out') && null !== $object->getOut()) {
                $data['out'] = $object->getOut();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainApiHistory' => false];
        }
    }
}