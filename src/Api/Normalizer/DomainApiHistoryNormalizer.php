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
    class DomainApiHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainApiHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainApiHistory';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\DomainApiHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cmd', $data) && $data['cmd'] !== null) {
                $object->setCmd($data['cmd']);
            }
            elseif (\array_key_exists('cmd', $data) && $data['cmd'] === null) {
                $object->setCmd(null);
            }
            if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
                $object->setCreatedAt($data['created_at']);
            }
            elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('domain_id', $data) && $data['domain_id'] !== null) {
                $object->setDomainId($data['domain_id']);
            }
            elseif (\array_key_exists('domain_id', $data) && $data['domain_id'] === null) {
                $object->setDomainId(null);
            }
            if (\array_key_exists('in', $data) && $data['in'] !== null) {
                $object->setIn($data['in']);
            }
            elseif (\array_key_exists('in', $data) && $data['in'] === null) {
                $object->setIn(null);
            }
            if (\array_key_exists('out', $data) && $data['out'] !== null) {
                $object->setOut($data['out']);
            }
            elseif (\array_key_exists('out', $data) && $data['out'] === null) {
                $object->setOut(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $data['cmd'] = $object->getCmd();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('domainId') && null !== $object->getDomainId()) {
                $data['domain_id'] = $object->getDomainId();
            }
            if ($object->isInitialized('in') && null !== $object->getIn()) {
                $data['in'] = $object->getIn();
            }
            if ($object->isInitialized('out') && null !== $object->getOut()) {
                $data['out'] = $object->getOut();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainApiHistory' => false];
        }
    }
} else {
    class DomainApiHistoryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\DomainApiHistory';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\DomainApiHistory';
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
            $object = new \Rouda\OpenProvider\Api\Model\DomainApiHistory();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('cmd', $data) && $data['cmd'] !== null) {
                $object->setCmd($data['cmd']);
            }
            elseif (\array_key_exists('cmd', $data) && $data['cmd'] === null) {
                $object->setCmd(null);
            }
            if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
                $object->setCreatedAt($data['created_at']);
            }
            elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
                $object->setCreatedAt(null);
            }
            if (\array_key_exists('domain_id', $data) && $data['domain_id'] !== null) {
                $object->setDomainId($data['domain_id']);
            }
            elseif (\array_key_exists('domain_id', $data) && $data['domain_id'] === null) {
                $object->setDomainId(null);
            }
            if (\array_key_exists('in', $data) && $data['in'] !== null) {
                $object->setIn($data['in']);
            }
            elseif (\array_key_exists('in', $data) && $data['in'] === null) {
                $object->setIn(null);
            }
            if (\array_key_exists('out', $data) && $data['out'] !== null) {
                $object->setOut($data['out']);
            }
            elseif (\array_key_exists('out', $data) && $data['out'] === null) {
                $object->setOut(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('cmd') && null !== $object->getCmd()) {
                $data['cmd'] = $object->getCmd();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('domainId') && null !== $object->getDomainId()) {
                $data['domain_id'] = $object->getDomainId();
            }
            if ($object->isInitialized('in') && null !== $object->getIn()) {
                $data['in'] = $object->getIn();
            }
            if ($object->isInitialized('out') && null !== $object->getOut()) {
                $data['out'] = $object->getOut();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\DomainApiHistory' => false];
        }
    }
}