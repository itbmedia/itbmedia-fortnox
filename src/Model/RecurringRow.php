<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringRow extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("account_number")
     */
    public ?int $accountNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("article_id")
     */
    public ?string $articleId = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cost_center_id")
     */
    public ?string $costCenterId = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     */
    public ?string $description = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("discount")
     */
    public ?float $discount = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("discount_type")
     */
    public ?string $discountType = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("price")
     */
    public ?float $price = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("project_id")
     */
    public ?string $projectId = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("quantity")
     */
    public ?float $quantity = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recurring_id")
     */
    public ?string $recurringId = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("row_index")
     */
    public ?int $rowIndex = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    public ?string $type = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("unit")
     */
    public ?string $unit = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("vat_percentage")
     */
    public ?float $vatPercentage = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created_at")
     */
    public ?string $createdAt = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deviation_id")
     */
    public ?string $deviationId = null;

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
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringTaxReductionData")
     * @Serializer\SerializedName("tax_reduction_data")
     */
    public ?RecurringTaxReductionData $taxReductionData = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringRowTotals")
     * @Serializer\SerializedName("totals")
     */
    public ?RecurringRowTotals $totals = null;
}
