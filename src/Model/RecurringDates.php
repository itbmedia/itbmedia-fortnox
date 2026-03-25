<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringDates extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("amount")
     */
    public ?int $amount = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringInvoiceSchedule")
     * @Serializer\SerializedName("invoice")
     */
    public ?RecurringInvoiceSchedule $invoice = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringPeriod")
     * @Serializer\SerializedName("period")
     */
    public ?RecurringPeriod $period = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("unit")
     */
    public ?string $unit = null;
}
