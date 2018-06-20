<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-20
 * Time: 14:13
 */

namespace ZEROSPAM\Freshbooks\Response\Clients\Collection;

use ZEROSPAM\Framework\SDK\Response\Api\Collection\CollectionResponse;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;
use ZEROSPAM\Freshbooks\Helper\Collection\CollectionHelper;
use ZEROSPAM\Freshbooks\Response\Clients\ClientResponse;

/**
 * Class ClientCollectionResponse
 *
 * Contains the different client that have been found
 *
 * @package ZEROSPAM\Freshbooks\Response\Clients\Collection
 */
class ClientCollectionResponse extends CollectionResponse
{
    use CollectionHelper;

    /**
     * @return string
     */
    static function collectionSelection(): string
    {
        return 'clients';
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
        return new ClientResponse($data);
    }
}
