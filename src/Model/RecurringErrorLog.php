<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringErrorLog extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("error_code")
     */
    public ?string $errorCode = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("error_message")
     */
    public ?string $errorMessage = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("invoice_number")
     */
    public ?int $invoiceNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("invoice_period_start")
     */
    public ?string $invoicePeriodStart = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("source")
     */
    public ?string $source = null;
}
