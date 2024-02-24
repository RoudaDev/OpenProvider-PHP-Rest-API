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
    class SettingsGetSettingsResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SettingsGetSettingsResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SettingsGetSettingsResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SettingsGetSettingsResponseData();
            if (\array_key_exists('maximum_credit', $data) && \is_int($data['maximum_credit'])) {
                $data['maximum_credit'] = (double) $data['maximum_credit'];
            }
            if (\array_key_exists('maximum_credit_card_payment', $data) && \is_int($data['maximum_credit_card_payment'])) {
                $data['maximum_credit_card_payment'] = (double) $data['maximum_credit_card_payment'];
            }
            if (\array_key_exists('maximum_i_deal_payment', $data) && \is_int($data['maximum_i_deal_payment'])) {
                $data['maximum_i_deal_payment'] = (double) $data['maximum_i_deal_payment'];
            }
            if (\array_key_exists('maximum_western_union_payment', $data) && \is_int($data['maximum_western_union_payment'])) {
                $data['maximum_western_union_payment'] = (double) $data['maximum_western_union_payment'];
            }
            if (\array_key_exists('minimum_payment', $data) && \is_int($data['minimum_payment'])) {
                $data['minimum_payment'] = (double) $data['minimum_payment'];
            }
            if (\array_key_exists('minimum_western_union_payment', $data) && \is_int($data['minimum_western_union_payment'])) {
                $data['minimum_western_union_payment'] = (double) $data['minimum_western_union_payment'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('av_handle', $data)) {
                $object->setAvHandle($data['av_handle']);
            }
            if (\array_key_exists('claims_confirm_url', $data)) {
                $object->setClaimsConfirmUrl($data['claims_confirm_url']);
            }
            if (\array_key_exists('claims_email_subject', $data)) {
                $object->setClaimsEmailSubject($data['claims_email_subject']);
            }
            if (\array_key_exists('claims_reseller_name', $data)) {
                $object->setClaimsResellerName($data['claims_reseller_name']);
            }
            if (\array_key_exists('claims_sender_email', $data)) {
                $object->setClaimsSenderEmail($data['claims_sender_email']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
            }
            if (\array_key_exists('default_domain_billing_handle', $data)) {
                $object->setDefaultDomainBillingHandle($data['default_domain_billing_handle']);
            }
            if (\array_key_exists('default_domain_reseller_handle', $data)) {
                $object->setDefaultDomainResellerHandle($data['default_domain_reseller_handle']);
            }
            if (\array_key_exists('foa_confirm_url', $data)) {
                $object->setFoaConfirmUrl($data['foa_confirm_url']);
            }
            if (\array_key_exists('foa_email_subject', $data)) {
                $object->setFoaEmailSubject($data['foa_email_subject']);
            }
            if (\array_key_exists('foa_reseller_name', $data)) {
                $object->setFoaResellerName($data['foa_reseller_name']);
            }
            if (\array_key_exists('foa_sender_email', $data)) {
                $object->setFoaSenderEmail($data['foa_sender_email']);
            }
            if (\array_key_exists('foa_terms_conditions_url', $data)) {
                $object->setFoaTermsConditionsUrl($data['foa_terms_conditions_url']);
            }
            if (\array_key_exists('is_auto_renew_enabled', $data)) {
                $object->setIsAutoRenewEnabled($data['is_auto_renew_enabled']);
            }
            if (\array_key_exists('is_custom_nses_enabled', $data)) {
                $object->setIsCustomNsesEnabled($data['is_custom_nses_enabled']);
            }
            if (\array_key_exists('ive2_customized_body', $data)) {
                $object->setIve2CustomizedBody($data['ive2_customized_body']);
            }
            if (\array_key_exists('ive2_email_subject', $data)) {
                $object->setIve2EmailSubject($data['ive2_email_subject']);
            }
            if (\array_key_exists('ive_confirm_url', $data)) {
                $object->setIveConfirmUrl($data['ive_confirm_url']);
            }
            if (\array_key_exists('ive_customized_body', $data)) {
                $object->setIveCustomizedBody($data['ive_customized_body']);
            }
            if (\array_key_exists('ive_email_subject', $data)) {
                $object->setIveEmailSubject($data['ive_email_subject']);
            }
            if (\array_key_exists('ive_reseller_name', $data)) {
                $object->setIveResellerName($data['ive_reseller_name']);
            }
            if (\array_key_exists('ive_sender_email', $data)) {
                $object->setIveSenderEmail($data['ive_sender_email']);
            }
            if (\array_key_exists('jurisdiction', $data)) {
                $object->setJurisdiction($data['jurisdiction']);
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
            }
            if (\array_key_exists('maximum_credit', $data)) {
                $object->setMaximumCredit($data['maximum_credit']);
            }
            if (\array_key_exists('maximum_credit_card_payment', $data)) {
                $object->setMaximumCreditCardPayment($data['maximum_credit_card_payment']);
            }
            if (\array_key_exists('maximum_i_deal_payment', $data)) {
                $object->setMaximumIDealPayment($data['maximum_i_deal_payment']);
            }
            if (\array_key_exists('maximum_western_union_payment', $data)) {
                $object->setMaximumWesternUnionPayment($data['maximum_western_union_payment']);
            }
            if (\array_key_exists('minimum_payment', $data)) {
                $object->setMinimumPayment($data['minimum_payment']);
            }
            if (\array_key_exists('minimum_western_union_payment', $data)) {
                $object->setMinimumWesternUnionPayment($data['minimum_western_union_payment']);
            }
            if (\array_key_exists('pay_methods', $data)) {
                $values = [];
                foreach ($data['pay_methods'] as $value) {
                    $values[] = $value;
                }
                $object->setPayMethods($values);
            }
            if (\array_key_exists('payment_methods', $data)) {
                $values_1 = [];
                foreach ($data['payment_methods'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethods', 'json', $context);
                }
                $object->setPaymentMethods($values_1);
            }
            if (\array_key_exists('preregistered_domain_priorities', $data)) {
                $object->setPreregisteredDomainPriorities($data['preregistered_domain_priorities']);
            }
            if (\array_key_exists('recurring_payment_methods', $data)) {
                $values_2 = [];
                foreach ($data['recurring_payment_methods'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethods', 'json', $context);
                }
                $object->setRecurringPaymentMethods($values_2);
            }
            if (\array_key_exists('renew_notification_days', $data)) {
                $values_3 = [];
                foreach ($data['renew_notification_days'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setRenewNotificationDays($values_3);
            }
            if (\array_key_exists('renew_notification_every_week', $data)) {
                $object->setRenewNotificationEveryWeek($data['renew_notification_every_week']);
            }
            if (\array_key_exists('signed_contracts', $data)) {
                $values_4 = [];
                foreach ($data['signed_contracts'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts', 'json', $context);
                }
                $object->setSignedContracts($values_4);
            }
            if (\array_key_exists('tac_contract', $data)) {
                $object->setTacContract($this->denormalizer->denormalize($data['tac_contract'], 'Rouda\\OpenProviderAPI\\Model\\SettingsTacContract', 'json', $context));
            }
            if (\array_key_exists('tags', $data)) {
                $values_5 = [];
                foreach ($data['tags'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setTags($values_5);
            }
            if (\array_key_exists('transaction_fee', $data)) {
                $object->setTransactionFee($this->denormalizer->denormalize($data['transaction_fee'], 'Rouda\\OpenProviderAPI\\Model\\SettingsTransactionFee', 'json', $context));
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('avHandle') && null !== $object->getAvHandle()) {
                $data['av_handle'] = $object->getAvHandle();
            }
            if ($object->isInitialized('claimsConfirmUrl') && null !== $object->getClaimsConfirmUrl()) {
                $data['claims_confirm_url'] = $object->getClaimsConfirmUrl();
            }
            if ($object->isInitialized('claimsEmailSubject') && null !== $object->getClaimsEmailSubject()) {
                $data['claims_email_subject'] = $object->getClaimsEmailSubject();
            }
            if ($object->isInitialized('claimsResellerName') && null !== $object->getClaimsResellerName()) {
                $data['claims_reseller_name'] = $object->getClaimsResellerName();
            }
            if ($object->isInitialized('claimsSenderEmail') && null !== $object->getClaimsSenderEmail()) {
                $data['claims_sender_email'] = $object->getClaimsSenderEmail();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('defaultDomainBillingHandle') && null !== $object->getDefaultDomainBillingHandle()) {
                $data['default_domain_billing_handle'] = $object->getDefaultDomainBillingHandle();
            }
            if ($object->isInitialized('defaultDomainResellerHandle') && null !== $object->getDefaultDomainResellerHandle()) {
                $data['default_domain_reseller_handle'] = $object->getDefaultDomainResellerHandle();
            }
            if ($object->isInitialized('foaConfirmUrl') && null !== $object->getFoaConfirmUrl()) {
                $data['foa_confirm_url'] = $object->getFoaConfirmUrl();
            }
            if ($object->isInitialized('foaEmailSubject') && null !== $object->getFoaEmailSubject()) {
                $data['foa_email_subject'] = $object->getFoaEmailSubject();
            }
            if ($object->isInitialized('foaResellerName') && null !== $object->getFoaResellerName()) {
                $data['foa_reseller_name'] = $object->getFoaResellerName();
            }
            if ($object->isInitialized('foaSenderEmail') && null !== $object->getFoaSenderEmail()) {
                $data['foa_sender_email'] = $object->getFoaSenderEmail();
            }
            if ($object->isInitialized('foaTermsConditionsUrl') && null !== $object->getFoaTermsConditionsUrl()) {
                $data['foa_terms_conditions_url'] = $object->getFoaTermsConditionsUrl();
            }
            if ($object->isInitialized('isAutoRenewEnabled') && null !== $object->getIsAutoRenewEnabled()) {
                $data['is_auto_renew_enabled'] = $object->getIsAutoRenewEnabled();
            }
            if ($object->isInitialized('isCustomNsesEnabled') && null !== $object->getIsCustomNsesEnabled()) {
                $data['is_custom_nses_enabled'] = $object->getIsCustomNsesEnabled();
            }
            if ($object->isInitialized('ive2CustomizedBody') && null !== $object->getIve2CustomizedBody()) {
                $data['ive2_customized_body'] = $object->getIve2CustomizedBody();
            }
            if ($object->isInitialized('ive2EmailSubject') && null !== $object->getIve2EmailSubject()) {
                $data['ive2_email_subject'] = $object->getIve2EmailSubject();
            }
            if ($object->isInitialized('iveConfirmUrl') && null !== $object->getIveConfirmUrl()) {
                $data['ive_confirm_url'] = $object->getIveConfirmUrl();
            }
            if ($object->isInitialized('iveCustomizedBody') && null !== $object->getIveCustomizedBody()) {
                $data['ive_customized_body'] = $object->getIveCustomizedBody();
            }
            if ($object->isInitialized('iveEmailSubject') && null !== $object->getIveEmailSubject()) {
                $data['ive_email_subject'] = $object->getIveEmailSubject();
            }
            if ($object->isInitialized('iveResellerName') && null !== $object->getIveResellerName()) {
                $data['ive_reseller_name'] = $object->getIveResellerName();
            }
            if ($object->isInitialized('iveSenderEmail') && null !== $object->getIveSenderEmail()) {
                $data['ive_sender_email'] = $object->getIveSenderEmail();
            }
            if ($object->isInitialized('jurisdiction') && null !== $object->getJurisdiction()) {
                $data['jurisdiction'] = $object->getJurisdiction();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('maximumCredit') && null !== $object->getMaximumCredit()) {
                $data['maximum_credit'] = $object->getMaximumCredit();
            }
            if ($object->isInitialized('maximumCreditCardPayment') && null !== $object->getMaximumCreditCardPayment()) {
                $data['maximum_credit_card_payment'] = $object->getMaximumCreditCardPayment();
            }
            if ($object->isInitialized('maximumIDealPayment') && null !== $object->getMaximumIDealPayment()) {
                $data['maximum_i_deal_payment'] = $object->getMaximumIDealPayment();
            }
            if ($object->isInitialized('maximumWesternUnionPayment') && null !== $object->getMaximumWesternUnionPayment()) {
                $data['maximum_western_union_payment'] = $object->getMaximumWesternUnionPayment();
            }
            if ($object->isInitialized('minimumPayment') && null !== $object->getMinimumPayment()) {
                $data['minimum_payment'] = $object->getMinimumPayment();
            }
            if ($object->isInitialized('minimumWesternUnionPayment') && null !== $object->getMinimumWesternUnionPayment()) {
                $data['minimum_western_union_payment'] = $object->getMinimumWesternUnionPayment();
            }
            if ($object->isInitialized('payMethods') && null !== $object->getPayMethods()) {
                $values = [];
                foreach ($object->getPayMethods() as $value) {
                    $values[] = $value;
                }
                $data['pay_methods'] = $values;
            }
            if ($object->isInitialized('paymentMethods') && null !== $object->getPaymentMethods()) {
                $values_1 = [];
                foreach ($object->getPaymentMethods() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['payment_methods'] = $values_1;
            }
            if ($object->isInitialized('preregisteredDomainPriorities') && null !== $object->getPreregisteredDomainPriorities()) {
                $data['preregistered_domain_priorities'] = $object->getPreregisteredDomainPriorities();
            }
            if ($object->isInitialized('recurringPaymentMethods') && null !== $object->getRecurringPaymentMethods()) {
                $values_2 = [];
                foreach ($object->getRecurringPaymentMethods() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['recurring_payment_methods'] = $values_2;
            }
            if ($object->isInitialized('renewNotificationDays') && null !== $object->getRenewNotificationDays()) {
                $values_3 = [];
                foreach ($object->getRenewNotificationDays() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['renew_notification_days'] = $values_3;
            }
            if ($object->isInitialized('renewNotificationEveryWeek') && null !== $object->getRenewNotificationEveryWeek()) {
                $data['renew_notification_every_week'] = $object->getRenewNotificationEveryWeek();
            }
            if ($object->isInitialized('signedContracts') && null !== $object->getSignedContracts()) {
                $values_4 = [];
                foreach ($object->getSignedContracts() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['signed_contracts'] = $values_4;
            }
            if ($object->isInitialized('tacContract') && null !== $object->getTacContract()) {
                $data['tac_contract'] = $this->normalizer->normalize($object->getTacContract(), 'json', $context);
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_5 = [];
                foreach ($object->getTags() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['tags'] = $values_5;
            }
            if ($object->isInitialized('transactionFee') && null !== $object->getTransactionFee()) {
                $data['transaction_fee'] = $this->normalizer->normalize($object->getTransactionFee(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SettingsGetSettingsResponseData' => false];
        }
    }
} else {
    class SettingsGetSettingsResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SettingsGetSettingsResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SettingsGetSettingsResponseData';
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
            $object = new \Rouda\OpenProviderAPI\Model\SettingsGetSettingsResponseData();
            if (\array_key_exists('maximum_credit', $data) && \is_int($data['maximum_credit'])) {
                $data['maximum_credit'] = (double) $data['maximum_credit'];
            }
            if (\array_key_exists('maximum_credit_card_payment', $data) && \is_int($data['maximum_credit_card_payment'])) {
                $data['maximum_credit_card_payment'] = (double) $data['maximum_credit_card_payment'];
            }
            if (\array_key_exists('maximum_i_deal_payment', $data) && \is_int($data['maximum_i_deal_payment'])) {
                $data['maximum_i_deal_payment'] = (double) $data['maximum_i_deal_payment'];
            }
            if (\array_key_exists('maximum_western_union_payment', $data) && \is_int($data['maximum_western_union_payment'])) {
                $data['maximum_western_union_payment'] = (double) $data['maximum_western_union_payment'];
            }
            if (\array_key_exists('minimum_payment', $data) && \is_int($data['minimum_payment'])) {
                $data['minimum_payment'] = (double) $data['minimum_payment'];
            }
            if (\array_key_exists('minimum_western_union_payment', $data) && \is_int($data['minimum_western_union_payment'])) {
                $data['minimum_western_union_payment'] = (double) $data['minimum_western_union_payment'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('av_handle', $data)) {
                $object->setAvHandle($data['av_handle']);
            }
            if (\array_key_exists('claims_confirm_url', $data)) {
                $object->setClaimsConfirmUrl($data['claims_confirm_url']);
            }
            if (\array_key_exists('claims_email_subject', $data)) {
                $object->setClaimsEmailSubject($data['claims_email_subject']);
            }
            if (\array_key_exists('claims_reseller_name', $data)) {
                $object->setClaimsResellerName($data['claims_reseller_name']);
            }
            if (\array_key_exists('claims_sender_email', $data)) {
                $object->setClaimsSenderEmail($data['claims_sender_email']);
            }
            if (\array_key_exists('currency', $data)) {
                $object->setCurrency($data['currency']);
            }
            if (\array_key_exists('default_domain_billing_handle', $data)) {
                $object->setDefaultDomainBillingHandle($data['default_domain_billing_handle']);
            }
            if (\array_key_exists('default_domain_reseller_handle', $data)) {
                $object->setDefaultDomainResellerHandle($data['default_domain_reseller_handle']);
            }
            if (\array_key_exists('foa_confirm_url', $data)) {
                $object->setFoaConfirmUrl($data['foa_confirm_url']);
            }
            if (\array_key_exists('foa_email_subject', $data)) {
                $object->setFoaEmailSubject($data['foa_email_subject']);
            }
            if (\array_key_exists('foa_reseller_name', $data)) {
                $object->setFoaResellerName($data['foa_reseller_name']);
            }
            if (\array_key_exists('foa_sender_email', $data)) {
                $object->setFoaSenderEmail($data['foa_sender_email']);
            }
            if (\array_key_exists('foa_terms_conditions_url', $data)) {
                $object->setFoaTermsConditionsUrl($data['foa_terms_conditions_url']);
            }
            if (\array_key_exists('is_auto_renew_enabled', $data)) {
                $object->setIsAutoRenewEnabled($data['is_auto_renew_enabled']);
            }
            if (\array_key_exists('is_custom_nses_enabled', $data)) {
                $object->setIsCustomNsesEnabled($data['is_custom_nses_enabled']);
            }
            if (\array_key_exists('ive2_customized_body', $data)) {
                $object->setIve2CustomizedBody($data['ive2_customized_body']);
            }
            if (\array_key_exists('ive2_email_subject', $data)) {
                $object->setIve2EmailSubject($data['ive2_email_subject']);
            }
            if (\array_key_exists('ive_confirm_url', $data)) {
                $object->setIveConfirmUrl($data['ive_confirm_url']);
            }
            if (\array_key_exists('ive_customized_body', $data)) {
                $object->setIveCustomizedBody($data['ive_customized_body']);
            }
            if (\array_key_exists('ive_email_subject', $data)) {
                $object->setIveEmailSubject($data['ive_email_subject']);
            }
            if (\array_key_exists('ive_reseller_name', $data)) {
                $object->setIveResellerName($data['ive_reseller_name']);
            }
            if (\array_key_exists('ive_sender_email', $data)) {
                $object->setIveSenderEmail($data['ive_sender_email']);
            }
            if (\array_key_exists('jurisdiction', $data)) {
                $object->setJurisdiction($data['jurisdiction']);
            }
            if (\array_key_exists('language', $data)) {
                $object->setLanguage($data['language']);
            }
            if (\array_key_exists('maximum_credit', $data)) {
                $object->setMaximumCredit($data['maximum_credit']);
            }
            if (\array_key_exists('maximum_credit_card_payment', $data)) {
                $object->setMaximumCreditCardPayment($data['maximum_credit_card_payment']);
            }
            if (\array_key_exists('maximum_i_deal_payment', $data)) {
                $object->setMaximumIDealPayment($data['maximum_i_deal_payment']);
            }
            if (\array_key_exists('maximum_western_union_payment', $data)) {
                $object->setMaximumWesternUnionPayment($data['maximum_western_union_payment']);
            }
            if (\array_key_exists('minimum_payment', $data)) {
                $object->setMinimumPayment($data['minimum_payment']);
            }
            if (\array_key_exists('minimum_western_union_payment', $data)) {
                $object->setMinimumWesternUnionPayment($data['minimum_western_union_payment']);
            }
            if (\array_key_exists('pay_methods', $data)) {
                $values = [];
                foreach ($data['pay_methods'] as $value) {
                    $values[] = $value;
                }
                $object->setPayMethods($values);
            }
            if (\array_key_exists('payment_methods', $data)) {
                $values_1 = [];
                foreach ($data['payment_methods'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethods', 'json', $context);
                }
                $object->setPaymentMethods($values_1);
            }
            if (\array_key_exists('preregistered_domain_priorities', $data)) {
                $object->setPreregisteredDomainPriorities($data['preregistered_domain_priorities']);
            }
            if (\array_key_exists('recurring_payment_methods', $data)) {
                $values_2 = [];
                foreach ($data['recurring_payment_methods'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethods', 'json', $context);
                }
                $object->setRecurringPaymentMethods($values_2);
            }
            if (\array_key_exists('renew_notification_days', $data)) {
                $values_3 = [];
                foreach ($data['renew_notification_days'] as $value_3) {
                    $values_3[] = $value_3;
                }
                $object->setRenewNotificationDays($values_3);
            }
            if (\array_key_exists('renew_notification_every_week', $data)) {
                $object->setRenewNotificationEveryWeek($data['renew_notification_every_week']);
            }
            if (\array_key_exists('signed_contracts', $data)) {
                $values_4 = [];
                foreach ($data['signed_contracts'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts', 'json', $context);
                }
                $object->setSignedContracts($values_4);
            }
            if (\array_key_exists('tac_contract', $data)) {
                $object->setTacContract($this->denormalizer->denormalize($data['tac_contract'], 'Rouda\\OpenProviderAPI\\Model\\SettingsTacContract', 'json', $context));
            }
            if (\array_key_exists('tags', $data)) {
                $values_5 = [];
                foreach ($data['tags'] as $value_5) {
                    $values_5[] = $value_5;
                }
                $object->setTags($values_5);
            }
            if (\array_key_exists('transaction_fee', $data)) {
                $object->setTransactionFee($this->denormalizer->denormalize($data['transaction_fee'], 'Rouda\\OpenProviderAPI\\Model\\SettingsTransactionFee', 'json', $context));
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('avHandle') && null !== $object->getAvHandle()) {
                $data['av_handle'] = $object->getAvHandle();
            }
            if ($object->isInitialized('claimsConfirmUrl') && null !== $object->getClaimsConfirmUrl()) {
                $data['claims_confirm_url'] = $object->getClaimsConfirmUrl();
            }
            if ($object->isInitialized('claimsEmailSubject') && null !== $object->getClaimsEmailSubject()) {
                $data['claims_email_subject'] = $object->getClaimsEmailSubject();
            }
            if ($object->isInitialized('claimsResellerName') && null !== $object->getClaimsResellerName()) {
                $data['claims_reseller_name'] = $object->getClaimsResellerName();
            }
            if ($object->isInitialized('claimsSenderEmail') && null !== $object->getClaimsSenderEmail()) {
                $data['claims_sender_email'] = $object->getClaimsSenderEmail();
            }
            if ($object->isInitialized('currency') && null !== $object->getCurrency()) {
                $data['currency'] = $object->getCurrency();
            }
            if ($object->isInitialized('defaultDomainBillingHandle') && null !== $object->getDefaultDomainBillingHandle()) {
                $data['default_domain_billing_handle'] = $object->getDefaultDomainBillingHandle();
            }
            if ($object->isInitialized('defaultDomainResellerHandle') && null !== $object->getDefaultDomainResellerHandle()) {
                $data['default_domain_reseller_handle'] = $object->getDefaultDomainResellerHandle();
            }
            if ($object->isInitialized('foaConfirmUrl') && null !== $object->getFoaConfirmUrl()) {
                $data['foa_confirm_url'] = $object->getFoaConfirmUrl();
            }
            if ($object->isInitialized('foaEmailSubject') && null !== $object->getFoaEmailSubject()) {
                $data['foa_email_subject'] = $object->getFoaEmailSubject();
            }
            if ($object->isInitialized('foaResellerName') && null !== $object->getFoaResellerName()) {
                $data['foa_reseller_name'] = $object->getFoaResellerName();
            }
            if ($object->isInitialized('foaSenderEmail') && null !== $object->getFoaSenderEmail()) {
                $data['foa_sender_email'] = $object->getFoaSenderEmail();
            }
            if ($object->isInitialized('foaTermsConditionsUrl') && null !== $object->getFoaTermsConditionsUrl()) {
                $data['foa_terms_conditions_url'] = $object->getFoaTermsConditionsUrl();
            }
            if ($object->isInitialized('isAutoRenewEnabled') && null !== $object->getIsAutoRenewEnabled()) {
                $data['is_auto_renew_enabled'] = $object->getIsAutoRenewEnabled();
            }
            if ($object->isInitialized('isCustomNsesEnabled') && null !== $object->getIsCustomNsesEnabled()) {
                $data['is_custom_nses_enabled'] = $object->getIsCustomNsesEnabled();
            }
            if ($object->isInitialized('ive2CustomizedBody') && null !== $object->getIve2CustomizedBody()) {
                $data['ive2_customized_body'] = $object->getIve2CustomizedBody();
            }
            if ($object->isInitialized('ive2EmailSubject') && null !== $object->getIve2EmailSubject()) {
                $data['ive2_email_subject'] = $object->getIve2EmailSubject();
            }
            if ($object->isInitialized('iveConfirmUrl') && null !== $object->getIveConfirmUrl()) {
                $data['ive_confirm_url'] = $object->getIveConfirmUrl();
            }
            if ($object->isInitialized('iveCustomizedBody') && null !== $object->getIveCustomizedBody()) {
                $data['ive_customized_body'] = $object->getIveCustomizedBody();
            }
            if ($object->isInitialized('iveEmailSubject') && null !== $object->getIveEmailSubject()) {
                $data['ive_email_subject'] = $object->getIveEmailSubject();
            }
            if ($object->isInitialized('iveResellerName') && null !== $object->getIveResellerName()) {
                $data['ive_reseller_name'] = $object->getIveResellerName();
            }
            if ($object->isInitialized('iveSenderEmail') && null !== $object->getIveSenderEmail()) {
                $data['ive_sender_email'] = $object->getIveSenderEmail();
            }
            if ($object->isInitialized('jurisdiction') && null !== $object->getJurisdiction()) {
                $data['jurisdiction'] = $object->getJurisdiction();
            }
            if ($object->isInitialized('language') && null !== $object->getLanguage()) {
                $data['language'] = $object->getLanguage();
            }
            if ($object->isInitialized('maximumCredit') && null !== $object->getMaximumCredit()) {
                $data['maximum_credit'] = $object->getMaximumCredit();
            }
            if ($object->isInitialized('maximumCreditCardPayment') && null !== $object->getMaximumCreditCardPayment()) {
                $data['maximum_credit_card_payment'] = $object->getMaximumCreditCardPayment();
            }
            if ($object->isInitialized('maximumIDealPayment') && null !== $object->getMaximumIDealPayment()) {
                $data['maximum_i_deal_payment'] = $object->getMaximumIDealPayment();
            }
            if ($object->isInitialized('maximumWesternUnionPayment') && null !== $object->getMaximumWesternUnionPayment()) {
                $data['maximum_western_union_payment'] = $object->getMaximumWesternUnionPayment();
            }
            if ($object->isInitialized('minimumPayment') && null !== $object->getMinimumPayment()) {
                $data['minimum_payment'] = $object->getMinimumPayment();
            }
            if ($object->isInitialized('minimumWesternUnionPayment') && null !== $object->getMinimumWesternUnionPayment()) {
                $data['minimum_western_union_payment'] = $object->getMinimumWesternUnionPayment();
            }
            if ($object->isInitialized('payMethods') && null !== $object->getPayMethods()) {
                $values = [];
                foreach ($object->getPayMethods() as $value) {
                    $values[] = $value;
                }
                $data['pay_methods'] = $values;
            }
            if ($object->isInitialized('paymentMethods') && null !== $object->getPaymentMethods()) {
                $values_1 = [];
                foreach ($object->getPaymentMethods() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['payment_methods'] = $values_1;
            }
            if ($object->isInitialized('preregisteredDomainPriorities') && null !== $object->getPreregisteredDomainPriorities()) {
                $data['preregistered_domain_priorities'] = $object->getPreregisteredDomainPriorities();
            }
            if ($object->isInitialized('recurringPaymentMethods') && null !== $object->getRecurringPaymentMethods()) {
                $values_2 = [];
                foreach ($object->getRecurringPaymentMethods() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['recurring_payment_methods'] = $values_2;
            }
            if ($object->isInitialized('renewNotificationDays') && null !== $object->getRenewNotificationDays()) {
                $values_3 = [];
                foreach ($object->getRenewNotificationDays() as $value_3) {
                    $values_3[] = $value_3;
                }
                $data['renew_notification_days'] = $values_3;
            }
            if ($object->isInitialized('renewNotificationEveryWeek') && null !== $object->getRenewNotificationEveryWeek()) {
                $data['renew_notification_every_week'] = $object->getRenewNotificationEveryWeek();
            }
            if ($object->isInitialized('signedContracts') && null !== $object->getSignedContracts()) {
                $values_4 = [];
                foreach ($object->getSignedContracts() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['signed_contracts'] = $values_4;
            }
            if ($object->isInitialized('tacContract') && null !== $object->getTacContract()) {
                $data['tac_contract'] = $this->normalizer->normalize($object->getTacContract(), 'json', $context);
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_5 = [];
                foreach ($object->getTags() as $value_5) {
                    $values_5[] = $value_5;
                }
                $data['tags'] = $values_5;
            }
            if ($object->isInitialized('transactionFee') && null !== $object->getTransactionFee()) {
                $data['transaction_fee'] = $this->normalizer->normalize($object->getTransactionFee(), 'json', $context);
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SettingsGetSettingsResponseData' => false];
        }
    }
}