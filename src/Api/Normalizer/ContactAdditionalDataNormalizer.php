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
    class ContactAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ContactAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('birth_city', $data) && $data['birth_city'] !== null) {
                $object->setBirthCity($data['birth_city']);
            }
            elseif (\array_key_exists('birth_city', $data) && $data['birth_city'] === null) {
                $object->setBirthCity(null);
            }
            if (\array_key_exists('birth_date', $data) && $data['birth_date'] !== null) {
                $object->setBirthDate($data['birth_date']);
            }
            elseif (\array_key_exists('birth_date', $data) && $data['birth_date'] === null) {
                $object->setBirthDate(null);
            }
            if (\array_key_exists('social_security_number', $data) && $data['social_security_number'] !== null) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            elseif (\array_key_exists('social_security_number', $data) && $data['social_security_number'] === null) {
                $object->setSocialSecurityNumber(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('birthCity') && null !== $object->getBirthCity()) {
                $data['birth_city'] = $object->getBirthCity();
            }
            if ($object->isInitialized('birthDate') && null !== $object->getBirthDate()) {
                $data['birth_date'] = $object->getBirthDate();
            }
            if ($object->isInitialized('socialSecurityNumber') && null !== $object->getSocialSecurityNumber()) {
                $data['social_security_number'] = $object->getSocialSecurityNumber();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData' => false];
        }
    }
} else {
    class ContactAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData';
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
            $object = new \Rouda\OpenProvider\Api\Model\ContactAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('birth_city', $data) && $data['birth_city'] !== null) {
                $object->setBirthCity($data['birth_city']);
            }
            elseif (\array_key_exists('birth_city', $data) && $data['birth_city'] === null) {
                $object->setBirthCity(null);
            }
            if (\array_key_exists('birth_date', $data) && $data['birth_date'] !== null) {
                $object->setBirthDate($data['birth_date']);
            }
            elseif (\array_key_exists('birth_date', $data) && $data['birth_date'] === null) {
                $object->setBirthDate(null);
            }
            if (\array_key_exists('social_security_number', $data) && $data['social_security_number'] !== null) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            elseif (\array_key_exists('social_security_number', $data) && $data['social_security_number'] === null) {
                $object->setSocialSecurityNumber(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('birthCity') && null !== $object->getBirthCity()) {
                $data['birth_city'] = $object->getBirthCity();
            }
            if ($object->isInitialized('birthDate') && null !== $object->getBirthDate()) {
                $data['birth_date'] = $object->getBirthDate();
            }
            if ($object->isInitialized('socialSecurityNumber') && null !== $object->getSocialSecurityNumber()) {
                $data['social_security_number'] = $object->getSocialSecurityNumber();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData' => false];
        }
    }
}