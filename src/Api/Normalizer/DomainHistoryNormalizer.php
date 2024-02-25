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
    class DomainHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainHistory';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data) && $data['contents'] !== null) {
                $object->setContents($data['contents']);
            }
            elseif (\array_key_exists('contents', $data) && $data['contents'] === null) {
                $object->setContents(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($data['domain']);
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
                $object->setIp($data['ip']);
            }
            elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
                $object->setIp(null);
            }
            if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
                $object->setSubject($data['subject']);
            }
            elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
                $object->setSubject(null);
            }
            if (\array_key_exists('timestamp', $data) && $data['timestamp'] !== null) {
                $object->setTimestamp($data['timestamp']);
            }
            elseif (\array_key_exists('timestamp', $data) && $data['timestamp'] === null) {
                $object->setTimestamp(null);
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
            if ($object->isInitialized('contents') && null !== $object->getContents()) {
                $data['contents'] = $object->getContents();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainHistory' => false];
        }
    }
} else {
    class DomainHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainHistory';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data) && $data['contents'] !== null) {
                $object->setContents($data['contents']);
            }
            elseif (\array_key_exists('contents', $data) && $data['contents'] === null) {
                $object->setContents(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($data['domain']);
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
                $object->setIp($data['ip']);
            }
            elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
                $object->setIp(null);
            }
            if (\array_key_exists('subject', $data) && $data['subject'] !== null) {
                $object->setSubject($data['subject']);
            }
            elseif (\array_key_exists('subject', $data) && $data['subject'] === null) {
                $object->setSubject(null);
            }
            if (\array_key_exists('timestamp', $data) && $data['timestamp'] !== null) {
                $object->setTimestamp($data['timestamp']);
            }
            elseif (\array_key_exists('timestamp', $data) && $data['timestamp'] === null) {
                $object->setTimestamp(null);
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
            if ($object->isInitialized('contents') && null !== $object->getContents()) {
                $data['contents'] = $object->getContents();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('ip') && null !== $object->getIp()) {
                $data['ip'] = $object->getIp();
            }
            if ($object->isInitialized('subject') && null !== $object->getSubject()) {
                $data['subject'] = $object->getSubject();
            }
            if ($object->isInitialized('timestamp') && null !== $object->getTimestamp()) {
                $data['timestamp'] = $object->getTimestamp();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainHistory' => false];
        }
    }
}