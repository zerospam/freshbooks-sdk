<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 4:01 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Report;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Report\PaymentsCollected\Payment;

/**
 * Class ReportPaymentsCollectedResponse
 *
 * Payments collected report response
 *
 * @property-read CurrencyEnum[] $currency_codes
 * @property-read Carbon         $end_date
 * @property-read int[]          $clientids
 * @property-read string[]       $payment_methods
 * @property-read Amount[]       $totals
 * @property-read string         $download_token
 * @property-read Payment[]      $payments
 * @property-read Carbon         $start_date
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Report
 */
class ReportPaymentsCollectedResponse extends BaseResponse
{
    protected $dates = [
        'end_date',
        'start_date',
    ];

    /**
     * Total
     *
     * @return Amount[]
     */
    public function getTotalsAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Amount($data);
            },
            $this->data()['totals']
        );
    }

    /**
     * Payments
     *
     * @return Payment[]
     */
    public function getPaymentsAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Payment($data);
            },
            $this->data()['payments']
        );
    }

    /**
     * @return array|CurrencyEnum[]
     */
    public function getCurrencyCodesAttribute(): array
    {
        return array_map(function ($item) {
            CurrencyEnum::byValueInsensitive($item);
        }, $this->data['currency_codes']);
    }
}
