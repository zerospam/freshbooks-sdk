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
use ZEROSPAM\Freshbooks\Response\Invoice\Presentation\Collection\InvoicePresentationCollectionResponse;

/**
 * Class InvoicePresentationsIndexRequest
 *
 * Query the different possible presentations
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Invoice\Presentations
 */
class InvoicePresentationsIndexRequest extends BaseRequest
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
        return new InvoicePresentationCollectionResponse($jsonResponse);
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
