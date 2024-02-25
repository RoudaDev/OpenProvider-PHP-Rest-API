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
    class DomainAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abogado_acceptance', $data) && $data['abogado_acceptance'] !== null) {
                $object->setAbogadoAcceptance($data['abogado_acceptance']);
            }
            elseif (\array_key_exists('abogado_acceptance', $data) && $data['abogado_acceptance'] === null) {
                $object->setAbogadoAcceptance(null);
            }
            if (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] !== null) {
                $object->setAdminSingPassId($data['admin_sing_pass_id']);
            }
            elseif (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] === null) {
                $object->setAdminSingPassId(null);
            }
            if (\array_key_exists('ae_acceptance', $data) && $data['ae_acceptance'] !== null) {
                $object->setAeAcceptance($data['ae_acceptance']);
            }
            elseif (\array_key_exists('ae_acceptance', $data) && $data['ae_acceptance'] === null) {
                $object->setAeAcceptance(null);
            }
            if (\array_key_exists('allocation_token', $data) && $data['allocation_token'] !== null) {
                $object->setAllocationToken($data['allocation_token']);
            }
            elseif (\array_key_exists('allocation_token', $data) && $data['allocation_token'] === null) {
                $object->setAllocationToken(null);
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('bank_acceptance', $data) && $data['bank_acceptance'] !== null) {
                $object->setBankAcceptance($data['bank_acceptance']);
            }
            elseif (\array_key_exists('bank_acceptance', $data) && $data['bank_acceptance'] === null) {
                $object->setBankAcceptance(null);
            }
            if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
                $object->setCompanyRegistrationNumber(null);
            }
            if (\array_key_exists('coop_acceptance', $data) && $data['coop_acceptance'] !== null) {
                $object->setCoopAcceptance($data['coop_acceptance']);
            }
            elseif (\array_key_exists('coop_acceptance', $data) && $data['coop_acceptance'] === null) {
                $object->setCoopAcceptance(null);
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
            if (\array_key_exists('eligibility_type', $data) && $data['eligibility_type'] !== null) {
                $object->setEligibilityType($data['eligibility_type']);
            }
            elseif (\array_key_exists('eligibility_type', $data) && $data['eligibility_type'] === null) {
                $object->setEligibilityType(null);
            }
            if (\array_key_exists('eligibility_type_relationship', $data) && $data['eligibility_type_relationship'] !== null) {
                $object->setEligibilityTypeRelationship($data['eligibility_type_relationship']);
            }
            elseif (\array_key_exists('eligibility_type_relationship', $data) && $data['eligibility_type_relationship'] === null) {
                $object->setEligibilityTypeRelationship(null);
            }
            if (\array_key_exists('es_annex_acceptance', $data) && $data['es_annex_acceptance'] !== null) {
                $object->setEsAnnexAcceptance($data['es_annex_acceptance']);
            }
            elseif (\array_key_exists('es_annex_acceptance', $data) && $data['es_annex_acceptance'] === null) {
                $object->setEsAnnexAcceptance(null);
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
            if (\array_key_exists('id_number', $data) && $data['id_number'] !== null) {
                $object->setIdNumber($data['id_number']);
            }
            elseif (\array_key_exists('id_number', $data) && $data['id_number'] === null) {
                $object->setIdNumber(null);
            }
            if (\array_key_exists('id_type', $data) && $data['id_type'] !== null) {
                $object->setIdType($data['id_type']);
            }
            elseif (\array_key_exists('id_type', $data) && $data['id_type'] === null) {
                $object->setIdType(null);
            }
            if (\array_key_exists('idn_script', $data) && $data['idn_script'] !== null) {
                $object->setIdnScript($data['idn_script']);
            }
            elseif (\array_key_exists('idn_script', $data) && $data['idn_script'] === null) {
                $object->setIdnScript(null);
            }
            if (\array_key_exists('insurance_acceptance', $data) && $data['insurance_acceptance'] !== null) {
                $object->setInsuranceAcceptance($data['insurance_acceptance']);
            }
            elseif (\array_key_exists('insurance_acceptance', $data) && $data['insurance_acceptance'] === null) {
                $object->setInsuranceAcceptance(null);
            }
            if (\array_key_exists('intended_use', $data) && $data['intended_use'] !== null) {
                $object->setIntendedUse($data['intended_use']);
            }
            elseif (\array_key_exists('intended_use', $data) && $data['intended_use'] === null) {
                $object->setIntendedUse(null);
            }
            if (\array_key_exists('law_acceptance', $data) && $data['law_acceptance'] !== null) {
                $object->setLawAcceptance($data['law_acceptance']);
            }
            elseif (\array_key_exists('law_acceptance', $data) && $data['law_acceptance'] === null) {
                $object->setLawAcceptance(null);
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
            if (\array_key_exists('ngo_ong_eligibility_acceptance', $data) && $data['ngo_ong_eligibility_acceptance'] !== null) {
                $object->setNgoOngEligibilityAcceptance($data['ngo_ong_eligibility_acceptance']);
            }
            elseif (\array_key_exists('ngo_ong_eligibility_acceptance', $data) && $data['ngo_ong_eligibility_acceptance'] === null) {
                $object->setNgoOngEligibilityAcceptance(null);
            }
            if (\array_key_exists('ngo_ong_policy_acceptance', $data) && $data['ngo_ong_policy_acceptance'] !== null) {
                $object->setNgoOngPolicyAcceptance($data['ngo_ong_policy_acceptance']);
            }
            elseif (\array_key_exists('ngo_ong_policy_acceptance', $data) && $data['ngo_ong_policy_acceptance'] === null) {
                $object->setNgoOngPolicyAcceptance(null);
            }
            if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
                $object->setPassportNumber($data['passport_number']);
            }
            elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
                $object->setPassportNumber(null);
            }
            if (\array_key_exists('rurf_blocked_domains', $data) && $data['rurf_blocked_domains'] !== null) {
                $object->setRurfBlockedDomains($data['rurf_blocked_domains']);
            }
            elseif (\array_key_exists('rurf_blocked_domains', $data) && $data['rurf_blocked_domains'] === null) {
                $object->setRurfBlockedDomains(null);
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
            if (\array_key_exists('trademark_id', $data) && $data['trademark_id'] !== null) {
                $object->setTrademarkId($data['trademark_id']);
            }
            elseif (\array_key_exists('trademark_id', $data) && $data['trademark_id'] === null) {
                $object->setTrademarkId(null);
            }
            if (\array_key_exists('travel_acceptance', $data) && $data['travel_acceptance'] !== null) {
                $object->setTravelAcceptance($data['travel_acceptance']);
            }
            elseif (\array_key_exists('travel_acceptance', $data) && $data['travel_acceptance'] === null) {
                $object->setTravelAcceptance(null);
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
            if (\array_key_exists('vote_acceptance', $data) && $data['vote_acceptance'] !== null) {
                $object->setVoteAcceptance($data['vote_acceptance']);
            }
            elseif (\array_key_exists('vote_acceptance', $data) && $data['vote_acceptance'] === null) {
                $object->setVoteAcceptance(null);
            }
            if (\array_key_exists('voto_acceptance', $data) && $data['voto_acceptance'] !== null) {
                $object->setVotoAcceptance($data['voto_acceptance']);
            }
            elseif (\array_key_exists('voto_acceptance', $data) && $data['voto_acceptance'] === null) {
                $object->setVotoAcceptance(null);
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
            if ($object->isInitialized('aeAcceptance') && null !== $object->getAeAcceptance()) {
                $data['ae_acceptance'] = $object->getAeAcceptance();
            }
            if ($object->isInitialized('allocationToken') && null !== $object->getAllocationToken()) {
                $data['allocation_token'] = $object->getAllocationToken();
            }
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('bankAcceptance') && null !== $object->getBankAcceptance()) {
                $data['bank_acceptance'] = $object->getBankAcceptance();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('coopAcceptance') && null !== $object->getCoopAcceptance()) {
                $data['coop_acceptance'] = $object->getCoopAcceptance();
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
            if ($object->isInitialized('eligibilityType') && null !== $object->getEligibilityType()) {
                $data['eligibility_type'] = $object->getEligibilityType();
            }
            if ($object->isInitialized('eligibilityTypeRelationship') && null !== $object->getEligibilityTypeRelationship()) {
                $data['eligibility_type_relationship'] = $object->getEligibilityTypeRelationship();
            }
            if ($object->isInitialized('esAnnexAcceptance') && null !== $object->getEsAnnexAcceptance()) {
                $data['es_annex_acceptance'] = $object->getEsAnnexAcceptance();
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
            if ($object->isInitialized('idNumber') && null !== $object->getIdNumber()) {
                $data['id_number'] = $object->getIdNumber();
            }
            if ($object->isInitialized('idType') && null !== $object->getIdType()) {
                $data['id_type'] = $object->getIdType();
            }
            if ($object->isInitialized('idnScript') && null !== $object->getIdnScript()) {
                $data['idn_script'] = $object->getIdnScript();
            }
            if ($object->isInitialized('insuranceAcceptance') && null !== $object->getInsuranceAcceptance()) {
                $data['insurance_acceptance'] = $object->getInsuranceAcceptance();
            }
            if ($object->isInitialized('intendedUse') && null !== $object->getIntendedUse()) {
                $data['intended_use'] = $object->getIntendedUse();
            }
            if ($object->isInitialized('lawAcceptance') && null !== $object->getLawAcceptance()) {
                $data['law_acceptance'] = $object->getLawAcceptance();
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
            if ($object->isInitialized('ngoOngEligibilityAcceptance') && null !== $object->getNgoOngEligibilityAcceptance()) {
                $data['ngo_ong_eligibility_acceptance'] = $object->getNgoOngEligibilityAcceptance();
            }
            if ($object->isInitialized('ngoOngPolicyAcceptance') && null !== $object->getNgoOngPolicyAcceptance()) {
                $data['ngo_ong_policy_acceptance'] = $object->getNgoOngPolicyAcceptance();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('rurfBlockedDomains') && null !== $object->getRurfBlockedDomains()) {
                $data['rurf_blocked_domains'] = $object->getRurfBlockedDomains();
            }
            if ($object->isInitialized('selfService') && null !== $object->getSelfService()) {
                $data['self_service'] = $object->getSelfService();
            }
            if ($object->isInitialized('trademark') && null !== $object->getTrademark()) {
                $data['trademark'] = $object->getTrademark();
            }
            if ($object->isInitialized('trademarkId') && null !== $object->getTrademarkId()) {
                $data['trademark_id'] = $object->getTrademarkId();
            }
            if ($object->isInitialized('travelAcceptance') && null !== $object->getTravelAcceptance()) {
                $data['travel_acceptance'] = $object->getTravelAcceptance();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('verificationCode') && null !== $object->getVerificationCode()) {
                $data['verification_code'] = $object->getVerificationCode();
            }
            if ($object->isInitialized('voteAcceptance') && null !== $object->getVoteAcceptance()) {
                $data['vote_acceptance'] = $object->getVoteAcceptance();
            }
            if ($object->isInitialized('votoAcceptance') && null !== $object->getVotoAcceptance()) {
                $data['voto_acceptance'] = $object->getVotoAcceptance();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainAdditionalData' => false];
        }
    }
} else {
    class DomainAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainAdditionalData';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('abogado_acceptance', $data) && $data['abogado_acceptance'] !== null) {
                $object->setAbogadoAcceptance($data['abogado_acceptance']);
            }
            elseif (\array_key_exists('abogado_acceptance', $data) && $data['abogado_acceptance'] === null) {
                $object->setAbogadoAcceptance(null);
            }
            if (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] !== null) {
                $object->setAdminSingPassId($data['admin_sing_pass_id']);
            }
            elseif (\array_key_exists('admin_sing_pass_id', $data) && $data['admin_sing_pass_id'] === null) {
                $object->setAdminSingPassId(null);
            }
            if (\array_key_exists('ae_acceptance', $data) && $data['ae_acceptance'] !== null) {
                $object->setAeAcceptance($data['ae_acceptance']);
            }
            elseif (\array_key_exists('ae_acceptance', $data) && $data['ae_acceptance'] === null) {
                $object->setAeAcceptance(null);
            }
            if (\array_key_exists('allocation_token', $data) && $data['allocation_token'] !== null) {
                $object->setAllocationToken($data['allocation_token']);
            }
            elseif (\array_key_exists('allocation_token', $data) && $data['allocation_token'] === null) {
                $object->setAllocationToken(null);
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('bank_acceptance', $data) && $data['bank_acceptance'] !== null) {
                $object->setBankAcceptance($data['bank_acceptance']);
            }
            elseif (\array_key_exists('bank_acceptance', $data) && $data['bank_acceptance'] === null) {
                $object->setBankAcceptance(null);
            }
            if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
                $object->setCompanyRegistrationNumber(null);
            }
            if (\array_key_exists('coop_acceptance', $data) && $data['coop_acceptance'] !== null) {
                $object->setCoopAcceptance($data['coop_acceptance']);
            }
            elseif (\array_key_exists('coop_acceptance', $data) && $data['coop_acceptance'] === null) {
                $object->setCoopAcceptance(null);
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
            if (\array_key_exists('eligibility_type', $data) && $data['eligibility_type'] !== null) {
                $object->setEligibilityType($data['eligibility_type']);
            }
            elseif (\array_key_exists('eligibility_type', $data) && $data['eligibility_type'] === null) {
                $object->setEligibilityType(null);
            }
            if (\array_key_exists('eligibility_type_relationship', $data) && $data['eligibility_type_relationship'] !== null) {
                $object->setEligibilityTypeRelationship($data['eligibility_type_relationship']);
            }
            elseif (\array_key_exists('eligibility_type_relationship', $data) && $data['eligibility_type_relationship'] === null) {
                $object->setEligibilityTypeRelationship(null);
            }
            if (\array_key_exists('es_annex_acceptance', $data) && $data['es_annex_acceptance'] !== null) {
                $object->setEsAnnexAcceptance($data['es_annex_acceptance']);
            }
            elseif (\array_key_exists('es_annex_acceptance', $data) && $data['es_annex_acceptance'] === null) {
                $object->setEsAnnexAcceptance(null);
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
            if (\array_key_exists('id_number', $data) && $data['id_number'] !== null) {
                $object->setIdNumber($data['id_number']);
            }
            elseif (\array_key_exists('id_number', $data) && $data['id_number'] === null) {
                $object->setIdNumber(null);
            }
            if (\array_key_exists('id_type', $data) && $data['id_type'] !== null) {
                $object->setIdType($data['id_type']);
            }
            elseif (\array_key_exists('id_type', $data) && $data['id_type'] === null) {
                $object->setIdType(null);
            }
            if (\array_key_exists('idn_script', $data) && $data['idn_script'] !== null) {
                $object->setIdnScript($data['idn_script']);
            }
            elseif (\array_key_exists('idn_script', $data) && $data['idn_script'] === null) {
                $object->setIdnScript(null);
            }
            if (\array_key_exists('insurance_acceptance', $data) && $data['insurance_acceptance'] !== null) {
                $object->setInsuranceAcceptance($data['insurance_acceptance']);
            }
            elseif (\array_key_exists('insurance_acceptance', $data) && $data['insurance_acceptance'] === null) {
                $object->setInsuranceAcceptance(null);
            }
            if (\array_key_exists('intended_use', $data) && $data['intended_use'] !== null) {
                $object->setIntendedUse($data['intended_use']);
            }
            elseif (\array_key_exists('intended_use', $data) && $data['intended_use'] === null) {
                $object->setIntendedUse(null);
            }
            if (\array_key_exists('law_acceptance', $data) && $data['law_acceptance'] !== null) {
                $object->setLawAcceptance($data['law_acceptance']);
            }
            elseif (\array_key_exists('law_acceptance', $data) && $data['law_acceptance'] === null) {
                $object->setLawAcceptance(null);
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
            if (\array_key_exists('ngo_ong_eligibility_acceptance', $data) && $data['ngo_ong_eligibility_acceptance'] !== null) {
                $object->setNgoOngEligibilityAcceptance($data['ngo_ong_eligibility_acceptance']);
            }
            elseif (\array_key_exists('ngo_ong_eligibility_acceptance', $data) && $data['ngo_ong_eligibility_acceptance'] === null) {
                $object->setNgoOngEligibilityAcceptance(null);
            }
            if (\array_key_exists('ngo_ong_policy_acceptance', $data) && $data['ngo_ong_policy_acceptance'] !== null) {
                $object->setNgoOngPolicyAcceptance($data['ngo_ong_policy_acceptance']);
            }
            elseif (\array_key_exists('ngo_ong_policy_acceptance', $data) && $data['ngo_ong_policy_acceptance'] === null) {
                $object->setNgoOngPolicyAcceptance(null);
            }
            if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
                $object->setPassportNumber($data['passport_number']);
            }
            elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
                $object->setPassportNumber(null);
            }
            if (\array_key_exists('rurf_blocked_domains', $data) && $data['rurf_blocked_domains'] !== null) {
                $object->setRurfBlockedDomains($data['rurf_blocked_domains']);
            }
            elseif (\array_key_exists('rurf_blocked_domains', $data) && $data['rurf_blocked_domains'] === null) {
                $object->setRurfBlockedDomains(null);
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
            if (\array_key_exists('trademark_id', $data) && $data['trademark_id'] !== null) {
                $object->setTrademarkId($data['trademark_id']);
            }
            elseif (\array_key_exists('trademark_id', $data) && $data['trademark_id'] === null) {
                $object->setTrademarkId(null);
            }
            if (\array_key_exists('travel_acceptance', $data) && $data['travel_acceptance'] !== null) {
                $object->setTravelAcceptance($data['travel_acceptance']);
            }
            elseif (\array_key_exists('travel_acceptance', $data) && $data['travel_acceptance'] === null) {
                $object->setTravelAcceptance(null);
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
            if (\array_key_exists('vote_acceptance', $data) && $data['vote_acceptance'] !== null) {
                $object->setVoteAcceptance($data['vote_acceptance']);
            }
            elseif (\array_key_exists('vote_acceptance', $data) && $data['vote_acceptance'] === null) {
                $object->setVoteAcceptance(null);
            }
            if (\array_key_exists('voto_acceptance', $data) && $data['voto_acceptance'] !== null) {
                $object->setVotoAcceptance($data['voto_acceptance']);
            }
            elseif (\array_key_exists('voto_acceptance', $data) && $data['voto_acceptance'] === null) {
                $object->setVotoAcceptance(null);
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
            if ($object->isInitialized('aeAcceptance') && null !== $object->getAeAcceptance()) {
                $data['ae_acceptance'] = $object->getAeAcceptance();
            }
            if ($object->isInitialized('allocationToken') && null !== $object->getAllocationToken()) {
                $data['allocation_token'] = $object->getAllocationToken();
            }
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('bankAcceptance') && null !== $object->getBankAcceptance()) {
                $data['bank_acceptance'] = $object->getBankAcceptance();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('coopAcceptance') && null !== $object->getCoopAcceptance()) {
                $data['coop_acceptance'] = $object->getCoopAcceptance();
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
            if ($object->isInitialized('eligibilityType') && null !== $object->getEligibilityType()) {
                $data['eligibility_type'] = $object->getEligibilityType();
            }
            if ($object->isInitialized('eligibilityTypeRelationship') && null !== $object->getEligibilityTypeRelationship()) {
                $data['eligibility_type_relationship'] = $object->getEligibilityTypeRelationship();
            }
            if ($object->isInitialized('esAnnexAcceptance') && null !== $object->getEsAnnexAcceptance()) {
                $data['es_annex_acceptance'] = $object->getEsAnnexAcceptance();
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
            if ($object->isInitialized('idNumber') && null !== $object->getIdNumber()) {
                $data['id_number'] = $object->getIdNumber();
            }
            if ($object->isInitialized('idType') && null !== $object->getIdType()) {
                $data['id_type'] = $object->getIdType();
            }
            if ($object->isInitialized('idnScript') && null !== $object->getIdnScript()) {
                $data['idn_script'] = $object->getIdnScript();
            }
            if ($object->isInitialized('insuranceAcceptance') && null !== $object->getInsuranceAcceptance()) {
                $data['insurance_acceptance'] = $object->getInsuranceAcceptance();
            }
            if ($object->isInitialized('intendedUse') && null !== $object->getIntendedUse()) {
                $data['intended_use'] = $object->getIntendedUse();
            }
            if ($object->isInitialized('lawAcceptance') && null !== $object->getLawAcceptance()) {
                $data['law_acceptance'] = $object->getLawAcceptance();
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
            if ($object->isInitialized('ngoOngEligibilityAcceptance') && null !== $object->getNgoOngEligibilityAcceptance()) {
                $data['ngo_ong_eligibility_acceptance'] = $object->getNgoOngEligibilityAcceptance();
            }
            if ($object->isInitialized('ngoOngPolicyAcceptance') && null !== $object->getNgoOngPolicyAcceptance()) {
                $data['ngo_ong_policy_acceptance'] = $object->getNgoOngPolicyAcceptance();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('rurfBlockedDomains') && null !== $object->getRurfBlockedDomains()) {
                $data['rurf_blocked_domains'] = $object->getRurfBlockedDomains();
            }
            if ($object->isInitialized('selfService') && null !== $object->getSelfService()) {
                $data['self_service'] = $object->getSelfService();
            }
            if ($object->isInitialized('trademark') && null !== $object->getTrademark()) {
                $data['trademark'] = $object->getTrademark();
            }
            if ($object->isInitialized('trademarkId') && null !== $object->getTrademarkId()) {
                $data['trademark_id'] = $object->getTrademarkId();
            }
            if ($object->isInitialized('travelAcceptance') && null !== $object->getTravelAcceptance()) {
                $data['travel_acceptance'] = $object->getTravelAcceptance();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            if ($object->isInitialized('verificationCode') && null !== $object->getVerificationCode()) {
                $data['verification_code'] = $object->getVerificationCode();
            }
            if ($object->isInitialized('voteAcceptance') && null !== $object->getVoteAcceptance()) {
                $data['vote_acceptance'] = $object->getVoteAcceptance();
            }
            if ($object->isInitialized('votoAcceptance') && null !== $object->getVotoAcceptance()) {
                $data['voto_acceptance'] = $object->getVotoAcceptance();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainAdditionalData' => false];
        }
    }
}