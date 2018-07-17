<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:22 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Report;

use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Response\Report\ReportPaymentsCollectedResponse;

/**
 * Class ReportPaymentsCollectedReadRequest
 *
 * Get the payments collected report
 *
 * @method ReportPaymentsCollectedResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Report
 */
class ReportPaymentsCollectedReadRequest extends ReportBaseRequest
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
        return new ReportPaymentsCollectedResponse($jsonResponse['response']['result']['payments_collected']);
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return parent::baseRoute() . '/payments_collected';
    }
}
