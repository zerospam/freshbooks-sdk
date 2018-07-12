<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 4:01 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

class InvoiceCreateData extends ArrayableData
{
    use WritableInvoiceFieldsTrait;

    /** @var int */
    private $ownerid;

    /** @var int */
    private $estimateid;

    /** @var int */
    private $basecampid;

    /** @var string */
    private $status;

    /** @var int */
    private $parent;

    /** @var bool */
    private $autoBill;

    /**
     * @param int $ownerid
     * @return $this
     */
    public function setOwnerid(int $ownerid): InvoiceCreateData
    {
        $this->ownerid = $ownerid;
        return $this;
    }

    /**
     * @param int $estimateid
     * @return $this
     */
    public function setEstimateid(int $estimateid): InvoiceCreateData
    {
        $this->estimateid = $estimateid;
        return $this;
    }

    /**
     * @param int $basecampid
     * @return $this
     */
    public function setBasecampid(int $basecampid): InvoiceCreateData
    {
        $this->basecampid = $basecampid;
        return $this;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): InvoiceCreateData
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param int $parent
     * @return $this
     */
    public function setParent(int $parent): InvoiceCreateData
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @param bool $autoBill
     * @return $this
     */
    public function setAutoBill(bool $autoBill): InvoiceCreateData
    {
        $this->autoBill = $autoBill;
        return $this;
    }
}
