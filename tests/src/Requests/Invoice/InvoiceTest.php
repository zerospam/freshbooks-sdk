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
use ZEROSPAM\Freshbooks\Request\Call\Invoice\CreateInvoiceRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\DeleteInvoiceRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\GetInvoiceListRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\GetInvoiceRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\ShareLink\GetInvoiceShareLinkRequest;
use ZEROSPAM\Freshbooks\Request\Data\AmountData;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceCreateData;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceLineData;
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

        $client = $this->preSuccess($json);
        $request = new GetInvoiceRequest();
        $request->setAccountId('id');
        $request->setInvoiceId('1324');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("Kansas", $response->province);
        $this->assertFalse($response->gmail);
        $this->assertEquals("11.49", $response->outstanding->amount);
        $this->assertEquals("USD", $response->outstanding->code);
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

        $client = $this->preSuccess($json);
        $request = new GetInvoiceListRequest();
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
        $this->assertEquals("10% discount: blah blah", $response[1]->terms);
        $this->assertEquals("-2.97", $response[1]->discount_total->amount);
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

        $client = $this->preSuccess($json);
        $request = new GetInvoiceRequest();
        $request->setAccountId('id');
        $request->setInvoiceId('1324');
        $request->addArgument(new IncludeArgument('lines'));
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("Kansas", $response->province);
        $this->assertFalse($response->gmail);
        $this->assertEquals("11.49", $response->outstanding->amount);
        $this->assertEquals("USD", $response->outstanding->code);
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

        $client = $this->preSuccess($json);
        $request = new GetInvoiceShareLinkRequest();
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
{
  "response": {
    "result": {
      "invoice": {
      }
    }
  }
}
JSON;
        $jsonRequest = <<<JSON
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
                ->setUnitCost((new AmountData)->setAmount("9.99")->setCode("CAD"))
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
                ->setUnitCost((new AmountData)->setAmount("4.99")->setCode("CAD"))
                ->setDescription("Other description")
                ->setName("Item again"),
        ];

        $invoice = (new InvoiceCreateData)
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
            ->setCurrencyCode("CAD")
            ->setLanguage("fr")
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


        $client = $this->preSuccess($jsonResponse);
        $request = new CreateInvoiceRequest($invoice);
        $request->setAccountId('id');

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

        $client = $this->preSuccess($jsonResponse);
        $request = new DeleteInvoiceRequest();
        $request->setAccountId('qwert');
        $request->setInvoiceId(12345);
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertInstanceOf(EmptyResponse::class, $response);
        $this->validateUrl($client, 'accounting/account/qwert/invoices/invoices/12345');
    }
}
