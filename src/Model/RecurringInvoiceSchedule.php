<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringInvoiceSchedule extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("anchor_day")
     */
    public ?int $anchorDay = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("invoice_date")
     */
    public ?string $invoiceDate = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("last_date")
     */
    public ?string $lastDate = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("processing_date")
     */
    public ?string $processingDate = null;
}
