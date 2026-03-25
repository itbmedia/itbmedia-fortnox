<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringRowTotals extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("excl_vat")
     */
    public ?float $exclVat = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("incl_vat")
     */
    public ?float $inclVat = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("vat")
     */
    public ?float $vat = null;
}
