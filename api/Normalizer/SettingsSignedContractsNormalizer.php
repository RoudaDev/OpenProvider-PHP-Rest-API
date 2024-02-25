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
    class SettingsSignedContractsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsSignedContracts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsSignedContracts';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SettingsSignedContracts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data) && $data['contents'] !== null) {
                $object->setContents($data['contents']);
            }
            elseif (\array_key_exists('contents', $data) && $data['contents'] === null) {
                $object->setContents(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_signed', $data) && $data['is_signed'] !== null) {
                $object->setIsSigned($data['is_signed']);
            }
            elseif (\array_key_exists('is_signed', $data) && $data['is_signed'] === null) {
                $object->setIsSigned(null);
            }
            if (\array_key_exists('modification_date', $data) && $data['modification_date'] !== null) {
                $object->setModificationDate($data['modification_date']);
            }
            elseif (\array_key_exists('modification_date', $data) && $data['modification_date'] === null) {
                $object->setModificationDate(null);
            }
            if (\array_key_exists('sign_on_date', $data) && $data['sign_on_date'] !== null) {
                $object->setSignOnDate($data['sign_on_date']);
            }
            elseif (\array_key_exists('sign_on_date', $data) && $data['sign_on_date'] === null) {
                $object->setSignOnDate(null);
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('version_id', $data) && $data['version_id'] !== null) {
                $object->setVersionId($data['version_id']);
            }
            elseif (\array_key_exists('version_id', $data) && $data['version_id'] === null) {
                $object->setVersionId(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsSignedContracts' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsSignedContracts';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsSignedContracts';
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
            $object = new \Rouda\OpenProvider\Api\Model\SettingsSignedContracts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contents', $data) && $data['contents'] !== null) {
                $object->setContents($data['contents']);
            }
            elseif (\array_key_exists('contents', $data) && $data['contents'] === null) {
                $object->setContents(null);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
            }
            elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('is_signed', $data) && $data['is_signed'] !== null) {
                $object->setIsSigned($data['is_signed']);
            }
            elseif (\array_key_exists('is_signed', $data) && $data['is_signed'] === null) {
                $object->setIsSigned(null);
            }
            if (\array_key_exists('modification_date', $data) && $data['modification_date'] !== null) {
                $object->setModificationDate($data['modification_date']);
            }
            elseif (\array_key_exists('modification_date', $data) && $data['modification_date'] === null) {
                $object->setModificationDate(null);
            }
            if (\array_key_exists('sign_on_date', $data) && $data['sign_on_date'] !== null) {
                $object->setSignOnDate($data['sign_on_date']);
            }
            elseif (\array_key_exists('sign_on_date', $data) && $data['sign_on_date'] === null) {
                $object->setSignOnDate(null);
            }
            if (\array_key_exists('title', $data) && $data['title'] !== null) {
                $object->setTitle($data['title']);
            }
            elseif (\array_key_exists('title', $data) && $data['title'] === null) {
                $object->setTitle(null);
            }
            if (\array_key_exists('type', $data) && $data['type'] !== null) {
                $object->setType($data['type']);
            }
            elseif (\array_key_exists('type', $data) && $data['type'] === null) {
                $object->setType(null);
            }
            if (\array_key_exists('version_id', $data) && $data['version_id'] !== null) {
                $object->setVersionId($data['version_id']);
            }
            elseif (\array_key_exists('version_id', $data) && $data['version_id'] === null) {
                $object->setVersionId(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsSignedContracts' => false];
        }
    }
}