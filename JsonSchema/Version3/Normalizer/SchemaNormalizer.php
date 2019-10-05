<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\JsonSchema\Version3\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SchemaNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Jane\OpenApi\JsonSchema\Version3\Model\Schema;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\JsonSchema\Version3\Model\Schema();
        $data = clone $data;
        if (property_exists($data, 'title') && $data->{'title'} !== null) {
            $object->setTitle($data->{'title'});
            unset($data->{'title'});
        }
        if (property_exists($data, 'multipleOf') && $data->{'multipleOf'} !== null) {
            $object->setMultipleOf($data->{'multipleOf'});
            unset($data->{'multipleOf'});
        }
        if (property_exists($data, 'maximum') && $data->{'maximum'} !== null) {
            $object->setMaximum($data->{'maximum'});
            unset($data->{'maximum'});
        }
        if (property_exists($data, 'exclusiveMaximum') && $data->{'exclusiveMaximum'} !== null) {
            $object->setExclusiveMaximum($data->{'exclusiveMaximum'});
            unset($data->{'exclusiveMaximum'});
        }
        if (property_exists($data, 'minimum') && $data->{'minimum'} !== null) {
            $object->setMinimum($data->{'minimum'});
            unset($data->{'minimum'});
        }
        if (property_exists($data, 'exclusiveMinimum') && $data->{'exclusiveMinimum'} !== null) {
            $object->setExclusiveMinimum($data->{'exclusiveMinimum'});
            unset($data->{'exclusiveMinimum'});
        }
        if (property_exists($data, 'maxLength') && $data->{'maxLength'} !== null) {
            $object->setMaxLength($data->{'maxLength'});
            unset($data->{'maxLength'});
        }
        if (property_exists($data, 'minLength') && $data->{'minLength'} !== null) {
            $object->setMinLength($data->{'minLength'});
            unset($data->{'minLength'});
        }
        if (property_exists($data, 'pattern') && $data->{'pattern'} !== null) {
            $object->setPattern($data->{'pattern'});
            unset($data->{'pattern'});
        }
        if (property_exists($data, 'maxItems') && $data->{'maxItems'} !== null) {
            $object->setMaxItems($data->{'maxItems'});
            unset($data->{'maxItems'});
        }
        if (property_exists($data, 'minItems') && $data->{'minItems'} !== null) {
            $object->setMinItems($data->{'minItems'});
            unset($data->{'minItems'});
        }
        if (property_exists($data, 'uniqueItems') && $data->{'uniqueItems'} !== null) {
            $object->setUniqueItems($data->{'uniqueItems'});
            unset($data->{'uniqueItems'});
        }
        if (property_exists($data, 'maxProperties') && $data->{'maxProperties'} !== null) {
            $object->setMaxProperties($data->{'maxProperties'});
            unset($data->{'maxProperties'});
        }
        if (property_exists($data, 'minProperties') && $data->{'minProperties'} !== null) {
            $object->setMinProperties($data->{'minProperties'});
            unset($data->{'minProperties'});
        }
        if (property_exists($data, 'required') && $data->{'required'} !== null) {
            $values = [];
            foreach ($data->{'required'} as $value) {
                $values[] = $value;
            }
            $object->setRequired($values);
            unset($data->{'required'});
        }
        if (property_exists($data, 'enum') && $data->{'enum'} !== null) {
            $values_1 = [];
            foreach ($data->{'enum'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEnum($values_1);
            unset($data->{'enum'});
        }
        if (property_exists($data, 'type') && $data->{'type'} !== null) {
            $object->setType($data->{'type'});
            unset($data->{'type'});
        }
        if (property_exists($data, 'not') && $data->{'not'} !== null) {
            $value_2 = $data->{'not'};
            if (\is_object($data->{'not'})) {
                $value_2 = $this->denormalizer->denormalize($data->{'not'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
            } elseif (\is_object($data->{'not'}) and isset($data->{'not'}->{'$ref'})) {
                $value_2 = $this->denormalizer->denormalize($data->{'not'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
            }
            $object->setNot($value_2);
            unset($data->{'not'});
        }
        if (property_exists($data, 'allOf') && $data->{'allOf'} !== null) {
            $values_2 = [];
            foreach ($data->{'allOf'} as $value_3) {
                $value_4 = $value_3;
                if (\is_object($value_3)) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
                } elseif (\is_object($value_3) and isset($value_3->{'$ref'})) {
                    $value_4 = $this->denormalizer->denormalize($value_3, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
                }
                $values_2[] = $value_4;
            }
            $object->setAllOf($values_2);
            unset($data->{'allOf'});
        }
        if (property_exists($data, 'oneOf') && $data->{'oneOf'} !== null) {
            $values_3 = [];
            foreach ($data->{'oneOf'} as $value_5) {
                $value_6 = $value_5;
                if (\is_object($value_5)) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
                } elseif (\is_object($value_5) and isset($value_5->{'$ref'})) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
                }
                $values_3[] = $value_6;
            }
            $object->setOneOf($values_3);
            unset($data->{'oneOf'});
        }
        if (property_exists($data, 'anyOf') && $data->{'anyOf'} !== null) {
            $values_4 = [];
            foreach ($data->{'anyOf'} as $value_7) {
                $value_8 = $value_7;
                if (\is_object($value_7)) {
                    $value_8 = $this->denormalizer->denormalize($value_7, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
                } elseif (\is_object($value_7) and isset($value_7->{'$ref'})) {
                    $value_8 = $this->denormalizer->denormalize($value_7, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
                }
                $values_4[] = $value_8;
            }
            $object->setAnyOf($values_4);
            unset($data->{'anyOf'});
        }
        if (property_exists($data, 'items') && $data->{'items'} !== null) {
            $value_9 = $data->{'items'};
            if (\is_object($data->{'items'})) {
                $value_9 = $this->denormalizer->denormalize($data->{'items'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
            } elseif (\is_object($data->{'items'}) and isset($data->{'items'}->{'$ref'})) {
                $value_9 = $this->denormalizer->denormalize($data->{'items'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
            }
            $object->setItems($value_9);
            unset($data->{'items'});
        }
        if (property_exists($data, 'properties') && $data->{'properties'} !== null) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'properties'} as $key => $value_10) {
                $value_11 = $value_10;
                if (\is_object($value_10)) {
                    $value_11 = $this->denormalizer->denormalize($value_10, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
                } elseif (\is_object($value_10) and isset($value_10->{'$ref'})) {
                    $value_11 = $this->denormalizer->denormalize($value_10, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
                }
                $values_5[$key] = $value_11;
            }
            $object->setProperties($values_5);
            unset($data->{'properties'});
        }
        if (property_exists($data, 'additionalProperties') && $data->{'additionalProperties'} !== null) {
            $value_12 = $data->{'additionalProperties'};
            if (\is_object($data->{'additionalProperties'})) {
                $value_12 = $this->denormalizer->denormalize($data->{'additionalProperties'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Schema', 'json', $context);
            } elseif (\is_object($data->{'additionalProperties'}) and isset($data->{'additionalProperties'}->{'$ref'})) {
                $value_12 = $this->denormalizer->denormalize($data->{'additionalProperties'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Reference', 'json', $context);
            } elseif (\is_bool($data->{'additionalProperties'})) {
                $value_12 = $data->{'additionalProperties'};
            }
            $object->setAdditionalProperties($value_12);
            unset($data->{'additionalProperties'});
        }
        if (property_exists($data, 'description') && $data->{'description'} !== null) {
            $object->setDescription($data->{'description'});
            unset($data->{'description'});
        }
        if (property_exists($data, 'format') && $data->{'format'} !== null) {
            $object->setFormat($data->{'format'});
            unset($data->{'format'});
        }
        if (property_exists($data, 'default') && $data->{'default'} !== null) {
            $object->setDefault($data->{'default'});
            unset($data->{'default'});
        }
        if (property_exists($data, 'nullable') && $data->{'nullable'} !== null) {
            $object->setNullable($data->{'nullable'});
            unset($data->{'nullable'});
        }
        if (property_exists($data, 'discriminator') && $data->{'discriminator'} !== null) {
            $object->setDiscriminator($this->denormalizer->denormalize($data->{'discriminator'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\Discriminator', 'json', $context));
            unset($data->{'discriminator'});
        }
        if (property_exists($data, 'readOnly') && $data->{'readOnly'} !== null) {
            $object->setReadOnly($data->{'readOnly'});
            unset($data->{'readOnly'});
        }
        if (property_exists($data, 'writeOnly') && $data->{'writeOnly'} !== null) {
            $object->setWriteOnly($data->{'writeOnly'});
            unset($data->{'writeOnly'});
        }
        if (property_exists($data, 'example') && $data->{'example'} !== null) {
            $object->setExample($data->{'example'});
            unset($data->{'example'});
        }
        if (property_exists($data, 'externalDocs') && $data->{'externalDocs'} !== null) {
            $object->setExternalDocs($this->denormalizer->denormalize($data->{'externalDocs'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\ExternalDocumentation', 'json', $context));
            unset($data->{'externalDocs'});
        }
        if (property_exists($data, 'deprecated') && $data->{'deprecated'} !== null) {
            $object->setDeprecated($data->{'deprecated'});
            unset($data->{'deprecated'});
        }
        if (property_exists($data, 'xml') && $data->{'xml'} !== null) {
            $object->setXml($this->denormalizer->denormalize($data->{'xml'}, 'Jane\\OpenApi\\JsonSchema\\Version3\\Model\\XML', 'json', $context));
            unset($data->{'xml'});
        }
        foreach ($data as $key_1 => $value_13) {
            if (preg_match('/^x-/', $key_1)) {
                $object[$key_1] = $value_13;
            }
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTitle()) {
            $data->{'title'} = $object->getTitle();
        }
        if (null !== $object->getMultipleOf()) {
            $data->{'multipleOf'} = $object->getMultipleOf();
        }
        if (null !== $object->getMaximum()) {
            $data->{'maximum'} = $object->getMaximum();
        }
        if (null !== $object->getExclusiveMaximum()) {
            $data->{'exclusiveMaximum'} = $object->getExclusiveMaximum();
        }
        if (null !== $object->getMinimum()) {
            $data->{'minimum'} = $object->getMinimum();
        }
        if (null !== $object->getExclusiveMinimum()) {
            $data->{'exclusiveMinimum'} = $object->getExclusiveMinimum();
        }
        if (null !== $object->getMaxLength()) {
            $data->{'maxLength'} = $object->getMaxLength();
        }
        if (null !== $object->getMinLength()) {
            $data->{'minLength'} = $object->getMinLength();
        }
        if (null !== $object->getPattern()) {
            $data->{'pattern'} = $object->getPattern();
        }
        if (null !== $object->getMaxItems()) {
            $data->{'maxItems'} = $object->getMaxItems();
        }
        if (null !== $object->getMinItems()) {
            $data->{'minItems'} = $object->getMinItems();
        }
        if (null !== $object->getUniqueItems()) {
            $data->{'uniqueItems'} = $object->getUniqueItems();
        }
        if (null !== $object->getMaxProperties()) {
            $data->{'maxProperties'} = $object->getMaxProperties();
        }
        if (null !== $object->getMinProperties()) {
            $data->{'minProperties'} = $object->getMinProperties();
        }
        if (null !== $object->getRequired()) {
            $values = [];
            foreach ($object->getRequired() as $value) {
                $values[] = $value;
            }
            $data->{'required'} = $values;
        }
        if (null !== $object->getEnum()) {
            $values_1 = [];
            foreach ($object->getEnum() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'enum'} = $values_1;
        }
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getNot()) {
            $value_2 = $object->getNot();
            if (\is_object($object->getNot())) {
                $value_2 = $this->normalizer->normalize($object->getNot(), 'json', $context);
            } elseif (\is_object($object->getNot())) {
                $value_2 = $this->normalizer->normalize($object->getNot(), 'json', $context);
            }
            $data->{'not'} = $value_2;
        }
        if (null !== $object->getAllOf()) {
            $values_2 = [];
            foreach ($object->getAllOf() as $value_3) {
                $value_4 = $value_3;
                if (\is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                } elseif (\is_object($value_3)) {
                    $value_4 = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $values_2[] = $value_4;
            }
            $data->{'allOf'} = $values_2;
        }
        if (null !== $object->getOneOf()) {
            $values_3 = [];
            foreach ($object->getOneOf() as $value_5) {
                $value_6 = $value_5;
                if (\is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                } elseif (\is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $values_3[] = $value_6;
            }
            $data->{'oneOf'} = $values_3;
        }
        if (null !== $object->getAnyOf()) {
            $values_4 = [];
            foreach ($object->getAnyOf() as $value_7) {
                $value_8 = $value_7;
                if (\is_object($value_7)) {
                    $value_8 = $this->normalizer->normalize($value_7, 'json', $context);
                } elseif (\is_object($value_7)) {
                    $value_8 = $this->normalizer->normalize($value_7, 'json', $context);
                }
                $values_4[] = $value_8;
            }
            $data->{'anyOf'} = $values_4;
        }
        if (null !== $object->getItems()) {
            $value_9 = $object->getItems();
            if (\is_object($object->getItems())) {
                $value_9 = $this->normalizer->normalize($object->getItems(), 'json', $context);
            } elseif (\is_object($object->getItems())) {
                $value_9 = $this->normalizer->normalize($object->getItems(), 'json', $context);
            }
            $data->{'items'} = $value_9;
        }
        if (null !== $object->getProperties()) {
            $values_5 = new \stdClass();
            foreach ($object->getProperties() as $key => $value_10) {
                $value_11 = $value_10;
                if (\is_object($value_10)) {
                    $value_11 = $this->normalizer->normalize($value_10, 'json', $context);
                } elseif (\is_object($value_10)) {
                    $value_11 = $this->normalizer->normalize($value_10, 'json', $context);
                }
                $values_5->{$key} = $value_11;
            }
            $data->{'properties'} = $values_5;
        }
        if (null !== $object->getAdditionalProperties()) {
            $value_12 = $object->getAdditionalProperties();
            if (\is_object($object->getAdditionalProperties())) {
                $value_12 = $this->normalizer->normalize($object->getAdditionalProperties(), 'json', $context);
            } elseif (\is_object($object->getAdditionalProperties())) {
                $value_12 = $this->normalizer->normalize($object->getAdditionalProperties(), 'json', $context);
            } elseif (\is_bool($object->getAdditionalProperties())) {
                $value_12 = $object->getAdditionalProperties();
            }
            $data->{'additionalProperties'} = $value_12;
        }
        if (null !== $object->getDescription()) {
            $data->{'description'} = $object->getDescription();
        }
        if (null !== $object->getFormat()) {
            $data->{'format'} = $object->getFormat();
        }
        if (null !== $object->getDefault()) {
            $data->{'default'} = $object->getDefault();
        }
        if (null !== $object->getNullable()) {
            $data->{'nullable'} = $object->getNullable();
        }
        if (null !== $object->getDiscriminator()) {
            $data->{'discriminator'} = $this->normalizer->normalize($object->getDiscriminator(), 'json', $context);
        }
        if (null !== $object->getReadOnly()) {
            $data->{'readOnly'} = $object->getReadOnly();
        }
        if (null !== $object->getWriteOnly()) {
            $data->{'writeOnly'} = $object->getWriteOnly();
        }
        if (null !== $object->getExample()) {
            $data->{'example'} = $object->getExample();
        }
        if (null !== $object->getExternalDocs()) {
            $data->{'externalDocs'} = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }
        if (null !== $object->getDeprecated()) {
            $data->{'deprecated'} = $object->getDeprecated();
        }
        if (null !== $object->getXml()) {
            $data->{'xml'} = $this->normalizer->normalize($object->getXml(), 'json', $context);
        }
        foreach ($object as $key_1 => $value_13) {
            if (preg_match('/^x-/', $key_1)) {
                $data->{$key_1} = $value_13;
            }
        }

        return $data;
    }
}
