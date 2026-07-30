<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class TaxReduction extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("@url")
     */
    public ?string $url = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("amount")
     */
    public ?float $amount = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("ApprovedAmount")
     */
    public ?float $approvedAmount = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("AskedAmount")
     */
    public ?float $askedAmount = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("applicant_name")
     */
    public ?string $applicantName = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("BilledAmount")
     */
    public ?float $billedAmount = null;


    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CustomerName")
     */
    public ?string $customerName = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cost_type")
     */
    public ?string $costType = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tax_reduction_type")
     */
    public ?string $taxReductionType = null;

    /**
     * @Serializer\Type("double")
     * @Serializer\SerializedName("hours_to_report")
     */
    public ?float $hoursToReport = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("Id")
     */
    public ?int $fortnoxId = null;

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
     * @Serializer\SerializedName("PropertyDesignation")
     */
    public ?string $propertyDesignation = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ReferenceDocumentType")
     */
    public ?string $referenceDocumentType = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ReferenceNumber")
     */
    public ?string $referenceNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("RequestSent")
     */
    public ?string $requestSent = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ResidenceAssociationOrganisationNumber")
     */
    public ?string $residenceAssociationOrganisationNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SocialSecurityNumber")
     */
    public ?string $socialSecurityNumber = null;

    /**
     * @Serializer\Type("array")
     * @Serializer\SerializedName("TaxReductionAmounts")
     */
    public ?array $taxReductionAmounts = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TypeOfReduction")
     */
    public ?string $typeOfReduction = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("VoucherNumber")
     */
    public ?int $voucherNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("VoucherSeries")
     */
    public ?string $voucherSeries = null;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("VoucherYear")
     */
    public ?int $voucherYear = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("WorkType")
     */
    public ?string $workType = null;
}
