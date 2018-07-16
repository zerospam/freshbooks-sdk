<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-20
 * Time: 15:12
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Client;

use ZEROSPAM\Framework\SDK\Response\Api\EmptyResponse;
use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Request\Call\Clients\ClientReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Clients\Collection\ClientListRequest;
use ZEROSPAM\Freshbooks\Request\Call\Clients\CreateClientRequest;
use ZEROSPAM\Freshbooks\Request\Call\Clients\DeleteClientRequest;
use ZEROSPAM\Freshbooks\Request\Call\Clients\UpdateClientRequest;
use ZEROSPAM\Freshbooks\Request\Data\Client\ClientData;
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

    public function testGetOneClient(): void
    {
        $json
            = <<<JSON
{"response":{"result":{"client":{"allow_late_notifications":true,"fax":"","last_activity":null,"num_logins":0,"vat_number":"","pref_email":true,"id":103807,"direct_link_token":null,"s_province":"","note":null,"s_city":"","s_street2":"","statement_token":null,"lname":"Test","mob_phone":"","last_login":null,"fname":"Test","role":"client","company_industry":null,"subdomain":null,"email":"test@test.com","username":"testtest","updated":"2018-07-10 08:54:44","home_phone":null,"vat_name":null,"p_city":"","bus_phone":"","allow_late_fees":true,"s_street":"","p_street":"","company_size":null,"accounting_systemid":"k0LBE","p_code":"","p_province":"","signup_date":"2018-06-08 14:56:22","language":"en","level":0,"notified":false,"userid":103807,"p_street2":"","pref_gmail":false,"vis_state":0,"s_country":"","s_code":"","organization":"test","p_country":"United States","currency_code":"CAD"}}}}
JSON;


        $client  = $this->preSuccess($json);
        $request = new ClientReadRequest();
        $request->setAccountId('id')
            ->setClientId(103807);
        $client->getOAuthTestClient()->processRequest($request);

        $this->validateUrl($client, [103807]);
        $response = $request->getResponse();
        $this->assertEquals(103807, $response->id);
        $this->assertEquals("Test", $response->lname);
        $this->assertEquals(0, $response->numLogins);
    }

    public function testCreateClient(): void
    {
        $jsonRequest  = <<<JSON
{
    "client": {
        "allow_late_fees": true,
        "allow_late_notifications": false,
        "bus_phone": "555 555 5555",
        "company_industry": "Construction",
        "company_size": "medium",
        "currency_code": "USD",
        "email": "email@example.com",
        "fax": "666 666 6666",
        "fname": "John",
        "home_phone": "777 777 7777",
        "language": "es",
        "lname": "Doe",
        "mob_phone": "888 888 8888",
        "note": "This is a note",
        "notified": true,
        "organization": "Company Inc.",
        "p_city": "Bill City",
        "p_code": "11111",
        "p_country": "Billand",
        "p_province": "BL",
        "p_street": "1 Bill street",
        "p_street2": "Suite 2",
        "pref_email": true,
        "pref_gmail": false,
        "s_city": "Shipville",
        "s_code": "142857",
        "s_country": "Shipstan",
        "s_province": "HP",
        "s_street": "5 Ship avenue",
        "s_street2": "App. 6",
        "username": "john.doe",
        "vat_name": "TAX",
        "vat_number": "12345"
    }
}
JSON;
        $jsonResponse = <<<JSON
{
    "response": {
        "result": {
            "client": {
                "allow_late_notifications": false,
                "fax": "666 666 6666",
                "last_activity": null,
                "num_logins": 0,
                "vat_number": "12345",
                "pref_email": true,
                "id": 165205,
                "direct_link_token": null,
                "s_province": "HP",
                "note": "This is a note",
                "s_city": "Shipville",
                "s_street2": "App. 6",
                "statement_token": null,
                "lname": "Doe",
                "mob_phone": "888 888 8888",
                "last_login": null,
                "fname": "John",
                "role": "client",
                "company_industry": "Construction",
                "subdomain": null,
                "email": "email@example.com",
                "username": "john.doe",
                "updated": "2018-07-12 10:33:50",
                "home_phone": "777 777 7777",
                "vat_name": "TAX",
                "p_city": "Bill City",
                "bus_phone": "555 555 5555",
                "allow_late_fees": true,
                "s_street": "5 Ship avenue",
                "p_street": "1 Bill street",
                "company_size": null,
                "accounting_systemid": "abcde",
                "p_code": "11111",
                "p_province": "BL",
                "signup_date": "2018-07-12 14:33:50",
                "language": "es",
                "level": 0,
                "notified": true,
                "userid": 165205,
                "p_street2": "Suite 2",
                "pref_gmail": false,
                "vis_state": 0,
                "s_country": "Shipstan",
                "s_code": "142857",
                "organization": "Company Inc.",
                "p_country": "Billand",
                "currency_code": "USD"
            }
        }
    }
}
JSON;
        $client       = $this->preSuccess($jsonResponse);

        $clientData = (new ClientData)
            ->setAllowLateFees(true)
            ->setAllowLateNotifications(false)
            ->setBusPhone("555 555 5555")
            ->setCompanyIndustry("Construction")
            ->setCompanySize("medium")
            ->setCurrencyCode("USD")
            ->setEmail("email@example.com")
            ->setFax("666 666 6666")
            ->setFname("John")
            ->setHomePhone("777 777 7777")
            ->setLanguage("es")
            ->setLname("Doe")
            ->setMobPhone("888 888 8888")
            ->setNote("This is a note")
            ->setNotified(true)
            ->setOrganization("Company Inc.")
            ->setPCity("Bill City")
            ->setPCode("11111")
            ->setPCountry("Billand")
            ->setPProvince("BL")
            ->setPStreet("1 Bill street")
            ->setPStreet2("Suite 2")
            ->setPrefEmail(true)
            ->setPrefGmail(false)
            ->setSCity("Shipville")
            ->setSCode("142857")
            ->setSCountry("Shipstan")
            ->setSProvince("HP")
            ->setSStreet("5 Ship avenue")
            ->setSStreet2("App. 6")
            ->setUsername("john.doe")
            ->setVatName("TAX")
            ->setVatNumber("12345");

        $request = (new CreateClientRequest($clientData))
            ->setAccountId('abcde');

        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->validateRequest($client, $jsonRequest);

        $this->assertEquals("abcde", $response->accounting_systemid);
        $this->assertEquals("Shipville", $response->s_city);
        $this->assertFalse($response->pref_gmail);
    }

    public function testUpdateClient(): void
    {
        $jsonRequest = <<<JSON
{
    "client": {
        "allow_late_fees": true,
        "allow_late_notifications": false,
        "bus_phone": "555 555 5555",
        "company_industry": "Construction",
        "company_size": "medium",
        "currency_code": "USD",
        "email": "email@example.com",
        "fax": "666 666 6666",
        "fname": "John",
        "home_phone": "777 777 7777",
        "language": "es",
        "lname": "Doe",
        "mob_phone": "888 888 8888",
        "note": "This is a note",
        "notified": true,
        "organization": "Company Inc.",
        "p_city": "Bill City",
        "p_code": "11111",
        "p_country": "Billand",
        "p_province": "BL",
        "p_street": "1 Bill street",
        "p_street2": "Suite 2",
        "pref_email": true,
        "pref_gmail": false,
        "s_city": "Shipville",
        "s_code": "142857",
        "s_country": "Shipstan",
        "s_province": "HP",
        "s_street": "5 Ship avenue",
        "s_street2": "App. 6",
        "username": "john.doe",
        "vat_name": "TAX",
        "vat_number": "12345"
    }
}
JSON;
        $jsonResponse = <<<JSON
{
    "response": {
        "result": {
            "client": {
                "allow_late_notifications": false,
                "fax": "666 666 6666",
                "last_activity": null,
                "num_logins": 0,
                "vat_number": "12345",
                "pref_email": true,
                "id": 165205,
                "direct_link_token": null,
                "s_province": "HP",
                "note": "This is a note",
                "s_city": "Shipville",
                "s_street2": "App. 6",
                "statement_token": null,
                "lname": "Doe",
                "mob_phone": "888 888 8888",
                "last_login": null,
                "fname": "John",
                "role": "client",
                "company_industry": "Construction",
                "subdomain": null,
                "email": "email@example.com",
                "username": "john.doe",
                "updated": "2018-07-12 10:33:50",
                "home_phone": "777 777 7777",
                "vat_name": "TAX",
                "p_city": "Bill City",
                "bus_phone": "555 555 5555",
                "allow_late_fees": true,
                "s_street": "5 Ship avenue",
                "p_street": "1 Bill street",
                "company_size": null,
                "accounting_systemid": "abcde",
                "p_code": "11111",
                "p_province": "BL",
                "signup_date": "2018-07-12 14:33:50",
                "language": "es",
                "level": 0,
                "notified": true,
                "userid": 165205,
                "p_street2": "Suite 2",
                "pref_gmail": false,
                "vis_state": 0,
                "s_country": "Shipstan",
                "s_code": "142857",
                "organization": "Company Inc.",
                "p_country": "Billand",
                "currency_code": "USD"
            }
        }
    }
}
JSON;
        $client  = $this->preSuccess($jsonResponse);

        $clientData = (new ClientData)
            ->setAllowLateFees(true)
            ->setAllowLateNotifications(false)
            ->setBusPhone("555 555 5555")
            ->setCompanyIndustry("Construction")
            ->setCompanySize("medium")
            ->setCurrencyCode("USD")
            ->setEmail("email@example.com")
            ->setFax("666 666 6666")
            ->setFname("John")
            ->setHomePhone("777 777 7777")
            ->setLanguage("es")
            ->setLname("Doe")
            ->setMobPhone("888 888 8888")
            ->setNote("This is a note")
            ->setNotified(true)
            ->setOrganization("Company Inc.")
            ->setPCity("Bill City")
            ->setPCode("11111")
            ->setPCountry("Billand")
            ->setPProvince("BL")
            ->setPStreet("1 Bill street")
            ->setPStreet2("Suite 2")
            ->setPrefEmail(true)
            ->setPrefGmail(false)
            ->setSCity("Shipville")
            ->setSCode("142857")
            ->setSCountry("Shipstan")
            ->setSProvince("HP")
            ->setSStreet("5 Ship avenue")
            ->setSStreet2("App. 6")
            ->setUsername("john.doe")
            ->setVatName("TAX")
            ->setVatNumber("12345");

        $request = (new UpdateClientRequest($clientData))
            ->setAccountId('abcde')
            ->setClientId(1232);

        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->validateRequest($client, $jsonRequest);

        $this->assertEquals("abcde", $response->accounting_systemid);
        $this->assertEquals("Shipville", $response->s_city);
        $this->assertFalse($response->pref_gmail);
    }

    public function testDeleteClient(): void
    {
        $jsonResponse = <<<JSON
{
    "response": {}
}
JSON;
        $jsonRequest  = <<<JSON
{
    "client": {
        "vis_state": 1
    }
}
JSON;


        $client  = $this->preSuccess($jsonResponse);
        $request = new DeleteClientRequest();
        $request->setAccountId('place');
        $request->setClientId(1990);
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertInstanceOf(EmptyResponse::class, $response);
        $this->validateUrl($client, 'accounting/account/place/users/clients/1990');
        $this->validateRequest($client, $jsonRequest);
    }
}
