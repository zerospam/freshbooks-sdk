<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 11:44 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Common;

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
}