<?php

namespace ITBMedia\FortnoxBundle\ExclusionStrategy;

use JMS\Serializer\Exclusion\ExclusionStrategyInterface;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;

class ReadOnlyExclusionStrategy implements ExclusionStrategyInterface
{
  public function shouldSkipClass(ClassMetadata $metadata, \JMS\Serializer\Context $context): bool
  {
    return false;
  }

  public function shouldSkipProperty(PropertyMetadata $property, \JMS\Serializer\Context $context): bool
  {
    return $property->readOnly;
  }
}
