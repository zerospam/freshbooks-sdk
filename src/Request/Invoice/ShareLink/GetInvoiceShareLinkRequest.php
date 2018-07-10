<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 11:57 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Invoice\ShareLink;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Argument\Invoice\ShareMethodArgument;
use ZEROSPAM\Freshbooks\Request\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\ShareLink\ShareLinkResponse;

/**
 * Class GetInvoiceShareLink
 *
 * Get the share link of an invoice
 *
 * @method ShareLinkResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Invoice\ShareLink
 */
class GetInvoiceShareLinkRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    public function __construct()
    {
        $this->addArgument(new ShareMethodArgument('share_link'));
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/invoices/invoices/:invoiceId/share_link';
    }

    /**
     * Set the id of the invoice
     *
     * @param string $id
     *
     * @return $this
     */
    public function setInvoiceId(string $id): GetInvoiceShareLinkRequest
    {
        $this->addBinding('invoiceId', $id);

        return $this;
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
        return new ShareLinkResponse($jsonResponse['response']['result']['share_link']);
    }
}
