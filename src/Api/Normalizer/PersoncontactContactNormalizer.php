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
    class PersoncontactContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\PersoncontactContact();
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
            if (\array_key_exists('hash_changed_at', $data) && $data['hash_changed_at'] !== null) {
                $object->setHashChangedAt($data['hash_changed_at']);
            }
            elseif (\array_key_exists('hash_changed_at', $data) && $data['hash_changed_at'] === null) {
                $object->setHashChangedAt(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
                $object->setIsActive($data['is_active']);
            }
            elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('last_api_call_at', $data) && $data['last_api_call_at'] !== null) {
                $object->setLastApiCallAt($data['last_api_call_at']);
            }
            elseif (\array_key_exists('last_api_call_at', $data) && $data['last_api_call_at'] === null) {
                $object->setLastApiCallAt(null);
            }
            if (\array_key_exists('last_login_at', $data) && $data['last_login_at'] !== null) {
                $object->setLastLoginAt($data['last_login_at']);
            }
            elseif (\array_key_exists('last_login_at', $data) && $data['last_login_at'] === null) {
                $object->setLastLoginAt(null);
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
            if (\array_key_exists('password_changed_at', $data) && $data['password_changed_at'] !== null) {
                $object->setPasswordChangedAt($data['password_changed_at']);
            }
            elseif (\array_key_exists('password_changed_at', $data) && $data['password_changed_at'] === null) {
                $object->setPasswordChangedAt(null);
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
            if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
                $object->setResellerId($data['reseller_id']);
            }
            elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
                $object->setResellerId(null);
            }
            if (\array_key_exists('role', $data) && $data['role'] !== null) {
                $object->setRole($data['role']);
            }
            elseif (\array_key_exists('role', $data) && $data['role'] === null) {
                $object->setRole(null);
            }
            if (\array_key_exists('secret_key', $data) && $data['secret_key'] !== null) {
                $object->setSecretKey($data['secret_key']);
            }
            elseif (\array_key_exists('secret_key', $data) && $data['secret_key'] === null) {
                $object->setSecretKey(null);
            }
            if (\array_key_exists('username', $data) && $data['username'] !== null) {
                $object->setUsername($data['username']);
            }
            elseif (\array_key_exists('username', $data) && $data['username'] === null) {
                $object->setUsername(null);
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
            if ($object->isInitialized('hashChangedAt') && null !== $object->getHashChangedAt()) {
                $data['hash_changed_at'] = $object->getHashChangedAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('lastApiCallAt') && null !== $object->getLastApiCallAt()) {
                $data['last_api_call_at'] = $object->getLastApiCallAt();
            }
            if ($object->isInitialized('lastLoginAt') && null !== $object->getLastLoginAt()) {
                $data['last_login_at'] = $object->getLastLoginAt();
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
            if ($object->isInitialized('passwordChangedAt') && null !== $object->getPasswordChangedAt()) {
                $data['password_changed_at'] = $object->getPasswordChangedAt();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('rcpClientIpList') && null !== $object->getRcpClientIpList()) {
                $data['rcp_client_ip_list'] = $this->normalizer->normalize($object->getRcpClientIpList(), 'json', $context);
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('secretKey') && null !== $object->getSecretKey()) {
                $data['secret_key'] = $object->getSecretKey();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact' => false];
        }
    }
} else {
    class PersoncontactContactNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact';
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
            $object = new \Rouda\OpenProvider\Api\Model\PersoncontactContact();
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
            if (\array_key_exists('hash_changed_at', $data) && $data['hash_changed_at'] !== null) {
                $object->setHashChangedAt($data['hash_changed_at']);
            }
            elseif (\array_key_exists('hash_changed_at', $data) && $data['hash_changed_at'] === null) {
                $object->setHashChangedAt(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_active', $data) && $data['is_active'] !== null) {
                $object->setIsActive($data['is_active']);
            }
            elseif (\array_key_exists('is_active', $data) && $data['is_active'] === null) {
                $object->setIsActive(null);
            }
            if (\array_key_exists('last_api_call_at', $data) && $data['last_api_call_at'] !== null) {
                $object->setLastApiCallAt($data['last_api_call_at']);
            }
            elseif (\array_key_exists('last_api_call_at', $data) && $data['last_api_call_at'] === null) {
                $object->setLastApiCallAt(null);
            }
            if (\array_key_exists('last_login_at', $data) && $data['last_login_at'] !== null) {
                $object->setLastLoginAt($data['last_login_at']);
            }
            elseif (\array_key_exists('last_login_at', $data) && $data['last_login_at'] === null) {
                $object->setLastLoginAt(null);
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
            if (\array_key_exists('password_changed_at', $data) && $data['password_changed_at'] !== null) {
                $object->setPasswordChangedAt($data['password_changed_at']);
            }
            elseif (\array_key_exists('password_changed_at', $data) && $data['password_changed_at'] === null) {
                $object->setPasswordChangedAt(null);
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
            if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
                $object->setResellerId($data['reseller_id']);
            }
            elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
                $object->setResellerId(null);
            }
            if (\array_key_exists('role', $data) && $data['role'] !== null) {
                $object->setRole($data['role']);
            }
            elseif (\array_key_exists('role', $data) && $data['role'] === null) {
                $object->setRole(null);
            }
            if (\array_key_exists('secret_key', $data) && $data['secret_key'] !== null) {
                $object->setSecretKey($data['secret_key']);
            }
            elseif (\array_key_exists('secret_key', $data) && $data['secret_key'] === null) {
                $object->setSecretKey(null);
            }
            if (\array_key_exists('username', $data) && $data['username'] !== null) {
                $object->setUsername($data['username']);
            }
            elseif (\array_key_exists('username', $data) && $data['username'] === null) {
                $object->setUsername(null);
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
            if ($object->isInitialized('hashChangedAt') && null !== $object->getHashChangedAt()) {
                $data['hash_changed_at'] = $object->getHashChangedAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('lastApiCallAt') && null !== $object->getLastApiCallAt()) {
                $data['last_api_call_at'] = $object->getLastApiCallAt();
            }
            if ($object->isInitialized('lastLoginAt') && null !== $object->getLastLoginAt()) {
                $data['last_login_at'] = $object->getLastLoginAt();
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
            if ($object->isInitialized('passwordChangedAt') && null !== $object->getPasswordChangedAt()) {
                $data['password_changed_at'] = $object->getPasswordChangedAt();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('rcpClientIpList') && null !== $object->getRcpClientIpList()) {
                $data['rcp_client_ip_list'] = $this->normalizer->normalize($object->getRcpClientIpList(), 'json', $context);
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('role') && null !== $object->getRole()) {
                $data['role'] = $object->getRole();
            }
            if ($object->isInitialized('secretKey') && null !== $object->getSecretKey()) {
                $data['secret_key'] = $object->getSecretKey();
            }
            if ($object->isInitialized('username') && null !== $object->getUsername()) {
                $data['username'] = $object->getUsername();
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\PersoncontactContact' => false];
        }
    }
}