<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 30/05/18
 * Time: 3:17 PM
 */

namespace ZEROSPAM\Freshbooks\Config;

use ZEROSPAM\Framework\SDK\Config\OAuthConfiguration;
use ZEROSPAM\OAuth2\Client\Provider\FreshBooks;

class FreshbooksConfiguration extends OAuthConfiguration
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
