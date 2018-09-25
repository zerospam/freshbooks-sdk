<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-09-25
 * Time: 15:58
 */

namespace ZEROSPAM\Freshbooks\Response\Invoice\Presentation\Collection;

use ZEROSPAM\Framework\SDK\Response\Api\Collection\CollectionResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Helper\Collection\CollectionHelper;
use ZEROSPAM\Freshbooks\Response\Invoice\Presentation\PresentationResponse;

/**
 * Class InvoicePresentationCollectionResponse
 *
 * The possible presentations for the invoice
 *
 * @package ZEROSPAM\Freshbooks\Response\Invoice\Presentation\Collection
 */
class InvoicePresentationCollectionResponse extends CollectionResponse
{
    use CollectionHelper;

    /**
     * Selector in the JsonResponse
     *
     * @return string
     */
    static function collectionSelection(): string
    {
        return 'presentation';
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
        return new PresentationResponse($data);
    }
}
