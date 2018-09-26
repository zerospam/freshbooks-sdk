<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-20
 * Time: 14:13
 */

namespace ZEROSPAM\Freshbooks\Response\Clients;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\LatePaymentFee;
use ZEROSPAM\Freshbooks\Business\LatePaymentReminder;

/**
 * Class ClientResponse
 *
 * @property-read bool                       $allow_late_notifications
 * @property-read int                        $num_logins
 * @property-read Carbon                     $updated
 * @property-read Carbon                     $last_activity
 * @property-read string|null                $s_code
 * @property-read string|null                $vat_number
 * @property-read bool                       $pref_email
 * @property-read int                        $id
 * @property-read string|null                $direct_link_token
 * @property-read string|null                $s_province
 * @property-read string|null                $note
 * @property-read string|null                $s_country
 * @property-read string|null                $s_street2
 * @property-read string|null                $statement_token
 * @property-read string                     $lname
 * @property-read string                     $mob_phone
 * @property-read string                     $role
 * @property-read string                     $fname
 * @property-read Carbon|null                $last_login
 * @property-read string|null                $company_industry
 * @property-read string|null                $subdomain
 * @property-read string                     $email
 * @property-read string                     $username
 * @property-read string|null                $fax
 * @property-read string|null                $home_phone
 * @property-read string|null                $vat_name
 * @property-read string|null                $p_city
 * @property-read string|null                $p_code
 * @property-read bool                       $allow_late_fees
 * @property-read string                     $p_country
 * @property-read int|null                   $company_size
 * @property-read string                     $accounting_systemid
 * @property-read string                     $bus_phone
 * @property-read string                     $p_province
 * @property-read Carbon                     $signup_date
 * @property-read string                     $language
 * @property-read string                     $level
 * @property-read bool                       $notified
 * @property-read int                        $userid
 * @property-read string |null               $p_street2
 * @property-read bool                       $pref_gmail
 * @property-read string                     $vis_state
 * @property-read string                     $s_city
 * @property-read string                     $s_street
 * @property-read string                     $organization
 * @property-read string                     $p_street
 * @property-read CurrencyEnum               $currency_code
 * @property-read LatePaymentReminder[]|null $late_reminders
 * @property-read LatePaymentFee|null        $late_fee
 *
 * @package ZEROSPAM\Freshbooks\Response\Clients
 */
class ClientResponse extends BaseResponse
{

    protected $dates
        = [
            'updated',
            'last_activity',
            'last_login',
            'signup_date',
        ];

    /**
     * LatePaymentReminders
     *
     * @return LatePaymentReminder[]|null
     */
    public function getLateRemindersAttribute(): ?array
    {
        if (!isset($this->data['late_reminders'])) {
            return null;
        }

        return array_map(
            function (array $data) {
                return new LatePaymentReminder($data);
            },
            $this->data['late_reminders']
        );
    }

    /**
     * LateFee
     *
     * @return LatePaymentFee|null
     */
    public function getLateFeeAttribute(): ?LatePaymentFee
    {
        if (!isset($this->data['late_fee'])) {
            return null;
        }

        return new LatePaymentFee($this->data['late_fee']);
    }
}
