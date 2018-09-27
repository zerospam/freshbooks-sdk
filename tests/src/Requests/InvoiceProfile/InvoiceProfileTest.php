<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 16/07/18
 * Time: 11:41 AM
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\InvoiceProfile;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\Collection\InvoiceProfileCreateRequest;
use ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\Collection\InvoiceProfileListReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\InvoiceProfileDeleteRequest;
use ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\InvoiceProfileReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\InvoiceProfile\InvoiceProfileUpdateRequest;
use ZEROSPAM\Freshbooks\Request\Data\AmountData;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceLineData;
use ZEROSPAM\Freshbooks\Request\Data\InvoiceProfile\InvoiceProfileData;

class InvoiceProfileTest extends TestCase
{
    public function testInvoiceProfileReadRequest(): void
    {
        $jsonResponse = <<<JSON
{
    "response": {
        "result": {
            "invoice_profile": {
                "code": "CAD",
                "create_date": "2018-08-01",
                "auto_bill": true,
                "vat_number": "VAT NB",
                "send_email": false,
                "street": "1 Main street",
                "ownerid": 1,
                "terms": "Terms of the invoices",
                "numberRecurring": 12,
                "id": 5283,
                "city": "Montreal",
                "send_gmail": false,
                "lname": "Smith",
                "ext_archive": null,
                "fname": "Joan",
                "vis_state": 1,
                "require_auto_bill": false,
                "province": "QC",
                "retainer_id": null,
                "updated": "2018-07-16 11:19:31",
                "bill_gateway": "stripe",
                "description": "Description of the first item",
                "vat_name": "VAT NAME",
                "street2": "Suite 4",
                "disable": true,
                "discount_total": {
                    "amount": "-0.72",
                    "code": "CAD"
                },
                "address": "1 Main Street",
                "total_accrued_revenue": null,
                "customerid": 165113,
                "discount_value": "5",
                "accounting_systemid": "gr34c",
                "occurrences_to_date": 2,
                "due_offset_days": 30,
                "language": "fr",
                "po_number": "12345",
                "country": "Canada",
                "notes": "Notes about the invoice",
                "include_unbilled_time": true,
                "profileid": 5283,
                "amount": {
                    "amount": "13.71",
                    "code": "CAD"
                },
                "frequency": "2w",
                "payment_details": "Details of the payments",
                "organization": "Organization Co.",
                "currency_code": "CAD",
                "lines": [
                    {
                        "description": "Description of the first item",
                        "compounded_tax": false,
                        "unit_cost": {
                            "amount": "5.99",
                            "code": "CAD"
                        },
                        "qty": "2",
                        "amount": {
                            "amount": "11.98",
                            "code": "CAD"
                        },
                        "taxName2": null,
                        "taxName1": null,
                        "taskno": 1,
                        "profileid": 5283,
                        "taxAmount1": "0",
                        "lineid": 1,
                        "type": 0,
                        "taxAmount2": "0",
                        "name": "item name"
                    },
                    {
                        "description": "The description",
                        "compounded_tax": false,
                        "unit_cost": {
                            "amount": "0.49",
                            "code": "CAD"
                        },
                        "qty": "5",
                        "amount": {
                            "amount": "2.45",
                            "code": "CAD"
                        },
                        "taxName2": null,
                        "taxName1": null,
                        "taskno": 2,
                        "profileid": 5283,
                        "taxAmount1": "0",
                        "lineid": 2,
                        "type": 0,
                        "taxAmount2": "0",
                        "name": "item name2"
                    }
                ]
            }
        }
    }
}
JSON;

        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceProfileReadRequest();
        $request->setAccountId('gr34c')
                ->setInvoiceProfileId("5283");
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("CAD", $response->code);
        $this->assertEquals("2018-08-01", $response->create_date->toDateString());
        $this->assertTrue($response->auto_bill);
        $this->assertEquals("VAT NB", $response->vat_number);
        $this->assertFalse($response->send_email);
        $this->assertEquals("1 Main street", $response->street);
        $this->assertEquals(1, $response->ownerid);
        $this->assertEquals("Terms of the invoices", $response->terms);
        $this->assertEquals(12, $response->numberRecurring);
        $this->assertEquals(5283, $response->id);
        $this->assertEquals("Montreal", $response->city);
        $this->assertFalse($response->send_gmail);
        $this->assertEquals("Smith", $response->lname);
        $this->assertNull($response->ext_archive);
        $this->assertEquals("Joan", $response->fname);
        $this->assertEquals(1, $response->vis_state);
        $this->assertFalse($response->require_auto_bill);
        $this->assertEquals("QC", $response->province);
        $this->assertNull($response->retainer_id);
        $this->assertEquals("2018-07-16", $response->updated->toDateString());
        $this->assertEquals("stripe", $response->bill_gateway);
        $this->assertEquals("Description of the first item", $response->description);
        $this->assertEquals("VAT NAME", $response->vat_name);
        $this->assertEquals("Suite 4", $response->street2);
        $this->assertTrue($response->disable);
        $this->assertEquals("-0.72", $response->discount_total->amount);
        $this->assertTrue($response->discount_total->currency->is(CurrencyEnum::CAD()));
        $this->assertEquals('CAD', $response->discount_total->code);
        $this->assertEquals("1 Main Street", $response->address);
        $this->assertNull($response->total_accrued_revenue);
        $this->assertEquals(165113, $response->customerid);
        $this->assertEquals("5", $response->discount_value);
        $this->assertEquals("gr34c", $response->accounting_systemid);
        $this->assertEquals(2, $response->occurrences_to_date);
        $this->assertEquals(30, $response->due_offset_days);
        $this->assertEquals("fr", $response->language);
        $this->assertEquals("12345", $response->po_number);
        $this->assertEquals("Canada", $response->country);
        $this->assertEquals("Notes about the invoice", $response->notes);
        $this->assertTrue($response->include_unbilled_time);
        $this->assertEquals(5283, $response->profileid);
        $this->assertEquals("13.71", $response->amount->amount);
        $this->assertTrue($response->amount->currency->is(CurrencyEnum::CAD()));
        $this->assertEquals('CAD', $response->amount->code);
        $this->assertEquals("2w", $response->frequency);
        $this->assertEquals("Details of the payments", $response->payment_details);
        $this->assertEquals("Organization Co.", $response->organization);
        $this->assertTrue($response->currency->is(CurrencyEnum::CAD()));
        $this->assertEquals('CAD', $response->currency_code);
        $this->assertEquals(2, count($response->lines));
        $this->assertEquals("5.99", $response->lines[0]->unit_cost->amount);
        $this->assertEquals("2", $response->lines[0]->qty);
    }

    public function testInvoiceProfileListReadRequest(): void
    {
        $jsonResponse = <<<JSON
{
    "response": {
        "result": {
            "per_page": 15,
            "invoice_profiles": [
                {
                    "code": "CAD",
                    "create_date": "2018-08-01",
                    "auto_bill": true,
                    "vat_number": "vat nb",
                    "send_email": false,
                    "street": "street",
                    "ownerid": 1,
                    "terms": "The terms",
                    "numberRecurring": 12,
                    "id": 5289,
                    "city": "city",
                    "send_gmail": false,
                    "lname": "Smith",
                    "ext_archive": null,
                    "fname": "Joan",
                    "vis_state": 0,
                    "require_auto_bill": false,
                    "province": "province",
                    "retainer_id": null,
                    "updated": "2018-07-16 09:29:53",
                    "bill_gateway": "lol",
                    "description": "The description",
                    "vat_name": "vat name",
                    "street2": "street2",
                    "disable": true,
                    "discount_total": {
                        "amount": "-0.72",
                        "code": "CAD"
                    },
                    "address": "address",
                    "total_accrued_revenue": null,
                    "customerid": 165105,
                    "discount_value": "5",
                    "accounting_systemid": "k0LBE",
                    "occurrences_to_date": 0,
                    "due_offset_days": 30,
                    "language": "fr",
                    "po_number": "po nb",
                    "country": "country",
                    "notes": "The notes",
                    "include_unbilled_time": true,
                    "profileid": 5289,
                    "amount": {
                        "amount": "13.71",
                        "code": "CAD"
                    },
                    "frequency": "m",
                    "payment_details": "The details",
                    "organization": "org inc",
                    "currency_code": "CAD"
                },
                {
                    "code": "CAD",
                    "create_date": "2018-08-01",
                    "auto_bill": true,
                    "vat_number": "vat nb",
                    "send_email": false,
                    "street": "street",
                    "ownerid": 1,
                    "terms": "The terms",
                    "numberRecurring": 12,
                    "id": 5287,
                    "city": "city",
                    "send_gmail": false,
                    "lname": "Smith",
                    "ext_archive": null,
                    "fname": "Joan",
                    "vis_state": 0,
                    "require_auto_bill": false,
                    "province": "province",
                    "retainer_id": null,
                    "updated": "2018-07-16 09:29:16",
                    "bill_gateway": "lol",
                    "description": "The description",
                    "vat_name": "vat name",
                    "street2": "street2",
                    "disable": true,
                    "discount_total": {
                        "amount": "-0.72",
                        "code": "CAD"
                    },
                    "address": "address",
                    "total_accrued_revenue": null,
                    "customerid": 165109,
                    "discount_value": "5",
                    "accounting_systemid": "k0LBE",
                    "occurrences_to_date": 0,
                    "due_offset_days": 30,
                    "language": "fr",
                    "po_number": "po nb",
                    "country": "country",
                    "notes": "The notes",
                    "include_unbilled_time": true,
                    "profileid": 5287,
                    "amount": {
                        "amount": "13.71",
                        "code": "CAD"
                    },
                    "frequency": "m",
                    "payment_details": "The details",
                    "organization": "org inc",
                    "currency_code": "CAD"
                },
                {
                    "code": "",
                    "create_date": "2018-08-01",
                    "auto_bill": true,
                    "vat_number": "vat nb",
                    "send_email": false,
                    "street": "street",
                    "ownerid": 1,
                    "terms": "The terms",
                    "numberRecurring": 12,
                    "id": 5285,
                    "city": "city",
                    "send_gmail": false,
                    "lname": "Smith",
                    "ext_archive": null,
                    "fname": "Joan",
                    "vis_state": 0,
                    "require_auto_bill": false,
                    "province": "province",
                    "retainer_id": null,
                    "updated": "2018-07-16 09:27:32",
                    "bill_gateway": "lol",
                    "description": "The description",
                    "vat_name": "vat name",
                    "street2": "street2",
                    "disable": true,
                    "discount_total": {
                        "amount": "-0.72",
                        "code": "CAD"
                    },
                    "address": "address",
                    "total_accrued_revenue": null,
                    "customerid": 165111,
                    "discount_value": "5",
                    "accounting_systemid": "k0LBE",
                    "occurrences_to_date": 0,
                    "due_offset_days": 30,
                    "language": "fr",
                    "po_number": "po nb",
                    "country": "country",
                    "notes": "The notes",
                    "include_unbilled_time": true,
                    "profileid": 5285,
                    "amount": {
                        "amount": "13.71",
                        "code": "CAD"
                    },
                    "frequency": "m",
                    "payment_details": "The details",
                    "organization": "org inc",
                    "currency_code": "CAD"
                }
            ],
            "total": 3,
            "page": 1,
            "pages": 1
        }
    }
}
JSON;

        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceProfileListReadRequest();
        $request->setAccountId('gr34c');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals(3, $response->getMetaData()->total);
        $this->assertEquals(15, $response->getMetaData()->per_page);
        $this->assertEquals(1, $response->getMetaData()->page);
        $this->assertEquals(1, $response->getMetaData()->pages);
        $this->assertEquals(5289, $response[0]->id);
        $this->assertEquals(5287, $response[1]->id);
        $this->assertEquals(5285, $response[2]->id);
    }

    public function testInvoiceProfileCreateRequest(): void
    {
        $jsonRequest  = <<<JSON
{
	"invoice_profile": {
		"frequency": "1y",
		"create_date": "2018-08-01",
		"send_email": false,
		"street": "street",
		"bill_gateway": "fbpay",
		"vat_number": "vat nb",
		"numberRecurring": 12,
		"city": "city",
		"send_gmail": false,
		"lname": "Smith",
		"fname": "Joan",
		"province": "province",
		"terms": "The terms",
		"vat_name": "vat name",
		"street2": "street2",
		"currency_code": "CAD",
		"disable": true,
		"address": "address",
		"organization": "org inc",
		"customerid": 54321,
		"due_offset_days": 30,
		"language": "fr",
		"po_number": "po nb",
		"country": "country",
		"notes": "The notes",
		"include_unbilled_time": true,
		"payment_details": "The details",
		"discount_value": "5",
		"auto_bill": true,
		"code": "CAD",
		"require_auto_bill": false, 
		"lines": [{
			"type": 0,
			"qty": 2,
			"unit_cost": {
				"amount": "5.99",
				"code": "CAD"
			},
			"description": "Description of the item",
			"name": "item name"
		},
		{
			"type": 0,
			"qty": 5,
			"unit_cost": {
				"amount": "0.49",
				"code": "CAD"
			},
			"description": "The description",
			"name": "item name2",
			"taxName1": "tax1",
			"taxAmount1": "5",
			"taxName2": "tax2",
			"taxAmount2": "10"
		}]
	}
}
JSON;
        $jsonResponse = <<<JSON
{
    "response": {
        "result": {
            "invoice_profile": {
            }
        }
    }
}
JSON;

        $lines = [
            (new InvoiceLineData)
                ->setType(0)
                ->setQty(2)
                ->setUnitCost((new AmountData)->setAmount("5.99")->setCurrency(CurrencyEnum::CAD()))
                ->setDescription("Description of the item")
                ->setName("item name"),
            (new InvoiceLineData)
                ->setType(0)
                ->setQty(5)
                ->setUnitCost((new AmountData)->setAmount("0.49")->setCode('CAD'))
                ->setDescription("The description")
                ->setName("item name2")
                ->setTaxName1("tax1")
                ->setTaxAmount1("5")
                ->setTaxName2("tax2")
                ->setTaxAmount2("10"),
        ];

        $invoiceProfile = (new InvoiceProfileData)
            ->setFrequency("1y")
            ->setCreateDate(Carbon::create(2018, 8, 1))
            ->setSendEmail(false)
            ->setStreet("street")
            ->setBillGateway("fbpay")
            ->setVatNumber("vat nb")
            ->setNumberRecurring(12)
            ->setCity("city")
            ->setSendGmail(false)
            ->setLname("Smith")
            ->setFname("Joan")
            ->setProvince("province")
            ->setTerms("The terms")
            ->setVatName("vat name")
            ->setStreet2("street2")
            ->setCurrency(CurrencyEnum::CAD())
            ->setCode('CAD')
            ->setDisable(true)
            ->setAddress("address")
            ->setOrganization("org inc")
            ->setCustomerid(54321)
            ->setDueOffsetDays(30)
            ->setLanguage("fr")
            ->setPoNumber("po nb")
            ->setCountry("country")
            ->setNotes("The notes")
            ->setIncludeUnbilledTime(true)
            ->setPaymentDetails("The details")
            ->setDiscountValue("5")
            ->setAutoBill(true)
            ->setCode('CAD')
            ->setRequireAutoBill(false)
            ->setLines($lines);

        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceProfileCreateRequest($invoiceProfile);
        $request->setAccountId('id');

        $client->getOAuthTestClient()->processRequest($request);

        $this->validateRequest($client, $jsonRequest);
    }

    public function testInvoiceProfileUpdateRequest(): void
    {
        $jsonRequest  = <<<JSON
{
	"invoice_profile": {
		"frequency": "1y",
		"create_date": "2018-08-01",
		"send_email": false,
		"street": "street",
		"bill_gateway": "fbpay",
		"vat_number": "vat nb",
		"numberRecurring": 12,
		"city": "city",
		"send_gmail": false,
		"lname": "Smith",
		"fname": "Joan",
		"province": "province",
		"terms": "The terms",
		"vat_name": "vat name",
		"street2": "street2",
		"currency_code": "CAD",
		"disable": true,
		"address": "address",
		"organization": "org inc",
		"customerid": 54321,
		"due_offset_days": 30,
		"language": "fr",
		"po_number": "po nb",
		"country": "country",
		"notes": "The notes",
		"include_unbilled_time": true,
		"payment_details": "The details",
		"discount_value": "5",
		"auto_bill": true,
		"code": "CAD",
		"require_auto_bill": false, 
		"lines": [{
			"type": 0,
			"qty": 2,
			"unit_cost": {
				"amount": "5.99",
				"code": "CAD"
			},
			"description": "Description of the item",
			"name": "item name"
		},
		{
			"type": 0,
			"qty": 5,
			"unit_cost": {
				"amount": "0.49",
				"code": "CAD"
			},
			"description": "The description",
			"name": "item name2",
			"taxName1": "tax1",
			"taxAmount1": "5",
			"taxName2": "tax2",
			"taxAmount2": "10"
		}]
	}
}
JSON;
        $jsonResponse = <<<JSON
{
    "response": {
        "result": {
            "invoice_profile": {
            }
        }
    }
}
JSON;

        $lines = [
            (new InvoiceLineData)
                ->setType(0)
                ->setQty(2)
                ->setUnitCost((new AmountData)->setAmount("5.99")->setCode('CAD'))
                ->setDescription("Description of the item")
                ->setName("item name"),
            (new InvoiceLineData)
                ->setType(0)
                ->setQty(5)
                ->setUnitCost((new AmountData)->setAmount("0.49")->setCode('CAD'))
                ->setDescription("The description")
                ->setName("item name2")
                ->setTaxName1("tax1")
                ->setTaxAmount1("5")
                ->setTaxName2("tax2")
                ->setTaxAmount2("10"),
        ];

        $invoiceProfile = (new InvoiceProfileData)
            ->setFrequency("1y")
            ->setCreateDate(Carbon::create(2018, 8, 1))
            ->setSendEmail(false)
            ->setStreet("street")
            ->setBillGateway("fbpay")
            ->setVatNumber("vat nb")
            ->setNumberRecurring(12)
            ->setCity("city")
            ->setSendGmail(false)
            ->setLname("Smith")
            ->setFname("Joan")
            ->setProvince("province")
            ->setTerms("The terms")
            ->setVatName("vat name")
            ->setStreet2("street2")
            ->setCurrency(CurrencyEnum::CAD())
            ->setDisable(true)
            ->setAddress("address")
            ->setOrganization("org inc")
            ->setCustomerid(54321)
            ->setDueOffsetDays(30)
            ->setLanguage("fr")
            ->setPoNumber("po nb")
            ->setCountry("country")
            ->setNotes("The notes")
            ->setIncludeUnbilledTime(true)
            ->setPaymentDetails("The details")
            ->setDiscountValue("5")
            ->setAutoBill(true)
            ->setCode('CAD')
            ->setRequireAutoBill(false)
            ->setLines($lines);

        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceProfileUpdateRequest($invoiceProfile);
        $request->setAccountId('id')
                ->setInvoiceProfileId("4543");

        $client->getOAuthTestClient()->processRequest($request);

        $this->validateRequest($client, $jsonRequest);
    }

    public function testInvoiceProfileDeleteRequest(): void
    {
        $jsonResponse = <<<JSON
{
    "response": {}
}
JSON;
        $jsonRequest  = <<<JSON
{
    "invoice_profile": {
        "vis_state": 1
    }
}
JSON;
        $client       = $this->preSuccess($jsonResponse);
        $request      = new InvoiceProfileDeleteRequest();
        $request->setAccountId('place');
        $request->setInvoiceProfileId(1990);
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertInstanceOf(EmptyResponse::class, $response);
        $this->validateUrl($client, 'accounting/account/place/invoice_profiles/invoice_profiles/1990');
        $this->validateRequest($client, $jsonRequest);
    }
}
