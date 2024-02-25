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
    class ProductListProductsRequestOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ProductListProductsRequestOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ProductListProductsRequestOrderBy';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\ProductListProductsRequestOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand_name', $data) && $data['brand_name'] !== null) {
                $object->setBrandName($data['brand_name']);
            }
            elseif (\array_key_exists('brand_name', $data) && $data['brand_name'] === null) {
                $object->setBrandName(null);
            }
            if (\array_key_exists('brand_seqno', $data) && $data['brand_seqno'] !== null) {
                $object->setBrandSeqno($data['brand_seqno']);
            }
            elseif (\array_key_exists('brand_seqno', $data) && $data['brand_seqno'] === null) {
                $object->setBrandSeqno(null);
            }
            if (\array_key_exists('category', $data) && $data['category'] !== null) {
                $object->setCategory($data['category']);
            }
            elseif (\array_key_exists('category', $data) && $data['category'] === null) {
                $object->setCategory(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('product_seqno', $data) && $data['product_seqno'] !== null) {
                $object->setProductSeqno($data['product_seqno']);
            }
            elseif (\array_key_exists('product_seqno', $data) && $data['product_seqno'] === null) {
                $object->setProductSeqno(null);
            }
            if (\array_key_exists('sub_category', $data) && $data['sub_category'] !== null) {
                $object->setSubCategory($data['sub_category']);
            }
            elseif (\array_key_exists('sub_category', $data) && $data['sub_category'] === null) {
                $object->setSubCategory(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('brandName') && null !== $object->getBrandName()) {
                $data['brand_name'] = $object->getBrandName();
            }
            if ($object->isInitialized('brandSeqno') && null !== $object->getBrandSeqno()) {
                $data['brand_seqno'] = $object->getBrandSeqno();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('productSeqno') && null !== $object->getProductSeqno()) {
                $data['product_seqno'] = $object->getProductSeqno();
            }
            if ($object->isInitialized('subCategory') && null !== $object->getSubCategory()) {
                $data['sub_category'] = $object->getSubCategory();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ProductListProductsRequestOrderBy' => false];
        }
    }
} else {
    class ProductListProductsRequestOrderByNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\ProductListProductsRequestOrderBy';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\ProductListProductsRequestOrderBy';
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
            $object = new \Rouda\OpenProvider\Api\Model\ProductListProductsRequestOrderBy();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand_name', $data) && $data['brand_name'] !== null) {
                $object->setBrandName($data['brand_name']);
            }
            elseif (\array_key_exists('brand_name', $data) && $data['brand_name'] === null) {
                $object->setBrandName(null);
            }
            if (\array_key_exists('brand_seqno', $data) && $data['brand_seqno'] !== null) {
                $object->setBrandSeqno($data['brand_seqno']);
            }
            elseif (\array_key_exists('brand_seqno', $data) && $data['brand_seqno'] === null) {
                $object->setBrandSeqno(null);
            }
            if (\array_key_exists('category', $data) && $data['category'] !== null) {
                $object->setCategory($data['category']);
            }
            elseif (\array_key_exists('category', $data) && $data['category'] === null) {
                $object->setCategory(null);
            }
            if (\array_key_exists('name', $data) && $data['name'] !== null) {
                $object->setName($data['name']);
            }
            elseif (\array_key_exists('name', $data) && $data['name'] === null) {
                $object->setName(null);
            }
            if (\array_key_exists('product_seqno', $data) && $data['product_seqno'] !== null) {
                $object->setProductSeqno($data['product_seqno']);
            }
            elseif (\array_key_exists('product_seqno', $data) && $data['product_seqno'] === null) {
                $object->setProductSeqno(null);
            }
            if (\array_key_exists('sub_category', $data) && $data['sub_category'] !== null) {
                $object->setSubCategory($data['sub_category']);
            }
            elseif (\array_key_exists('sub_category', $data) && $data['sub_category'] === null) {
                $object->setSubCategory(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('brandName') && null !== $object->getBrandName()) {
                $data['brand_name'] = $object->getBrandName();
            }
            if ($object->isInitialized('brandSeqno') && null !== $object->getBrandSeqno()) {
                $data['brand_seqno'] = $object->getBrandSeqno();
            }
            if ($object->isInitialized('category') && null !== $object->getCategory()) {
                $data['category'] = $object->getCategory();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('productSeqno') && null !== $object->getProductSeqno()) {
                $data['product_seqno'] = $object->getProductSeqno();
            }
            if ($object->isInitialized('subCategory') && null !== $object->getSubCategory()) {
                $data['sub_category'] = $object->getSubCategory();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\ProductListProductsRequestOrderBy' => false];
        }
    }
}