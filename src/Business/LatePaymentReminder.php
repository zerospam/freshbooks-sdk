<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/09/18
 * Time: 4:48 PM
 */

namespace ZEROSPAM\Freshbooks\Business;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;

/**
 * Class LatePaymentReminder
 *
 * Reminder for a late payment of a client
 *
 * @property-read string|null $body
 * @property-read boolean     $enabled
 * @property-read Carbon      $created_at
 * @property-read int         $userid
 * @property-read Carbon|null $updated_at
 * @property-read int         $delay
 * @property-read int         $position
 *
 * @package ZEROSPAM\Freshbooks\Business
 */
class LatePaymentReminder extends BaseResponse
{
    public $dates = [
        'created_at',
        'updated_at',
    ];
}
