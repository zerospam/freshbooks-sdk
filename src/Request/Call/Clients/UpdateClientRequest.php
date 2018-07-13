<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 10:17 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Clients;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;
use ZEROSPAM\Freshbooks\Request\Data\Client\ClientData;
use ZEROSPAM\Freshbooks\Response\Clients\ClientResponse;

/**
 * Class UpdateClientRequest
 *
 * Update a client
 *
 * @method ClientResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Clients
 */
class UpdateClientRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /** @var ClientData */
    private $client;

    public function __construct(ClientData $data)
    {
        $this->client = $data;
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
        return new ClientResponse($jsonResponse['response']['result']['client']);
    }

    /**
     * Set the clientID
     *
     * @param int $id
     *
     * @return $this
     */
    public function setClientId(int $id): UpdateClientRequest
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
