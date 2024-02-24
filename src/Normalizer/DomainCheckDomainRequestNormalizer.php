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
    class DomainCheckDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainCheckDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainCheckAdditionalData', 'json', $context));
            }
            if (\array_key_exists('application_mode', $data)) {
                $object->setApplicationMode($data['application_mode']);
            }
            if (\array_key_exists('domains', $data)) {
                $values = [];
                foreach ($data['domains'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\DomainDomain', 'json', $context);
                }
                $object->setDomains($values);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('with_price', $data)) {
                $object->setWithPrice($data['with_price']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('applicationMode') && null !== $object->getApplicationMode()) {
                $data['application_mode'] = $object->getApplicationMode();
            }
            if ($object->isInitialized('domains') && null !== $object->getDomains()) {
                $values = [];
                foreach ($object->getDomains() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['domains'] = $values;
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('withPrice') && null !== $object->getWithPrice()) {
                $data['with_price'] = $object->getWithPrice();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainRequest' => false];
        }
    }
} else {
    class DomainCheckDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainCheckDomainRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainCheckAdditionalData', 'json', $context));
            }
            if (\array_key_exists('application_mode', $data)) {
                $object->setApplicationMode($data['application_mode']);
            }
            if (\array_key_exists('domains', $data)) {
                $values = [];
                foreach ($data['domains'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\DomainDomain', 'json', $context);
                }
                $object->setDomains($values);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('with_price', $data)) {
                $object->setWithPrice($data['with_price']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('applicationMode') && null !== $object->getApplicationMode()) {
                $data['application_mode'] = $object->getApplicationMode();
            }
            if ($object->isInitialized('domains') && null !== $object->getDomains()) {
                $values = [];
                foreach ($object->getDomains() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['domains'] = $values;
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('withPrice') && null !== $object->getWithPrice()) {
                $data['with_price'] = $object->getWithPrice();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainCheckDomainRequest' => false];
        }
    }
}