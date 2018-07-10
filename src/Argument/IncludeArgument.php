<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 10:32 AM
 */

namespace ZEROSPAM\Freshbooks\Argument;

use ZEROSPAM\Framework\SDK\Request\Arguments\RequestArg;
use ZEROSPAM\Framework\SDK\Request\Arguments\Stackable\IStackableArgument;

class IncludeArgument extends RequestArg implements IStackableArgument
{
    public function __construct(string $value)
    {
        parent::__construct('include', $value);
    }
}
