<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-20
 * Time: 15:14
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Middleware;

use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Middleware\AccountIdSetterMiddleware;
use ZEROSPAM\Freshbooks\Test\Base\TestAccountRequest;

class MiddlewareTest extends TestCase
{

    public function testAccountIdSetterMiddleware() : void
    {
        $client = $this->preSuccess([]);
        $accountId = uniqid();
        $request = new TestAccountRequest();

        $client->getOAuthTestClient()->registerPreRequestMiddleware(new AccountIdSetterMiddleware($accountId))
            ->processRequest($request);

        $this->validateUrl($client, [$accountId, 'test']);
    }
}
