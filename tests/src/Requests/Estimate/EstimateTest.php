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
use ZEROSPAM\Freshbooks\Business\Enums\Estimate\StatusEnum;
use ZEROSPAM\Freshbooks\Business\Enums\Estimate\UIStatusEnum;
use ZEROSPAM\Freshbooks\Request\Call\Estimate\EstimateDeleteRequest;
use ZEROSPAM\Freshbooks\Request\Call\Estimate\EstimateReadRequest;
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
        $this->assertEquals("EUR", $response->amount->code);
        $this->assertInstanceOf(Carbon::class, $response->updated);
        $this->assertInstanceOf(EstimateResponse::class, $response);
        $this->assertInstanceOf(CurrencyEnum::class, $response->currency_code);
        $this->assertEquals(CurrencyEnum::EUR, $response->currency_code->getValue());
        $this->assertEquals(StatusEnum::DRAFT, $response->status->getValue());
        $this->assertEquals(UIStatusEnum::DRAFT, $response->ui_status->getValue());
        $this->assertEquals(UIStatusEnum::DRAFT, $response->display_status->getValue());
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
        $this->assertEquals("EUR", $response->amount->code);
        $this->assertCount(2, $response->lines);

        $line = $response->lines[0];
        $this->assertEquals('TVQ', $line->taxName2);
        $this->assertEquals('1', $line->qty);
        $this->assertEquals('Inbound filtering 1-5 seats', $line->name);
        $this->assertEquals('9.99', $line->amount->amount);
        $this->validateUrl($client, 'accounting/account/id/estimates/estimates/16023');
    }

    public function testDeleteInvoice(): void
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
}