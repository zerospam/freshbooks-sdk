<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 10:47 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Clients;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;

/**
 * Class DeleteClientRequest
 *
 * Delete a client
 *
 * @method EmptyResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Clients
 */
class DeleteClientRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    private $client;

    public function __construct()
    {
        $this->client = [
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
     * Set the clientID
     *
     * @param int $id
     *
     * @return $this
     */
    public function setClientId(int $id): DeleteClientRequest
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
