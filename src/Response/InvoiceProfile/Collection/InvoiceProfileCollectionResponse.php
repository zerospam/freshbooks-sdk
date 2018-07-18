<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 10:20 AM
 */

namespace ZEROSPAM\Freshbooks\Response\InvoiceProfile\Collection;

use ZEROSPAM\Framework\SDK\Response\Api\Collection\CollectionResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Helper\Collection\CollectionHelper;
use ZEROSPAM\Freshbooks\Response\InvoiceProfile\InvoiceProfileResponse;

class InvoiceProfileCollectionResponse extends CollectionResponse
{
    use CollectionHelper;

    /**
     * @return string
     */
    static function collectionSelection(): string
    {
        return 'invoice_profiles';
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
        return new InvoiceProfileResponse($data);
    }
}
