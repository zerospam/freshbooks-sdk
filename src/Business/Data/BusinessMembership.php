<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-08
 * Time: 11:00
 */

namespace ZEROSPAM\Freshbooks\Business\Data;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;

/**
 * Class BusinessMembership
 *
 * @package ZEROSPAM\Freshbooks\Response\Account\Data
 * @property-read int          $id
 * @property-read string       $role
 * @property-read BusinessData $business
 */
class BusinessMembership extends BaseResponse
{

    /**
     * Get the business Data
     *
     * @return BusinessData
     */
    public function getBusinessAttribute(): BusinessData
    {
        return new BusinessData($this->data['business']);
    }
}
