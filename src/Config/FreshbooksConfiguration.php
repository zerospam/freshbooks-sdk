<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 30/05/18
 * Time: 3:17 PM
 */

namespace ZEROSPAM\Freshbooks\Config;

use ZEROSPAM\Framework\SDK\Config\OAuth\BaseOAuthConfiguration;
use ZEROSPAM\OAuth2\Client\Provider\FreshBooks;

/**
 *
 * @package ZEROSPAM\Freshbooks\Config
 */
class FreshbooksConfiguration extends BaseOAuthConfiguration
{

    /**
     * Class to use for the provider.
     *
     * @return string
     */
    protected function providerClass(): string
    {
        return FreshBooks::class;
    }
}
