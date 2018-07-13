<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 12/07/18
 * Time: 4:46 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

trait SendEmailTrait
{
    /** @var string */
    private $emailSubject;

    /** @var string[] */
    private $emailRecipients;

    /** @var string */
    private $emailBody;

    /** @var bool */
    private $actionEmail;

    /**
     * @param string $emailSubject
     * @return $this
     */
    public function setEmailSubject(string $emailSubject)
    {
        $this->emailSubject = $emailSubject;
        return $this;
    }

    /**
     * @param string[] $emailRecipients
     * @return $this
     */
    public function setEmailRecipients(array $emailRecipients)
    {
        $this->emailRecipients = $emailRecipients;
        return $this;
    }

    /**
     * @param string $emailBody
     * @return $this
     */
    public function setEmailBody(string $emailBody)
    {
        $this->emailBody = $emailBody;
        return $this;
    }

    /**
     * @param bool $actionEmail
     * @return $this
     */
    public function setActionEmail(bool $actionEmail)
    {
        $this->actionEmail = $actionEmail;
        return $this;
    }
}
