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
    class SettingsSignedContractsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SettingsSignedContracts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data)) {
                $object->setContents($data['contents']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('is_signed', $data)) {
                $object->setIsSigned($data['is_signed']);
            }
            if (\array_key_exists('modification_date', $data)) {
                $object->setModificationDate($data['modification_date']);
            }
            if (\array_key_exists('sign_on_date', $data)) {
                $object->setSignOnDate($data['sign_on_date']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('version_id', $data)) {
                $object->setVersionId($data['version_id']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('contents') && null !== $object->getContents()) {
                $data['contents'] = $object->getContents();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isSigned') && null !== $object->getIsSigned()) {
                $data['is_signed'] = $object->getIsSigned();
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['modification_date'] = $object->getModificationDate();
            }
            if ($object->isInitialized('signOnDate') && null !== $object->getSignOnDate()) {
                $data['sign_on_date'] = $object->getSignOnDate();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('versionId') && null !== $object->getVersionId()) {
                $data['version_id'] = $object->getVersionId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts' => false];
        }
    }
} else {
    class SettingsSignedContractsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts';
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
            $object = new \Rouda\OpenProviderAPI\Model\SettingsSignedContracts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data)) {
                $object->setContents($data['contents']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('is_signed', $data)) {
                $object->setIsSigned($data['is_signed']);
            }
            if (\array_key_exists('modification_date', $data)) {
                $object->setModificationDate($data['modification_date']);
            }
            if (\array_key_exists('sign_on_date', $data)) {
                $object->setSignOnDate($data['sign_on_date']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
            }
            if (\array_key_exists('version_id', $data)) {
                $object->setVersionId($data['version_id']);
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('isSigned') && null !== $object->getIsSigned()) {
                $data['is_signed'] = $object->getIsSigned();
            }
            if ($object->isInitialized('modificationDate') && null !== $object->getModificationDate()) {
                $data['modification_date'] = $object->getModificationDate();
            }
            if ($object->isInitialized('signOnDate') && null !== $object->getSignOnDate()) {
                $data['sign_on_date'] = $object->getSignOnDate();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('versionId') && null !== $object->getVersionId()) {
                $data['version_id'] = $object->getVersionId();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\SettingsSignedContracts' => false];
        }
    }
}