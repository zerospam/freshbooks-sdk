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
 * @method static UIEstimateStatusEnum CREATED()
 * @method static UIEstimateStatusEnum DRAFT()
 * @method static UIEstimateStatusEnum SENT()
 * @method static UIEstimateStatusEnum VIEWED()
 * @method static UIEstimateStatusEnum REPLIED()
 * @method static UIEstimateStatusEnum ACCEPTED()
 * @method static UIEstimateStatusEnum INVOICED()
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums\Estimate
 */
class UIEstimateStatusEnum extends Enum implements PrimalValued, IEnumInsensitive
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