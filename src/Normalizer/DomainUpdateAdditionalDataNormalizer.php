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
    class DomainUpdateAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainUpdateAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainUpdateAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\DomainUpdateAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abogado_acceptance', $data)) {
                $object->setAbogadoAcceptance($data['abogado_acceptance']);
            }
            if (\array_key_exists('admin_sing_pass_id', $data)) {
                $object->setAdminSingPassId($data['admin_sing_pass_id']);
            }
            if (\array_key_exists('auth_code', $data)) {
                $object->setAuthCode($data['auth_code']);
            }
            if (\array_key_exists('company_registration_number', $data)) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            if (\array_key_exists('customer_uin', $data)) {
                $object->setCustomerUin($data['customer_uin']);
            }
            if (\array_key_exists('customer_uin_doc_type', $data)) {
                $object->setCustomerUinDocType($this->denormalizer->denormalize($data['customer_uin_doc_type'], 'Rouda\\OpenProviderAPI\\Model\\DomainUINDocumentType', 'json', $context));
            }
            if (\array_key_exists('domain_name_variants', $data)) {
                $values = [];
                foreach ($data['domain_name_variants'] as $value) {
                    $values[] = $value;
                }
                $object->setDomainNameVariants($values);
            }
            if (\array_key_exists('intended_use', $data)) {
                $object->setIntendedUse($data['intended_use']);
            }
            if (\array_key_exists('law_acceptance', $data)) {
                $object->setLawAcceptance($data['law_acceptance']);
            }
            if (\array_key_exists('maintainer', $data)) {
                $object->setMaintainer($data['maintainer']);
            }
            if (\array_key_exists('membership_id', $data)) {
                $object->setMembershipId($data['membership_id']);
            }
            if (\array_key_exists('mobile_phone_number_verification', $data)) {
                $object->setMobilePhoneNumberVerification($data['mobile_phone_number_verification']);
            }
            if (\array_key_exists('ngo_ong_eligibility_acceptance', $data)) {
                $object->setNgoOngEligibilityAcceptance($data['ngo_ong_eligibility_acceptance']);
            }
            if (\array_key_exists('ngo_ong_policy_acceptance', $data)) {
                $object->setNgoOngPolicyAcceptance($data['ngo_ong_policy_acceptance']);
            }
            if (\array_key_exists('passport_number', $data)) {
                $object->setPassportNumber($data['passport_number']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            if (\array_key_exists('verification_code', $data)) {
                $object->setVerificationCode($data['verification_code']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('abogadoAcceptance') && null !== $object->getAbogadoAcceptance()) {
                $data['abogado_acceptance'] = $object->getAbogadoAcceptance();
            }
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
            if ($object->isInitialized('intendedUse') && null !== $object->getIntendedUse()) {
                $data['intended_use'] = $object->getIntendedUse();
            }
            if ($object->isInitialized('lawAcceptance') && null !== $object->getLawAcceptance()) {
                $data['law_acceptance'] = $object->getLawAcceptance();
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
            if ($object->isInitialized('ngoOngEligibilityAcceptance') && null !== $object->getNgoOngEligibilityAcceptance()) {
                $data['ngo_ong_eligibility_acceptance'] = $object->getNgoOngEligibilityAcceptance();
            }
            if ($object->isInitialized('ngoOngPolicyAcceptance') && null !== $object->getNgoOngPolicyAcceptance()) {
                $data['ngo_ong_policy_acceptance'] = $object->getNgoOngPolicyAcceptance();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
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
            return ['Rouda\\OpenProviderAPI\\Model\\DomainUpdateAdditionalData' => false];
        }
    }
} else {
    class DomainUpdateAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\DomainUpdateAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\DomainUpdateAdditionalData';
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
            $object = new \Rouda\OpenProviderAPI\Model\DomainUpdateAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abogado_acceptance', $data)) {
                $object->setAbogadoAcceptance($data['abogado_acceptance']);
            }
            if (\array_key_exists('admin_sing_pass_id', $data)) {
                $object->setAdminSingPassId($data['admin_sing_pass_id']);
            }
            if (\array_key_exists('auth_code', $data)) {
                $object->setAuthCode($data['auth_code']);
            }
            if (\array_key_exists('company_registration_number', $data)) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            if (\array_key_exists('customer_uin', $data)) {
                $object->setCustomerUin($data['customer_uin']);
            }
            if (\array_key_exists('customer_uin_doc_type', $data)) {
                $object->setCustomerUinDocType($this->denormalizer->denormalize($data['customer_uin_doc_type'], 'Rouda\\OpenProviderAPI\\Model\\DomainUINDocumentType', 'json', $context));
            }
            if (\array_key_exists('domain_name_variants', $data)) {
                $values = [];
                foreach ($data['domain_name_variants'] as $value) {
                    $values[] = $value;
                }
                $object->setDomainNameVariants($values);
            }
            if (\array_key_exists('intended_use', $data)) {
                $object->setIntendedUse($data['intended_use']);
            }
            if (\array_key_exists('law_acceptance', $data)) {
                $object->setLawAcceptance($data['law_acceptance']);
            }
            if (\array_key_exists('maintainer', $data)) {
                $object->setMaintainer($data['maintainer']);
            }
            if (\array_key_exists('membership_id', $data)) {
                $object->setMembershipId($data['membership_id']);
            }
            if (\array_key_exists('mobile_phone_number_verification', $data)) {
                $object->setMobilePhoneNumberVerification($data['mobile_phone_number_verification']);
            }
            if (\array_key_exists('ngo_ong_eligibility_acceptance', $data)) {
                $object->setNgoOngEligibilityAcceptance($data['ngo_ong_eligibility_acceptance']);
            }
            if (\array_key_exists('ngo_ong_policy_acceptance', $data)) {
                $object->setNgoOngPolicyAcceptance($data['ngo_ong_policy_acceptance']);
            }
            if (\array_key_exists('passport_number', $data)) {
                $object->setPassportNumber($data['passport_number']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            if (\array_key_exists('verification_code', $data)) {
                $object->setVerificationCode($data['verification_code']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('abogadoAcceptance') && null !== $object->getAbogadoAcceptance()) {
                $data['abogado_acceptance'] = $object->getAbogadoAcceptance();
            }
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
            if ($object->isInitialized('intendedUse') && null !== $object->getIntendedUse()) {
                $data['intended_use'] = $object->getIntendedUse();
            }
            if ($object->isInitialized('lawAcceptance') && null !== $object->getLawAcceptance()) {
                $data['law_acceptance'] = $object->getLawAcceptance();
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
            if ($object->isInitialized('ngoOngEligibilityAcceptance') && null !== $object->getNgoOngEligibilityAcceptance()) {
                $data['ngo_ong_eligibility_acceptance'] = $object->getNgoOngEligibilityAcceptance();
            }
            if ($object->isInitialized('ngoOngPolicyAcceptance') && null !== $object->getNgoOngPolicyAcceptance()) {
                $data['ngo_ong_policy_acceptance'] = $object->getNgoOngPolicyAcceptance();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
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
            return ['Rouda\\OpenProviderAPI\\Model\\DomainUpdateAdditionalData' => false];
        }
    }
}