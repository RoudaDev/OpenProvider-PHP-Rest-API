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
    class CsrCreateCsrResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CsrCreateCsrResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CsrCreateCsrResponseData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\CsrCreateCsrResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('command', $data) && $data['command'] !== null) {
                $object->setCommand($data['command']);
            }
            elseif (\array_key_exists('command', $data) && $data['command'] === null) {
                $object->setCommand(null);
            }
            if (\array_key_exists('config', $data) && $data['config'] !== null) {
                $object->setConfig($data['config']);
            }
            elseif (\array_key_exists('config', $data) && $data['config'] === null) {
                $object->setConfig(null);
            }
            if (\array_key_exists('config_path', $data) && $data['config_path'] !== null) {
                $object->setConfigPath($data['config_path']);
            }
            elseif (\array_key_exists('config_path', $data) && $data['config_path'] === null) {
                $object->setConfigPath(null);
            }
            if (\array_key_exists('csr', $data) && $data['csr'] !== null) {
                $object->setCsr($data['csr']);
            }
            elseif (\array_key_exists('csr', $data) && $data['csr'] === null) {
                $object->setCsr(null);
            }
            if (\array_key_exists('key', $data) && $data['key'] !== null) {
                $object->setKey($data['key']);
            }
            elseif (\array_key_exists('key', $data) && $data['key'] === null) {
                $object->setKey(null);
            }
            if (\array_key_exists('key_path', $data) && $data['key_path'] !== null) {
                $object->setKeyPath($data['key_path']);
            }
            elseif (\array_key_exists('key_path', $data) && $data['key_path'] === null) {
                $object->setKeyPath(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $data['command'] = $object->getCommand();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['config'] = $object->getConfig();
            }
            if ($object->isInitialized('configPath') && null !== $object->getConfigPath()) {
                $data['config_path'] = $object->getConfigPath();
            }
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('key') && null !== $object->getKey()) {
                $data['key'] = $object->getKey();
            }
            if ($object->isInitialized('keyPath') && null !== $object->getKeyPath()) {
                $data['key_path'] = $object->getKeyPath();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CsrCreateCsrResponseData' => false];
        }
    }
} else {
    class CsrCreateCsrResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\CsrCreateCsrResponseData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\CsrCreateCsrResponseData';
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
            $object = new \Rouda\OpenProvider\Api\Model\CsrCreateCsrResponseData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('command', $data) && $data['command'] !== null) {
                $object->setCommand($data['command']);
            }
            elseif (\array_key_exists('command', $data) && $data['command'] === null) {
                $object->setCommand(null);
            }
            if (\array_key_exists('config', $data) && $data['config'] !== null) {
                $object->setConfig($data['config']);
            }
            elseif (\array_key_exists('config', $data) && $data['config'] === null) {
                $object->setConfig(null);
            }
            if (\array_key_exists('config_path', $data) && $data['config_path'] !== null) {
                $object->setConfigPath($data['config_path']);
            }
            elseif (\array_key_exists('config_path', $data) && $data['config_path'] === null) {
                $object->setConfigPath(null);
            }
            if (\array_key_exists('csr', $data) && $data['csr'] !== null) {
                $object->setCsr($data['csr']);
            }
            elseif (\array_key_exists('csr', $data) && $data['csr'] === null) {
                $object->setCsr(null);
            }
            if (\array_key_exists('key', $data) && $data['key'] !== null) {
                $object->setKey($data['key']);
            }
            elseif (\array_key_exists('key', $data) && $data['key'] === null) {
                $object->setKey(null);
            }
            if (\array_key_exists('key_path', $data) && $data['key_path'] !== null) {
                $object->setKeyPath($data['key_path']);
            }
            elseif (\array_key_exists('key_path', $data) && $data['key_path'] === null) {
                $object->setKeyPath(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('command') && null !== $object->getCommand()) {
                $data['command'] = $object->getCommand();
            }
            if ($object->isInitialized('config') && null !== $object->getConfig()) {
                $data['config'] = $object->getConfig();
            }
            if ($object->isInitialized('configPath') && null !== $object->getConfigPath()) {
                $data['config_path'] = $object->getConfigPath();
            }
            if ($object->isInitialized('csr') && null !== $object->getCsr()) {
                $data['csr'] = $object->getCsr();
            }
            if ($object->isInitialized('key') && null !== $object->getKey()) {
                $data['key'] = $object->getKey();
            }
            if ($object->isInitialized('keyPath') && null !== $object->getKeyPath()) {
                $data['key_path'] = $object->getKeyPath();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\CsrCreateCsrResponseData' => false];
        }
    }
}