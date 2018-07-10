<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-08
 * Time: 10:41
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Account;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Framework\SDK\Request\Type\RequestType;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Response\Account\OwnAccountResponse;

/**
 * Class OwnAccountRequest
 *
 * Own account informations
 *
 * @method  OwnAccountResponse getResponse()
 * @package ZEROSPAM\Freshbooks\Request\Account
 */
class OwnAccountRequest extends BaseRequest
{

    /**
     * The url of the route.
     *
     * @return string
     */
    public function routeUrl(): string
    {
        return 'auth/api/v1/users/me';
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
        return new OwnAccountResponse($jsonResponse['response']);
    }
}
