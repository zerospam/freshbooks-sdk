<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 11:45 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\PaymentsCollected;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\Enums\Payment\PaymentMethodEnum;

/**
 * Class Payment
 *
 * Payments collected report payment
 *
 * @property-read int               $invoiceid
 * @property-read string            $description
 * @property-read int               $clientid
 * @property-read Amount            $amount
 * @property-read string            $client
 * @property-read Carbon            $date
 * @property-read string            $invoice_number
 * @property-read PaymentMethodEnum $method
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\PaymentsCollected
 */
class Payment extends BaseResponse
{
    protected $dates = [
        'date',
    ];

    /**
     * Amount
     *
     * @return Amount
     */
    public function getAmountAttribute(): Amount
    {
        return new Amount($this->data()['amount']);
    }

    /**
     * @return PaymentMethodEnum
     */
    public function getMethodAttribute(): PaymentMethodEnum
    {
        return PaymentMethodEnum::byValueInsensitive($this->data()['method']);
    }
}
