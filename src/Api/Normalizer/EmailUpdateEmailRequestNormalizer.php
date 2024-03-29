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
    class EmailUpdateEmailRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\EmailUpdateEmailRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\EmailUpdateEmailRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\EmailUpdateEmailRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\EmailFields', 'json', $context);
                }
                $object->setFields($values);
            }
            elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
                $object->setFields(null);
            }
            if (\array_key_exists('group', $data) && $data['group'] !== null) {
                $object->setGroup($data['group']);
            }
            elseif (\array_key_exists('group', $data) && $data['group'] === null) {
                $object->setGroup(null);
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
            if (\array_key_exists('is_default', $data) && $data['is_default'] !== null) {
                $object->setIsDefault($data['is_default']);
            }
            elseif (\array_key_exists('is_default', $data) && $data['is_default'] === null) {
                $object->setIsDefault(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $values_1 = [];
                foreach ($data['locale'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLocale($values_1);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
                $values_2 = [];
                foreach ($data['tags'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProvider\\Api\\Model\\EmailTags', 'json', $context);
                }
                $object->setTags($values_2);
            }
            elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
                $object->setTags(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values = [];
                foreach ($object->getFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['fields'] = $values;
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['group'] = $object->getGroup();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('isDefault') && null !== $object->getIsDefault()) {
                $data['is_default'] = $object->getIsDefault();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $values_1 = [];
                foreach ($object->getLocale() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['locale'] = $values_1;
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_2 = [];
                foreach ($object->getTags() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['tags'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\EmailUpdateEmailRequest' => false];
        }
    }
} else {
    class EmailUpdateEmailRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\EmailUpdateEmailRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\EmailUpdateEmailRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\EmailUpdateEmailRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('fields', $data) && $data['fields'] !== null) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProvider\\Api\\Model\\EmailFields', 'json', $context);
                }
                $object->setFields($values);
            }
            elseif (\array_key_exists('fields', $data) && $data['fields'] === null) {
                $object->setFields(null);
            }
            if (\array_key_exists('group', $data) && $data['group'] !== null) {
                $object->setGroup($data['group']);
            }
            elseif (\array_key_exists('group', $data) && $data['group'] === null) {
                $object->setGroup(null);
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
            if (\array_key_exists('is_default', $data) && $data['is_default'] !== null) {
                $object->setIsDefault($data['is_default']);
            }
            elseif (\array_key_exists('is_default', $data) && $data['is_default'] === null) {
                $object->setIsDefault(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $values_1 = [];
                foreach ($data['locale'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setLocale($values_1);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('tags', $data) && $data['tags'] !== null) {
                $values_2 = [];
                foreach ($data['tags'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, 'Rouda\\OpenProvider\\Api\\Model\\EmailTags', 'json', $context);
                }
                $object->setTags($values_2);
            }
            elseif (\array_key_exists('tags', $data) && $data['tags'] === null) {
                $object->setTags(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('fields') && null !== $object->getFields()) {
                $values = [];
                foreach ($object->getFields() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['fields'] = $values;
            }
            if ($object->isInitialized('group') && null !== $object->getGroup()) {
                $data['group'] = $object->getGroup();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isActive') && null !== $object->getIsActive()) {
                $data['is_active'] = $object->getIsActive();
            }
            if ($object->isInitialized('isDefault') && null !== $object->getIsDefault()) {
                $data['is_default'] = $object->getIsDefault();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $values_1 = [];
                foreach ($object->getLocale() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['locale'] = $values_1;
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_2 = [];
                foreach ($object->getTags() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['tags'] = $values_2;
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\EmailUpdateEmailRequest' => false];
        }
    }
}