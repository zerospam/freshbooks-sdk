<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 18/09/18
 * Time: 10:35 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Client\Fee;

use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class LatePaymentFeeType
 *
 * @method static LatePaymentFeeType PERCENT()
 * @method static LatePaymentFeeType FLAT_FEE()
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums\Client\Fee
 */
class LatePaymentFeeType extends Enum implements PrimalValued
{
    use PrimalValuedEnumTrait;

    const PERCENT  = 'percent';
    const FLAT_FEE = 'flat-fee';
}
