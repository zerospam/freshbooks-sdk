<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-11
 * Time: 15:40
 */

namespace ZEROSPAM\Freshbooks\Request;

/**
 * Trait HasAccountIdTrait
 *
 * Take care of setting the AccountID
 *
 * @package ZEROSPAM\Freshbooks\Request
 */
trait HasAccountIdTrait
{

    /**
     * Set the account ID in the URL
     * @param string $id
     *
     * @return $this
     */
    public function setAccountId(string $id) : IAccountIdRequest
    {
        $this->addBinding('accountId', $id);

        return $this;
    }
}
