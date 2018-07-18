<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:16 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Report;

use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Response\Report\ReportProfitLossResponse;

/**
 * Class ReportProfitLossReadRequest
 *
 * Get the profit/loss report
 *
 * @method ReportProfitLossResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Report
 */
class ReportProfitLossReadRequest extends ReportBaseRequest
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
        return new ReportProfitLossResponse($jsonResponse['response']['result']['profitloss']);
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return parent::baseRoute() . '/profitloss';
    }
}
