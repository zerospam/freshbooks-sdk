<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-09-25
 * Time: 15:56
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Invoice\Presentations;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\Invoice\Presentation\PresentationResponse;

/**
 * Class InvoicePresentationsIndexRequest
 *
 * Query the presentation information
 *
 * @method PresentationResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Invoice\Presentations
 */
class PresentationsReadRequest extends BaseRequest implements IAccountIdRequest
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
        return new PresentationResponse($jsonResponse['response']['result']['presentation']);
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/invoices/presentations';
    }
}
