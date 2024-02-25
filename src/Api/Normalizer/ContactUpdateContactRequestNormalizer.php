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
    class ContactUpdateContactRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ContactUpdateContactRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ContactUpdateContactRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ContactUpdateContactRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAddress', 'json', $context));
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('api_access_enabled', $data) && $data['api_access_enabled'] !== null) {
                $object->setApiAccessEnabled($data['api_access_enabled']);
            }
            elseif (\array_key_exists('api_access_enabled', $data) && $data['api_access_enabled'] === null) {
                $object->setApiAccessEnabled(null);
            }
            if (\array_key_exists('api_client_ip_list', $data) && $data['api_client_ip_list'] !== null) {
                $object->setApiClientIpList($this->denormalizer->denormalize($data['api_client_ip_list'], 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList', 'json', $context));
            }
            elseif (\array_key_exists('api_client_ip_list', $data) && $data['api_client_ip_list'] === null) {
                $object->setApiClientIpList(null);
            }
            if (\array_key_exists('auth_type', $data) && $data['auth_type'] !== null) {
                $object->setAuthType($data['auth_type']);
            }
            elseif (\array_key_exists('auth_type', $data) && $data['auth_type'] === null) {
                $object->setAuthType(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
                $object->setCompanyName($data['company_name']);
            }
            elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
                $object->setInn($data['inn']);
            }
            elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
                $object->setInn(null);
            }
            if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
                $object->setIsActive($data['is_active']);
            }
            elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
                $object->setKpp($data['kpp']);
            }
            elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
                $object->setKpp(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $object->setLocale($data['locale']);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProvider\\Api\\Model\\ContactName', 'json', $context));
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('password_change_declined_at', $data) && $data['password_change_declined_at'] !== null) {
                $object->setPasswordChangeDeclinedAt($data['password_change_declined_at']);
            }
            elseif (\array_key_exists('password_change_declined_at', $data) && $data['password_change_declined_at'] === null) {
                $object->setPasswordChangeDeclinedAt(null);
            }
            if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProvider\\Api\\Model\\ContactPhone', 'json', $context));
            }
            elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('rcp_client_ip_list', $data) && $data['rcp_client_ip_list'] !== null) {
                $object->setRcpClientIpList($this->denormalizer->denormalize($data['rcp_client_ip_list'], 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList', 'json', $context));
            }
            elseif (\array_key_exists('rcp_client_ip_list', $data) && $data['rcp_client_ip_list'] === null) {
                $object->setRcpClientIpList(null);
            }
            if (\array_key_exists('role', $data) && $data['role'] !== null) {
                $object->setRole($data['role']);
            }
            elseif (\array_key_exists('role', $data) && $data['role'] === null) {
                $object->setRole(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('apiAccessEnabled') && null !== $object->getApiAccessEnabled()) {
                $data['api_access_enabled'] = $object->getApiAccessEnabled();
            }
            if ($object->isInitialized('apiClientIpList') && null !== $object->getApiClientIpList()) {
                $data['api_client_ip_list'] = $this->normalizer->normalize($object->getApiClientIpList(), 'json', $context);
            }
            if ($object->isInitialized('authType') && null !== $object->getAuthType()) {
                $data['auth_type'] = $object->getAuthType();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('inn') && null !== $object->getInn()) {
                $data['inn'] = $object->getInn();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('kpp') && null !== $object->getKpp()) {
                $data['kpp'] = $object->getKpp();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('passwordChangeDeclinedAt') && null !== $object->getPasswordChangeDeclinedAt()) {
                $data['password_change_declined_at'] = $object->getPasswordChangeDeclinedAt();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('rcpClientIpList') && null !== $object->getRcpClientIpList()) {
                $data['rcp_client_ip_list'] = $this->normalizer->normalize($object->getRcpClientIpList(), 'json', $context);
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ContactUpdateContactRequest' => false];
        }
    }
} else {
    class ContactUpdateContactRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ContactUpdateContactRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ContactUpdateContactRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\ContactUpdateContactRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAddress', 'json', $context));
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('api_access_enabled', $data) && $data['api_access_enabled'] !== null) {
                $object->setApiAccessEnabled($data['api_access_enabled']);
            }
            elseif (\array_key_exists('api_access_enabled', $data) && $data['api_access_enabled'] === null) {
                $object->setApiAccessEnabled(null);
            }
            if (\array_key_exists('api_client_ip_list', $data) && $data['api_client_ip_list'] !== null) {
                $object->setApiClientIpList($this->denormalizer->denormalize($data['api_client_ip_list'], 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList', 'json', $context));
            }
            elseif (\array_key_exists('api_client_ip_list', $data) && $data['api_client_ip_list'] === null) {
                $object->setApiClientIpList(null);
            }
            if (\array_key_exists('auth_type', $data) && $data['auth_type'] !== null) {
                $object->setAuthType($data['auth_type']);
            }
            elseif (\array_key_exists('auth_type', $data) && $data['auth_type'] === null) {
                $object->setAuthType(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
                $object->setCompanyName($data['company_name']);
            }
            elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('email', $data) && $data['email'] !== null) {
                $object->setEmail($data['email']);
            }
            elseif (\array_key_exists('email', $data) && $data['email'] === null) {
                $object->setEmail(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
                $object->setInn($data['inn']);
            }
            elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
                $object->setInn(null);
            }
            if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
                $object->setIsActive($data['is_active']);
            }
            elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
                $object->setKpp($data['kpp']);
            }
            elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
                $object->setKpp(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $object->setLocale($data['locale']);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProvider\\Api\\Model\\ContactName', 'json', $context));
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('password_change_declined_at', $data) && $data['password_change_declined_at'] !== null) {
                $object->setPasswordChangeDeclinedAt($data['password_change_declined_at']);
            }
            elseif (\array_key_exists('password_change_declined_at', $data) && $data['password_change_declined_at'] === null) {
                $object->setPasswordChangeDeclinedAt(null);
            }
            if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProvider\\Api\\Model\\ContactPhone', 'json', $context));
            }
            elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('rcp_client_ip_list', $data) && $data['rcp_client_ip_list'] !== null) {
                $object->setRcpClientIpList($this->denormalizer->denormalize($data['rcp_client_ip_list'], 'Rouda\\OpenProvider\\Api\\Model\\ContactClientIpList', 'json', $context));
            }
            elseif (\array_key_exists('rcp_client_ip_list', $data) && $data['rcp_client_ip_list'] === null) {
                $object->setRcpClientIpList(null);
            }
            if (\array_key_exists('role', $data) && $data['role'] !== null) {
                $object->setRole($data['role']);
            }
            elseif (\array_key_exists('role', $data) && $data['role'] === null) {
                $object->setRole(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('apiAccessEnabled') && null !== $object->getApiAccessEnabled()) {
                $data['api_access_enabled'] = $object->getApiAccessEnabled();
            }
            if ($object->isInitialized('apiClientIpList') && null !== $object->getApiClientIpList()) {
                $data['api_client_ip_list'] = $this->normalizer->normalize($object->getApiClientIpList(), 'json', $context);
            }
            if ($object->isInitialized('authType') && null !== $object->getAuthType()) {
                $data['auth_type'] = $object->getAuthType();
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('inn') && null !== $object->getInn()) {
                $data['inn'] = $object->getInn();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('kpp') && null !== $object->getKpp()) {
                $data['kpp'] = $object->getKpp();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('passwordChangeDeclinedAt') && null !== $object->getPasswordChangeDeclinedAt()) {
                $data['password_change_declined_at'] = $object->getPasswordChangeDeclinedAt();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('rcpClientIpList') && null !== $object->getRcpClientIpList()) {
                $data['rcp_client_ip_list'] = $this->normalizer->normalize($object->getRcpClientIpList(), 'json', $context);
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ContactUpdateContactRequest' => false];
        }
    }
}