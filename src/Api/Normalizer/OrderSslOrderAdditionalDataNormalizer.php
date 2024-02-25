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
    class OrderSslOrderAdditionalDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderAdditionalData';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProvider\Api\Model\OrderSslOrderAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dns', $data) && $data['dns'] !== null) {
                $object->setDns($data['dns']);
            }
            elseif (\array_key_exists('dns', $data) && $data['dns'] === null) {
                $object->setDns(null);
            }
            if (\array_key_exists('dns_record', $data) && $data['dns_record'] !== null) {
                $object->setDnsRecord($data['dns_record']);
            }
            elseif (\array_key_exists('dns_record', $data) && $data['dns_record'] === null) {
                $object->setDnsRecord(null);
            }
            if (\array_key_exists('dns_value', $data) && $data['dns_value'] !== null) {
                $object->setDnsValue($data['dns_value']);
            }
            elseif (\array_key_exists('dns_value', $data) && $data['dns_value'] === null) {
                $object->setDnsValue(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($data['domain']);
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('file_content', $data) && $data['file_content'] !== null) {
                $object->setFileContent($data['file_content']);
            }
            elseif (\array_key_exists('file_content', $data) && $data['file_content'] === null) {
                $object->setFileContent(null);
            }
            if (\array_key_exists('file_contents', $data) && $data['file_contents'] !== null) {
                $object->setFileContents($data['file_contents']);
            }
            elseif (\array_key_exists('file_contents', $data) && $data['file_contents'] === null) {
                $object->setFileContents(null);
            }
            if (\array_key_exists('file_location', $data) && $data['file_location'] !== null) {
                $object->setFileLocation($data['file_location']);
            }
            elseif (\array_key_exists('file_location', $data) && $data['file_location'] === null) {
                $object->setFileLocation(null);
            }
            if (\array_key_exists('file_name', $data) && $data['file_name'] !== null) {
                $object->setFileName($data['file_name']);
            }
            elseif (\array_key_exists('file_name', $data) && $data['file_name'] === null) {
                $object->setFileName(null);
            }
            if (\array_key_exists('md5', $data) && $data['md5'] !== null) {
                $object->setMd5($data['md5']);
            }
            elseif (\array_key_exists('md5', $data) && $data['md5'] === null) {
                $object->setMd5(null);
            }
            if (\array_key_exists('old_cert_format', $data) && $data['old_cert_format'] !== null) {
                $values = [];
                foreach ($data['old_cert_format'] as $value) {
                    $values[] = $value;
                }
                $object->setOldCertFormat($values);
            }
            elseif (\array_key_exists('old_cert_format', $data) && $data['old_cert_format'] === null) {
                $object->setOldCertFormat(null);
            }
            if (\array_key_exists('sha1', $data) && $data['sha1'] !== null) {
                $object->setSha1($data['sha1']);
            }
            elseif (\array_key_exists('sha1', $data) && $data['sha1'] === null) {
                $object->setSha1(null);
            }
            if (\array_key_exists('sha256', $data) && $data['sha256'] !== null) {
                $object->setSha256($data['sha256']);
            }
            elseif (\array_key_exists('sha256', $data) && $data['sha256'] === null) {
                $object->setSha256(null);
            }
            if (\array_key_exists('token', $data) && $data['token'] !== null) {
                $object->setToken($data['token']);
            }
            elseif (\array_key_exists('token', $data) && $data['token'] === null) {
                $object->setToken(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderAdditionalData' => false];
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
            return $type === 'Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderAdditionalData';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderAdditionalData';
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
            $object = new \Rouda\OpenProvider\Api\Model\OrderSslOrderAdditionalData();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('dns', $data) && $data['dns'] !== null) {
                $object->setDns($data['dns']);
            }
            elseif (\array_key_exists('dns', $data) && $data['dns'] === null) {
                $object->setDns(null);
            }
            if (\array_key_exists('dns_record', $data) && $data['dns_record'] !== null) {
                $object->setDnsRecord($data['dns_record']);
            }
            elseif (\array_key_exists('dns_record', $data) && $data['dns_record'] === null) {
                $object->setDnsRecord(null);
            }
            if (\array_key_exists('dns_value', $data) && $data['dns_value'] !== null) {
                $object->setDnsValue($data['dns_value']);
            }
            elseif (\array_key_exists('dns_value', $data) && $data['dns_value'] === null) {
                $object->setDnsValue(null);
            }
            if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
                $object->setDomain($data['domain']);
            }
            elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
                $object->setDomain(null);
            }
            if (\array_key_exists('file_content', $data) && $data['file_content'] !== null) {
                $object->setFileContent($data['file_content']);
            }
            elseif (\array_key_exists('file_content', $data) && $data['file_content'] === null) {
                $object->setFileContent(null);
            }
            if (\array_key_exists('file_contents', $data) && $data['file_contents'] !== null) {
                $object->setFileContents($data['file_contents']);
            }
            elseif (\array_key_exists('file_contents', $data) && $data['file_contents'] === null) {
                $object->setFileContents(null);
            }
            if (\array_key_exists('file_location', $data) && $data['file_location'] !== null) {
                $object->setFileLocation($data['file_location']);
            }
            elseif (\array_key_exists('file_location', $data) && $data['file_location'] === null) {
                $object->setFileLocation(null);
            }
            if (\array_key_exists('file_name', $data) && $data['file_name'] !== null) {
                $object->setFileName($data['file_name']);
            }
            elseif (\array_key_exists('file_name', $data) && $data['file_name'] === null) {
                $object->setFileName(null);
            }
            if (\array_key_exists('md5', $data) && $data['md5'] !== null) {
                $object->setMd5($data['md5']);
            }
            elseif (\array_key_exists('md5', $data) && $data['md5'] === null) {
                $object->setMd5(null);
            }
            if (\array_key_exists('old_cert_format', $data) && $data['old_cert_format'] !== null) {
                $values = [];
                foreach ($data['old_cert_format'] as $value) {
                    $values[] = $value;
                }
                $object->setOldCertFormat($values);
            }
            elseif (\array_key_exists('old_cert_format', $data) && $data['old_cert_format'] === null) {
                $object->setOldCertFormat(null);
            }
            if (\array_key_exists('sha1', $data) && $data['sha1'] !== null) {
                $object->setSha1($data['sha1']);
            }
            elseif (\array_key_exists('sha1', $data) && $data['sha1'] === null) {
                $object->setSha1(null);
            }
            if (\array_key_exists('sha256', $data) && $data['sha256'] !== null) {
                $object->setSha256($data['sha256']);
            }
            elseif (\array_key_exists('sha256', $data) && $data['sha256'] === null) {
                $object->setSha256(null);
            }
            if (\array_key_exists('token', $data) && $data['token'] !== null) {
                $object->setToken($data['token']);
            }
            elseif (\array_key_exists('token', $data) && $data['token'] === null) {
                $object->setToken(null);
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
            return ['Rouda\\OpenProvider\\Api\\Model\\OrderSslOrderAdditionalData' => false];
        }
    }
}