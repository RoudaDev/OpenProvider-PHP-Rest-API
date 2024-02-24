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
    class DomainCreateDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainCreateDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainCreateDomainRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainCreateDomainRequest();
            if (\array_key_exists('accept_eap_fee', $data) && \is_int($data['accept_eap_fee'])) {
                $data['accept_eap_fee'] = (double) $data['accept_eap_fee'];
            }
            if (\array_key_exists('accept_premium_fee', $data) && \is_int($data['accept_premium_fee'])) {
                $data['accept_premium_fee'] = (double) $data['accept_premium_fee'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accept_eap_fee', $data)) {
                $object->setAcceptEapFee($data['accept_eap_fee']);
            }
            if (\array_key_exists('accept_premium_fee', $data)) {
                $object->setAcceptPremiumFee($data['accept_premium_fee']);
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainAdditionalData', 'json', $context));
            }
            if (\array_key_exists('admin_handle', $data)) {
                $object->setAdminHandle($data['admin_handle']);
            }
            if (\array_key_exists('application_mode', $data)) {
                $object->setApplicationMode($data['application_mode']);
            }
            if (\array_key_exists('application_notice_id', $data)) {
                $object->setApplicationNoticeId($data['application_notice_id']);
            }
            if (\array_key_exists('application_smd', $data)) {
                $object->setApplicationSmd($data['application_smd']);
            }
            if (\array_key_exists('auth_code', $data)) {
                $object->setAuthCode($data['auth_code']);
            }
            if (\array_key_exists('autorenew', $data)) {
                $object->setAutorenew($data['autorenew']);
            }
            if (\array_key_exists('billing_handle', $data)) {
                $object->setBillingHandle($data['billing_handle']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('dnssec_keys', $data)) {
                $values = [];
                foreach ($data['dnssec_keys'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey', 'json', $context);
                }
                $object->setDnssecKeys($values);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\DomainDomain', 'json', $context));
            }
            if (\array_key_exists('is_dnssec_enabled', $data)) {
                $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
            }
            if (\array_key_exists('is_easy_dmarc_enabled', $data)) {
                $object->setIsEasyDmarcEnabled($data['is_easy_dmarc_enabled']);
            }
            if (\array_key_exists('is_private_whois_enabled', $data)) {
                $object->setIsPrivateWhoisEnabled($data['is_private_whois_enabled']);
            }
            if (\array_key_exists('is_sectigo_dns_enabled', $data)) {
                $object->setIsSectigoDnsEnabled($data['is_sectigo_dns_enabled']);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data)) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            if (\array_key_exists('name_servers', $data)) {
                $values_1 = [];
                foreach ($data['name_servers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\DomainNameserver', 'json', $context);
                }
                $object->setNameServers($values_1);
            }
            if (\array_key_exists('ns_group', $data)) {
                $object->setNsGroup($data['ns_group']);
            }
            if (\array_key_exists('ns_template_id', $data)) {
                $object->setNsTemplateId($data['ns_template_id']);
            }
            if (\array_key_exists('ns_template_name', $data)) {
                $object->setNsTemplateName($data['ns_template_name']);
            }
            if (\array_key_exists('owner_handle', $data)) {
                $object->setOwnerHandle($data['owner_handle']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('promo_code', $data)) {
                $object->setPromoCode($data['promo_code']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('reseller_handle', $data)) {
                $object->setResellerHandle($data['reseller_handle']);
            }
            if (\array_key_exists('tech_handle', $data)) {
                $object->setTechHandle($data['tech_handle']);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
            }
            if (\array_key_exists('use_domicile', $data)) {
                $object->setUseDomicile($data['use_domicile']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('acceptEapFee') && null !== $object->getAcceptEapFee()) {
                $data['accept_eap_fee'] = $object->getAcceptEapFee();
            }
            if ($object->isInitialized('acceptPremiumFee') && null !== $object->getAcceptPremiumFee()) {
                $data['accept_premium_fee'] = $object->getAcceptPremiumFee();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('adminHandle') && null !== $object->getAdminHandle()) {
                $data['admin_handle'] = $object->getAdminHandle();
            }
            if ($object->isInitialized('applicationMode') && null !== $object->getApplicationMode()) {
                $data['application_mode'] = $object->getApplicationMode();
            }
            if ($object->isInitialized('applicationNoticeId') && null !== $object->getApplicationNoticeId()) {
                $data['application_notice_id'] = $object->getApplicationNoticeId();
            }
            if ($object->isInitialized('applicationSmd') && null !== $object->getApplicationSmd()) {
                $data['application_smd'] = $object->getApplicationSmd();
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
            if ($object->isInitialized('isEasyDmarcEnabled') && null !== $object->getIsEasyDmarcEnabled()) {
                $data['is_easy_dmarc_enabled'] = $object->getIsEasyDmarcEnabled();
            }
            if ($object->isInitialized('isPrivateWhoisEnabled') && null !== $object->getIsPrivateWhoisEnabled()) {
                $data['is_private_whois_enabled'] = $object->getIsPrivateWhoisEnabled();
            }
            if ($object->isInitialized('isSectigoDnsEnabled') && null !== $object->getIsSectigoDnsEnabled()) {
                $data['is_sectigo_dns_enabled'] = $object->getIsSectigoDnsEnabled();
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
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
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('promoCode') && null !== $object->getPromoCode()) {
                $data['promo_code'] = $object->getPromoCode();
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('resellerHandle') && null !== $object->getResellerHandle()) {
                $data['reseller_handle'] = $object->getResellerHandle();
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
            return ['Rouda\\OpenProviderAPI\\Model\\DomainCreateDomainRequest' => false];
        }
    }
} else {
    class DomainCreateDomainRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainCreateDomainRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainCreateDomainRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainCreateDomainRequest();
            if (\array_key_exists('accept_eap_fee', $data) && \is_int($data['accept_eap_fee'])) {
                $data['accept_eap_fee'] = (double) $data['accept_eap_fee'];
            }
            if (\array_key_exists('accept_premium_fee', $data) && \is_int($data['accept_premium_fee'])) {
                $data['accept_premium_fee'] = (double) $data['accept_premium_fee'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('accept_eap_fee', $data)) {
                $object->setAcceptEapFee($data['accept_eap_fee']);
            }
            if (\array_key_exists('accept_premium_fee', $data)) {
                $object->setAcceptPremiumFee($data['accept_premium_fee']);
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainAdditionalData', 'json', $context));
            }
            if (\array_key_exists('admin_handle', $data)) {
                $object->setAdminHandle($data['admin_handle']);
            }
            if (\array_key_exists('application_mode', $data)) {
                $object->setApplicationMode($data['application_mode']);
            }
            if (\array_key_exists('application_notice_id', $data)) {
                $object->setApplicationNoticeId($data['application_notice_id']);
            }
            if (\array_key_exists('application_smd', $data)) {
                $object->setApplicationSmd($data['application_smd']);
            }
            if (\array_key_exists('auth_code', $data)) {
                $object->setAuthCode($data['auth_code']);
            }
            if (\array_key_exists('autorenew', $data)) {
                $object->setAutorenew($data['autorenew']);
            }
            if (\array_key_exists('billing_handle', $data)) {
                $object->setBillingHandle($data['billing_handle']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('dnssec_keys', $data)) {
                $values = [];
                foreach ($data['dnssec_keys'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey', 'json', $context);
                }
                $object->setDnssecKeys($values);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\DomainDomain', 'json', $context));
            }
            if (\array_key_exists('is_dnssec_enabled', $data)) {
                $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
            }
            if (\array_key_exists('is_easy_dmarc_enabled', $data)) {
                $object->setIsEasyDmarcEnabled($data['is_easy_dmarc_enabled']);
            }
            if (\array_key_exists('is_private_whois_enabled', $data)) {
                $object->setIsPrivateWhoisEnabled($data['is_private_whois_enabled']);
            }
            if (\array_key_exists('is_sectigo_dns_enabled', $data)) {
                $object->setIsSectigoDnsEnabled($data['is_sectigo_dns_enabled']);
            }
            if (\array_key_exists('is_spamexperts_enabled', $data)) {
                $object->setIsSpamexpertsEnabled($data['is_spamexperts_enabled']);
            }
            if (\array_key_exists('name_servers', $data)) {
                $values_1 = [];
                foreach ($data['name_servers'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\DomainNameserver', 'json', $context);
                }
                $object->setNameServers($values_1);
            }
            if (\array_key_exists('ns_group', $data)) {
                $object->setNsGroup($data['ns_group']);
            }
            if (\array_key_exists('ns_template_id', $data)) {
                $object->setNsTemplateId($data['ns_template_id']);
            }
            if (\array_key_exists('ns_template_name', $data)) {
                $object->setNsTemplateName($data['ns_template_name']);
            }
            if (\array_key_exists('owner_handle', $data)) {
                $object->setOwnerHandle($data['owner_handle']);
            }
            if (\array_key_exists('period', $data)) {
                $object->setPeriod($data['period']);
            }
            if (\array_key_exists('promo_code', $data)) {
                $object->setPromoCode($data['promo_code']);
            }
            if (\array_key_exists('provider', $data)) {
                $object->setProvider($data['provider']);
            }
            if (\array_key_exists('reseller_handle', $data)) {
                $object->setResellerHandle($data['reseller_handle']);
            }
            if (\array_key_exists('tech_handle', $data)) {
                $object->setTechHandle($data['tech_handle']);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
            }
            if (\array_key_exists('use_domicile', $data)) {
                $object->setUseDomicile($data['use_domicile']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('acceptEapFee') && null !== $object->getAcceptEapFee()) {
                $data['accept_eap_fee'] = $object->getAcceptEapFee();
            }
            if ($object->isInitialized('acceptPremiumFee') && null !== $object->getAcceptPremiumFee()) {
                $data['accept_premium_fee'] = $object->getAcceptPremiumFee();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('adminHandle') && null !== $object->getAdminHandle()) {
                $data['admin_handle'] = $object->getAdminHandle();
            }
            if ($object->isInitialized('applicationMode') && null !== $object->getApplicationMode()) {
                $data['application_mode'] = $object->getApplicationMode();
            }
            if ($object->isInitialized('applicationNoticeId') && null !== $object->getApplicationNoticeId()) {
                $data['application_notice_id'] = $object->getApplicationNoticeId();
            }
            if ($object->isInitialized('applicationSmd') && null !== $object->getApplicationSmd()) {
                $data['application_smd'] = $object->getApplicationSmd();
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
            if ($object->isInitialized('isEasyDmarcEnabled') && null !== $object->getIsEasyDmarcEnabled()) {
                $data['is_easy_dmarc_enabled'] = $object->getIsEasyDmarcEnabled();
            }
            if ($object->isInitialized('isPrivateWhoisEnabled') && null !== $object->getIsPrivateWhoisEnabled()) {
                $data['is_private_whois_enabled'] = $object->getIsPrivateWhoisEnabled();
            }
            if ($object->isInitialized('isSectigoDnsEnabled') && null !== $object->getIsSectigoDnsEnabled()) {
                $data['is_sectigo_dns_enabled'] = $object->getIsSectigoDnsEnabled();
            }
            if ($object->isInitialized('isSpamexpertsEnabled') && null !== $object->getIsSpamexpertsEnabled()) {
                $data['is_spamexperts_enabled'] = $object->getIsSpamexpertsEnabled();
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
            if ($object->isInitialized('period') && null !== $object->getPeriod()) {
                $data['period'] = $object->getPeriod();
            }
            if ($object->isInitialized('promoCode') && null !== $object->getPromoCode()) {
                $data['promo_code'] = $object->getPromoCode();
            }
            if ($object->isInitialized('provider') && null !== $object->getProvider()) {
                $data['provider'] = $object->getProvider();
            }
            if ($object->isInitialized('resellerHandle') && null !== $object->getResellerHandle()) {
                $data['reseller_handle'] = $object->getResellerHandle();
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
            return ['Rouda\\OpenProviderAPI\\Model\\DomainCreateDomainRequest' => false];
        }
    }
}