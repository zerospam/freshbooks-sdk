<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 8:58 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data;

use ZEROSPAM\Framework\SDK\Utils\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;

class AmountData extends ArrayableData
{
    /** @var string */
    private $amount;

    /** @var CurrencyEnum */
    private $code;

    /**
     * @param string $amount
     *
     * @return $this
     */
    public function setAmount(string $amount): AmountData
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param CurrencyEnum $code
     *
     * @return $this
     */
    public function setCode(CurrencyEnum $code): AmountData
    {
        $this->code = $code;

        return $this;
    }
}
