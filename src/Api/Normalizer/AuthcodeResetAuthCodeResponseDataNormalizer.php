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
    class AuthcodeResetAuthCodeResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeResetAuthCodeResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeResetAuthCodeResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\AuthcodeResetAuthCodeResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('auth_info', $data) && $data['auth_info'] !== null) {
                $object->setAuthInfo($this->denormalizer->denormalize($data['auth_info'], 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeAuthInfo', 'json', $context));
            }
            elseif (\array_key_exists('auth_info', $data) && $data['auth_info'] === null) {
                $object->setAuthInfo(null);
            }
            if (\array_key_exists('domain_roid', $data) && $data['domain_roid'] !== null) {
                $object->setDomainRoid($data['domain_roid']);
            }
            elseif (\array_key_exists('domain_roid', $data) && $data['domain_roid'] === null) {
                $object->setDomainRoid(null);
            }
            if (\array_key_exists('epp_statuses', $data) && $data['epp_statuses'] !== null) {
                $values = [];
                foreach ($data['epp_statuses'] as $value) {
                    $values[] = $value;
                }
                $object->setEppStatuses($values);
            }
            elseif (\array_key_exists('epp_statuses', $data) && $data['epp_statuses'] === null) {
                $object->setEppStatuses(null);
            }
            if (\array_key_exists('rgp_statuses', $data) && $data['rgp_statuses'] !== null) {
                $object->setRgpStatuses($this->denormalizer->denormalize($data['rgp_statuses'], 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeRgpStatuses', 'json', $context));
            }
            elseif (\array_key_exists('rgp_statuses', $data) && $data['rgp_statuses'] === null) {
                $object->setRgpStatuses(null);
            }
            if (\array_key_exists('success', $data) && $data['success'] !== null) {
                $object->setSuccess($data['success']);
            }
            elseif (\array_key_exists('success', $data) && $data['success'] === null) {
                $object->setSuccess(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\AuthcodeResetAuthCodeResponseData' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeResetAuthCodeResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeResetAuthCodeResponseData';
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
            $object = new \Rouda\OpenProvider\Api\Model\AuthcodeResetAuthCodeResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('auth_code', $data) && $data['auth_code'] !== null) {
                $object->setAuthCode($data['auth_code']);
            }
            elseif (\array_key_exists('auth_code', $data) && $data['auth_code'] === null) {
                $object->setAuthCode(null);
            }
            if (\array_key_exists('auth_info', $data) && $data['auth_info'] !== null) {
                $object->setAuthInfo($this->denormalizer->denormalize($data['auth_info'], 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeAuthInfo', 'json', $context));
            }
            elseif (\array_key_exists('auth_info', $data) && $data['auth_info'] === null) {
                $object->setAuthInfo(null);
            }
            if (\array_key_exists('domain_roid', $data) && $data['domain_roid'] !== null) {
                $object->setDomainRoid($data['domain_roid']);
            }
            elseif (\array_key_exists('domain_roid', $data) && $data['domain_roid'] === null) {
                $object->setDomainRoid(null);
            }
            if (\array_key_exists('epp_statuses', $data) && $data['epp_statuses'] !== null) {
                $values = [];
                foreach ($data['epp_statuses'] as $value) {
                    $values[] = $value;
                }
                $object->setEppStatuses($values);
            }
            elseif (\array_key_exists('epp_statuses', $data) && $data['epp_statuses'] === null) {
                $object->setEppStatuses(null);
            }
            if (\array_key_exists('rgp_statuses', $data) && $data['rgp_statuses'] !== null) {
                $object->setRgpStatuses($this->denormalizer->denormalize($data['rgp_statuses'], 'Rouda\\OpenProvider\\Api\\Model\\AuthcodeRgpStatuses', 'json', $context));
            }
            elseif (\array_key_exists('rgp_statuses', $data) && $data['rgp_statuses'] === null) {
                $object->setRgpStatuses(null);
            }
            if (\array_key_exists('success', $data) && $data['success'] !== null) {
                $object->setSuccess($data['success']);
            }
            elseif (\array_key_exists('success', $data) && $data['success'] === null) {
                $object->setSuccess(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\AuthcodeResetAuthCodeResponseData' => false];
        }
    }
}