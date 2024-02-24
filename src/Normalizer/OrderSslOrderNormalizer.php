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
    class OrderSslOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrder';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrder';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\OrderSslOrder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_date', $data)) {
                $object->setActiveDate($data['active_date']);
            }
            if (\array_key_exists('additional_data', $data)) {
                $values = [];
                foreach ($data['additional_data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData', 'json', $context);
                }
                $object->setAdditionalData($values);
            }
            if (\array_key_exists('administrative_handle', $data)) {
                $object->setAdministrativeHandle($data['administrative_handle']);
            }
            if (\array_key_exists('autorenew', $data)) {
                $object->setAutorenew($data['autorenew']);
            }
            if (\array_key_exists('billing_handle', $data)) {
                $object->setBillingHandle($data['billing_handle']);
            }
            if (\array_key_exists('brand_name', $data)) {
                $object->setBrandName($data['brand_name']);
            }
            if (\array_key_exists('certificate', $data)) {
                $object->setCertificate($data['certificate']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('csr', $data)) {
                $object->setCsr($data['csr']);
            }
            if (\array_key_exists('domain_validation_methods', $data)) {
                $values_1 = [];
                foreach ($data['domain_validation_methods'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
                }
                $object->setDomainValidationMethods($values_1);
            }
            if (\array_key_exists('domain_validation_statuses', $data)) {
                $object->setDomainValidationStatuses($this->denormalizer->denormalize($data['domain_validation_statuses'], 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses', 'json', $context));
            }
            if (\array_key_exists('email_approver', $data)) {
                $object->setEmailApprover($data['email_approver']);
            }
            if (\array_key_exists('email_reissue', $data)) {
                $object->setEmailReissue($data['email_reissue']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('features', $data)) {
                $object->setFeatures($data['features']);
            }
            if (\array_key_exists('host_names', $data)) {
                $values_2 = [];
                foreach ($data['host_names'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setHostNames($values_2);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('intermediate_certificate', $data)) {
                $object->setIntermediateCertificate($data['intermediate_certificate']);
            }
            if (\array_key_exists('options', $data)) {
                $object->setOptions($this->denormalizer->denormalize($data['options'], 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderOptions', 'json', $context));
            }
            if (\array_key_exists('order_date', $data)) {
                $object->setOrderDate($data['order_date']);
            }
            if (\array_key_exists('order_ends_at', $data)) {
                $object->setOrderEndsAt($data['order_ends_at']);
            }
            if (\array_key_exists('organization_handle', $data)) {
                $object->setOrganizationHandle($data['organization_handle']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('product_id', $data)) {
                $object->setProductId($data['product_id']);
            }
            if (\array_key_exists('product_name', $data)) {
                $object->setProductName($data['product_name']);
            }
            if (\array_key_exists('reissue_at', $data)) {
                $object->setReissueAt($data['reissue_at']);
            }
            if (\array_key_exists('root_certificate', $data)) {
                $object->setRootCertificate($data['root_certificate']);
            }
            if (\array_key_exists('software', $data)) {
                $object->setSoftware($data['software']);
            }
            if (\array_key_exists('sslinhva_order_id', $data)) {
                $object->setSslinhvaOrderId($data['sslinhva_order_id']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('technical_handle', $data)) {
                $object->setTechnicalHandle($data['technical_handle']);
            }
            if (\array_key_exists('validation_method', $data)) {
                $object->setValidationMethod($data['validation_method']);
            }
            if (\array_key_exists('vendor_order_id', $data)) {
                $object->setVendorOrderId($data['vendor_order_id']);
            }
            if (\array_key_exists('vendor_reference_id', $data)) {
                $object->setVendorReferenceId($data['vendor_reference_id']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('activeDate') && null !== $object->getActiveDate()) {
                $data['active_date'] = $object->getActiveDate();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $values = [];
                foreach ($object->getAdditionalData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additional_data'] = $values;
            }
            if ($object->isInitialized('administrativeHandle') && null !== $object->getAdministrativeHandle()) {
                $data['administrative_handle'] = $object->getAdministrativeHandle();
            }
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('billingHandle') && null !== $object->getBillingHandle()) {
                $data['billing_handle'] = $object->getBillingHandle();
            }
            if ($object->isInitialized('brandName') && null !== $object->getBrandName()) {
                $data['brand_name'] = $object->getBrandName();
            }
            if ($object->isInitialized('certificate') && null !== $object->getCertificate()) {
                $data['certificate'] = $object->getCertificate();
            }
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('domainValidationMethods') && null !== $object->getDomainValidationMethods()) {
                $values_1 = [];
                foreach ($object->getDomainValidationMethods() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['domain_validation_methods'] = $values_1;
            }
            if ($object->isInitialized('domainValidationStatuses') && null !== $object->getDomainValidationStatuses()) {
                $data['domain_validation_statuses'] = $this->normalizer->normalize($object->getDomainValidationStatuses(), 'json', $context);
            }
            if ($object->isInitialized('emailApprover') && null !== $object->getEmailApprover()) {
                $data['email_approver'] = $object->getEmailApprover();
            }
            if ($object->isInitialized('emailReissue') && null !== $object->getEmailReissue()) {
                $data['email_reissue'] = $object->getEmailReissue();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('features') && null !== $object->getFeatures()) {
                $data['features'] = $object->getFeatures();
            }
            if ($object->isInitialized('hostNames') && null !== $object->getHostNames()) {
                $values_2 = [];
                foreach ($object->getHostNames() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['host_names'] = $values_2;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('intermediateCertificate') && null !== $object->getIntermediateCertificate()) {
                $data['intermediate_certificate'] = $object->getIntermediateCertificate();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('orderEndsAt') && null !== $object->getOrderEndsAt()) {
                $data['order_ends_at'] = $object->getOrderEndsAt();
            }
            if ($object->isInitialized('organizationHandle') && null !== $object->getOrganizationHandle()) {
                $data['organization_handle'] = $object->getOrganizationHandle();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('productId') && null !== $object->getProductId()) {
                $data['product_id'] = $object->getProductId();
            }
            if ($object->isInitialized('productName') && null !== $object->getProductName()) {
                $data['product_name'] = $object->getProductName();
            }
            if ($object->isInitialized('reissueAt') && null !== $object->getReissueAt()) {
                $data['reissue_at'] = $object->getReissueAt();
            }
            if ($object->isInitialized('rootCertificate') && null !== $object->getRootCertificate()) {
                $data['root_certificate'] = $object->getRootCertificate();
            }
            if ($object->isInitialized('software') && null !== $object->getSoftware()) {
                $data['software'] = $object->getSoftware();
            }
            if ($object->isInitialized('sslinhvaOrderId') && null !== $object->getSslinhvaOrderId()) {
                $data['sslinhva_order_id'] = $object->getSslinhvaOrderId();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('technicalHandle') && null !== $object->getTechnicalHandle()) {
                $data['technical_handle'] = $object->getTechnicalHandle();
            }
            if ($object->isInitialized('validationMethod') && null !== $object->getValidationMethod()) {
                $data['validation_method'] = $object->getValidationMethod();
            }
            if ($object->isInitialized('vendorOrderId') && null !== $object->getVendorOrderId()) {
                $data['vendor_order_id'] = $object->getVendorOrderId();
            }
            if ($object->isInitialized('vendorReferenceId') && null !== $object->getVendorReferenceId()) {
                $data['vendor_reference_id'] = $object->getVendorReferenceId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderSslOrder' => false];
        }
    }
} else {
    class OrderSslOrderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrder';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrder';
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
            $object = new \Rouda\OpenProviderAPI\Model\OrderSslOrder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_date', $data)) {
                $object->setActiveDate($data['active_date']);
            }
            if (\array_key_exists('additional_data', $data)) {
                $values = [];
                foreach ($data['additional_data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData', 'json', $context);
                }
                $object->setAdditionalData($values);
            }
            if (\array_key_exists('administrative_handle', $data)) {
                $object->setAdministrativeHandle($data['administrative_handle']);
            }
            if (\array_key_exists('autorenew', $data)) {
                $object->setAutorenew($data['autorenew']);
            }
            if (\array_key_exists('billing_handle', $data)) {
                $object->setBillingHandle($data['billing_handle']);
            }
            if (\array_key_exists('brand_name', $data)) {
                $object->setBrandName($data['brand_name']);
            }
            if (\array_key_exists('certificate', $data)) {
                $object->setCertificate($data['certificate']);
            }
            if (\array_key_exists('common_name', $data)) {
                $object->setCommonName($data['common_name']);
            }
            if (\array_key_exists('csr', $data)) {
                $object->setCsr($data['csr']);
            }
            if (\array_key_exists('domain_validation_methods', $data)) {
                $values_1 = [];
                foreach ($data['domain_validation_methods'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
                }
                $object->setDomainValidationMethods($values_1);
            }
            if (\array_key_exists('domain_validation_statuses', $data)) {
                $object->setDomainValidationStatuses($this->denormalizer->denormalize($data['domain_validation_statuses'], 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationStatuses', 'json', $context));
            }
            if (\array_key_exists('email_approver', $data)) {
                $object->setEmailApprover($data['email_approver']);
            }
            if (\array_key_exists('email_reissue', $data)) {
                $object->setEmailReissue($data['email_reissue']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('features', $data)) {
                $object->setFeatures($data['features']);
            }
            if (\array_key_exists('host_names', $data)) {
                $values_2 = [];
                foreach ($data['host_names'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setHostNames($values_2);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('intermediate_certificate', $data)) {
                $object->setIntermediateCertificate($data['intermediate_certificate']);
            }
            if (\array_key_exists('options', $data)) {
                $object->setOptions($this->denormalizer->denormalize($data['options'], 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderOptions', 'json', $context));
            }
            if (\array_key_exists('order_date', $data)) {
                $object->setOrderDate($data['order_date']);
            }
            if (\array_key_exists('order_ends_at', $data)) {
                $object->setOrderEndsAt($data['order_ends_at']);
            }
            if (\array_key_exists('organization_handle', $data)) {
                $object->setOrganizationHandle($data['organization_handle']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('product_id', $data)) {
                $object->setProductId($data['product_id']);
            }
            if (\array_key_exists('product_name', $data)) {
                $object->setProductName($data['product_name']);
            }
            if (\array_key_exists('reissue_at', $data)) {
                $object->setReissueAt($data['reissue_at']);
            }
            if (\array_key_exists('root_certificate', $data)) {
                $object->setRootCertificate($data['root_certificate']);
            }
            if (\array_key_exists('software', $data)) {
                $object->setSoftware($data['software']);
            }
            if (\array_key_exists('sslinhva_order_id', $data)) {
                $object->setSslinhvaOrderId($data['sslinhva_order_id']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('technical_handle', $data)) {
                $object->setTechnicalHandle($data['technical_handle']);
            }
            if (\array_key_exists('validation_method', $data)) {
                $object->setValidationMethod($data['validation_method']);
            }
            if (\array_key_exists('vendor_order_id', $data)) {
                $object->setVendorOrderId($data['vendor_order_id']);
            }
            if (\array_key_exists('vendor_reference_id', $data)) {
                $object->setVendorReferenceId($data['vendor_reference_id']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('activeDate') && null !== $object->getActiveDate()) {
                $data['active_date'] = $object->getActiveDate();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $values = [];
                foreach ($object->getAdditionalData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['additional_data'] = $values;
            }
            if ($object->isInitialized('administrativeHandle') && null !== $object->getAdministrativeHandle()) {
                $data['administrative_handle'] = $object->getAdministrativeHandle();
            }
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('billingHandle') && null !== $object->getBillingHandle()) {
                $data['billing_handle'] = $object->getBillingHandle();
            }
            if ($object->isInitialized('brandName') && null !== $object->getBrandName()) {
                $data['brand_name'] = $object->getBrandName();
            }
            if ($object->isInitialized('certificate') && null !== $object->getCertificate()) {
                $data['certificate'] = $object->getCertificate();
            }
            if ($object->isInitialized('commonName') && null !== $object->getCommonName()) {
                $data['common_name'] = $object->getCommonName();
            }
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('domainValidationMethods') && null !== $object->getDomainValidationMethods()) {
                $values_1 = [];
                foreach ($object->getDomainValidationMethods() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['domain_validation_methods'] = $values_1;
            }
            if ($object->isInitialized('domainValidationStatuses') && null !== $object->getDomainValidationStatuses()) {
                $data['domain_validation_statuses'] = $this->normalizer->normalize($object->getDomainValidationStatuses(), 'json', $context);
            }
            if ($object->isInitialized('emailApprover') && null !== $object->getEmailApprover()) {
                $data['email_approver'] = $object->getEmailApprover();
            }
            if ($object->isInitialized('emailReissue') && null !== $object->getEmailReissue()) {
                $data['email_reissue'] = $object->getEmailReissue();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('features') && null !== $object->getFeatures()) {
                $data['features'] = $object->getFeatures();
            }
            if ($object->isInitialized('hostNames') && null !== $object->getHostNames()) {
                $values_2 = [];
                foreach ($object->getHostNames() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['host_names'] = $values_2;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('intermediateCertificate') && null !== $object->getIntermediateCertificate()) {
                $data['intermediate_certificate'] = $object->getIntermediateCertificate();
            }
            if ($object->isInitialized('options') && null !== $object->getOptions()) {
                $data['options'] = $this->normalizer->normalize($object->getOptions(), 'json', $context);
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('orderEndsAt') && null !== $object->getOrderEndsAt()) {
                $data['order_ends_at'] = $object->getOrderEndsAt();
            }
            if ($object->isInitialized('organizationHandle') && null !== $object->getOrganizationHandle()) {
                $data['organization_handle'] = $object->getOrganizationHandle();
            }
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('productId') && null !== $object->getProductId()) {
                $data['product_id'] = $object->getProductId();
            }
            if ($object->isInitialized('productName') && null !== $object->getProductName()) {
                $data['product_name'] = $object->getProductName();
            }
            if ($object->isInitialized('reissueAt') && null !== $object->getReissueAt()) {
                $data['reissue_at'] = $object->getReissueAt();
            }
            if ($object->isInitialized('rootCertificate') && null !== $object->getRootCertificate()) {
                $data['root_certificate'] = $object->getRootCertificate();
            }
            if ($object->isInitialized('software') && null !== $object->getSoftware()) {
                $data['software'] = $object->getSoftware();
            }
            if ($object->isInitialized('sslinhvaOrderId') && null !== $object->getSslinhvaOrderId()) {
                $data['sslinhva_order_id'] = $object->getSslinhvaOrderId();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('technicalHandle') && null !== $object->getTechnicalHandle()) {
                $data['technical_handle'] = $object->getTechnicalHandle();
            }
            if ($object->isInitialized('validationMethod') && null !== $object->getValidationMethod()) {
                $data['validation_method'] = $object->getValidationMethod();
            }
            if ($object->isInitialized('vendorOrderId') && null !== $object->getVendorOrderId()) {
                $data['vendor_order_id'] = $object->getVendorOrderId();
            }
            if ($object->isInitialized('vendorReferenceId') && null !== $object->getVendorReferenceId()) {
                $data['vendor_reference_id'] = $object->getVendorReferenceId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderSslOrder' => false];
        }
    }
}