<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 09/07/18
 * Time: 4:12 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Invoice;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Response\Invoice\InvoiceResponse;

/**
 * Class GetInvoiceRequest
 *
 * Get a specific invoice
 *
 * @package ZEROSPAM\Freshbooks\Request\Invoice
 */
class GetInvoiceRequest extends BaseRequest
{
    use HasAccountIdTrait;

    /**
     * The url of the route.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/invoices/invoices/:invoiceId';
    }

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
        return new InvoiceResponse($jsonResponse['response']['result']['invoice']);
    }

    /**
     * Set the invoice ID in the URL
     *
     * @param string $id
     *
     * @return $this
     */
    public function setInvoiceId(string $id): GetInvoiceRequest
    {
        $this->addBinding('invoiceId', $id);

        return $this;
    }
}
