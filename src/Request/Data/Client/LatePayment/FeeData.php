<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 18/09/18
 * Time: 10:27 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Client\LatePayment;

use ZEROSPAM\Freshbooks\Business\Enums\Client\Fee\LatePaymentFeeType;
use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

class FeeData extends ArrayableData
{
    /** @var bool */
    private $compoundedTaxes;

    /** @var int */
    private $days;

    /** @var boolean */
    private $enabled;

    /** @var string|null */
    private $firstTaxName;

    /** @var float|null */
    private $firstTaxPercent;

    /** @var string */
    private $id;

    /** @var boolean */
    private $repeat;

    /** @var string|null */
    private $secondTaxName;

    /** @var float|null */
    private $secondTaxPercent;

    /** @var LatePaymentFeeType */
    private $type;

    /** @var float */
    private $value;

    /**
     * @param bool $compoundedTaxes
     * @return $this
     */
    public function setCompoundedTaxes(bool $compoundedTaxes): FeeData
    {
        $this->compoundedTaxes = $compoundedTaxes;
        return $this;
    }

    /**
     * @param int $days
     * @return $this
     */
    public function setDays(int $days): FeeData
    {
        $this->days = $days;
        return $this;
    }

    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled(bool $enabled): FeeData
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @param null|string $firstTaxName
     * @return $this
     */
    public function setFirstTaxName(?string $firstTaxName): FeeData
    {
        $this->firstTaxName = $firstTaxName;
        return $this;
    }

    /**
     * @param float|null $firstTaxPercent
     * @return $this
     */
    public function setFirstTaxPercent(?float $firstTaxPercent): FeeData
    {
        $this->firstTaxPercent = $firstTaxPercent;
        return $this;
    }

    /**
     * @param int $userid
     * @return $this
     */
    public function setUserid(int $userid): FeeData
    {
        $this->id = 'userid' . $userid;
        return $this;
    }

    /**
     * @param bool $repeat
     * @return $this
     */
    public function setRepeat(bool $repeat): FeeData
    {
        $this->repeat = $repeat;
        return $this;
    }

    /**
     * @param null|string $secondTaxName
     * @return $this
     */
    public function setSecondTaxName(?string $secondTaxName): FeeData
    {
        $this->secondTaxName = $secondTaxName;
        return $this;
    }

    /**
     * @param float|null $secondTaxPercent
     * @return $this
     */
    public function setSecondTaxPercent(?float $secondTaxPercent): FeeData
    {
        $this->secondTaxPercent = $secondTaxPercent;
        return $this;
    }

    /**
     * @param LatePaymentFeeType $type
     * @return $this
     */
    public function setType(LatePaymentFeeType $type): FeeData
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param float $value
     * @return $this
     */
    public function setValue(float $value): FeeData
    {
        $this->value = $value;
        return $this;
    }
}
