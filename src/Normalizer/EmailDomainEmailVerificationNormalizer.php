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
    class EmailDomainEmailVerificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\EmailDomainEmailVerification';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\EmailDomainEmailVerification';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\EmailDomainEmailVerification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('handle', $data)) {
                $object->setHandle($data['handle']);
            }
            if (\array_key_exists('is_suspended', $data)) {
                $object->setIsSuspended($data['is_suspended']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('handle') && null !== $object->getHandle()) {
                $data['handle'] = $object->getHandle();
            }
            if ($object->isInitialized('isSuspended') && null !== $object->getIsSuspended()) {
                $data['is_suspended'] = $object->getIsSuspended();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\EmailDomainEmailVerification' => false];
        }
    }
} else {
    class EmailDomainEmailVerificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\EmailDomainEmailVerification';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\EmailDomainEmailVerification';
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
            $object = new \Rouda\OpenProviderAPI\Model\EmailDomainEmailVerification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('expiration_date', $data)) {
                $object->setExpirationDate($data['expiration_date']);
            }
            if (\array_key_exists('handle', $data)) {
                $object->setHandle($data['handle']);
            }
            if (\array_key_exists('is_suspended', $data)) {
                $object->setIsSuspended($data['is_suspended']);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('expirationDate') && null !== $object->getExpirationDate()) {
                $data['expiration_date'] = $object->getExpirationDate();
            }
            if ($object->isInitialized('handle') && null !== $object->getHandle()) {
                $data['handle'] = $object->getHandle();
            }
            if ($object->isInitialized('isSuspended') && null !== $object->getIsSuspended()) {
                $data['is_suspended'] = $object->getIsSuspended();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\EmailDomainEmailVerification' => false];
        }
    }
}