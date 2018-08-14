<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 10:50 AM
 */

namespace ZEROSPAM\Freshbooks\Response\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class InvoiceLine
 *
 * Line from an invoice
 *
 * @property-read int      $lineid
 * @property-read Carbon   $updated
 * @property-read int|null $expenseid
 * @property-read string $taxNumber2
 * @property-read string $taxNumber1
 * @property-read bool   $compounded_tax
 * @property-read int    $estimateid
 * @property-read int    $taskno
 *
 * @package ZEROSPAM\Freshbooks\Business
 */
class InvoiceLine extends BaseResponse
{
    public $dates = [
        'updated',
    ];

    /**
     * Amount mutator
     *
     * @return Amount
     */
    public function getAmountAttribute(): Amount
    {
        return new Amount($this->data['amount']);
    }

    /**
     * Unit cost mutator
     *
     * @return Amount
     */
    public function getUnitCostAttribute(): Amount
    {
        return new Amount($this->data['unit_cost']);
    }
}
