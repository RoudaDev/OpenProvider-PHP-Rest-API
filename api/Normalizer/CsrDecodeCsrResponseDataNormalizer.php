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
    class CsrDecodeCsrResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CsrDecodeCsrResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CsrDecodeCsrResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\CsrDecodeCsrResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_names_count', $data) && $data['domain_names_count'] !== null) {
                $object->setDomainNamesCount($data['domain_names_count']);
            }
            elseif (\array_key_exists('domain_names_count', $data) && $data['domain_names_count'] === null) {
                $object->setDomainNamesCount(null);
            }
            if (\array_key_exists('public_key', $data) && $data['public_key'] !== null) {
                $object->setPublicKey($this->denormalizer->denormalize($data['public_key'], 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrPublicKey', 'json', $context));
            }
            elseif (\array_key_exists('public_key', $data) && $data['public_key'] === null) {
                $object->setPublicKey(null);
            }
            if (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] !== null) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            elseif (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] === null) {
                $object->setSignatureHashAlgorithm(null);
            }
            if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
                $object->setSubject($this->denormalizer->denormalize($data['subject'], 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject', 'json', $context));
            }
            elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
                $object->setSubject(null);
            }
            if (\array_key_exists('subject_alternative_name', $data) && $data['subject_alternative_name'] !== null) {
                $values = [];
                foreach ($data['subject_alternative_name'] as $value) {
                    $values[] = $value;
                }
                $object->setSubjectAlternativeName($values);
            }
            elseif (\array_key_exists('subject_alternative_name', $data) && $data['subject_alternative_name'] === null) {
                $object->setSubjectAlternativeName(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('domainNamesCount') && null !== $object->getDomainNamesCount()) {
                $data['domain_names_count'] = $object->getDomainNamesCount();
            }
            if ($object->isInitialized('publicKey') && null !== $object->getPublicKey()) {
                $data['public_key'] = $this->normalizer->normalize($object->getPublicKey(), 'json', $context);
            }
            if ($object->isInitialized('signatureHashAlgorithm') && null !== $object->getSignatureHashAlgorithm()) {
                $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $this->normalizer->normalize($object->getSubject(), 'json', $context);
            }
            if ($object->isInitialized('subjectAlternativeName') && null !== $object->getSubjectAlternativeName()) {
                $values = [];
                foreach ($object->getSubjectAlternativeName() as $value) {
                    $values[] = $value;
                }
                $data['subject_alternative_name'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CsrDecodeCsrResponseData' => false];
        }
    }
} else {
    class CsrDecodeCsrResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CsrDecodeCsrResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CsrDecodeCsrResponseData';
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
            $object = new \Rouda\OpenProvider\Api\Model\CsrDecodeCsrResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('domain_names_count', $data) && $data['domain_names_count'] !== null) {
                $object->setDomainNamesCount($data['domain_names_count']);
            }
            elseif (\array_key_exists('domain_names_count', $data) && $data['domain_names_count'] === null) {
                $object->setDomainNamesCount(null);
            }
            if (\array_key_exists('public_key', $data) && $data['public_key'] !== null) {
                $object->setPublicKey($this->denormalizer->denormalize($data['public_key'], 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrPublicKey', 'json', $context));
            }
            elseif (\array_key_exists('public_key', $data) && $data['public_key'] === null) {
                $object->setPublicKey(null);
            }
            if (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] !== null) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            elseif (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] === null) {
                $object->setSignatureHashAlgorithm(null);
            }
            if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
                $object->setSubject($this->denormalizer->denormalize($data['subject'], 'Rouda\\OpenProvider\\Api\\Model\\CsrCsrSubject', 'json', $context));
            }
            elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
                $object->setSubject(null);
            }
            if (\array_key_exists('subject_alternative_name', $data) && $data['subject_alternative_name'] !== null) {
                $values = [];
                foreach ($data['subject_alternative_name'] as $value) {
                    $values[] = $value;
                }
                $object->setSubjectAlternativeName($values);
            }
            elseif (\array_key_exists('subject_alternative_name', $data) && $data['subject_alternative_name'] === null) {
                $object->setSubjectAlternativeName(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('domainNamesCount') && null !== $object->getDomainNamesCount()) {
                $data['domain_names_count'] = $object->getDomainNamesCount();
            }
            if ($object->isInitialized('publicKey') && null !== $object->getPublicKey()) {
                $data['public_key'] = $this->normalizer->normalize($object->getPublicKey(), 'json', $context);
            }
            if ($object->isInitialized('signatureHashAlgorithm') && null !== $object->getSignatureHashAlgorithm()) {
                $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $this->normalizer->normalize($object->getSubject(), 'json', $context);
            }
            if ($object->isInitialized('subjectAlternativeName') && null !== $object->getSubjectAlternativeName()) {
                $values = [];
                foreach ($object->getSubjectAlternativeName() as $value) {
                    $values[] = $value;
                }
                $data['subject_alternative_name'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CsrDecodeCsrResponseData' => false];
        }
    }
}