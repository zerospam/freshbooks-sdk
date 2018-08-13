<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 4:01 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableFields;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableOnCreateFields;

class InvoiceCreateData extends ArrayableData
{
    use CommonWritableFields,
        CommonWritableOnCreateFields,
        WritableInvoiceFieldsTrait;
}
