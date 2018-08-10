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
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class EstimateResponse
 *
 * @property-read string      $province
 * @property-read string      $code
 * @property-read Carbon      $create_date
 * @property-read string      $display_status *********
 * @property-read bool        $require_client_signature
 * @property-read string      $street
 * @property-read string|null $vat_number
 * @property-read int         $ownerid
 * @property-read int         $id
 * @property-read bool        $invoiced
 * @property-read string      $city
 * @property-read string      $lname
 * @property-read int         $ext_archive
 * @property-read string      $fname
 * @property-read int         $vis_state
 * @property-read string      $current_organization
 * @property-read int         $status ******
 * @property-read string      $estimate_number
 * @property-read Carbon      $updated
 * @property-read string      $terms
 * @property-read string      $description
 * @property-read string|null $vat_name
 * @property-read string      $street2
 * @property-read string      $template
 * @property-read string      $ui_status ******
 * @property-read Amount      $discount_total
 * @property-read string      $address
 * @property-read bool        $accepted
 * @property-read int         $customerid
 * @property-read string      $accounting_systemid
 * @property-read string      $organization
 * @property-read string      $language
 * @property-read string      $po_number
 * @property-read string      $country
 * @property-read string      $notes
 * @property-read string|null $reply_status
 * @property-read Amount      $amount
 * @property-read int         $estimateid
 * @property-read int         $sentid
 * @property-read string      $discount_value
 * @property-read bool        $rich_proposal
 * @property-read Carbon      $created_at
 * @property-read string      $currency_code  *******
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
}