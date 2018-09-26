<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 9:23 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;

/**
 * Class Invoice
 *
 * Invoice object for invoice details report clients
 *
 * @property-read int                 $invoiceid
 * @property-read Carbon              $create_date
 * @property-read int                 $due_offset_days
 * @property-read Amount              $outstanding
 * @property-read string|null         $po_number
 * @property-read Amount              $tax
 * @property-read TaxSummary[]        $tax_summaries
 * @property-read ReportInvoiceLine[] $lines
 * @property-read Amount              $paid
 * @property-read string              $v3_status
 * @property-read Carbon|null         $date_paid
 * @property-read Amount              $discount_total
 * @property-read string              $invoice_number
 * @property-read Amount              $total
 * @property-read Amount              $subtotal
 * @property-read CurrencyEnum        $currency_code
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails
 */
class Invoice extends BaseResponse
{
    protected $dates = [
        'create_date',
        'date_paid',
    ];

    /**
     * Outstanding
     *
     * @return Amount
     */
    public function getOutstandingAttribute(): Amount
    {
        return new Amount($this->data['outstanding']);
    }

    /**
     * Tax
     *
     * @return Amount
     */
    public function getTaxAttribute(): Amount
    {
        return new Amount($this->data['tax']);
    }

    /**
     * Tax summaries
     *
     * @return TaxSummary[]
     */
    public function getTaxSummariesAttribute(): array
    {
        return array_map(
            function (array $data) {
                return new TaxSummary($data);
            },
            $this->data['tax_summaries']
        );
    }

    /**
     * Lines
     *
     * @return ReportInvoiceLine[]
     */
    public function getLinesAttribute(): array
    {
        return array_map(
            function (array $data) {
                return new ReportInvoiceLine($data);
            },
            $this->data['lines']
        );
    }

    /**
     * Paid
     *
     * @return Amount
     */
    public function getPaidAttribute(): Amount
    {
        return new Amount($this->data['paid']);
    }

    /**
     * Discount total
     *
     * @return Amount
     */
    public function getDiscountTotalAttribute(): Amount
    {
        return new Amount($this->data['discount_total']);
    }

    /**
     * Total
     *
     * @return Amount
     */
    public function getTotalAttribute(): Amount
    {
        return new Amount($this->data['total']);
    }

    /**
     * Subtotal
     *
     * @return Amount
     */
    public function getSubtotalAttribute(): Amount
    {
        return new Amount($this->data['subtotal']);
    }

    /**
     * @return CurrencyEnum
     */
    public function getCurrencyCodeAttribute(): CurrencyEnum
    {
        return CurrencyEnum::byValueInsensitive($this->data['currency_code']);
    }
}
