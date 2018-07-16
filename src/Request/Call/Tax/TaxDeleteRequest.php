<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 10:54 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Tax;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;

/**
 * Class DeleteTaxRequest
 *
 * Delete a tax
 *
 * @method EmptyResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Tax
 */
class TaxDeleteRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

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
     * @return IResponse
     */
    public function processResponse(array $jsonResponse): IResponse
    {
        return new EmptyResponse();
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
     *
     * @return $this
     */
    public function setTaxId(string $id): TaxDeleteRequest
    {
        $this->addBinding('taxId', $id);

        return $this;
    }
}
