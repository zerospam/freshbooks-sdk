<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 3:48 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Tax;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;

/**
 * Class TaxResponse
 *
 * @property-read string      $accounting_systemid
 * @property-read Carbon      $updated
 * @property-read string      $name
 * @property-read string|null $number
 * @property-read int         $taxid
 * @property-read string      $amount
 * @property-read bool        $compound
 * @property-read int         $id
 *
 * @package ZEROSPAM\Freshbooks\Response\Tax
 */
class TaxResponse extends BaseResponse
{
    protected $dates = [
        'updated',
    ];
}
