<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:50 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Report;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Report\ProfitLoss\Entry;

/**
 * Class ReportProfitLossResponse
 *
 * Profit/loss report response
 *
 * @property-read Entry        $net_profit
 * @property-read string       $download_token
 * @property-read Carbon       $end_date
 * @property-read array        $labels
 * @property-read bool         $cash_based
 * @property-read Entry[]      $expenses
 * @property-read Entry        $total_income
 * @property-read string       $company_name
 * @property-read Entry[]      $income
 * @property-read Entry        $total_expenses
 * @property-read string|null  $resolution
 * @property-read Carbon       $start_date
 * @property-read string       $currency_code @deprecated
 * @property-read CurrencyEnum $currency
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Report
 */
class ReportProfitLossResponse extends BaseResponse
{
    protected $dates = [
        'start_date',
        'end_date',
    ];

    /**
     * Net profit
     *
     * @return Entry
     */
    public function getNetProfitAttribute(): Entry
    {
        return new Entry($this->data()['net_profit']);
    }

    /**
     * Expenses
     *
     * @return Entry[]
     */
    public function getExpensesAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Entry($data);
            },
            $this->data()['expenses']
        );
    }

    /**
     * Total income
     *
     * @return Entry
     */
    public function getTotalIncomeAttribute(): Entry
    {
        return new Entry($this->data()['total_income']);
    }

    /**
     * Income
     *
     * @return Entry[]
     */
    public function getIncomeAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Entry($data);
            },
            $this->data()['income']
        );
    }

    /**
     * Total expenses
     *
     * @return Entry
     */
    public function getTotalExpensesAttribute(): Entry
    {
        return new Entry($this->data()['total_expenses']);
    }

    /**
     * @return CurrencyEnum
     */
    public function getCurrencyAttribute(): CurrencyEnum
    {
        return CurrencyEnum::get($this->data['currency_code']);
    }
}
