<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 4:35 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Common\Lines;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Base class for common attributes shared by Line objects
 *
 * @property-read Amount      $amount
 * @property-read int         $type
 * @property-read string      $qty
 * @property-read Amount      $unit_cost
 * @property-read string      $description
 * @property-read string      $name
 * @property-read string|null $taxName1
 * @property-read string|null $taxName2
 * @property-read string      $taxAmount1
 * @property-read string      $taxAmount2
 *
 * @package ZEROSPAM\Freshbooks\Response\Lines
 */
abstract class BaseLine extends BaseResponse
{
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