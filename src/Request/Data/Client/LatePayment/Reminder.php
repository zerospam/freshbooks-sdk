<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/09/18
 * Time: 4:21 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Client\LatePayment;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

class Reminder extends ArrayableData
{
    /** @var string|null */
    private $body;

    /** @var int */
    private $delay;

    /** @var boolean */
    private $enabled;

    /** @var int */
    private $position;

    /** @var string|null */
    private $id;

    /**
     * @param null|string $body
     * @return $this
     */
    public function setBody(?string $body): Reminder
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @param int $delay
     * @return $this
     */
    public function setDelay(int $delay): Reminder
    {
        $this->delay = $delay;
        return $this;
    }

    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled(bool $enabled): Reminder
    {
        $this->enabled = $enabled;
        return $this;
    }

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position): Reminder
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @param int $userid
     * @return $this
     */
    public function setUserid(int $userid): Reminder
    {
        $this->id = 'userid' . $userid;
        return $this;
    }
}
