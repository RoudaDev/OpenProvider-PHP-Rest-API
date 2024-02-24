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
    class OrderCreateOrderRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderCreateOrderRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderCreateOrderRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\OrderCreateOrderRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('approver_email', $data)) {
                $object->setApproverEmail($data['approver_email']);
            }
            if (\array_key_exists('autorenew', $data)) {
                $object->setAutorenew($data['autorenew']);
            }
            if (\array_key_exists('csr', $data)) {
                $object->setCsr($data['csr']);
            }
            if (\array_key_exists('domain_amount', $data)) {
                $object->setDomainAmount($data['domain_amount']);
            }
            if (\array_key_exists('domain_validation_methods', $data)) {
                $values = [];
                foreach ($data['domain_validation_methods'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
                }
                $object->setDomainValidationMethods($values);
            }
            if (\array_key_exists('enable_dns_automation', $data)) {
                $object->setEnableDnsAutomation($data['enable_dns_automation']);
            }
            if (\array_key_exists('host_names', $data)) {
                $values_1 = [];
                foreach ($data['host_names'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setHostNames($values_1);
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
            if (\array_key_exists('signature_hash_algorithm', $data)) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            if (\array_key_exists('software_id', $data)) {
                $object->setSoftwareId($data['software_id']);
            }
            if (\array_key_exists('start_provision', $data)) {
                $object->setStartProvision($data['start_provision']);
            }
            if (\array_key_exists('technical_handle', $data)) {
                $object->setTechnicalHandle($data['technical_handle']);
            }
            if (\array_key_exists('wildcard_domain_amount', $data)) {
                $object->setWildcardDomainAmount($data['wildcard_domain_amount']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('approverEmail') && null !== $object->getApproverEmail()) {
                $data['approver_email'] = $object->getApproverEmail();
            }
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('domainAmount') && null !== $object->getDomainAmount()) {
                $data['domain_amount'] = $object->getDomainAmount();
            }
            if ($object->isInitialized('domainValidationMethods') && null !== $object->getDomainValidationMethods()) {
                $values = [];
                foreach ($object->getDomainValidationMethods() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['domain_validation_methods'] = $values;
            }
            if ($object->isInitialized('enableDnsAutomation') && null !== $object->getEnableDnsAutomation()) {
                $data['enable_dns_automation'] = $object->getEnableDnsAutomation();
            }
            if ($object->isInitialized('hostNames') && null !== $object->getHostNames()) {
                $values_1 = [];
                foreach ($object->getHostNames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['host_names'] = $values_1;
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
            if ($object->isInitialized('signatureHashAlgorithm') && null !== $object->getSignatureHashAlgorithm()) {
                $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
            }
            if ($object->isInitialized('softwareId') && null !== $object->getSoftwareId()) {
                $data['software_id'] = $object->getSoftwareId();
            }
            if ($object->isInitialized('startProvision') && null !== $object->getStartProvision()) {
                $data['start_provision'] = $object->getStartProvision();
            }
            if ($object->isInitialized('technicalHandle') && null !== $object->getTechnicalHandle()) {
                $data['technical_handle'] = $object->getTechnicalHandle();
            }
            if ($object->isInitialized('wildcardDomainAmount') && null !== $object->getWildcardDomainAmount()) {
                $data['wildcard_domain_amount'] = $object->getWildcardDomainAmount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderCreateOrderRequest' => false];
        }
    }
} else {
    class OrderCreateOrderRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderCreateOrderRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderCreateOrderRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\OrderCreateOrderRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('approver_email', $data)) {
                $object->setApproverEmail($data['approver_email']);
            }
            if (\array_key_exists('autorenew', $data)) {
                $object->setAutorenew($data['autorenew']);
            }
            if (\array_key_exists('csr', $data)) {
                $object->setCsr($data['csr']);
            }
            if (\array_key_exists('domain_amount', $data)) {
                $object->setDomainAmount($data['domain_amount']);
            }
            if (\array_key_exists('domain_validation_methods', $data)) {
                $values = [];
                foreach ($data['domain_validation_methods'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
                }
                $object->setDomainValidationMethods($values);
            }
            if (\array_key_exists('enable_dns_automation', $data)) {
                $object->setEnableDnsAutomation($data['enable_dns_automation']);
            }
            if (\array_key_exists('host_names', $data)) {
                $values_1 = [];
                foreach ($data['host_names'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setHostNames($values_1);
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
            if (\array_key_exists('signature_hash_algorithm', $data)) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            if (\array_key_exists('software_id', $data)) {
                $object->setSoftwareId($data['software_id']);
            }
            if (\array_key_exists('start_provision', $data)) {
                $object->setStartProvision($data['start_provision']);
            }
            if (\array_key_exists('technical_handle', $data)) {
                $object->setTechnicalHandle($data['technical_handle']);
            }
            if (\array_key_exists('wildcard_domain_amount', $data)) {
                $object->setWildcardDomainAmount($data['wildcard_domain_amount']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('approverEmail') && null !== $object->getApproverEmail()) {
                $data['approver_email'] = $object->getApproverEmail();
            }
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('domainAmount') && null !== $object->getDomainAmount()) {
                $data['domain_amount'] = $object->getDomainAmount();
            }
            if ($object->isInitialized('domainValidationMethods') && null !== $object->getDomainValidationMethods()) {
                $values = [];
                foreach ($object->getDomainValidationMethods() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['domain_validation_methods'] = $values;
            }
            if ($object->isInitialized('enableDnsAutomation') && null !== $object->getEnableDnsAutomation()) {
                $data['enable_dns_automation'] = $object->getEnableDnsAutomation();
            }
            if ($object->isInitialized('hostNames') && null !== $object->getHostNames()) {
                $values_1 = [];
                foreach ($object->getHostNames() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['host_names'] = $values_1;
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
            if ($object->isInitialized('signatureHashAlgorithm') && null !== $object->getSignatureHashAlgorithm()) {
                $data['signature_hash_algorithm'] = $object->getSignatureHashAlgorithm();
            }
            if ($object->isInitialized('softwareId') && null !== $object->getSoftwareId()) {
                $data['software_id'] = $object->getSoftwareId();
            }
            if ($object->isInitialized('startProvision') && null !== $object->getStartProvision()) {
                $data['start_provision'] = $object->getStartProvision();
            }
            if ($object->isInitialized('technicalHandle') && null !== $object->getTechnicalHandle()) {
                $data['technical_handle'] = $object->getTechnicalHandle();
            }
            if ($object->isInitialized('wildcardDomainAmount') && null !== $object->getWildcardDomainAmount()) {
                $data['wildcard_domain_amount'] = $object->getWildcardDomainAmount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderCreateOrderRequest' => false];
        }
    }
}