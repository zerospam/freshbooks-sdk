<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 10:50 AM
 */

namespace ZEROSPAM\Freshbooks\Response\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Freshbooks\Response\Common\Lines\BaseLine;

/**
 * Class InvoiceLine
 *
 * Line from an invoice
 *
 * @property-read int      $lineid
 * @property-read Carbon   $updated
 * @property-read int|null $expenseid
 *
 * @package ZEROSPAM\Freshbooks\Business
 */
class InvoiceLine extends BaseLine
{
    public $dates = [
        'updated',
    ];
}
