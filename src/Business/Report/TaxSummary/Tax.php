<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 4:34 PM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\TaxSummary;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class Tax
 *
 * Tax object of Tax Summary
 *
 * @property-read Amount $taxable_amount_paid
 * @property-read Amount $taxable_amount_collected
 * @property-read Amount $net_taxable_amount
 * @property-read Amount $tax_paid
 * @property-read Amount $tax_collected
 * @property-read Amount $net_tax
 * @property-read string $tax_name
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\TaxSummary
 */
class Tax extends BaseResponse
{
    /**
     * Taxable amount paid
     *
     * @return Amount
     */
    public function getTaxableAmountPaidAttribute(): Amount
    {
        return new Amount($this->data['taxable_amount_paid']);
    }

    /**
     * Taxable amount collected
     *
     * @return Amount
     */
    public function getTaxableAmountCollectedAttribute(): Amount
    {
        return new Amount($this->data['taxable_amount_collected']);
    }

    /**
     * Net taxable amount
     *
     * @return Amount
     */
    public function getNetTaxableAmountAttribute(): Amount
    {
        return new Amount($this->data['net_taxable_amount']);
    }

    /**
     * Tax paid
     *
     * @return Amount
     */
    public function getTaxPaidAttribute(): Amount
    {
        return new Amount($this->data['tax_paid']);
    }

    /**
     * Tax collected
     *
     * @return Amount
     */
    public function getTaxCollectedAttribute(): Amount
    {
        return new Amount($this->data['tax_collected']);
    }

    /**
     * Net tax
     *
     * @return Amount
     */
    public function getNetTaxAttribute(): Amount
    {
        return new Amount($this->data['net_tax']);
    }
}
