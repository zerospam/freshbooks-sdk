<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 4:01 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Request\Data\DateTimeData;
use ZEROSPAM\Freshbooks\Request\Invoice\WritableInvoiceFieldsTrait;

class InvoiceCreateData extends ArrayableData
{
    use WritableInvoiceFieldsTrait;

    /** @var int */
    private $ownerid;

    /** @var int */
    private $estimateid;

    /** @var int */
    private $basecampid;

    /** @var int */
    private $sentid;

    /** @var string */
    private $status;

    /** @var int */
    private $parent;

    /** @var DateTimeData */
    private $createdAt;

    /** @var DateTimeData */
    private $updated;

    /** @var string */
    private $displayStatus;

    /** @var string */
    private $autobillStatus;

    /** @var string */
    private $paymentStatus;

    /** @var string */
    private $lastOrderStatus;

    /** @var string */
    private $disputeStatus;

    /** @var string */
    private $depositStatus;

    /** @var bool */
    private $autobill;

    /** @var string */
    private $v3Status;

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
     * @param int $sentid
     * @return $this
     */
    public function setSentid(int $sentid): InvoiceCreateData
    {
        $this->sentid = $sentid;
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
     * @param Carbon $createdAt
     * @return $this
     */
    public function setCreatedAt(Carbon $createdAt): InvoiceCreateData
    {
        $this->createdAt = new DateTimeData($createdAt, 'Y-m-d H:i:s');
        return $this;
    }

    /**
     * @param Carbon $updated
     * @return $this
     */
    public function setUpdated(Carbon $updated): InvoiceCreateData
    {
        $this->updated = new DateTimeData($updated, 'Y-m-d H:i:s');
        return $this;
    }

    /**
     * @param string $displayStatus
     * @return $this
     */
    public function setDisplayStatus(string $displayStatus): InvoiceCreateData
    {
        $this->displayStatus = $displayStatus;
        return $this;
    }

    /**
     * @param string $autobillStatus
     * @return $this
     */
    public function setAutobillStatus(string $autobillStatus): InvoiceCreateData
    {
        $this->autobillStatus = $autobillStatus;
        return $this;
    }

    /**
     * @param string $paymentStatus
     * @return $this
     */
    public function setPaymentStatus(string $paymentStatus): InvoiceCreateData
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    /**
     * @param string $lastOrderStatus
     * @return $this
     */
    public function setLastOrderStatus(string $lastOrderStatus): InvoiceCreateData
    {
        $this->lastOrderStatus = $lastOrderStatus;
        return $this;
    }

    /**
     * @param string $disputeStatus
     * @return $this
     */
    public function setDisputeStatus(string $disputeStatus): InvoiceCreateData
    {
        $this->disputeStatus = $disputeStatus;
        return $this;
    }

    /**
     * @param string $depositStatus
     * @return $this
     */
    public function setDepositStatus(string $depositStatus): InvoiceCreateData
    {
        $this->depositStatus = $depositStatus;
        return $this;
    }

    /**
     * @param bool $autobill
     * @return $this
     */
    public function setAutobill(bool $autobill): InvoiceCreateData
    {
        $this->autobill = $autobill;
        return $this;
    }

    /**
     * @param string $v3Status
     * @return $this
     */
    public function setV3Status(string $v3Status): InvoiceCreateData
    {
        $this->v3Status = $v3Status;
        return $this;
    }
}
