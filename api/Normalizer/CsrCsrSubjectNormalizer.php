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
    class CsrCsrSubjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\CsrCsrSubject();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('common_name', $data) && $data['common_name'] !== null) {
                $object->setCommonName($data['common_name']);
            }
            elseif (\array_key_exists('common_name', $data) && $data['common_name'] === null) {
                $object->setCommonName(null);
            }
            if (\array_key_exists('country', $data) && $data['country'] !== null) {
                $object->setCountry($data['country']);
            }
            elseif (\array_key_exists('country', $data) && $data['country'] === null) {
                $object->setCountry(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('locality', $data) && $data['locality'] !== null) {
                $object->setLocality($data['locality']);
            }
            elseif (\array_key_exists('locality', $data) && $data['locality'] === null) {
                $object->setLocality(null);
            }
            if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
                $object->setOrganization($data['organization']);
            }
            elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
                $object->setOrganization(null);
            }
            if (\array_key_exists('state', $data) && $data['state'] !== null) {
                $object->setState($data['state']);
            }
            elseif (\array_key_exists('state', $data) && $data['state'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
                $object->setUnit($data['unit']);
            }
            elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
                $object->setUnit(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('locality') && null !== $object->getLocality()) {
                $data['locality'] = $object->getLocality();
            }
            if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
                $data['organization'] = $object->getOrganization();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject' => false];
        }
    }
} else {
    class CsrCsrSubjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject';
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
            $object = new \Rouda\OpenProvider\Api\Model\CsrCsrSubject();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('common_name', $data) && $data['common_name'] !== null) {
                $object->setCommonName($data['common_name']);
            }
            elseif (\array_key_exists('common_name', $data) && $data['common_name'] === null) {
                $object->setCommonName(null);
            }
            if (\array_key_exists('country', $data) && $data['country'] !== null) {
                $object->setCountry($data['country']);
            }
            elseif (\array_key_exists('country', $data) && $data['country'] === null) {
                $object->setCountry(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('locality', $data) && $data['locality'] !== null) {
                $object->setLocality($data['locality']);
            }
            elseif (\array_key_exists('locality', $data) && $data['locality'] === null) {
                $object->setLocality(null);
            }
            if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
                $object->setOrganization($data['organization']);
            }
            elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
                $object->setOrganization(null);
            }
            if (\array_key_exists('state', $data) && $data['state'] !== null) {
                $object->setState($data['state']);
            }
            elseif (\array_key_exists('state', $data) && $data['state'] === null) {
                $object->setState(null);
            }
            if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
                $object->setUnit($data['unit']);
            }
            elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
                $object->setUnit(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('locality') && null !== $object->getLocality()) {
                $data['locality'] = $object->getLocality();
            }
            if ($object->isInitialized('organization') && null !== $object->getOrganization()) {
                $data['organization'] = $object->getOrganization();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject' => false];
        }
    }
}