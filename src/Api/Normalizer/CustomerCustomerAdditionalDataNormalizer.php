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
    class CustomerCustomerAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CustomerCustomerAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CustomerCustomerAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\CustomerCustomerAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_files', $data) && $data['attached_files'] !== null) {
                $values = [];
                foreach ($data['attached_files'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\CustomerFile', 'json', $context);
                }
                $object->setAttachedFiles($values);
            }
            elseif (\array_key_exists('attached_files', $data) && $data['attached_files'] === null) {
                $object->setAttachedFiles(null);
            }
            if (\array_key_exists('birth_address', $data) && $data['birth_address'] !== null) {
                $object->setBirthAddress($data['birth_address']);
            }
            elseif (\array_key_exists('birth_address', $data) && $data['birth_address'] === null) {
                $object->setBirthAddress(null);
            }
            if (\array_key_exists('birth_city', $data) && $data['birth_city'] !== null) {
                $object->setBirthCity($data['birth_city']);
            }
            elseif (\array_key_exists('birth_city', $data) && $data['birth_city'] === null) {
                $object->setBirthCity(null);
            }
            if (\array_key_exists('birth_country', $data) && $data['birth_country'] !== null) {
                $object->setBirthCountry($data['birth_country']);
            }
            elseif (\array_key_exists('birth_country', $data) && $data['birth_country'] === null) {
                $object->setBirthCountry(null);
            }
            if (\array_key_exists('birth_date', $data) && $data['birth_date'] !== null) {
                $object->setBirthDate($data['birth_date']);
            }
            elseif (\array_key_exists('birth_date', $data) && $data['birth_date'] === null) {
                $object->setBirthDate(null);
            }
            if (\array_key_exists('birth_state', $data) && $data['birth_state'] !== null) {
                $object->setBirthState($data['birth_state']);
            }
            elseif (\array_key_exists('birth_state', $data) && $data['birth_state'] === null) {
                $object->setBirthState(null);
            }
            if (\array_key_exists('birth_zipcode', $data) && $data['birth_zipcode'] !== null) {
                $object->setBirthZipcode($data['birth_zipcode']);
            }
            elseif (\array_key_exists('birth_zipcode', $data) && $data['birth_zipcode'] === null) {
                $object->setBirthZipcode(null);
            }
            if (\array_key_exists('company_registration_city', $data) && $data['company_registration_city'] !== null) {
                $object->setCompanyRegistrationCity($data['company_registration_city']);
            }
            elseif (\array_key_exists('company_registration_city', $data) && $data['company_registration_city'] === null) {
                $object->setCompanyRegistrationCity(null);
            }
            if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
                $object->setCompanyRegistrationNumber(null);
            }
            if (\array_key_exists('company_registration_subscription_date', $data) && $data['company_registration_subscription_date'] !== null) {
                $object->setCompanyRegistrationSubscriptionDate($data['company_registration_subscription_date']);
            }
            elseif (\array_key_exists('company_registration_subscription_date', $data) && $data['company_registration_subscription_date'] === null) {
                $object->setCompanyRegistrationSubscriptionDate(null);
            }
            if (\array_key_exists('company_url', $data) && $data['company_url'] !== null) {
                $object->setCompanyUrl($data['company_url']);
            }
            elseif (\array_key_exists('company_url', $data) && $data['company_url'] === null) {
                $object->setCompanyUrl(null);
            }
            if (\array_key_exists('headquarters_address', $data) && $data['headquarters_address'] !== null) {
                $object->setHeadquartersAddress($data['headquarters_address']);
            }
            elseif (\array_key_exists('headquarters_address', $data) && $data['headquarters_address'] === null) {
                $object->setHeadquartersAddress(null);
            }
            if (\array_key_exists('headquarters_city', $data) && $data['headquarters_city'] !== null) {
                $object->setHeadquartersCity($data['headquarters_city']);
            }
            elseif (\array_key_exists('headquarters_city', $data) && $data['headquarters_city'] === null) {
                $object->setHeadquartersCity(null);
            }
            if (\array_key_exists('headquarters_country', $data) && $data['headquarters_country'] !== null) {
                $object->setHeadquartersCountry($data['headquarters_country']);
            }
            elseif (\array_key_exists('headquarters_country', $data) && $data['headquarters_country'] === null) {
                $object->setHeadquartersCountry(null);
            }
            if (\array_key_exists('headquarters_state', $data) && $data['headquarters_state'] !== null) {
                $object->setHeadquartersState($data['headquarters_state']);
            }
            elseif (\array_key_exists('headquarters_state', $data) && $data['headquarters_state'] === null) {
                $object->setHeadquartersState(null);
            }
            if (\array_key_exists('headquarters_zipcode', $data) && $data['headquarters_zipcode'] !== null) {
                $object->setHeadquartersZipcode($data['headquarters_zipcode']);
            }
            elseif (\array_key_exists('headquarters_zipcode', $data) && $data['headquarters_zipcode'] === null) {
                $object->setHeadquartersZipcode(null);
            }
            if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
                $object->setPassportNumber($data['passport_number']);
            }
            elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
                $object->setPassportNumber(null);
            }
            if (\array_key_exists('social_security_number', $data) && $data['social_security_number'] !== null) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            elseif (\array_key_exists('social_security_number', $data) && $data['social_security_number'] === null) {
                $object->setSocialSecurityNumber(null);
            }
            if (\array_key_exists('trading_name', $data) && $data['trading_name'] !== null) {
                $object->setTradingName($data['trading_name']);
            }
            elseif (\array_key_exists('trading_name', $data) && $data['trading_name'] === null) {
                $object->setTradingName(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('attachedFiles') && null !== $object->getAttachedFiles()) {
                $values = [];
                foreach ($object->getAttachedFiles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['attached_files'] = $values;
            }
            if ($object->isInitialized('birthAddress') && null !== $object->getBirthAddress()) {
                $data['birth_address'] = $object->getBirthAddress();
            }
            if ($object->isInitialized('birthCity') && null !== $object->getBirthCity()) {
                $data['birth_city'] = $object->getBirthCity();
            }
            if ($object->isInitialized('birthCountry') && null !== $object->getBirthCountry()) {
                $data['birth_country'] = $object->getBirthCountry();
            }
            if ($object->isInitialized('birthDate') && null !== $object->getBirthDate()) {
                $data['birth_date'] = $object->getBirthDate();
            }
            if ($object->isInitialized('birthState') && null !== $object->getBirthState()) {
                $data['birth_state'] = $object->getBirthState();
            }
            if ($object->isInitialized('birthZipcode') && null !== $object->getBirthZipcode()) {
                $data['birth_zipcode'] = $object->getBirthZipcode();
            }
            if ($object->isInitialized('companyRegistrationCity') && null !== $object->getCompanyRegistrationCity()) {
                $data['company_registration_city'] = $object->getCompanyRegistrationCity();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('companyRegistrationSubscriptionDate') && null !== $object->getCompanyRegistrationSubscriptionDate()) {
                $data['company_registration_subscription_date'] = $object->getCompanyRegistrationSubscriptionDate();
            }
            if ($object->isInitialized('companyUrl') && null !== $object->getCompanyUrl()) {
                $data['company_url'] = $object->getCompanyUrl();
            }
            if ($object->isInitialized('headquartersAddress') && null !== $object->getHeadquartersAddress()) {
                $data['headquarters_address'] = $object->getHeadquartersAddress();
            }
            if ($object->isInitialized('headquartersCity') && null !== $object->getHeadquartersCity()) {
                $data['headquarters_city'] = $object->getHeadquartersCity();
            }
            if ($object->isInitialized('headquartersCountry') && null !== $object->getHeadquartersCountry()) {
                $data['headquarters_country'] = $object->getHeadquartersCountry();
            }
            if ($object->isInitialized('headquartersState') && null !== $object->getHeadquartersState()) {
                $data['headquarters_state'] = $object->getHeadquartersState();
            }
            if ($object->isInitialized('headquartersZipcode') && null !== $object->getHeadquartersZipcode()) {
                $data['headquarters_zipcode'] = $object->getHeadquartersZipcode();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('socialSecurityNumber') && null !== $object->getSocialSecurityNumber()) {
                $data['social_security_number'] = $object->getSocialSecurityNumber();
            }
            if ($object->isInitialized('tradingName') && null !== $object->getTradingName()) {
                $data['trading_name'] = $object->getTradingName();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CustomerCustomerAdditionalData' => false];
        }
    }
} else {
    class CustomerCustomerAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CustomerCustomerAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CustomerCustomerAdditionalData';
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
            $object = new \Rouda\OpenProvider\Api\Model\CustomerCustomerAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_files', $data) && $data['attached_files'] !== null) {
                $values = [];
                foreach ($data['attached_files'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\CustomerFile', 'json', $context);
                }
                $object->setAttachedFiles($values);
            }
            elseif (\array_key_exists('attached_files', $data) && $data['attached_files'] === null) {
                $object->setAttachedFiles(null);
            }
            if (\array_key_exists('birth_address', $data) && $data['birth_address'] !== null) {
                $object->setBirthAddress($data['birth_address']);
            }
            elseif (\array_key_exists('birth_address', $data) && $data['birth_address'] === null) {
                $object->setBirthAddress(null);
            }
            if (\array_key_exists('birth_city', $data) && $data['birth_city'] !== null) {
                $object->setBirthCity($data['birth_city']);
            }
            elseif (\array_key_exists('birth_city', $data) && $data['birth_city'] === null) {
                $object->setBirthCity(null);
            }
            if (\array_key_exists('birth_country', $data) && $data['birth_country'] !== null) {
                $object->setBirthCountry($data['birth_country']);
            }
            elseif (\array_key_exists('birth_country', $data) && $data['birth_country'] === null) {
                $object->setBirthCountry(null);
            }
            if (\array_key_exists('birth_date', $data) && $data['birth_date'] !== null) {
                $object->setBirthDate($data['birth_date']);
            }
            elseif (\array_key_exists('birth_date', $data) && $data['birth_date'] === null) {
                $object->setBirthDate(null);
            }
            if (\array_key_exists('birth_state', $data) && $data['birth_state'] !== null) {
                $object->setBirthState($data['birth_state']);
            }
            elseif (\array_key_exists('birth_state', $data) && $data['birth_state'] === null) {
                $object->setBirthState(null);
            }
            if (\array_key_exists('birth_zipcode', $data) && $data['birth_zipcode'] !== null) {
                $object->setBirthZipcode($data['birth_zipcode']);
            }
            elseif (\array_key_exists('birth_zipcode', $data) && $data['birth_zipcode'] === null) {
                $object->setBirthZipcode(null);
            }
            if (\array_key_exists('company_registration_city', $data) && $data['company_registration_city'] !== null) {
                $object->setCompanyRegistrationCity($data['company_registration_city']);
            }
            elseif (\array_key_exists('company_registration_city', $data) && $data['company_registration_city'] === null) {
                $object->setCompanyRegistrationCity(null);
            }
            if (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] !== null) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            elseif (\array_key_exists('company_registration_number', $data) && $data['company_registration_number'] === null) {
                $object->setCompanyRegistrationNumber(null);
            }
            if (\array_key_exists('company_registration_subscription_date', $data) && $data['company_registration_subscription_date'] !== null) {
                $object->setCompanyRegistrationSubscriptionDate($data['company_registration_subscription_date']);
            }
            elseif (\array_key_exists('company_registration_subscription_date', $data) && $data['company_registration_subscription_date'] === null) {
                $object->setCompanyRegistrationSubscriptionDate(null);
            }
            if (\array_key_exists('company_url', $data) && $data['company_url'] !== null) {
                $object->setCompanyUrl($data['company_url']);
            }
            elseif (\array_key_exists('company_url', $data) && $data['company_url'] === null) {
                $object->setCompanyUrl(null);
            }
            if (\array_key_exists('headquarters_address', $data) && $data['headquarters_address'] !== null) {
                $object->setHeadquartersAddress($data['headquarters_address']);
            }
            elseif (\array_key_exists('headquarters_address', $data) && $data['headquarters_address'] === null) {
                $object->setHeadquartersAddress(null);
            }
            if (\array_key_exists('headquarters_city', $data) && $data['headquarters_city'] !== null) {
                $object->setHeadquartersCity($data['headquarters_city']);
            }
            elseif (\array_key_exists('headquarters_city', $data) && $data['headquarters_city'] === null) {
                $object->setHeadquartersCity(null);
            }
            if (\array_key_exists('headquarters_country', $data) && $data['headquarters_country'] !== null) {
                $object->setHeadquartersCountry($data['headquarters_country']);
            }
            elseif (\array_key_exists('headquarters_country', $data) && $data['headquarters_country'] === null) {
                $object->setHeadquartersCountry(null);
            }
            if (\array_key_exists('headquarters_state', $data) && $data['headquarters_state'] !== null) {
                $object->setHeadquartersState($data['headquarters_state']);
            }
            elseif (\array_key_exists('headquarters_state', $data) && $data['headquarters_state'] === null) {
                $object->setHeadquartersState(null);
            }
            if (\array_key_exists('headquarters_zipcode', $data) && $data['headquarters_zipcode'] !== null) {
                $object->setHeadquartersZipcode($data['headquarters_zipcode']);
            }
            elseif (\array_key_exists('headquarters_zipcode', $data) && $data['headquarters_zipcode'] === null) {
                $object->setHeadquartersZipcode(null);
            }
            if (\array_key_exists('passport_number', $data) && $data['passport_number'] !== null) {
                $object->setPassportNumber($data['passport_number']);
            }
            elseif (\array_key_exists('passport_number', $data) && $data['passport_number'] === null) {
                $object->setPassportNumber(null);
            }
            if (\array_key_exists('social_security_number', $data) && $data['social_security_number'] !== null) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            elseif (\array_key_exists('social_security_number', $data) && $data['social_security_number'] === null) {
                $object->setSocialSecurityNumber(null);
            }
            if (\array_key_exists('trading_name', $data) && $data['trading_name'] !== null) {
                $object->setTradingName($data['trading_name']);
            }
            elseif (\array_key_exists('trading_name', $data) && $data['trading_name'] === null) {
                $object->setTradingName(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('attachedFiles') && null !== $object->getAttachedFiles()) {
                $values = [];
                foreach ($object->getAttachedFiles() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['attached_files'] = $values;
            }
            if ($object->isInitialized('birthAddress') && null !== $object->getBirthAddress()) {
                $data['birth_address'] = $object->getBirthAddress();
            }
            if ($object->isInitialized('birthCity') && null !== $object->getBirthCity()) {
                $data['birth_city'] = $object->getBirthCity();
            }
            if ($object->isInitialized('birthCountry') && null !== $object->getBirthCountry()) {
                $data['birth_country'] = $object->getBirthCountry();
            }
            if ($object->isInitialized('birthDate') && null !== $object->getBirthDate()) {
                $data['birth_date'] = $object->getBirthDate();
            }
            if ($object->isInitialized('birthState') && null !== $object->getBirthState()) {
                $data['birth_state'] = $object->getBirthState();
            }
            if ($object->isInitialized('birthZipcode') && null !== $object->getBirthZipcode()) {
                $data['birth_zipcode'] = $object->getBirthZipcode();
            }
            if ($object->isInitialized('companyRegistrationCity') && null !== $object->getCompanyRegistrationCity()) {
                $data['company_registration_city'] = $object->getCompanyRegistrationCity();
            }
            if ($object->isInitialized('companyRegistrationNumber') && null !== $object->getCompanyRegistrationNumber()) {
                $data['company_registration_number'] = $object->getCompanyRegistrationNumber();
            }
            if ($object->isInitialized('companyRegistrationSubscriptionDate') && null !== $object->getCompanyRegistrationSubscriptionDate()) {
                $data['company_registration_subscription_date'] = $object->getCompanyRegistrationSubscriptionDate();
            }
            if ($object->isInitialized('companyUrl') && null !== $object->getCompanyUrl()) {
                $data['company_url'] = $object->getCompanyUrl();
            }
            if ($object->isInitialized('headquartersAddress') && null !== $object->getHeadquartersAddress()) {
                $data['headquarters_address'] = $object->getHeadquartersAddress();
            }
            if ($object->isInitialized('headquartersCity') && null !== $object->getHeadquartersCity()) {
                $data['headquarters_city'] = $object->getHeadquartersCity();
            }
            if ($object->isInitialized('headquartersCountry') && null !== $object->getHeadquartersCountry()) {
                $data['headquarters_country'] = $object->getHeadquartersCountry();
            }
            if ($object->isInitialized('headquartersState') && null !== $object->getHeadquartersState()) {
                $data['headquarters_state'] = $object->getHeadquartersState();
            }
            if ($object->isInitialized('headquartersZipcode') && null !== $object->getHeadquartersZipcode()) {
                $data['headquarters_zipcode'] = $object->getHeadquartersZipcode();
            }
            if ($object->isInitialized('passportNumber') && null !== $object->getPassportNumber()) {
                $data['passport_number'] = $object->getPassportNumber();
            }
            if ($object->isInitialized('socialSecurityNumber') && null !== $object->getSocialSecurityNumber()) {
                $data['social_security_number'] = $object->getSocialSecurityNumber();
            }
            if ($object->isInitialized('tradingName') && null !== $object->getTradingName()) {
                $data['trading_name'] = $object->getTradingName();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CustomerCustomerAdditionalData' => false];
        }
    }
}