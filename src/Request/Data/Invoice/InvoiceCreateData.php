<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 4:01 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Request\Data\Client\LatePayment\CommonWriteLatePaymentReminders;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableFields;
use ZEROSPAM\Freshbooks\Request\Data\Common\CommonWritableOnCreateFields;
use ZEROSPAM\Freshbooks\Response\Invoice\Presentation\PresentationResponse;

class InvoiceCreateData extends ArrayableData
{

    /**
     * @var PresentationResponse
     */
    private $presentation;


    use CommonWritableFields,
        CommonWritableOnCreateFields,
        WritableInvoiceFieldsTrait,
        CommonWriteLatePaymentReminders;

    /**
     * Set the presentation of the invoice
     *
     * @param PresentationResponse $presentation
     */
    public function setPresentation(PresentationResponse $presentation): void
    {
        $this->presentation = $presentation;
    }
}
