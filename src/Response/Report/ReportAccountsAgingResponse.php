<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:58 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Report;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Report\AccountsAging\Account;

/**
 * Class ReportAccountsAgingResponse
 *
 * Accounts aging report response
 *
 * @property-read Carbon       $end_date
 * @property-read Amount[]     $totals
 * @property-read string       $download_token
 * @property-read Account[]    $accounts
 * @property-read string       $company_name
 * @property-read CurrencyEnum $currency_code
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Report
 */
class ReportAccountsAgingResponse extends BaseResponse
{
    protected $dates = [
        'end_date',
        'start_date',
    ];

    /**
     * Totals
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
     * Accounts
     *
     * @return Account[]
     */
    public function getAccountsAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Account($data);
            },
            $this->data()['accounts']
        );
    }

    /**
     * @return CurrencyEnum
     */
    public function getCurrencyCodeAttribute(): CurrencyEnum
    {
        return CurrencyEnum::byValueInsensitive($this->data['currency_code']);
    }
}
