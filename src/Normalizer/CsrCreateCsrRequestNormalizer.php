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
    class CsrCreateCsrRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CsrCreateCsrRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CsrCreateCsrRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\CsrCreateCsrRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bits', $data)) {
                $object->setBits($data['bits']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('locality', $data)) {
                $object->setLocality($data['locality']);
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($data['organization']);
            }
            if (\array_key_exists('signature_hash_algorithm', $data)) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            if (\array_key_exists('subject_alternative_name', $data)) {
                $values = [];
                foreach ($data['subject_alternative_name'] as $value) {
                    $values[] = $value;
                }
                $object->setSubjectAlternativeName($values);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
            }
            if (\array_key_exists('with_config', $data)) {
                $object->setWithConfig($data['with_config']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bits') && null !== $object->getBits()) {
                $data['bits'] = $object->getBits();
            }
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
            if ($object->isInitialized('signatureHashAlgorithm') && null !== $object->getSignatureHashAlgorithm()) {
                $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('subjectAlternativeName') && null !== $object->getSubjectAlternativeName()) {
                $values = [];
                foreach ($object->getSubjectAlternativeName() as $value) {
                    $values[] = $value;
                }
                $data['subject_alternative_name'] = $values;
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('withConfig') && null !== $object->getWithConfig()) {
                $data['with_config'] = $object->getWithConfig();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\CsrCreateCsrRequest' => false];
        }
    }
} else {
    class CsrCreateCsrRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CsrCreateCsrRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CsrCreateCsrRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\CsrCreateCsrRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bits', $data)) {
                $object->setBits($data['bits']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('country', $data)) {
                $object->setCountry($data['country']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('locality', $data)) {
                $object->setLocality($data['locality']);
            }
            if (\array_key_exists('organization', $data)) {
                $object->setOrganization($data['organization']);
            }
            if (\array_key_exists('signature_hash_algorithm', $data)) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            if (\array_key_exists('subject_alternative_name', $data)) {
                $values = [];
                foreach ($data['subject_alternative_name'] as $value) {
                    $values[] = $value;
                }
                $object->setSubjectAlternativeName($values);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
            }
            if (\array_key_exists('with_config', $data)) {
                $object->setWithConfig($data['with_config']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('bits') && null !== $object->getBits()) {
                $data['bits'] = $object->getBits();
            }
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
            if ($object->isInitialized('signatureHashAlgorithm') && null !== $object->getSignatureHashAlgorithm()) {
                $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('subjectAlternativeName') && null !== $object->getSubjectAlternativeName()) {
                $values = [];
                foreach ($object->getSubjectAlternativeName() as $value) {
                    $values[] = $value;
                }
                $data['subject_alternative_name'] = $values;
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('withConfig') && null !== $object->getWithConfig()) {
                $data['with_config'] = $object->getWithConfig();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\CsrCreateCsrRequest' => false];
        }
    }
}