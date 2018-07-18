<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 9:16 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;

/**
 * Class Client
 *
 * Client object of invoice details report
 *
 * @property-read Invoice[] $invoices
 * @property-read int       $userid
 * @property-read Summary   $summary
 * @property-read string    $lname
 * @property-read string    $fname
 * @property-read string    $organization
 * @property-read string    $email
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails
 */
class InvoiceDetailsClient extends BaseResponse
{
    /**
     * Summary
     *
     * @return Summary
     */
    public function getSummaryAttribute(): Summary
    {
        return new Summary($this->data['summary']);
    }

    /**
     * Invoices
     *
     * @return Invoice[]
     */
    public function getInvoicesAttribute(): array
    {
        return array_map(
            function (array $data) {
                return new Invoice($data);
            },
            $this->data['invoices']
        );
    }
}
