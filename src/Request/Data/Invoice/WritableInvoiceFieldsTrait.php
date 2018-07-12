<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 10/07/18
 * Time: 3:00 PM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Freshbooks\Request\Data\AmountData;
use ZEROSPAM\Freshbooks\Request\Data\DateTimeData;

trait WritableInvoiceFieldsTrait
{
    /** @var string */
    private $invoiceNumber;

    /** @var int */
    private $customerid;

    /** @var Carbon */
    private $createDate;

    /** @var Carbon|null */
    private $generationDate;

    /** @var string */
    private $discountValue;

    /** @var string|null */
    private $discountDescription;

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

    /** @var string|null */
    private $returnUri;

    /** @var AmountData|null */
    private $depositAmount;

    /** @var string|null */
    private $depositPercentage;

    /** @var boolean */
    private $showAttachments;

    /** @var int */
    private $extArchive;

    /** @var int */
    private $visState;

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

    /** @var int */
    private $dueOffsetDays;

    /** @var InvoiceLineData[] */
    private $lines;

    /**
     * @param string $invoiceNumber
     * @return $this
     */
    public function setInvoiceNumber(string $invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }

    /**
     * @param int $customerid
     * @return $this
     */
    public function setCustomerid(int $customerid)
    {
        $this->customerid = $customerid;
        return $this;
    }

    /**
     * @param Carbon $createDate
     * @return $this
     */
    public function setCreateDate(Carbon $createDate)
    {
        $this->createDate = new DateTimeData($createDate, 'Y-m-d');
        return $this;
    }

    /**
     * @param Carbon|null $generationDate
     * @return $this
     */
    public function setGenerationDate(?Carbon $generationDate)
    {
        $this->nullableChanged();
        $this->generationDate = is_null($generationDate) ? null : new DateTimeData($generationDate, 'Y-m-d');
        return $this;
    }

    /**
     * @param string $discountValue
     * @return $this
     */
    public function setDiscountValue(string $discountValue)
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @param null|string $discountDescription
     * @return $this
     */
    public function setDiscountDescription(?string $discountDescription)
    {
        $this->nullableChanged();
        $this->discountDescription = $discountDescription;
        return $this;
    }

    /**
     * @param null|string $poNumber
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
     * @return $this
     */
    public function setTemplate(string $template)
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @param string $language
     * @return $this
     */
    public function setLanguage(string $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string $terms
     * @return $this
     */
    public function setTerms(string $terms)
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @param string $notes
     * @return $this
     */
    public function setNotes(string $notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param null|string $returnUri
     * @return $this
     */
    public function setReturnUri(?string $returnUri)
    {
        $this->nullableChanged();
        $this->returnUri = $returnUri;
        return $this;
    }

    /**
     * @param null|AmountData $depositAmount
     * @return $this
     */
    public function setDepositAmount(?AmountData $depositAmount)
    {
        $this->nullableChanged();
        $this->depositAmount = $depositAmount;
        return $this;
    }

    /**
     * @param null|string $depositPercentage
     * @return $this
     */
    public function setDepositPercentage(?string $depositPercentage)
    {
        $this->nullableChanged();
        $this->depositPercentage = $depositPercentage;
        return $this;
    }

    /**
     * @param bool $showAttachments
     * @return $this
     */
    public function setShowAttachments(bool $showAttachments)
    {
        $this->showAttachments = $showAttachments;
        return $this;
    }

    /**
     * @param int $extArchive
     * @return $this
     */
    public function setExtArchive(int $extArchive)
    {
        $this->extArchive = $extArchive;
        return $this;
    }

    /**
     * @param int $visState
     * @return $this
     */
    public function setVisState(int $visState)
    {
        $this->visState = $visState;
        return $this;
    }

    /**
     * @param string $street
     * @return $this
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param string $street2
     * @return $this
     */
    public function setStreet2(string $street2)
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @param string $city
     * @return $this
     */
    public function setCity(string $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $province
     * @return $this
     */
    public function setProvince(string $province)
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @param string $code
     * @return $this
     */
    public function setCode(string $code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $organization
     * @return $this
     */
    public function setOrganization(string $organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @param string $fname
     * @return $this
     */
    public function setFname(string $fname)
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * @param string $lname
     * @return $this
     */
    public function setLname(string $lname)
    {
        $this->lname = $lname;
        return $this;
    }

    /**
     * @param string $vatName
     * @return $this
     */
    public function setVatName(string $vatName)
    {
        $this->vatName = $vatName;
        return $this;
    }

    /**
     * @param string $vatNumber
     * @return $this
     */
    public function setVatNumber(string $vatNumber)
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    /**
     * @param int $dueOffsetDays
     * @return $this
     */
    public function setDueOffsetDays(int $dueOffsetDays)
    {
        $this->dueOffsetDays = $dueOffsetDays;
        return $this;
    }

    /**
     * @param InvoiceLineData[] $lines
     * @return $this
     */
    public function setLines(array $lines)
    {
        $this->lines = $lines;
        return $this;
    }
}
