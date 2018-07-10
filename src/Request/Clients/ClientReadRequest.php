<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-07-10
 * Time: 13:35
 */

namespace ZEROSPAM\Freshbooks\Request\Clients;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Response\Clients\ClientResponse;

/**
 * Class ClientReadRequest
 *
 * Gather information about a specific client
 *
 * @package ZEROSPAM\Freshbooks\Request\Clients
 * @method ClientResponse getResponse()
 */
class ClientReadRequest extends BaseRequest implements IAccountIdRequest
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
        return new ClientResponse($jsonResponse['response']['result']['client']);
    }

    /**
     * Set the clientID
     *
     * @param int $id
     *
     * @return $this
     */
    public function setClientId(int $id): ClientReadRequest
    {
        $this->addBinding('clientId', $id);

        return $this;
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/users/clients/:clientId';
    }
}
