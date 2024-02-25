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
    class PriceGetPriceResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\PriceGetPriceResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\PriceGetPriceResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\PriceGetPriceResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_premium', $data) && $data['is_premium'] !== null) {
                $object->setIsPremium($data['is_premium']);
            }
            elseif (\array_key_exists('is_premium', $data) && $data['is_premium'] === null) {
                $object->setIsPremium(null);
            }
            if (\array_key_exists('is_promotion', $data) && $data['is_promotion'] !== null) {
                $object->setIsPromotion($data['is_promotion']);
            }
            elseif (\array_key_exists('is_promotion', $data) && $data['is_promotion'] === null) {
                $object->setIsPromotion(null);
            }
            if (\array_key_exists('membership_price', $data) && $data['membership_price'] !== null) {
                $object->setMembershipPrice($this->denormalizer->denormalize($data['membership_price'], 'Rouda\\OpenProvider\\Api\\Model\\DomainPriceGroup', 'json', $context));
            }
            elseif (\array_key_exists('membership_price', $data) && $data['membership_price'] === null) {
                $object->setMembershipPrice(null);
            }
            if (\array_key_exists('price', $data) && $data['price'] !== null) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProvider\\Api\\Model\\DomainPriceGroup', 'json', $context));
            }
            elseif (\array_key_exists('price', $data) && $data['price'] === null) {
                $object->setPrice(null);
            }
            if (\array_key_exists('promotion_data', $data) && $data['promotion_data'] !== null) {
                $object->setPromotionData($this->denormalizer->denormalize($data['promotion_data'], 'Rouda\\OpenProvider\\Api\\Model\\PricePromotionData', 'json', $context));
            }
            elseif (\array_key_exists('promotion_data', $data) && $data['promotion_data'] === null) {
                $object->setPromotionData(null);
            }
            if (\array_key_exists('tier_price', $data) && $data['tier_price'] !== null) {
                $object->setTierPrice($this->denormalizer->denormalize($data['tier_price'], 'Rouda\\OpenProvider\\Api\\Model\\DomainPriceGroup', 'json', $context));
            }
            elseif (\array_key_exists('tier_price', $data) && $data['tier_price'] === null) {
                $object->setTierPrice(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('isPremium') && null !== $object->getIsPremium()) {
                $data['is_premium'] = $object->getIsPremium();
            }
            if ($object->isInitialized('isPromotion') && null !== $object->getIsPromotion()) {
                $data['is_promotion'] = $object->getIsPromotion();
            }
            if ($object->isInitialized('membershipPrice') && null !== $object->getMembershipPrice()) {
                $data['membership_price'] = $this->normalizer->normalize($object->getMembershipPrice(), 'json', $context);
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            if ($object->isInitialized('promotionData') && null !== $object->getPromotionData()) {
                $data['promotion_data'] = $this->normalizer->normalize($object->getPromotionData(), 'json', $context);
            }
            if ($object->isInitialized('tierPrice') && null !== $object->getTierPrice()) {
                $data['tier_price'] = $this->normalizer->normalize($object->getTierPrice(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\PriceGetPriceResponseData' => false];
        }
    }
} else {
    class PriceGetPriceResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\PriceGetPriceResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\PriceGetPriceResponseData';
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
            $object = new \Rouda\OpenProvider\Api\Model\PriceGetPriceResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('is_premium', $data) && $data['is_premium'] !== null) {
                $object->setIsPremium($data['is_premium']);
            }
            elseif (\array_key_exists('is_premium', $data) && $data['is_premium'] === null) {
                $object->setIsPremium(null);
            }
            if (\array_key_exists('is_promotion', $data) && $data['is_promotion'] !== null) {
                $object->setIsPromotion($data['is_promotion']);
            }
            elseif (\array_key_exists('is_promotion', $data) && $data['is_promotion'] === null) {
                $object->setIsPromotion(null);
            }
            if (\array_key_exists('membership_price', $data) && $data['membership_price'] !== null) {
                $object->setMembershipPrice($this->denormalizer->denormalize($data['membership_price'], 'Rouda\\OpenProvider\\Api\\Model\\DomainPriceGroup', 'json', $context));
            }
            elseif (\array_key_exists('membership_price', $data) && $data['membership_price'] === null) {
                $object->setMembershipPrice(null);
            }
            if (\array_key_exists('price', $data) && $data['price'] !== null) {
                $object->setPrice($this->denormalizer->denormalize($data['price'], 'Rouda\\OpenProvider\\Api\\Model\\DomainPriceGroup', 'json', $context));
            }
            elseif (\array_key_exists('price', $data) && $data['price'] === null) {
                $object->setPrice(null);
            }
            if (\array_key_exists('promotion_data', $data) && $data['promotion_data'] !== null) {
                $object->setPromotionData($this->denormalizer->denormalize($data['promotion_data'], 'Rouda\\OpenProvider\\Api\\Model\\PricePromotionData', 'json', $context));
            }
            elseif (\array_key_exists('promotion_data', $data) && $data['promotion_data'] === null) {
                $object->setPromotionData(null);
            }
            if (\array_key_exists('tier_price', $data) && $data['tier_price'] !== null) {
                $object->setTierPrice($this->denormalizer->denormalize($data['tier_price'], 'Rouda\\OpenProvider\\Api\\Model\\DomainPriceGroup', 'json', $context));
            }
            elseif (\array_key_exists('tier_price', $data) && $data['tier_price'] === null) {
                $object->setTierPrice(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('isPremium') && null !== $object->getIsPremium()) {
                $data['is_premium'] = $object->getIsPremium();
            }
            if ($object->isInitialized('isPromotion') && null !== $object->getIsPromotion()) {
                $data['is_promotion'] = $object->getIsPromotion();
            }
            if ($object->isInitialized('membershipPrice') && null !== $object->getMembershipPrice()) {
                $data['membership_price'] = $this->normalizer->normalize($object->getMembershipPrice(), 'json', $context);
            }
            if ($object->isInitialized('price') && null !== $object->getPrice()) {
                $data['price'] = $this->normalizer->normalize($object->getPrice(), 'json', $context);
            }
            if ($object->isInitialized('promotionData') && null !== $object->getPromotionData()) {
                $data['promotion_data'] = $this->normalizer->normalize($object->getPromotionData(), 'json', $context);
            }
            if ($object->isInitialized('tierPrice') && null !== $object->getTierPrice()) {
                $data['tier_price'] = $this->normalizer->normalize($object->getTierPrice(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\PriceGetPriceResponseData' => false];
        }
    }
}