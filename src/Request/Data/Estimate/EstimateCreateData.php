<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 11:36 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Estimate;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableFields;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableOnCreateFields;

/**
 * Class EstimateCreateData
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Estimate
 */
class EstimateCreateData extends ArrayableData
{
    use CommonWritableFields,
        CommonWritableOnCreateFields,
        WritableEstimateFields;

    /** @var string */
    private $estimateNumber;
}