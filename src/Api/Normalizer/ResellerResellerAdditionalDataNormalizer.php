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
    class ResellerResellerAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ResellerResellerAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cif_nif_number', $data) && $data['cif_nif_number'] !== null) {
                $object->setCifNifNumber($data['cif_nif_number']);
            }
            elseif (\array_key_exists('cif_nif_number', $data) && $data['cif_nif_number'] === null) {
                $object->setCifNifNumber(null);
            }
            if (\array_key_exists('gstin', $data) && $data['gstin'] !== null) {
                $object->setGstin($data['gstin']);
            }
            elseif (\array_key_exists('gstin', $data) && $data['gstin'] === null) {
                $object->setGstin(null);
            }
            if (\array_key_exists('internal_reference', $data) && $data['internal_reference'] !== null) {
                $object->setInternalReference($data['internal_reference']);
            }
            elseif (\array_key_exists('internal_reference', $data) && $data['internal_reference'] === null) {
                $object->setInternalReference(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('cifNifNumber') && null !== $object->getCifNifNumber()) {
                $data['cif_nif_number'] = $object->getCifNifNumber();
            }
            if ($object->isInitialized('gstin') && null !== $object->getGstin()) {
                $data['gstin'] = $object->getGstin();
            }
            if ($object->isInitialized('internalReference') && null !== $object->getInternalReference()) {
                $data['internal_reference'] = $object->getInternalReference();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData' => false];
        }
    }
} else {
    class ResellerResellerAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData';
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
            $object = new \Rouda\OpenProvider\Api\Model\ResellerResellerAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cif_nif_number', $data) && $data['cif_nif_number'] !== null) {
                $object->setCifNifNumber($data['cif_nif_number']);
            }
            elseif (\array_key_exists('cif_nif_number', $data) && $data['cif_nif_number'] === null) {
                $object->setCifNifNumber(null);
            }
            if (\array_key_exists('gstin', $data) && $data['gstin'] !== null) {
                $object->setGstin($data['gstin']);
            }
            elseif (\array_key_exists('gstin', $data) && $data['gstin'] === null) {
                $object->setGstin(null);
            }
            if (\array_key_exists('internal_reference', $data) && $data['internal_reference'] !== null) {
                $object->setInternalReference($data['internal_reference']);
            }
            elseif (\array_key_exists('internal_reference', $data) && $data['internal_reference'] === null) {
                $object->setInternalReference(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('cifNifNumber') && null !== $object->getCifNifNumber()) {
                $data['cif_nif_number'] = $object->getCifNifNumber();
            }
            if ($object->isInitialized('gstin') && null !== $object->getGstin()) {
                $data['gstin'] = $object->getGstin();
            }
            if ($object->isInitialized('internalReference') && null !== $object->getInternalReference()) {
                $data['internal_reference'] = $object->getInternalReference();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData' => false];
        }
    }
}