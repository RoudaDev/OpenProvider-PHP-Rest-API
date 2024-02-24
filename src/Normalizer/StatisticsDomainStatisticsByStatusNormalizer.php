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
    class StatisticsDomainStatisticsByStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\StatisticsDomainStatisticsByStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\StatisticsDomainStatisticsByStatus';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\StatisticsDomainStatisticsByStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ACT', $data)) {
                $object->setACT($data['ACT']);
            }
            if (\array_key_exists('FAI', $data)) {
                $object->setFAI($data['FAI']);
            }
            if (\array_key_exists('NSR', $data)) {
                $object->setNSR($data['NSR']);
            }
            if (\array_key_exists('PEN', $data)) {
                $object->setPEN($data['PEN']);
            }
            if (\array_key_exists('REJ', $data)) {
                $object->setREJ($data['REJ']);
            }
            if (\array_key_exists('REQ', $data)) {
                $object->setREQ($data['REQ']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('aCT') && null !== $object->getACT()) {
                $data['ACT'] = $object->getACT();
            }
            if ($object->isInitialized('fAI') && null !== $object->getFAI()) {
                $data['FAI'] = $object->getFAI();
            }
            if ($object->isInitialized('nSR') && null !== $object->getNSR()) {
                $data['NSR'] = $object->getNSR();
            }
            if ($object->isInitialized('pEN') && null !== $object->getPEN()) {
                $data['PEN'] = $object->getPEN();
            }
            if ($object->isInitialized('rEJ') && null !== $object->getREJ()) {
                $data['REJ'] = $object->getREJ();
            }
            if ($object->isInitialized('rEQ') && null !== $object->getREQ()) {
                $data['REQ'] = $object->getREQ();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\StatisticsDomainStatisticsByStatus' => false];
        }
    }
} else {
    class StatisticsDomainStatisticsByStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\StatisticsDomainStatisticsByStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\StatisticsDomainStatisticsByStatus';
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
            $object = new \Rouda\OpenProviderAPI\Model\StatisticsDomainStatisticsByStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ACT', $data)) {
                $object->setACT($data['ACT']);
            }
            if (\array_key_exists('FAI', $data)) {
                $object->setFAI($data['FAI']);
            }
            if (\array_key_exists('NSR', $data)) {
                $object->setNSR($data['NSR']);
            }
            if (\array_key_exists('PEN', $data)) {
                $object->setPEN($data['PEN']);
            }
            if (\array_key_exists('REJ', $data)) {
                $object->setREJ($data['REJ']);
            }
            if (\array_key_exists('REQ', $data)) {
                $object->setREQ($data['REQ']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('aCT') && null !== $object->getACT()) {
                $data['ACT'] = $object->getACT();
            }
            if ($object->isInitialized('fAI') && null !== $object->getFAI()) {
                $data['FAI'] = $object->getFAI();
            }
            if ($object->isInitialized('nSR') && null !== $object->getNSR()) {
                $data['NSR'] = $object->getNSR();
            }
            if ($object->isInitialized('pEN') && null !== $object->getPEN()) {
                $data['PEN'] = $object->getPEN();
            }
            if ($object->isInitialized('rEJ') && null !== $object->getREJ()) {
                $data['REJ'] = $object->getREJ();
            }
            if ($object->isInitialized('rEQ') && null !== $object->getREQ()) {
                $data['REQ'] = $object->getREQ();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\StatisticsDomainStatisticsByStatus' => false];
        }
    }
}