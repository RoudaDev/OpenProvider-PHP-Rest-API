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
    class AuthcodeResetAuthCodeResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\AuthcodeResetAuthCodeResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\AuthcodeResetAuthCodeResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\AuthcodeResetAuthCodeResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auth_code', $data)) {
                $object->setAuthCode($data['auth_code']);
            }
            if (\array_key_exists('auth_info', $data)) {
                $object->setAuthInfo($this->denormalizer->denormalize($data['auth_info'], 'Rouda\\OpenProviderAPI\\Model\\AuthcodeAuthInfo', 'json', $context));
            }
            if (\array_key_exists('domain_roid', $data)) {
                $object->setDomainRoid($data['domain_roid']);
            }
            if (\array_key_exists('epp_statuses', $data)) {
                $values = [];
                foreach ($data['epp_statuses'] as $value) {
                    $values[] = $value;
                }
                $object->setEppStatuses($values);
            }
            if (\array_key_exists('rgp_statuses', $data)) {
                $object->setRgpStatuses($this->denormalizer->denormalize($data['rgp_statuses'], 'Rouda\\OpenProviderAPI\\Model\\AuthcodeRgpStatuses', 'json', $context));
            }
            if (\array_key_exists('success', $data)) {
                $object->setSuccess($data['success']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('authInfo') && null !== $object->getAuthInfo()) {
                $data['auth_info'] = $this->normalizer->normalize($object->getAuthInfo(), 'json', $context);
            }
            if ($object->isInitialized('domainRoid') && null !== $object->getDomainRoid()) {
                $data['domain_roid'] = $object->getDomainRoid();
            }
            if ($object->isInitialized('eppStatuses') && null !== $object->getEppStatuses()) {
                $values = [];
                foreach ($object->getEppStatuses() as $value) {
                    $values[] = $value;
                }
                $data['epp_statuses'] = $values;
            }
            if ($object->isInitialized('rgpStatuses') && null !== $object->getRgpStatuses()) {
                $data['rgp_statuses'] = $this->normalizer->normalize($object->getRgpStatuses(), 'json', $context);
            }
            if ($object->isInitialized('success') && null !== $object->getSuccess()) {
                $data['success'] = $object->getSuccess();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\AuthcodeResetAuthCodeResponseData' => false];
        }
    }
} else {
    class AuthcodeResetAuthCodeResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\AuthcodeResetAuthCodeResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\AuthcodeResetAuthCodeResponseData';
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
            $object = new \Rouda\OpenProviderAPI\Model\AuthcodeResetAuthCodeResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auth_code', $data)) {
                $object->setAuthCode($data['auth_code']);
            }
            if (\array_key_exists('auth_info', $data)) {
                $object->setAuthInfo($this->denormalizer->denormalize($data['auth_info'], 'Rouda\\OpenProviderAPI\\Model\\AuthcodeAuthInfo', 'json', $context));
            }
            if (\array_key_exists('domain_roid', $data)) {
                $object->setDomainRoid($data['domain_roid']);
            }
            if (\array_key_exists('epp_statuses', $data)) {
                $values = [];
                foreach ($data['epp_statuses'] as $value) {
                    $values[] = $value;
                }
                $object->setEppStatuses($values);
            }
            if (\array_key_exists('rgp_statuses', $data)) {
                $object->setRgpStatuses($this->denormalizer->denormalize($data['rgp_statuses'], 'Rouda\\OpenProviderAPI\\Model\\AuthcodeRgpStatuses', 'json', $context));
            }
            if (\array_key_exists('success', $data)) {
                $object->setSuccess($data['success']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('authCode') && null !== $object->getAuthCode()) {
                $data['auth_code'] = $object->getAuthCode();
            }
            if ($object->isInitialized('authInfo') && null !== $object->getAuthInfo()) {
                $data['auth_info'] = $this->normalizer->normalize($object->getAuthInfo(), 'json', $context);
            }
            if ($object->isInitialized('domainRoid') && null !== $object->getDomainRoid()) {
                $data['domain_roid'] = $object->getDomainRoid();
            }
            if ($object->isInitialized('eppStatuses') && null !== $object->getEppStatuses()) {
                $values = [];
                foreach ($object->getEppStatuses() as $value) {
                    $values[] = $value;
                }
                $data['epp_statuses'] = $values;
            }
            if ($object->isInitialized('rgpStatuses') && null !== $object->getRgpStatuses()) {
                $data['rgp_statuses'] = $this->normalizer->normalize($object->getRgpStatuses(), 'json', $context);
            }
            if ($object->isInitialized('success') && null !== $object->getSuccess()) {
                $data['success'] = $object->getSuccess();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\AuthcodeResetAuthCodeResponseData' => false];
        }
    }
}