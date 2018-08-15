<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 3:00 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Freshbooks\Request\Data\DateTimeData;

trait WritableInvoiceFieldsTrait
{
    /** @var int */
    private $parent;

    /** @var int */
    private $basecampid;

    /** @var string */
    private $status;

    /** @var bool */
    private $autoBill;

    /** @var string */
    private $invoiceNumber;

    /** @var Carbon|null */
    private $generationDate;

    /** @var string|null */
    private $discountDescription;

    /** @var string|null */
    private $returnUri;

    /** @var string|null */
    private $depositPercentage;

    /** @var boolean */
    private $showAttachments;

    /** @var int */
    private $dueOffsetDays;

    /**
     * @param string $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber(string $invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @param Carbon|null $generationDate
     *
     * @return $this
     */
    public function setGenerationDate(?Carbon $generationDate)
    {
        $this->nullableChanged();
        $this->generationDate = new DateTimeData($generationDate, 'Y-m-d');
        return $this;
    }

    /**
     * @param null|string $discountDescription
     *
     * @return $this
     */
    public function setDiscountDescription(?string $discountDescription)
    {
        $this->nullableChanged();
        $this->discountDescription = $discountDescription;
        return $this;
    }

    /**
     * @param null|string $returnUri
     *
     * @return $this
     */
    public function setReturnUri(?string $returnUri)
    {
        $this->nullableChanged();
        $this->returnUri = $returnUri;
        return $this;
    }

    /**
     * @param null|string $depositPercentage
     *
     * @return $this
     */
    public function setDepositPercentage(?string $depositPercentage)
    {
        $this->nullableChanged();
        $this->depositPercentage = $depositPercentage;
        return $this;
    }

    /**
     * @param bool $showAttachments
     *
     * @return $this
     */
    public function setShowAttachments(bool $showAttachments)
    {
        $this->showAttachments = $showAttachments;
        return $this;
    }

    /**
     * @param int $dueOffsetDays
     *
     * @return $this
     */
    public function setDueOffsetDays(int $dueOffsetDays)
    {
        $this->dueOffsetDays = $dueOffsetDays;
        return $this;
    }

    /**
     * @param int $basecampid
     *
     * @return $this
     */
    public function setBasecampid(int $basecampid)
    {
        $this->basecampid = $basecampid;
        return $this;
    }

    /**
     * @param string $status
     *
     * @return $this
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param int $parent
     *
     * @return $this
     */
    public function setParent(int $parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * @param bool $autoBill
     *
     * @return $this
     */
    public function setAutoBill(bool $autoBill)
    {
        $this->autoBill = $autoBill;
        return $this;
    }
}
