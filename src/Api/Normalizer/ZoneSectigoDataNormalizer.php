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
    class ZoneSectigoDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneSectigoData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneSectigoData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ZoneSectigoData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
                $object->setAutorenew($data['autorenew']);
            }
            elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
                $object->setAutorenew(null);
            }
            if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
                $object->setOrderDate($data['order_date']);
            }
            elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
                $object->setOrderDate(null);
            }
            if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
                $object->setRenewalDate($data['renewal_date']);
            }
            elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
                $object->setRenewalDate(null);
            }
            if (\array_key_exists('secured', $data) && $data['secured'] !== null) {
                $object->setSecured($data['secured']);
            }
            elseif (\array_key_exists('secured', $data) && $data['secured'] === null) {
                $object->setSecured(null);
            }
            if (\array_key_exists('website_id', $data) && $data['website_id'] !== null) {
                $object->setWebsiteId($data['website_id']);
            }
            elseif (\array_key_exists('website_id', $data) && $data['website_id'] === null) {
                $object->setWebsiteId(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
                $data['renewal_date'] = $object->getRenewalDate();
            }
            if ($object->isInitialized('secured') && null !== $object->getSecured()) {
                $data['secured'] = $object->getSecured();
            }
            if ($object->isInitialized('websiteId') && null !== $object->getWebsiteId()) {
                $data['website_id'] = $object->getWebsiteId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneSectigoData' => false];
        }
    }
} else {
    class ZoneSectigoDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ZoneSectigoData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ZoneSectigoData';
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
            $object = new \Rouda\OpenProvider\Api\Model\ZoneSectigoData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
                $object->setAutorenew($data['autorenew']);
            }
            elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
                $object->setAutorenew(null);
            }
            if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
                $object->setOrderDate($data['order_date']);
            }
            elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
                $object->setOrderDate(null);
            }
            if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
                $object->setRenewalDate($data['renewal_date']);
            }
            elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
                $object->setRenewalDate(null);
            }
            if (\array_key_exists('secured', $data) && $data['secured'] !== null) {
                $object->setSecured($data['secured']);
            }
            elseif (\array_key_exists('secured', $data) && $data['secured'] === null) {
                $object->setSecured(null);
            }
            if (\array_key_exists('website_id', $data) && $data['website_id'] !== null) {
                $object->setWebsiteId($data['website_id']);
            }
            elseif (\array_key_exists('website_id', $data) && $data['website_id'] === null) {
                $object->setWebsiteId(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
                $data['renewal_date'] = $object->getRenewalDate();
            }
            if ($object->isInitialized('secured') && null !== $object->getSecured()) {
                $data['secured'] = $object->getSecured();
            }
            if ($object->isInitialized('websiteId') && null !== $object->getWebsiteId()) {
                $data['website_id'] = $object->getWebsiteId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ZoneSectigoData' => false];
        }
    }
}