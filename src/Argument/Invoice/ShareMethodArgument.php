<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 12:01 PM
 */

namespace ZEROSPAM\Freshbooks\Argument\Invoice;

use ZEROSPAM\Framework\SDK\Request\Arguments\RequestArg;

class ShareMethodArgument extends RequestArg
{
    public function __construct(string $value)
    {
        parent::__construct('share_method', $value);
    }
}
