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
    class CustomerUpdateCustomerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CustomerUpdateCustomerRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CustomerUpdateCustomerRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData', 'json', $context));
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProviderAPI\\Model\\ContactAddress', 'json', $context));
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('extension_additional_data', $data)) {
                $values = [];
                foreach ($data['extension_additional_data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\CustomerExtensionAdditionalData', 'json', $context);
                }
                $object->setExtensionAdditionalData($values);
            }
            if (\array_key_exists('fax', $data)) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProviderAPI\\Model\\CustomerFax', 'json', $context));
            }
            if (\array_key_exists('handle', $data)) {
                $object->setHandle($data['handle']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProviderAPI\\Model\\ContactPhone', 'json', $context));
            }
            if (\array_key_exists('tags', $data)) {
                $values_1 = [];
                foreach ($data['tags'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\CustomerTags', 'json', $context);
                }
                $object->setTags($values_1);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('extensionAdditionalData') && null !== $object->getExtensionAdditionalData()) {
                $values = [];
                foreach ($object->getExtensionAdditionalData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['extension_additional_data'] = $values;
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
            }
            if ($object->isInitialized('handle') && null !== $object->getHandle()) {
                $data['handle'] = $object->getHandle();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_1 = [];
                foreach ($object->getTags() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['tags'] = $values_1;
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\CustomerUpdateCustomerRequest' => false];
        }
    }
} else {
    class CustomerUpdateCustomerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\CustomerUpdateCustomerRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\CustomerUpdateCustomerRequest';
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
            $object = new \Rouda\OpenProviderAPI\Model\CustomerUpdateCustomerRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data)) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProviderAPI\\Model\\CustomerCustomerAdditionalData', 'json', $context));
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProviderAPI\\Model\\ContactAddress', 'json', $context));
            }
            if (\array_key_exists('comments', $data)) {
                $object->setComments($data['comments']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
            }
            if (\array_key_exists('extension_additional_data', $data)) {
                $values = [];
                foreach ($data['extension_additional_data'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'Rouda\\OpenProviderAPI\\Model\\CustomerExtensionAdditionalData', 'json', $context);
                }
                $object->setExtensionAdditionalData($values);
            }
            if (\array_key_exists('fax', $data)) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProviderAPI\\Model\\CustomerFax', 'json', $context));
            }
            if (\array_key_exists('handle', $data)) {
                $object->setHandle($data['handle']);
            }
            if (\array_key_exists('locale', $data)) {
                $object->setLocale($data['locale']);
            }
            if (\array_key_exists('phone', $data)) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProviderAPI\\Model\\ContactPhone', 'json', $context));
            }
            if (\array_key_exists('tags', $data)) {
                $values_1 = [];
                foreach ($data['tags'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, 'Rouda\\OpenProviderAPI\\Model\\CustomerTags', 'json', $context);
                }
                $object->setTags($values_1);
            }
            if (\array_key_exists('vat', $data)) {
                $object->setVat($data['vat']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('additionalData') && null !== $object->getAdditionalData()) {
                $data['additional_data'] = $this->normalizer->normalize($object->getAdditionalData(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('comments') && null !== $object->getComments()) {
                $data['comments'] = $object->getComments();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('extensionAdditionalData') && null !== $object->getExtensionAdditionalData()) {
                $values = [];
                foreach ($object->getExtensionAdditionalData() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['extension_additional_data'] = $values;
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
            }
            if ($object->isInitialized('handle') && null !== $object->getHandle()) {
                $data['handle'] = $object->getHandle();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values_1 = [];
                foreach ($object->getTags() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['tags'] = $values_1;
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\CustomerUpdateCustomerRequest' => false];
        }
    }
}