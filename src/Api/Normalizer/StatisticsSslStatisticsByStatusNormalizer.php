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
    class StatisticsSslStatisticsByStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatisticsByStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatisticsByStatus';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\StatisticsSslStatisticsByStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ACT', $data) && $data['ACT'] !== null) {
                $object->setACT($data['ACT']);
            }
            elseif (\array_key_exists('ACT', $data) && $data['ACT'] === null) {
                $object->setACT(null);
            }
            if (\array_key_exists('FAI', $data) && $data['FAI'] !== null) {
                $object->setFAI($data['FAI']);
            }
            elseif (\array_key_exists('FAI', $data) && $data['FAI'] === null) {
                $object->setFAI(null);
            }
            if (\array_key_exists('NSR', $data) && $data['NSR'] !== null) {
                $object->setNSR($data['NSR']);
            }
            elseif (\array_key_exists('NSR', $data) && $data['NSR'] === null) {
                $object->setNSR(null);
            }
            if (\array_key_exists('PEN', $data) && $data['PEN'] !== null) {
                $object->setPEN($data['PEN']);
            }
            elseif (\array_key_exists('PEN', $data) && $data['PEN'] === null) {
                $object->setPEN(null);
            }
            if (\array_key_exists('REJ', $data) && $data['REJ'] !== null) {
                $object->setREJ($data['REJ']);
            }
            elseif (\array_key_exists('REJ', $data) && $data['REJ'] === null) {
                $object->setREJ(null);
            }
            if (\array_key_exists('REQ', $data) && $data['REQ'] !== null) {
                $object->setREQ($data['REQ']);
            }
            elseif (\array_key_exists('REQ', $data) && $data['REQ'] === null) {
                $object->setREQ(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatisticsByStatus' => false];
        }
    }
} else {
    class StatisticsSslStatisticsByStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatisticsByStatus';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatisticsByStatus';
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
            $object = new \Rouda\OpenProvider\Api\Model\StatisticsSslStatisticsByStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('ACT', $data) && $data['ACT'] !== null) {
                $object->setACT($data['ACT']);
            }
            elseif (\array_key_exists('ACT', $data) && $data['ACT'] === null) {
                $object->setACT(null);
            }
            if (\array_key_exists('FAI', $data) && $data['FAI'] !== null) {
                $object->setFAI($data['FAI']);
            }
            elseif (\array_key_exists('FAI', $data) && $data['FAI'] === null) {
                $object->setFAI(null);
            }
            if (\array_key_exists('NSR', $data) && $data['NSR'] !== null) {
                $object->setNSR($data['NSR']);
            }
            elseif (\array_key_exists('NSR', $data) && $data['NSR'] === null) {
                $object->setNSR(null);
            }
            if (\array_key_exists('PEN', $data) && $data['PEN'] !== null) {
                $object->setPEN($data['PEN']);
            }
            elseif (\array_key_exists('PEN', $data) && $data['PEN'] === null) {
                $object->setPEN(null);
            }
            if (\array_key_exists('REJ', $data) && $data['REJ'] !== null) {
                $object->setREJ($data['REJ']);
            }
            elseif (\array_key_exists('REJ', $data) && $data['REJ'] === null) {
                $object->setREJ(null);
            }
            if (\array_key_exists('REQ', $data) && $data['REQ'] !== null) {
                $object->setREQ($data['REQ']);
            }
            elseif (\array_key_exists('REQ', $data) && $data['REQ'] === null) {
                $object->setREQ(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\StatisticsSslStatisticsByStatus' => false];
        }
    }
}