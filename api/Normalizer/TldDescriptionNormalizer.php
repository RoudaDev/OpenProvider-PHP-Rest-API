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
    class TldDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TldDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TldDescription';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\TldDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('text', $data) && $data['text'] !== null) {
                $object->setText($data['text']);
            }
            elseif (\array_key_exists('text', $data) && $data['text'] === null) {
                $object->setText(null);
            }
            if (\array_key_exists('url', $data) && $data['url'] !== null) {
                $object->setUrl($data['url']);
            }
            elseif (\array_key_exists('url', $data) && $data['url'] === null) {
                $object->setUrl(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\TldDescription' => false];
        }
    }
} else {
    class TldDescriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\TldDescription';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\TldDescription';
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
            $object = new \Rouda\OpenProvider\Api\Model\TldDescription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('text', $data) && $data['text'] !== null) {
                $object->setText($data['text']);
            }
            elseif (\array_key_exists('text', $data) && $data['text'] === null) {
                $object->setText(null);
            }
            if (\array_key_exists('url', $data) && $data['url'] !== null) {
                $object->setUrl($data['url']);
            }
            elseif (\array_key_exists('url', $data) && $data['url'] === null) {
                $object->setUrl(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('text') && null !== $object->getText()) {
                $data['text'] = $object->getText();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\TldDescription' => false];
        }
    }
}