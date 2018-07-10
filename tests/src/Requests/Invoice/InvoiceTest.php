<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 09/07/18
 * Time: 5:00 PM
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Invoice;

use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Argument\IncludeArgument;
use ZEROSPAM\Freshbooks\Request\Invoice\GetInvoiceListRequest;
use ZEROSPAM\Freshbooks\Request\Invoice\GetInvoiceRequest;
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

        $client  = $this->preSuccess($json);
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

        $client  = $this->preSuccess($json);
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
}
