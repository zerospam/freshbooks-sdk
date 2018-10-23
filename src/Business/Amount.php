<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 09/07/18
 * Time: 2:51 PM
 */

namespace ZEROSPAM\Freshbooks\Business;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;

/**
 * Class Amount
 *
 * @property-read string       $amount
 * @property-read string       $code @deprecated
 * @property-read CurrencyEnum $currency
 *
 * @package ZEROSPAM\Freshbooks\Business
 */
class Amount extends BaseResponse
{
    /**
     * @return CurrencyEnum
     */
    public function getCurrencyAttribute(): CurrencyEnum
    {
        return CurrencyEnum::get($this->data()['code']);
    }
}
