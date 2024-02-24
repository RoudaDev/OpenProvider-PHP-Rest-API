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
    class SeDomainRecordsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainRecords';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainRecords';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainRecords();
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
            if (\array_key_exists('destinations', $data)) {
                $values_1 = [];
                foreach ($data['destinations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\SeDomainDestination', 'json', $context);
                }
                $object->setDestinations($values_1);
            }
            if (\array_key_exists('outgoing_user_ips', $data)) {
                $values_2 = [];
                foreach ($data['outgoing_user_ips'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setOutgoingUserIps($values_2);
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
            if ($object->isInitialized('destinations') && null !== $object->getDestinations()) {
                $values_1 = [];
                foreach ($object->getDestinations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['destinations'] = $values_1;
            }
            if ($object->isInitialized('outgoingUserIps') && null !== $object->getOutgoingUserIps()) {
                $values_2 = [];
                foreach ($object->getOutgoingUserIps() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['outgoing_user_ips'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainRecords' => false];
        }
    }
} else {
    class SeDomainRecordsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainRecords';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainRecords';
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
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainRecords();
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
            if (\array_key_exists('destinations', $data)) {
                $values_1 = [];
                foreach ($data['destinations'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\SeDomainDestination', 'json', $context);
                }
                $object->setDestinations($values_1);
            }
            if (\array_key_exists('outgoing_user_ips', $data)) {
                $values_2 = [];
                foreach ($data['outgoing_user_ips'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setOutgoingUserIps($values_2);
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
            if ($object->isInitialized('destinations') && null !== $object->getDestinations()) {
                $values_1 = [];
                foreach ($object->getDestinations() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['destinations'] = $values_1;
            }
            if ($object->isInitialized('outgoingUserIps') && null !== $object->getOutgoingUserIps()) {
                $values_2 = [];
                foreach ($object->getOutgoingUserIps() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['outgoing_user_ips'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainRecords' => false];
        }
    }
}