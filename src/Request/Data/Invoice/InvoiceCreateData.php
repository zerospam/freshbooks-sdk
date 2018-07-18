<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 4:01 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

class InvoiceCreateData extends ArrayableData
{
    use WritableInvoiceFieldsTrait;

    /** @var int */
    private $ownerid;

    /** @var int */
    private $estimateid;

    /**
     * @param int $ownerid
     * @return $this
     */
    public function setOwnerid(int $ownerid): InvoiceCreateData
    {
        $this->ownerid = $ownerid;
        return $this;
    }

    /**
     * @param int $estimateid
     * @return $this
     */
    public function setEstimateid(int $estimateid): InvoiceCreateData
    {
        $this->estimateid = $estimateid;
        return $this;
    }


}
