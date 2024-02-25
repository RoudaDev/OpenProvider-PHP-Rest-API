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
    class DomainTransferDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferDomainRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainTransferDomainRequest();
            if (\array_key_exists('accept_premium_fee', $data) && \is_int($data['accept_premium_fee'])) {
                $data['accept_premium_fee'] = (double) $data['accept_premium_fee'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accept_premium_fee', $data) && $data['accept_premium_fee'] !== null) {
                $object->setAcceptPremiumFee($data['accept_premium_fee']);
            }
            elseif (\array_key_exists('accept_premium_fee', $data) && $data['accept_premium_fee'] === null) {
                $object->setAcceptPremiumFee(null);
            }
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('admin_handle', $data) && $data['admin_handle'] !== null) {
                $object->setAdminHandle($data['admin_handle']);
            }
            elseif (\array_key_exists('admin_handle', $data) && $data['admin_handle'] === null) {
                $object->setAdminHandle(null);
            }
            if (\array_key_exists('at', $data) && $data['at'] !== null) {
                $object->setAt($data['at']);
            }
            elseif (\array_key_exists('at', $data) && $data['at'] === null) {
                $object->setAt(null);
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
                $object->setAutorenew($data['autorenew']);
            }
            elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
                $object->setAutorenew(null);
            }
            if (\array_key_exists('billing_handle', $data) && $data['billing_handle'] !== null) {
                $object->setBillingHandle($data['billing_handle']);
            }
            elseif (\array_key_exists('billing_handle', $data) && $data['billing_handle'] === null) {
                $object->setBillingHandle(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] !== null) {
                $values = [];
                foreach ($data['dnssec_keys'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\DomainDnssecKey', 'json', $context);
                }
                $object->setDnssecKeys($values);
            }
            elseif (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] === null) {
                $object->setDnssecKeys(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProvider\\Api\\Model\\DomainDomain', 'json', $context));
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] !== null) {
                $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
            }
            elseif (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] === null) {
                $object->setIsDnssecEnabled(null);
            }
            if (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] !== null) {
                $object->setIsPrivateWhoisEnabled($data['is_private_whois_enabled']);
            }
            elseif (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] === null) {
                $object->setIsPrivateWhoisEnabled(null);
            }
            if (\array_key_exists('name_servers', $data) && $data['name_servers'] !== null) {
                $values_1 = [];
                foreach ($data['name_servers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\DomainNameserver', 'json', $context);
                }
                $object->setNameServers($values_1);
            }
            elseif (\array_key_exists('name_servers', $data) && $data['name_servers'] === null) {
                $object->setNameServers(null);
            }
            if (\array_key_exists('ns_group', $data) && $data['ns_group'] !== null) {
                $object->setNsGroup($data['ns_group']);
            }
            elseif (\array_key_exists('ns_group', $data) && $data['ns_group'] === null) {
                $object->setNsGroup(null);
            }
            if (\array_key_exists('ns_template_id', $data) && $data['ns_template_id'] !== null) {
                $object->setNsTemplateId($data['ns_template_id']);
            }
            elseif (\array_key_exists('ns_template_id', $data) && $data['ns_template_id'] === null) {
                $object->setNsTemplateId(null);
            }
            if (\array_key_exists('ns_template_name', $data) && $data['ns_template_name'] !== null) {
                $object->setNsTemplateName($data['ns_template_name']);
            }
            elseif (\array_key_exists('ns_template_name', $data) && $data['ns_template_name'] === null) {
                $object->setNsTemplateName(null);
            }
            if (\array_key_exists('owner_handle', $data) && $data['owner_handle'] !== null) {
                $object->setOwnerHandle($data['owner_handle']);
            }
            elseif (\array_key_exists('owner_handle', $data) && $data['owner_handle'] === null) {
                $object->setOwnerHandle(null);
            }
            if (\array_key_exists('promo_code', $data) && $data['promo_code'] !== null) {
                $object->setPromoCode($data['promo_code']);
            }
            elseif (\array_key_exists('promo_code', $data) && $data['promo_code'] === null) {
                $object->setPromoCode(null);
            }
            if (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] !== null) {
                $object->setResellerHandle($data['reseller_handle']);
            }
            elseif (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] === null) {
                $object->setResellerHandle(null);
            }
            if (\array_key_exists('roid', $data) && $data['roid'] !== null) {
                $object->setRoid($data['roid']);
            }
            elseif (\array_key_exists('roid', $data) && $data['roid'] === null) {
                $object->setRoid(null);
            }
            if (\array_key_exists('tech_handle', $data) && $data['tech_handle'] !== null) {
                $object->setTechHandle($data['tech_handle']);
            }
            elseif (\array_key_exists('tech_handle', $data) && $data['tech_handle'] === null) {
                $object->setTechHandle(null);
            }
            if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
                $object->setUnit($data['unit']);
            }
            elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
                $object->setUnit(null);
            }
            if (\array_key_exists('use_domicile', $data) && $data['use_domicile'] !== null) {
                $object->setUseDomicile($data['use_domicile']);
            }
            elseif (\array_key_exists('use_domicile', $data) && $data['use_domicile'] === null) {
                $object->setUseDomicile(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('acceptPremiumFee') && null !== $object->getAcceptPremiumFee()) {
                $data['accept_premium_fee'] = $object->getAcceptPremiumFee();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('adminHandle') && null !== $object->getAdminHandle()) {
                $data['admin_handle'] = $object->getAdminHandle();
            }
            if ($object->isInitialized('at') && null !== $object->getAt()) {
                $data['at'] = $object->getAt();
            }
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('billingHandle') && null !== $object->getBillingHandle()) {
                $data['billing_handle'] = $object->getBillingHandle();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('dnssecKeys') && null !== $object->getDnssecKeys()) {
                $values = [];
                foreach ($object->getDnssecKeys() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['dnssec_keys'] = $values;
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('isDnssecEnabled') && null !== $object->getIsDnssecEnabled()) {
                $data['is_dnssec_enabled'] = $object->getIsDnssecEnabled();
            }
            if ($object->isInitialized('isPrivateWhoisEnabled') && null !== $object->getIsPrivateWhoisEnabled()) {
                $data['is_private_whois_enabled'] = $object->getIsPrivateWhoisEnabled();
            }
            if ($object->isInitialized('nameServers') && null !== $object->getNameServers()) {
                $values_1 = [];
                foreach ($object->getNameServers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['name_servers'] = $values_1;
            }
            if ($object->isInitialized('nsGroup') && null !== $object->getNsGroup()) {
                $data['ns_group'] = $object->getNsGroup();
            }
            if ($object->isInitialized('nsTemplateId') && null !== $object->getNsTemplateId()) {
                $data['ns_template_id'] = $object->getNsTemplateId();
            }
            if ($object->isInitialized('nsTemplateName') && null !== $object->getNsTemplateName()) {
                $data['ns_template_name'] = $object->getNsTemplateName();
            }
            if ($object->isInitialized('ownerHandle') && null !== $object->getOwnerHandle()) {
                $data['owner_handle'] = $object->getOwnerHandle();
            }
            if ($object->isInitialized('promoCode') && null !== $object->getPromoCode()) {
                $data['promo_code'] = $object->getPromoCode();
            }
            if ($object->isInitialized('resellerHandle') && null !== $object->getResellerHandle()) {
                $data['reseller_handle'] = $object->getResellerHandle();
            }
            if ($object->isInitialized('roid') && null !== $object->getRoid()) {
                $data['roid'] = $object->getRoid();
            }
            if ($object->isInitialized('techHandle') && null !== $object->getTechHandle()) {
                $data['tech_handle'] = $object->getTechHandle();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('useDomicile') && null !== $object->getUseDomicile()) {
                $data['use_domicile'] = $object->getUseDomicile();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainTransferDomainRequest' => false];
        }
    }
} else {
    class DomainTransferDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferDomainRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainTransferDomainRequest();
            if (\array_key_exists('accept_premium_fee', $data) && \is_int($data['accept_premium_fee'])) {
                $data['accept_premium_fee'] = (double) $data['accept_premium_fee'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accept_premium_fee', $data) && $data['accept_premium_fee'] !== null) {
                $object->setAcceptPremiumFee($data['accept_premium_fee']);
            }
            elseif (\array_key_exists('accept_premium_fee', $data) && $data['accept_premium_fee'] === null) {
                $object->setAcceptPremiumFee(null);
            }
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('admin_handle', $data) && $data['admin_handle'] !== null) {
                $object->setAdminHandle($data['admin_handle']);
            }
            elseif (\array_key_exists('admin_handle', $data) && $data['admin_handle'] === null) {
                $object->setAdminHandle(null);
            }
            if (\array_key_exists('at', $data) && $data['at'] !== null) {
                $object->setAt($data['at']);
            }
            elseif (\array_key_exists('at', $data) && $data['at'] === null) {
                $object->setAt(null);
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('autorenew', $data) && $data['autorenew'] !== null) {
                $object->setAutorenew($data['autorenew']);
            }
            elseif (\array_key_exists('autorenew', $data) && $data['autorenew'] === null) {
                $object->setAutorenew(null);
            }
            if (\array_key_exists('billing_handle', $data) && $data['billing_handle'] !== null) {
                $object->setBillingHandle($data['billing_handle']);
            }
            elseif (\array_key_exists('billing_handle', $data) && $data['billing_handle'] === null) {
                $object->setBillingHandle(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] !== null) {
                $values = [];
                foreach ($data['dnssec_keys'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\DomainDnssecKey', 'json', $context);
                }
                $object->setDnssecKeys($values);
            }
            elseif (\array_key_exists('dnssec_keys', $data) && $data['dnssec_keys'] === null) {
                $object->setDnssecKeys(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProvider\\Api\\Model\\DomainDomain', 'json', $context));
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] !== null) {
                $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
            }
            elseif (\array_key_exists('is_dnssec_enabled', $data) && $data['is_dnssec_enabled'] === null) {
                $object->setIsDnssecEnabled(null);
            }
            if (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] !== null) {
                $object->setIsPrivateWhoisEnabled($data['is_private_whois_enabled']);
            }
            elseif (\array_key_exists('is_private_whois_enabled', $data) && $data['is_private_whois_enabled'] === null) {
                $object->setIsPrivateWhoisEnabled(null);
            }
            if (\array_key_exists('name_servers', $data) && $data['name_servers'] !== null) {
                $values_1 = [];
                foreach ($data['name_servers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\DomainNameserver', 'json', $context);
                }
                $object->setNameServers($values_1);
            }
            elseif (\array_key_exists('name_servers', $data) && $data['name_servers'] === null) {
                $object->setNameServers(null);
            }
            if (\array_key_exists('ns_group', $data) && $data['ns_group'] !== null) {
                $object->setNsGroup($data['ns_group']);
            }
            elseif (\array_key_exists('ns_group', $data) && $data['ns_group'] === null) {
                $object->setNsGroup(null);
            }
            if (\array_key_exists('ns_template_id', $data) && $data['ns_template_id'] !== null) {
                $object->setNsTemplateId($data['ns_template_id']);
            }
            elseif (\array_key_exists('ns_template_id', $data) && $data['ns_template_id'] === null) {
                $object->setNsTemplateId(null);
            }
            if (\array_key_exists('ns_template_name', $data) && $data['ns_template_name'] !== null) {
                $object->setNsTemplateName($data['ns_template_name']);
            }
            elseif (\array_key_exists('ns_template_name', $data) && $data['ns_template_name'] === null) {
                $object->setNsTemplateName(null);
            }
            if (\array_key_exists('owner_handle', $data) && $data['owner_handle'] !== null) {
                $object->setOwnerHandle($data['owner_handle']);
            }
            elseif (\array_key_exists('owner_handle', $data) && $data['owner_handle'] === null) {
                $object->setOwnerHandle(null);
            }
            if (\array_key_exists('promo_code', $data) && $data['promo_code'] !== null) {
                $object->setPromoCode($data['promo_code']);
            }
            elseif (\array_key_exists('promo_code', $data) && $data['promo_code'] === null) {
                $object->setPromoCode(null);
            }
            if (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] !== null) {
                $object->setResellerHandle($data['reseller_handle']);
            }
            elseif (\array_key_exists('reseller_handle', $data) && $data['reseller_handle'] === null) {
                $object->setResellerHandle(null);
            }
            if (\array_key_exists('roid', $data) && $data['roid'] !== null) {
                $object->setRoid($data['roid']);
            }
            elseif (\array_key_exists('roid', $data) && $data['roid'] === null) {
                $object->setRoid(null);
            }
            if (\array_key_exists('tech_handle', $data) && $data['tech_handle'] !== null) {
                $object->setTechHandle($data['tech_handle']);
            }
            elseif (\array_key_exists('tech_handle', $data) && $data['tech_handle'] === null) {
                $object->setTechHandle(null);
            }
            if (\array_key_exists('unit', $data) && $data['unit'] !== null) {
                $object->setUnit($data['unit']);
            }
            elseif (\array_key_exists('unit', $data) && $data['unit'] === null) {
                $object->setUnit(null);
            }
            if (\array_key_exists('use_domicile', $data) && $data['use_domicile'] !== null) {
                $object->setUseDomicile($data['use_domicile']);
            }
            elseif (\array_key_exists('use_domicile', $data) && $data['use_domicile'] === null) {
                $object->setUseDomicile(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('acceptPremiumFee') && null !== $object->getAcceptPremiumFee()) {
                $data['accept_premium_fee'] = $object->getAcceptPremiumFee();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('adminHandle') && null !== $object->getAdminHandle()) {
                $data['admin_handle'] = $object->getAdminHandle();
            }
            if ($object->isInitialized('at') && null !== $object->getAt()) {
                $data['at'] = $object->getAt();
            }
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('autorenew') && null !== $object->getAutorenew()) {
                $data['autorenew'] = $object->getAutorenew();
            }
            if ($object->isInitialized('billingHandle') && null !== $object->getBillingHandle()) {
                $data['billing_handle'] = $object->getBillingHandle();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('dnssecKeys') && null !== $object->getDnssecKeys()) {
                $values = [];
                foreach ($object->getDnssecKeys() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['dnssec_keys'] = $values;
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('isDnssecEnabled') && null !== $object->getIsDnssecEnabled()) {
                $data['is_dnssec_enabled'] = $object->getIsDnssecEnabled();
            }
            if ($object->isInitialized('isPrivateWhoisEnabled') && null !== $object->getIsPrivateWhoisEnabled()) {
                $data['is_private_whois_enabled'] = $object->getIsPrivateWhoisEnabled();
            }
            if ($object->isInitialized('nameServers') && null !== $object->getNameServers()) {
                $values_1 = [];
                foreach ($object->getNameServers() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['name_servers'] = $values_1;
            }
            if ($object->isInitialized('nsGroup') && null !== $object->getNsGroup()) {
                $data['ns_group'] = $object->getNsGroup();
            }
            if ($object->isInitialized('nsTemplateId') && null !== $object->getNsTemplateId()) {
                $data['ns_template_id'] = $object->getNsTemplateId();
            }
            if ($object->isInitialized('nsTemplateName') && null !== $object->getNsTemplateName()) {
                $data['ns_template_name'] = $object->getNsTemplateName();
            }
            if ($object->isInitialized('ownerHandle') && null !== $object->getOwnerHandle()) {
                $data['owner_handle'] = $object->getOwnerHandle();
            }
            if ($object->isInitialized('promoCode') && null !== $object->getPromoCode()) {
                $data['promo_code'] = $object->getPromoCode();
            }
            if ($object->isInitialized('resellerHandle') && null !== $object->getResellerHandle()) {
                $data['reseller_handle'] = $object->getResellerHandle();
            }
            if ($object->isInitialized('roid') && null !== $object->getRoid()) {
                $data['roid'] = $object->getRoid();
            }
            if ($object->isInitialized('techHandle') && null !== $object->getTechHandle()) {
                $data['tech_handle'] = $object->getTechHandle();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('useDomicile') && null !== $object->getUseDomicile()) {
                $data['use_domicile'] = $object->getUseDomicile();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainTransferDomainRequest' => false];
        }
    }
}