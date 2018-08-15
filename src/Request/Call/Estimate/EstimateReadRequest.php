<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 1:16 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Estimate;

use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\Estimate\EstimateResponse;

/**
 * Class EstimateReadRequest
 *
 * @method EstimateResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Estimate
 */
class EstimateReadRequest extends EstimateResourceRequest implements IAccountIdRequest
{
    /**
     * Type of request.
     *
     * @return RequestType
     */
    public function httpType(): RequestType
    {
        return RequestType::HTTP_GET();
    }

    /**
     * Process the data that is in the response.
     *
     * @param array $jsonResponse
     *
     * @return IResponse
     */
    public function processResponse(array $jsonResponse): IResponse
    {
        return new EstimateResponse($jsonResponse['response']['result']['estimate']);
    }
}