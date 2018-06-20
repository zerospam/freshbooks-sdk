<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-20
 * Time: 16:32
 */

namespace ZEROSPAM\Freshbooks\Argument;

use ZEROSPAM\Framework\SDK\Request\Arguments\Stackable\ISubKeyedStackableArgument;
use ZEROSPAM\Framework\SDK\Request\Arguments\Stackable\SubKeyedStackableRequestArg;

/**
 * Class SearchArgument
 *
 * Use to search a specific term
 *
 * @package ZEROSPAM\Freshbooks\Argument
 */
class SearchArgument extends SubKeyedStackableRequestArg
{
    public function __construct(string $searchKey, string $value)
    {
        parent::__construct('search', $searchKey, $value);
    }
}
