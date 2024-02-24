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
    class ProductSslProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProduct';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProduct';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ProductSslProduct();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand_name', $data)) {
                $object->setBrandName($data['brand_name']);
            }
            if (\array_key_exists('bypass_san', $data)) {
                $object->setBypassSan($data['bypass_san']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($data['category']);
            }
            if (\array_key_exists('delivery_time', $data)) {
                $object->setDeliveryTime($data['delivery_time']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('encryption', $data)) {
                $object->setEncryption($data['encryption']);
            }
            if (\array_key_exists('free_refund_period', $data)) {
                $object->setFreeRefundPeriod($data['free_refund_period']);
            }
            if (\array_key_exists('free_reissue_period', $data)) {
                $object->setFreeReissuePeriod($data['free_reissue_period']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('included_domains_count', $data)) {
                $object->setIncludedDomainsCount($data['included_domains_count']);
            }
            if (\array_key_exists('is_extended_validation_supported', $data)) {
                $object->setIsExtendedValidationSupported($data['is_extended_validation_supported']);
            }
            if (\array_key_exists('is_idn_supported', $data)) {
                $object->setIsIdnSupported($data['is_idn_supported']);
            }
            if (\array_key_exists('is_mobile_supported', $data)) {
                $object->setIsMobileSupported($data['is_mobile_supported']);
            }
            if (\array_key_exists('is_sgc_supported', $data)) {
                $object->setIsSgcSupported($data['is_sgc_supported']);
            }
            if (\array_key_exists('is_wildcard_multidomain_supported', $data)) {
                $object->setIsWildcardMultidomainSupported($data['is_wildcard_multidomain_supported']);
            }
            if (\array_key_exists('is_wildcard_supported', $data)) {
                $object->setIsWildcardSupported($data['is_wildcard_supported']);
            }
            if (\array_key_exists('level_prices', $data)) {
                $values = [];
                foreach ($data['level_prices'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductLevelPrices', 'json', $context);
                }
                $object->setLevelPrices($values);
            }
            if (\array_key_exists('max_domains', $data)) {
                $object->setMaxDomains($data['max_domains']);
            }
            if (\array_key_exists('max_period', $data)) {
                $object->setMaxPeriod($data['max_period']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('number_of_domains', $data)) {
                $object->setNumberOfDomains($data['number_of_domains']);
            }
            if (\array_key_exists('order_module', $data)) {
                $object->setOrderModule($data['order_module']);
            }
            if (\array_key_exists('prices', $data)) {
                $values_1 = [];
                foreach ($data['prices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices', 'json', $context);
                }
                $object->setPrices($values_1);
            }
            if (\array_key_exists('root', $data)) {
                $object->setRoot($data['root']);
            }
            if (\array_key_exists('sub_category', $data)) {
                $object->setSubCategory($data['sub_category']);
            }
            if (\array_key_exists('supported_software', $data)) {
                $values_2 = [];
                foreach ($data['supported_software'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductSupportedSoftware', 'json', $context);
                }
                $object->setSupportedSoftware($values_2);
            }
            if (\array_key_exists('validation_method', $data)) {
                $object->setValidationMethod($data['validation_method']);
            }
            if (\array_key_exists('warranty', $data)) {
                $object->setWarranty($this->denormalizer->denormalize($data['warranty'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductWarranty', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('brandName') && null !== $object->getBrandName()) {
                $data['brand_name'] = $object->getBrandName();
            }
            if ($object->isInitialized('bypassSan') && null !== $object->getBypassSan()) {
                $data['bypass_san'] = $object->getBypassSan();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('deliveryTime') && null !== $object->getDeliveryTime()) {
                $data['delivery_time'] = $object->getDeliveryTime();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('encryption') && null !== $object->getEncryption()) {
                $data['encryption'] = $object->getEncryption();
            }
            if ($object->isInitialized('freeRefundPeriod') && null !== $object->getFreeRefundPeriod()) {
                $data['free_refund_period'] = $object->getFreeRefundPeriod();
            }
            if ($object->isInitialized('freeReissuePeriod') && null !== $object->getFreeReissuePeriod()) {
                $data['free_reissue_period'] = $object->getFreeReissuePeriod();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('includedDomainsCount') && null !== $object->getIncludedDomainsCount()) {
                $data['included_domains_count'] = $object->getIncludedDomainsCount();
            }
            if ($object->isInitialized('isExtendedValidationSupported') && null !== $object->getIsExtendedValidationSupported()) {
                $data['is_extended_validation_supported'] = $object->getIsExtendedValidationSupported();
            }
            if ($object->isInitialized('isIdnSupported') && null !== $object->getIsIdnSupported()) {
                $data['is_idn_supported'] = $object->getIsIdnSupported();
            }
            if ($object->isInitialized('isMobileSupported') && null !== $object->getIsMobileSupported()) {
                $data['is_mobile_supported'] = $object->getIsMobileSupported();
            }
            if ($object->isInitialized('isSgcSupported') && null !== $object->getIsSgcSupported()) {
                $data['is_sgc_supported'] = $object->getIsSgcSupported();
            }
            if ($object->isInitialized('isWildcardMultidomainSupported') && null !== $object->getIsWildcardMultidomainSupported()) {
                $data['is_wildcard_multidomain_supported'] = $object->getIsWildcardMultidomainSupported();
            }
            if ($object->isInitialized('isWildcardSupported') && null !== $object->getIsWildcardSupported()) {
                $data['is_wildcard_supported'] = $object->getIsWildcardSupported();
            }
            if ($object->isInitialized('levelPrices') && null !== $object->getLevelPrices()) {
                $values = [];
                foreach ($object->getLevelPrices() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['level_prices'] = $values;
            }
            if ($object->isInitialized('maxDomains') && null !== $object->getMaxDomains()) {
                $data['max_domains'] = $object->getMaxDomains();
            }
            if ($object->isInitialized('maxPeriod') && null !== $object->getMaxPeriod()) {
                $data['max_period'] = $object->getMaxPeriod();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('numberOfDomains') && null !== $object->getNumberOfDomains()) {
                $data['number_of_domains'] = $object->getNumberOfDomains();
            }
            if ($object->isInitialized('orderModule') && null !== $object->getOrderModule()) {
                $data['order_module'] = $object->getOrderModule();
            }
            if ($object->isInitialized('prices') && null !== $object->getPrices()) {
                $values_1 = [];
                foreach ($object->getPrices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['prices'] = $values_1;
            }
            if ($object->isInitialized('root') && null !== $object->getRoot()) {
                $data['root'] = $object->getRoot();
            }
            if ($object->isInitialized('subCategory') && null !== $object->getSubCategory()) {
                $data['sub_category'] = $object->getSubCategory();
            }
            if ($object->isInitialized('supportedSoftware') && null !== $object->getSupportedSoftware()) {
                $values_2 = [];
                foreach ($object->getSupportedSoftware() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['supported_software'] = $values_2;
            }
            if ($object->isInitialized('validationMethod') && null !== $object->getValidationMethod()) {
                $data['validation_method'] = $object->getValidationMethod();
            }
            if ($object->isInitialized('warranty') && null !== $object->getWarranty()) {
                $data['warranty'] = $this->normalizer->normalize($object->getWarranty(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ProductSslProduct' => false];
        }
    }
} else {
    class ProductSslProductNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProduct';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ProductSslProduct';
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
            $object = new \Rouda\OpenProviderAPI\Model\ProductSslProduct();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand_name', $data)) {
                $object->setBrandName($data['brand_name']);
            }
            if (\array_key_exists('bypass_san', $data)) {
                $object->setBypassSan($data['bypass_san']);
            }
            if (\array_key_exists('category', $data)) {
                $object->setCategory($data['category']);
            }
            if (\array_key_exists('delivery_time', $data)) {
                $object->setDeliveryTime($data['delivery_time']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('encryption', $data)) {
                $object->setEncryption($data['encryption']);
            }
            if (\array_key_exists('free_refund_period', $data)) {
                $object->setFreeRefundPeriod($data['free_refund_period']);
            }
            if (\array_key_exists('free_reissue_period', $data)) {
                $object->setFreeReissuePeriod($data['free_reissue_period']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('included_domains_count', $data)) {
                $object->setIncludedDomainsCount($data['included_domains_count']);
            }
            if (\array_key_exists('is_extended_validation_supported', $data)) {
                $object->setIsExtendedValidationSupported($data['is_extended_validation_supported']);
            }
            if (\array_key_exists('is_idn_supported', $data)) {
                $object->setIsIdnSupported($data['is_idn_supported']);
            }
            if (\array_key_exists('is_mobile_supported', $data)) {
                $object->setIsMobileSupported($data['is_mobile_supported']);
            }
            if (\array_key_exists('is_sgc_supported', $data)) {
                $object->setIsSgcSupported($data['is_sgc_supported']);
            }
            if (\array_key_exists('is_wildcard_multidomain_supported', $data)) {
                $object->setIsWildcardMultidomainSupported($data['is_wildcard_multidomain_supported']);
            }
            if (\array_key_exists('is_wildcard_supported', $data)) {
                $object->setIsWildcardSupported($data['is_wildcard_supported']);
            }
            if (\array_key_exists('level_prices', $data)) {
                $values = [];
                foreach ($data['level_prices'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductLevelPrices', 'json', $context);
                }
                $object->setLevelPrices($values);
            }
            if (\array_key_exists('max_domains', $data)) {
                $object->setMaxDomains($data['max_domains']);
            }
            if (\array_key_exists('max_period', $data)) {
                $object->setMaxPeriod($data['max_period']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
            }
            if (\array_key_exists('number_of_domains', $data)) {
                $object->setNumberOfDomains($data['number_of_domains']);
            }
            if (\array_key_exists('order_module', $data)) {
                $object->setOrderModule($data['order_module']);
            }
            if (\array_key_exists('prices', $data)) {
                $values_1 = [];
                foreach ($data['prices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductPrices', 'json', $context);
                }
                $object->setPrices($values_1);
            }
            if (\array_key_exists('root', $data)) {
                $object->setRoot($data['root']);
            }
            if (\array_key_exists('sub_category', $data)) {
                $object->setSubCategory($data['sub_category']);
            }
            if (\array_key_exists('supported_software', $data)) {
                $values_2 = [];
                foreach ($data['supported_software'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductSupportedSoftware', 'json', $context);
                }
                $object->setSupportedSoftware($values_2);
            }
            if (\array_key_exists('validation_method', $data)) {
                $object->setValidationMethod($data['validation_method']);
            }
            if (\array_key_exists('warranty', $data)) {
                $object->setWarranty($this->denormalizer->denormalize($data['warranty'], 'Rouda\\OpenProviderAPI\\Model\\ProductSslProductWarranty', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('brandName') && null !== $object->getBrandName()) {
                $data['brand_name'] = $object->getBrandName();
            }
            if ($object->isInitialized('bypassSan') && null !== $object->getBypassSan()) {
                $data['bypass_san'] = $object->getBypassSan();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('deliveryTime') && null !== $object->getDeliveryTime()) {
                $data['delivery_time'] = $object->getDeliveryTime();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('encryption') && null !== $object->getEncryption()) {
                $data['encryption'] = $object->getEncryption();
            }
            if ($object->isInitialized('freeRefundPeriod') && null !== $object->getFreeRefundPeriod()) {
                $data['free_refund_period'] = $object->getFreeRefundPeriod();
            }
            if ($object->isInitialized('freeReissuePeriod') && null !== $object->getFreeReissuePeriod()) {
                $data['free_reissue_period'] = $object->getFreeReissuePeriod();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('includedDomainsCount') && null !== $object->getIncludedDomainsCount()) {
                $data['included_domains_count'] = $object->getIncludedDomainsCount();
            }
            if ($object->isInitialized('isExtendedValidationSupported') && null !== $object->getIsExtendedValidationSupported()) {
                $data['is_extended_validation_supported'] = $object->getIsExtendedValidationSupported();
            }
            if ($object->isInitialized('isIdnSupported') && null !== $object->getIsIdnSupported()) {
                $data['is_idn_supported'] = $object->getIsIdnSupported();
            }
            if ($object->isInitialized('isMobileSupported') && null !== $object->getIsMobileSupported()) {
                $data['is_mobile_supported'] = $object->getIsMobileSupported();
            }
            if ($object->isInitialized('isSgcSupported') && null !== $object->getIsSgcSupported()) {
                $data['is_sgc_supported'] = $object->getIsSgcSupported();
            }
            if ($object->isInitialized('isWildcardMultidomainSupported') && null !== $object->getIsWildcardMultidomainSupported()) {
                $data['is_wildcard_multidomain_supported'] = $object->getIsWildcardMultidomainSupported();
            }
            if ($object->isInitialized('isWildcardSupported') && null !== $object->getIsWildcardSupported()) {
                $data['is_wildcard_supported'] = $object->getIsWildcardSupported();
            }
            if ($object->isInitialized('levelPrices') && null !== $object->getLevelPrices()) {
                $values = [];
                foreach ($object->getLevelPrices() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['level_prices'] = $values;
            }
            if ($object->isInitialized('maxDomains') && null !== $object->getMaxDomains()) {
                $data['max_domains'] = $object->getMaxDomains();
            }
            if ($object->isInitialized('maxPeriod') && null !== $object->getMaxPeriod()) {
                $data['max_period'] = $object->getMaxPeriod();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('numberOfDomains') && null !== $object->getNumberOfDomains()) {
                $data['number_of_domains'] = $object->getNumberOfDomains();
            }
            if ($object->isInitialized('orderModule') && null !== $object->getOrderModule()) {
                $data['order_module'] = $object->getOrderModule();
            }
            if ($object->isInitialized('prices') && null !== $object->getPrices()) {
                $values_1 = [];
                foreach ($object->getPrices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['prices'] = $values_1;
            }
            if ($object->isInitialized('root') && null !== $object->getRoot()) {
                $data['root'] = $object->getRoot();
            }
            if ($object->isInitialized('subCategory') && null !== $object->getSubCategory()) {
                $data['sub_category'] = $object->getSubCategory();
            }
            if ($object->isInitialized('supportedSoftware') && null !== $object->getSupportedSoftware()) {
                $values_2 = [];
                foreach ($object->getSupportedSoftware() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['supported_software'] = $values_2;
            }
            if ($object->isInitialized('validationMethod') && null !== $object->getValidationMethod()) {
                $data['validation_method'] = $object->getValidationMethod();
            }
            if ($object->isInitialized('warranty') && null !== $object->getWarranty()) {
                $data['warranty'] = $this->normalizer->normalize($object->getWarranty(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\ProductSslProduct' => false];
        }
    }
}