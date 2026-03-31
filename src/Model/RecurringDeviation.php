<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringDeviation extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deviation_type")
     */
    public ?string $deviationType = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("invoice_period_start")
     */
    public ?string $invoicePeriodStart = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("repeat_amount")
     */
    public ?int $repeatAmount = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("repeat_unit")
     */
    public ?string $repeatUnit = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringAccrual")
     * @Serializer\SerializedName("accrual")
     */
    public ?RecurringAccrual $accrual = null;

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

    /**
     * @var RecurringRow[]
     * @Serializer\Type("array<ITBMedia\FortnoxBundle\Model\RecurringRow>")
     * @Serializer\SerializedName("rows")
     */
    public array $rows = [];
}
