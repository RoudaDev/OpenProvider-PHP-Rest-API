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
    class OrderSslOrderDomainValidationStatusesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\OrderSslOrderDomainValidationStatuses();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ca_operation', $data)) {
                $object->setCaOperation($data['ca_operation']);
            }
            if (\array_key_exists('ca_order_status', $data)) {
                $object->setCaOrderStatus($data['ca_order_status']);
            }
            if (\array_key_exists('ca_status', $data)) {
                $object->setCaStatus($data['ca_status']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('caOperation') && null !== $object->getCaOperation()) {
                $data['ca_operation'] = $object->getCaOperation();
            }
            if ($object->isInitialized('caOrderStatus') && null !== $object->getCaOrderStatus()) {
                $data['ca_order_status'] = $object->getCaOrderStatus();
            }
            if ($object->isInitialized('caStatus') && null !== $object->getCaStatus()) {
                $data['ca_status'] = $object->getCaStatus();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses' => false];
        }
    }
} else {
    class OrderSslOrderDomainValidationStatusesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses';
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
            $object = new \Rouda\OpenProviderAPI\Model\OrderSslOrderDomainValidationStatuses();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ca_operation', $data)) {
                $object->setCaOperation($data['ca_operation']);
            }
            if (\array_key_exists('ca_order_status', $data)) {
                $object->setCaOrderStatus($data['ca_order_status']);
            }
            if (\array_key_exists('ca_status', $data)) {
                $object->setCaStatus($data['ca_status']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('caOperation') && null !== $object->getCaOperation()) {
                $data['ca_operation'] = $object->getCaOperation();
            }
            if ($object->isInitialized('caOrderStatus') && null !== $object->getCaOrderStatus()) {
                $data['ca_order_status'] = $object->getCaOrderStatus();
            }
            if ($object->isInitialized('caStatus') && null !== $object->getCaStatus()) {
                $data['ca_status'] = $object->getCaStatus();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses' => false];
        }
    }
}