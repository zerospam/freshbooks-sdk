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
use ZEROSPAM\Freshbooks\Request\Data\Estimate\EstimateCreateData;
use ZEROSPAM\Freshbooks\Response\Estimate\EstimateResponse;

class EstimateCreateRequest extends EstimateCollectionRequest
{
    /**
     * @var EstimateCreateData
     */
    private $data;

    /**
     * EstimateCreateRequest constructor.
     *
     * @param EstimateCreateData $data
     */
    public function __construct(EstimateCreateData $data)
    {
        $this->data = $data;
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