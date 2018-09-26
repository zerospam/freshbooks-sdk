<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 26/09/18
 * Time: 11:10 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Payment;


use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Enums\EnumToStringLowerTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Enums\IEnumInsensitive;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class PaymentMethodEnum
 *
 * @method static PaymentMethodEnum TWO_CHECKOUT()
 * @method static PaymentMethodEnum ACH()
 * @method static PaymentMethodEnum BANK_TRANSFER()
 * @method static PaymentMethodEnum CASH()
 * @method static PaymentMethodEnum CHECK()
 * @method static PaymentMethodEnum CREDIT_CARD()
 * @method static PaymentMethodEnum DEBIT()
 * @method static PaymentMethodEnum PAYPAL()
 * @method static PaymentMethodEnum AMEX()
 * @method static PaymentMethodEnum DINERS_CLUB()
 * @method static PaymentMethodEnum DISCOVER()
 * @method static PaymentMethodEnum JCB()
 * @method static PaymentMethodEnum MASTER_CARD()
 * @method static PaymentMethodEnum VISA()
 * @package ZEROSPAM\Freshbooks\Business\Enums\Payment
 */
class PaymentMethodEnum extends Enum implements PrimalValued, IEnumInsensitive
{
    use PrimalValuedEnumTrait,
        EnumToStringLowerTrait;

    const TWO_CHECKOUT  = '2checkout';
    const ACH           = 'ach';
    const BANK_TRANSFER = 'bank transfer';
    const CASH          = 'cash';
    const CHECK         = 'check';
    const CREDIT_CARD   = 'credit card';
    const DEBIT         = 'debit';
    const PAYPAL        = 'paypal';
    const AMEX          = 'amex';
    const DINERS_CLUB   = 'diners club';
    const DISCOVER      = 'discover';
    const JCB           = 'jcb';
    const MASTER_CARD   = 'mastercard';
    const VISA          = 'visa';

}