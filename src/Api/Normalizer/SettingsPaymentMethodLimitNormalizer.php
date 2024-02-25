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
    class SettingsPaymentMethodLimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\SettingsPaymentMethodLimit();
            if (\array_key_exists('AUD', $data) && \is_int($data['AUD'])) {
                $data['AUD'] = (double) $data['AUD'];
            }
            if (\array_key_exists('BGN', $data) && \is_int($data['BGN'])) {
                $data['BGN'] = (double) $data['BGN'];
            }
            if (\array_key_exists('BRL', $data) && \is_int($data['BRL'])) {
                $data['BRL'] = (double) $data['BRL'];
            }
            if (\array_key_exists('CAD', $data) && \is_int($data['CAD'])) {
                $data['CAD'] = (double) $data['CAD'];
            }
            if (\array_key_exists('CHF', $data) && \is_int($data['CHF'])) {
                $data['CHF'] = (double) $data['CHF'];
            }
            if (\array_key_exists('CNY', $data) && \is_int($data['CNY'])) {
                $data['CNY'] = (double) $data['CNY'];
            }
            if (\array_key_exists('CZK', $data) && \is_int($data['CZK'])) {
                $data['CZK'] = (double) $data['CZK'];
            }
            if (\array_key_exists('DKK', $data) && \is_int($data['DKK'])) {
                $data['DKK'] = (double) $data['DKK'];
            }
            if (\array_key_exists('EEK', $data) && \is_int($data['EEK'])) {
                $data['EEK'] = (double) $data['EEK'];
            }
            if (\array_key_exists('EUR', $data) && \is_int($data['EUR'])) {
                $data['EUR'] = (double) $data['EUR'];
            }
            if (\array_key_exists('GBP', $data) && \is_int($data['GBP'])) {
                $data['GBP'] = (double) $data['GBP'];
            }
            if (\array_key_exists('GHS', $data) && \is_int($data['GHS'])) {
                $data['GHS'] = (double) $data['GHS'];
            }
            if (\array_key_exists('HKD', $data) && \is_int($data['HKD'])) {
                $data['HKD'] = (double) $data['HKD'];
            }
            if (\array_key_exists('HRK', $data) && \is_int($data['HRK'])) {
                $data['HRK'] = (double) $data['HRK'];
            }
            if (\array_key_exists('HUF', $data) && \is_int($data['HUF'])) {
                $data['HUF'] = (double) $data['HUF'];
            }
            if (\array_key_exists('IDR', $data) && \is_int($data['IDR'])) {
                $data['IDR'] = (double) $data['IDR'];
            }
            if (\array_key_exists('ILS', $data) && \is_int($data['ILS'])) {
                $data['ILS'] = (double) $data['ILS'];
            }
            if (\array_key_exists('INR', $data) && \is_int($data['INR'])) {
                $data['INR'] = (double) $data['INR'];
            }
            if (\array_key_exists('JPY', $data) && \is_int($data['JPY'])) {
                $data['JPY'] = (double) $data['JPY'];
            }
            if (\array_key_exists('KRW', $data) && \is_int($data['KRW'])) {
                $data['KRW'] = (double) $data['KRW'];
            }
            if (\array_key_exists('LKR', $data) && \is_int($data['LKR'])) {
                $data['LKR'] = (double) $data['LKR'];
            }
            if (\array_key_exists('LTL', $data) && \is_int($data['LTL'])) {
                $data['LTL'] = (double) $data['LTL'];
            }
            if (\array_key_exists('LVL', $data) && \is_int($data['LVL'])) {
                $data['LVL'] = (double) $data['LVL'];
            }
            if (\array_key_exists('MXN', $data) && \is_int($data['MXN'])) {
                $data['MXN'] = (double) $data['MXN'];
            }
            if (\array_key_exists('MYR', $data) && \is_int($data['MYR'])) {
                $data['MYR'] = (double) $data['MYR'];
            }
            if (\array_key_exists('NOK', $data) && \is_int($data['NOK'])) {
                $data['NOK'] = (double) $data['NOK'];
            }
            if (\array_key_exists('NZD', $data) && \is_int($data['NZD'])) {
                $data['NZD'] = (double) $data['NZD'];
            }
            if (\array_key_exists('PHP', $data) && \is_int($data['PHP'])) {
                $data['PHP'] = (double) $data['PHP'];
            }
            if (\array_key_exists('PLN', $data) && \is_int($data['PLN'])) {
                $data['PLN'] = (double) $data['PLN'];
            }
            if (\array_key_exists('RON', $data) && \is_int($data['RON'])) {
                $data['RON'] = (double) $data['RON'];
            }
            if (\array_key_exists('RUB', $data) && \is_int($data['RUB'])) {
                $data['RUB'] = (double) $data['RUB'];
            }
            if (\array_key_exists('SEK', $data) && \is_int($data['SEK'])) {
                $data['SEK'] = (double) $data['SEK'];
            }
            if (\array_key_exists('SGD', $data) && \is_int($data['SGD'])) {
                $data['SGD'] = (double) $data['SGD'];
            }
            if (\array_key_exists('THB', $data) && \is_int($data['THB'])) {
                $data['THB'] = (double) $data['THB'];
            }
            if (\array_key_exists('TRY', $data) && \is_int($data['TRY'])) {
                $data['TRY'] = (double) $data['TRY'];
            }
            if (\array_key_exists('USD', $data) && \is_int($data['USD'])) {
                $data['USD'] = (double) $data['USD'];
            }
            if (\array_key_exists('ZAR', $data) && \is_int($data['ZAR'])) {
                $data['ZAR'] = (double) $data['ZAR'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AUD', $data) && $data['AUD'] !== null) {
                $object->setAUD($data['AUD']);
            }
            elseif (\array_key_exists('AUD', $data) && $data['AUD'] === null) {
                $object->setAUD(null);
            }
            if (\array_key_exists('BGN', $data) && $data['BGN'] !== null) {
                $object->setBGN($data['BGN']);
            }
            elseif (\array_key_exists('BGN', $data) && $data['BGN'] === null) {
                $object->setBGN(null);
            }
            if (\array_key_exists('BRL', $data) && $data['BRL'] !== null) {
                $object->setBRL($data['BRL']);
            }
            elseif (\array_key_exists('BRL', $data) && $data['BRL'] === null) {
                $object->setBRL(null);
            }
            if (\array_key_exists('CAD', $data) && $data['CAD'] !== null) {
                $object->setCAD($data['CAD']);
            }
            elseif (\array_key_exists('CAD', $data) && $data['CAD'] === null) {
                $object->setCAD(null);
            }
            if (\array_key_exists('CHF', $data) && $data['CHF'] !== null) {
                $object->setCHF($data['CHF']);
            }
            elseif (\array_key_exists('CHF', $data) && $data['CHF'] === null) {
                $object->setCHF(null);
            }
            if (\array_key_exists('CNY', $data) && $data['CNY'] !== null) {
                $object->setCNY($data['CNY']);
            }
            elseif (\array_key_exists('CNY', $data) && $data['CNY'] === null) {
                $object->setCNY(null);
            }
            if (\array_key_exists('CZK', $data) && $data['CZK'] !== null) {
                $object->setCZK($data['CZK']);
            }
            elseif (\array_key_exists('CZK', $data) && $data['CZK'] === null) {
                $object->setCZK(null);
            }
            if (\array_key_exists('DKK', $data) && $data['DKK'] !== null) {
                $object->setDKK($data['DKK']);
            }
            elseif (\array_key_exists('DKK', $data) && $data['DKK'] === null) {
                $object->setDKK(null);
            }
            if (\array_key_exists('EEK', $data) && $data['EEK'] !== null) {
                $object->setEEK($data['EEK']);
            }
            elseif (\array_key_exists('EEK', $data) && $data['EEK'] === null) {
                $object->setEEK(null);
            }
            if (\array_key_exists('EUR', $data) && $data['EUR'] !== null) {
                $object->setEUR($data['EUR']);
            }
            elseif (\array_key_exists('EUR', $data) && $data['EUR'] === null) {
                $object->setEUR(null);
            }
            if (\array_key_exists('GBP', $data) && $data['GBP'] !== null) {
                $object->setGBP($data['GBP']);
            }
            elseif (\array_key_exists('GBP', $data) && $data['GBP'] === null) {
                $object->setGBP(null);
            }
            if (\array_key_exists('GHS', $data) && $data['GHS'] !== null) {
                $object->setGHS($data['GHS']);
            }
            elseif (\array_key_exists('GHS', $data) && $data['GHS'] === null) {
                $object->setGHS(null);
            }
            if (\array_key_exists('HKD', $data) && $data['HKD'] !== null) {
                $object->setHKD($data['HKD']);
            }
            elseif (\array_key_exists('HKD', $data) && $data['HKD'] === null) {
                $object->setHKD(null);
            }
            if (\array_key_exists('HRK', $data) && $data['HRK'] !== null) {
                $object->setHRK($data['HRK']);
            }
            elseif (\array_key_exists('HRK', $data) && $data['HRK'] === null) {
                $object->setHRK(null);
            }
            if (\array_key_exists('HUF', $data) && $data['HUF'] !== null) {
                $object->setHUF($data['HUF']);
            }
            elseif (\array_key_exists('HUF', $data) && $data['HUF'] === null) {
                $object->setHUF(null);
            }
            if (\array_key_exists('IDR', $data) && $data['IDR'] !== null) {
                $object->setIDR($data['IDR']);
            }
            elseif (\array_key_exists('IDR', $data) && $data['IDR'] === null) {
                $object->setIDR(null);
            }
            if (\array_key_exists('ILS', $data) && $data['ILS'] !== null) {
                $object->setILS($data['ILS']);
            }
            elseif (\array_key_exists('ILS', $data) && $data['ILS'] === null) {
                $object->setILS(null);
            }
            if (\array_key_exists('INR', $data) && $data['INR'] !== null) {
                $object->setINR($data['INR']);
            }
            elseif (\array_key_exists('INR', $data) && $data['INR'] === null) {
                $object->setINR(null);
            }
            if (\array_key_exists('JPY', $data) && $data['JPY'] !== null) {
                $object->setJPY($data['JPY']);
            }
            elseif (\array_key_exists('JPY', $data) && $data['JPY'] === null) {
                $object->setJPY(null);
            }
            if (\array_key_exists('KRW', $data) && $data['KRW'] !== null) {
                $object->setKRW($data['KRW']);
            }
            elseif (\array_key_exists('KRW', $data) && $data['KRW'] === null) {
                $object->setKRW(null);
            }
            if (\array_key_exists('LKR', $data) && $data['LKR'] !== null) {
                $object->setLKR($data['LKR']);
            }
            elseif (\array_key_exists('LKR', $data) && $data['LKR'] === null) {
                $object->setLKR(null);
            }
            if (\array_key_exists('LTL', $data) && $data['LTL'] !== null) {
                $object->setLTL($data['LTL']);
            }
            elseif (\array_key_exists('LTL', $data) && $data['LTL'] === null) {
                $object->setLTL(null);
            }
            if (\array_key_exists('LVL', $data) && $data['LVL'] !== null) {
                $object->setLVL($data['LVL']);
            }
            elseif (\array_key_exists('LVL', $data) && $data['LVL'] === null) {
                $object->setLVL(null);
            }
            if (\array_key_exists('MXN', $data) && $data['MXN'] !== null) {
                $object->setMXN($data['MXN']);
            }
            elseif (\array_key_exists('MXN', $data) && $data['MXN'] === null) {
                $object->setMXN(null);
            }
            if (\array_key_exists('MYR', $data) && $data['MYR'] !== null) {
                $object->setMYR($data['MYR']);
            }
            elseif (\array_key_exists('MYR', $data) && $data['MYR'] === null) {
                $object->setMYR(null);
            }
            if (\array_key_exists('NOK', $data) && $data['NOK'] !== null) {
                $object->setNOK($data['NOK']);
            }
            elseif (\array_key_exists('NOK', $data) && $data['NOK'] === null) {
                $object->setNOK(null);
            }
            if (\array_key_exists('NZD', $data) && $data['NZD'] !== null) {
                $object->setNZD($data['NZD']);
            }
            elseif (\array_key_exists('NZD', $data) && $data['NZD'] === null) {
                $object->setNZD(null);
            }
            if (\array_key_exists('PHP', $data) && $data['PHP'] !== null) {
                $object->setPHP($data['PHP']);
            }
            elseif (\array_key_exists('PHP', $data) && $data['PHP'] === null) {
                $object->setPHP(null);
            }
            if (\array_key_exists('PLN', $data) && $data['PLN'] !== null) {
                $object->setPLN($data['PLN']);
            }
            elseif (\array_key_exists('PLN', $data) && $data['PLN'] === null) {
                $object->setPLN(null);
            }
            if (\array_key_exists('RON', $data) && $data['RON'] !== null) {
                $object->setRON($data['RON']);
            }
            elseif (\array_key_exists('RON', $data) && $data['RON'] === null) {
                $object->setRON(null);
            }
            if (\array_key_exists('RUB', $data) && $data['RUB'] !== null) {
                $object->setRUB($data['RUB']);
            }
            elseif (\array_key_exists('RUB', $data) && $data['RUB'] === null) {
                $object->setRUB(null);
            }
            if (\array_key_exists('SEK', $data) && $data['SEK'] !== null) {
                $object->setSEK($data['SEK']);
            }
            elseif (\array_key_exists('SEK', $data) && $data['SEK'] === null) {
                $object->setSEK(null);
            }
            if (\array_key_exists('SGD', $data) && $data['SGD'] !== null) {
                $object->setSGD($data['SGD']);
            }
            elseif (\array_key_exists('SGD', $data) && $data['SGD'] === null) {
                $object->setSGD(null);
            }
            if (\array_key_exists('THB', $data) && $data['THB'] !== null) {
                $object->setTHB($data['THB']);
            }
            elseif (\array_key_exists('THB', $data) && $data['THB'] === null) {
                $object->setTHB(null);
            }
            if (\array_key_exists('TRY', $data) && $data['TRY'] !== null) {
                $object->setTRY($data['TRY']);
            }
            elseif (\array_key_exists('TRY', $data) && $data['TRY'] === null) {
                $object->setTRY(null);
            }
            if (\array_key_exists('USD', $data) && $data['USD'] !== null) {
                $object->setUSD($data['USD']);
            }
            elseif (\array_key_exists('USD', $data) && $data['USD'] === null) {
                $object->setUSD(null);
            }
            if (\array_key_exists('ZAR', $data) && $data['ZAR'] !== null) {
                $object->setZAR($data['ZAR']);
            }
            elseif (\array_key_exists('ZAR', $data) && $data['ZAR'] === null) {
                $object->setZAR(null);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('aUD') && null !== $object->getAUD()) {
                $data['AUD'] = $object->getAUD();
            }
            if ($object->isInitialized('bGN') && null !== $object->getBGN()) {
                $data['BGN'] = $object->getBGN();
            }
            if ($object->isInitialized('bRL') && null !== $object->getBRL()) {
                $data['BRL'] = $object->getBRL();
            }
            if ($object->isInitialized('cAD') && null !== $object->getCAD()) {
                $data['CAD'] = $object->getCAD();
            }
            if ($object->isInitialized('cHF') && null !== $object->getCHF()) {
                $data['CHF'] = $object->getCHF();
            }
            if ($object->isInitialized('cNY') && null !== $object->getCNY()) {
                $data['CNY'] = $object->getCNY();
            }
            if ($object->isInitialized('cZK') && null !== $object->getCZK()) {
                $data['CZK'] = $object->getCZK();
            }
            if ($object->isInitialized('dKK') && null !== $object->getDKK()) {
                $data['DKK'] = $object->getDKK();
            }
            if ($object->isInitialized('eEK') && null !== $object->getEEK()) {
                $data['EEK'] = $object->getEEK();
            }
            if ($object->isInitialized('eUR') && null !== $object->getEUR()) {
                $data['EUR'] = $object->getEUR();
            }
            if ($object->isInitialized('gBP') && null !== $object->getGBP()) {
                $data['GBP'] = $object->getGBP();
            }
            if ($object->isInitialized('gHS') && null !== $object->getGHS()) {
                $data['GHS'] = $object->getGHS();
            }
            if ($object->isInitialized('hKD') && null !== $object->getHKD()) {
                $data['HKD'] = $object->getHKD();
            }
            if ($object->isInitialized('hRK') && null !== $object->getHRK()) {
                $data['HRK'] = $object->getHRK();
            }
            if ($object->isInitialized('hUF') && null !== $object->getHUF()) {
                $data['HUF'] = $object->getHUF();
            }
            if ($object->isInitialized('iDR') && null !== $object->getIDR()) {
                $data['IDR'] = $object->getIDR();
            }
            if ($object->isInitialized('iLS') && null !== $object->getILS()) {
                $data['ILS'] = $object->getILS();
            }
            if ($object->isInitialized('iNR') && null !== $object->getINR()) {
                $data['INR'] = $object->getINR();
            }
            if ($object->isInitialized('jPY') && null !== $object->getJPY()) {
                $data['JPY'] = $object->getJPY();
            }
            if ($object->isInitialized('kRW') && null !== $object->getKRW()) {
                $data['KRW'] = $object->getKRW();
            }
            if ($object->isInitialized('lKR') && null !== $object->getLKR()) {
                $data['LKR'] = $object->getLKR();
            }
            if ($object->isInitialized('lTL') && null !== $object->getLTL()) {
                $data['LTL'] = $object->getLTL();
            }
            if ($object->isInitialized('lVL') && null !== $object->getLVL()) {
                $data['LVL'] = $object->getLVL();
            }
            if ($object->isInitialized('mXN') && null !== $object->getMXN()) {
                $data['MXN'] = $object->getMXN();
            }
            if ($object->isInitialized('mYR') && null !== $object->getMYR()) {
                $data['MYR'] = $object->getMYR();
            }
            if ($object->isInitialized('nOK') && null !== $object->getNOK()) {
                $data['NOK'] = $object->getNOK();
            }
            if ($object->isInitialized('nZD') && null !== $object->getNZD()) {
                $data['NZD'] = $object->getNZD();
            }
            if ($object->isInitialized('pHP') && null !== $object->getPHP()) {
                $data['PHP'] = $object->getPHP();
            }
            if ($object->isInitialized('pLN') && null !== $object->getPLN()) {
                $data['PLN'] = $object->getPLN();
            }
            if ($object->isInitialized('rON') && null !== $object->getRON()) {
                $data['RON'] = $object->getRON();
            }
            if ($object->isInitialized('rUB') && null !== $object->getRUB()) {
                $data['RUB'] = $object->getRUB();
            }
            if ($object->isInitialized('sEK') && null !== $object->getSEK()) {
                $data['SEK'] = $object->getSEK();
            }
            if ($object->isInitialized('sGD') && null !== $object->getSGD()) {
                $data['SGD'] = $object->getSGD();
            }
            if ($object->isInitialized('tHB') && null !== $object->getTHB()) {
                $data['THB'] = $object->getTHB();
            }
            if ($object->isInitialized('tRY') && null !== $object->getTRY()) {
                $data['TRY'] = $object->getTRY();
            }
            if ($object->isInitialized('uSD') && null !== $object->getUSD()) {
                $data['USD'] = $object->getUSD();
            }
            if ($object->isInitialized('zAR') && null !== $object->getZAR()) {
                $data['ZAR'] = $object->getZAR();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit' => false];
        }
    }
} else {
    class SettingsPaymentMethodLimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit';
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
            $object = new \Rouda\OpenProvider\Api\Model\SettingsPaymentMethodLimit();
            if (\array_key_exists('AUD', $data) && \is_int($data['AUD'])) {
                $data['AUD'] = (double) $data['AUD'];
            }
            if (\array_key_exists('BGN', $data) && \is_int($data['BGN'])) {
                $data['BGN'] = (double) $data['BGN'];
            }
            if (\array_key_exists('BRL', $data) && \is_int($data['BRL'])) {
                $data['BRL'] = (double) $data['BRL'];
            }
            if (\array_key_exists('CAD', $data) && \is_int($data['CAD'])) {
                $data['CAD'] = (double) $data['CAD'];
            }
            if (\array_key_exists('CHF', $data) && \is_int($data['CHF'])) {
                $data['CHF'] = (double) $data['CHF'];
            }
            if (\array_key_exists('CNY', $data) && \is_int($data['CNY'])) {
                $data['CNY'] = (double) $data['CNY'];
            }
            if (\array_key_exists('CZK', $data) && \is_int($data['CZK'])) {
                $data['CZK'] = (double) $data['CZK'];
            }
            if (\array_key_exists('DKK', $data) && \is_int($data['DKK'])) {
                $data['DKK'] = (double) $data['DKK'];
            }
            if (\array_key_exists('EEK', $data) && \is_int($data['EEK'])) {
                $data['EEK'] = (double) $data['EEK'];
            }
            if (\array_key_exists('EUR', $data) && \is_int($data['EUR'])) {
                $data['EUR'] = (double) $data['EUR'];
            }
            if (\array_key_exists('GBP', $data) && \is_int($data['GBP'])) {
                $data['GBP'] = (double) $data['GBP'];
            }
            if (\array_key_exists('GHS', $data) && \is_int($data['GHS'])) {
                $data['GHS'] = (double) $data['GHS'];
            }
            if (\array_key_exists('HKD', $data) && \is_int($data['HKD'])) {
                $data['HKD'] = (double) $data['HKD'];
            }
            if (\array_key_exists('HRK', $data) && \is_int($data['HRK'])) {
                $data['HRK'] = (double) $data['HRK'];
            }
            if (\array_key_exists('HUF', $data) && \is_int($data['HUF'])) {
                $data['HUF'] = (double) $data['HUF'];
            }
            if (\array_key_exists('IDR', $data) && \is_int($data['IDR'])) {
                $data['IDR'] = (double) $data['IDR'];
            }
            if (\array_key_exists('ILS', $data) && \is_int($data['ILS'])) {
                $data['ILS'] = (double) $data['ILS'];
            }
            if (\array_key_exists('INR', $data) && \is_int($data['INR'])) {
                $data['INR'] = (double) $data['INR'];
            }
            if (\array_key_exists('JPY', $data) && \is_int($data['JPY'])) {
                $data['JPY'] = (double) $data['JPY'];
            }
            if (\array_key_exists('KRW', $data) && \is_int($data['KRW'])) {
                $data['KRW'] = (double) $data['KRW'];
            }
            if (\array_key_exists('LKR', $data) && \is_int($data['LKR'])) {
                $data['LKR'] = (double) $data['LKR'];
            }
            if (\array_key_exists('LTL', $data) && \is_int($data['LTL'])) {
                $data['LTL'] = (double) $data['LTL'];
            }
            if (\array_key_exists('LVL', $data) && \is_int($data['LVL'])) {
                $data['LVL'] = (double) $data['LVL'];
            }
            if (\array_key_exists('MXN', $data) && \is_int($data['MXN'])) {
                $data['MXN'] = (double) $data['MXN'];
            }
            if (\array_key_exists('MYR', $data) && \is_int($data['MYR'])) {
                $data['MYR'] = (double) $data['MYR'];
            }
            if (\array_key_exists('NOK', $data) && \is_int($data['NOK'])) {
                $data['NOK'] = (double) $data['NOK'];
            }
            if (\array_key_exists('NZD', $data) && \is_int($data['NZD'])) {
                $data['NZD'] = (double) $data['NZD'];
            }
            if (\array_key_exists('PHP', $data) && \is_int($data['PHP'])) {
                $data['PHP'] = (double) $data['PHP'];
            }
            if (\array_key_exists('PLN', $data) && \is_int($data['PLN'])) {
                $data['PLN'] = (double) $data['PLN'];
            }
            if (\array_key_exists('RON', $data) && \is_int($data['RON'])) {
                $data['RON'] = (double) $data['RON'];
            }
            if (\array_key_exists('RUB', $data) && \is_int($data['RUB'])) {
                $data['RUB'] = (double) $data['RUB'];
            }
            if (\array_key_exists('SEK', $data) && \is_int($data['SEK'])) {
                $data['SEK'] = (double) $data['SEK'];
            }
            if (\array_key_exists('SGD', $data) && \is_int($data['SGD'])) {
                $data['SGD'] = (double) $data['SGD'];
            }
            if (\array_key_exists('THB', $data) && \is_int($data['THB'])) {
                $data['THB'] = (double) $data['THB'];
            }
            if (\array_key_exists('TRY', $data) && \is_int($data['TRY'])) {
                $data['TRY'] = (double) $data['TRY'];
            }
            if (\array_key_exists('USD', $data) && \is_int($data['USD'])) {
                $data['USD'] = (double) $data['USD'];
            }
            if (\array_key_exists('ZAR', $data) && \is_int($data['ZAR'])) {
                $data['ZAR'] = (double) $data['ZAR'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('AUD', $data) && $data['AUD'] !== null) {
                $object->setAUD($data['AUD']);
            }
            elseif (\array_key_exists('AUD', $data) && $data['AUD'] === null) {
                $object->setAUD(null);
            }
            if (\array_key_exists('BGN', $data) && $data['BGN'] !== null) {
                $object->setBGN($data['BGN']);
            }
            elseif (\array_key_exists('BGN', $data) && $data['BGN'] === null) {
                $object->setBGN(null);
            }
            if (\array_key_exists('BRL', $data) && $data['BRL'] !== null) {
                $object->setBRL($data['BRL']);
            }
            elseif (\array_key_exists('BRL', $data) && $data['BRL'] === null) {
                $object->setBRL(null);
            }
            if (\array_key_exists('CAD', $data) && $data['CAD'] !== null) {
                $object->setCAD($data['CAD']);
            }
            elseif (\array_key_exists('CAD', $data) && $data['CAD'] === null) {
                $object->setCAD(null);
            }
            if (\array_key_exists('CHF', $data) && $data['CHF'] !== null) {
                $object->setCHF($data['CHF']);
            }
            elseif (\array_key_exists('CHF', $data) && $data['CHF'] === null) {
                $object->setCHF(null);
            }
            if (\array_key_exists('CNY', $data) && $data['CNY'] !== null) {
                $object->setCNY($data['CNY']);
            }
            elseif (\array_key_exists('CNY', $data) && $data['CNY'] === null) {
                $object->setCNY(null);
            }
            if (\array_key_exists('CZK', $data) && $data['CZK'] !== null) {
                $object->setCZK($data['CZK']);
            }
            elseif (\array_key_exists('CZK', $data) && $data['CZK'] === null) {
                $object->setCZK(null);
            }
            if (\array_key_exists('DKK', $data) && $data['DKK'] !== null) {
                $object->setDKK($data['DKK']);
            }
            elseif (\array_key_exists('DKK', $data) && $data['DKK'] === null) {
                $object->setDKK(null);
            }
            if (\array_key_exists('EEK', $data) && $data['EEK'] !== null) {
                $object->setEEK($data['EEK']);
            }
            elseif (\array_key_exists('EEK', $data) && $data['EEK'] === null) {
                $object->setEEK(null);
            }
            if (\array_key_exists('EUR', $data) && $data['EUR'] !== null) {
                $object->setEUR($data['EUR']);
            }
            elseif (\array_key_exists('EUR', $data) && $data['EUR'] === null) {
                $object->setEUR(null);
            }
            if (\array_key_exists('GBP', $data) && $data['GBP'] !== null) {
                $object->setGBP($data['GBP']);
            }
            elseif (\array_key_exists('GBP', $data) && $data['GBP'] === null) {
                $object->setGBP(null);
            }
            if (\array_key_exists('GHS', $data) && $data['GHS'] !== null) {
                $object->setGHS($data['GHS']);
            }
            elseif (\array_key_exists('GHS', $data) && $data['GHS'] === null) {
                $object->setGHS(null);
            }
            if (\array_key_exists('HKD', $data) && $data['HKD'] !== null) {
                $object->setHKD($data['HKD']);
            }
            elseif (\array_key_exists('HKD', $data) && $data['HKD'] === null) {
                $object->setHKD(null);
            }
            if (\array_key_exists('HRK', $data) && $data['HRK'] !== null) {
                $object->setHRK($data['HRK']);
            }
            elseif (\array_key_exists('HRK', $data) && $data['HRK'] === null) {
                $object->setHRK(null);
            }
            if (\array_key_exists('HUF', $data) && $data['HUF'] !== null) {
                $object->setHUF($data['HUF']);
            }
            elseif (\array_key_exists('HUF', $data) && $data['HUF'] === null) {
                $object->setHUF(null);
            }
            if (\array_key_exists('IDR', $data) && $data['IDR'] !== null) {
                $object->setIDR($data['IDR']);
            }
            elseif (\array_key_exists('IDR', $data) && $data['IDR'] === null) {
                $object->setIDR(null);
            }
            if (\array_key_exists('ILS', $data) && $data['ILS'] !== null) {
                $object->setILS($data['ILS']);
            }
            elseif (\array_key_exists('ILS', $data) && $data['ILS'] === null) {
                $object->setILS(null);
            }
            if (\array_key_exists('INR', $data) && $data['INR'] !== null) {
                $object->setINR($data['INR']);
            }
            elseif (\array_key_exists('INR', $data) && $data['INR'] === null) {
                $object->setINR(null);
            }
            if (\array_key_exists('JPY', $data) && $data['JPY'] !== null) {
                $object->setJPY($data['JPY']);
            }
            elseif (\array_key_exists('JPY', $data) && $data['JPY'] === null) {
                $object->setJPY(null);
            }
            if (\array_key_exists('KRW', $data) && $data['KRW'] !== null) {
                $object->setKRW($data['KRW']);
            }
            elseif (\array_key_exists('KRW', $data) && $data['KRW'] === null) {
                $object->setKRW(null);
            }
            if (\array_key_exists('LKR', $data) && $data['LKR'] !== null) {
                $object->setLKR($data['LKR']);
            }
            elseif (\array_key_exists('LKR', $data) && $data['LKR'] === null) {
                $object->setLKR(null);
            }
            if (\array_key_exists('LTL', $data) && $data['LTL'] !== null) {
                $object->setLTL($data['LTL']);
            }
            elseif (\array_key_exists('LTL', $data) && $data['LTL'] === null) {
                $object->setLTL(null);
            }
            if (\array_key_exists('LVL', $data) && $data['LVL'] !== null) {
                $object->setLVL($data['LVL']);
            }
            elseif (\array_key_exists('LVL', $data) && $data['LVL'] === null) {
                $object->setLVL(null);
            }
            if (\array_key_exists('MXN', $data) && $data['MXN'] !== null) {
                $object->setMXN($data['MXN']);
            }
            elseif (\array_key_exists('MXN', $data) && $data['MXN'] === null) {
                $object->setMXN(null);
            }
            if (\array_key_exists('MYR', $data) && $data['MYR'] !== null) {
                $object->setMYR($data['MYR']);
            }
            elseif (\array_key_exists('MYR', $data) && $data['MYR'] === null) {
                $object->setMYR(null);
            }
            if (\array_key_exists('NOK', $data) && $data['NOK'] !== null) {
                $object->setNOK($data['NOK']);
            }
            elseif (\array_key_exists('NOK', $data) && $data['NOK'] === null) {
                $object->setNOK(null);
            }
            if (\array_key_exists('NZD', $data) && $data['NZD'] !== null) {
                $object->setNZD($data['NZD']);
            }
            elseif (\array_key_exists('NZD', $data) && $data['NZD'] === null) {
                $object->setNZD(null);
            }
            if (\array_key_exists('PHP', $data) && $data['PHP'] !== null) {
                $object->setPHP($data['PHP']);
            }
            elseif (\array_key_exists('PHP', $data) && $data['PHP'] === null) {
                $object->setPHP(null);
            }
            if (\array_key_exists('PLN', $data) && $data['PLN'] !== null) {
                $object->setPLN($data['PLN']);
            }
            elseif (\array_key_exists('PLN', $data) && $data['PLN'] === null) {
                $object->setPLN(null);
            }
            if (\array_key_exists('RON', $data) && $data['RON'] !== null) {
                $object->setRON($data['RON']);
            }
            elseif (\array_key_exists('RON', $data) && $data['RON'] === null) {
                $object->setRON(null);
            }
            if (\array_key_exists('RUB', $data) && $data['RUB'] !== null) {
                $object->setRUB($data['RUB']);
            }
            elseif (\array_key_exists('RUB', $data) && $data['RUB'] === null) {
                $object->setRUB(null);
            }
            if (\array_key_exists('SEK', $data) && $data['SEK'] !== null) {
                $object->setSEK($data['SEK']);
            }
            elseif (\array_key_exists('SEK', $data) && $data['SEK'] === null) {
                $object->setSEK(null);
            }
            if (\array_key_exists('SGD', $data) && $data['SGD'] !== null) {
                $object->setSGD($data['SGD']);
            }
            elseif (\array_key_exists('SGD', $data) && $data['SGD'] === null) {
                $object->setSGD(null);
            }
            if (\array_key_exists('THB', $data) && $data['THB'] !== null) {
                $object->setTHB($data['THB']);
            }
            elseif (\array_key_exists('THB', $data) && $data['THB'] === null) {
                $object->setTHB(null);
            }
            if (\array_key_exists('TRY', $data) && $data['TRY'] !== null) {
                $object->setTRY($data['TRY']);
            }
            elseif (\array_key_exists('TRY', $data) && $data['TRY'] === null) {
                $object->setTRY(null);
            }
            if (\array_key_exists('USD', $data) && $data['USD'] !== null) {
                $object->setUSD($data['USD']);
            }
            elseif (\array_key_exists('USD', $data) && $data['USD'] === null) {
                $object->setUSD(null);
            }
            if (\array_key_exists('ZAR', $data) && $data['ZAR'] !== null) {
                $object->setZAR($data['ZAR']);
            }
            elseif (\array_key_exists('ZAR', $data) && $data['ZAR'] === null) {
                $object->setZAR(null);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('aUD') && null !== $object->getAUD()) {
                $data['AUD'] = $object->getAUD();
            }
            if ($object->isInitialized('bGN') && null !== $object->getBGN()) {
                $data['BGN'] = $object->getBGN();
            }
            if ($object->isInitialized('bRL') && null !== $object->getBRL()) {
                $data['BRL'] = $object->getBRL();
            }
            if ($object->isInitialized('cAD') && null !== $object->getCAD()) {
                $data['CAD'] = $object->getCAD();
            }
            if ($object->isInitialized('cHF') && null !== $object->getCHF()) {
                $data['CHF'] = $object->getCHF();
            }
            if ($object->isInitialized('cNY') && null !== $object->getCNY()) {
                $data['CNY'] = $object->getCNY();
            }
            if ($object->isInitialized('cZK') && null !== $object->getCZK()) {
                $data['CZK'] = $object->getCZK();
            }
            if ($object->isInitialized('dKK') && null !== $object->getDKK()) {
                $data['DKK'] = $object->getDKK();
            }
            if ($object->isInitialized('eEK') && null !== $object->getEEK()) {
                $data['EEK'] = $object->getEEK();
            }
            if ($object->isInitialized('eUR') && null !== $object->getEUR()) {
                $data['EUR'] = $object->getEUR();
            }
            if ($object->isInitialized('gBP') && null !== $object->getGBP()) {
                $data['GBP'] = $object->getGBP();
            }
            if ($object->isInitialized('gHS') && null !== $object->getGHS()) {
                $data['GHS'] = $object->getGHS();
            }
            if ($object->isInitialized('hKD') && null !== $object->getHKD()) {
                $data['HKD'] = $object->getHKD();
            }
            if ($object->isInitialized('hRK') && null !== $object->getHRK()) {
                $data['HRK'] = $object->getHRK();
            }
            if ($object->isInitialized('hUF') && null !== $object->getHUF()) {
                $data['HUF'] = $object->getHUF();
            }
            if ($object->isInitialized('iDR') && null !== $object->getIDR()) {
                $data['IDR'] = $object->getIDR();
            }
            if ($object->isInitialized('iLS') && null !== $object->getILS()) {
                $data['ILS'] = $object->getILS();
            }
            if ($object->isInitialized('iNR') && null !== $object->getINR()) {
                $data['INR'] = $object->getINR();
            }
            if ($object->isInitialized('jPY') && null !== $object->getJPY()) {
                $data['JPY'] = $object->getJPY();
            }
            if ($object->isInitialized('kRW') && null !== $object->getKRW()) {
                $data['KRW'] = $object->getKRW();
            }
            if ($object->isInitialized('lKR') && null !== $object->getLKR()) {
                $data['LKR'] = $object->getLKR();
            }
            if ($object->isInitialized('lTL') && null !== $object->getLTL()) {
                $data['LTL'] = $object->getLTL();
            }
            if ($object->isInitialized('lVL') && null !== $object->getLVL()) {
                $data['LVL'] = $object->getLVL();
            }
            if ($object->isInitialized('mXN') && null !== $object->getMXN()) {
                $data['MXN'] = $object->getMXN();
            }
            if ($object->isInitialized('mYR') && null !== $object->getMYR()) {
                $data['MYR'] = $object->getMYR();
            }
            if ($object->isInitialized('nOK') && null !== $object->getNOK()) {
                $data['NOK'] = $object->getNOK();
            }
            if ($object->isInitialized('nZD') && null !== $object->getNZD()) {
                $data['NZD'] = $object->getNZD();
            }
            if ($object->isInitialized('pHP') && null !== $object->getPHP()) {
                $data['PHP'] = $object->getPHP();
            }
            if ($object->isInitialized('pLN') && null !== $object->getPLN()) {
                $data['PLN'] = $object->getPLN();
            }
            if ($object->isInitialized('rON') && null !== $object->getRON()) {
                $data['RON'] = $object->getRON();
            }
            if ($object->isInitialized('rUB') && null !== $object->getRUB()) {
                $data['RUB'] = $object->getRUB();
            }
            if ($object->isInitialized('sEK') && null !== $object->getSEK()) {
                $data['SEK'] = $object->getSEK();
            }
            if ($object->isInitialized('sGD') && null !== $object->getSGD()) {
                $data['SGD'] = $object->getSGD();
            }
            if ($object->isInitialized('tHB') && null !== $object->getTHB()) {
                $data['THB'] = $object->getTHB();
            }
            if ($object->isInitialized('tRY') && null !== $object->getTRY()) {
                $data['TRY'] = $object->getTRY();
            }
            if ($object->isInitialized('uSD') && null !== $object->getUSD()) {
                $data['USD'] = $object->getUSD();
            }
            if ($object->isInitialized('zAR') && null !== $object->getZAR()) {
                $data['ZAR'] = $object->getZAR();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProvider\\Api\\Model\\SettingsPaymentMethodLimit' => false];
        }
    }
}