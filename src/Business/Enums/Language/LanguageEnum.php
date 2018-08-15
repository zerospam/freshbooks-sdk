<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 1:30 PM
 */

namespace ZEROSPAM\Freshbooks\Business\Enums\Language;

use MabeEnum\Enum;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Enums\EnumToStringLowerTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Enums\IEnumInsensitive;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Impl\PrimalValuedEnumTrait;
use ZEROSPAM\Framework\SDK\Utils\Contracts\PrimalValued;

/**
 * Class LanguageEnum
 *
 * @method static LanguageEnum FR()
 * @method static LanguageEnum EN()
 * @method static LanguageEnum ES()
 *
 * @package ZEROSPAM\Freshbooks\Business\Enums\Language
 */
class LanguageEnum extends Enum implements PrimalValued, IEnumInsensitive
{
    use PrimalValuedEnumTrait,
        EnumToStringLowerTrait;

    const FR = 'fr';
    const EN = 'en';
    const ES = 'es';
}