<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-12-04
 * Time: 09:43
 */

namespace ZEROSPAM\Freshbooks\Exception;

use ZEROSPAM\Framework\SDK\Client\Exception\SDKException;

class UnprocessableEntityException extends SDKException
{


    /**
     * @var array
     */
    private $rawError;

    /**
     * UnprocessableEntityException constructor.
     *
     * @param array $json
     */
    public function __construct(array $json)
    {
        $this->rawError = $json;
        parent::__construct('Field: ' . $json['field'] . PHP_EOL . $json['message'], $json['errno']);
    }

    /**
     * @return array
     */
    public function getRawError(): array
    {
        return $this->rawError;
    }
}
