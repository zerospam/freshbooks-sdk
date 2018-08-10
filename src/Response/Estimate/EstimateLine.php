<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 4:44 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Estimate;


use ZEROSPAM\Freshbooks\Response\Common\Lines\BaseLine;

/**
 * Class EstimateLine
 *
 * @property-read string $taxNumber2
 * @property-read string $taxNumber1
 * @property-read bool $compounded_tax
 * @property-read int $estimateid
 * @property-read int $taskno
 *
 * @package ZEROSPAM\Freshbooks\Response\Estimate
 */
class EstimateLine extends BaseLine
{
}
