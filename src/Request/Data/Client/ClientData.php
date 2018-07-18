<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 11/07/18
 * Time: 4:54 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Client;

use ZEROSPAM\Freshbooks\Request\Data\ArrayableData;

/**
 * Class ClientData
 *
 * Data to send for client creation and update
 *
 * @package ZEROSPAM\Freshbooks\Request\Data\Client
 */
class ClientData extends ArrayableData
{
    /** @var bool */
    private $allowLateFees;

    /** @var bool */
    private $allowLateNotifications;

    /** @var string */
    private $busPhone;

    /** @var string|null */
    private $companyIndustry;

    /** @var string|null */
    private $companySize;

    /** @var string */
    private $currencyCode;

    /** @var string */
    private $email;

    /** @var string */
    private $fax;

    /** @var string */
    private $fname;

    /** @var string|null */
    private $homePhone;

    /** @var string */
    private $language;

    /** @var string */
    private $lname;

    /** @var string */
    private $mobPhone;

    /** @var string|null */
    private $note;

    /** @var bool */
    private $notified;

    /** @var string */
    private $organization;

    /** @var string */
    private $pCity;

    /** @var string */
    private $pCode;

    /** @var string */
    private $pCountry;

    /** @var string */
    private $pProvince;

    /** @var string */
    private $pStreet;

    /** @var string */
    private $pStreet2;

    /** @var bool */
    private $prefEmail;

    /** @var bool */
    private $prefGmail;

    /** @var string */
    private $sCity;

    /** @var string */
    private $sCode;

    /** @var string */
    private $sCountry;

    /** @var string */
    private $sProvince;

    /** @var string */
    private $sStreet;

    /** @var string */
    private $sStreet2;

    /** @var string */
    private $username;

    /** @var string|null */
    private $vatName;

    /** @var string|null */
    private $vatNumber;

    /**
     * @param bool $allowLateFees
     * @return $this
     */
    public function setAllowLateFees(bool $allowLateFees): ClientData
    {
        $this->allowLateFees = $allowLateFees;
        return $this;
    }

    /**
     * @param bool $allowLateNotifications
     * @return $this
     */
    public function setAllowLateNotifications(bool $allowLateNotifications): ClientData
    {
        $this->allowLateNotifications = $allowLateNotifications;
        return $this;
    }

    /**
     * @param string $busPhone
     * @return $this
     */
    public function setBusPhone(string $busPhone): ClientData
    {
        $this->busPhone = $busPhone;
        return $this;
    }

    /**
     * @param null|string $companyIndustry
     * @return $this
     */
    public function setCompanyIndustry(?string $companyIndustry): ClientData
    {
        $this->nullableChanged();
        $this->companyIndustry = $companyIndustry;
        return $this;
    }

    /**
     * @param null|string $companySize
     * @return $this
     */
    public function setCompanySize(?string $companySize): ClientData
    {
        $this->nullableChanged();
        $this->companySize = $companySize;
        return $this;
    }

    /**
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode): ClientData
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): ClientData
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $fax
     * @return $this
     */
    public function setFax(string $fax): ClientData
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @param string $fname
     * @return $this
     */
    public function setFname(string $fname): ClientData
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * @param null|string $homePhone
     * @return $this
     */
    public function setHomePhone(?string $homePhone): ClientData
    {
        $this->nullableChanged();
        $this->homePhone = $homePhone;
        return $this;
    }

    /**
     * @param string $language
     * @return $this
     */
    public function setLanguage(string $language): ClientData
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string $lname
     * @return $this
     */
    public function setLname(string $lname): ClientData
    {
        $this->lname = $lname;
        return $this;
    }

    /**
     * @param string $mobPhone
     * @return $this
     */
    public function setMobPhone(string $mobPhone): ClientData
    {
        $this->mobPhone = $mobPhone;
        return $this;
    }

    /**
     * @param null|string $note
     * @return $this
     */
    public function setNote(?string $note): ClientData
    {
        $this->nullableChanged();
        $this->note = $note;
        return $this;
    }

    /**
     * @param bool $notified
     * @return $this
     */
    public function setNotified(bool $notified): ClientData
    {
        $this->notified = $notified;
        return $this;
    }

    /**
     * @param string $organization
     * @return $this
     */
    public function setOrganization(string $organization): ClientData
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @param string $pCity
     * @return $this
     */
    public function setPCity(string $pCity): ClientData
    {
        $this->pCity = $pCity;
        return $this;
    }

    /**
     * @param string $pCode
     * @return $this
     */
    public function setPCode(string $pCode): ClientData
    {
        $this->pCode = $pCode;
        return $this;
    }

    /**
     * @param string $pCountry
     * @return $this
     */
    public function setPCountry(string $pCountry): ClientData
    {
        $this->pCountry = $pCountry;
        return $this;
    }

    /**
     * @param string $pProvince
     * @return $this
     */
    public function setPProvince(string $pProvince): ClientData
    {
        $this->pProvince = $pProvince;
        return $this;
    }

    /**
     * @param string $pStreet
     * @return $this
     */
    public function setPStreet(string $pStreet): ClientData
    {
        $this->pStreet = $pStreet;
        return $this;
    }

    /**
     * @param string $pStreet2
     * @return $this
     */
    public function setPStreet2(string $pStreet2): ClientData
    {
        $this->pStreet2 = $pStreet2;
        return $this;
    }

    /**
     * @param bool $prefEmail
     * @return $this
     */
    public function setPrefEmail(bool $prefEmail): ClientData
    {
        $this->prefEmail = $prefEmail;
        return $this;
    }

    /**
     * @param bool $prefGmail
     * @return $this
     */
    public function setPrefGmail(bool $prefGmail): ClientData
    {
        $this->prefGmail = $prefGmail;
        return $this;
    }

    /**
     * @param string $sCity
     * @return $this
     */
    public function setSCity(string $sCity): ClientData
    {
        $this->sCity = $sCity;
        return $this;
    }

    /**
     * @param string $sCode
     * @return $this
     */
    public function setSCode(string $sCode): ClientData
    {
        $this->sCode = $sCode;
        return $this;
    }

    /**
     * @param string $sCountry
     * @return $this
     */
    public function setSCountry(string $sCountry): ClientData
    {
        $this->sCountry = $sCountry;
        return $this;
    }

    /**
     * @param string $sProvince
     * @return $this
     */
    public function setSProvince(string $sProvince): ClientData
    {
        $this->sProvince = $sProvince;
        return $this;
    }

    /**
     * @param string $sStreet
     * @return $this
     */
    public function setSStreet(string $sStreet): ClientData
    {
        $this->sStreet = $sStreet;
        return $this;
    }

    /**
     * @param string $sStreet2
     * @return $this
     */
    public function setSStreet2(string $sStreet2): ClientData
    {
        $this->sStreet2 = $sStreet2;
        return $this;
    }

    /**
     * @param string $username
     * @return $this
     */
    public function setUsername(string $username): ClientData
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @param null|string $vatName
     * @return $this
     */
    public function setVatName(?string $vatName): ClientData
    {
        $this->nullableChanged();
        $this->vatName = $vatName;
        return $this;
    }

    /**
     * @param null|string $vatNumber
     * @return $this
     */
    public function setVatNumber(?string $vatNumber): ClientData
    {
        $this->nullableChanged();
        $this->vatNumber = $vatNumber;
        return $this;
    }
}
