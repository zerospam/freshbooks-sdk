<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 14/08/18
 * Time: 2:46 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Estimate;


use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Data\Estimate\EstimateData;
use ZEROSPAM\Freshbooks\Response\Estimate\EstimateResponse;

/**
 * Class EstimateUpdateRequest
 *
 * Update the Estimate resource
 *
 * @method EstimateResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Estimate
 */
class EstimateUpdateRequest extends EstimateResourceRequest
{

    /** @var EstimateData */
    private $estimate;

    public function __construct(EstimateData $data)
    {
        $this->estimate = $data;
    }

    /**
     * Type of request.
     *
     * @return RequestType
     */
    public function httpType(): RequestType
    {
        return RequestType::HTTP_PUT();
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
        return new EstimateResponse($jsonResponse['response']['result']['estimate']);
    }
}