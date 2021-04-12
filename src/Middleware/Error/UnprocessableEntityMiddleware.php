<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-12-04
 * Time: 09:41
 */

namespace ZEROSPAM\Freshbooks\Middleware\Error;

use Psr\Http\Message\ResponseInterface;
use ZEROSPAM\Framework\SDK\Client\BaseClient;
use ZEROSPAM\Framework\SDK\Client\Middleware\IMiddleware;
use ZEROSPAM\Framework\SDK\Request\Api\IRequest;
use ZEROSPAM\Freshbooks\Exception\UnprocessableEntityException;

class UnprocessableEntityMiddleware implements IMiddleware
{

    /**
     * @var BaseClient
     */
    protected $client;

    /**
     * Set the OAuth Client.
     *
     * @param BaseClient $client
     *
     * @return $this
     */
    public function setClient(BaseClient $client): IMiddleware
    {
        $this->client = $client;

        return $this;
    }


    /**
     * Which status error code does this middleware manage.
     *
     * @return array
     */
    public static function statusCode(): array
    {
        return [422, 413];
    }

    /**
     * Handle the request/response.
     *
     * Return an array with the response data
     *
     * @param IRequest          $request
     * @param ResponseInterface $httpResponse
     * @param array             $parsedData
     *
     * @return array
     */
    public function handle(IRequest $request, ResponseInterface $httpResponse, array $parsedData): array
    {
        throw new UnprocessableEntityException($parsedData['response']['errors'][0]);
    }
}
