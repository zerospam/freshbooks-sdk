<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 8:58 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data;


class AmountData extends ArrayableData
{
    /** @var string */
    private $amount;

    /** @var string */
    private $code;

    /**
     * @param string $amount
     * @return $this
     */
    public function setAmount(string $amount): AmountData
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code): AmountData
    {
        $this->code = $code;
        return $this;
    }
}
