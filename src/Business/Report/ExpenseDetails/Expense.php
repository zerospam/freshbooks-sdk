<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 10:37 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class Expense
 *
 * Expense details data expense
 *
 * @property-read string      $vendorid
 * @property-read string      $vendor
 * @property-read string      $notes
 * @property-read Amount      $amount
 * @property-read string      $clientid
 * @property-read string|null $taxPercent1
 * @property-read string|null $taxName1
 * @property-read Amount      $taxAmount1
 * @property-read string|null $taxPercent2
 * @property-read string|null $taxName2
 * @property-read Amount      $taxAmount2
 * @property-read string      $authorid
 * @property-read Carbon      $date
 * @property-read int         $expenseid
 * @property-read string      $categoryid
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails
 */
class Expense extends BaseResponse
{
    protected $dates = [
        'date'
    ];

    /**
     * Amount
     *
     * @return Amount
     */
    public function getAmountAttribute(): Amount
    {
        return new Amount($this->data()['amount']);
    }

    /**
     * Tax amount 1
     *
     * @return Amount
     */
    public function getTaxAmount1Attribute(): Amount
    {
        return new Amount($this->data()['taxAmount1']);
    }

    /**
     * Tax amount 2
     *
     * @return Amount
     */
    public function getTaxAmount2Attribute(): Amount
    {
        return new Amount($this->data()['taxAmount2']);
    }
}
