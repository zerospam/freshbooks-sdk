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

/**
 * Class EstimateCreateData
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Estimate
 */
class EstimateCreateData extends ArrayableData
{
    use CommonWritableFields,
        WritableEstimateFields;

    /** @var string */
    private $estimateNumber;

    /**
     * @param string $estimateNumber
     *
     * @return EstimateCreateData
     */
    public function setEstimateNumber(string $estimateNumber): EstimateCreateData
    {
        $this->estimateNumber = $estimateNumber;

        return $this;
    }
}