<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 13/07/18
 * Time: 10:51 AM
 */

namespace ZEROSPAM\Freshbooks\Response;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;

final class EmptyResponse extends BaseResponse
{
    /**
     * EmptyResponse constructor.
     */
    public function __construct()
    {
        parent::__construct([]);
    }
}
