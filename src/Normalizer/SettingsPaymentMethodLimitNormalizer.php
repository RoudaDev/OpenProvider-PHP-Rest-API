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
    class SettingsPaymentMethodLimitNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethodLimit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethodLimit';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\SettingsPaymentMethodLimit();
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
            if (\array_key_exists('AUD', $data)) {
                $object->setAUD($data['AUD']);
            }
            if (\array_key_exists('BGN', $data)) {
                $object->setBGN($data['BGN']);
            }
            if (\array_key_exists('BRL', $data)) {
                $object->setBRL($data['BRL']);
            }
            if (\array_key_exists('CAD', $data)) {
                $object->setCAD($data['CAD']);
            }
            if (\array_key_exists('CHF', $data)) {
                $object->setCHF($data['CHF']);
            }
            if (\array_key_exists('CNY', $data)) {
                $object->setCNY($data['CNY']);
            }
            if (\array_key_exists('CZK', $data)) {
                $object->setCZK($data['CZK']);
            }
            if (\array_key_exists('DKK', $data)) {
                $object->setDKK($data['DKK']);
            }
            if (\array_key_exists('EEK', $data)) {
                $object->setEEK($data['EEK']);
            }
            if (\array_key_exists('EUR', $data)) {
                $object->setEUR($data['EUR']);
            }
            if (\array_key_exists('GBP', $data)) {
                $object->setGBP($data['GBP']);
            }
            if (\array_key_exists('GHS', $data)) {
                $object->setGHS($data['GHS']);
            }
            if (\array_key_exists('HKD', $data)) {
                $object->setHKD($data['HKD']);
            }
            if (\array_key_exists('HRK', $data)) {
                $object->setHRK($data['HRK']);
            }
            if (\array_key_exists('HUF', $data)) {
                $object->setHUF($data['HUF']);
            }
            if (\array_key_exists('IDR', $data)) {
                $object->setIDR($data['IDR']);
            }
            if (\array_key_exists('ILS', $data)) {
                $object->setILS($data['ILS']);
            }
            if (\array_key_exists('INR', $data)) {
                $object->setINR($data['INR']);
            }
            if (\array_key_exists('JPY', $data)) {
                $object->setJPY($data['JPY']);
            }
            if (\array_key_exists('KRW', $data)) {
                $object->setKRW($data['KRW']);
            }
            if (\array_key_exists('LKR', $data)) {
                $object->setLKR($data['LKR']);
            }
            if (\array_key_exists('LTL', $data)) {
                $object->setLTL($data['LTL']);
            }
            if (\array_key_exists('LVL', $data)) {
                $object->setLVL($data['LVL']);
            }
            if (\array_key_exists('MXN', $data)) {
                $object->setMXN($data['MXN']);
            }
            if (\array_key_exists('MYR', $data)) {
                $object->setMYR($data['MYR']);
            }
            if (\array_key_exists('NOK', $data)) {
                $object->setNOK($data['NOK']);
            }
            if (\array_key_exists('NZD', $data)) {
                $object->setNZD($data['NZD']);
            }
            if (\array_key_exists('PHP', $data)) {
                $object->setPHP($data['PHP']);
            }
            if (\array_key_exists('PLN', $data)) {
                $object->setPLN($data['PLN']);
            }
            if (\array_key_exists('RON', $data)) {
                $object->setRON($data['RON']);
            }
            if (\array_key_exists('RUB', $data)) {
                $object->setRUB($data['RUB']);
            }
            if (\array_key_exists('SEK', $data)) {
                $object->setSEK($data['SEK']);
            }
            if (\array_key_exists('SGD', $data)) {
                $object->setSGD($data['SGD']);
            }
            if (\array_key_exists('THB', $data)) {
                $object->setTHB($data['THB']);
            }
            if (\array_key_exists('TRY', $data)) {
                $object->setTRY($data['TRY']);
            }
            if (\array_key_exists('USD', $data)) {
                $object->setUSD($data['USD']);
            }
            if (\array_key_exists('ZAR', $data)) {
                $object->setZAR($data['ZAR']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethodLimit' => false];
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
            return $type === 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethodLimit';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethodLimit';
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
            $object = new \Rouda\OpenProviderAPI\Model\SettingsPaymentMethodLimit();
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
            if (\array_key_exists('AUD', $data)) {
                $object->setAUD($data['AUD']);
            }
            if (\array_key_exists('BGN', $data)) {
                $object->setBGN($data['BGN']);
            }
            if (\array_key_exists('BRL', $data)) {
                $object->setBRL($data['BRL']);
            }
            if (\array_key_exists('CAD', $data)) {
                $object->setCAD($data['CAD']);
            }
            if (\array_key_exists('CHF', $data)) {
                $object->setCHF($data['CHF']);
            }
            if (\array_key_exists('CNY', $data)) {
                $object->setCNY($data['CNY']);
            }
            if (\array_key_exists('CZK', $data)) {
                $object->setCZK($data['CZK']);
            }
            if (\array_key_exists('DKK', $data)) {
                $object->setDKK($data['DKK']);
            }
            if (\array_key_exists('EEK', $data)) {
                $object->setEEK($data['EEK']);
            }
            if (\array_key_exists('EUR', $data)) {
                $object->setEUR($data['EUR']);
            }
            if (\array_key_exists('GBP', $data)) {
                $object->setGBP($data['GBP']);
            }
            if (\array_key_exists('GHS', $data)) {
                $object->setGHS($data['GHS']);
            }
            if (\array_key_exists('HKD', $data)) {
                $object->setHKD($data['HKD']);
            }
            if (\array_key_exists('HRK', $data)) {
                $object->setHRK($data['HRK']);
            }
            if (\array_key_exists('HUF', $data)) {
                $object->setHUF($data['HUF']);
            }
            if (\array_key_exists('IDR', $data)) {
                $object->setIDR($data['IDR']);
            }
            if (\array_key_exists('ILS', $data)) {
                $object->setILS($data['ILS']);
            }
            if (\array_key_exists('INR', $data)) {
                $object->setINR($data['INR']);
            }
            if (\array_key_exists('JPY', $data)) {
                $object->setJPY($data['JPY']);
            }
            if (\array_key_exists('KRW', $data)) {
                $object->setKRW($data['KRW']);
            }
            if (\array_key_exists('LKR', $data)) {
                $object->setLKR($data['LKR']);
            }
            if (\array_key_exists('LTL', $data)) {
                $object->setLTL($data['LTL']);
            }
            if (\array_key_exists('LVL', $data)) {
                $object->setLVL($data['LVL']);
            }
            if (\array_key_exists('MXN', $data)) {
                $object->setMXN($data['MXN']);
            }
            if (\array_key_exists('MYR', $data)) {
                $object->setMYR($data['MYR']);
            }
            if (\array_key_exists('NOK', $data)) {
                $object->setNOK($data['NOK']);
            }
            if (\array_key_exists('NZD', $data)) {
                $object->setNZD($data['NZD']);
            }
            if (\array_key_exists('PHP', $data)) {
                $object->setPHP($data['PHP']);
            }
            if (\array_key_exists('PLN', $data)) {
                $object->setPLN($data['PLN']);
            }
            if (\array_key_exists('RON', $data)) {
                $object->setRON($data['RON']);
            }
            if (\array_key_exists('RUB', $data)) {
                $object->setRUB($data['RUB']);
            }
            if (\array_key_exists('SEK', $data)) {
                $object->setSEK($data['SEK']);
            }
            if (\array_key_exists('SGD', $data)) {
                $object->setSGD($data['SGD']);
            }
            if (\array_key_exists('THB', $data)) {
                $object->setTHB($data['THB']);
            }
            if (\array_key_exists('TRY', $data)) {
                $object->setTRY($data['TRY']);
            }
            if (\array_key_exists('USD', $data)) {
                $object->setUSD($data['USD']);
            }
            if (\array_key_exists('ZAR', $data)) {
                $object->setZAR($data['ZAR']);
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
            return ['Rouda\\OpenProviderAPI\\Model\\SettingsPaymentMethodLimit' => false];
        }
    }
}