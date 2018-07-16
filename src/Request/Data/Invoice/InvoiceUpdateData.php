<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 12/07/18
 * Time: 4:55 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

class InvoiceUpdateData extends ArrayableData
{
    use WritableInvoiceFieldsTrait, SendEmailTrait;
}
