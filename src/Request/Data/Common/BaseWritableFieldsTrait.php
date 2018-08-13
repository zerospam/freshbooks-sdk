<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 13/08/18
 * Time: 11:10 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Common;


use Carbon\Carbon;
use ZEROSPAM\Freshbooks\Request\Data\DateTimeData;

trait BaseWritableFieldsTrait
{

    /** @var int */
    private $customerid;

    /** @var Carbon */
    private $createDate;

    /** @var string */
    private $discountValue;

    /** @var string|null */
    private $poNumber;

    /** @var string */
    private $template;

    /** @var string */
    private $currencyCode;

    /** @var string */
    private $language;

    /** @var string */
    private $terms;

    /** @var string */
    private $notes;

    /** @var string */
    private $address;

    /** @var int */
    private $extArchive;

    /** @var string */
    private $street;

    /** @var string */
    private $street2;

    /** @var string */
    private $city;

    /** @var string */
    private $province;

    /** @var string */
    private $code;

    /** @var string */
    private $country;

    /** @var string */
    private $organization;

    /** @var string */
    private $fname;

    /** @var string */
    private $lname;

    /** @var string */
    private $vatName;

    /** @var string */
    private $vatNumber;

    /**
     * @param int $customerid
     *
     * @return $this
     */
    public function setCustomerid(int $customerid)
    {
        $this->customerid = $customerid;
        return $this;
    }

    /**
     * @param Carbon $createDate
     *
     * @return $this
     */
    public function setCreateDate(Carbon $createDate)
    {
        $this->createDate = new DateTimeData($createDate, 'Y-m-d');
        return $this;
    }

    /**
     * @param string $discountValue
     *
     * @return $this
     */
    public function setDiscountValue(string $discountValue)
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @param null|string $poNumber
     *
     * @return $this
     */
    public function setPoNumber(?string $poNumber)
    {
        $this->nullableChanged();
        $this->poNumber = $poNumber;
        return $this;
    }

    /**
     * @param string $template
     *
     * @return $this
     */
    public function setTemplate(string $template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @param string $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string $terms
     *
     * @return $this
     */
    public function setTerms(string $terms)
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @param string $notes
     *
     * @return $this
     */
    public function setNotes(string $notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param int $extArchive
     *
     * @return $this
     */
    public function setExtArchive(int $extArchive)
    {
        $this->extArchive = $extArchive;
        return $this;
    }

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $street2
     *
     * @return $this
     */
    public function setStreet2(string $street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity(string $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $province
     *
     * @return $this
     */
    public function setProvince(string $province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $organization
     *
     * @return $this
     */
    public function setOrganization(string $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @param string $fname
     *
     * @return $this
     */
    public function setFname(string $fname)
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * @param string $lname
     *
     * @return $this
     */
    public function setLname(string $lname)
    {
        $this->lname = $lname;
        return $this;
    }

    /**
     * @param string $vatName
     *
     * @return $this
     */
    public function setVatName(string $vatName)
    {
        $this->vatName = $vatName;
        return $this;
    }

    /**
     * @param string $vatNumber
     *
     * @return $this
     */
    public function setVatNumber(string $vatNumber)
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }
}