<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:20 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Report;

use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Data\Report\ReportTaxSummaryResponse;

class ReportTaxSummaryReadRequest extends ReportBaseRequest
{
    /**
     * Process the data that is in the response.
     *
     * @param array $jsonResponse
     *
     * @return \ZEROSPAM\Framework\SDK\Response\Api\IResponse
     */
    public function processResponse(array $jsonResponse): IResponse
    {
        return new ReportTaxSummaryResponse($jsonResponse['response']['result']['taxsummary']);
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return parent::baseRoute() . '/taxsummary';
    }
}
