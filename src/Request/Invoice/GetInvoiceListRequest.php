<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 09/07/18
 * Time: 4:27 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Invoice;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\Invoice\Collection\InvoiceCollectionResponse;

/**
 * Class GetInvoiceListRequest
 *
 * Get the list of invoices
 *
 * @method InvoiceCollectionResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Invoice
 */
class GetInvoiceListRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

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
        return new InvoiceCollectionResponse($jsonResponse['response']);
    }
}
