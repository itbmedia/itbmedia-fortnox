<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringTaxReductionData extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cost_type")
     */
    public ?string $costType = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("hours_to_report")
     */
    public ?float $hoursToReport = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tax_reduction_type")
     */
    public ?string $taxReductionType = null;
}
