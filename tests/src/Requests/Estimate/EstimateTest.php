<?php
/**
 * Created by PhpStorm.
 * User: pbb
 * Date: 10/08/18
 * Time: 1:38 PM
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Estimate;


use Carbon\Carbon;
use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
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
    }
}