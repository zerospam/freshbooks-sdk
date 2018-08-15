<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 09/07/18
 * Time: 2:44 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\Enums\Language\LanguageEnum;
use ZEROSPAM\Freshbooks\Business\InvoiceLine;

/**
 * Class InvoiceResponse
 *
 * @property-read int                $status
 * @property-read string|null        $deposit_percentage
 * @property-read Carbon             $create_date
 * @property-read Amount             $outstanding
 * @property-read string             $payment_status
 * @property-read string             $code
 * @property-read int                $ownerid
 * @property-read string             $vat_number
 * @property-read int                $id
 * @property-read bool               $gmail
 * @property-read string             $vat_name
 * @property-read string             $v3_status
 * @property-read int                $parent
 * @property-read string             $country
 * @property-read string|null        $dispute_status
 * @property-read string             $lname
 * @property-read string             $deposit_status
 * @property-read int                $estimateid
 * @property-read int                $ext_archive
 * @property-read string             $template
 * @property-read int                $basecampid
 * @property-read Carbon|null        $generation_date
 * @property-read bool               $show_attachments
 * @property-read int                $vis_state
 * @property-read string             $current_organization
 * @property-read string             $province
 * @property-read Carbon             $due_date
 * @property-read Carbon             $updated
 * @property-read string|null        $terms
 * @property-read string             $description
 * @property-read null               $discount_description
 * @property-read string|null        $last_order_status
 * @property-read string             $street
 * @property-read string             $street2
 * @property-read Amount|null        $deposit_amount
 * @property-read Amount             $paid
 * @property-read int                $invoiceid
 * @property-read Amount             $discount_total
 * @property-read string             $address
 * @property-read string             $invoice_number
 * @property-read int                $customerid
 * @property-read int                $discount_value
 * @property-read string             $accounting_systemid
 * @property-read string             $organization
 * @property-read int                $due_offset_days
 * @property-read LanguageEnum       $language
 * @property-read string|null        $po_number
 * @property-read string             $display_status
 * @property-read string             $notes
 * @property-read Carbon|null        $date_paid
 * @property-read Amount             $amount
 * @property-read string             $city
 * @property-read string             $currency_code
 * @property-read int                $sentid
 * @property-read string|null        $autobill_status
 * @property-read string|null        $return_uri
 * @property-read string             $fname
 * @property-read Carbon             $created_at
 * @property-read bool               $auto_bill
 * @property-read string             $accountid
 * @property-read InvoiceLine[]|null $lines
 *
 * @package ZEROSPAM\Freshbooks\Response\Invoice
 */
class InvoiceResponse extends BaseResponse
{
    protected $dates = [
        'created_at',
        'date_paid',
        'create_date',
        'generation_date',
        'due_date',
        'updated',
    ];

    /**
     * Outstanding
     *
     * @return Amount
     */
    public function getOutstandingAttribute(): Amount
    {
        return new Amount($this->data['outstanding']);
    }


    /**
     * Deposit amount
     *
     * @return Amount|null
     */
    public function getDepositAmountAttribute(): ?Amount
    {
        if (is_null($this->data['deposit_amount'])) {
            return null;
        }
        return new Amount($this->data['deposit_amount']);
    }


    /**
     * Paid
     *
     * @return Amount
     */
    public function getPaidAttribute(): Amount
    {
        return new Amount($this->data['paid']);
    }


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
     * Language mutator
     *
     * @return LanguageEnum
     */
    public function getLanguageAttribute(): LanguageEnum
    {
        return LanguageEnum::byValueInsensitive($this->data['language']);
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
