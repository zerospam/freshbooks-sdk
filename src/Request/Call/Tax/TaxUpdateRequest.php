<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 9:56 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Tax;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Request\Data\Tax\TaxData;
use ZEROSPAM\Freshbooks\Response\Tax\TaxResponse;

/**
 * Class UpdateTaxRequest
 *
 * Update a tax
 *
 * @method TaxResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Tax
 */
class TaxUpdateRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /** @var TaxData */
    private $tax;

    public function __construct(TaxData $data)
    {
        $this->tax = $data;
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
     * @return IResponse
     */
    public function processResponse(array $jsonResponse): IResponse
    {
        return new TaxResponse($jsonResponse["response"]["result"]["tax"]);
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
     * @return $this
     */
    public function setTaxId(string $id): TaxUpdateRequest
    {
        $this->addBinding('taxId', $id);

        return $this;
    }
}
