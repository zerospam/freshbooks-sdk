<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 10:51 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Estimate\Collection;


use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Data\Estimate\EstimateData;
use ZEROSPAM\Freshbooks\Response\Estimate\EstimateResponse;

/**
 * Class EstimateCreateRequest
 *
 * @method EstimateResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Estimate\Collection
 */
class EstimateCreateRequest extends EstimateCollectionRequest
{
    /** @var EstimateData */
    private $estimate;

    /**
     * EstimateCreateRequest constructor.
     *
     * @param EstimateData $data
     */
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
        return RequestType::HTTP_POST();
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