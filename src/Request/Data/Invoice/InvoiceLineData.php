<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 8:55 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\AmountData;
use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

class InvoiceLineData extends ArrayableData
{
    /** @var int */
    private $type;

    /** @var int */
    private $expenseid;

    /** @var int */
    private $qty;

    /** @var AmountData */
    private $unitCost;

    /** @var string */
    private $description;

    /** @var string */
    private $name;

    /** @var string */
    private $taxName1;

    /** @var string */
    private $taxAmount1;

    /** @var string */
    private $taxName2;

    /** @var string */
    private $taxAmount2;

    /** @var string[] */
    protected $renamed = [
        'tax_name1'   => 'taxName1',
        'tax_amount1' => 'taxAmount1',
        'tax_name2'   => 'taxName2',
        'tax_amount2' => 'taxAmount2',
    ];

    /**
     * @param int $type
     * @return $this
     */
    public function setType(int $type): InvoiceLineData
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param int $expenseid
     * @return $this
     */
    public function setExpenseid(int $expenseid): InvoiceLineData
    {
        $this->expenseid = $expenseid;
        return $this;
    }

    /**
     * @param int $qty
     * @return $this
     */
    public function setQty(int $qty): InvoiceLineData
    {
        $this->qty = $qty;
        return $this;
    }

    /**
     * @param AmountData $unitCost
     * @return $this
     */
    public function setUnitCost(AmountData $unitCost): InvoiceLineData
    {
        $this->unitCost = $unitCost;
        return $this;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): InvoiceLineData
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): InvoiceLineData
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $taxName1
     * @return $this
     */
    public function setTaxName1(string $taxName1): InvoiceLineData
    {
        $this->taxName1 = $taxName1;
        return $this;
    }

    /**
     * @param string $taxAmount1
     * @return $this
     */
    public function setTaxAmount1(string $taxAmount1): InvoiceLineData
    {
        $this->taxAmount1 = $taxAmount1;
        return $this;
    }

    /**
     * @param string $taxName2
     * @return $this
     */
    public function setTaxName2(string $taxName2): InvoiceLineData
    {
        $this->taxName2 = $taxName2;
        return $this;
    }

    /**
     * @param string $taxAmount2
     * @return $this
     */
    public function setTaxAmount2(string $taxAmount2): InvoiceLineData
    {
        $this->taxAmount2 = $taxAmount2;
        return $this;
    }
}
