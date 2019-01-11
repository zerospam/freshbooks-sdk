<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 11:44 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Common;

use ZEROSPAM\Freshbooks\Request\Data\Gateway\GatewayTypeEnum;

/**
 * Trait CommonWritableOnCreateFields
 *
 * Common fields used upon creation resource
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Common
 */
trait CommonWritableOnCreateFields
{
    /** @var int */
    private $ownerid;

    /** @var int */
    private $estimateid;

    /** @var GatewayTypeEnum[] */
    private $allowedGatewayids;

    /**
     * @param int $ownerid
     *
     * @return $this
     */
    public function setOwnerid(int $ownerid)
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    /**
     * @param int $estimateid
     *
     * @return $this
     */
    public function setEstimateid(int $estimateid)
    {
        $this->estimateid = $estimateid;

        return $this;
    }

    /**
     * Set the allowed gateways used for payments
     *
     * @param array $gateways
     *
     * @return $this
     */
    public function setAllowedGateways(array $gateways)
    {
        $this->allowedGatewayids = $gateways;

        return $this;
    }
}
