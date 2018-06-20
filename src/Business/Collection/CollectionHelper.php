<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-20
 * Time: 14:23
 */

namespace ZEROSPAM\Freshbooks\Business\Collection;

use ZEROSPAM\Framework\SDK\Response\Api\Collection\CollectionMetaData;
use ZEROSPAM\Framework\SDK\Response\Api\IResponse;

/**
 * Trait CollectionHelper
 *
 * help to build collection response
 *
 * @package ZEROSPAM\Freshbooks\Business\Collection
 */
trait CollectionHelper
{
    /**
     * CollectionHelper constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $result         = $data['result'];
        $collectionData = $result[static::collectionSelection()];
        unset($result[static::collectionSelection()]);
        parent::__construct(new CollectionMetaData($result), $collectionData);
    }


    /**
     * Selector in the JsonResponse
     *
     * @return string
     */
    abstract static function collectionSelection(): string;
}
