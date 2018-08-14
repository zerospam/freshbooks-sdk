<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 10:52 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Estimate\Collection;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;

/**
 * Class EstimateCollectionRequest
 *
 * Base class for request made against Estimates collection
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Estimate\Collection
 */
abstract class EstimateCollectionRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/estimates/estimates';
    }
}