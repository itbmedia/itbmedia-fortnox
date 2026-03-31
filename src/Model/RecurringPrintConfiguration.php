<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringPrintConfiguration extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("language")
     */
    public ?string $language = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("template")
     */
    public ?string $template = null;
}
