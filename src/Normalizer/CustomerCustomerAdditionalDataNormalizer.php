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
    class CustomerCustomerAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\CustomerCustomerAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_files', $data)) {
                $values = [];
                foreach ($data['attached_files'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\CustomerFile', 'json', $context);
                }
                $object->setAttachedFiles($values);
            }
            if (\array_key_exists('birth_address', $data)) {
                $object->setBirthAddress($data['birth_address']);
            }
            if (\array_key_exists('birth_city', $data)) {
                $object->setBirthCity($data['birth_city']);
            }
            if (\array_key_exists('birth_country', $data)) {
                $object->setBirthCountry($data['birth_country']);
            }
            if (\array_key_exists('birth_date', $data)) {
                $object->setBirthDate($data['birth_date']);
            }
            if (\array_key_exists('birth_state', $data)) {
                $object->setBirthState($data['birth_state']);
            }
            if (\array_key_exists('birth_zipcode', $data)) {
                $object->setBirthZipcode($data['birth_zipcode']);
            }
            if (\array_key_exists('company_registration_city', $data)) {
                $object->setCompanyRegistrationCity($data['company_registration_city']);
            }
            if (\array_key_exists('company_registration_number', $data)) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            if (\array_key_exists('company_registration_subscription_date', $data)) {
                $object->setCompanyRegistrationSubscriptionDate($data['company_registration_subscription_date']);
            }
            if (\array_key_exists('company_url', $data)) {
                $object->setCompanyUrl($data['company_url']);
            }
            if (\array_key_exists('headquarters_address', $data)) {
                $object->setHeadquartersAddress($data['headquarters_address']);
            }
            if (\array_key_exists('headquarters_city', $data)) {
                $object->setHeadquartersCity($data['headquarters_city']);
            }
            if (\array_key_exists('headquarters_country', $data)) {
                $object->setHeadquartersCountry($data['headquarters_country']);
            }
            if (\array_key_exists('headquarters_state', $data)) {
                $object->setHeadquartersState($data['headquarters_state']);
            }
            if (\array_key_exists('headquarters_zipcode', $data)) {
                $object->setHeadquartersZipcode($data['headquarters_zipcode']);
            }
            if (\array_key_exists('passport_number', $data)) {
                $object->setPassportNumber($data['passport_number']);
            }
            if (\array_key_exists('social_security_number', $data)) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            if (\array_key_exists('trading_name', $data)) {
                $object->setTradingName($data['trading_name']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData' => false];
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
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData';
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
            $object = new \Rouda\OpenProviderAPI\Model\CustomerCustomerAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('attached_files', $data)) {
                $values = [];
                foreach ($data['attached_files'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\CustomerFile', 'json', $context);
                }
                $object->setAttachedFiles($values);
            }
            if (\array_key_exists('birth_address', $data)) {
                $object->setBirthAddress($data['birth_address']);
            }
            if (\array_key_exists('birth_city', $data)) {
                $object->setBirthCity($data['birth_city']);
            }
            if (\array_key_exists('birth_country', $data)) {
                $object->setBirthCountry($data['birth_country']);
            }
            if (\array_key_exists('birth_date', $data)) {
                $object->setBirthDate($data['birth_date']);
            }
            if (\array_key_exists('birth_state', $data)) {
                $object->setBirthState($data['birth_state']);
            }
            if (\array_key_exists('birth_zipcode', $data)) {
                $object->setBirthZipcode($data['birth_zipcode']);
            }
            if (\array_key_exists('company_registration_city', $data)) {
                $object->setCompanyRegistrationCity($data['company_registration_city']);
            }
            if (\array_key_exists('company_registration_number', $data)) {
                $object->setCompanyRegistrationNumber($data['company_registration_number']);
            }
            if (\array_key_exists('company_registration_subscription_date', $data)) {
                $object->setCompanyRegistrationSubscriptionDate($data['company_registration_subscription_date']);
            }
            if (\array_key_exists('company_url', $data)) {
                $object->setCompanyUrl($data['company_url']);
            }
            if (\array_key_exists('headquarters_address', $data)) {
                $object->setHeadquartersAddress($data['headquarters_address']);
            }
            if (\array_key_exists('headquarters_city', $data)) {
                $object->setHeadquartersCity($data['headquarters_city']);
            }
            if (\array_key_exists('headquarters_country', $data)) {
                $object->setHeadquartersCountry($data['headquarters_country']);
            }
            if (\array_key_exists('headquarters_state', $data)) {
                $object->setHeadquartersState($data['headquarters_state']);
            }
            if (\array_key_exists('headquarters_zipcode', $data)) {
                $object->setHeadquartersZipcode($data['headquarters_zipcode']);
            }
            if (\array_key_exists('passport_number', $data)) {
                $object->setPassportNumber($data['passport_number']);
            }
            if (\array_key_exists('social_security_number', $data)) {
                $object->setSocialSecurityNumber($data['social_security_number']);
            }
            if (\array_key_exists('trading_name', $data)) {
                $object->setTradingName($data['trading_name']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData' => false];
        }
    }
}