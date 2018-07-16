<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 10:27 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\Collection;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Request\Data\InvoiceProfile\InvoiceProfileData;
use ZEROSPAM\Freshbooks\Response\InvoiceProfile\InvoiceProfileResponse;

/**
 * Class InvoiceProfileCreateRequest
 *
 * Invoice profile creation request
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\Collection
 */
class InvoiceProfileCreateRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /** @var InvoiceProfileData */
    private $invoiceProfile;

    public function __construct(InvoiceProfileData $data)
    {
        $this->invoiceProfile = $data;
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/invoice_profiles/invoice_profiles';
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
        return new InvoiceProfileResponse($jsonResponse['response']['result']['invoice_profile']);
    }
}
