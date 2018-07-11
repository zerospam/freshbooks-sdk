<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 2:57 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Invoice;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceCreateData;
use ZEROSPAM\Freshbooks\Response\Invoice\InvoiceResponse;

class CreateInvoiceRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /** @var InvoiceCreateData */
    private $invoice;

    public function __construct(InvoiceCreateData $invoiceCreateData)
    {
        $this->invoice = $invoiceCreateData;
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/invoices/invoices';
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
        return new InvoiceResponse($jsonResponse['response']['result']['invoice']);
    }
}
