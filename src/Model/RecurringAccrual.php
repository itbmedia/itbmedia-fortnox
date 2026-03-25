<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringAccrual extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("accrual_account_number")
     */
    public ?int $accrualAccountNumber = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("amount")
     */
    public ?float $amount = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recurring_id")
     */
    public ?string $recurringId = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("revenue_account_number")
     */
    public ?int $revenueAccountNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vat_option")
     */
    public ?string $vatOption = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    public ?string $id = null;

    /**
     * @var RecurringAccrualRow[]
     * @Serializer\Type("array<ITBMedia\FortnoxBundle\Model\RecurringAccrualRow>")
     * @Serializer\SerializedName("rows")
     */
    public array $rows = [];
}
