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
    class InvoiceInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\InvoiceInvoice';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\InvoiceInvoice';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Rouda\OpenProviderAPI\Model\InvoiceInvoice();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], 'Rouda\\OpenProviderAPI\\Model\\InvoicePrices', 'json', $context));
            }
            if (\array_key_exists('attachment_url', $data)) {
                $object->setAttachmentUrl($data['attachment_url']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('invoice_number', $data)) {
                $object->setInvoiceNumber($data['invoice_number']);
            }
            if (\array_key_exists('invoice_url', $data)) {
                $object->setInvoiceUrl($data['invoice_url']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
            }
            if ($object->isInitialized('attachmentUrl') && null !== $object->getAttachmentUrl()) {
                $data['attachment_url'] = $object->getAttachmentUrl();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('invoiceNumber') && null !== $object->getInvoiceNumber()) {
                $data['invoice_number'] = $object->getInvoiceNumber();
            }
            if ($object->isInitialized('invoiceUrl') && null !== $object->getInvoiceUrl()) {
                $data['invoice_url'] = $object->getInvoiceUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\InvoiceInvoice' => false];
        }
    }
} else {
    class InvoiceInvoiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'Rouda\\OpenProviderAPI\\Model\\InvoiceInvoice';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'Rouda\\OpenProviderAPI\\Model\\InvoiceInvoice';
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
            $object = new \Rouda\OpenProviderAPI\Model\InvoiceInvoice();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('amount', $data)) {
                $object->setAmount($this->denormalizer->denormalize($data['amount'], 'Rouda\\OpenProviderAPI\\Model\\InvoicePrices', 'json', $context));
            }
            if (\array_key_exists('attachment_url', $data)) {
                $object->setAttachmentUrl($data['attachment_url']);
            }
            if (\array_key_exists('creation_date', $data)) {
                $object->setCreationDate($data['creation_date']);
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
            }
            if (\array_key_exists('invoice_number', $data)) {
                $object->setInvoiceNumber($data['invoice_number']);
            }
            if (\array_key_exists('invoice_url', $data)) {
                $object->setInvoiceUrl($data['invoice_url']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $this->normalizer->normalize($object->getAmount(), 'json', $context);
            }
            if ($object->isInitialized('attachmentUrl') && null !== $object->getAttachmentUrl()) {
                $data['attachment_url'] = $object->getAttachmentUrl();
            }
            if ($object->isInitialized('creationDate') && null !== $object->getCreationDate()) {
                $data['creation_date'] = $object->getCreationDate();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('invoiceNumber') && null !== $object->getInvoiceNumber()) {
                $data['invoice_number'] = $object->getInvoiceNumber();
            }
            if ($object->isInitialized('invoiceUrl') && null !== $object->getInvoiceUrl()) {
                $data['invoice_url'] = $object->getInvoiceUrl();
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['Rouda\\OpenProviderAPI\\Model\\InvoiceInvoice' => false];
        }
    }
}