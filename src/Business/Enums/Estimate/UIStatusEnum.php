<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 4:15 PM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Estimate;


use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Enums\EnumToStringLowerTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Enums\IEnumInsensitive;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class UIStatusEnum
 *
 * @method static UIStatusEnum CREATED()
 * @method static UIStatusEnum DRAFT()
 * @method static UIStatusEnum SENT()
 * @method static UIStatusEnum VIEWED()
 * @method static UIStatusEnum REPLIED()
 * @method static UIStatusEnum ACCEPTED()
 * @method static UIStatusEnum INVOICED()
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums\Estimate
 */
class UIStatusEnum extends Enum implements PrimalValued, IEnumInsensitive
{
    use PrimalValuedEnumTrait,
        EnumToStringLowerTrait;

    const CREATED  = 'created';
    const DRAFT    = 'draft';
    const SENT     = 'sent';
    const VIEWED   = 'viewed';
    const REPLIED  = 'replied';
    const ACCEPTED = 'accepted';
    const INVOICED = 'invoiced';
}