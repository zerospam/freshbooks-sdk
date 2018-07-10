<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-11
 * Time: 15:37
 */

namespace ZEROSPAM\Freshbooks\Request\Clients\Collection;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\Clients\Collection\ClientCollectionResponse;

/**
 * Class ClientListRequest
 *
 * Retrieves the clients of the account
 * @method ClientCollectionResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Clients
 */
class ClientListRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/users/clients';
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
     * @return \ZEROSPAM\Framework\SDK\Response\Api\IResponse
     */
    public function processResponse(array $jsonResponse): IResponse
    {
        return new ClientCollectionResponse($jsonResponse['response']);
    }
}
