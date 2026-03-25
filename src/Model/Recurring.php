<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation as Serializer;

class Recurring extends AbstractSerializableModel
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("amount_per_invoicing")
     */
    public ?int $amountPerInvoicing = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cost_center_id")
     */
    public ?string $costCenterId = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     */
    public ?string $currency = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringCustomer")
     * @Serializer\SerializedName("customer")
     */
    public ?RecurringCustomer $customer = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringDelivery")
     * @Serializer\SerializedName("delivery")
     */
    public ?RecurringDelivery $delivery = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("distribution_method")
     */
    public ?string $distributionMethod = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringEmail")
     * @Serializer\SerializedName("email")
     */
    public ?RecurringEmail $email = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("invoice_handling")
     */
    public ?string $invoiceHandling = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("invoice_service_type")
     */
    public ?string $invoiceServiceType = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("order_number")
     */
    public ?string $orderNumber = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("our_reference")
     */
    public ?string $ourReference = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("payment_terms")
     */
    public ?string $paymentTerms = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("price_list_id")
     */
    public ?string $priceListId = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringPrintConfiguration")
     * @Serializer\SerializedName("print_configuration")
     */
    public ?RecurringPrintConfiguration $printConfiguration = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("project_id")
     */
    public ?string $projectId = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("remark")
     */
    public ?string $remark = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("status")
     */
    public ?string $status = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tax_reduction_category")
     */
    public ?string $taxReductionCategory = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vat_option")
     */
    public ?string $vatOption = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("vat_payment_type")
     */
    public ?string $vatPaymentType = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("your_reference")
     */
    public ?string $yourReference = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringAccrual")
     * @Serializer\SerializedName("accrual")
     */
    public ?RecurringAccrual $accrual = null;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("created_at")
     */
    public ?string $createdAt = null;

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringDates")
     * @Serializer\SerializedName("dates")
     */
    public ?RecurringDates $dates = null;

    /**
     * @var RecurringDeviation[]
     * @Serializer\Type("array<ITBMedia\FortnoxBundle\Model\RecurringDeviation>")
     * @Serializer\SerializedName("deviations")
     */
    public array $deviations = [];

    /**
     * @var RecurringErrorLog[]
     * @Serializer\Type("array<ITBMedia\FortnoxBundle\Model\RecurringErrorLog>")
     * @Serializer\SerializedName("error_logs")
     */
    public array $errorLogs = [];

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
     * @var RecurringRow[]
     * @Serializer\Type("array<ITBMedia\FortnoxBundle\Model\RecurringRow>")
     * @Serializer\SerializedName("rows")
     */
    public array $rows = [];

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("serial_number")
     */
    public ?int $serialNumber = null;

    /**
     * @var RecurringTaxReduction[]
     * @Serializer\Type("array<ITBMedia\FortnoxBundle\Model\RecurringTaxReduction>")
     * @Serializer\SerializedName("tax_reductions")
     */
    public array $taxReductions = [];

    /**
     * @Serializer\Type("ITBMedia\FortnoxBundle\Model\RecurringTotals")
     * @Serializer\SerializedName("totals")
     */
    public ?RecurringTotals $totals = null;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function toCreateArray(): array
    {
        return $this->prepareRecurringArray(parent::toArray(), false);
    }

    public function toUpdateArray(): array
    {
        return $this->prepareRecurringArray(parent::toArray(), true);
    }

    protected function excludeReadonlyData(array $data): array
    {
        return $this->prepareRecurringArray($data, true);
    }

    private function prepareRecurringArray(array $data, bool $keepIds): array
    {
        unset(
            $data['created_at'],
            $data['modified_at'],
            $data['serial_number'],
            $data['totals'],
            $data['deviations'],
            $data['error_logs']
        );

        if (!$keepIds) {
            unset($data['id']);
        }

        if (isset($data['accrual']) && is_array($data['accrual'])) {
            $data['accrual'] = $this->prepareAccrualArray($data['accrual'], $keepIds);
        }

        if (isset($data['rows']) && is_array($data['rows'])) {
            foreach ($data['rows'] as $index => $row) {
                if (!is_array($row)) {
                    continue;
                }

                $data['rows'][$index] = $this->prepareRowArray($row, $keepIds);
            }
        }

        if (isset($data['tax_reductions']) && is_array($data['tax_reductions'])) {
            foreach ($data['tax_reductions'] as $index => $taxReduction) {
                if (!is_array($taxReduction)) {
                    continue;
                }

                $data['tax_reductions'][$index] = $this->prepareTaxReductionArray($taxReduction, $keepIds);
            }
        }

        return $data;
    }

    private function prepareAccrualArray(array $data, bool $keepIds): array
    {
        unset($data['recurring_id']);

        if (!$keepIds) {
            unset($data['id']);
        }

        if (isset($data['rows']) && is_array($data['rows'])) {
            foreach ($data['rows'] as $index => $row) {
                if (!is_array($row)) {
                    continue;
                }

                unset($row['accrual_id']);
                if (!$keepIds) {
                    unset($row['id']);
                }

                $data['rows'][$index] = $row;
            }
        }

        return $data;
    }

    private function prepareRowArray(array $row, bool $keepIds): array
    {
        unset(
            $row['created_at'],
            $row['modified_at'],
            $row['totals'],
            $row['tax_reduction_data'],
            $row['deviation_id']
        );

        if (!$keepIds) {
            unset($row['id']);
        }

        return $row;
    }

    private function prepareTaxReductionArray(array $data, bool $keepIds): array
    {
        unset($data['created_at'], $data['modified_at']);

        if ($keepIds) {
            unset($data['recurring_id']);
        } else {
            unset($data['id']);
        }

        return $data;
    }
}
