<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 8:58 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data;

use ZEROSPAM\Framework\SDK\Utils\Contracts\Arrayable;
use ZEROSPAM\Framework\SDK\Utils\Reflection\ReflectionUtil;

abstract class ArrayableData implements Arrayable
{
    /** @var string[] */
    protected $renamed = [];
    
    /**
     * Return the object as Array.
     *
     * @return array
     * @throws \ReflectionException
     */
    public function toArray(): array
    {
        $data = ReflectionUtil::objToSnakeArray($this, ['renamed']);
        foreach ($this->renamed as $name => $newName) {
            if (!array_key_exists($name, $data)) {
                continue;
            }
            $data[$newName] = $data[$name];
            unset($data[$name]);
        }

        return $data;
    }
}
