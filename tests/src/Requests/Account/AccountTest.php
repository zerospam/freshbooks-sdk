<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-06-08
 * Time: 15:16
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Account;

use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Business\Data\BusinessData;
use ZEROSPAM\Freshbooks\Business\Data\BusinessMembership;
use ZEROSPAM\Freshbooks\Request\Account\OwnAccountRequest;

class AccountTest extends TestCase
{

    public function testAccountId() : void
    {
        $json = <<<JSON
{"response":{"id":937575,"profile":{"setup_complete":true,"first_name":"ZS","last_name":"TEST","phone_number":null,"address":null,"professions":[{"id":1189877,"business_id":900109,"title":"Software as a Service","company":"ZEROSPAM Test","designation":null}]},"first_name":"ZS","last_name":"TEST","email":"freshbook@zerospam.ca","confirmed_at":"2018-05-10T15:39:56Z","created_at":"2018-05-10T15:39:17Z","unconfirmed_email":null,"setup_complete":true,"phone_numbers":[{"title":"","phone_number":null}],"addresses":[null],"profession":{"id":1189877,"business_id":900109,"title":"Software as a Service","company":"ZEROSPAM Test","designation":null},"links":{"me":"/service/auth/api/v1/users?id=937575","roles":"/service/auth/api/v1/users/role/937575"},"permissions":{"k0LBE":{"attachments.access":true,"client.limit":-1,"rich_proposals.access":true,"staff.limit":-1,"advanced_accounting.access":true,"BetaHeliosAsyncExpenses.access":true,"helios_async_clients_push.beta.access":true,"beta_mobile_create_expense_subcategory.access":true,"ios_beta_zendesk_widget.access":true,"mobile_receipt_rebilling.access":true,"proposals_candidate.access":true,"helios_pushnotifications.beta.access":true,"ios_beta_payment_schedules.access":true,"expense_is_cogs.access":true,"helios_rebill_time.access":true,"esignatures.access":true,"salesforce_marketing_cloud.access":true,"new_accept_credit_cards_page.access":true,"helios_dashboard.access":true,"invitation_flow.access":true,"salesforce_value_tiles.access":true,"helios_late_fee_reminder.beta.access":true,"ExpenseCSVImport.access":true,"buy_now_pay_later.access":true,"ClientCSVImport.access":true,"auto_bank_import.access":true}},"groups":[{"id":3713707,"group_id":2696377,"role":"owner","identity_id":937575,"business_id":900109,"active":true}],"subscription_statuses":{"k0LBE":"active_trial"},"integrations":{},"business_memberships":[{"id":3713707,"role":"owner","unacknowledged_change":false,"business":{"id":900109,"name":"ZEROSPAM Test","account_id":"k0LBE","date_format":"mm/dd/yyyy","address":{"id":972791,"street":"","city":"","province":"","country":"United States","postal_code":""},"phone_number":null,"business_clients":[]}}],"identity_origin":"magnum","roles":[{"id":988569,"role":"admin","systemid":3401157,"userid":1,"created_at":"2018-05-10T15:39:18Z","links":{"destroy":"/service/auth/api/v1/users/role/988569"},"accountid":"k0LBE"}]}}
JSON;
        $client = $this->preSuccess($json);
        $request = new OwnAccountRequest();
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();
        $this->assertInstanceOf(BusinessMembership::class, $response->business_memberships[0]);
        $this->assertInstanceOf(BusinessData::class, $response->business_memberships[0]->business);
        $this->assertEquals($response->business_memberships[0]->business->account_id, $response->account_id);
        $this->assertEquals('k0LBE', $response->account_id);
    }
}
