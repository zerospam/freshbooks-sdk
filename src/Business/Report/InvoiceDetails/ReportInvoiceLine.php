<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 9:32 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class ReportInvoiceLine
 *
 * Invoice line of an invoice of a client of an invoice details report
 *
 * @property-read int         $lineid
 * @property-read string      $name
 * @property-read Amount      $amount
 * @property-read string|null $tax_name1
 * @property-read string|null $tax_name2
 * @property-read string      $qty
 * @property-read Amount      $tax_amount1
 * @property-read Amount      $tax_amount2
 * @property-read Amount      $rate
 * @property-read int         $taskno
 * @property-read Amount      $total
 * @property-read string      $description
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails
 */
class ReportInvoiceLine extends BaseResponse
{
    /**
     * Amount
     *
     * @return Amount
     */
    public function getAmountAttribute(): Amount
    {
        return new Amount($this->data['amount']);
    }

    /**
     * Tax amount 1
     *
     * @return Amount
     */
    public function getTaxAmount1Attribute(): Amount
    {
        return new Amount($this->data['tax_amount1']);
    }

    /**
     * Tax amount 2
     *
     * @return Amount
     */
    public function getTaxAmount2Attribute(): Amount
    {
        return new Amount($this->data['tax_amount2']);
    }

    /**
     * Rate
     *
     * @return Amount
     */
    public function getRateAttribute(): Amount
    {
        return new Amount($this->data['rate']);
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
}
