<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringInvoiceRequest extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created_at")
     */
    public ?string $createdAt = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("error")
     */
    public ?string $error = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    public ?string $id = null;

    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("invoice_ids")
     */
    public array $invoiceIds = [];

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("modified_at")
     */
    public ?string $modifiedAt = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("processed_at")
     */
    public ?string $processedAt = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("processing_mode")
     */
    public ?string $processingMode = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recurring_id")
     */
    public ?string $recurringId = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    public ?string $status = null;
}
