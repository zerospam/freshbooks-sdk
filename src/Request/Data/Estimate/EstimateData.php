<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 11:36 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Estimate;

use ZEROSPAM\Framework\SDK\Utils\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableFields;

/**
 * Class EstimateCreateData
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Estimate
 */
class EstimateData extends ArrayableData
{
    use CommonWritableFields;

    /** @var string */
    private $estimateNumber;

    /**
     * @param string $estimateNumber
     *
     * @return EstimateData
     */
    public function setEstimateNumber(string $estimateNumber): EstimateData
    {
        $this->estimateNumber = $estimateNumber;

        return $this;
    }
}
