<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 1:12 PM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Currency;


use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class CurrencyEnum
 *
 * @method static CurrencyEnum CAD();
 * @method static CurrencyEnum USD()
 * @method static CurrencyEnum EUR()
 *
 * Currencies Enumeration
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums
 */
class CurrencyEnum extends Enum implements PrimalValued
{
    use PrimalValuedEnumTrait;

    const CAD = 'cad';
    const USD = 'usd';
    const EUR = 'eur';
}