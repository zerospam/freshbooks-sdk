<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 1:38 PM
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Estimate;


use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Argument\IncludeArgument;
use ZEROSPAM\Freshbooks\Business\Enums\Currency\CurrencyEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Estimate\EstimateStatusEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Estimate\UIEstimateStatusEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Language\LanguageEnum;
use ZEROSPAM\Freshbooks\Request\Call\Estimate\Collection\EstimateCreateRequest;
use ZEROSPAM\Freshbooks\Request\Call\Estimate\EstimateDeleteRequest;
use ZEROSPAM\Freshbooks\Request\Call\Estimate\EstimateReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Estimate\EstimateUpdateRequest;
use ZEROSPAM\Freshbooks\Request\Data\AmountData;
use ZEROSPAM\Freshbooks\Request\Data\Estimate\EstimateData;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceLineData;
use ZEROSPAM\Freshbooks\Response\Estimate\EstimateResponse;

class EstimateTest extends TestCase
{
    public function testGetEstimate(): void
    {
        $json
            = <<<JSON
            {
  "response": {
    "result": {
      "estimate": {
        "province": "Quebec",
        "code": "H1H0H0",
        "create_date": "2018-08-10",
        "display_status": "draft",
        "require_client_signature": false,
        "street": "8 rue Principale",
        "vat_number": null,
        "ownerid": 1,
        "id": 16023,
        "invoiced": false,
        "city": "Santa Claus",
        "lname": "Des Souffleuses",
        "ext_archive": 0,
        "fname": "Yvan",
        "vis_state": 0,
        "current_organization": "Souffleuses.com",
        "status": 1,
        "estimate_number": "123459",
        "updated": "2018-08-10 13:53:01",
        "terms": "Terms and conditions",
        "description": "description 1-5",
        "vat_name": null,
        "street2": "",
        "template": "clean-grouped",
        "ui_status": "draft",
        "discount_total": {
          "amount": "-0.55",
          "code": "EUR"
        },
        "address": "",
        "accepted": false,
        "customerid": 173341,
        "accounting_systemid": "k0LBE",
        "organization": "Souffleuses.com",
        "language": "fr",
        "po_number": "PO1234",
        "country": "Canada",
        "notes": "Bank transfer details",
        "reply_status": null,
        "amount": {
          "amount": "11.99",
          "code": "EUR"
        },
        "estimateid": 16023,
        "sentid": 1,
        "discount_value": "5",
        "rich_proposal": false,
        "created_at": "2018-08-10 13:53:01",
        "currency_code": "EUR"
      }
    }
  }
}
JSON;

        $client  = $this->preSuccess($json);
        $request = new EstimateReadRequest();
        $request->setAccountId('id');
        $request->setEstimateId('16023');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("Quebec", $response->province);
        $this->assertEquals("11.99", $response->amount->amount);
        $this->assertTrue($response->amount->code->is(CurrencyEnum::EUR()));
        $this->assertInstanceOf(Carbon::class, $response->updated);
        $this->assertInstanceOf(EstimateResponse::class, $response);
        $this->assertInstanceOf(CurrencyEnum::class, $response->currency_code);
        $this->assertEquals(CurrencyEnum::EUR, $response->currency_code->getValue());
        $this->assertEquals(EstimateStatusEnum::DRAFT, $response->status->getValue());
        $this->assertEquals(UIEstimateStatusEnum::DRAFT, $response->ui_status->getValue());
        $this->assertEquals(UIEstimateStatusEnum::DRAFT, $response->display_status->getValue());
    }

    public function testGetEstimateWithLines()
    {
        $json = <<<JSON
{
  "response": {
    "result": {
      "estimate": {
        "province": "Quebec",
        "code": "H1H0H0",
        "create_date": "2018-08-10",
        "display_status": "draft",
        "require_client_signature": false,
        "street": "8 rue Principale",
        "vat_number": null,
        "ownerid": 1,
        "id": 16023,
        "invoiced": false,
        "city": "Santa Claus",
        "lname": "Des Souffleuses",
        "ext_archive": 0,
        "fname": "Yvan",
        "vis_state": 0,
        "current_organization": "Souffleuses.com",
        "status": 1,
        "estimate_number": "123459",
        "updated": "2018-08-10 13:53:01",
        "terms": "Terms and conditions",
        "description": "description 1-5",
        "vat_name": null,
        "street2": "",
        "template": "clean-grouped",
        "ui_status": "draft",
        "discount_total": {
          "amount": "-0.55",
          "code": "EUR"
        },
        "address": "",
        "accepted": false,
        "customerid": 173341,
        "accounting_systemid": "k0LBE",
        "organization": "Souffleuses.com",
        "language": "fr",
        "po_number": "PO1234",
        "country": "Canada",
        "notes": "Bank transfer details",
        "reply_status": null,
        "amount": {
          "amount": "11.99",
          "code": "EUR"
        },
        "estimateid": 16023,
        "sentid": 1,
        "discount_value": "5",
        "rich_proposal": false,
        "created_at": "2018-08-10 13:53:01",
        "currency_code": "EUR",
        "lines": [
          {
            "taxNumber2": "456",
            "taxNumber1": "123",
            "description": "description 1-5",
            "compounded_tax": false,
            "unit_cost": {
              "amount": "9.99",
              "code": "EUR"
            },
            "qty": "1",
            "amount": {
              "amount": "9.99",
              "code": "EUR"
            },
            "estimateid": 16023,
            "taxName2": "TVQ",
            "taxName1": "TPS",
            "taskno": 1,
            "taxAmount2": "9.975",
            "taxAmount1": "5",
            "type": 0,
            "name": "Inbound filtering 1-5 seats"
          },
          {
            "taxNumber2": "456",
            "taxNumber1": "123",
            "description": "description 16-100",
            "compounded_tax": false,
            "unit_cost": {
              "amount": "0.99",
              "code": "EUR"
            },
            "qty": "1",
            "amount": {
              "amount": "0.99",
              "code": "EUR"
            },
            "estimateid": 16023,
            "taxName2": "TVQ",
            "taxName1": "TPS",
            "taskno": 2,
            "taxAmount2": "9.975",
            "taxAmount1": "5",
            "type": 0,
            "name": "Inbound filtering 16-100 seats"
          }
        ]
      }
    }
  }
}
JSON;

        $client  = $this->preSuccess($json);
        $request = new EstimateReadRequest();
        $request->setAccountId('id');
        $request->setEstimateId('16023');
        $request->addArgument(new IncludeArgument('lines'));
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("Quebec", $response->province);
        $this->assertEquals("11.99", $response->amount->amount);
        $this->assertTrue($response->amount->code->is(CurrencyEnum::EUR()));
        $this->assertCount(2, $response->lines);

        $line = $response->lines[0];
        $this->assertEquals('TVQ', $line->taxName2);
        $this->assertEquals('1', $line->qty);
        $this->assertEquals('Inbound filtering 1-5 seats', $line->name);
        $this->assertEquals('9.99', $line->amount->amount);
        $this->validateUrl($client, 'accounting/account/id/estimates/estimates/16023');
    }

    public function testDeleteEstimate(): void
    {
        $jsonResponse = <<<JSON
{
    "response": {}
}
JSON;

        $client  = $this->preSuccess($jsonResponse);
        $request = new EstimateDeleteRequest();
        $request->setAccountId('id');
        $request->setEstimateId(16023);
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertInstanceOf(EmptyResponse::class, $response);
        $this->validateUrl($client, 'accounting/account/id/estimates/estimates/16023');
    }

    public function testCreateEstimate(): void
    {
        $jsonResponse = <<<JSON
{
    "response": {
        "result": {
            "estimate": {
                "province": "Province",
                "code": "Code",
                "create_date": "2018-01-01",
                "display_status": "draft",
                "require_client_signature": false,
                "street": "main street",
                "vat_number": "1234",
                "ownerid": 1,
                "id": 16473,
                "invoiced": false,
                "city": "City",
                "lname": "Doe",
                "ext_archive": 0,
                "fname": "John",
                "vis_state": 0,
                "current_organization": "Yvan Des Souffleuses Inc.",
                "status": 1,
                "estimate_number": "11",
                "updated": "2018-08-14 13:48:23",
                "terms": "Terms and conditions",
                "description": "",
                "vat_name": "vat name",
                "street2": "app. 1",
                "template": "clean-grouped",
                "ui_status": "draft",
                "discount_total": {
                    "amount": "0.00",
                    "code": "CAD"
                },
                "address": "5",
                "accepted": false,
                "customerid": 180265,
                "accounting_systemid": "k0LBE",
                "organization": "Company name Inc.",
                "language": "en",
                "po_number": "H0H 0H0",
                "country": "Country",
                "notes": "Notes to the client",
                "reply_status": null,
                "amount": {
                    "amount": "0.00",
                    "code": "CAD"
                },
                "estimateid": 16473,
                "sentid": 1,
                "discount_value": "5",
                "rich_proposal": false,
                "created_at": "2018-08-14 13:48:23",
                "currency_code": "CAD"
            }
        }
    }
}
JSON;
        $jsonRequest  = <<<JSON
{
  "estimate": {
    "estimate_number": "11",
    "customerid": 180265,
    "create_date": "2018-01-01",
    "discount_value": "5",
    "po_number": "H0H 0H0",
    "template": "clean-grouped",
    "currency_code": "cad",
    "language": "en",
    "terms": "Terms and conditions",
    "notes": "Notes to the client",
    "address": "5",
    "ext_archive": 0,
    "street": "main street",
    "street2": "app. 1",
    "city": "City",
    "province": "Province",
    "code": "Code",
    "country": "Country",
    "organization": "Company name Inc.",
    "fname": "John",
    "lname": "Doe",
    "vat_name": "vat name",
    "vat_number": "1234"
  }
}
JSON;

        $estimate = (new EstimateData())
            ->setEstimateNumber('11')
            ->setCustomerid(180265)
            ->setCreateDate(Carbon::create(2018, 01, 01))
            ->setDiscountValue("5")
            ->setPoNumber("H0H 0H0")
            ->setTemplate("clean-grouped")
            ->setCurrencyCode(CurrencyEnum::CAD())
            ->setLanguage(LanguageEnum::EN())
            ->setTerms("Terms and conditions")
            ->setNotes("Notes to the client")
            ->setAddress("5")
            ->setExtArchive(0)
            ->setStreet("main street")
            ->setStreet2("app. 1")
            ->setCity("City")
            ->setProvince("Province")
            ->setCode("Code")
            ->setCountry("Country")
            ->setOrganization("Company name Inc.")
            ->setFname("John")
            ->setLname("Doe")
            ->setVatName("vat name")
            ->setVatNumber('1234');

        $line1 = new InvoiceLineData();
        $line1->setDescription('Description')
              ->setType(0)
              ->setTaxName1('Tax 1')
              ->setTaxAmount1('10')
              ->setName('Paperwork')
              ->setQty(1)
              ->setTaxName2('Tax 2')
              ->setTaxAmount2('5')
              ->setUnitCost(
                  (new AmountData())
                      ->setAmount('1000')
                      ->setCode(CurrencyEnum::CAD())
              );

        $estimate->setLines([$line1]);

        $client  = $this->preSuccess($jsonResponse);
        $request = new EstimateCreateRequest($estimate);
        $request->setAccountId('id');

        $client->getOAuthTestClient()->processRequest($request);
        $response = $request->getResponse();

        $this->validateRequest($client, $jsonRequest);
        $this->validateUrl($client, 'accounting/account/id/estimates/estimates');
        $this->assertTrue($response->currency_code->is(CurrencyEnum::CAD()));
        $this->assertTrue($response->display_status->is(UIEstimateStatusEnum::DRAFT()));
        $this->assertTrue($response->language->is(LanguageEnum::EN()));
    }

    public function testEstimateUpdate()
    {
        $jsonResponse = <<<JSON
        {
    "response": {
        "result": {
            "estimate": {
                "province": "Province",
                "code": "Code",
                "create_date": "2018-01-01",
                "display_status": "draft",
                "require_client_signature": false,
                "street": "main street",
                "vat_number": "1234",
                "ownerid": 1,
                "id": 16479,
                "invoiced": false,
                "city": "City",
                "lname": "Doe",
                "ext_archive": 0,
                "fname": "John",
                "vis_state": 0,
                "current_organization": "Yvan Des Souffleuses Inc.",
                "status": 1,
                "estimate_number": "12",
                "updated": "2018-08-14 15:39:38",
                "terms": "Terms and conditions",
                "description": "",
                "vat_name": "vat name",
                "street2": "app. 1",
                "template": "clean-grouped",
                "ui_status": "draft",
                "discount_total": {
                    "amount": "0.00",
                    "code": "CAD"
                },
                "address": "5",
                "accepted": false,
                "customerid": 180265,
                "accounting_systemid": "k0LBE",
                "organization": "Company name Inc.",
                "language": "es",
                "po_number": "H0H 0H0",
                "country": "Country",
                "notes": "Notes to the client",
                "reply_status": null,
                "amount": {
                    "amount": "0.00",
                    "code": "CAD"
                },
                "estimateid": 16479,
                "sentid": 1,
                "discount_value": "5",
                "rich_proposal": false,
                "created_at": "2018-08-14 13:58:52",
                "currency_code": "CAD"
            }
        }
    }
}
JSON;

        $jsonRequest = <<<JSON
{
  "estimate": {
     "language": "es"
  }
}
JSON;

        $client = $this->preSuccess($jsonResponse);

        $requestData = new EstimateData();
        $requestData->setLanguage(LanguageEnum::ES());

        $request = new EstimateUpdateRequest($requestData);
        $request->setAccountId('id')
                ->setEstimateId(16479);

        $client->getOAuthTestClient()->processRequest($request);
        $response = $request->getResponse();

        $this->validateRequest($client, $jsonRequest);
        $this->validateUrl($client, 'accounting/account/id/estimates/estimates/16479');
        $this->assertTrue($response->language->is(LanguageEnum::ES()));

    }
}