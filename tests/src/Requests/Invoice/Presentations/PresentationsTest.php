<?php
/**
 * Created by PhpStorm.
 * User: aaflalo
 * Date: 18-09-25
 * Time: 16:01
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Invoice\Presentations;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;
use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\Collection\InvoiceCreateRequest;
use ZEROSPAM\Freshbooks\Request\Call\Invoice\Presentations\PresentationsReadRequest;
use ZEROSPAM\Freshbooks\Request\Data\Invoice\InvoiceCreateData;

class PresentationsTest extends TestCase
{

    public function testPresentationsRead(): void
    {
        $JSON
            = '{"response": {"result": {"presentation": {"quantity_heading": null, "date_format": "yyyy-mm-dd", "invoiceid": 226105, "theme_layout": "simple", "image_banner_position_y": 0, "unit_cost_heading": null, "time_entry_notes_heading": null, "task_heading": null, "image_logo_src": "/service/uploads/images/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhY2NvdW50IjozNDAxMTU3LCJvcmlnaW5hbF9maWxlbmFtZSI6Ilplcm9TcGFtX0xvZ29fU21hbGwucG5nIiwiYnVja2V0IjoidXBsb2FkcyIsImZpbGVuYW1lIjoidXBsb2FkLTI2YzAwZGI0M2VhZjUxNGI1MDU5NmFjOTk4Njg3MzUzMGFlZjZmM2QiLCJsZW5ndGgiOjE5NTEyLCJrZXkiOiInZG9jcy0nLTM0MDExNTcvdXBsb2FkLTI2YzAwZGI0M2VhZjUxNGI1MDU5NmFjOTk4Njg3MzUzMGFlZjZmM2QifQ.HP_Ww3kSFLRnYkAt0xbJSUxh2mfxtLmNtvPuq7l2bkI", "image_banner_src": null, "theme_primary_color": "#dc143c", "theme_font_name": "modern", "item_heading": null, "hours_heading": null, "description_heading": null, "label": null, "rate_heading": null}}}}';

        $client  = $this->preSuccess($JSON);
        $request = new PresentationsReadRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals('yyyy-mm-dd', $response->date_format);
        $this->assertEquals('226105', $response->invoiceid);
    }

    public function testSetPresentationInvoice(): void
    {
        $jsonPresentation
            = '{"response": {"result": {"presentation": {"quantity_heading": null, "date_format": "yyyy-mm-dd", "invoiceid": 226105, "theme_layout": "simple", "image_banner_position_y": 0, "unit_cost_heading": null, "time_entry_notes_heading": null, "task_heading": null, "image_logo_src": "/service/uploads/images/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhY2NvdW50IjozNDAxMTU3LCJvcmlnaW5hbF9maWxlbmFtZSI6Ilplcm9TcGFtX0xvZ29fU21hbGwucG5nIiwiYnVja2V0IjoidXBsb2FkcyIsImZpbGVuYW1lIjoidXBsb2FkLTI2YzAwZGI0M2VhZjUxNGI1MDU5NmFjOTk4Njg3MzUzMGFlZjZmM2QiLCJsZW5ndGgiOjE5NTEyLCJrZXkiOiInZG9jcy0nLTM0MDExNTcvdXBsb2FkLTI2YzAwZGI0M2VhZjUxNGI1MDU5NmFjOTk4Njg3MzUzMGFlZjZmM2QifQ.HP_Ww3kSFLRnYkAt0xbJSUxh2mfxtLmNtvPuq7l2bkI", "image_banner_src": null, "theme_primary_color": "#dc143c", "theme_font_name": "modern", "item_heading": null, "hours_heading": null, "description_heading": null, "label": null, "rate_heading": null}}}}';
        $jsonInvoice
            = <<<JSON
{
  "response": {
    "result": {
      "invoice": {
      }
    }
  }
}
JSON;

        $mockHandler = new MockHandler(
            [
                new Response(200, [], $jsonPresentation),
                new Response(200, [], $jsonInvoice),
            ]
        );

        $config  = $this->getTestClient($mockHandler);
        $request = new PresentationsReadRequest();
        $request->setAccountId('id');
        $client = $config->getOAuthTestClient();
        $client->processRequest($request);

        $response = $request->getResponse();

        $request = new InvoiceCreateRequest((new InvoiceCreateData())->setPresentation($response));
        $request->setAccountId('id');
        $client->processRequest($request);
        $this->validateRequest(
            $config,
            [
                'invoice' => [
                    'presentation' =>
                        [
                            'quantity_heading'         => null,
                            'date_format'              => 'yyyy-mm-dd',
                            'invoiceid'                => 226105,
                            'theme_layout'             => 'simple',
                            'image_banner_position_y'  => 0,
                            'unit_cost_heading'        => null,
                            'time_entry_notes_heading' => null,
                            'task_heading'             => null,
                            'image_logo_src'           => '/service/uploads/images/eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhY2NvdW50IjozNDAxMTU3LCJvcmlnaW5hbF9maWxlbmFtZSI6Ilplcm9TcGFtX0xvZ29fU21hbGwucG5nIiwiYnVja2V0IjoidXBsb2FkcyIsImZpbGVuYW1lIjoidXBsb2FkLTI2YzAwZGI0M2VhZjUxNGI1MDU5NmFjOTk4Njg3MzUzMGFlZjZmM2QiLCJsZW5ndGgiOjE5NTEyLCJrZXkiOiInZG9jcy0nLTM0MDExNTcvdXBsb2FkLTI2YzAwZGI0M2VhZjUxNGI1MDU5NmFjOTk4Njg3MzUzMGFlZjZmM2QifQ.HP_Ww3kSFLRnYkAt0xbJSUxh2mfxtLmNtvPuq7l2bkI',
                            'image_banner_src'         => null,
                            'theme_primary_color'      => '#dc143c',
                            'theme_font_name'          => 'modern',
                            'item_heading'             => null,
                            'hours_heading'            => null,
                            'description_heading'      => null,
                            'label'                    => null,
                            'rate_heading'             => null,
                        ],
                ],
            ]
        );
    }
}
