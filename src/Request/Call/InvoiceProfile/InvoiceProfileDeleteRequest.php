<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 10:27 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;

class InvoiceProfileDeleteRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    private $invoiceProfile;

    public function __construct()
    {
        $this->invoiceProfile = [
            'vis_state' => 1
        ];
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
        return 'accounting/account/:accountId/invoice_profiles/invoice_profiles/:invoiceProfileId';
    }

    /**
     * Set the invoice profile ID in the URL
     *
     * @param string $id
     *
     * @return $this
     */
    public function setInvoiceProfileId(string $id): InvoiceProfileDeleteRequest
    {
        $this->addBinding('invoiceProfileId', $id);

        return $this;
    }
}

