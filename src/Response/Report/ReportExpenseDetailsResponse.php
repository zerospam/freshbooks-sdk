<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:40 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Report;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails\Author;
use ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails\Category;
use ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails\ExpenseDetailsClient;
use ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails\ExpenseDetailsData;

/**
 * Class ReportExpenseDetailsResponse
 *
 * Expense details report response
 *
 * @property-read bool                   $exclude_personal
 * @property-read Carbon                 $end_date
 * @property-read ExpenseDetailsClient[] $clients
 * @property-read string                 $download_token
 * @property-read string[]               $vendors
 * @property-read string                 $group_by
 * @property-read CurrencyEnum           $currency_code
 * @property-read Author[]               $authors
 * @property-read ExpenseDetailsData[]   $data
 * @property-read Carbon                 $start_date
 * @property-read Category[]             $categories
 * @property-read string                 $company_name
 *
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Report
 */
class ReportExpenseDetailsResponse extends BaseResponse
{
    protected $dates = [
        'end_date',
        'start_date',
    ];

    /**
     * Clients
     *
     * @return ExpenseDetailsClient[]
     */
    public function getClientsAttribute(): array
    {
        return array_map(
            function ($data) {
                return new ExpenseDetailsClient($data);
            },
            $this->data()['clients']
        );
    }

    /**
     * Authors
     *
     * @return Author[]
     */
    public function getAuthorsAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Author($data);
            },
            $this->data()['authors']
        );
    }

    /**
     * Data
     *
     * @return ExpenseDetailsData[]
     */
    public function getDataAttribute(): array
    {
        return array_map(
            function ($data) {
                return new ExpenseDetailsData($data);
            },
            $this->data()['data']
        );
    }

    /**
     * Categories
     *
     * @return Category[]
     */
    public function getCategoriesAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Category($data);
            },
            $this->data()['categories']
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
