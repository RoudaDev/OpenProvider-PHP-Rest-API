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
    class SpamExpertGenerateLoginURLRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SpamExpertGenerateLoginURLRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SpamExpertGenerateLoginURLRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SpamExpertGenerateLoginURLRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bundle', $data)) {
                $object->setBundle($data['bundle']);
            }
            if (\array_key_exists('domain_or_email', $data)) {
                $object->setDomainOrEmail($data['domain_or_email']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bundle') && null !== $object->getBundle()) {
                $data['bundle'] = $object->getBundle();
            }
            if ($object->isInitialized('domainOrEmail') && null !== $object->getDomainOrEmail()) {
                $data['domain_or_email'] = $object->getDomainOrEmail();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SpamExpertGenerateLoginURLRequest' => false];
        }
    }
} else {
    class SpamExpertGenerateLoginURLRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SpamExpertGenerateLoginURLRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SpamExpertGenerateLoginURLRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\SpamExpertGenerateLoginURLRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bundle', $data)) {
                $object->setBundle($data['bundle']);
            }
            if (\array_key_exists('domain_or_email', $data)) {
                $object->setDomainOrEmail($data['domain_or_email']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('bundle') && null !== $object->getBundle()) {
                $data['bundle'] = $object->getBundle();
            }
            if ($object->isInitialized('domainOrEmail') && null !== $object->getDomainOrEmail()) {
                $data['domain_or_email'] = $object->getDomainOrEmail();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SpamExpertGenerateLoginURLRequest' => false];
        }
    }
}