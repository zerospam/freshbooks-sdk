<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 10:35 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails;

use function array_map;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class ExpenseDetailsData
 *
 * Expense details data
 *
 * @property-read string    $groupid
 * @property-read Amount    $total
 * @property-read array     $children
 * @property-read Expense[] $expenses
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails
 */
class ExpenseDetailsData extends BaseResponse
{
    /**
     * Total
     *
     * @return Amount
     */
    public function getTotalAttribute(): Amount
    {
        return new Amount($this->data()['total']);
    }

    public function getExpensesAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Expense($data);
            },
            $this->data()['expenses']
        );
    }
}
