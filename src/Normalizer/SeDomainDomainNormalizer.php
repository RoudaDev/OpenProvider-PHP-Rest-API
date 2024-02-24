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
    class SeDomainDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainDomain';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainDomain';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainDomain();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bundle', $data)) {
                $object->setBundle($data['bundle']);
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
            }
            if (\array_key_exists('order_id', $data)) {
                $object->setOrderId($data['order_id']);
            }
            if (\array_key_exists('products', $data)) {
                $object->setProducts($this->denormalizer->denormalize($data['products'], 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts', 'json', $context));
            }
            if (\array_key_exists('records', $data)) {
                $object->setRecords($this->denormalizer->denormalize($data['records'], 'Rouda\\OpenProviderAPI\\Model\\SeDomainRecords', 'json', $context));
            }
            if (\array_key_exists('reseller_id', $data)) {
                $object->setResellerId($data['reseller_id']);
            }
            if (\array_key_exists('smtp_password', $data)) {
                $object->setSmtpPassword($data['smtp_password']);
            }
            if (\array_key_exists('user_email', $data)) {
                $object->setUserEmail($data['user_email']);
            }
            if (\array_key_exists('user_password', $data)) {
                $object->setUserPassword($data['user_password']);
            }
            if (\array_key_exists('with_outgoing_filter', $data)) {
                $object->setWithOutgoingFilter($data['with_outgoing_filter']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('bundle') && null !== $object->getBundle()) {
                $data['bundle'] = $object->getBundle();
            }
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('orderId') && null !== $object->getOrderId()) {
                $data['order_id'] = $object->getOrderId();
            }
            if ($object->isInitialized('products') && null !== $object->getProducts()) {
                $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
            }
            if ($object->isInitialized('records') && null !== $object->getRecords()) {
                $data['records'] = $this->normalizer->normalize($object->getRecords(), 'json', $context);
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('smtpPassword') && null !== $object->getSmtpPassword()) {
                $data['smtp_password'] = $object->getSmtpPassword();
            }
            if ($object->isInitialized('userEmail') && null !== $object->getUserEmail()) {
                $data['user_email'] = $object->getUserEmail();
            }
            if ($object->isInitialized('userPassword') && null !== $object->getUserPassword()) {
                $data['user_password'] = $object->getUserPassword();
            }
            if ($object->isInitialized('withOutgoingFilter') && null !== $object->getWithOutgoingFilter()) {
                $data['with_outgoing_filter'] = $object->getWithOutgoingFilter();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainDomain' => false];
        }
    }
} else {
    class SeDomainDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SeDomainDomain';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SeDomainDomain';
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
            $object = new \Rouda\OpenProviderAPI\Model\SeDomainDomain();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bundle', $data)) {
                $object->setBundle($data['bundle']);
            }
            if (\array_key_exists('domain_name', $data)) {
                $object->setDomainName($data['domain_name']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('is_active', $data)) {
                $object->setIsActive($data['is_active']);
            }
            if (\array_key_exists('order_id', $data)) {
                $object->setOrderId($data['order_id']);
            }
            if (\array_key_exists('products', $data)) {
                $object->setProducts($this->denormalizer->denormalize($data['products'], 'Rouda\\OpenProviderAPI\\Model\\SeDomainProducts', 'json', $context));
            }
            if (\array_key_exists('records', $data)) {
                $object->setRecords($this->denormalizer->denormalize($data['records'], 'Rouda\\OpenProviderAPI\\Model\\SeDomainRecords', 'json', $context));
            }
            if (\array_key_exists('reseller_id', $data)) {
                $object->setResellerId($data['reseller_id']);
            }
            if (\array_key_exists('smtp_password', $data)) {
                $object->setSmtpPassword($data['smtp_password']);
            }
            if (\array_key_exists('user_email', $data)) {
                $object->setUserEmail($data['user_email']);
            }
            if (\array_key_exists('user_password', $data)) {
                $object->setUserPassword($data['user_password']);
            }
            if (\array_key_exists('with_outgoing_filter', $data)) {
                $object->setWithOutgoingFilter($data['with_outgoing_filter']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('bundle') && null !== $object->getBundle()) {
                $data['bundle'] = $object->getBundle();
            }
            if ($object->isInitialized('domainName') && null !== $object->getDomainName()) {
                $data['domain_name'] = $object->getDomainName();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('orderId') && null !== $object->getOrderId()) {
                $data['order_id'] = $object->getOrderId();
            }
            if ($object->isInitialized('products') && null !== $object->getProducts()) {
                $data['products'] = $this->normalizer->normalize($object->getProducts(), 'json', $context);
            }
            if ($object->isInitialized('records') && null !== $object->getRecords()) {
                $data['records'] = $this->normalizer->normalize($object->getRecords(), 'json', $context);
            }
            if ($object->isInitialized('resellerId') && null !== $object->getResellerId()) {
                $data['reseller_id'] = $object->getResellerId();
            }
            if ($object->isInitialized('smtpPassword') && null !== $object->getSmtpPassword()) {
                $data['smtp_password'] = $object->getSmtpPassword();
            }
            if ($object->isInitialized('userEmail') && null !== $object->getUserEmail()) {
                $data['user_email'] = $object->getUserEmail();
            }
            if ($object->isInitialized('userPassword') && null !== $object->getUserPassword()) {
                $data['user_password'] = $object->getUserPassword();
            }
            if ($object->isInitialized('withOutgoingFilter') && null !== $object->getWithOutgoingFilter()) {
                $data['with_outgoing_filter'] = $object->getWithOutgoingFilter();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SeDomainDomain' => false];
        }
    }
}