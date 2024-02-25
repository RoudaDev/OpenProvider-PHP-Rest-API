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
    class DomainTransferAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainTransferAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] !== null) {
                $object->setAdminSingPassId($data['admin_sing_pass_id']);
            }
            elseif (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] === null) {
                $object->setAdminSingPassId(null);
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
                $object->setCompanyRegistrationNumber(null);
            }
            if (\array_key_exists('customer_uin', $data) && $data['customer_uin'] !== null) {
                $object->setCustomerUin($data['customer_uin']);
            }
            elseif (\array_key_exists('customer_uin', $data) && $data['customer_uin'] === null) {
                $object->setCustomerUin(null);
            }
            if (\array_key_exists('customer_uin_doc_type', $data) && $data['customer_uin_doc_type'] !== null) {
                $object->setCustomerUinDocType($this->denormalizer->denormalize($data['customer_uin_doc_type'], 'Rouda\\OpenProvider\\Api\\Model\\DomainUINDocumentType', 'json', $context));
            }
            elseif (\array_key_exists('customer_uin_doc_type', $data) && $data['customer_uin_doc_type'] === null) {
                $object->setCustomerUinDocType(null);
            }
            if (\array_key_exists('domain_name_variants', $data) && $data['domain_name_variants'] !== null) {
                $values = [];
                foreach ($data['domain_name_variants'] as $value) {
                    $values[] = $value;
                }
                $object->setDomainNameVariants($values);
            }
            elseif (\array_key_exists('domain_name_variants', $data) && $data['domain_name_variants'] === null) {
                $object->setDomainNameVariants(null);
            }
            if (\array_key_exists('ftld_token', $data) && $data['ftld_token'] !== null) {
                $object->setFtldToken($data['ftld_token']);
            }
            elseif (\array_key_exists('ftld_token', $data) && $data['ftld_token'] === null) {
                $object->setFtldToken(null);
            }
            if (\array_key_exists('gay_donation_acceptance', $data) && $data['gay_donation_acceptance'] !== null) {
                $object->setGayDonationAcceptance($data['gay_donation_acceptance']);
            }
            elseif (\array_key_exists('gay_donation_acceptance', $data) && $data['gay_donation_acceptance'] === null) {
                $object->setGayDonationAcceptance(null);
            }
            if (\array_key_exists('gay_rights_protection_acceptance', $data) && $data['gay_rights_protection_acceptance'] !== null) {
                $object->setGayRightsProtectionAcceptance($data['gay_rights_protection_acceptance']);
            }
            elseif (\array_key_exists('gay_rights_protection_acceptance', $data) && $data['gay_rights_protection_acceptance'] === null) {
                $object->setGayRightsProtectionAcceptance(null);
            }
            if (\array_key_exists('idn_script', $data) && $data['idn_script'] !== null) {
                $object->setIdnScript($data['idn_script']);
            }
            elseif (\array_key_exists('idn_script', $data) && $data['idn_script'] === null) {
                $object->setIdnScript(null);
            }
            if (\array_key_exists('intended_use', $data) && $data['intended_use'] !== null) {
                $object->setIntendedUse($data['intended_use']);
            }
            elseif (\array_key_exists('intended_use', $data) && $data['intended_use'] === null) {
                $object->setIntendedUse(null);
            }
            if (\array_key_exists('legal_type', $data) && $data['legal_type'] !== null) {
                $object->setLegalType($data['legal_type']);
            }
            elseif (\array_key_exists('legal_type', $data) && $data['legal_type'] === null) {
                $object->setLegalType(null);
            }
            if (\array_key_exists('maintainer', $data) && $data['maintainer'] !== null) {
                $object->setMaintainer($data['maintainer']);
            }
            elseif (\array_key_exists('maintainer', $data) && $data['maintainer'] === null) {
                $object->setMaintainer(null);
            }
            if (\array_key_exists('membership_id', $data) && $data['membership_id'] !== null) {
                $object->setMembershipId($data['membership_id']);
            }
            elseif (\array_key_exists('membership_id', $data) && $data['membership_id'] === null) {
                $object->setMembershipId(null);
            }
            if (\array_key_exists('mobile_phone_number_verification', $data) && $data['mobile_phone_number_verification'] !== null) {
                $object->setMobilePhoneNumberVerification($data['mobile_phone_number_verification']);
            }
            elseif (\array_key_exists('mobile_phone_number_verification', $data) && $data['mobile_phone_number_verification'] === null) {
                $object->setMobilePhoneNumberVerification(null);
            }
            if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
                $object->setPassportNumber($data['passport_number']);
            }
            elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
                $object->setPassportNumber(null);
            }
            if (\array_key_exists('self_service', $data) && $data['self_service'] !== null) {
                $object->setSelfService($data['self_service']);
            }
            elseif (\array_key_exists('self_service', $data) && $data['self_service'] === null) {
                $object->setSelfService(null);
            }
            if (\array_key_exists('trademark', $data) && $data['trademark'] !== null) {
                $object->setTrademark($data['trademark']);
            }
            elseif (\array_key_exists('trademark', $data) && $data['trademark'] === null) {
                $object->setTrademark(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
            }
            if (\array_key_exists('verification_code', $data) && $data['verification_code'] !== null) {
                $object->setVerificationCode($data['verification_code']);
            }
            elseif (\array_key_exists('verification_code', $data) && $data['verification_code'] === null) {
                $object->setVerificationCode(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('adminSingPassId') && null !== $object->getAdminSingPassId()) {
                $data['admin_sing_pass_id'] = $object->getAdminSingPassId();
            }
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('customerUin') && null !== $object->getCustomerUin()) {
                $data['customer_uin'] = $object->getCustomerUin();
            }
            if ($object->isInitialized('customerUinDocType') && null !== $object->getCustomerUinDocType()) {
                $data['customer_uin_doc_type'] = $this->normalizer->normalize($object->getCustomerUinDocType(), 'json', $context);
            }
            if ($object->isInitialized('domainNameVariants') && null !== $object->getDomainNameVariants()) {
                $values = [];
                foreach ($object->getDomainNameVariants() as $value) {
                    $values[] = $value;
                }
                $data['domain_name_variants'] = $values;
            }
            if ($object->isInitialized('ftldToken') && null !== $object->getFtldToken()) {
                $data['ftld_token'] = $object->getFtldToken();
            }
            if ($object->isInitialized('gayDonationAcceptance') && null !== $object->getGayDonationAcceptance()) {
                $data['gay_donation_acceptance'] = $object->getGayDonationAcceptance();
            }
            if ($object->isInitialized('gayRightsProtectionAcceptance') && null !== $object->getGayRightsProtectionAcceptance()) {
                $data['gay_rights_protection_acceptance'] = $object->getGayRightsProtectionAcceptance();
            }
            if ($object->isInitialized('idnScript') && null !== $object->getIdnScript()) {
                $data['idn_script'] = $object->getIdnScript();
            }
            if ($object->isInitialized('intendedUse') && null !== $object->getIntendedUse()) {
                $data['intended_use'] = $object->getIntendedUse();
            }
            if ($object->isInitialized('legalType') && null !== $object->getLegalType()) {
                $data['legal_type'] = $object->getLegalType();
            }
            if ($object->isInitialized('maintainer') && null !== $object->getMaintainer()) {
                $data['maintainer'] = $object->getMaintainer();
            }
            if ($object->isInitialized('membershipId') && null !== $object->getMembershipId()) {
                $data['membership_id'] = $object->getMembershipId();
            }
            if ($object->isInitialized('mobilePhoneNumberVerification') && null !== $object->getMobilePhoneNumberVerification()) {
                $data['mobile_phone_number_verification'] = $object->getMobilePhoneNumberVerification();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('selfService') && null !== $object->getSelfService()) {
                $data['self_service'] = $object->getSelfService();
            }
            if ($object->isInitialized('trademark') && null !== $object->getTrademark()) {
                $data['trademark'] = $object->getTrademark();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('verificationCode') && null !== $object->getVerificationCode()) {
                $data['verification_code'] = $object->getVerificationCode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData' => false];
        }
    }
} else {
    class DomainTransferAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainTransferAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] !== null) {
                $object->setAdminSingPassId($data['admin_sing_pass_id']);
            }
            elseif (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] === null) {
                $object->setAdminSingPassId(null);
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
                $object->setCompanyRegistrationNumber(null);
            }
            if (\array_key_exists('customer_uin', $data) && $data['customer_uin'] !== null) {
                $object->setCustomerUin($data['customer_uin']);
            }
            elseif (\array_key_exists('customer_uin', $data) && $data['customer_uin'] === null) {
                $object->setCustomerUin(null);
            }
            if (\array_key_exists('customer_uin_doc_type', $data) && $data['customer_uin_doc_type'] !== null) {
                $object->setCustomerUinDocType($this->denormalizer->denormalize($data['customer_uin_doc_type'], 'Rouda\\OpenProvider\\Api\\Model\\DomainUINDocumentType', 'json', $context));
            }
            elseif (\array_key_exists('customer_uin_doc_type', $data) && $data['customer_uin_doc_type'] === null) {
                $object->setCustomerUinDocType(null);
            }
            if (\array_key_exists('domain_name_variants', $data) && $data['domain_name_variants'] !== null) {
                $values = [];
                foreach ($data['domain_name_variants'] as $value) {
                    $values[] = $value;
                }
                $object->setDomainNameVariants($values);
            }
            elseif (\array_key_exists('domain_name_variants', $data) && $data['domain_name_variants'] === null) {
                $object->setDomainNameVariants(null);
            }
            if (\array_key_exists('ftld_token', $data) && $data['ftld_token'] !== null) {
                $object->setFtldToken($data['ftld_token']);
            }
            elseif (\array_key_exists('ftld_token', $data) && $data['ftld_token'] === null) {
                $object->setFtldToken(null);
            }
            if (\array_key_exists('gay_donation_acceptance', $data) && $data['gay_donation_acceptance'] !== null) {
                $object->setGayDonationAcceptance($data['gay_donation_acceptance']);
            }
            elseif (\array_key_exists('gay_donation_acceptance', $data) && $data['gay_donation_acceptance'] === null) {
                $object->setGayDonationAcceptance(null);
            }
            if (\array_key_exists('gay_rights_protection_acceptance', $data) && $data['gay_rights_protection_acceptance'] !== null) {
                $object->setGayRightsProtectionAcceptance($data['gay_rights_protection_acceptance']);
            }
            elseif (\array_key_exists('gay_rights_protection_acceptance', $data) && $data['gay_rights_protection_acceptance'] === null) {
                $object->setGayRightsProtectionAcceptance(null);
            }
            if (\array_key_exists('idn_script', $data) && $data['idn_script'] !== null) {
                $object->setIdnScript($data['idn_script']);
            }
            elseif (\array_key_exists('idn_script', $data) && $data['idn_script'] === null) {
                $object->setIdnScript(null);
            }
            if (\array_key_exists('intended_use', $data) && $data['intended_use'] !== null) {
                $object->setIntendedUse($data['intended_use']);
            }
            elseif (\array_key_exists('intended_use', $data) && $data['intended_use'] === null) {
                $object->setIntendedUse(null);
            }
            if (\array_key_exists('legal_type', $data) && $data['legal_type'] !== null) {
                $object->setLegalType($data['legal_type']);
            }
            elseif (\array_key_exists('legal_type', $data) && $data['legal_type'] === null) {
                $object->setLegalType(null);
            }
            if (\array_key_exists('maintainer', $data) && $data['maintainer'] !== null) {
                $object->setMaintainer($data['maintainer']);
            }
            elseif (\array_key_exists('maintainer', $data) && $data['maintainer'] === null) {
                $object->setMaintainer(null);
            }
            if (\array_key_exists('membership_id', $data) && $data['membership_id'] !== null) {
                $object->setMembershipId($data['membership_id']);
            }
            elseif (\array_key_exists('membership_id', $data) && $data['membership_id'] === null) {
                $object->setMembershipId(null);
            }
            if (\array_key_exists('mobile_phone_number_verification', $data) && $data['mobile_phone_number_verification'] !== null) {
                $object->setMobilePhoneNumberVerification($data['mobile_phone_number_verification']);
            }
            elseif (\array_key_exists('mobile_phone_number_verification', $data) && $data['mobile_phone_number_verification'] === null) {
                $object->setMobilePhoneNumberVerification(null);
            }
            if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
                $object->setPassportNumber($data['passport_number']);
            }
            elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
                $object->setPassportNumber(null);
            }
            if (\array_key_exists('self_service', $data) && $data['self_service'] !== null) {
                $object->setSelfService($data['self_service']);
            }
            elseif (\array_key_exists('self_service', $data) && $data['self_service'] === null) {
                $object->setSelfService(null);
            }
            if (\array_key_exists('trademark', $data) && $data['trademark'] !== null) {
                $object->setTrademark($data['trademark']);
            }
            elseif (\array_key_exists('trademark', $data) && $data['trademark'] === null) {
                $object->setTrademark(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
            }
            if (\array_key_exists('verification_code', $data) && $data['verification_code'] !== null) {
                $object->setVerificationCode($data['verification_code']);
            }
            elseif (\array_key_exists('verification_code', $data) && $data['verification_code'] === null) {
                $object->setVerificationCode(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('adminSingPassId') && null !== $object->getAdminSingPassId()) {
                $data['admin_sing_pass_id'] = $object->getAdminSingPassId();
            }
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('customerUin') && null !== $object->getCustomerUin()) {
                $data['customer_uin'] = $object->getCustomerUin();
            }
            if ($object->isInitialized('customerUinDocType') && null !== $object->getCustomerUinDocType()) {
                $data['customer_uin_doc_type'] = $this->normalizer->normalize($object->getCustomerUinDocType(), 'json', $context);
            }
            if ($object->isInitialized('domainNameVariants') && null !== $object->getDomainNameVariants()) {
                $values = [];
                foreach ($object->getDomainNameVariants() as $value) {
                    $values[] = $value;
                }
                $data['domain_name_variants'] = $values;
            }
            if ($object->isInitialized('ftldToken') && null !== $object->getFtldToken()) {
                $data['ftld_token'] = $object->getFtldToken();
            }
            if ($object->isInitialized('gayDonationAcceptance') && null !== $object->getGayDonationAcceptance()) {
                $data['gay_donation_acceptance'] = $object->getGayDonationAcceptance();
            }
            if ($object->isInitialized('gayRightsProtectionAcceptance') && null !== $object->getGayRightsProtectionAcceptance()) {
                $data['gay_rights_protection_acceptance'] = $object->getGayRightsProtectionAcceptance();
            }
            if ($object->isInitialized('idnScript') && null !== $object->getIdnScript()) {
                $data['idn_script'] = $object->getIdnScript();
            }
            if ($object->isInitialized('intendedUse') && null !== $object->getIntendedUse()) {
                $data['intended_use'] = $object->getIntendedUse();
            }
            if ($object->isInitialized('legalType') && null !== $object->getLegalType()) {
                $data['legal_type'] = $object->getLegalType();
            }
            if ($object->isInitialized('maintainer') && null !== $object->getMaintainer()) {
                $data['maintainer'] = $object->getMaintainer();
            }
            if ($object->isInitialized('membershipId') && null !== $object->getMembershipId()) {
                $data['membership_id'] = $object->getMembershipId();
            }
            if ($object->isInitialized('mobilePhoneNumberVerification') && null !== $object->getMobilePhoneNumberVerification()) {
                $data['mobile_phone_number_verification'] = $object->getMobilePhoneNumberVerification();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('selfService') && null !== $object->getSelfService()) {
                $data['self_service'] = $object->getSelfService();
            }
            if ($object->isInitialized('trademark') && null !== $object->getTrademark()) {
                $data['trademark'] = $object->getTrademark();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('verificationCode') && null !== $object->getVerificationCode()) {
                $data['verification_code'] = $object->getVerificationCode();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainTransferAdditionalData' => false];
        }
    }
}