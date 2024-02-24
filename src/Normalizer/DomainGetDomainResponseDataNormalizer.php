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
    class DomainGetDomainResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainGetDomainResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainGetDomainResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainGetDomainResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abuse_details', $data)) {
                $object->setAbuseDetails($this->denormalizer->denormalize($data['abuse_details'], 'Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails', 'json', $context));
            }
            if (\array_key_exists('active_date', $data)) {
                $object->setActiveDate($data['active_date']);
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainAdditionalData', 'json', $context));
            }
            if (\array_key_exists('admin_handle', $data)) {
                $object->setAdminHandle($data['admin_handle']);
            }
            if (\array_key_exists('api_history', $data)) {
                $values = [];
                foreach ($data['api_history'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\DomainApiHistory', 'json', $context);
                }
                $object->setApiHistory($values);
            }
            if (\array_key_exists('application_id', $data)) {
                $object->setApplicationId($data['application_id']);
            }
            if (\array_key_exists('application_mode', $data)) {
                $object->setApplicationMode($data['application_mode']);
            }
            if (\array_key_exists('application_mode_expiration_date', $data)) {
                $object->setApplicationModeExpirationDate($data['application_mode_expiration_date']);
            }
            if (\array_key_exists('application_mode_title', $data)) {
                $object->setApplicationModeTitle($data['application_mode_title']);
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
            if (\array_key_exists('can_renew', $data)) {
                $object->setCanRenew($data['can_renew']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('comments_last_changed_at', $data)) {
                $object->setCommentsLastChangedAt($data['comments_last_changed_at']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('delete_status', $data)) {
                $object->setDeleteStatus($data['delete_status']);
            }
            if (\array_key_exists('deleted_at', $data)) {
                $object->setDeletedAt($data['deleted_at']);
            }
            if (\array_key_exists('dnssec', $data)) {
                $object->setDnssec($data['dnssec']);
            }
            if (\array_key_exists('dnssec_keys', $data)) {
                $values_1 = [];
                foreach ($data['dnssec_keys'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey', 'json', $context);
                }
                $object->setDnssecKeys($values_1);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\DomainDomain', 'json', $context));
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('hard_quarantine_expiry_date', $data)) {
                $object->setHardQuarantineExpiryDate($data['hard_quarantine_expiry_date']);
            }
            if (\array_key_exists('has_active_sectigo_zone', $data)) {
                $object->setHasActiveSectigoZone($data['has_active_sectigo_zone']);
            }
            if (\array_key_exists('has_history', $data)) {
                $object->setHasHistory($data['has_history']);
            }
            if (\array_key_exists('history', $data)) {
                $values_2 = [];
                foreach ($data['history'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProviderAPI\\Model\\DomainHistory', 'json', $context);
                }
                $object->setHistory($values_2);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('internal_auth_code', $data)) {
                $object->setInternalAuthCode($data['internal_auth_code']);
            }
            if (\array_key_exists('is_abusive', $data)) {
                $object->setIsAbusive($data['is_abusive']);
            }
            if (\array_key_exists('is_client_hold_enabled', $data)) {
                $object->setIsClientHoldEnabled($data['is_client_hold_enabled']);
            }
            if (\array_key_exists('is_deleted', $data)) {
                $object->setIsDeleted($data['is_deleted']);
            }
            if (\array_key_exists('is_dnssec_enabled', $data)) {
                $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
            }
            if (\array_key_exists('is_hosted_whois', $data)) {
                $object->setIsHostedWhois($data['is_hosted_whois']);
            }
            if (\array_key_exists('is_lockable', $data)) {
                $object->setIsLockable($data['is_lockable']);
            }
            if (\array_key_exists('is_locked', $data)) {
                $object->setIsLocked($data['is_locked']);
            }
            if (\array_key_exists('is_parked', $data)) {
                $object->setIsParked($data['is_parked']);
            }
            if (\array_key_exists('is_premium', $data)) {
                $object->setIsPremium($data['is_premium']);
            }
            if (\array_key_exists('is_private_whois_allowed', $data)) {
                $object->setIsPrivateWhoisAllowed($data['is_private_whois_allowed']);
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
            if (\array_key_exists('last_changed', $data)) {
                $object->setLastChanged($data['last_changed']);
            }
            if (\array_key_exists('modify_owner_allowed', $data)) {
                $object->setModifyOwnerAllowed($data['modify_owner_allowed']);
            }
            if (\array_key_exists('name_servers', $data)) {
                $values_3 = [];
                foreach ($data['name_servers'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Rouda\\OpenProviderAPI\\Model\\DomainNameserver', 'json', $context);
                }
                $object->setNameServers($values_3);
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
            if (\array_key_exists('nsgroup_id', $data)) {
                $object->setNsgroupId($data['nsgroup_id']);
            }
            if (\array_key_exists('order_date', $data)) {
                $object->setOrderDate($data['order_date']);
            }
            if (\array_key_exists('owner', $data)) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Rouda\\OpenProviderAPI\\Model\\DomainOwner', 'json', $context));
            }
            if (\array_key_exists('owner_company_name', $data)) {
                $object->setOwnerCompanyName($data['owner_company_name']);
            }
            if (\array_key_exists('owner_handle', $data)) {
                $object->setOwnerHandle($data['owner_handle']);
            }
            if (\array_key_exists('quarantine_expiration_date', $data)) {
                $object->setQuarantineExpirationDate($data['quarantine_expiration_date']);
            }
            if (\array_key_exists('registry_expiration_date', $data)) {
                $object->setRegistryExpirationDate($data['registry_expiration_date']);
            }
            if (\array_key_exists('registry_statuses', $data)) {
                $object->setRegistryStatuses($this->denormalizer->denormalize($data['registry_statuses'], 'Rouda\\OpenProviderAPI\\Model\\DomainRegistryStatuses', 'json', $context));
            }
            if (\array_key_exists('renew', $data)) {
                $object->setRenew($data['renew']);
            }
            if (\array_key_exists('renewal_date', $data)) {
                $object->setRenewalDate($data['renewal_date']);
            }
            if (\array_key_exists('reseller_handle', $data)) {
                $object->setResellerHandle($data['reseller_handle']);
            }
            if (\array_key_exists('reseller_id', $data)) {
                $object->setResellerId($data['reseller_id']);
            }
            if (\array_key_exists('restorable_until', $data)) {
                $object->setRestorableUntil($data['restorable_until']);
            }
            if (\array_key_exists('scheduled_at', $data)) {
                $object->setScheduledAt($data['scheduled_at']);
            }
            if (\array_key_exists('scheduled_from', $data)) {
                $object->setScheduledFrom($data['scheduled_from']);
            }
            if (\array_key_exists('soft_quarantine_expiry_date', $data)) {
                $object->setSoftQuarantineExpiryDate($data['soft_quarantine_expiry_date']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('tech_handle', $data)) {
                $object->setTechHandle($data['tech_handle']);
            }
            if (\array_key_exists('trade_allowed', $data)) {
                $object->setTradeAllowed($data['trade_allowed']);
            }
            if (\array_key_exists('trade_auth_code_required', $data)) {
                $object->setTradeAuthCodeRequired($data['trade_auth_code_required']);
            }
            if (\array_key_exists('transfer_auth_code_required', $data)) {
                $object->setTransferAuthCodeRequired($data['transfer_auth_code_required']);
            }
            if (\array_key_exists('transfer_cancel_supported', $data)) {
                $object->setTransferCancelSupported($data['transfer_cancel_supported']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
            }
            if (\array_key_exists('use_domicile', $data)) {
                $object->setUseDomicile($data['use_domicile']);
            }
            if (\array_key_exists('verification_email_exp_date', $data)) {
                $object->setVerificationEmailExpDate($data['verification_email_exp_date']);
            }
            if (\array_key_exists('verification_email_name', $data)) {
                $object->setVerificationEmailName($data['verification_email_name']);
            }
            if (\array_key_exists('verification_email_status', $data)) {
                $object->setVerificationEmailStatus($data['verification_email_status']);
            }
            if (\array_key_exists('verification_email_status_description', $data)) {
                $object->setVerificationEmailStatusDescription($data['verification_email_status_description']);
            }
            if (\array_key_exists('whois_privacy_data', $data)) {
                $object->setWhoisPrivacyData($this->denormalizer->denormalize($data['whois_privacy_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainWhoisPrivacyData', 'json', $context));
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('abuseDetails') && null !== $object->getAbuseDetails()) {
                $data['abuse_details'] = $this->normalizer->normalize($object->getAbuseDetails(), 'json', $context);
            }
            if ($object->isInitialized('activeDate') && null !== $object->getActiveDate()) {
                $data['active_date'] = $object->getActiveDate();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('adminHandle') && null !== $object->getAdminHandle()) {
                $data['admin_handle'] = $object->getAdminHandle();
            }
            if ($object->isInitialized('apiHistory') && null !== $object->getApiHistory()) {
                $values = [];
                foreach ($object->getApiHistory() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['api_history'] = $values;
            }
            if ($object->isInitialized('applicationId') && null !== $object->getApplicationId()) {
                $data['application_id'] = $object->getApplicationId();
            }
            if ($object->isInitialized('applicationMode') && null !== $object->getApplicationMode()) {
                $data['application_mode'] = $object->getApplicationMode();
            }
            if ($object->isInitialized('applicationModeExpirationDate') && null !== $object->getApplicationModeExpirationDate()) {
                $data['application_mode_expiration_date'] = $object->getApplicationModeExpirationDate();
            }
            if ($object->isInitialized('applicationModeTitle') && null !== $object->getApplicationModeTitle()) {
                $data['application_mode_title'] = $object->getApplicationModeTitle();
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
            if ($object->isInitialized('canRenew') && null !== $object->getCanRenew()) {
                $data['can_renew'] = $object->getCanRenew();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('commentsLastChangedAt') && null !== $object->getCommentsLastChangedAt()) {
                $data['comments_last_changed_at'] = $object->getCommentsLastChangedAt();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('deleteStatus') && null !== $object->getDeleteStatus()) {
                $data['delete_status'] = $object->getDeleteStatus();
            }
            if ($object->isInitialized('deletedAt') && null !== $object->getDeletedAt()) {
                $data['deleted_at'] = $object->getDeletedAt();
            }
            if ($object->isInitialized('dnssec') && null !== $object->getDnssec()) {
                $data['dnssec'] = $object->getDnssec();
            }
            if ($object->isInitialized('dnssecKeys') && null !== $object->getDnssecKeys()) {
                $values_1 = [];
                foreach ($object->getDnssecKeys() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['dnssec_keys'] = $values_1;
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('hardQuarantineExpiryDate') && null !== $object->getHardQuarantineExpiryDate()) {
                $data['hard_quarantine_expiry_date'] = $object->getHardQuarantineExpiryDate();
            }
            if ($object->isInitialized('hasActiveSectigoZone') && null !== $object->getHasActiveSectigoZone()) {
                $data['has_active_sectigo_zone'] = $object->getHasActiveSectigoZone();
            }
            if ($object->isInitialized('hasHistory') && null !== $object->getHasHistory()) {
                $data['has_history'] = $object->getHasHistory();
            }
            if ($object->isInitialized('history') && null !== $object->getHistory()) {
                $values_2 = [];
                foreach ($object->getHistory() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['history'] = $values_2;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('internalAuthCode') && null !== $object->getInternalAuthCode()) {
                $data['internal_auth_code'] = $object->getInternalAuthCode();
            }
            if ($object->isInitialized('isAbusive') && null !== $object->getIsAbusive()) {
                $data['is_abusive'] = $object->getIsAbusive();
            }
            if ($object->isInitialized('isClientHoldEnabled') && null !== $object->getIsClientHoldEnabled()) {
                $data['is_client_hold_enabled'] = $object->getIsClientHoldEnabled();
            }
            if ($object->isInitialized('isDeleted') && null !== $object->getIsDeleted()) {
                $data['is_deleted'] = $object->getIsDeleted();
            }
            if ($object->isInitialized('isDnssecEnabled') && null !== $object->getIsDnssecEnabled()) {
                $data['is_dnssec_enabled'] = $object->getIsDnssecEnabled();
            }
            if ($object->isInitialized('isHostedWhois') && null !== $object->getIsHostedWhois()) {
                $data['is_hosted_whois'] = $object->getIsHostedWhois();
            }
            if ($object->isInitialized('isLockable') && null !== $object->getIsLockable()) {
                $data['is_lockable'] = $object->getIsLockable();
            }
            if ($object->isInitialized('isLocked') && null !== $object->getIsLocked()) {
                $data['is_locked'] = $object->getIsLocked();
            }
            if ($object->isInitialized('isParked') && null !== $object->getIsParked()) {
                $data['is_parked'] = $object->getIsParked();
            }
            if ($object->isInitialized('isPremium') && null !== $object->getIsPremium()) {
                $data['is_premium'] = $object->getIsPremium();
            }
            if ($object->isInitialized('isPrivateWhoisAllowed') && null !== $object->getIsPrivateWhoisAllowed()) {
                $data['is_private_whois_allowed'] = $object->getIsPrivateWhoisAllowed();
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
            if ($object->isInitialized('lastChanged') && null !== $object->getLastChanged()) {
                $data['last_changed'] = $object->getLastChanged();
            }
            if ($object->isInitialized('modifyOwnerAllowed') && null !== $object->getModifyOwnerAllowed()) {
                $data['modify_owner_allowed'] = $object->getModifyOwnerAllowed();
            }
            if ($object->isInitialized('nameServers') && null !== $object->getNameServers()) {
                $values_3 = [];
                foreach ($object->getNameServers() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['name_servers'] = $values_3;
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
            if ($object->isInitialized('nsgroupId') && null !== $object->getNsgroupId()) {
                $data['nsgroup_id'] = $object->getNsgroupId();
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('owner') && null !== $object->getOwner()) {
                $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            }
            if ($object->isInitialized('ownerCompanyName') && null !== $object->getOwnerCompanyName()) {
                $data['owner_company_name'] = $object->getOwnerCompanyName();
            }
            if ($object->isInitialized('ownerHandle') && null !== $object->getOwnerHandle()) {
                $data['owner_handle'] = $object->getOwnerHandle();
            }
            if ($object->isInitialized('quarantineExpirationDate') && null !== $object->getQuarantineExpirationDate()) {
                $data['quarantine_expiration_date'] = $object->getQuarantineExpirationDate();
            }
            if ($object->isInitialized('registryExpirationDate') && null !== $object->getRegistryExpirationDate()) {
                $data['registry_expiration_date'] = $object->getRegistryExpirationDate();
            }
            if ($object->isInitialized('registryStatuses') && null !== $object->getRegistryStatuses()) {
                $data['registry_statuses'] = $this->normalizer->normalize($object->getRegistryStatuses(), 'json', $context);
            }
            if ($object->isInitialized('renew') && null !== $object->getRenew()) {
                $data['renew'] = $object->getRenew();
            }
            if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
                $data['renewal_date'] = $object->getRenewalDate();
            }
            if ($object->isInitialized('resellerHandle') && null !== $object->getResellerHandle()) {
                $data['reseller_handle'] = $object->getResellerHandle();
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('restorableUntil') && null !== $object->getRestorableUntil()) {
                $data['restorable_until'] = $object->getRestorableUntil();
            }
            if ($object->isInitialized('scheduledAt') && null !== $object->getScheduledAt()) {
                $data['scheduled_at'] = $object->getScheduledAt();
            }
            if ($object->isInitialized('scheduledFrom') && null !== $object->getScheduledFrom()) {
                $data['scheduled_from'] = $object->getScheduledFrom();
            }
            if ($object->isInitialized('softQuarantineExpiryDate') && null !== $object->getSoftQuarantineExpiryDate()) {
                $data['soft_quarantine_expiry_date'] = $object->getSoftQuarantineExpiryDate();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('techHandle') && null !== $object->getTechHandle()) {
                $data['tech_handle'] = $object->getTechHandle();
            }
            if ($object->isInitialized('tradeAllowed') && null !== $object->getTradeAllowed()) {
                $data['trade_allowed'] = $object->getTradeAllowed();
            }
            if ($object->isInitialized('tradeAuthCodeRequired') && null !== $object->getTradeAuthCodeRequired()) {
                $data['trade_auth_code_required'] = $object->getTradeAuthCodeRequired();
            }
            if ($object->isInitialized('transferAuthCodeRequired') && null !== $object->getTransferAuthCodeRequired()) {
                $data['transfer_auth_code_required'] = $object->getTransferAuthCodeRequired();
            }
            if ($object->isInitialized('transferCancelSupported') && null !== $object->getTransferCancelSupported()) {
                $data['transfer_cancel_supported'] = $object->getTransferCancelSupported();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('useDomicile') && null !== $object->getUseDomicile()) {
                $data['use_domicile'] = $object->getUseDomicile();
            }
            if ($object->isInitialized('verificationEmailExpDate') && null !== $object->getVerificationEmailExpDate()) {
                $data['verification_email_exp_date'] = $object->getVerificationEmailExpDate();
            }
            if ($object->isInitialized('verificationEmailName') && null !== $object->getVerificationEmailName()) {
                $data['verification_email_name'] = $object->getVerificationEmailName();
            }
            if ($object->isInitialized('verificationEmailStatus') && null !== $object->getVerificationEmailStatus()) {
                $data['verification_email_status'] = $object->getVerificationEmailStatus();
            }
            if ($object->isInitialized('verificationEmailStatusDescription') && null !== $object->getVerificationEmailStatusDescription()) {
                $data['verification_email_status_description'] = $object->getVerificationEmailStatusDescription();
            }
            if ($object->isInitialized('whoisPrivacyData') && null !== $object->getWhoisPrivacyData()) {
                $data['whois_privacy_data'] = $this->normalizer->normalize($object->getWhoisPrivacyData(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainGetDomainResponseData' => false];
        }
    }
} else {
    class DomainGetDomainResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainGetDomainResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainGetDomainResponseData';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainGetDomainResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abuse_details', $data)) {
                $object->setAbuseDetails($this->denormalizer->denormalize($data['abuse_details'], 'Rouda\\OpenProviderAPI\\Model\\DomainAbuseDetails', 'json', $context));
            }
            if (\array_key_exists('active_date', $data)) {
                $object->setActiveDate($data['active_date']);
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainAdditionalData', 'json', $context));
            }
            if (\array_key_exists('admin_handle', $data)) {
                $object->setAdminHandle($data['admin_handle']);
            }
            if (\array_key_exists('api_history', $data)) {
                $values = [];
                foreach ($data['api_history'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\DomainApiHistory', 'json', $context);
                }
                $object->setApiHistory($values);
            }
            if (\array_key_exists('application_id', $data)) {
                $object->setApplicationId($data['application_id']);
            }
            if (\array_key_exists('application_mode', $data)) {
                $object->setApplicationMode($data['application_mode']);
            }
            if (\array_key_exists('application_mode_expiration_date', $data)) {
                $object->setApplicationModeExpirationDate($data['application_mode_expiration_date']);
            }
            if (\array_key_exists('application_mode_title', $data)) {
                $object->setApplicationModeTitle($data['application_mode_title']);
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
            if (\array_key_exists('can_renew', $data)) {
                $object->setCanRenew($data['can_renew']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('comments_last_changed_at', $data)) {
                $object->setCommentsLastChangedAt($data['comments_last_changed_at']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('delete_status', $data)) {
                $object->setDeleteStatus($data['delete_status']);
            }
            if (\array_key_exists('deleted_at', $data)) {
                $object->setDeletedAt($data['deleted_at']);
            }
            if (\array_key_exists('dnssec', $data)) {
                $object->setDnssec($data['dnssec']);
            }
            if (\array_key_exists('dnssec_keys', $data)) {
                $values_1 = [];
                foreach ($data['dnssec_keys'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\DomainDnssecKey', 'json', $context);
                }
                $object->setDnssecKeys($values_1);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($this->denormalizer->denormalize($data['domain'], 'Rouda\\OpenProviderAPI\\Model\\DomainDomain', 'json', $context));
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('hard_quarantine_expiry_date', $data)) {
                $object->setHardQuarantineExpiryDate($data['hard_quarantine_expiry_date']);
            }
            if (\array_key_exists('has_active_sectigo_zone', $data)) {
                $object->setHasActiveSectigoZone($data['has_active_sectigo_zone']);
            }
            if (\array_key_exists('has_history', $data)) {
                $object->setHasHistory($data['has_history']);
            }
            if (\array_key_exists('history', $data)) {
                $values_2 = [];
                foreach ($data['history'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProviderAPI\\Model\\DomainHistory', 'json', $context);
                }
                $object->setHistory($values_2);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('internal_auth_code', $data)) {
                $object->setInternalAuthCode($data['internal_auth_code']);
            }
            if (\array_key_exists('is_abusive', $data)) {
                $object->setIsAbusive($data['is_abusive']);
            }
            if (\array_key_exists('is_client_hold_enabled', $data)) {
                $object->setIsClientHoldEnabled($data['is_client_hold_enabled']);
            }
            if (\array_key_exists('is_deleted', $data)) {
                $object->setIsDeleted($data['is_deleted']);
            }
            if (\array_key_exists('is_dnssec_enabled', $data)) {
                $object->setIsDnssecEnabled($data['is_dnssec_enabled']);
            }
            if (\array_key_exists('is_hosted_whois', $data)) {
                $object->setIsHostedWhois($data['is_hosted_whois']);
            }
            if (\array_key_exists('is_lockable', $data)) {
                $object->setIsLockable($data['is_lockable']);
            }
            if (\array_key_exists('is_locked', $data)) {
                $object->setIsLocked($data['is_locked']);
            }
            if (\array_key_exists('is_parked', $data)) {
                $object->setIsParked($data['is_parked']);
            }
            if (\array_key_exists('is_premium', $data)) {
                $object->setIsPremium($data['is_premium']);
            }
            if (\array_key_exists('is_private_whois_allowed', $data)) {
                $object->setIsPrivateWhoisAllowed($data['is_private_whois_allowed']);
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
            if (\array_key_exists('last_changed', $data)) {
                $object->setLastChanged($data['last_changed']);
            }
            if (\array_key_exists('modify_owner_allowed', $data)) {
                $object->setModifyOwnerAllowed($data['modify_owner_allowed']);
            }
            if (\array_key_exists('name_servers', $data)) {
                $values_3 = [];
                foreach ($data['name_servers'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Rouda\\OpenProviderAPI\\Model\\DomainNameserver', 'json', $context);
                }
                $object->setNameServers($values_3);
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
            if (\array_key_exists('nsgroup_id', $data)) {
                $object->setNsgroupId($data['nsgroup_id']);
            }
            if (\array_key_exists('order_date', $data)) {
                $object->setOrderDate($data['order_date']);
            }
            if (\array_key_exists('owner', $data)) {
                $object->setOwner($this->denormalizer->denormalize($data['owner'], 'Rouda\\OpenProviderAPI\\Model\\DomainOwner', 'json', $context));
            }
            if (\array_key_exists('owner_company_name', $data)) {
                $object->setOwnerCompanyName($data['owner_company_name']);
            }
            if (\array_key_exists('owner_handle', $data)) {
                $object->setOwnerHandle($data['owner_handle']);
            }
            if (\array_key_exists('quarantine_expiration_date', $data)) {
                $object->setQuarantineExpirationDate($data['quarantine_expiration_date']);
            }
            if (\array_key_exists('registry_expiration_date', $data)) {
                $object->setRegistryExpirationDate($data['registry_expiration_date']);
            }
            if (\array_key_exists('registry_statuses', $data)) {
                $object->setRegistryStatuses($this->denormalizer->denormalize($data['registry_statuses'], 'Rouda\\OpenProviderAPI\\Model\\DomainRegistryStatuses', 'json', $context));
            }
            if (\array_key_exists('renew', $data)) {
                $object->setRenew($data['renew']);
            }
            if (\array_key_exists('renewal_date', $data)) {
                $object->setRenewalDate($data['renewal_date']);
            }
            if (\array_key_exists('reseller_handle', $data)) {
                $object->setResellerHandle($data['reseller_handle']);
            }
            if (\array_key_exists('reseller_id', $data)) {
                $object->setResellerId($data['reseller_id']);
            }
            if (\array_key_exists('restorable_until', $data)) {
                $object->setRestorableUntil($data['restorable_until']);
            }
            if (\array_key_exists('scheduled_at', $data)) {
                $object->setScheduledAt($data['scheduled_at']);
            }
            if (\array_key_exists('scheduled_from', $data)) {
                $object->setScheduledFrom($data['scheduled_from']);
            }
            if (\array_key_exists('soft_quarantine_expiry_date', $data)) {
                $object->setSoftQuarantineExpiryDate($data['soft_quarantine_expiry_date']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            if (\array_key_exists('tech_handle', $data)) {
                $object->setTechHandle($data['tech_handle']);
            }
            if (\array_key_exists('trade_allowed', $data)) {
                $object->setTradeAllowed($data['trade_allowed']);
            }
            if (\array_key_exists('trade_auth_code_required', $data)) {
                $object->setTradeAuthCodeRequired($data['trade_auth_code_required']);
            }
            if (\array_key_exists('transfer_auth_code_required', $data)) {
                $object->setTransferAuthCodeRequired($data['transfer_auth_code_required']);
            }
            if (\array_key_exists('transfer_cancel_supported', $data)) {
                $object->setTransferCancelSupported($data['transfer_cancel_supported']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('unit', $data)) {
                $object->setUnit($data['unit']);
            }
            if (\array_key_exists('use_domicile', $data)) {
                $object->setUseDomicile($data['use_domicile']);
            }
            if (\array_key_exists('verification_email_exp_date', $data)) {
                $object->setVerificationEmailExpDate($data['verification_email_exp_date']);
            }
            if (\array_key_exists('verification_email_name', $data)) {
                $object->setVerificationEmailName($data['verification_email_name']);
            }
            if (\array_key_exists('verification_email_status', $data)) {
                $object->setVerificationEmailStatus($data['verification_email_status']);
            }
            if (\array_key_exists('verification_email_status_description', $data)) {
                $object->setVerificationEmailStatusDescription($data['verification_email_status_description']);
            }
            if (\array_key_exists('whois_privacy_data', $data)) {
                $object->setWhoisPrivacyData($this->denormalizer->denormalize($data['whois_privacy_data'], 'Rouda\\OpenProviderAPI\\Model\\DomainWhoisPrivacyData', 'json', $context));
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('abuseDetails') && null !== $object->getAbuseDetails()) {
                $data['abuse_details'] = $this->normalizer->normalize($object->getAbuseDetails(), 'json', $context);
            }
            if ($object->isInitialized('activeDate') && null !== $object->getActiveDate()) {
                $data['active_date'] = $object->getActiveDate();
            }
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('adminHandle') && null !== $object->getAdminHandle()) {
                $data['admin_handle'] = $object->getAdminHandle();
            }
            if ($object->isInitialized('apiHistory') && null !== $object->getApiHistory()) {
                $values = [];
                foreach ($object->getApiHistory() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['api_history'] = $values;
            }
            if ($object->isInitialized('applicationId') && null !== $object->getApplicationId()) {
                $data['application_id'] = $object->getApplicationId();
            }
            if ($object->isInitialized('applicationMode') && null !== $object->getApplicationMode()) {
                $data['application_mode'] = $object->getApplicationMode();
            }
            if ($object->isInitialized('applicationModeExpirationDate') && null !== $object->getApplicationModeExpirationDate()) {
                $data['application_mode_expiration_date'] = $object->getApplicationModeExpirationDate();
            }
            if ($object->isInitialized('applicationModeTitle') && null !== $object->getApplicationModeTitle()) {
                $data['application_mode_title'] = $object->getApplicationModeTitle();
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
            if ($object->isInitialized('canRenew') && null !== $object->getCanRenew()) {
                $data['can_renew'] = $object->getCanRenew();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('commentsLastChangedAt') && null !== $object->getCommentsLastChangedAt()) {
                $data['comments_last_changed_at'] = $object->getCommentsLastChangedAt();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('deleteStatus') && null !== $object->getDeleteStatus()) {
                $data['delete_status'] = $object->getDeleteStatus();
            }
            if ($object->isInitialized('deletedAt') && null !== $object->getDeletedAt()) {
                $data['deleted_at'] = $object->getDeletedAt();
            }
            if ($object->isInitialized('dnssec') && null !== $object->getDnssec()) {
                $data['dnssec'] = $object->getDnssec();
            }
            if ($object->isInitialized('dnssecKeys') && null !== $object->getDnssecKeys()) {
                $values_1 = [];
                foreach ($object->getDnssecKeys() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['dnssec_keys'] = $values_1;
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $this->normalizer->normalize($object->getDomain(), 'json', $context);
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('hardQuarantineExpiryDate') && null !== $object->getHardQuarantineExpiryDate()) {
                $data['hard_quarantine_expiry_date'] = $object->getHardQuarantineExpiryDate();
            }
            if ($object->isInitialized('hasActiveSectigoZone') && null !== $object->getHasActiveSectigoZone()) {
                $data['has_active_sectigo_zone'] = $object->getHasActiveSectigoZone();
            }
            if ($object->isInitialized('hasHistory') && null !== $object->getHasHistory()) {
                $data['has_history'] = $object->getHasHistory();
            }
            if ($object->isInitialized('history') && null !== $object->getHistory()) {
                $values_2 = [];
                foreach ($object->getHistory() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['history'] = $values_2;
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('internalAuthCode') && null !== $object->getInternalAuthCode()) {
                $data['internal_auth_code'] = $object->getInternalAuthCode();
            }
            if ($object->isInitialized('isAbusive') && null !== $object->getIsAbusive()) {
                $data['is_abusive'] = $object->getIsAbusive();
            }
            if ($object->isInitialized('isClientHoldEnabled') && null !== $object->getIsClientHoldEnabled()) {
                $data['is_client_hold_enabled'] = $object->getIsClientHoldEnabled();
            }
            if ($object->isInitialized('isDeleted') && null !== $object->getIsDeleted()) {
                $data['is_deleted'] = $object->getIsDeleted();
            }
            if ($object->isInitialized('isDnssecEnabled') && null !== $object->getIsDnssecEnabled()) {
                $data['is_dnssec_enabled'] = $object->getIsDnssecEnabled();
            }
            if ($object->isInitialized('isHostedWhois') && null !== $object->getIsHostedWhois()) {
                $data['is_hosted_whois'] = $object->getIsHostedWhois();
            }
            if ($object->isInitialized('isLockable') && null !== $object->getIsLockable()) {
                $data['is_lockable'] = $object->getIsLockable();
            }
            if ($object->isInitialized('isLocked') && null !== $object->getIsLocked()) {
                $data['is_locked'] = $object->getIsLocked();
            }
            if ($object->isInitialized('isParked') && null !== $object->getIsParked()) {
                $data['is_parked'] = $object->getIsParked();
            }
            if ($object->isInitialized('isPremium') && null !== $object->getIsPremium()) {
                $data['is_premium'] = $object->getIsPremium();
            }
            if ($object->isInitialized('isPrivateWhoisAllowed') && null !== $object->getIsPrivateWhoisAllowed()) {
                $data['is_private_whois_allowed'] = $object->getIsPrivateWhoisAllowed();
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
            if ($object->isInitialized('lastChanged') && null !== $object->getLastChanged()) {
                $data['last_changed'] = $object->getLastChanged();
            }
            if ($object->isInitialized('modifyOwnerAllowed') && null !== $object->getModifyOwnerAllowed()) {
                $data['modify_owner_allowed'] = $object->getModifyOwnerAllowed();
            }
            if ($object->isInitialized('nameServers') && null !== $object->getNameServers()) {
                $values_3 = [];
                foreach ($object->getNameServers() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['name_servers'] = $values_3;
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
            if ($object->isInitialized('nsgroupId') && null !== $object->getNsgroupId()) {
                $data['nsgroup_id'] = $object->getNsgroupId();
            }
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('owner') && null !== $object->getOwner()) {
                $data['owner'] = $this->normalizer->normalize($object->getOwner(), 'json', $context);
            }
            if ($object->isInitialized('ownerCompanyName') && null !== $object->getOwnerCompanyName()) {
                $data['owner_company_name'] = $object->getOwnerCompanyName();
            }
            if ($object->isInitialized('ownerHandle') && null !== $object->getOwnerHandle()) {
                $data['owner_handle'] = $object->getOwnerHandle();
            }
            if ($object->isInitialized('quarantineExpirationDate') && null !== $object->getQuarantineExpirationDate()) {
                $data['quarantine_expiration_date'] = $object->getQuarantineExpirationDate();
            }
            if ($object->isInitialized('registryExpirationDate') && null !== $object->getRegistryExpirationDate()) {
                $data['registry_expiration_date'] = $object->getRegistryExpirationDate();
            }
            if ($object->isInitialized('registryStatuses') && null !== $object->getRegistryStatuses()) {
                $data['registry_statuses'] = $this->normalizer->normalize($object->getRegistryStatuses(), 'json', $context);
            }
            if ($object->isInitialized('renew') && null !== $object->getRenew()) {
                $data['renew'] = $object->getRenew();
            }
            if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
                $data['renewal_date'] = $object->getRenewalDate();
            }
            if ($object->isInitialized('resellerHandle') && null !== $object->getResellerHandle()) {
                $data['reseller_handle'] = $object->getResellerHandle();
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('restorableUntil') && null !== $object->getRestorableUntil()) {
                $data['restorable_until'] = $object->getRestorableUntil();
            }
            if ($object->isInitialized('scheduledAt') && null !== $object->getScheduledAt()) {
                $data['scheduled_at'] = $object->getScheduledAt();
            }
            if ($object->isInitialized('scheduledFrom') && null !== $object->getScheduledFrom()) {
                $data['scheduled_from'] = $object->getScheduledFrom();
            }
            if ($object->isInitialized('softQuarantineExpiryDate') && null !== $object->getSoftQuarantineExpiryDate()) {
                $data['soft_quarantine_expiry_date'] = $object->getSoftQuarantineExpiryDate();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('techHandle') && null !== $object->getTechHandle()) {
                $data['tech_handle'] = $object->getTechHandle();
            }
            if ($object->isInitialized('tradeAllowed') && null !== $object->getTradeAllowed()) {
                $data['trade_allowed'] = $object->getTradeAllowed();
            }
            if ($object->isInitialized('tradeAuthCodeRequired') && null !== $object->getTradeAuthCodeRequired()) {
                $data['trade_auth_code_required'] = $object->getTradeAuthCodeRequired();
            }
            if ($object->isInitialized('transferAuthCodeRequired') && null !== $object->getTransferAuthCodeRequired()) {
                $data['transfer_auth_code_required'] = $object->getTransferAuthCodeRequired();
            }
            if ($object->isInitialized('transferCancelSupported') && null !== $object->getTransferCancelSupported()) {
                $data['transfer_cancel_supported'] = $object->getTransferCancelSupported();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('unit') && null !== $object->getUnit()) {
                $data['unit'] = $object->getUnit();
            }
            if ($object->isInitialized('useDomicile') && null !== $object->getUseDomicile()) {
                $data['use_domicile'] = $object->getUseDomicile();
            }
            if ($object->isInitialized('verificationEmailExpDate') && null !== $object->getVerificationEmailExpDate()) {
                $data['verification_email_exp_date'] = $object->getVerificationEmailExpDate();
            }
            if ($object->isInitialized('verificationEmailName') && null !== $object->getVerificationEmailName()) {
                $data['verification_email_name'] = $object->getVerificationEmailName();
            }
            if ($object->isInitialized('verificationEmailStatus') && null !== $object->getVerificationEmailStatus()) {
                $data['verification_email_status'] = $object->getVerificationEmailStatus();
            }
            if ($object->isInitialized('verificationEmailStatusDescription') && null !== $object->getVerificationEmailStatusDescription()) {
                $data['verification_email_status_description'] = $object->getVerificationEmailStatusDescription();
            }
            if ($object->isInitialized('whoisPrivacyData') && null !== $object->getWhoisPrivacyData()) {
                $data['whois_privacy_data'] = $this->normalizer->normalize($object->getWhoisPrivacyData(), 'json', $context);
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\DomainGetDomainResponseData' => false];
        }
    }
}