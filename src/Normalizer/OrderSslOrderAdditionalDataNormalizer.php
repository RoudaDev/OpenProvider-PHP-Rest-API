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
    class OrderSslOrderAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\OrderSslOrderAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dns', $data)) {
                $object->setDns($data['dns']);
            }
            if (\array_key_exists('dns_record', $data)) {
                $object->setDnsRecord($data['dns_record']);
            }
            if (\array_key_exists('dns_value', $data)) {
                $object->setDnsValue($data['dns_value']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
            }
            if (\array_key_exists('file_content', $data)) {
                $object->setFileContent($data['file_content']);
            }
            if (\array_key_exists('file_contents', $data)) {
                $object->setFileContents($data['file_contents']);
            }
            if (\array_key_exists('file_location', $data)) {
                $object->setFileLocation($data['file_location']);
            }
            if (\array_key_exists('file_name', $data)) {
                $object->setFileName($data['file_name']);
            }
            if (\array_key_exists('md5', $data)) {
                $object->setMd5($data['md5']);
            }
            if (\array_key_exists('old_cert_format', $data)) {
                $values = [];
                foreach ($data['old_cert_format'] as $value) {
                    $values[] = $value;
                }
                $object->setOldCertFormat($values);
            }
            if (\array_key_exists('sha1', $data)) {
                $object->setSha1($data['sha1']);
            }
            if (\array_key_exists('sha256', $data)) {
                $object->setSha256($data['sha256']);
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $data['dns'] = $object->getDns();
            }
            if ($object->isInitialized('dnsRecord') && null !== $object->getDnsRecord()) {
                $data['dns_record'] = $object->getDnsRecord();
            }
            if ($object->isInitialized('dnsValue') && null !== $object->getDnsValue()) {
                $data['dns_value'] = $object->getDnsValue();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('fileContent') && null !== $object->getFileContent()) {
                $data['file_content'] = $object->getFileContent();
            }
            if ($object->isInitialized('fileContents') && null !== $object->getFileContents()) {
                $data['file_contents'] = $object->getFileContents();
            }
            if ($object->isInitialized('fileLocation') && null !== $object->getFileLocation()) {
                $data['file_location'] = $object->getFileLocation();
            }
            if ($object->isInitialized('fileName') && null !== $object->getFileName()) {
                $data['file_name'] = $object->getFileName();
            }
            if ($object->isInitialized('md5') && null !== $object->getMd5()) {
                $data['md5'] = $object->getMd5();
            }
            if ($object->isInitialized('oldCertFormat') && null !== $object->getOldCertFormat()) {
                $values = [];
                foreach ($object->getOldCertFormat() as $value) {
                    $values[] = $value;
                }
                $data['old_cert_format'] = $values;
            }
            if ($object->isInitialized('sha1') && null !== $object->getSha1()) {
                $data['sha1'] = $object->getSha1();
            }
            if ($object->isInitialized('sha256') && null !== $object->getSha256()) {
                $data['sha256'] = $object->getSha256();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData' => false];
        }
    }
} else {
    class OrderSslOrderAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData';
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
            $object = new \Rouda\OpenProviderAPI\Model\OrderSslOrderAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dns', $data)) {
                $object->setDns($data['dns']);
            }
            if (\array_key_exists('dns_record', $data)) {
                $object->setDnsRecord($data['dns_record']);
            }
            if (\array_key_exists('dns_value', $data)) {
                $object->setDnsValue($data['dns_value']);
            }
            if (\array_key_exists('domain', $data)) {
                $object->setDomain($data['domain']);
            }
            if (\array_key_exists('file_content', $data)) {
                $object->setFileContent($data['file_content']);
            }
            if (\array_key_exists('file_contents', $data)) {
                $object->setFileContents($data['file_contents']);
            }
            if (\array_key_exists('file_location', $data)) {
                $object->setFileLocation($data['file_location']);
            }
            if (\array_key_exists('file_name', $data)) {
                $object->setFileName($data['file_name']);
            }
            if (\array_key_exists('md5', $data)) {
                $object->setMd5($data['md5']);
            }
            if (\array_key_exists('old_cert_format', $data)) {
                $values = [];
                foreach ($data['old_cert_format'] as $value) {
                    $values[] = $value;
                }
                $object->setOldCertFormat($values);
            }
            if (\array_key_exists('sha1', $data)) {
                $object->setSha1($data['sha1']);
            }
            if (\array_key_exists('sha256', $data)) {
                $object->setSha256($data['sha256']);
            }
            if (\array_key_exists('token', $data)) {
                $object->setToken($data['token']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('dns') && null !== $object->getDns()) {
                $data['dns'] = $object->getDns();
            }
            if ($object->isInitialized('dnsRecord') && null !== $object->getDnsRecord()) {
                $data['dns_record'] = $object->getDnsRecord();
            }
            if ($object->isInitialized('dnsValue') && null !== $object->getDnsValue()) {
                $data['dns_value'] = $object->getDnsValue();
            }
            if ($object->isInitialized('domain') && null !== $object->getDomain()) {
                $data['domain'] = $object->getDomain();
            }
            if ($object->isInitialized('fileContent') && null !== $object->getFileContent()) {
                $data['file_content'] = $object->getFileContent();
            }
            if ($object->isInitialized('fileContents') && null !== $object->getFileContents()) {
                $data['file_contents'] = $object->getFileContents();
            }
            if ($object->isInitialized('fileLocation') && null !== $object->getFileLocation()) {
                $data['file_location'] = $object->getFileLocation();
            }
            if ($object->isInitialized('fileName') && null !== $object->getFileName()) {
                $data['file_name'] = $object->getFileName();
            }
            if ($object->isInitialized('md5') && null !== $object->getMd5()) {
                $data['md5'] = $object->getMd5();
            }
            if ($object->isInitialized('oldCertFormat') && null !== $object->getOldCertFormat()) {
                $values = [];
                foreach ($object->getOldCertFormat() as $value) {
                    $values[] = $value;
                }
                $data['old_cert_format'] = $values;
            }
            if ($object->isInitialized('sha1') && null !== $object->getSha1()) {
                $data['sha1'] = $object->getSha1();
            }
            if ($object->isInitialized('sha256') && null !== $object->getSha256()) {
                $data['sha256'] = $object->getSha256();
            }
            if ($object->isInitialized('token') && null !== $object->getToken()) {
                $data['token'] = $object->getToken();
            }
            if ($object->isInitialized('url') && null !== $object->getUrl()) {
                $data['url'] = $object->getUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\OrderSslOrderAdditionalData' => false];
        }
    }
}