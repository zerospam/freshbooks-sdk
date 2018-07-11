<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 3:58 PM
 */

namespace ZEROSPAM\Freshbooks\Response\Tax\Collection;

use ZEROSPAM\Framework\SDK\Response\Api\Collection\CollectionResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Helper\Collection\CollectionHelper;
use ZEROSPAM\Freshbooks\Response\Tax\TaxResponse;

class TaxCollectionResponse extends CollectionResponse
{
    use CollectionHelper;

    /**
     * Selector in the JsonResponse
     *
     * @return string
     */
    static function collectionSelection(): string
    {
        return 'taxes';
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
        return new TaxResponse($data);
    }
}
