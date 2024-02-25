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
    class ResellerUpdateResellerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ResellerUpdateResellerRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ResellerUpdateResellerRequest';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ResellerUpdateResellerRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAddress', 'json', $context));
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
                $object->setCompanyName($data['company_name']);
            }
            elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('company_size', $data) && $data['company_size'] !== null) {
                $object->setCompanySize($data['company_size']);
            }
            elseif (\array_key_exists('company_size', $data) && $data['company_size'] === null) {
                $object->setCompanySize(null);
            }
            if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProvider\\Api\\Model\\CustomerFax', 'json', $context));
            }
            elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
                $object->setFax(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('industry', $data) && $data['industry'] !== null) {
                $object->setIndustry($data['industry']);
            }
            elseif (\array_key_exists('industry', $data) && $data['industry'] === null) {
                $object->setIndustry(null);
            }
            if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
                $object->setInn($data['inn']);
            }
            elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
                $object->setInn(null);
            }
            if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
                $object->setKpp($data['kpp']);
            }
            elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
                $object->setKpp(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $object->setLocale($data['locale']);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProvider\\Api\\Model\\ContactName', 'json', $context));
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProvider\\Api\\Model\\ContactPhone', 'json', $context));
            }
            elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
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
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('companySize') && null !== $object->getCompanySize()) {
                $data['company_size'] = $object->getCompanySize();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('industry') && null !== $object->getIndustry()) {
                $data['industry'] = $object->getIndustry();
            }
            if ($object->isInitialized('inn') && null !== $object->getInn()) {
                $data['inn'] = $object->getInn();
            }
            if ($object->isInitialized('kpp') && null !== $object->getKpp()) {
                $data['kpp'] = $object->getKpp();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ResellerUpdateResellerRequest' => false];
        }
    }
} else {
    class ResellerUpdateResellerRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ResellerUpdateResellerRequest';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ResellerUpdateResellerRequest';
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
            $object = new \Rouda\OpenProvider\Api\Model\ResellerUpdateResellerRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('additional_data', $data) && $data['additional_data'] !== null) {
                $object->setAdditionalData($this->denormalizer->denormalize($data['additional_data'], 'Rouda\\OpenProvider\\Api\\Model\\ResellerResellerAdditionalData', 'json', $context));
            }
            elseif (\array_key_exists('additional_data', $data) && $data['additional_data'] === null) {
                $object->setAdditionalData(null);
            }
            if (\array_key_exists('address', $data) && $data['address'] !== null) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'Rouda\\OpenProvider\\Api\\Model\\ContactAddress', 'json', $context));
            }
            elseif (\array_key_exists('address', $data) && $data['address'] === null) {
                $object->setAddress(null);
            }
            if (\array_key_exists('comments', $data) && $data['comments'] !== null) {
                $object->setComments($data['comments']);
            }
            elseif (\array_key_exists('comments', $data) && $data['comments'] === null) {
                $object->setComments(null);
            }
            if (\array_key_exists('company_name', $data) && $data['company_name'] !== null) {
                $object->setCompanyName($data['company_name']);
            }
            elseif (\array_key_exists('company_name', $data) && $data['company_name'] === null) {
                $object->setCompanyName(null);
            }
            if (\array_key_exists('company_size', $data) && $data['company_size'] !== null) {
                $object->setCompanySize($data['company_size']);
            }
            elseif (\array_key_exists('company_size', $data) && $data['company_size'] === null) {
                $object->setCompanySize(null);
            }
            if (\array_key_exists('fax', $data) && $data['fax'] !== null) {
                $object->setFax($this->denormalizer->denormalize($data['fax'], 'Rouda\\OpenProvider\\Api\\Model\\CustomerFax', 'json', $context));
            }
            elseif (\array_key_exists('fax', $data) && $data['fax'] === null) {
                $object->setFax(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('industry', $data) && $data['industry'] !== null) {
                $object->setIndustry($data['industry']);
            }
            elseif (\array_key_exists('industry', $data) && $data['industry'] === null) {
                $object->setIndustry(null);
            }
            if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
                $object->setInn($data['inn']);
            }
            elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
                $object->setInn(null);
            }
            if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
                $object->setKpp($data['kpp']);
            }
            elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
                $object->setKpp(null);
            }
            if (\array_key_exists('locale', $data) && $data['locale'] !== null) {
                $object->setLocale($data['locale']);
            }
            elseif (\array_key_exists('locale', $data) && $data['locale'] === null) {
                $object->setLocale(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($this->denormalizer->denormalize($data['name'], 'Rouda\\OpenProvider\\Api\\Model\\ContactName', 'json', $context));
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
                $object->setPhone($this->denormalizer->denormalize($data['phone'], 'Rouda\\OpenProvider\\Api\\Model\\ContactPhone', 'json', $context));
            }
            elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
                $object->setPhone(null);
            }
            if (\array_key_exists('vat', $data) && $data['vat'] !== null) {
                $object->setVat($data['vat']);
            }
            elseif (\array_key_exists('vat', $data) && $data['vat'] === null) {
                $object->setVat(null);
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
            if ($object->isInitialized('companyName') && null !== $object->getCompanyName()) {
                $data['company_name'] = $object->getCompanyName();
            }
            if ($object->isInitialized('companySize') && null !== $object->getCompanySize()) {
                $data['company_size'] = $object->getCompanySize();
            }
            if ($object->isInitialized('fax') && null !== $object->getFax()) {
                $data['fax'] = $this->normalizer->normalize($object->getFax(), 'json', $context);
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('industry') && null !== $object->getIndustry()) {
                $data['industry'] = $object->getIndustry();
            }
            if ($object->isInitialized('inn') && null !== $object->getInn()) {
                $data['inn'] = $object->getInn();
            }
            if ($object->isInitialized('kpp') && null !== $object->getKpp()) {
                $data['kpp'] = $object->getKpp();
            }
            if ($object->isInitialized('locale') && null !== $object->getLocale()) {
                $data['locale'] = $object->getLocale();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            }
            if ($object->isInitialized('phone') && null !== $object->getPhone()) {
                $data['phone'] = $this->normalizer->normalize($object->getPhone(), 'json', $context);
            }
            if ($object->isInitialized('vat') && null !== $object->getVat()) {
                $data['vat'] = $object->getVat();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ResellerUpdateResellerRequest' => false];
        }
    }
}