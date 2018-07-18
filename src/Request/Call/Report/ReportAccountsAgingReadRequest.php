<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 3:23 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Report;

use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Response\Report\ReportAccountsAgingResponse;

/**
 * Class ReportAccountsAgingReadRequest
 *
 * Get the accounts aging report
 *
 * @method ReportAccountsAgingResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Report
 */
class ReportAccountsAgingReadRequest extends ReportBaseRequest
{
    /**
     * Process the data that is in the response.
     *
     * @param array $jsonResponse
     *
     * @return \ZEROSPAM\Framework\SDK\Response\Api\IResponse
     */
    public function processResponse(array $jsonResponse) : IResponse
    {
        return new ReportAccountsAgingResponse($jsonResponse['response']['result']['accounts_aging']);
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return parent::baseRoute() . '/accounts_aging';
    }
}
