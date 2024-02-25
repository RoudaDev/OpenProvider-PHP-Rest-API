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
    class SeDomainDomainNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainDomain';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainDomain';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SeDomainDomain();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bundle', $data) && $data['bundle'] !== null) {
                $object->setBundle($data['bundle']);
            }
            elseif (\array_key_exists('bundle', $data) && $data['bundle'] === null) {
                $object->setBundle(null);
            }
            if (\array_key_exists('domain_name', $data) && $data['domain_name'] !== null) {
                $object->setDomainName($data['domain_name']);
            }
            elseif (\array_key_exists('domain_name', $data) && $data['domain_name'] === null) {
                $object->setDomainName(null);
            }
            if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
                $object->setExpirationDate($data['expiration_date']);
            }
            elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
                $object->setExpirationDate(null);
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
            if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
                $object->setOrderId($data['order_id']);
            }
            elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
                $object->setOrderId(null);
            }
            if (\array_key_exists('products', $data) && $data['products'] !== null) {
                $object->setProducts($this->denormalizer->denormalize($data['products'], 'Rouda\\OpenProvider\\Api\\Model\\SeDomainProducts', 'json', $context));
            }
            elseif (\array_key_exists('products', $data) && $data['products'] === null) {
                $object->setProducts(null);
            }
            if (\array_key_exists('records', $data) && $data['records'] !== null) {
                $object->setRecords($this->denormalizer->denormalize($data['records'], 'Rouda\\OpenProvider\\Api\\Model\\SeDomainRecords', 'json', $context));
            }
            elseif (\array_key_exists('records', $data) && $data['records'] === null) {
                $object->setRecords(null);
            }
            if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
                $object->setResellerId($data['reseller_id']);
            }
            elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
                $object->setResellerId(null);
            }
            if (\array_key_exists('smtp_password', $data) && $data['smtp_password'] !== null) {
                $object->setSmtpPassword($data['smtp_password']);
            }
            elseif (\array_key_exists('smtp_password', $data) && $data['smtp_password'] === null) {
                $object->setSmtpPassword(null);
            }
            if (\array_key_exists('user_email', $data) && $data['user_email'] !== null) {
                $object->setUserEmail($data['user_email']);
            }
            elseif (\array_key_exists('user_email', $data) && $data['user_email'] === null) {
                $object->setUserEmail(null);
            }
            if (\array_key_exists('user_password', $data) && $data['user_password'] !== null) {
                $object->setUserPassword($data['user_password']);
            }
            elseif (\array_key_exists('user_password', $data) && $data['user_password'] === null) {
                $object->setUserPassword(null);
            }
            if (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] !== null) {
                $object->setWithOutgoingFilter($data['with_outgoing_filter']);
            }
            elseif (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] === null) {
                $object->setWithOutgoingFilter(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\SeDomainDomain' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainDomain';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SeDomainDomain';
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
            $object = new \Rouda\OpenProvider\Api\Model\SeDomainDomain();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('bundle', $data) && $data['bundle'] !== null) {
                $object->setBundle($data['bundle']);
            }
            elseif (\array_key_exists('bundle', $data) && $data['bundle'] === null) {
                $object->setBundle(null);
            }
            if (\array_key_exists('domain_name', $data) && $data['domain_name'] !== null) {
                $object->setDomainName($data['domain_name']);
            }
            elseif (\array_key_exists('domain_name', $data) && $data['domain_name'] === null) {
                $object->setDomainName(null);
            }
            if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
                $object->setExpirationDate($data['expiration_date']);
            }
            elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
                $object->setExpirationDate(null);
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
            if (\array_key_exists('order_id', $data) && $data['order_id'] !== null) {
                $object->setOrderId($data['order_id']);
            }
            elseif (\array_key_exists('order_id', $data) && $data['order_id'] === null) {
                $object->setOrderId(null);
            }
            if (\array_key_exists('products', $data) && $data['products'] !== null) {
                $object->setProducts($this->denormalizer->denormalize($data['products'], 'Rouda\\OpenProvider\\Api\\Model\\SeDomainProducts', 'json', $context));
            }
            elseif (\array_key_exists('products', $data) && $data['products'] === null) {
                $object->setProducts(null);
            }
            if (\array_key_exists('records', $data) && $data['records'] !== null) {
                $object->setRecords($this->denormalizer->denormalize($data['records'], 'Rouda\\OpenProvider\\Api\\Model\\SeDomainRecords', 'json', $context));
            }
            elseif (\array_key_exists('records', $data) && $data['records'] === null) {
                $object->setRecords(null);
            }
            if (\array_key_exists('reseller_id', $data) && $data['reseller_id'] !== null) {
                $object->setResellerId($data['reseller_id']);
            }
            elseif (\array_key_exists('reseller_id', $data) && $data['reseller_id'] === null) {
                $object->setResellerId(null);
            }
            if (\array_key_exists('smtp_password', $data) && $data['smtp_password'] !== null) {
                $object->setSmtpPassword($data['smtp_password']);
            }
            elseif (\array_key_exists('smtp_password', $data) && $data['smtp_password'] === null) {
                $object->setSmtpPassword(null);
            }
            if (\array_key_exists('user_email', $data) && $data['user_email'] !== null) {
                $object->setUserEmail($data['user_email']);
            }
            elseif (\array_key_exists('user_email', $data) && $data['user_email'] === null) {
                $object->setUserEmail(null);
            }
            if (\array_key_exists('user_password', $data) && $data['user_password'] !== null) {
                $object->setUserPassword($data['user_password']);
            }
            elseif (\array_key_exists('user_password', $data) && $data['user_password'] === null) {
                $object->setUserPassword(null);
            }
            if (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] !== null) {
                $object->setWithOutgoingFilter($data['with_outgoing_filter']);
            }
            elseif (\array_key_exists('with_outgoing_filter', $data) && $data['with_outgoing_filter'] === null) {
                $object->setWithOutgoingFilter(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\SeDomainDomain' => false];
        }
    }
}