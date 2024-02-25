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
    class DomainListDomainsRequestOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainListDomainsRequestOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainListDomainsRequestOrderBy';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainListDomainsRequestOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_date', $data) && $data['active_date'] !== null) {
                $object->setActiveDate($data['active_date']);
            }
            elseif (\array_key_exists('active_date', $data) && $data['active_date'] === null) {
                $object->setActiveDate(null);
            }
            if (\array_key_exists('domain_extension', $data) && $data['domain_extension'] !== null) {
                $object->setDomainExtension($data['domain_extension']);
            }
            elseif (\array_key_exists('domain_extension', $data) && $data['domain_extension'] === null) {
                $object->setDomainExtension(null);
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
            if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
                $object->setOrderDate($data['order_date']);
            }
            elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
                $object->setOrderDate(null);
            }
            if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
                $object->setRenewalDate($data['renewal_date']);
            }
            elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
                $object->setRenewalDate(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('transfer_date', $data) && $data['transfer_date'] !== null) {
                $object->setTransferDate($data['transfer_date']);
            }
            elseif (\array_key_exists('transfer_date', $data) && $data['transfer_date'] === null) {
                $object->setTransferDate(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('activeDate') && null !== $object->getActiveDate()) {
                $data['active_date'] = $object->getActiveDate();
            }
            if ($object->isInitialized('domainExtension') && null !== $object->getDomainExtension()) {
                $data['domain_extension'] = $object->getDomainExtension();
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
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
                $data['renewal_date'] = $object->getRenewalDate();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('transferDate') && null !== $object->getTransferDate()) {
                $data['transfer_date'] = $object->getTransferDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainListDomainsRequestOrderBy' => false];
        }
    }
} else {
    class DomainListDomainsRequestOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainListDomainsRequestOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainListDomainsRequestOrderBy';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainListDomainsRequestOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('active_date', $data) && $data['active_date'] !== null) {
                $object->setActiveDate($data['active_date']);
            }
            elseif (\array_key_exists('active_date', $data) && $data['active_date'] === null) {
                $object->setActiveDate(null);
            }
            if (\array_key_exists('domain_extension', $data) && $data['domain_extension'] !== null) {
                $object->setDomainExtension($data['domain_extension']);
            }
            elseif (\array_key_exists('domain_extension', $data) && $data['domain_extension'] === null) {
                $object->setDomainExtension(null);
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
            if (\array_key_exists('order_date', $data) && $data['order_date'] !== null) {
                $object->setOrderDate($data['order_date']);
            }
            elseif (\array_key_exists('order_date', $data) && $data['order_date'] === null) {
                $object->setOrderDate(null);
            }
            if (\array_key_exists('renewal_date', $data) && $data['renewal_date'] !== null) {
                $object->setRenewalDate($data['renewal_date']);
            }
            elseif (\array_key_exists('renewal_date', $data) && $data['renewal_date'] === null) {
                $object->setRenewalDate(null);
            }
            if (\array_key_exists('status', $data) && $data['status'] !== null) {
                $object->setStatus($data['status']);
            }
            elseif (\array_key_exists('status', $data) && $data['status'] === null) {
                $object->setStatus(null);
            }
            if (\array_key_exists('transfer_date', $data) && $data['transfer_date'] !== null) {
                $object->setTransferDate($data['transfer_date']);
            }
            elseif (\array_key_exists('transfer_date', $data) && $data['transfer_date'] === null) {
                $object->setTransferDate(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('activeDate') && null !== $object->getActiveDate()) {
                $data['active_date'] = $object->getActiveDate();
            }
            if ($object->isInitialized('domainExtension') && null !== $object->getDomainExtension()) {
                $data['domain_extension'] = $object->getDomainExtension();
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
            if ($object->isInitialized('orderDate') && null !== $object->getOrderDate()) {
                $data['order_date'] = $object->getOrderDate();
            }
            if ($object->isInitialized('renewalDate') && null !== $object->getRenewalDate()) {
                $data['renewal_date'] = $object->getRenewalDate();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('transferDate') && null !== $object->getTransferDate()) {
                $data['transfer_date'] = $object->getTransferDate();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainListDomainsRequestOrderBy' => false];
        }
    }
}