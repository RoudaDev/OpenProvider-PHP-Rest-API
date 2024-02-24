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
    class CustomerExtensionDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CustomerExtensionData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CustomerExtensionData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\CustomerExtensionData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_type', $data)) {
                $object->setAdminType($data['admin_type']);
            }
            if (\array_key_exists('applicant_purpose', $data)) {
                $object->setApplicantPurpose($data['applicant_purpose']);
            }
            if (\array_key_exists('birth_date', $data)) {
                $object->setBirthDate($data['birth_date']);
            }
            if (\array_key_exists('company_name_cyrillic', $data)) {
                $object->setCompanyNameCyrillic($data['company_name_cyrillic']);
            }
            if (\array_key_exists('company_name_latin', $data)) {
                $object->setCompanyNameLatin($data['company_name_latin']);
            }
            if (\array_key_exists('company_registration_number', $data)) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            if (\array_key_exists('contact_title', $data)) {
                $object->setContactTitle($data['contact_title']);
            }
            if (\array_key_exists('country_of_citizenship', $data)) {
                $object->setCountryOfCitizenship($data['country_of_citizenship']);
            }
            if (\array_key_exists('customer_uin', $data)) {
                $object->setCustomerUin($data['customer_uin']);
            }
            if (\array_key_exists('ens_auth_id', $data)) {
                $object->setEnsAuthId($data['ens_auth_id']);
            }
            if (\array_key_exists('ens_key', $data)) {
                $object->setEnsKey($data['ens_key']);
            }
            if (\array_key_exists('first_name_cyrillic', $data)) {
                $object->setFirstNameCyrillic($data['first_name_cyrillic']);
            }
            if (\array_key_exists('first_name_latin', $data)) {
                $object->setFirstNameLatin($data['first_name_latin']);
            }
            if (\array_key_exists('hr_member', $data)) {
                $object->setHrMember($data['hr_member']);
            }
            if (\array_key_exists('industry_class', $data)) {
                $object->setIndustryClass($data['industry_class']);
            }
            if (\array_key_exists('is_private_enterpreneur', $data)) {
                $object->setIsPrivateEnterpreneur($data['is_private_enterpreneur']);
            }
            if (\array_key_exists('last_name_cyrillic', $data)) {
                $object->setLastNameCyrillic($data['last_name_cyrillic']);
            }
            if (\array_key_exists('last_name_latin', $data)) {
                $object->setLastNameLatin($data['last_name_latin']);
            }
            if (\array_key_exists('legal_address_cyrillic', $data)) {
                $object->setLegalAddressCyrillic($data['legal_address_cyrillic']);
            }
            if (\array_key_exists('legal_type', $data)) {
                $object->setLegalType($data['legal_type']);
            }
            if (\array_key_exists('middle_name_cyrillic', $data)) {
                $object->setMiddleNameCyrillic($data['middle_name_cyrillic']);
            }
            if (\array_key_exists('middle_name_latin', $data)) {
                $object->setMiddleNameLatin($data['middle_name_latin']);
            }
            if (\array_key_exists('mobile_phone_number', $data)) {
                $object->setMobilePhoneNumber($data['mobile_phone_number']);
            }
            if (\array_key_exists('nexus_category', $data)) {
                $object->setNexusCategory($data['nexus_category']);
            }
            if (\array_key_exists('org_type', $data)) {
                $object->setOrgType($data['org_type']);
            }
            if (\array_key_exists('passport_issue_date', $data)) {
                $object->setPassportIssueDate($data['passport_issue_date']);
            }
            if (\array_key_exists('passport_issuer', $data)) {
                $object->setPassportIssuer($data['passport_issuer']);
            }
            if (\array_key_exists('passport_number', $data)) {
                $object->setPassportNumber($data['passport_number']);
            }
            if (\array_key_exists('passport_series', $data)) {
                $object->setPassportSeries($data['passport_series']);
            }
            if (\array_key_exists('postal_address_cyrillic', $data)) {
                $object->setPostalAddressCyrillic($data['postal_address_cyrillic']);
            }
            if (\array_key_exists('social_security_number', $data)) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            if (\array_key_exists('tax_payer_number', $data)) {
                $object->setTaxPayerNumber($data['tax_payer_number']);
            }
            if (\array_key_exists('uin', $data)) {
                $object->setUin($data['uin']);
            }
            if (\array_key_exists('user_type', $data)) {
                $object->setUserType($data['user_type']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            if (\array_key_exists('website', $data)) {
                $object->setWebsite($data['website']);
            }
            if (\array_key_exists('whois_email', $data)) {
                $object->setWhoisEmail($data['whois_email']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('adminType') && null !== $object->getAdminType()) {
                $data['admin_type'] = $object->getAdminType();
            }
            if ($object->isInitialized('applicantPurpose') && null !== $object->getApplicantPurpose()) {
                $data['applicant_purpose'] = $object->getApplicantPurpose();
            }
            if ($object->isInitialized('birthDate') && null !== $object->getBirthDate()) {
                $data['birth_date'] = $object->getBirthDate();
            }
            if ($object->isInitialized('companyNameCyrillic') && null !== $object->getCompanyNameCyrillic()) {
                $data['company_name_cyrillic'] = $object->getCompanyNameCyrillic();
            }
            if ($object->isInitialized('companyNameLatin') && null !== $object->getCompanyNameLatin()) {
                $data['company_name_latin'] = $object->getCompanyNameLatin();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('contactTitle') && null !== $object->getContactTitle()) {
                $data['contact_title'] = $object->getContactTitle();
            }
            if ($object->isInitialized('countryOfCitizenship') && null !== $object->getCountryOfCitizenship()) {
                $data['country_of_citizenship'] = $object->getCountryOfCitizenship();
            }
            if ($object->isInitialized('customerUin') && null !== $object->getCustomerUin()) {
                $data['customer_uin'] = $object->getCustomerUin();
            }
            if ($object->isInitialized('ensAuthId') && null !== $object->getEnsAuthId()) {
                $data['ens_auth_id'] = $object->getEnsAuthId();
            }
            if ($object->isInitialized('ensKey') && null !== $object->getEnsKey()) {
                $data['ens_key'] = $object->getEnsKey();
            }
            if ($object->isInitialized('firstNameCyrillic') && null !== $object->getFirstNameCyrillic()) {
                $data['first_name_cyrillic'] = $object->getFirstNameCyrillic();
            }
            if ($object->isInitialized('firstNameLatin') && null !== $object->getFirstNameLatin()) {
                $data['first_name_latin'] = $object->getFirstNameLatin();
            }
            if ($object->isInitialized('hrMember') && null !== $object->getHrMember()) {
                $data['hr_member'] = $object->getHrMember();
            }
            if ($object->isInitialized('industryClass') && null !== $object->getIndustryClass()) {
                $data['industry_class'] = $object->getIndustryClass();
            }
            if ($object->isInitialized('isPrivateEnterpreneur') && null !== $object->getIsPrivateEnterpreneur()) {
                $data['is_private_enterpreneur'] = $object->getIsPrivateEnterpreneur();
            }
            if ($object->isInitialized('lastNameCyrillic') && null !== $object->getLastNameCyrillic()) {
                $data['last_name_cyrillic'] = $object->getLastNameCyrillic();
            }
            if ($object->isInitialized('lastNameLatin') && null !== $object->getLastNameLatin()) {
                $data['last_name_latin'] = $object->getLastNameLatin();
            }
            if ($object->isInitialized('legalAddressCyrillic') && null !== $object->getLegalAddressCyrillic()) {
                $data['legal_address_cyrillic'] = $object->getLegalAddressCyrillic();
            }
            if ($object->isInitialized('legalType') && null !== $object->getLegalType()) {
                $data['legal_type'] = $object->getLegalType();
            }
            if ($object->isInitialized('middleNameCyrillic') && null !== $object->getMiddleNameCyrillic()) {
                $data['middle_name_cyrillic'] = $object->getMiddleNameCyrillic();
            }
            if ($object->isInitialized('middleNameLatin') && null !== $object->getMiddleNameLatin()) {
                $data['middle_name_latin'] = $object->getMiddleNameLatin();
            }
            if ($object->isInitialized('mobilePhoneNumber') && null !== $object->getMobilePhoneNumber()) {
                $data['mobile_phone_number'] = $object->getMobilePhoneNumber();
            }
            if ($object->isInitialized('nexusCategory') && null !== $object->getNexusCategory()) {
                $data['nexus_category'] = $object->getNexusCategory();
            }
            if ($object->isInitialized('orgType') && null !== $object->getOrgType()) {
                $data['org_type'] = $object->getOrgType();
            }
            if ($object->isInitialized('passportIssueDate') && null !== $object->getPassportIssueDate()) {
                $data['passport_issue_date'] = $object->getPassportIssueDate();
            }
            if ($object->isInitialized('passportIssuer') && null !== $object->getPassportIssuer()) {
                $data['passport_issuer'] = $object->getPassportIssuer();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('passportSeries') && null !== $object->getPassportSeries()) {
                $data['passport_series'] = $object->getPassportSeries();
            }
            if ($object->isInitialized('postalAddressCyrillic') && null !== $object->getPostalAddressCyrillic()) {
                $data['postal_address_cyrillic'] = $object->getPostalAddressCyrillic();
            }
            if ($object->isInitialized('socialSecurityNumber') && null !== $object->getSocialSecurityNumber()) {
                $data['social_security_number'] = $object->getSocialSecurityNumber();
            }
            if ($object->isInitialized('taxPayerNumber') && null !== $object->getTaxPayerNumber()) {
                $data['tax_payer_number'] = $object->getTaxPayerNumber();
            }
            if ($object->isInitialized('uin') && null !== $object->getUin()) {
                $data['uin'] = $object->getUin();
            }
            if ($object->isInitialized('userType') && null !== $object->getUserType()) {
                $data['user_type'] = $object->getUserType();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('website') && null !== $object->getWebsite()) {
                $data['website'] = $object->getWebsite();
            }
            if ($object->isInitialized('whoisEmail') && null !== $object->getWhoisEmail()) {
                $data['whois_email'] = $object->getWhoisEmail();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\CustomerExtensionData' => false];
        }
    }
} else {
    class CustomerExtensionDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CustomerExtensionData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CustomerExtensionData';
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
            $object = new \Rouda\OpenProviderAPI\Model\CustomerExtensionData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('admin_type', $data)) {
                $object->setAdminType($data['admin_type']);
            }
            if (\array_key_exists('applicant_purpose', $data)) {
                $object->setApplicantPurpose($data['applicant_purpose']);
            }
            if (\array_key_exists('birth_date', $data)) {
                $object->setBirthDate($data['birth_date']);
            }
            if (\array_key_exists('company_name_cyrillic', $data)) {
                $object->setCompanyNameCyrillic($data['company_name_cyrillic']);
            }
            if (\array_key_exists('company_name_latin', $data)) {
                $object->setCompanyNameLatin($data['company_name_latin']);
            }
            if (\array_key_exists('company_registration_number', $data)) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            if (\array_key_exists('contact_title', $data)) {
                $object->setContactTitle($data['contact_title']);
            }
            if (\array_key_exists('country_of_citizenship', $data)) {
                $object->setCountryOfCitizenship($data['country_of_citizenship']);
            }
            if (\array_key_exists('customer_uin', $data)) {
                $object->setCustomerUin($data['customer_uin']);
            }
            if (\array_key_exists('ens_auth_id', $data)) {
                $object->setEnsAuthId($data['ens_auth_id']);
            }
            if (\array_key_exists('ens_key', $data)) {
                $object->setEnsKey($data['ens_key']);
            }
            if (\array_key_exists('first_name_cyrillic', $data)) {
                $object->setFirstNameCyrillic($data['first_name_cyrillic']);
            }
            if (\array_key_exists('first_name_latin', $data)) {
                $object->setFirstNameLatin($data['first_name_latin']);
            }
            if (\array_key_exists('hr_member', $data)) {
                $object->setHrMember($data['hr_member']);
            }
            if (\array_key_exists('industry_class', $data)) {
                $object->setIndustryClass($data['industry_class']);
            }
            if (\array_key_exists('is_private_enterpreneur', $data)) {
                $object->setIsPrivateEnterpreneur($data['is_private_enterpreneur']);
            }
            if (\array_key_exists('last_name_cyrillic', $data)) {
                $object->setLastNameCyrillic($data['last_name_cyrillic']);
            }
            if (\array_key_exists('last_name_latin', $data)) {
                $object->setLastNameLatin($data['last_name_latin']);
            }
            if (\array_key_exists('legal_address_cyrillic', $data)) {
                $object->setLegalAddressCyrillic($data['legal_address_cyrillic']);
            }
            if (\array_key_exists('legal_type', $data)) {
                $object->setLegalType($data['legal_type']);
            }
            if (\array_key_exists('middle_name_cyrillic', $data)) {
                $object->setMiddleNameCyrillic($data['middle_name_cyrillic']);
            }
            if (\array_key_exists('middle_name_latin', $data)) {
                $object->setMiddleNameLatin($data['middle_name_latin']);
            }
            if (\array_key_exists('mobile_phone_number', $data)) {
                $object->setMobilePhoneNumber($data['mobile_phone_number']);
            }
            if (\array_key_exists('nexus_category', $data)) {
                $object->setNexusCategory($data['nexus_category']);
            }
            if (\array_key_exists('org_type', $data)) {
                $object->setOrgType($data['org_type']);
            }
            if (\array_key_exists('passport_issue_date', $data)) {
                $object->setPassportIssueDate($data['passport_issue_date']);
            }
            if (\array_key_exists('passport_issuer', $data)) {
                $object->setPassportIssuer($data['passport_issuer']);
            }
            if (\array_key_exists('passport_number', $data)) {
                $object->setPassportNumber($data['passport_number']);
            }
            if (\array_key_exists('passport_series', $data)) {
                $object->setPassportSeries($data['passport_series']);
            }
            if (\array_key_exists('postal_address_cyrillic', $data)) {
                $object->setPostalAddressCyrillic($data['postal_address_cyrillic']);
            }
            if (\array_key_exists('social_security_number', $data)) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            if (\array_key_exists('tax_payer_number', $data)) {
                $object->setTaxPayerNumber($data['tax_payer_number']);
            }
            if (\array_key_exists('uin', $data)) {
                $object->setUin($data['uin']);
            }
            if (\array_key_exists('user_type', $data)) {
                $object->setUserType($data['user_type']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            if (\array_key_exists('website', $data)) {
                $object->setWebsite($data['website']);
            }
            if (\array_key_exists('whois_email', $data)) {
                $object->setWhoisEmail($data['whois_email']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('adminType') && null !== $object->getAdminType()) {
                $data['admin_type'] = $object->getAdminType();
            }
            if ($object->isInitialized('applicantPurpose') && null !== $object->getApplicantPurpose()) {
                $data['applicant_purpose'] = $object->getApplicantPurpose();
            }
            if ($object->isInitialized('birthDate') && null !== $object->getBirthDate()) {
                $data['birth_date'] = $object->getBirthDate();
            }
            if ($object->isInitialized('companyNameCyrillic') && null !== $object->getCompanyNameCyrillic()) {
                $data['company_name_cyrillic'] = $object->getCompanyNameCyrillic();
            }
            if ($object->isInitialized('companyNameLatin') && null !== $object->getCompanyNameLatin()) {
                $data['company_name_latin'] = $object->getCompanyNameLatin();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('contactTitle') && null !== $object->getContactTitle()) {
                $data['contact_title'] = $object->getContactTitle();
            }
            if ($object->isInitialized('countryOfCitizenship') && null !== $object->getCountryOfCitizenship()) {
                $data['country_of_citizenship'] = $object->getCountryOfCitizenship();
            }
            if ($object->isInitialized('customerUin') && null !== $object->getCustomerUin()) {
                $data['customer_uin'] = $object->getCustomerUin();
            }
            if ($object->isInitialized('ensAuthId') && null !== $object->getEnsAuthId()) {
                $data['ens_auth_id'] = $object->getEnsAuthId();
            }
            if ($object->isInitialized('ensKey') && null !== $object->getEnsKey()) {
                $data['ens_key'] = $object->getEnsKey();
            }
            if ($object->isInitialized('firstNameCyrillic') && null !== $object->getFirstNameCyrillic()) {
                $data['first_name_cyrillic'] = $object->getFirstNameCyrillic();
            }
            if ($object->isInitialized('firstNameLatin') && null !== $object->getFirstNameLatin()) {
                $data['first_name_latin'] = $object->getFirstNameLatin();
            }
            if ($object->isInitialized('hrMember') && null !== $object->getHrMember()) {
                $data['hr_member'] = $object->getHrMember();
            }
            if ($object->isInitialized('industryClass') && null !== $object->getIndustryClass()) {
                $data['industry_class'] = $object->getIndustryClass();
            }
            if ($object->isInitialized('isPrivateEnterpreneur') && null !== $object->getIsPrivateEnterpreneur()) {
                $data['is_private_enterpreneur'] = $object->getIsPrivateEnterpreneur();
            }
            if ($object->isInitialized('lastNameCyrillic') && null !== $object->getLastNameCyrillic()) {
                $data['last_name_cyrillic'] = $object->getLastNameCyrillic();
            }
            if ($object->isInitialized('lastNameLatin') && null !== $object->getLastNameLatin()) {
                $data['last_name_latin'] = $object->getLastNameLatin();
            }
            if ($object->isInitialized('legalAddressCyrillic') && null !== $object->getLegalAddressCyrillic()) {
                $data['legal_address_cyrillic'] = $object->getLegalAddressCyrillic();
            }
            if ($object->isInitialized('legalType') && null !== $object->getLegalType()) {
                $data['legal_type'] = $object->getLegalType();
            }
            if ($object->isInitialized('middleNameCyrillic') && null !== $object->getMiddleNameCyrillic()) {
                $data['middle_name_cyrillic'] = $object->getMiddleNameCyrillic();
            }
            if ($object->isInitialized('middleNameLatin') && null !== $object->getMiddleNameLatin()) {
                $data['middle_name_latin'] = $object->getMiddleNameLatin();
            }
            if ($object->isInitialized('mobilePhoneNumber') && null !== $object->getMobilePhoneNumber()) {
                $data['mobile_phone_number'] = $object->getMobilePhoneNumber();
            }
            if ($object->isInitialized('nexusCategory') && null !== $object->getNexusCategory()) {
                $data['nexus_category'] = $object->getNexusCategory();
            }
            if ($object->isInitialized('orgType') && null !== $object->getOrgType()) {
                $data['org_type'] = $object->getOrgType();
            }
            if ($object->isInitialized('passportIssueDate') && null !== $object->getPassportIssueDate()) {
                $data['passport_issue_date'] = $object->getPassportIssueDate();
            }
            if ($object->isInitialized('passportIssuer') && null !== $object->getPassportIssuer()) {
                $data['passport_issuer'] = $object->getPassportIssuer();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('passportSeries') && null !== $object->getPassportSeries()) {
                $data['passport_series'] = $object->getPassportSeries();
            }
            if ($object->isInitialized('postalAddressCyrillic') && null !== $object->getPostalAddressCyrillic()) {
                $data['postal_address_cyrillic'] = $object->getPostalAddressCyrillic();
            }
            if ($object->isInitialized('socialSecurityNumber') && null !== $object->getSocialSecurityNumber()) {
                $data['social_security_number'] = $object->getSocialSecurityNumber();
            }
            if ($object->isInitialized('taxPayerNumber') && null !== $object->getTaxPayerNumber()) {
                $data['tax_payer_number'] = $object->getTaxPayerNumber();
            }
            if ($object->isInitialized('uin') && null !== $object->getUin()) {
                $data['uin'] = $object->getUin();
            }
            if ($object->isInitialized('userType') && null !== $object->getUserType()) {
                $data['user_type'] = $object->getUserType();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('website') && null !== $object->getWebsite()) {
                $data['website'] = $object->getWebsite();
            }
            if ($object->isInitialized('whoisEmail') && null !== $object->getWhoisEmail()) {
                $data['whois_email'] = $object->getWhoisEmail();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\CustomerExtensionData' => false];
        }
    }
}