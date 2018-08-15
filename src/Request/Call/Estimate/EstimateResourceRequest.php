<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 1:26 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Call\Estimate;

use ZEROSPAM\Framework\SDK\Request\Api\BaseRequest;
use ZEROSPAM\Freshbooks\Request\Call\HasAccountIdTrait;
use ZEROSPAM\Freshbooks\Request\Call\IAccountIdRequest;

/**
 * Class EstimateResourceRequest
 *
 * Base class for Estimate request targeting a specific estimate
 *
 * @package ZEROSPAM\Freshbooks\Request\Call\Estimate
 */
abstract class EstimateResourceRequest extends BaseRequest implements IAccountIdRequest
{
    use HasAccountIdTrait;

    /**
     * Sets estimate id of the requested resource
     *
     * @param string $id
     *
     * @return $this
     */
    public function setEstimateId(string $id): EstimateResourceRequest
    {
        $this->addBinding('estimateId', $id);

        return $this;
    }

    /**
     * Base route without binding.
     *
     * @return string
     */
    public function baseRoute(): string
    {
        return 'accounting/account/:accountId/estimates/estimates/:estimateId';
    }
}