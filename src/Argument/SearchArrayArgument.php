<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 24/09/18
 * Time: 4:36 PM
 */

namespace ZEROSPAM\Freshbooks\Argument;


use ZEROSPAM\Framework\SDK\Request\Arguments\Stackable\SubKeyedArrayStackableRequestArg;

/**
 * Class SearchArrayArgument
 *
 * Argument used for `IN` search filters
 *
 * @package ZEROSPAM\Freshbooks\Argument
 */
class SearchArrayArgument extends SubKeyedArrayStackableRequestArg
{
    /**
     * SearchArrayArgument constructor.
     *
     * @param string $searchKey
     * @param array  $value
     */
    public function __construct(string $searchKey, array $value)
    {
        parent::__construct('search', $searchKey, $value);
    }
}