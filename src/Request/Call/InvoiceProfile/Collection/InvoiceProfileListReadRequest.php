<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 10:26 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\Collection;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\InvoiceProfile\Collection\InvoiceProfileCollectionResponse;

/**
 * Class InvoiceProfileListReadRequest
 *
 * Get the list of invoice profiles
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\Collection
 */
class InvoiceProfileListReadRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

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
        return new InvoiceProfileCollectionResponse($jsonResponse['response']);
    }
}
