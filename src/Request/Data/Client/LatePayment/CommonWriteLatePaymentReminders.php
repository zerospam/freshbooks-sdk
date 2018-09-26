<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-09-25
 * Time: 15:12
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Client\LatePayment;

use ZEROSPAM\Freshbooks\Business\LatePaymentFee;
use ZEROSPAM\Freshbooks\Business\LatePaymentReminder;

/**
 * Trait CommonWriteLatePayment
 *
 * Late payments and reminders
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Client\LatePayment
 */
trait CommonWriteLatePaymentReminders
{

    /** @var ReminderData[] */
    private $lateReminders;

    /** @var FeeData */
    private $lateFee;


    /**
     * @param ReminderData[] $lateReminders
     *
     * @return self
     */
    public function setLateReminders(array $lateReminders)
    {
        $this->lateReminders = $lateReminders;

        return $this;
    }

    /**
     * @param FeeData $lateFee
     *
     * @return self
     */
    public function setLateFee(FeeData $lateFee)
    {
        $this->lateFee = $lateFee;

        return $this;
    }

    /**
     * @param LatePaymentReminder[] $lateReminders
     *
     * @return self
     */
    public function setLateRemindersFromResponse(array $lateReminders)
    {
        $this->lateReminders = $lateReminders;

        return $this;
    }

    /**
     * @param LatePaymentFee $lateFee
     *
     * @return self
     */
    public function setLateFeeFromResponse(LatePaymentFee $lateFee)
    {
        $this->lateFee = $lateFee;

        return $this;
    }
}
