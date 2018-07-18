<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 11:27 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\ProfitLoss;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Freshbooks\Business\Amount;

/**
 * Class Entry
 *
 * Profit/loss entry
 *
 * @property-read string  $entry_type
 * @property-read Amount  $total
 * @property-read array   $data
 * @property-read string  $description
 * @property-read Entry[] $children
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\ProfitLoss
 */
class Entry extends BaseResponse
{
    /**
     * Total
     *
     * @return Amount
     */
    public function getTotalAttribute(): Amount
    {
        return new Amount($this->data()['total']);
    }

    /**
     * Children
     *
     * @return Entry[]
     */
    public function getChildrenAttribute(): array
    {
        return array_map(
            function ($data) {
                return new Entry($data);
            },
            $this->data()['children']
        );
    }
}
