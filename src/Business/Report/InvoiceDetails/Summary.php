<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 9:19 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class Summary
 *
 * Summary fields of the invoice details report
 *
 * @property-read Amount $total
 * @property-read Amount $paid
 * @property-read Amount $outstanding
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails
 */
class Summary extends BaseResponse
{
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
     * Paid
     *
     * @return Amount
     */
    public function getPaidAttribute(): Amount
    {
        return new Amount($this->data['paid']);
    }

    /**
     * Outstanding
     *
     * @return Amount
     */
    public function getOutstandingAttribute(): Amount
    {
        return new Amount($this->data['outstanding']);
    }
}
