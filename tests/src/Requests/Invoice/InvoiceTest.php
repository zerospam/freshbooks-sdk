<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 09/07/18
 * Time: 5:00 PM
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Argument\IncludeArgument;
use ZEROSPAM\Freshbooks\Argument\SearchArrayArgument;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Invoice\InvoiceStatusEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Language\LanguageEnum;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\Collection\InvoiceCreateRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\Collection\InvoiceListReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\InvoiceDeleteRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\InvoiceReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\InvoiceSendEmailRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\InvoiceUpdateRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\ShareLink\InvoiceShareLinkReadRequest;
use ZEROSPAM\Freshbooks\Request\Data\AmountData;
use ZEROSPAM\Freshbooks\Request\Data\Gateway\GatewayTypeEnum;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceCreateData;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceEmailData;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceLineData;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceUpdateData;
use ZEROSPAM\Freshbooks\Response\Invoice\InvoiceResponse;

class InvoiceTest extends TestCase
{
    public function testGetInvoice(): void
    {
        $json
            = <<<JSON
{
    "response": {
        "result": {
            "invoice": {
                "province": "Kansas",
                "deposit_percentage": null,
                "create_date": "2018-07-10",
                "outstanding": {
                    "amount": "11.49",
                    "code": "USD"
                },
                "payment_status": "unpaid",
                "code": "000000",
                "ownerid": 1,
                "vat_number": "",
                "id": 129373,
                "gmail": false,
                "vat_name": null,
                "v3_status": "sent",
                "parent": 0,
                "country": "United States",
                "lname": "The test",
                "deposit_status": "none",
                "estimateid": 0,
                "ext_archive": 0,
                "template": "clean-grouped",
                "basecampid": 0,
                "generation_date": null,
                "show_attachments": false,
                "vis_state": 0,
                "current_organization": "Testing cool",
                "status": 2,
                "due_date": "2018-08-09",
                "updated": "2018-07-10 08:58:47",
                "terms": "",
                "description": "",
                "discount_description": null,
                "last_order_status": null,
                "street2": "",
                "deposit_amount": null,
                "paid": {
                    "amount": "0.00",
                    "code": "USD"
                },
                "invoiceid": 129373,
                "discount_total": {
                    "amount": "0.00",
                    "code": "USD"
                },
                "payment_details": "",
                "address": "",
                "invoice_number": "0000002",
                "customerid": 163701,
                "discount_value": "0",
                "accounting_systemid": "k0LBE",
                "return_uri": null,
                "due_offset_days": 30,
                "language": "en",
                "po_number": null,
                "display_status": "sent",
                "created_at": "2018-07-10 08:58:46",
                "autobill_status": null,
                "date_paid": null,
                "amount": {
                    "amount": "11.49",
                    "code": "USD"
                },
                "street": "1 Main Street",
                "city": "Beach City",
                "currency_code": "USD",
                "sentid": 1,
                "organization": "Testing cool",
                "dispute_status": null,
                "fname": "Testing",
                "notes": "",
                "auto_bill": false,
                "accountid": "k0LBE"
            }
        }
    }
}
JSON;

        $client  = $this->preSuccess($json);
        $request = new InvoiceReadRequest();
        $request->setAccountId('id');
        $request->setInvoiceId('1324');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("Kansas", $response->province);
        $this->assertFalse($response->gmail);
        $this->assertEquals("11.49", $response->outstanding->amount);
        $this->assertTrue($response->outstanding->currency->is(CurrencyEnum::USD()));
        $this->assertEquals('USD', $response->outstanding->code);
        $this->assertInstanceOf(Carbon::class, $response->due_date);
        $this->assertEquals("2018-08-09", $response->due_date->toDateString());
        $this->assertNull($response->lines);
    }

    public function testGetInvoiceList(): void
    {
        $json
            = <<<JSON
{
    "response": {
        "result": {
            "invoices": [
                {
                    "province": "Kansas",
                    "deposit_percentage": null,
                    "create_date": "2018-07-10",
                    "outstanding": {
                        "amount": "11.49",
                        "code": "USD"
                    },
                    "payment_status": "unpaid",
                    "code": "000000",
                    "ownerid": 1,
                    "vat_number": "",
                    "id": 129373,
                    "gmail": false,
                    "vat_name": null,
                    "v3_status": "sent",
                    "parent": 0,
                    "country": "United States",
                    "lname": "The test",
                    "deposit_status": "none",
                    "estimateid": 0,
                    "ext_archive": 0,
                    "template": "clean-grouped",
                    "basecampid": 0,
                    "generation_date": null,
                    "show_attachments": false,
                    "vis_state": 0,
                    "current_organization": "Testing cool",
                    "status": 2,
                    "due_date": "2018-08-09",
                    "updated": "2018-07-10 08:58:47",
                    "terms": "",
                    "description": "",
                    "discount_description": null,
                    "last_order_status": null,
                    "street2": "",
                    "deposit_amount": null,
                    "paid": {
                        "amount": "0.00",
                        "code": "USD"
                    },
                    "invoiceid": 129373,
                    "discount_total": {
                        "amount": "0.00",
                        "code": "USD"
                    },
                    "payment_details": "",
                    "address": "",
                    "invoice_number": "0000002",
                    "customerid": 163701,
                    "discount_value": "0",
                    "accounting_systemid": "k0LBE",
                    "return_uri": null,
                    "due_offset_days": 30,
                    "language": "en",
                    "po_number": null,
                    "display_status": "sent",
                    "created_at": "2018-07-10 08:58:46",
                    "autobill_status": null,
                    "date_paid": null,
                    "amount": {
                        "amount": "11.49",
                        "code": "USD"
                    },
                    "street": "1 Main Street",
                    "city": "Beach City",
                    "currency_code": "USD",
                    "sentid": 1,
                    "organization": "Testing cool",
                    "dispute_status": null,
                    "fname": "Testing",
                    "notes": "",
                    "auto_bill": false,
                    "accountid": "k0LBE"
                },
                {
                    "province": "",
                    "deposit_percentage": null,
                    "create_date": "2018-07-10",
                    "outstanding": {
                        "amount": "30.74",
                        "code": "CAD"
                    },
                    "payment_status": "unpaid",
                    "code": "",
                    "ownerid": 1,
                    "vat_number": "",
                    "id": 129371,
                    "gmail": false,
                    "vat_name": null,
                    "v3_status": "sent",
                    "parent": 0,
                    "country": "United States",
                    "lname": "Test",
                    "deposit_status": "none",
                    "estimateid": 0,
                    "ext_archive": 0,
                    "template": "clean-grouped",
                    "basecampid": 0,
                    "generation_date": null,
                    "show_attachments": false,
                    "vis_state": 0,
                    "current_organization": "test",
                    "status": 2,
                    "due_date": "2018-08-09",
                    "updated": "2018-07-10 08:54:43",
                    "terms": "10% discount: blah blah",
                    "description": "",
                    "discount_description": null,
                    "last_order_status": null,
                    "street2": "",
                    "deposit_amount": null,
                    "paid": {
                        "amount": "0.00",
                        "code": "CAD"
                    },
                    "invoiceid": 129371,
                    "discount_total": {
                        "amount": "-2.97",
                        "code": "CAD"
                    },
                    "payment_details": "",
                    "address": "",
                    "invoice_number": "0000001",
                    "customerid": 103807,
                    "discount_value": "10",
                    "accounting_systemid": "k0LBE",
                    "return_uri": null,
                    "due_offset_days": 30,
                    "language": "en",
                    "po_number": null,
                    "display_status": "sent",
                    "created_at": "2018-07-10 08:54:11",
                    "autobill_status": null,
                    "date_paid": null,
                    "amount": {
                        "amount": "30.74",
                        "code": "CAD"
                    },
                    "street": "",
                    "city": "",
                    "currency_code": "CAD",
                    "sentid": 1,
                    "organization": "test",
                    "dispute_status": null,
                    "fname": "Test",
                    "notes": "This is a test",
                    "auto_bill": false,
                    "accountid": "k0LBE"
                }
            ],
            "per_page": 15,
            "total": 2,
            "page": 1,
            "pages": 1
        }
    }
}
JSON;

        $client  = $this->preSuccess($json);
        $request = new InvoiceListReadRequest();
        $request->addArgument(new SearchArrayArgument('statusids', [
            InvoiceStatusEnum::PAID(),
            InvoiceStatusEnum::AUTO_PAID(),
            InvoiceStatusEnum::PARTIAL()
        ]));
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertCount(2, $response);
        $this->assertEquals(15, $response->getMetaData()->per_page);
        $this->assertEquals(2, $response->getMetaData()->total);
        $this->assertEquals(1, $response->getMetaData()->page);
        $this->assertEquals(1, $response->getMetaData()->pages);
        $this->assertInstanceOf(InvoiceResponse::class, $response[0]);
        $this->assertEquals("Testing cool", $response[0]->current_organization);
        $this->assertEquals('USD', $response[0]->currency_code);
        $this->assertTrue($response[0]->currency->is(CurrencyEnum::USD()));
        $this->assertEquals("10% discount: blah blah", $response[1]->terms);
        $this->assertEquals("-2.97", $response[1]->discount_total->amount);

        $this->validateQuery($client, 'search[statusids][]=4', 'search[statusids][]=5', 'search[statusids][]=8');
    }

    public function testGetInvoiceWithLines(): void
    {
        $json
            = <<<JSON
{
    "response": {
        "result": {
            "invoice": {
                "province": "Kansas",
                "deposit_percentage": null,
                "create_date": "2018-07-10",
                "outstanding": {
                    "amount": "11.49",
                    "code": "USD"
                },
                "payment_status": "unpaid",
                "code": "000000",
                "lines": [
                    {
                        "basecampid": 0,
                        "qty": "1",
                        "taxName2": "TVQ",
                        "modern_time_entries": [],
                        "taxName1": "TPS",
                        "taxNumber2": null,
                        "taxNumber1": null,
                        "taxAmount2": "9.975",
                        "taxAmount1": "5",
                        "type": 0,
                        "updated": "2018-07-10 11:20:00",
                        "description": "",
                        "taskno": 1,
                        "invoiceid": 129373,
                        "date": null,
                        "name": "Inbound filtering 1-5 seats",
                        "amount": {
                            "amount": "9.99",
                            "code": "USD"
                        },
                        "unit_cost": {
                            "amount": "9.99",
                            "code": "USD"
                        },
                        "modern_project_id": null,
                        "expenseid": 0,
                        "lineid": 3,
                        "compounded_tax": false
                    }
                ],
                "ownerid": 1,
                "vat_number": "",
                "id": 129373,
                "gmail": false,
                "vat_name": null,
                "v3_status": "sent",
                "parent": 0,
                "country": "United States",
                "lname": "The test",
                "deposit_status": "none",
                "estimateid": 0,
                "ext_archive": 0,
                "template": "clean-grouped",
                "basecampid": 0,
                "generation_date": null,
                "show_attachments": false,
                "vis_state": 0,
                "current_organization": "Testing cool",
                "status": 2,
                "due_date": "2018-08-09",
                "updated": "2018-07-10 08:58:47",
                "terms": "",
                "description": "",
                "discount_description": null,
                "last_order_status": null,
                "street2": "",
                "deposit_amount": null,
                "paid": {
                    "amount": "0.00",
                    "code": "USD"
                },
                "invoiceid": 129373,
                "discount_total": {
                    "amount": "0.00",
                    "code": "USD"
                },
                "payment_details": "",
                "address": "",
                "invoice_number": "0000002",
                "customerid": 163701,
                "discount_value": "0",
                "accounting_systemid": "k0LBE",
                "return_uri": null,
                "due_offset_days": 30,
                "language": "en",
                "po_number": null,
                "display_status": "sent",
                "created_at": "2018-07-10 08:58:46",
                "autobill_status": null,
                "date_paid": null,
                "amount": {
                    "amount": "11.49",
                    "code": "USD"
                },
                "street": "1 Main Street",
                "city": "Beach City",
                "currency_code": "USD",
                "sentid": 1,
                "organization": "Testing cool",
                "dispute_status": null,
                "fname": "Testing",
                "notes": "",
                "auto_bill": false,
                "accountid": "k0LBE"
            }
        }
    }
}
JSON;

        $client  = $this->preSuccess($json);
        $request = new InvoiceReadRequest();
        $request->setAccountId('id');
        $request->setInvoiceId('1324');
        $request->addArgument(new IncludeArgument('lines'));
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("Kansas", $response->province);
        $this->assertFalse($response->gmail);
        $this->assertEquals("11.49", $response->outstanding->amount);
        $this->assertTrue($response->outstanding->currency->is(CurrencyEnum::USD()));
        $this->assertEquals('USD', $response->outstanding->code);
        $this->assertInstanceOf(Carbon::class, $response->due_date);
        $this->assertEquals("2018-08-09", $response->due_date->toDateString());
        $this->assertCount(1, $response->lines);

        $line = $response->lines[0];
        $this->assertEquals("9.99", $line->amount->amount);
        $this->assertEquals("2018-07-10", $line->updated->toDateString());
        $this->assertEquals("5", $line->taxAmount1);
    }

    public function testGetInvoiceShareLink(): void
    {
        $json = <<<JSON
{
    "response": {
        "result": {
            "share_link": {
                "resourceid": "129373",
                "share_method": "share_link",
                "share_link": "https://my.freshbooks.com/#/link/example",
                "resource_type": "invoice",
                "clientid": 163701
            }
        }
    }
}
JSON;

        $client  = $this->preSuccess($json);
        $request = new InvoiceShareLinkReadRequest();
        $request->setAccountId('id');
        $request->setInvoiceId('1324');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("129373", $response->resourceid);
        $this->assertEquals("share_link", $response->share_method);
        $this->assertEquals("https://my.freshbooks.com/#/link/example", $response->share_link);
    }

    public function testCreateInvoice(): void
    {
        $jsonResponse = <<<JSON
{"response":{"result":{"invoice":{"accountid":"aaaa","accounting_systemid":"aaa","address":"","allowed_gateways":[{"allowedid":1,"connectionid":"aaaaaaa","gateway_name":"stripe","gatewayid":26,"id":1}],"amount":{"amount":"0.00","code":"CAD"},"attachments":[],"audit_logs":[{"acting_contactid":-1,"acting_level":3,"acting_userid":1,"amount":{"amount":"0.00","code":"CAD"},"autobill_status":null,"created_at":"2019-01-11 15:01:00","currency_code":"CAD","customer_contactid":null,"customerid":1111,"display_status":"draft","dispute_status":null,"event":"Created","id":1,"invoiceid":1,"last_order_status":null,"logid":1,"num_lines":0,"paid":{"amount":"0.00","code":"CAD"},"payment_status":"unpaid","status":1}],"auto_bill":false,"autobill_status":null,"basecampid":0,"city":"Ville","client_audits":[],"code":"X0X X0X","contacts":[{"contactid":-1,"email":"aa@aa.com","fname":"aa","invoiceid":1,"lname":"aa","userid":1}],"country":"CA","create_date":"2019-01-11","created_at":"2019-01-11 10:01:00","currency_code":"CAD","current_organization":"aa inc.","customerid":1,"date_paid":null,"deposit_amount":null,"deposit_percentage":null,"deposit_status":"none","description":"","discount_description":null,"discount_total":{"amount":"0.00","code":"CAD"},"discount_value":"0","display_status":"draft","dispute_status":null,"due_date":"2019-02-10","due_offset_days":30,"estimateid":0,"ext_archive":0,"fname":"Dany","fulfillment_date":null,"generation_date":null,"gmail":false,"id":1,"invoice_number":"TEST-2","invoice_profile":null,"invoiceid":1,"language":"fr","last_order_status":null,"late_fee":{"compounded_tax":false,"created_at":"2019-01-11 10:01:00","days":30,"enabled":true,"first_tax_name":null,"first_tax_percent":"0","invoiceid":1,"repeat":false,"second_tax_name":null,"second_tax_percent":"0","type":"percent","updated_at":null,"value":"2"},"late_reminders":[{"body":null,"created_at":"2019-01-11 10:01:00","delay":-7,"enabled":true,"invoiceid":1,"position":1,"subject":null,"updated_at":null},{"body":null,"created_at":"2019-01-11 10:01:00","delay":0,"enabled":true,"invoiceid":1,"position":2,"subject":null,"updated_at":null},{"body":null,"created_at":"2019-01-11 10:01:00","delay":7,"enabled":true,"invoiceid":1,"position":3,"subject":null,"updated_at":null}],"lines":[],"lname":"aa","notes":"","organization":"aa inc.","outstanding":{"amount":"0.00","code":"CAD"},"owner":{"email":"aa@aa.aa","fname":"aa","lname":"aa","organization":"","userid":1},"ownerid":1,"paid":{"amount":"0.00","code":"CAD"},"parent":0,"payment_details":"","payment_schedule":[],"payment_status":"unpaid","po_number":null,"presentation":{"date_format":"yyyy-mm-dd","description_heading":null,"hours_heading":null,"image_banner_position_y":0,"image_banner_src":null,"image_logo_src":"aa","invoiceid":1,"item_heading":null,"label":null,"quantity_heading":null,"rate_heading":null,"task_heading":null,"theme_font_name":"modern","theme_layout":"simple","theme_primary_color":"#1f3970","time_entry_notes_heading":null,"unit_cost_heading":null},"province":"AA","return_uri":null,"sentid":1,"show_attachments":false,"status":1,"street":"aa","street2":"","system":{"bus_phone":"aa","city":"aa","code":"aa","country":"Canada","currency_code":"CAD","date":"2018-05-09 15:18:17","fax":"","info_email":"aa@aa.aa","mob_phone":"","modern_system":true,"name":"aa.","province":"aa","street":"aa","street2":null,"subdomain":"","vat_name":null,"vat_number":"","vis_state":0},"template":"clean-grouped","terms":null,"updated":"2019-01-11 10:01:00","v3_status":"draft","vat_name":null,"vat_number":null,"vis_state":0}}}}
JSON;
        $jsonRequest  = <<<JSON
{
  "invoice": {
    "ownerid": 1,
    "estimateid": 0,
    "basecampid": 0,
    "status": 1,
    "parent": 1,
    "auto_bill": true,
    "invoice_number": "123456",
    "customerid": 9876,
    "create_date": "2018-07-01",
    "generation_date": null,
    "discount_value": "15",
    "discount_description": "This is a 15% discount",
    "po_number": "121",
    "template": "template",
    "currency_code": "CAD",
    "language": "fr",
    "terms": "You must follow these terms",
    "notes": "There are some notes here",
    "address": "1 Main Street",
    "return_uri": "deprecated",
    "deposit_percentage": "5",
    "show_attachments": false,
    "ext_archive": 0,
    "allowed_gatewayids": [
      26
    ],
    "street": "1 Main Street",
    "street2": "app. 1",
    "city": "Springfield",
    "province": "ON",
    "code": "H0H 0H0",
    "country": "Canada",
    "organization": "Company Inc.",
    "fname": "John",
    "lname": "Doe",
    "vat_name": "TAX",
    "vat_number": "1729",
    "due_offset_days": 30,
    "lines": [{
        "type": 2,
        "expenseid": 0,
        "qty": 3,
        "unit_cost": {
            "amount": "9.99",
            "code": "CAD"
        },
        "description": "Description of the item",
        "name": "Item name",
        "taxName1": "tax1",
        "taxAmount1": "5",
        "taxName2": "tax2",
        "taxAmount2": "10"
     }, {
        "type": 1,
        "expenseid": 5,
        "qty": 1,
        "unit_cost": {
            "amount": "4.99",
            "code": "CAD"
        },
        "description": "Other description",
        "name": "Item again"
     }]
  }
}
JSON;

        $lines = [
            (new InvoiceLineData)
                ->setType(2)
                ->setExpenseid(0)
                ->setQty(3)
                ->setUnitCost((new AmountData)->setAmount("9.99")->setCode('CAD'))
                ->setDescription("Description of the item")
                ->setName("Item name")
                ->setTaxName1("tax1")
                ->setTaxAmount1("5")
                ->setTaxName2("tax2")
                ->setTaxAmount2("10"),
            (new InvoiceLineData)
                ->setType(1)
                ->setExpenseid(5)
                ->setQty(1)
                ->setUnitCost((new AmountData)->setAmount("4.99")->setCode('CAD'))
                ->setDescription("Other description")
                ->setName("Item again"),
        ];

        $invoice = (new InvoiceCreateData)
            ->setAllowedGateways([GatewayTypeEnum::STRIPE()])
            ->setOwnerid(1)
            ->setEstimateid(0)
            ->setBasecampid(0)
            ->setStatus(1)
            ->setParent(1)
            ->setAutoBill(true)
            ->setInvoiceNumber("123456")
            ->setCustomerid(9876)
            ->setCreateDate(Carbon::create(2018, 07, 01))
            ->setGenerationDate(null)
            ->setDiscountValue("15")
            ->setDiscountDescription("This is a 15% discount")
            ->setPoNumber("121")
            ->setTemplate("template")
            ->setCurrency(CurrencyEnum::CAD())
            ->setLanguage(LanguageEnum::FR())
            ->setTerms("You must follow these terms")
            ->setNotes("There are some notes here")
            ->setAddress("1 Main Street")
            ->setReturnUri("deprecated")
            ->setDepositPercentage("5")
            ->setShowAttachments(false)
            ->setExtArchive(0)
            ->setStreet("1 Main Street")
            ->setStreet2("app. 1")
            ->setCity("Springfield")
            ->setProvince("ON")
            ->setCode("H0H 0H0")
            ->setCountry("Canada")
            ->setOrganization("Company Inc.")
            ->setFname("John")
            ->setLname("Doe")
            ->setVatName("TAX")
            ->setVatNumber("1729")
            ->setDueOffsetDays(30)
            ->setLines($lines);


        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceCreateRequest($invoice);
        $request->setAccountId('id');

        $client->getOAuthTestClient()->processRequest($request);

        $this->validateRequest($client, $jsonRequest);
    }

    public function testUpdateInvoice(): void
    {
        $jsonResponse = <<<JSON
{
  "response": {
    "result": {
      "invoice": {
      }
    }
  }
}
JSON;
        $jsonRequest  = <<<JSON
{
  "invoice": {
    "basecampid": 0,
    "status": 1,
    "parent": 1,
    "auto_bill": true,
    "invoice_number": "123456",
    "customerid": 9876,
    "create_date": "2018-07-01",
    "generation_date": null,
    "discount_value": "15",
    "discount_description": "This is a 15% discount",
    "po_number": "121",
    "template": "template",
    "currency_code": "CAD",
    "language": "fr",
    "terms": "You must follow these terms",
    "notes": "There are some notes here",
    "address": "1 Main Street",
    "return_uri": "deprecated",
    "deposit_percentage": "5",
    "show_attachments": false,
    "ext_archive": 0,
    "street": "1 Main Street",
    "street2": "app. 1",
    "city": "Springfield",
    "province": "ON",
    "code": "H0H 0H0",
    "country": "Canada",
    "organization": "Company Inc.",
    "fname": "John",
    "lname": "Doe",
    "vat_name": "TAX",
    "vat_number": "1729",
    "due_offset_days": 30,
    "lines": [{
        "type": 2,
        "expenseid": 0,
        "qty": 3,
        "unit_cost": {
            "amount": "9.99",
            "code": "CAD"
        },
        "description": "Description of the item",
        "name": "Item name",
        "taxName1": "tax1",
        "taxAmount1": "5",
        "taxName2": "tax2",
        "taxAmount2": "10"
     }, {
        "type": 1,
        "expenseid": 5,
        "qty": 1,
        "unit_cost": {
            "amount": "4.99",
            "code": "CAD"
        },
        "description": "Other description",
        "name": "Item again"
     }]
  }
}
JSON;

        $lines = [
            (new InvoiceLineData)
                ->setType(2)
                ->setExpenseid(0)
                ->setQty(3)
                ->setUnitCost((new AmountData)->setAmount("9.99")->setCode('CAD'))
                ->setDescription("Description of the item")
                ->setName("Item name")
                ->setTaxName1("tax1")
                ->setTaxAmount1("5")
                ->setTaxName2("tax2")
                ->setTaxAmount2("10"),
            (new InvoiceLineData)
                ->setType(1)
                ->setExpenseid(5)
                ->setQty(1)
                ->setUnitCost((new AmountData)->setAmount("4.99")->setCode('CAD'))
                ->setDescription("Other description")
                ->setName("Item again"),
        ];

        $invoice = (new InvoiceUpdateData)
            ->setBasecampid(0)
            ->setStatus(1)
            ->setParent(1)
            ->setAutoBill(true)
            ->setInvoiceNumber("123456")
            ->setCustomerid(9876)
            ->setCreateDate(Carbon::create(2018, 07, 01))
            ->setGenerationDate(null)
            ->setDiscountValue("15")
            ->setDiscountDescription("This is a 15% discount")
            ->setPoNumber("121")
            ->setTemplate("template")
            ->setCurrency(CurrencyEnum::CAD())
            ->setLanguage(LanguageEnum::FR())
            ->setTerms("You must follow these terms")
            ->setNotes("There are some notes here")
            ->setAddress("1 Main Street")
            ->setReturnUri("deprecated")
            ->setDepositPercentage("5")
            ->setShowAttachments(false)
            ->setExtArchive(0)
            ->setStreet("1 Main Street")
            ->setStreet2("app. 1")
            ->setCity("Springfield")
            ->setProvince("ON")
            ->setCode("H0H 0H0")
            ->setCountry("Canada")
            ->setOrganization("Company Inc.")
            ->setFname("John")
            ->setLname("Doe")
            ->setVatName("TAX")
            ->setVatNumber("1729")
            ->setDueOffsetDays(30)
            ->setLines($lines);


        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceUpdateRequest($invoice);
        $request->setAccountId('id')
                ->setInvoiceId("1232");

        $client->getOAuthTestClient()->processRequest($request);

        $this->validateRequest($client, $jsonRequest);
    }

    public function testSendInvoiceEmail(): void
    {
        $jsonResponse = <<<JSON
{
  "response": {
    "result": {
      "invoice": {
      }
    }
  }
}
JSON;
        $jsonRequest  = <<<JSON
{
  "invoice": {
    "email_body": "Message body",
    "email_subject": "Your invoice",
    "email_recipients": ["email@example.com", "accounting@example.com"],
    "action_email": true 
  }
}
JSON;

        $invoice = (new InvoiceEmailData)
            ->setEmailBody("Message body")
            ->setEmailSubject("Your invoice")
            ->setEmailRecipients(["email@example.com", "accounting@example.com"]);


        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceSendEmailRequest($invoice);
        $request->setAccountId('id')
                ->setInvoiceId("1232");

        $client->getOAuthTestClient()->processRequest($request);

        $this->validateRequest($client, $jsonRequest);
    }

    public function testDeleteInvoice(): void
    {
        $jsonResponse = <<<JSON
{
    "response": {}
}
JSON;

        $client  = $this->preSuccess($jsonResponse);
        $request = new InvoiceDeleteRequest();
        $request->setAccountId('qwert');
        $request->setInvoiceId(12345);
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertInstanceOf(EmptyResponse::class, $response);
        $this->validateUrl($client, 'accounting/account/qwert/invoices/invoices/12345');
    }
}
