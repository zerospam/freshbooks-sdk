<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 19-01-11
 * Time: 10:06
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Gateway;

use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class GatewayTypeEnum
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Gateway
 * @method static GatewayTypeEnum STRIPE()
 * @method static GatewayTypeEnum FB_PAY()
 */
class GatewayTypeEnum extends Enum implements PrimalValued
{
    use PrimalValuedEnumTrait;

    const STRIPE = 26;
    const FB_PAY = 30;
}
