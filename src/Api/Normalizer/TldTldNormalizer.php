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
    class TldTldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TldTld';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TldTld';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\TldTld();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_handle_supported', $data) && $data['admin_handle_supported'] !== null) {
                $object->setAdminHandleSupported($data['admin_handle_supported']);
            }
            elseif (\array_key_exists('admin_handle_supported', $data) && $data['admin_handle_supported'] === null) {
                $object->setAdminHandleSupported(null);
            }
            if (\array_key_exists('billing_handle_enabled', $data) && $data['billing_handle_enabled'] !== null) {
                $object->setBillingHandleEnabled($data['billing_handle_enabled']);
            }
            elseif (\array_key_exists('billing_handle_enabled', $data) && $data['billing_handle_enabled'] === null) {
                $object->setBillingHandleEnabled(null);
            }
            if (\array_key_exists('billing_handle_supported', $data) && $data['billing_handle_supported'] !== null) {
                $object->setBillingHandleSupported($data['billing_handle_supported']);
            }
            elseif (\array_key_exists('billing_handle_supported', $data) && $data['billing_handle_supported'] === null) {
                $object->setBillingHandleSupported(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($this->denormalizer->denormalize($data['description'], 'Rouda\\OpenProvider\\Api\\Model\\TldDescription', 'json', $context));
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('dnssec_algorithms', $data) && $data['dnssec_algorithms'] !== null) {
                $values = [];
                foreach ($data['dnssec_algorithms'] as $value) {
                    $values[] = $value;
                }
                $object->setDnssecAlgorithms($values);
            }
            elseif (\array_key_exists('dnssec_algorithms', $data) && $data['dnssec_algorithms'] === null) {
                $object->setDnssecAlgorithms(null);
            }
            if (\array_key_exists('dnssec_allowed', $data) && $data['dnssec_allowed'] !== null) {
                $object->setDnssecAllowed($data['dnssec_allowed']);
            }
            elseif (\array_key_exists('dnssec_allowed', $data) && $data['dnssec_allowed'] === null) {
                $object->setDnssecAllowed(null);
            }
            if (\array_key_exists('dnssec_digests_allowed', $data) && $data['dnssec_digests_allowed'] !== null) {
                $object->setDnssecDigestsAllowed($data['dnssec_digests_allowed']);
            }
            elseif (\array_key_exists('dnssec_digests_allowed', $data) && $data['dnssec_digests_allowed'] === null) {
                $object->setDnssecDigestsAllowed(null);
            }
            if (\array_key_exists('dnssec_keys_allowed', $data) && $data['dnssec_keys_allowed'] !== null) {
                $object->setDnssecKeysAllowed($data['dnssec_keys_allowed']);
            }
            elseif (\array_key_exists('dnssec_keys_allowed', $data) && $data['dnssec_keys_allowed'] === null) {
                $object->setDnssecKeysAllowed(null);
            }
            if (\array_key_exists('dnssec_max_records_amount', $data) && $data['dnssec_max_records_amount'] !== null) {
                $object->setDnssecMaxRecordsAmount($data['dnssec_max_records_amount']);
            }
            elseif (\array_key_exists('dnssec_max_records_amount', $data) && $data['dnssec_max_records_amount'] === null) {
                $object->setDnssecMaxRecordsAmount(null);
            }
            if (\array_key_exists('domicile_available', $data) && $data['domicile_available'] !== null) {
                $object->setDomicileAvailable($data['domicile_available']);
            }
            elseif (\array_key_exists('domicile_available', $data) && $data['domicile_available'] === null) {
                $object->setDomicileAvailable(null);
            }
            if (\array_key_exists('is_auth_code_available', $data) && $data['is_auth_code_available'] !== null) {
                $object->setIsAuthCodeAvailable($data['is_auth_code_available']);
            }
            elseif (\array_key_exists('is_auth_code_available', $data) && $data['is_auth_code_available'] === null) {
                $object->setIsAuthCodeAvailable(null);
            }
            if (\array_key_exists('is_auth_code_changeable', $data) && $data['is_auth_code_changeable'] !== null) {
                $object->setIsAuthCodeChangeable($data['is_auth_code_changeable']);
            }
            elseif (\array_key_exists('is_auth_code_changeable', $data) && $data['is_auth_code_changeable'] === null) {
                $object->setIsAuthCodeChangeable(null);
            }
            if (\array_key_exists('is_auth_code_requested', $data) && $data['is_auth_code_requested'] !== null) {
                $object->setIsAuthCodeRequested($data['is_auth_code_requested']);
            }
            elseif (\array_key_exists('is_auth_code_requested', $data) && $data['is_auth_code_requested'] === null) {
                $object->setIsAuthCodeRequested(null);
            }
            if (\array_key_exists('is_private_whois_allowed', $data) && $data['is_private_whois_allowed'] !== null) {
                $object->setIsPrivateWhoisAllowed($data['is_private_whois_allowed']);
            }
            elseif (\array_key_exists('is_private_whois_allowed', $data) && $data['is_private_whois_allowed'] === null) {
                $object->setIsPrivateWhoisAllowed(null);
            }
            if (\array_key_exists('is_trade_auth_code_required', $data) && $data['is_trade_auth_code_required'] !== null) {
                $object->setIsTradeAuthCodeRequired($data['is_trade_auth_code_required']);
            }
            elseif (\array_key_exists('is_trade_auth_code_required', $data) && $data['is_trade_auth_code_required'] === null) {
                $object->setIsTradeAuthCodeRequired(null);
            }
            if (\array_key_exists('is_transfer_auth_code_required', $data) && $data['is_transfer_auth_code_required'] !== null) {
                $object->setIsTransferAuthCodeRequired($data['is_transfer_auth_code_required']);
            }
            elseif (\array_key_exists('is_transfer_auth_code_required', $data) && $data['is_transfer_auth_code_required'] === null) {
                $object->setIsTransferAuthCodeRequired(null);
            }
            if (\array_key_exists('level_prices', $data) && $data['level_prices'] !== null) {
                $values_1 = [];
                foreach ($data['level_prices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\TldLevelPrice', 'json', $context);
                }
                $object->setLevelPrices($values_1);
            }
            elseif (\array_key_exists('level_prices', $data) && $data['level_prices'] === null) {
                $object->setLevelPrices(null);
            }
            if (\array_key_exists('max_period', $data) && $data['max_period'] !== null) {
                $object->setMaxPeriod($data['max_period']);
            }
            elseif (\array_key_exists('max_period', $data) && $data['max_period'] === null) {
                $object->setMaxPeriod(null);
            }
            if (\array_key_exists('min_period', $data) && $data['min_period'] !== null) {
                $object->setMinPeriod($data['min_period']);
            }
            elseif (\array_key_exists('min_period', $data) && $data['min_period'] === null) {
                $object->setMinPeriod(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('owner_handle_supported', $data) && $data['owner_handle_supported'] !== null) {
                $object->setOwnerHandleSupported($data['owner_handle_supported']);
            }
            elseif (\array_key_exists('owner_handle_supported', $data) && $data['owner_handle_supported'] === null) {
                $object->setOwnerHandleSupported(null);
            }
            if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
                $object->setPrices($this->denormalizer->denormalize($data['prices'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrices', 'json', $context));
            }
            elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
                $object->setPrices(null);
            }
            if (\array_key_exists('quarantine_period', $data) && $data['quarantine_period'] !== null) {
                $object->setQuarantinePeriod($data['quarantine_period']);
            }
            elseif (\array_key_exists('quarantine_period', $data) && $data['quarantine_period'] === null) {
                $object->setQuarantinePeriod(null);
            }
            if (\array_key_exists('renew_available', $data) && $data['renew_available'] !== null) {
                $object->setRenewAvailable($data['renew_available']);
            }
            elseif (\array_key_exists('renew_available', $data) && $data['renew_available'] === null) {
                $object->setRenewAvailable(null);
            }
            if (\array_key_exists('reseller_handle_enabled', $data) && $data['reseller_handle_enabled'] !== null) {
                $object->setResellerHandleEnabled($data['reseller_handle_enabled']);
            }
            elseif (\array_key_exists('reseller_handle_enabled', $data) && $data['reseller_handle_enabled'] === null) {
                $object->setResellerHandleEnabled(null);
            }
            if (\array_key_exists('reseller_handle_supported', $data) && $data['reseller_handle_supported'] !== null) {
                $object->setResellerHandleSupported($data['reseller_handle_supported']);
            }
            elseif (\array_key_exists('reseller_handle_supported', $data) && $data['reseller_handle_supported'] === null) {
                $object->setResellerHandleSupported(null);
            }
            if (\array_key_exists('restrictions', $data) && $data['restrictions'] !== null) {
                $values_2 = [];
                foreach ($data['restrictions'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRestrictions($values_2);
            }
            elseif (\array_key_exists('restrictions', $data) && $data['restrictions'] === null) {
                $object->setRestrictions(null);
            }
            if (\array_key_exists('soft_quarantine_period', $data) && $data['soft_quarantine_period'] !== null) {
                $object->setSoftQuarantinePeriod($data['soft_quarantine_period']);
            }
            elseif (\array_key_exists('soft_quarantine_period', $data) && $data['soft_quarantine_period'] === null) {
                $object->setSoftQuarantinePeriod(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('supported_application_mode', $data) && $data['supported_application_mode'] !== null) {
                $values_3 = [];
                foreach ($data['supported_application_mode'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Rouda\\OpenProvider\\Api\\Model\\TldApplicationMode', 'json', $context);
                }
                $object->setSupportedApplicationMode($values_3);
            }
            elseif (\array_key_exists('supported_application_mode', $data) && $data['supported_application_mode'] === null) {
                $object->setSupportedApplicationMode(null);
            }
            if (\array_key_exists('supported_idn_scripts', $data) && $data['supported_idn_scripts'] !== null) {
                $values_4 = [];
                foreach ($data['supported_idn_scripts'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'Rouda\\OpenProvider\\Api\\Model\\TldIdnScript', 'json', $context);
                }
                $object->setSupportedIdnScripts($values_4);
            }
            elseif (\array_key_exists('supported_idn_scripts', $data) && $data['supported_idn_scripts'] === null) {
                $object->setSupportedIdnScripts(null);
            }
            if (\array_key_exists('tech_handle_supported', $data) && $data['tech_handle_supported'] !== null) {
                $object->setTechHandleSupported($data['tech_handle_supported']);
            }
            elseif (\array_key_exists('tech_handle_supported', $data) && $data['tech_handle_supported'] === null) {
                $object->setTechHandleSupported(null);
            }
            if (\array_key_exists('trade_available', $data) && $data['trade_available'] !== null) {
                $object->setTradeAvailable($data['trade_available']);
            }
            elseif (\array_key_exists('trade_available', $data) && $data['trade_available'] === null) {
                $object->setTradeAvailable(null);
            }
            if (\array_key_exists('transfer_available', $data) && $data['transfer_available'] !== null) {
                $object->setTransferAvailable($data['transfer_available']);
            }
            elseif (\array_key_exists('transfer_available', $data) && $data['transfer_available'] === null) {
                $object->setTransferAvailable(null);
            }
            if (\array_key_exists('usage_count', $data) && $data['usage_count'] !== null) {
                $object->setUsageCount($data['usage_count']);
            }
            elseif (\array_key_exists('usage_count', $data) && $data['usage_count'] === null) {
                $object->setUsageCount(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('adminHandleSupported') && null !== $object->getAdminHandleSupported()) {
                $data['admin_handle_supported'] = $object->getAdminHandleSupported();
            }
            if ($object->isInitialized('billingHandleEnabled') && null !== $object->getBillingHandleEnabled()) {
                $data['billing_handle_enabled'] = $object->getBillingHandleEnabled();
            }
            if ($object->isInitialized('billingHandleSupported') && null !== $object->getBillingHandleSupported()) {
                $data['billing_handle_supported'] = $object->getBillingHandleSupported();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $this->normalizer->normalize($object->getDescription(), 'json', $context);
            }
            if ($object->isInitialized('dnssecAlgorithms') && null !== $object->getDnssecAlgorithms()) {
                $values = [];
                foreach ($object->getDnssecAlgorithms() as $value) {
                    $values[] = $value;
                }
                $data['dnssec_algorithms'] = $values;
            }
            if ($object->isInitialized('dnssecAllowed') && null !== $object->getDnssecAllowed()) {
                $data['dnssec_allowed'] = $object->getDnssecAllowed();
            }
            if ($object->isInitialized('dnssecDigestsAllowed') && null !== $object->getDnssecDigestsAllowed()) {
                $data['dnssec_digests_allowed'] = $object->getDnssecDigestsAllowed();
            }
            if ($object->isInitialized('dnssecKeysAllowed') && null !== $object->getDnssecKeysAllowed()) {
                $data['dnssec_keys_allowed'] = $object->getDnssecKeysAllowed();
            }
            if ($object->isInitialized('dnssecMaxRecordsAmount') && null !== $object->getDnssecMaxRecordsAmount()) {
                $data['dnssec_max_records_amount'] = $object->getDnssecMaxRecordsAmount();
            }
            if ($object->isInitialized('domicileAvailable') && null !== $object->getDomicileAvailable()) {
                $data['domicile_available'] = $object->getDomicileAvailable();
            }
            if ($object->isInitialized('isAuthCodeAvailable') && null !== $object->getIsAuthCodeAvailable()) {
                $data['is_auth_code_available'] = $object->getIsAuthCodeAvailable();
            }
            if ($object->isInitialized('isAuthCodeChangeable') && null !== $object->getIsAuthCodeChangeable()) {
                $data['is_auth_code_changeable'] = $object->getIsAuthCodeChangeable();
            }
            if ($object->isInitialized('isAuthCodeRequested') && null !== $object->getIsAuthCodeRequested()) {
                $data['is_auth_code_requested'] = $object->getIsAuthCodeRequested();
            }
            if ($object->isInitialized('isPrivateWhoisAllowed') && null !== $object->getIsPrivateWhoisAllowed()) {
                $data['is_private_whois_allowed'] = $object->getIsPrivateWhoisAllowed();
            }
            if ($object->isInitialized('isTradeAuthCodeRequired') && null !== $object->getIsTradeAuthCodeRequired()) {
                $data['is_trade_auth_code_required'] = $object->getIsTradeAuthCodeRequired();
            }
            if ($object->isInitialized('isTransferAuthCodeRequired') && null !== $object->getIsTransferAuthCodeRequired()) {
                $data['is_transfer_auth_code_required'] = $object->getIsTransferAuthCodeRequired();
            }
            if ($object->isInitialized('levelPrices') && null !== $object->getLevelPrices()) {
                $values_1 = [];
                foreach ($object->getLevelPrices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['level_prices'] = $values_1;
            }
            if ($object->isInitialized('maxPeriod') && null !== $object->getMaxPeriod()) {
                $data['max_period'] = $object->getMaxPeriod();
            }
            if ($object->isInitialized('minPeriod') && null !== $object->getMinPeriod()) {
                $data['min_period'] = $object->getMinPeriod();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('ownerHandleSupported') && null !== $object->getOwnerHandleSupported()) {
                $data['owner_handle_supported'] = $object->getOwnerHandleSupported();
            }
            if ($object->isInitialized('prices') && null !== $object->getPrices()) {
                $data['prices'] = $this->normalizer->normalize($object->getPrices(), 'json', $context);
            }
            if ($object->isInitialized('quarantinePeriod') && null !== $object->getQuarantinePeriod()) {
                $data['quarantine_period'] = $object->getQuarantinePeriod();
            }
            if ($object->isInitialized('renewAvailable') && null !== $object->getRenewAvailable()) {
                $data['renew_available'] = $object->getRenewAvailable();
            }
            if ($object->isInitialized('resellerHandleEnabled') && null !== $object->getResellerHandleEnabled()) {
                $data['reseller_handle_enabled'] = $object->getResellerHandleEnabled();
            }
            if ($object->isInitialized('resellerHandleSupported') && null !== $object->getResellerHandleSupported()) {
                $data['reseller_handle_supported'] = $object->getResellerHandleSupported();
            }
            if ($object->isInitialized('restrictions') && null !== $object->getRestrictions()) {
                $values_2 = [];
                foreach ($object->getRestrictions() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['restrictions'] = $values_2;
            }
            if ($object->isInitialized('softQuarantinePeriod') && null !== $object->getSoftQuarantinePeriod()) {
                $data['soft_quarantine_period'] = $object->getSoftQuarantinePeriod();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('supportedApplicationMode') && null !== $object->getSupportedApplicationMode()) {
                $values_3 = [];
                foreach ($object->getSupportedApplicationMode() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['supported_application_mode'] = $values_3;
            }
            if ($object->isInitialized('supportedIdnScripts') && null !== $object->getSupportedIdnScripts()) {
                $values_4 = [];
                foreach ($object->getSupportedIdnScripts() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['supported_idn_scripts'] = $values_4;
            }
            if ($object->isInitialized('techHandleSupported') && null !== $object->getTechHandleSupported()) {
                $data['tech_handle_supported'] = $object->getTechHandleSupported();
            }
            if ($object->isInitialized('tradeAvailable') && null !== $object->getTradeAvailable()) {
                $data['trade_available'] = $object->getTradeAvailable();
            }
            if ($object->isInitialized('transferAvailable') && null !== $object->getTransferAvailable()) {
                $data['transfer_available'] = $object->getTransferAvailable();
            }
            if ($object->isInitialized('usageCount') && null !== $object->getUsageCount()) {
                $data['usage_count'] = $object->getUsageCount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\TldTld' => false];
        }
    }
} else {
    class TldTldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TldTld';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TldTld';
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
            $object = new \Rouda\OpenProvider\Api\Model\TldTld();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_handle_supported', $data) && $data['admin_handle_supported'] !== null) {
                $object->setAdminHandleSupported($data['admin_handle_supported']);
            }
            elseif (\array_key_exists('admin_handle_supported', $data) && $data['admin_handle_supported'] === null) {
                $object->setAdminHandleSupported(null);
            }
            if (\array_key_exists('billing_handle_enabled', $data) && $data['billing_handle_enabled'] !== null) {
                $object->setBillingHandleEnabled($data['billing_handle_enabled']);
            }
            elseif (\array_key_exists('billing_handle_enabled', $data) && $data['billing_handle_enabled'] === null) {
                $object->setBillingHandleEnabled(null);
            }
            if (\array_key_exists('billing_handle_supported', $data) && $data['billing_handle_supported'] !== null) {
                $object->setBillingHandleSupported($data['billing_handle_supported']);
            }
            elseif (\array_key_exists('billing_handle_supported', $data) && $data['billing_handle_supported'] === null) {
                $object->setBillingHandleSupported(null);
            }
            if (\array_key_exists('description', $data) && $data['description'] !== null) {
                $object->setDescription($this->denormalizer->denormalize($data['description'], 'Rouda\\OpenProvider\\Api\\Model\\TldDescription', 'json', $context));
            }
            elseif (\array_key_exists('description', $data) && $data['description'] === null) {
                $object->setDescription(null);
            }
            if (\array_key_exists('dnssec_algorithms', $data) && $data['dnssec_algorithms'] !== null) {
                $values = [];
                foreach ($data['dnssec_algorithms'] as $value) {
                    $values[] = $value;
                }
                $object->setDnssecAlgorithms($values);
            }
            elseif (\array_key_exists('dnssec_algorithms', $data) && $data['dnssec_algorithms'] === null) {
                $object->setDnssecAlgorithms(null);
            }
            if (\array_key_exists('dnssec_allowed', $data) && $data['dnssec_allowed'] !== null) {
                $object->setDnssecAllowed($data['dnssec_allowed']);
            }
            elseif (\array_key_exists('dnssec_allowed', $data) && $data['dnssec_allowed'] === null) {
                $object->setDnssecAllowed(null);
            }
            if (\array_key_exists('dnssec_digests_allowed', $data) && $data['dnssec_digests_allowed'] !== null) {
                $object->setDnssecDigestsAllowed($data['dnssec_digests_allowed']);
            }
            elseif (\array_key_exists('dnssec_digests_allowed', $data) && $data['dnssec_digests_allowed'] === null) {
                $object->setDnssecDigestsAllowed(null);
            }
            if (\array_key_exists('dnssec_keys_allowed', $data) && $data['dnssec_keys_allowed'] !== null) {
                $object->setDnssecKeysAllowed($data['dnssec_keys_allowed']);
            }
            elseif (\array_key_exists('dnssec_keys_allowed', $data) && $data['dnssec_keys_allowed'] === null) {
                $object->setDnssecKeysAllowed(null);
            }
            if (\array_key_exists('dnssec_max_records_amount', $data) && $data['dnssec_max_records_amount'] !== null) {
                $object->setDnssecMaxRecordsAmount($data['dnssec_max_records_amount']);
            }
            elseif (\array_key_exists('dnssec_max_records_amount', $data) && $data['dnssec_max_records_amount'] === null) {
                $object->setDnssecMaxRecordsAmount(null);
            }
            if (\array_key_exists('domicile_available', $data) && $data['domicile_available'] !== null) {
                $object->setDomicileAvailable($data['domicile_available']);
            }
            elseif (\array_key_exists('domicile_available', $data) && $data['domicile_available'] === null) {
                $object->setDomicileAvailable(null);
            }
            if (\array_key_exists('is_auth_code_available', $data) && $data['is_auth_code_available'] !== null) {
                $object->setIsAuthCodeAvailable($data['is_auth_code_available']);
            }
            elseif (\array_key_exists('is_auth_code_available', $data) && $data['is_auth_code_available'] === null) {
                $object->setIsAuthCodeAvailable(null);
            }
            if (\array_key_exists('is_auth_code_changeable', $data) && $data['is_auth_code_changeable'] !== null) {
                $object->setIsAuthCodeChangeable($data['is_auth_code_changeable']);
            }
            elseif (\array_key_exists('is_auth_code_changeable', $data) && $data['is_auth_code_changeable'] === null) {
                $object->setIsAuthCodeChangeable(null);
            }
            if (\array_key_exists('is_auth_code_requested', $data) && $data['is_auth_code_requested'] !== null) {
                $object->setIsAuthCodeRequested($data['is_auth_code_requested']);
            }
            elseif (\array_key_exists('is_auth_code_requested', $data) && $data['is_auth_code_requested'] === null) {
                $object->setIsAuthCodeRequested(null);
            }
            if (\array_key_exists('is_private_whois_allowed', $data) && $data['is_private_whois_allowed'] !== null) {
                $object->setIsPrivateWhoisAllowed($data['is_private_whois_allowed']);
            }
            elseif (\array_key_exists('is_private_whois_allowed', $data) && $data['is_private_whois_allowed'] === null) {
                $object->setIsPrivateWhoisAllowed(null);
            }
            if (\array_key_exists('is_trade_auth_code_required', $data) && $data['is_trade_auth_code_required'] !== null) {
                $object->setIsTradeAuthCodeRequired($data['is_trade_auth_code_required']);
            }
            elseif (\array_key_exists('is_trade_auth_code_required', $data) && $data['is_trade_auth_code_required'] === null) {
                $object->setIsTradeAuthCodeRequired(null);
            }
            if (\array_key_exists('is_transfer_auth_code_required', $data) && $data['is_transfer_auth_code_required'] !== null) {
                $object->setIsTransferAuthCodeRequired($data['is_transfer_auth_code_required']);
            }
            elseif (\array_key_exists('is_transfer_auth_code_required', $data) && $data['is_transfer_auth_code_required'] === null) {
                $object->setIsTransferAuthCodeRequired(null);
            }
            if (\array_key_exists('level_prices', $data) && $data['level_prices'] !== null) {
                $values_1 = [];
                foreach ($data['level_prices'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProvider\\Api\\Model\\TldLevelPrice', 'json', $context);
                }
                $object->setLevelPrices($values_1);
            }
            elseif (\array_key_exists('level_prices', $data) && $data['level_prices'] === null) {
                $object->setLevelPrices(null);
            }
            if (\array_key_exists('max_period', $data) && $data['max_period'] !== null) {
                $object->setMaxPeriod($data['max_period']);
            }
            elseif (\array_key_exists('max_period', $data) && $data['max_period'] === null) {
                $object->setMaxPeriod(null);
            }
            if (\array_key_exists('min_period', $data) && $data['min_period'] !== null) {
                $object->setMinPeriod($data['min_period']);
            }
            elseif (\array_key_exists('min_period', $data) && $data['min_period'] === null) {
                $object->setMinPeriod(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('owner_handle_supported', $data) && $data['owner_handle_supported'] !== null) {
                $object->setOwnerHandleSupported($data['owner_handle_supported']);
            }
            elseif (\array_key_exists('owner_handle_supported', $data) && $data['owner_handle_supported'] === null) {
                $object->setOwnerHandleSupported(null);
            }
            if (\array_key_exists('prices', $data) && $data['prices'] !== null) {
                $object->setPrices($this->denormalizer->denormalize($data['prices'], 'Rouda\\OpenProvider\\Api\\Model\\TldPrices', 'json', $context));
            }
            elseif (\array_key_exists('prices', $data) && $data['prices'] === null) {
                $object->setPrices(null);
            }
            if (\array_key_exists('quarantine_period', $data) && $data['quarantine_period'] !== null) {
                $object->setQuarantinePeriod($data['quarantine_period']);
            }
            elseif (\array_key_exists('quarantine_period', $data) && $data['quarantine_period'] === null) {
                $object->setQuarantinePeriod(null);
            }
            if (\array_key_exists('renew_available', $data) && $data['renew_available'] !== null) {
                $object->setRenewAvailable($data['renew_available']);
            }
            elseif (\array_key_exists('renew_available', $data) && $data['renew_available'] === null) {
                $object->setRenewAvailable(null);
            }
            if (\array_key_exists('reseller_handle_enabled', $data) && $data['reseller_handle_enabled'] !== null) {
                $object->setResellerHandleEnabled($data['reseller_handle_enabled']);
            }
            elseif (\array_key_exists('reseller_handle_enabled', $data) && $data['reseller_handle_enabled'] === null) {
                $object->setResellerHandleEnabled(null);
            }
            if (\array_key_exists('reseller_handle_supported', $data) && $data['reseller_handle_supported'] !== null) {
                $object->setResellerHandleSupported($data['reseller_handle_supported']);
            }
            elseif (\array_key_exists('reseller_handle_supported', $data) && $data['reseller_handle_supported'] === null) {
                $object->setResellerHandleSupported(null);
            }
            if (\array_key_exists('restrictions', $data) && $data['restrictions'] !== null) {
                $values_2 = [];
                foreach ($data['restrictions'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setRestrictions($values_2);
            }
            elseif (\array_key_exists('restrictions', $data) && $data['restrictions'] === null) {
                $object->setRestrictions(null);
            }
            if (\array_key_exists('soft_quarantine_period', $data) && $data['soft_quarantine_period'] !== null) {
                $object->setSoftQuarantinePeriod($data['soft_quarantine_period']);
            }
            elseif (\array_key_exists('soft_quarantine_period', $data) && $data['soft_quarantine_period'] === null) {
                $object->setSoftQuarantinePeriod(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('supported_application_mode', $data) && $data['supported_application_mode'] !== null) {
                $values_3 = [];
                foreach ($data['supported_application_mode'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, 'Rouda\\OpenProvider\\Api\\Model\\TldApplicationMode', 'json', $context);
                }
                $object->setSupportedApplicationMode($values_3);
            }
            elseif (\array_key_exists('supported_application_mode', $data) && $data['supported_application_mode'] === null) {
                $object->setSupportedApplicationMode(null);
            }
            if (\array_key_exists('supported_idn_scripts', $data) && $data['supported_idn_scripts'] !== null) {
                $values_4 = [];
                foreach ($data['supported_idn_scripts'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, 'Rouda\\OpenProvider\\Api\\Model\\TldIdnScript', 'json', $context);
                }
                $object->setSupportedIdnScripts($values_4);
            }
            elseif (\array_key_exists('supported_idn_scripts', $data) && $data['supported_idn_scripts'] === null) {
                $object->setSupportedIdnScripts(null);
            }
            if (\array_key_exists('tech_handle_supported', $data) && $data['tech_handle_supported'] !== null) {
                $object->setTechHandleSupported($data['tech_handle_supported']);
            }
            elseif (\array_key_exists('tech_handle_supported', $data) && $data['tech_handle_supported'] === null) {
                $object->setTechHandleSupported(null);
            }
            if (\array_key_exists('trade_available', $data) && $data['trade_available'] !== null) {
                $object->setTradeAvailable($data['trade_available']);
            }
            elseif (\array_key_exists('trade_available', $data) && $data['trade_available'] === null) {
                $object->setTradeAvailable(null);
            }
            if (\array_key_exists('transfer_available', $data) && $data['transfer_available'] !== null) {
                $object->setTransferAvailable($data['transfer_available']);
            }
            elseif (\array_key_exists('transfer_available', $data) && $data['transfer_available'] === null) {
                $object->setTransferAvailable(null);
            }
            if (\array_key_exists('usage_count', $data) && $data['usage_count'] !== null) {
                $object->setUsageCount($data['usage_count']);
            }
            elseif (\array_key_exists('usage_count', $data) && $data['usage_count'] === null) {
                $object->setUsageCount(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('adminHandleSupported') && null !== $object->getAdminHandleSupported()) {
                $data['admin_handle_supported'] = $object->getAdminHandleSupported();
            }
            if ($object->isInitialized('billingHandleEnabled') && null !== $object->getBillingHandleEnabled()) {
                $data['billing_handle_enabled'] = $object->getBillingHandleEnabled();
            }
            if ($object->isInitialized('billingHandleSupported') && null !== $object->getBillingHandleSupported()) {
                $data['billing_handle_supported'] = $object->getBillingHandleSupported();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $this->normalizer->normalize($object->getDescription(), 'json', $context);
            }
            if ($object->isInitialized('dnssecAlgorithms') && null !== $object->getDnssecAlgorithms()) {
                $values = [];
                foreach ($object->getDnssecAlgorithms() as $value) {
                    $values[] = $value;
                }
                $data['dnssec_algorithms'] = $values;
            }
            if ($object->isInitialized('dnssecAllowed') && null !== $object->getDnssecAllowed()) {
                $data['dnssec_allowed'] = $object->getDnssecAllowed();
            }
            if ($object->isInitialized('dnssecDigestsAllowed') && null !== $object->getDnssecDigestsAllowed()) {
                $data['dnssec_digests_allowed'] = $object->getDnssecDigestsAllowed();
            }
            if ($object->isInitialized('dnssecKeysAllowed') && null !== $object->getDnssecKeysAllowed()) {
                $data['dnssec_keys_allowed'] = $object->getDnssecKeysAllowed();
            }
            if ($object->isInitialized('dnssecMaxRecordsAmount') && null !== $object->getDnssecMaxRecordsAmount()) {
                $data['dnssec_max_records_amount'] = $object->getDnssecMaxRecordsAmount();
            }
            if ($object->isInitialized('domicileAvailable') && null !== $object->getDomicileAvailable()) {
                $data['domicile_available'] = $object->getDomicileAvailable();
            }
            if ($object->isInitialized('isAuthCodeAvailable') && null !== $object->getIsAuthCodeAvailable()) {
                $data['is_auth_code_available'] = $object->getIsAuthCodeAvailable();
            }
            if ($object->isInitialized('isAuthCodeChangeable') && null !== $object->getIsAuthCodeChangeable()) {
                $data['is_auth_code_changeable'] = $object->getIsAuthCodeChangeable();
            }
            if ($object->isInitialized('isAuthCodeRequested') && null !== $object->getIsAuthCodeRequested()) {
                $data['is_auth_code_requested'] = $object->getIsAuthCodeRequested();
            }
            if ($object->isInitialized('isPrivateWhoisAllowed') && null !== $object->getIsPrivateWhoisAllowed()) {
                $data['is_private_whois_allowed'] = $object->getIsPrivateWhoisAllowed();
            }
            if ($object->isInitialized('isTradeAuthCodeRequired') && null !== $object->getIsTradeAuthCodeRequired()) {
                $data['is_trade_auth_code_required'] = $object->getIsTradeAuthCodeRequired();
            }
            if ($object->isInitialized('isTransferAuthCodeRequired') && null !== $object->getIsTransferAuthCodeRequired()) {
                $data['is_transfer_auth_code_required'] = $object->getIsTransferAuthCodeRequired();
            }
            if ($object->isInitialized('levelPrices') && null !== $object->getLevelPrices()) {
                $values_1 = [];
                foreach ($object->getLevelPrices() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['level_prices'] = $values_1;
            }
            if ($object->isInitialized('maxPeriod') && null !== $object->getMaxPeriod()) {
                $data['max_period'] = $object->getMaxPeriod();
            }
            if ($object->isInitialized('minPeriod') && null !== $object->getMinPeriod()) {
                $data['min_period'] = $object->getMinPeriod();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('ownerHandleSupported') && null !== $object->getOwnerHandleSupported()) {
                $data['owner_handle_supported'] = $object->getOwnerHandleSupported();
            }
            if ($object->isInitialized('prices') && null !== $object->getPrices()) {
                $data['prices'] = $this->normalizer->normalize($object->getPrices(), 'json', $context);
            }
            if ($object->isInitialized('quarantinePeriod') && null !== $object->getQuarantinePeriod()) {
                $data['quarantine_period'] = $object->getQuarantinePeriod();
            }
            if ($object->isInitialized('renewAvailable') && null !== $object->getRenewAvailable()) {
                $data['renew_available'] = $object->getRenewAvailable();
            }
            if ($object->isInitialized('resellerHandleEnabled') && null !== $object->getResellerHandleEnabled()) {
                $data['reseller_handle_enabled'] = $object->getResellerHandleEnabled();
            }
            if ($object->isInitialized('resellerHandleSupported') && null !== $object->getResellerHandleSupported()) {
                $data['reseller_handle_supported'] = $object->getResellerHandleSupported();
            }
            if ($object->isInitialized('restrictions') && null !== $object->getRestrictions()) {
                $values_2 = [];
                foreach ($object->getRestrictions() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['restrictions'] = $values_2;
            }
            if ($object->isInitialized('softQuarantinePeriod') && null !== $object->getSoftQuarantinePeriod()) {
                $data['soft_quarantine_period'] = $object->getSoftQuarantinePeriod();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('supportedApplicationMode') && null !== $object->getSupportedApplicationMode()) {
                $values_3 = [];
                foreach ($object->getSupportedApplicationMode() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['supported_application_mode'] = $values_3;
            }
            if ($object->isInitialized('supportedIdnScripts') && null !== $object->getSupportedIdnScripts()) {
                $values_4 = [];
                foreach ($object->getSupportedIdnScripts() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['supported_idn_scripts'] = $values_4;
            }
            if ($object->isInitialized('techHandleSupported') && null !== $object->getTechHandleSupported()) {
                $data['tech_handle_supported'] = $object->getTechHandleSupported();
            }
            if ($object->isInitialized('tradeAvailable') && null !== $object->getTradeAvailable()) {
                $data['trade_available'] = $object->getTradeAvailable();
            }
            if ($object->isInitialized('transferAvailable') && null !== $object->getTransferAvailable()) {
                $data['transfer_available'] = $object->getTransferAvailable();
            }
            if ($object->isInitialized('usageCount') && null !== $object->getUsageCount()) {
                $data['usage_count'] = $object->getUsageCount();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\TldTld' => false];
        }
    }
}