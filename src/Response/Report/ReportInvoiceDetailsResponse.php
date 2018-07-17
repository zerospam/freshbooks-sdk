<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:26 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Report;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails\InvoiceDetailsClient;
use ZEROSPAM\Freshbooks\Business\Report\InvoiceDetails\Summary;

/**
 * Class ReportInvoiceDetailsResponse
 *
 * Invoice details report response
 *
 * @property-read int[]                  $statusids
 * @property-read Carbon                 $end_date
 * @property-read int[]                  $clientids
 * @property-read string                 $date_type
 * @property-read InvoiceDetailsClient[] $clients
 * @property-read Summary                $summary
 * @property-read string                 $download_token
 * @property-read string                 $company_name
 * @property-read Carbon                 $start_date
 * @property-read string                 $currency_code
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Report
 */
class ReportInvoiceDetailsResponse extends BaseResponse
{
    protected $dates = [
        'end_date',
        'start_date',
    ];

    /**
     * Clients
     *
     * @return InvoiceDetailsClient[]
     */
    public function getClientsAttribute(): array
    {
        return array_map(
            function (array $data) {
                return new InvoiceDetailsClient($data);
            },
            $this->data['clients']
        );
    }

    /**
     * Summary
     *
     * @return Summary
     */
    public function getSummaryAttribute(): Summary
    {
        return new Summary($this->data['summary']);
    }
}
