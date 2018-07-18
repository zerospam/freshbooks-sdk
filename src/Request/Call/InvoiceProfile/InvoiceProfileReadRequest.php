<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 10:26 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\InvoiceProfile\InvoiceProfileResponse;

/**
 * Class InvoiceProfileReadRequest
 *
 * Get an invoice profile
 *
 * @method InvoiceProfileResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile
 */
class InvoiceProfileReadRequest extends BaseRequest implements IAccountIdRequest
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
        return new InvoiceProfileResponse($jsonResponse['response']['result']['invoice_profile']);
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
    public function setInvoiceProfileId(string $id): InvoiceProfileReadRequest
    {
        $this->addBinding('invoiceProfileId', $id);

        return $this;
    }
}
