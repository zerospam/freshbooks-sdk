<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 4:04 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Report;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Report\TaxSummary\Tax;

/**
 * Class ReportTaxSummaryResponse
 *
 * Tax summary report response
 *
 * @property-read Amount       $total_invoiced
 * @property-read Carbon       $end_date
 * @property-read Tax[]        $taxes
 * @property-read string       $download_token
 * @property-read bool         $cash_based
 * @property-read Carbon       $start_date
 * @property-read string       $currency_code @deprecated
 * @property-read CurrencyEnum $currency
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Report
 */
class ReportTaxSummaryResponse extends BaseResponse
{
    protected $dates = [
        'end_date',
        'start_date',
    ];

    /**
     * Lines
     *
     * @return Tax[]|null
     */
    public function getTaxesAttribute(): ?array
    {
        return array_map(
            function (array $data) {
                return new Tax($data);
            },
            $this->data()['taxes']
        );
    }

    public function getTotalInvoicedAttribute(): Amount
    {
        return new Amount($this->data()['total_invoiced']);
    }

    /**
     * @return CurrencyEnum
     */
    public function getCurrencyAttribute(): CurrencyEnum
    {
        return CurrencyEnum::get($this->data['currency_code']);
    }
}
