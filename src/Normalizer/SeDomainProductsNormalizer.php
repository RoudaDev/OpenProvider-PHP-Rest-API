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
    class SeDomainProductsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainProducts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archiving', $data)) {
                $object->setArchiving($data['archiving']);
            }
            if (\array_key_exists('incoming', $data)) {
                $object->setIncoming($data['incoming']);
            }
            if (\array_key_exists('outgoing', $data)) {
                $object->setOutgoing($data['outgoing']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('archiving') && null !== $object->getArchiving()) {
                $data['archiving'] = $object->getArchiving();
            }
            if ($object->isInitialized('incoming') && null !== $object->getIncoming()) {
                $data['incoming'] = $object->getIncoming();
            }
            if ($object->isInitialized('outgoing') && null !== $object->getOutgoing()) {
                $data['outgoing'] = $object->getOutgoing();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainProducts' => false];
        }
    }
} else {
    class SeDomainProductsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts';
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
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainProducts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archiving', $data)) {
                $object->setArchiving($data['archiving']);
            }
            if (\array_key_exists('incoming', $data)) {
                $object->setIncoming($data['incoming']);
            }
            if (\array_key_exists('outgoing', $data)) {
                $object->setOutgoing($data['outgoing']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('archiving') && null !== $object->getArchiving()) {
                $data['archiving'] = $object->getArchiving();
            }
            if ($object->isInitialized('incoming') && null !== $object->getIncoming()) {
                $data['incoming'] = $object->getIncoming();
            }
            if ($object->isInitialized('outgoing') && null !== $object->getOutgoing()) {
                $data['outgoing'] = $object->getOutgoing();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainProducts' => false];
        }
    }
}