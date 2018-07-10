<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 10:50 AM
 */

namespace ZEROSPAM\Freshbooks\Business;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;

/**
 * Class InvoiceLine
 *
 * Line from an invoice
 *
 * @property-read int         $lineid
 * @property-read Amount      $amount
 * @property-read Carbon      $updated
 * @property-read int         $type
 * @property-read int|null    $expenseid
 * @property-read string      $qty
 * @property-read Amount      $unit_cost
 * @property-read string      $description
 * @property-read string      $name
 * @property-read string|null $taxName1
 * @property-read string|null $taxName2
 * @property-read string      $taxAmount1
 * @property-read string      $taxAmount2
 *
 * @package ZEROSPAM\Freshbooks\Business
 */
class InvoiceLine extends BaseResponse
{
    public $dates = [
        'updated',
    ];

    public function getAmountAttribute(): Amount
    {
        return new Amount($this->data['amount']);
    }

    public function getUnitCostAttribute(): Amount
    {
        return new Amount($this->data['unit_cost']);
    }
}
