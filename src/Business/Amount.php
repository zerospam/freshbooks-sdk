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
 * @property-read CurrencyEnum $code
 *
 * @package ZEROSPAM\Freshbooks\Business
 */
class Amount extends BaseResponse
{
    public function getCodeAttribute(): CurrencyEnum
    {
        return CurrencyEnum::byValueInsensitive($this->data()['code']);
    }
}
