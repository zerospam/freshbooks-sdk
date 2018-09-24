<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 24/09/18
 * Time: 4:21 PM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Invoice;

use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class InvoiceStatusEnum
 *
 * @method static InvoiceStatusEnum DISPUTED();
 * @method static InvoiceStatusEnum DRAFT()
 * @method static InvoiceStatusEnum SENT()
 * @method static InvoiceStatusEnum VIEWED()
 * @method static InvoiceStatusEnum PAID()
 * @method static InvoiceStatusEnum AUTO_PAID()
 * @method static InvoiceStatusEnum RETRY()
 * @method static InvoiceStatusEnum FAILED()
 * @method static InvoiceStatusEnum PARTIAL()
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums\Invoice
 */
class InvoiceStatusEnum extends Enum implements PrimalValued
{
    use PrimalValuedEnumTrait;

    const DISPUTED  = 0;
    const DRAFT     = 1;
    const SENT      = 2;
    const VIEWED    = 3;
    const PAID      = 4;
    const AUTO_PAID = 5;
    const RETRY     = 6;
    const FAILED    = 7;
    const PARTIAL   = 8;
}
