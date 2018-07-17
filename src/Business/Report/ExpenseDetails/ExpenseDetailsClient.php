<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 10:29 AM
 */

namespace ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;

/**
 * Class ExpenseDetailsClient
 *
 * Client of expense details report
 *
 * @property-read string|null $language
 * @property-read int|null    $userid
 * @property-read string      $email
 * @property-read string      $lname
 * @property-read string      $fname
 * @property-read string      $organization
 * @property-read int|null    $id
 *
 * @package ZEROSPAM\Freshbooks\Business\Report\ExpenseDetails
 */
class ExpenseDetailsClient extends BaseResponse
{

}
