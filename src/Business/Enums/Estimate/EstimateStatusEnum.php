<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 4:02 PM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Estimate;


use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class StatusEnum
 *
 * @method static EstimateStatusEnum DRAFT()
 * @method static EstimateStatusEnum SENT()
 * @method static EstimateStatusEnum VIEWED()
 * @method static EstimateStatusEnum REPLIED()
 * @method static EstimateStatusEnum ACCEPTED()
 * @method static EstimateStatusEnum INVOICED()
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums\Estimate
 */
class EstimateStatusEnum extends Enum implements PrimalValued
{
    use PrimalValuedEnumTrait;

    const DRAFT    = 1;
    const SENT     = 2;
    const VIEWED   = 3;
    const REPLIED  = 4;
    const ACCEPTED = 5;
    const INVOICED = 6;
}