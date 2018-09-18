<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 18/09/18
 * Time: 10:50 AM
 */

namespace ZEROSPAM\Freshbooks\Business;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Enums\Client\Fee\LatePaymentFeeType;

/**
 * Class LatePaymentFee
 *
 * @property-read boolean            $repeat
 * @property-read string|null        $second_tax_name
 * @property-read string|null        $first_tax_name
 * @property-read int                $userid
 * @property-read Carbon             $created_at
 * @property-read boolean            $enabled
 * @property-read int                $days
 * @property-read float              $value
 * @property-read Carbon|null        $updated_at
 * @property-read float              $second_tax_percent
 * @property-read float              $first_tax_percent
 * @property-read LatePaymentFeeType $type
 * @property-read boolean            $compounded_tax
 *
 * @package ZEROSPAM\Freshbooks\Business
 */
class LatePaymentFee extends BaseResponse
{
    public $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Type
     *
     * @return LatePaymentFeeType
     */
    public function getTypeAttribute(): LatePaymentFeeType
    {
        return LatePaymentFeeType::byValue($this->data()['type']);
    }
}
