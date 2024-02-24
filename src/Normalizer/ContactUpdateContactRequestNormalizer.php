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
    class ContactUpdateContactRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ContactUpdateContactRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ContactUpdateContactRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\ContactUpdateContactRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\ContactAdditionalData', 'json', $context));
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProviderAPI\\Model\\ContactAddress', 'json', $context));
            }
            if (\array_key_exists('api_access_enabled', $data)) {
                $object->setApiAccessEnabled($data['api_access_enabled']);
            }
            if (\array_key_exists('api_client_ip_list', $data)) {
                $object->setApiClientIpList($this->denormalizer->denormalize($data['api_client_ip_list'], 'Rouda\\OpenProviderAPI\\Model\\ContactClientIpList', 'json', $context));
            }
            if (\array_key_exists('auth_type', $data)) {
                $object->setAuthType($data['auth_type']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('company_name', $data)) {
                $object->setCompanyName($data['company_name']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('inn', $data)) {
                $object->setInn($data['inn']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
            }
            if (\array_key_exists('kpp', $data)) {
                $object->setKpp($data['kpp']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProviderAPI\\Model\\ContactName', 'json', $context));
            }
            if (\array_key_exists('password_change_declined_at', $data)) {
                $object->setPasswordChangeDeclinedAt($data['password_change_declined_at']);
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProviderAPI\\Model\\ContactPhone', 'json', $context));
            }
            if (\array_key_exists('rcp_client_ip_list', $data)) {
                $object->setRcpClientIpList($this->denormalizer->denormalize($data['rcp_client_ip_list'], 'Rouda\\OpenProviderAPI\\Model\\ContactClientIpList', 'json', $context));
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\ContactUpdateContactRequest' => false];
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
            return $type === 'Rouda\\OpenProviderAPI\\Model\\ContactUpdateContactRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\ContactUpdateContactRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\ContactUpdateContactRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\ContactAdditionalData', 'json', $context));
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProviderAPI\\Model\\ContactAddress', 'json', $context));
            }
            if (\array_key_exists('api_access_enabled', $data)) {
                $object->setApiAccessEnabled($data['api_access_enabled']);
            }
            if (\array_key_exists('api_client_ip_list', $data)) {
                $object->setApiClientIpList($this->denormalizer->denormalize($data['api_client_ip_list'], 'Rouda\\OpenProviderAPI\\Model\\ContactClientIpList', 'json', $context));
            }
            if (\array_key_exists('auth_type', $data)) {
                $object->setAuthType($data['auth_type']);
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('company_name', $data)) {
                $object->setCompanyName($data['company_name']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('inn', $data)) {
                $object->setInn($data['inn']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
            }
            if (\array_key_exists('kpp', $data)) {
                $object->setKpp($data['kpp']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProviderAPI\\Model\\ContactName', 'json', $context));
            }
            if (\array_key_exists('password_change_declined_at', $data)) {
                $object->setPasswordChangeDeclinedAt($data['password_change_declined_at']);
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProviderAPI\\Model\\ContactPhone', 'json', $context));
            }
            if (\array_key_exists('rcp_client_ip_list', $data)) {
                $object->setRcpClientIpList($this->denormalizer->denormalize($data['rcp_client_ip_list'], 'Rouda\\OpenProviderAPI\\Model\\ContactClientIpList', 'json', $context));
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\ContactUpdateContactRequest' => false];
        }
    }
}