<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 3:53 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Tax;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\Tax\TaxResponse;

/**
 * Class GetTaxRequest
 *
 * Get a specific tax
 *
 * @method TaxResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Tax
 */
class GetTaxRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

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
     * @return \ZEROSPAM\Framework\SDK\Response\Api\IResponse
     */
    public function processResponse(array $jsonResponse): IResponse
    {
        return new TaxResponse($jsonResponse['response']['result']['tax']);
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/taxes/taxes/:taxId';
    }

    /**
     * Set the tax id
     *
     * @param string $id
     * @return GetTaxRequest
     */
    public function setTaxId(string $id): GetTaxRequest
    {
        $this->addBinding('taxId', $id);

        return $this;
    }
}
