<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 4:52 PM
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
 * Class CreateClientRequest
 *
 * Client creation request
 *
 * @method ClientResponse getResponse()
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Clients
 */
class CreateClientRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /** @var ClientData */
    private $client;

    public function __construct(ClientData $data)
    {
        $this->client = $data;
    }

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
        return RequestType::HTTP_POST();
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
        return new ClientResponse($jsonResponse["response"]["result"]["client"]);
    }
}
