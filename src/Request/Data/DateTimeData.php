<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 8:44 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

class DateTimeData implements PrimalValued
{
    /** @var Carbon */
    private $date;

    /** @var string */
    private $format;

    public function __construct(Carbon $date, string $format)
    {
        $this->date = $date;
        $this->format = $format;
    }

    /**
     * Return a primitive value for this object.
     *
     * @return int|float|string|float
     */
    public function toPrimitive()
    {
        return $this->date->format($this->format);
    }
}
