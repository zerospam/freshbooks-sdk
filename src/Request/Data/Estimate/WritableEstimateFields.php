<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 1:09 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Estimate;

/**
 * Trait WritableEstimateFields
 *
 * Common fields for estimate POST and UPDATE requests
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Estimate
 */
trait WritableEstimateFields
{
    /** @var string */
    private $estimateNumber;
}