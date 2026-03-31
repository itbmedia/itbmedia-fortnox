<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class RecurringCustomer extends AbstractSerializableModel
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
     * @Serializer\SerializedName("country_code")
     */
    public ?string $country_code = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    public ?string $name = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("number")
     */
    public ?string $number = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("phone")
     */
    public ?string $phone = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("zip")
     */
    public ?string $zip = null;
}
