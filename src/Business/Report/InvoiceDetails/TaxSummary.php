<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 9:54 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class TaxSummary
 *
 * Tax summary of an invoice of a client of an invoice details report
 *
 * @property-read Amount $tax_total
 * @property-read string $tax_number
 * @property-read string $tax_rate
 * @property-read string $tax_name
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails
 */
class TaxSummary extends BaseResponse
{
    /**
     * Tax total
     *
     * @return Amount
     */
    public function getTaxTotalAttribute(): Amount
    {
        return new Amount($this->data['tax_total']);
    }
}
