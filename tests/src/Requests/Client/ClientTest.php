<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-20
 * Time: 15:12
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Client;

use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Request\Clients\ClientListRequest;
use ZEROSPAM\Freshbooks\Response\Clients\ClientResponse;

class ClientTest extends TestCase
{

    public function testClientCollection(): void
    {
        $json
            = <<<JSON
{"response": {"result": {"per_page": 6, "total": 1, "page": 1, "clients": [{"allow_late_notifications": true, "num_logins": 0, "updated": "2018-06-08 10:56:23", "last_activity": null, "s_code": "", "vat_number": "", "pref_email": true, "id": 103807, "direct_link_token": null, "s_province": "", "note": null, "s_country": "", "credit_balance": [], "s_street2": "", "statement_token": null, "lname": "Test", "mob_phone": "", "role": "client", "fname": "Test", "last_login": null, "company_industry": null, "subdomain": null, "email": "test@test.com", "username": "testtest", "fax": "", "home_phone": null, "vat_name": null, "p_city": "", "p_code": "", "allow_late_fees": true, "p_country": "United States", "company_size": null, "accounting_systemid": "k0LBE", "bus_phone": "", "p_province": "", "signup_date": "2018-06-08 14:56:22", "language": "en", "level": 0, "notified": false, "userid": 103807, "p_street2": "", "pref_gmail": false, "vis_state": 0, "s_city": "", "s_street": "", "organization": "test", "p_street": "", "currency_code": "CAD"}], "pages": 1}}}
JSON;

        $client  = $this->preSuccess($json);
        $request = new ClientListRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);


        $response = $request->getResponse();
        $this->assertCount(1, $response);
        $this->assertEquals(6, $response->getMetaData()->per_page);
        $this->assertInstanceOf(ClientResponse::class, $response[0]);
        $this->assertEquals("Test", $response[0]->lname);
        $this->assertEquals(0, $response[0]->numLogins);
    }
}
