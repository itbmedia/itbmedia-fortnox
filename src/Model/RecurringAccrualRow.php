<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringAccrualRow extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("account_number")
     */
    public ?int $accountNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cost_center_id")
     */
    public ?string $costCenterId = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("credit")
     */
    public ?float $credit = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("debit")
     */
    public ?float $debit = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("project_id")
     */
    public ?string $projectId = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("transaction_info")
     */
    public ?string $transactionInfo = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accrual_id")
     */
    public ?string $accrualId = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    public ?string $id = null;
}
