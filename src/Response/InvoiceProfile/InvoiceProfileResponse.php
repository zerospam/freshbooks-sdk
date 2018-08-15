<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 10:00 AM
 */

namespace ZEROSPAM\Freshbooks\Response\InvoiceProfile;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\InvoiceLine;

/**
 * Class InvoiceProfileResponse
 *
 * Invoice profile response
 *
 * @property-read int                $id
 * @property-read int                $ownerid
 * @property-read Carbon             $updated
 * @property-read Amount             $discount_total
 * @property-read int                $occurrences_to_date
 * @property-read Amount             $amount
 * @property-read int                $profileid
 * @property-read string             $frequency
 * @property-read Carbon             $create_date
 * @property-read bool               $send_email
 * @property-read string             $street
 * @property-read string|null        $bill_gateway
 * @property-read string             $vat_number
 * @property-read int                $numberRecurring
 * @property-read string             $city
 * @property-read bool               $send_gmail
 * @property-read string             $lname
 * @property-read string             $fname
 * @property-read int|null           $ext_archive
 * @property-read int                $vis_state
 * @property-read string             $province
 * @property-read string|null        $terms
 * @property-read string             $description
 * @property-read string             $vat_name
 * @property-read string             $street2
 * @property-read string             $currency_code
 * @property-read bool               $disable
 * @property-read string             $address
 * @property-read string             $accounting_systemid
 * @property-read string             $organization
 * @property-read int                $customerid
 * @property-read int                $due_offset_days
 * @property-read string             $language
 * @property-read string|null        $po_number
 * @property-read string             $country
 * @property-read string             $notes
 * @property-read bool               $include_unbilled_time
 * @property-read string             $payment_details
 * @property-read string             $code
 * @property-read string             $discount_value
 * @property-read bool               $auto_bill
 * @property-read bool               $require_auto_bill
 * @property-read mixed              $retainer_id
 * @property-read mixed              $total_accrued_revenue
 * @property-read InvoiceLine[]|null $lines
 *
 * @package ZEROSPAM\Freshbooks\Response\InvoiceProfil
 */
class InvoiceProfileResponse extends BaseResponse
{
    protected $dates = [
        "updated",
        "create_date",
    ];

    /**
     * Discount total
     *
     * @return Amount
     */
    public function getDiscountTotalAttribute(): Amount
    {
        return new Amount($this->data['discount_total']);
    }

    /**
     * Amount
     *
     * @return Amount
     */
    public function getAmountAttribute(): Amount
    {
        return new Amount($this->data['amount']);
    }

    /**
     * Lines
     *
     * @return InvoiceLine[]|null
     */
    public function getLinesAttribute(): ?array
    {
        if (!isset($this->data['lines'])) {
            return null;
        }

        return array_map(
            function (array $data) {
                return new InvoiceLine($data);
            },
            $this->data['lines']
        );
    }
}
