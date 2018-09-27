<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 10:46 AM
 */

namespace ZEROSPAM\Freshbooks\Request\Data\InvoiceProfile;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Utils\Data\ArrayableData;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\InvoiceLine;
use ZEROSPAM\Freshbooks\Request\Data\DateTimeData;

class InvoiceProfileData extends ArrayableData
{
    /** @var string */
    private $frequency;

    /** @var DateTimeData */
    private $createDate;

    /** @var bool */
    private $sendEmail;

    /** @var string */
    private $street;

    /** @var string|null */
    private $billGateway;

    /** @var string */
    private $vatNumber;

    /** @var int */
    private $numberRecurring;

    /** @var string */
    private $city;

    /** @var bool */
    private $sendGmail;

    /** @var string */
    private $lname;

    /** @var string */
    private $fname;

    /** @var string */
    private $province;

    /** @var string|null */
    private $terms;

    /** @var string */
    private $vatName;

    /** @var string */
    private $street2;

    /** @var string */
    private $currencyCode;

    /** @var bool */
    private $disable;

    /** @var string */
    private $address;

    /** @var string */
    private $organization;

    /** @var int */
    private $customerid;

    /** @var int */
    private $dueOffsetDays;

    /** @var string */
    private $language;

    /** @var string */
    private $poNumber;

    /** @var string */
    private $country;

    /** @var string */
    private $notes;

    /** @var bool */
    private $includeUnbilledTime;

    /** @var string */
    private $paymentDetails;

    /** @var string */
    private $code;

    /** @var string */
    private $discountValue;

    /** @var bool */
    private $autoBill;

    /** @var bool */
    private $requireAutoBill;

    /** @var InvoiceLine[] */
    private $lines;

    protected $renamed = [
        'number_recurring' => 'numberRecurring',
    ];

    /**
     * @param string $frequency
     *
     * @return $this
     */
    public function setFrequency(string $frequency): InvoiceProfileData
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @param Carbon $createDate
     *
     * @return $this
     */
    public function setCreateDate(Carbon $createDate): InvoiceProfileData
    {
        $this->createDate = new DateTimeData($createDate, 'Y-m-d');
        return $this;
    }

    /**
     * @param bool $sendEmail
     *
     * @return $this
     */
    public function setSendEmail(bool $sendEmail): InvoiceProfileData
    {
        $this->sendEmail = $sendEmail;
        return $this;
    }

    /**
     * @param string $street
     *
     * @return $this
     */
    public function setStreet(string $street): InvoiceProfileData
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @param null|string $billGateway
     *
     * @return $this
     */
    public function setBillGateway(?string $billGateway): InvoiceProfileData
    {
        $this->billGateway = $billGateway;
        return $this;
    }

    /**
     * @param string $vatNumber
     *
     * @return $this
     */
    public function setVatNumber(string $vatNumber): InvoiceProfileData
    {
        $this->vatNumber = $vatNumber;
        return $this;
    }

    /**
     * @param int $numberRecurring
     *
     * @return $this
     */
    public function setNumberRecurring(int $numberRecurring): InvoiceProfileData
    {
        $this->numberRecurring = $numberRecurring;
        return $this;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity(string $city): InvoiceProfileData
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param bool $sendGmail
     *
     * @return $this
     */
    public function setSendGmail(bool $sendGmail): InvoiceProfileData
    {
        $this->sendGmail = $sendGmail;
        return $this;
    }

    /**
     * @param string $lname
     *
     * @return $this
     */
    public function setLname(string $lname): InvoiceProfileData
    {
        $this->lname = $lname;
        return $this;
    }

    /**
     * @param string $fname
     *
     * @return $this
     */
    public function setFname(string $fname): InvoiceProfileData
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * @param string $province
     *
     * @return $this
     */
    public function setProvince(string $province): InvoiceProfileData
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @param null|string $terms
     *
     * @return $this
     */
    public function setTerms(?string $terms): InvoiceProfileData
    {
        $this->terms = $terms;
        return $this;
    }

    /**
     * @param string $vatName
     *
     * @return $this
     */
    public function setVatName(string $vatName): InvoiceProfileData
    {
        $this->vatName = $vatName;
        return $this;
    }

    /**
     * @param string $street2
     *
     * @return $this
     */
    public function setStreet2(string $street2): InvoiceProfileData
    {
        $this->street2 = $street2;
        return $this;
    }

    /**
     * @deprecated
     *
     * @param string $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode): InvoiceProfileData
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @param CurrencyEnum $currency
     *
     * @return $this
     */
    public function setCurrency(CurrencyEnum $currency): InvoiceProfileData
    {
        $this->currencyCode = $currency->getValue();
        return $this;
    }

    /**
     * @param bool $disable
     *
     * @return $this
     */
    public function setDisable(bool $disable): InvoiceProfileData
    {
        $this->disable = $disable;
        return $this;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress(string $address): InvoiceProfileData
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $organization
     *
     * @return $this
     */
    public function setOrganization(string $organization): InvoiceProfileData
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * @param int $customerid
     *
     * @return $this
     */
    public function setCustomerid(int $customerid): InvoiceProfileData
    {
        $this->customerid = $customerid;
        return $this;
    }

    /**
     * @param int $dueOffsetDays
     *
     * @return $this
     */
    public function setDueOffsetDays(int $dueOffsetDays): InvoiceProfileData
    {
        $this->dueOffsetDays = $dueOffsetDays;
        return $this;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage(string $language): InvoiceProfileData
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @param string $poNumber
     *
     * @return $this
     */
    public function setPoNumber(string $poNumber): InvoiceProfileData
    {
        $this->poNumber = $poNumber;
        return $this;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry(string $country): InvoiceProfileData
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $notes
     *
     * @return $this
     */
    public function setNotes(string $notes): InvoiceProfileData
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * @param bool $includeUnbilledTime
     *
     * @return $this
     */
    public function setIncludeUnbilledTime(bool $includeUnbilledTime): InvoiceProfileData
    {
        $this->includeUnbilledTime = $includeUnbilledTime;
        return $this;
    }

    /**
     * @param string $paymentDetails
     *
     * @return $this
     */
    public function setPaymentDetails(string $paymentDetails): InvoiceProfileData
    {
        $this->paymentDetails = $paymentDetails;
        return $this;
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function setCode(string $code): InvoiceProfileData
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @param string $discountValue
     *
     * @return $this
     */
    public function setDiscountValue(string $discountValue): InvoiceProfileData
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @param bool $autoBill
     *
     * @return $this
     */
    public function setAutoBill(bool $autoBill): InvoiceProfileData
    {
        $this->autoBill = $autoBill;
        return $this;
    }

    /**
     * @param bool $requireAutoBill
     *
     * @return $this
     */
    public function setRequireAutoBill(bool $requireAutoBill): InvoiceProfileData
    {
        $this->requireAutoBill = $requireAutoBill;
        return $this;
    }

    /**
     * @param InvoiceLine[] $lines
     *
     * @return $this
     */
    public function setLines(array $lines): InvoiceProfileData
    {
        $this->lines = $lines;
        return $this;
    }
}
