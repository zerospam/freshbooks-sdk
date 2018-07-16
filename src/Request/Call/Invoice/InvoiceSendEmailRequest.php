<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 9:37 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Invoice;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceEmailData;
use ZEROSPAM\Freshbooks\Response\Invoice\InvoiceResponse;

class InvoiceSendEmailRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /** @var InvoiceEmailData */
    private $invoice;

    public function __construct(InvoiceEmailData $data)
    {
        $this->invoice = $data;
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
        return new InvoiceResponse($jsonResponse['response']['result']['invoice']);
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/invoices/invoices/:invoiceId';
    }

    /**
     * Set the invoice ID in the URL
     *
     * @param string $id
     *
     * @return $this
     */
    public function setInvoiceId(string $id): InvoiceSendEmailRequest
    {
        $this->addBinding('invoiceId', $id);

        return $this;
    }
}