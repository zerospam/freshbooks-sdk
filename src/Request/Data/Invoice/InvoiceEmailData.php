<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 9:39 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

class InvoiceEmailData extends ArrayableData
{
    use SendEmailTrait;

    public function __construct()
    {
        $this->setActionEmail(true);
    }
}
