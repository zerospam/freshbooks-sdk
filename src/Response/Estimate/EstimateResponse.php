<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 11:13 AM
 */

namespace ZEROSPAM\Freshbooks\Response\Estimate;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Framework\SDK\Utils\Str;
use ZEROSPAM\Freshbooks\Business\Amount;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Estimate\StatusEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Estimate\UIStatusEnum;

/**
 * Class EstimateResponse
 *
 * @property-read string              $province
 * @property-read string              $code
 * @property-read Carbon              $create_date
 * @property-read UIStatusEnum        $display_status
 * @property-read bool                $require_client_signature
 * @property-read string              $street
 * @property-read string|null         $vat_number
 * @property-read int                 $ownerid
 * @property-read int                 $id
 * @property-read bool                $invoiced
 * @property-read string              $city
 * @property-read string              $lname
 * @property-read int                 $ext_archive
 * @property-read string              $fname
 * @property-read int                 $vis_state
 * @property-read string              $current_organization
 * @property-read StatusEnum          $status
 * @property-read string              $estimate_number
 * @property-read Carbon              $updated
 * @property-read string              $terms
 * @property-read string              $description
 * @property-read string|null         $vat_name
 * @property-read string              $street2
 * @property-read string              $template
 * @property-read UIStatusEnum        $ui_status
 * @property-read Amount              $discount_total
 * @property-read string              $address
 * @property-read bool                $accepted
 * @property-read int                 $customerid
 * @property-read string              $accounting_systemid
 * @property-read string              $organization
 * @property-read string              $language
 * @property-read string              $po_number
 * @property-read string              $country
 * @property-read string              $notes
 * @property-read string|null         $reply_status
 * @property-read Amount              $amount
 * @property-read int                 $estimateid
 * @property-read int                 $sentid
 * @property-read string              $discount_value
 * @property-read bool                $rich_proposal
 * @property-read Carbon              $created_at
 * @property-read CurrencyEnum        $currency_code
 * @property-read EstimateLine[]|null $lines
 *
 * @package ZEROSPAM\Freshbooks\Response\Estimate
 */
class EstimateResponse extends BaseResponse
{

    /** @var array|string[] */
    protected $dates = [
        'create_date',
        'updated',
        'created_at'
    ];

    /**
     * Amount attribute mutator
     *
     * @return Amount
     */
    public function getAmountAttribute(): Amount
    {
        return new Amount($this->data['amount']);
    }

    /**
     * Currency code mutator
     *
     * @return CurrencyEnum
     */
    public function getCurrencyCodeAttribute(): CurrencyEnum
    {
        return CurrencyEnum::byValue(Str::lower($this->data['currency_code']));
    }

    /**
     * Estimate status mutator
     *
     * @return StatusEnum
     */
    public function getStatusAttribute(): StatusEnum
    {
        return StatusEnum::byValue($this->data['status']);
    }

    /**
     * Estimate ui_status mutator
     *
     * @return UIStatusEnum
     */
    public function getUiStatusAttribute(): UIStatusEnum
    {
        return UIStatusEnum::byValue(Str::lower($this->data['ui_status']));
    }

    /**
     * Estimate display status mutator
     *
     * Should be one in (draft, sent, viewed)
     *
     * @return UIStatusEnum
     */
    public function getDisplayStatusAttribute(): UIStatusEnum
    {
        return UIStatusEnum::byValue(Str::lower($this->data['ui_status']));
    }

    /**
     * Mutator for estimate lines
     *
     * @return EstimateLine[]|null
     */
    public function getLinesAttribute(): ?array
    {
        if (!isset($this->data['lines'])) {
            return null;
        }

        return array_map(function (array $line) {
            return new EstimateLine($line);
        }, $this->data['lines']);
    }
}