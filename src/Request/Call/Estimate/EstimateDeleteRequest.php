<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 9:51 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Estimate;


use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;

/**
 * Class EstimateDeleteRequest
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Estimate
 */
class EstimateDeleteRequest extends EstimateResourceRequest
{

    /**
     * Type of request.
     *
     * @return RequestType
     */
    public function httpType(): RequestType
    {
        return RequestType::HTTP_DELETE();
    }

    /**
     * Process the data that is in the response.
     *
     * @param array $jsonResponse
     *
     * @return \ZEROSPAM\Framework\SDK\Response\Api\IResponse
     */
    public function processResponse(array $jsonResponse): IResponse
    {
        return new EmptyResponse();
    }
}