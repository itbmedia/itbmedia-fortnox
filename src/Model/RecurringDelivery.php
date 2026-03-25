<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringDelivery extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("address")
     */
    public ?string $address = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("city")
     */
    public ?string $city = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("country")
     */
    public ?string $country = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    public ?string $name = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("phone")
     */
    public ?string $phone = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("term_code")
     */
    public ?string $termCode = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type_code")
     */
    public ?string $typeCode = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("zip")
     */
    public ?string $zip = null;
}
