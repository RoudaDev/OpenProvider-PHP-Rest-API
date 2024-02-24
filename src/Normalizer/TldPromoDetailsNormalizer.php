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
    class TldPromoDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\TldPromoDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\TldPromoDetails';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\TldPromoDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('end_date', $data)) {
                $object->setEndDate($data['end_date']);
            }
            if (\array_key_exists('non_promo_price', $data)) {
                $object->setNonPromoPrice($this->denormalizer->denormalize($data['non_promo_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('start_date', $data)) {
                $object->setStartDate($data['start_date']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate();
            }
            if ($object->isInitialized('nonPromoPrice') && null !== $object->getNonPromoPrice()) {
                $data['non_promo_price'] = $this->normalizer->normalize($object->getNonPromoPrice(), 'json', $context);
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\TldPromoDetails' => false];
        }
    }
} else {
    class TldPromoDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\TldPromoDetails';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\TldPromoDetails';
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
            $object = new \Rouda\OpenProviderAPI\Model\TldPromoDetails();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('end_date', $data)) {
                $object->setEndDate($data['end_date']);
            }
            if (\array_key_exists('non_promo_price', $data)) {
                $object->setNonPromoPrice($this->denormalizer->denormalize($data['non_promo_price'], 'Rouda\\OpenProviderAPI\\Model\\TldPrice', 'json', $context));
            }
            if (\array_key_exists('start_date', $data)) {
                $object->setStartDate($data['start_date']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate();
            }
            if ($object->isInitialized('nonPromoPrice') && null !== $object->getNonPromoPrice()) {
                $data['non_promo_price'] = $this->normalizer->normalize($object->getNonPromoPrice(), 'json', $context);
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\TldPromoDetails' => false];
        }
    }
}