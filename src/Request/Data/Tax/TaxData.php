<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 4:37 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Tax;


use ZEROSPAM\Framework\SDK\Utils\Data\ArrayableData;

class TaxData extends ArrayableData
{
    /** @var string */
    private $name;

    /** @var bool */
    private $compound;

    /** @var string|null */
    private $number;

    /** @var string */
    private $amount;

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): TaxData
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param bool $compound
     * @return $this
     */
    public function setCompound(bool $compound): TaxData
    {
        $this->compound = $compound;
        return $this;
    }

    /**
     * @param null|string $number
     * @return $this
     */
    public function setNumber(?string $number): TaxData
    {
        $this->nullableChanged();
        $this->number = $number;
        return $this;
    }

    /**
     * @param string $amount
     * @return $this
     */
    public function setAmount(string $amount): TaxData
    {
        $this->amount = $amount;
        return $this;
    }
}
