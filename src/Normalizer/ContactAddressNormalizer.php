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
    class ContactAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ContactAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ContactAddress';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ContactAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            if (\array_key_exists('street', $data)) {
                $object->setStreet($data['street']);
            }
            if (\array_key_exists('suffix', $data)) {
                $object->setSuffix($data['suffix']);
            }
            if (\array_key_exists('zipcode', $data)) {
                $object->setZipcode($data['zipcode']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['number'] = $object->getNumber();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('street') && null !== $object->getStreet()) {
                $data['street'] = $object->getStreet();
            }
            if ($object->isInitialized('suffix') && null !== $object->getSuffix()) {
                $data['suffix'] = $object->getSuffix();
            }
            if ($object->isInitialized('zipcode') && null !== $object->getZipcode()) {
                $data['zipcode'] = $object->getZipcode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ContactAddress' => false];
        }
    }
} else {
    class ContactAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ContactAddress';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ContactAddress';
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
            $object = new \Rouda\OpenProviderAPI\Model\ContactAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('city', $data)) {
                $object->setCity($data['city']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
            }
            if (\array_key_exists('number', $data)) {
                $object->setNumber($data['number']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            if (\array_key_exists('street', $data)) {
                $object->setStreet($data['street']);
            }
            if (\array_key_exists('suffix', $data)) {
                $object->setSuffix($data['suffix']);
            }
            if (\array_key_exists('zipcode', $data)) {
                $object->setZipcode($data['zipcode']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('number') && null !== $object->getNumber()) {
                $data['number'] = $object->getNumber();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('street') && null !== $object->getStreet()) {
                $data['street'] = $object->getStreet();
            }
            if ($object->isInitialized('suffix') && null !== $object->getSuffix()) {
                $data['suffix'] = $object->getSuffix();
            }
            if ($object->isInitialized('zipcode') && null !== $object->getZipcode()) {
                $data['zipcode'] = $object->getZipcode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ContactAddress' => false];
        }
    }
}