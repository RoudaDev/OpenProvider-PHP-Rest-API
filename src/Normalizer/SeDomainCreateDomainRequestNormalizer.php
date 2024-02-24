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
    class SeDomainCreateDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainCreateDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainCreateDomainRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainCreateDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('aliases', $data)) {
                $values = [];
                foreach ($data['aliases'] as $value) {
                    $values[] = $value;
                }
                $object->setAliases($values);
            }
            if (\array_key_exists('bundle', $data)) {
                $object->setBundle($data['bundle']);
            }
            if (\array_key_exists('destinations', $data)) {
                $values_1 = [];
                foreach ($data['destinations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\SeDomainDestination', 'json', $context);
                }
                $object->setDestinations($values_1);
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('products', $data)) {
                $object->setProducts($this->denormalizer->denormalize($data['products'], 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values = [];
                foreach ($object->getAliases() as $value) {
                    $values[] = $value;
                }
                $data['aliases'] = $values;
            }
            if ($object->isInitialized('bundle') && null !== $object->getBundle()) {
                $data['bundle'] = $object->getBundle();
            }
            if ($object->isInitialized('destinations') && null !== $object->getDestinations()) {
                $values_1 = [];
                foreach ($object->getDestinations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['destinations'] = $values_1;
            }
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('products') && null !== $object->getProducts()) {
                $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainCreateDomainRequest' => false];
        }
    }
} else {
    class SeDomainCreateDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainCreateDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainCreateDomainRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainCreateDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('aliases', $data)) {
                $values = [];
                foreach ($data['aliases'] as $value) {
                    $values[] = $value;
                }
                $object->setAliases($values);
            }
            if (\array_key_exists('bundle', $data)) {
                $object->setBundle($data['bundle']);
            }
            if (\array_key_exists('destinations', $data)) {
                $values_1 = [];
                foreach ($data['destinations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\SeDomainDestination', 'json', $context);
                }
                $object->setDestinations($values_1);
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('products', $data)) {
                $object->setProducts($this->denormalizer->denormalize($data['products'], 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
                $values = [];
                foreach ($object->getAliases() as $value) {
                    $values[] = $value;
                }
                $data['aliases'] = $values;
            }
            if ($object->isInitialized('bundle') && null !== $object->getBundle()) {
                $data['bundle'] = $object->getBundle();
            }
            if ($object->isInitialized('destinations') && null !== $object->getDestinations()) {
                $values_1 = [];
                foreach ($object->getDestinations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['destinations'] = $values_1;
            }
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('products') && null !== $object->getProducts()) {
                $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainCreateDomainRequest' => false];
        }
    }
}