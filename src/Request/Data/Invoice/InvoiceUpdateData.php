<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 12/07/18
 * Time: 4:55 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Request\Data\Common\BaseWritableFieldsTrait;

class InvoiceUpdateData extends ArrayableData
{
    use BaseWritableFieldsTrait,
        WritableInvoiceFieldsTrait,
        SendEmailTrait;
}
