<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 09/07/18
 * Time: 4:26 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Invoice\Collection;

use ZEROSPAM\Framework\SDK\Response\Api\Collection\CollectionResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Helper\Collection\CollectionHelper;
use ZEROSPAM\Freshbooks\Response\Invoice\InvoiceResponse;

class InvoiceCollectionResponse extends CollectionResponse
{
    use CollectionHelper;

    /**
     * @return string
     */
    static function collectionSelection(): string
    {
        return 'invoices';
    }

    /**
     * Transform the basic data (string[]) into a response (IResponse)
     *
     * @param array $data
     *
     * @return IResponse
     */
    protected static function dataToResponse(array $data)
    {
        return new InvoiceResponse($data);
    }
}
