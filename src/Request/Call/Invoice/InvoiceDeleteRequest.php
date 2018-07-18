<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 10:52 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Invoice;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;

/**
 * Class DeleteInvoiceRequest
 *
 * Delete an invoice
 *
 * @method EmptyResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Invoice
 */
class InvoiceDeleteRequest extends BaseRequest implements IAccountIdRequest
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
     * Set the invoice ID in the URL
     *
     * @param string $id
     *
     * @return $this
     */
    public function setInvoiceId(string $id): InvoiceDeleteRequest
    {
        $this->addBinding('invoiceId', $id);

        return $this;
    }
}
