<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 30/05/18
 * Time: 4:23 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Arguments;


use ZEROSPAM\Freshbooks\Utils\Contracts\PrimalValued;

interface IArgument extends PrimalValued
{
    /**
     * Key for the argument
     *
     * @return string
     */
    public function getKey() : string;

}