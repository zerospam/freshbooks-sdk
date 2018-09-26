<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 12/07/18
 * Time: 4:55 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Framework\SDK\Utils\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableFields;

class InvoiceUpdateData extends ArrayableData
{
    use CommonWritableFields,
        WritableInvoiceFieldsTrait,
        SendEmailTrait;
}
