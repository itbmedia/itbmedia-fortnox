<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringTaxReduction extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("amount")
     */
    public ?float $amount = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("applicant_name")
     */
    public ?string $applicantName = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ssn")
     */
    public ?string $ssn = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created_at")
     */
    public ?string $createdAt = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    public ?string $id = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("modified_at")
     */
    public ?string $modifiedAt = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recurring_id")
     */
    public ?string $recurringId = null;
}
