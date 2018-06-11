<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-11
 * Time: 16:21
 */

namespace ZEROSPAM\Freshbooks\Middleware;

use ZEROSPAM\Framework\SDK\Client\Middleware\IPreRequestMiddleware;
use ZEROSPAM\Framework\SDK\Request\Api\IRequest;
use ZEROSPAM\Freshbooks\Request\IAccountIdRequest;

class AccountIdSetterMiddleware implements IPreRequestMiddleware
{

    /**
     * @var string
     */
    private $accountId;

    /**
     * AccountIdSetterMiddleware constructor.
     *
     * @param string $accountId
     */
    public function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }


    /**
     * Handle the request before processing
     *
     * @param IRequest $request
     *
     */
    public function handle(IRequest $request): void
    {
        if ($request instanceof IAccountIdRequest) {
            $request->setAccountId($this->accountId);
        }
    }
}
