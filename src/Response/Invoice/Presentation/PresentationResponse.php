<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-09-25
 * Time: 15:49
 */

namespace ZEROSPAM\Freshbooks\Response\Invoice\Presentation;

use ZEROSPAM\Framework\SDK\Response\Api\BaseResponse;
use ZEROSPAM\Framework\SDK\Utils\Contracts\Arrayable;

/**
 * Class PresentationData
 *
 * @property-read string $date_format
 * @property-read string $description_heading
 * @property-read string $hours_heading
 * @property-read int    $image_banner_position_y
 * @property-read string $image_banner_src
 * @property-read string $image_logo_src
 * @property-read int    $invoiceid
 * @property-read string $item_heading
 * @property-read string $label
 * @property-read string $quantity_heading
 * @property-read string $rate_heading
 * @property-read string $task_heading
 * @property-read string $theme_font_name
 * @property-read string $theme_layout
 * @property-read string $theme_primary_color
 * @property-read string $time_entry_notes_heading
 * @property-read string $unit_cost_heading
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Presentation
 */
class PresentationResponse extends BaseResponse implements Arrayable
{

    /**
     * Return the object as Array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->data;
    }
}
