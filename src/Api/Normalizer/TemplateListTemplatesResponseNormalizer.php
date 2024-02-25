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
    class TemplateListTemplatesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponse';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\TemplateListTemplatesResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data) && $data['code'] !== null) {
                $object->setCode($data['code']);
            }
            elseif (\array_key_exists('code', $data) && $data['code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $object->setData($this->denormalizer->denormalize($data['data'], 'Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponseData', 'json', $context));
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('desc', $data) && $data['desc'] !== null) {
                $object->setDesc($data['desc']);
            }
            elseif (\array_key_exists('desc', $data) && $data['desc'] === null) {
                $object->setDesc(null);
            }
            if (\array_key_exists('maintenance', $data) && $data['maintenance'] !== null) {
                $object->setMaintenance($data['maintenance']);
            }
            elseif (\array_key_exists('maintenance', $data) && $data['maintenance'] === null) {
                $object->setMaintenance(null);
            }
            if (\array_key_exists('warnings', $data) && $data['warnings'] !== null) {
                $values = [];
                foreach ($data['warnings'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\ErrorWarning', 'json', $context);
                }
                $object->setWarnings($values);
            }
            elseif (\array_key_exists('warnings', $data) && $data['warnings'] === null) {
                $object->setWarnings(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            if ($object->isInitialized('maintenance') && null !== $object->getMaintenance()) {
                $data['maintenance'] = $object->getMaintenance();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values = [];
                foreach ($object->getWarnings() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['warnings'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponse' => false];
        }
    }
} else {
    class TemplateListTemplatesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponse';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponse';
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
            $object = new \Rouda\OpenProvider\Api\Model\TemplateListTemplatesResponse();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('code', $data) && $data['code'] !== null) {
                $object->setCode($data['code']);
            }
            elseif (\array_key_exists('code', $data) && $data['code'] === null) {
                $object->setCode(null);
            }
            if (\array_key_exists('data', $data) && $data['data'] !== null) {
                $object->setData($this->denormalizer->denormalize($data['data'], 'Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponseData', 'json', $context));
            }
            elseif (\array_key_exists('data', $data) && $data['data'] === null) {
                $object->setData(null);
            }
            if (\array_key_exists('desc', $data) && $data['desc'] !== null) {
                $object->setDesc($data['desc']);
            }
            elseif (\array_key_exists('desc', $data) && $data['desc'] === null) {
                $object->setDesc(null);
            }
            if (\array_key_exists('maintenance', $data) && $data['maintenance'] !== null) {
                $object->setMaintenance($data['maintenance']);
            }
            elseif (\array_key_exists('maintenance', $data) && $data['maintenance'] === null) {
                $object->setMaintenance(null);
            }
            if (\array_key_exists('warnings', $data) && $data['warnings'] !== null) {
                $values = [];
                foreach ($data['warnings'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\ErrorWarning', 'json', $context);
                }
                $object->setWarnings($values);
            }
            elseif (\array_key_exists('warnings', $data) && $data['warnings'] === null) {
                $object->setWarnings(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('data') && null !== $object->getData()) {
                $data['data'] = $this->normalizer->normalize($object->getData(), 'json', $context);
            }
            if ($object->isInitialized('desc') && null !== $object->getDesc()) {
                $data['desc'] = $object->getDesc();
            }
            if ($object->isInitialized('maintenance') && null !== $object->getMaintenance()) {
                $data['maintenance'] = $object->getMaintenance();
            }
            if ($object->isInitialized('warnings') && null !== $object->getWarnings()) {
                $values = [];
                foreach ($object->getWarnings() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['warnings'] = $values;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\TemplateListTemplatesResponse' => false];
        }
    }
}