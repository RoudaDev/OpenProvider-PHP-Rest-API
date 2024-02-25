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
    class OtptokenCreateOtpTokenResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\OtptokenCreateOtpTokenResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\OtptokenCreateOtpTokenResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\OtptokenCreateOtpTokenResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('expire_at', $data) && $data['expire_at'] !== null) {
                $object->setExpireAt($data['expire_at']);
            }
            elseif (\array_key_exists('expire_at', $data) && $data['expire_at'] === null) {
                $object->setExpireAt(null);
            }
            if (\array_key_exists('token', $data) && $data['token'] !== null) {
                $object->setToken($data['token']);
            }
            elseif (\array_key_exists('token', $data) && $data['token'] === null) {
                $object->setToken(null);
            }
            if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
                $object->setUri($data['uri']);
            }
            elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
                $object->setUri(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('expireAt') && null !== $object->getExpireAt()) {
                $data['expire_at'] = $object->getExpireAt();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('uri') && null !== $object->getUri()) {
                $data['uri'] = $object->getUri();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\OtptokenCreateOtpTokenResponseData' => false];
        }
    }
} else {
    class OtptokenCreateOtpTokenResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\OtptokenCreateOtpTokenResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\OtptokenCreateOtpTokenResponseData';
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
            $object = new \Rouda\OpenProvider\Api\Model\OtptokenCreateOtpTokenResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('expire_at', $data) && $data['expire_at'] !== null) {
                $object->setExpireAt($data['expire_at']);
            }
            elseif (\array_key_exists('expire_at', $data) && $data['expire_at'] === null) {
                $object->setExpireAt(null);
            }
            if (\array_key_exists('token', $data) && $data['token'] !== null) {
                $object->setToken($data['token']);
            }
            elseif (\array_key_exists('token', $data) && $data['token'] === null) {
                $object->setToken(null);
            }
            if (\array_key_exists('uri', $data) && $data['uri'] !== null) {
                $object->setUri($data['uri']);
            }
            elseif (\array_key_exists('uri', $data) && $data['uri'] === null) {
                $object->setUri(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('expireAt') && null !== $object->getExpireAt()) {
                $data['expire_at'] = $object->getExpireAt();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('uri') && null !== $object->getUri()) {
                $data['uri'] = $object->getUri();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\OtptokenCreateOtpTokenResponseData' => false];
        }
    }
}