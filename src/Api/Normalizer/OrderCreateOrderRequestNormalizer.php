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
    class OrderCreateOrderRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\OrderCreateOrderRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\OrderCreateOrderRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\OrderCreateOrderRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('approver_email', $data) && $data['approver_email'] !== null) {
                $object->setApproverEmail($data['approver_email']);
            }
            elseif (\array_key_exists('approver_email', $data) && $data['approver_email'] === null) {
                $object->setApproverEmail(null);
            }
            if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
                $object->setAutorenew($data['autorenew']);
            }
            elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
                $object->setAutorenew(null);
            }
            if (\array_key_exists('csr', $data) && $data['csr'] !== null) {
                $object->setCsr($data['csr']);
            }
            elseif (\array_key_exists('csr', $data) && $data['csr'] === null) {
                $object->setCsr(null);
            }
            if (\array_key_exists('domain_amount', $data) && $data['domain_amount'] !== null) {
                $object->setDomainAmount($data['domain_amount']);
            }
            elseif (\array_key_exists('domain_amount', $data) && $data['domain_amount'] === null) {
                $object->setDomainAmount(null);
            }
            if (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] !== null) {
                $values = [];
                foreach ($data['domain_validation_methods'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
                }
                $object->setDomainValidationMethods($values);
            }
            elseif (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] === null) {
                $object->setDomainValidationMethods(null);
            }
            if (\array_key_exists('enable_dns_automation', $data) && $data['enable_dns_automation'] !== null) {
                $object->setEnableDnsAutomation($data['enable_dns_automation']);
            }
            elseif (\array_key_exists('enable_dns_automation', $data) && $data['enable_dns_automation'] === null) {
                $object->setEnableDnsAutomation(null);
            }
            if (\array_key_exists('host_names', $data) && $data['host_names'] !== null) {
                $values_1 = [];
                foreach ($data['host_names'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setHostNames($values_1);
            }
            elseif (\array_key_exists('host_names', $data) && $data['host_names'] === null) {
                $object->setHostNames(null);
            }
            if (\array_key_exists('organization_handle', $data) && $data['organization_handle'] !== null) {
                $object->setOrganizationHandle($data['organization_handle']);
            }
            elseif (\array_key_exists('organization_handle', $data) && $data['organization_handle'] === null) {
                $object->setOrganizationHandle(null);
            }
            if (\array_key_exists('period', $data) && $data['period'] !== null) {
                $object->setPeriod($data['period']);
            }
            elseif (\array_key_exists('period', $data) && $data['period'] === null) {
                $object->setPeriod(null);
            }
            if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
                $object->setProductId($data['product_id']);
            }
            elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
                $object->setProductId(null);
            }
            if (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] !== null) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            elseif (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] === null) {
                $object->setSignatureHashAlgorithm(null);
            }
            if (\array_key_exists('software_id', $data) && $data['software_id'] !== null) {
                $object->setSoftwareId($data['software_id']);
            }
            elseif (\array_key_exists('software_id', $data) && $data['software_id'] === null) {
                $object->setSoftwareId(null);
            }
            if (\array_key_exists('start_provision', $data) && $data['start_provision'] !== null) {
                $object->setStartProvision($data['start_provision']);
            }
            elseif (\array_key_exists('start_provision', $data) && $data['start_provision'] === null) {
                $object->setStartProvision(null);
            }
            if (\array_key_exists('technical_handle', $data) && $data['technical_handle'] !== null) {
                $object->setTechnicalHandle($data['technical_handle']);
            }
            elseif (\array_key_exists('technical_handle', $data) && $data['technical_handle'] === null) {
                $object->setTechnicalHandle(null);
            }
            if (\array_key_exists('wildcard_domain_amount', $data) && $data['wildcard_domain_amount'] !== null) {
                $object->setWildcardDomainAmount($data['wildcard_domain_amount']);
            }
            elseif (\array_key_exists('wildcard_domain_amount', $data) && $data['wildcard_domain_amount'] === null) {
                $object->setWildcardDomainAmount(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\OrderCreateOrderRequest' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\OrderCreateOrderRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\OrderCreateOrderRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\OrderCreateOrderRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('approver_email', $data) && $data['approver_email'] !== null) {
                $object->setApproverEmail($data['approver_email']);
            }
            elseif (\array_key_exists('approver_email', $data) && $data['approver_email'] === null) {
                $object->setApproverEmail(null);
            }
            if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
                $object->setAutorenew($data['autorenew']);
            }
            elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
                $object->setAutorenew(null);
            }
            if (\array_key_exists('csr', $data) && $data['csr'] !== null) {
                $object->setCsr($data['csr']);
            }
            elseif (\array_key_exists('csr', $data) && $data['csr'] === null) {
                $object->setCsr(null);
            }
            if (\array_key_exists('domain_amount', $data) && $data['domain_amount'] !== null) {
                $object->setDomainAmount($data['domain_amount']);
            }
            elseif (\array_key_exists('domain_amount', $data) && $data['domain_amount'] === null) {
                $object->setDomainAmount(null);
            }
            if (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] !== null) {
                $values = [];
                foreach ($data['domain_validation_methods'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderDomainValidationMethods', 'json', $context);
                }
                $object->setDomainValidationMethods($values);
            }
            elseif (\array_key_exists('domain_validation_methods', $data) && $data['domain_validation_methods'] === null) {
                $object->setDomainValidationMethods(null);
            }
            if (\array_key_exists('enable_dns_automation', $data) && $data['enable_dns_automation'] !== null) {
                $object->setEnableDnsAutomation($data['enable_dns_automation']);
            }
            elseif (\array_key_exists('enable_dns_automation', $data) && $data['enable_dns_automation'] === null) {
                $object->setEnableDnsAutomation(null);
            }
            if (\array_key_exists('host_names', $data) && $data['host_names'] !== null) {
                $values_1 = [];
                foreach ($data['host_names'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setHostNames($values_1);
            }
            elseif (\array_key_exists('host_names', $data) && $data['host_names'] === null) {
                $object->setHostNames(null);
            }
            if (\array_key_exists('organization_handle', $data) && $data['organization_handle'] !== null) {
                $object->setOrganizationHandle($data['organization_handle']);
            }
            elseif (\array_key_exists('organization_handle', $data) && $data['organization_handle'] === null) {
                $object->setOrganizationHandle(null);
            }
            if (\array_key_exists('period', $data) && $data['period'] !== null) {
                $object->setPeriod($data['period']);
            }
            elseif (\array_key_exists('period', $data) && $data['period'] === null) {
                $object->setPeriod(null);
            }
            if (\array_key_exists('product_id', $data) && $data['product_id'] !== null) {
                $object->setProductId($data['product_id']);
            }
            elseif (\array_key_exists('product_id', $data) && $data['product_id'] === null) {
                $object->setProductId(null);
            }
            if (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] !== null) {
                $object->setSignatureHashAlgorithm($data['signature_hash_algorithm']);
            }
            elseif (\array_key_exists('signature_hash_algorithm', $data) && $data['signature_hash_algorithm'] === null) {
                $object->setSignatureHashAlgorithm(null);
            }
            if (\array_key_exists('software_id', $data) && $data['software_id'] !== null) {
                $object->setSoftwareId($data['software_id']);
            }
            elseif (\array_key_exists('software_id', $data) && $data['software_id'] === null) {
                $object->setSoftwareId(null);
            }
            if (\array_key_exists('start_provision', $data) && $data['start_provision'] !== null) {
                $object->setStartProvision($data['start_provision']);
            }
            elseif (\array_key_exists('start_provision', $data) && $data['start_provision'] === null) {
                $object->setStartProvision(null);
            }
            if (\array_key_exists('technical_handle', $data) && $data['technical_handle'] !== null) {
                $object->setTechnicalHandle($data['technical_handle']);
            }
            elseif (\array_key_exists('technical_handle', $data) && $data['technical_handle'] === null) {
                $object->setTechnicalHandle(null);
            }
            if (\array_key_exists('wildcard_domain_amount', $data) && $data['wildcard_domain_amount'] !== null) {
                $object->setWildcardDomainAmount($data['wildcard_domain_amount']);
            }
            elseif (\array_key_exists('wildcard_domain_amount', $data) && $data['wildcard_domain_amount'] === null) {
                $object->setWildcardDomainAmount(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\OrderCreateOrderRequest' => false];
        }
    }
}