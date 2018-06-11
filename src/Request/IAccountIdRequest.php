<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-11
 * Time: 16:18
 */

namespace ZEROSPAM\Freshbooks\Request;

use ZEROSPAM\Framework\SDK\Request\Api\IRequest;

interface IAccountIdRequest extends IRequest
{
    /**
     * Set the account ID in the URL
     * @param string $id
     *
     * @return $this
     */
    public function setAccountId(string $id): IAccountIdRequest;
}
