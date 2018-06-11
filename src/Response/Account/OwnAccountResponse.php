<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-08
 * Time: 10:48
 */

namespace ZEROSPAM\Freshbooks\Response\Account;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Data\BusinessMembership;

/**
 * Class OwnAccountResponse
 *
 * @package ZEROSPAM\Freshbooks\Response\Account
 * @property-read int                  $id
 * @property-read string               $first_name
 * @property-read string               $last_name
 * @property-read string               $email
 * @property-read Carbon               $confirmed_at
 * @property-read string               $created_at
 * @property-read string               $account_id first accountID
 * @property-read BusinessMembership[] $business_memberships
 *
 */
class OwnAccountResponse extends BaseResponse
{

    protected $dates
        = [
            'confirmed_at',
            'created_at',
        ];

    /**
     * Get the First account ID
     *
     * @return string
     */
    public function getAccountIdAttribute(): string
    {
        return $this->data['business_memberships'][0]['business']['account_id'];
    }

    /**
     * Business Membership
     *
     * @return BusinessMembership[]
     */
    public function getBusinessMembershipsAttribute(): array
    {
        return array_map(
            function (array $data) {
                return new BusinessMembership($data);
            },
            $this->data['business_memberships']
        );
    }
}
