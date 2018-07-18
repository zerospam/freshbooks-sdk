<?php
/**
 * Created by PhpStorm.
 * User: ycoutu
 * Date: 17/07/18
 * Time: 12:00 PM
 */

namespace ZEROSPAM\Freshbooks\Test\Requests\Report;

use ZEROSPAM\Framework\SDK\Test\Base\TestCase;
use ZEROSPAM\Freshbooks\Request\Call\Report\ReportAccountsAgingReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Report\ReportExpenseDetailsReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Report\ReportInvoiceDetailsReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Report\ReportPaymentsCollectedReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Report\ReportProfitLossReadRequest;
use ZEROSPAM\Freshbooks\Request\Call\Report\ReportTaxSummaryReadRequest;

class ReportTest extends TestCase
{
    public function testReportInvoiceDetails(): void
    {
        $jsonResponse = <<<JSON
{
  "response": {
    "result": {
      "invoice_details": {
        "statusids": [],
        "end_date": "2018-07-17",
        "clientids": [],
        "date_type": "issue",
        "clients": [
          {
            "invoices": [
              {
                "invoiceid": 129955,
                "create_date": "2018-04-30",
                "due_offset_days": 0,
                "outstanding": {
                  "amount": "550.73",
                  "code": "USD"
                },
                "po_number": null,
                "tax": {
                  "amount": "71.73",
                  "code": "USD"
                },
                "tax_summaries": [
                  {
                    "tax_total": {
                      "amount": "23.95",
                      "code": "USD"
                    },
                    "tax_number": "123",
                    "tax_rate": "5",
                    "tax_name": "TPS"
                  },
                  {
                    "tax_total": {
                      "amount": "47.78",
                      "code": "USD"
                    },
                    "tax_number": "456",
                    "tax_rate": "9.975",
                    "tax_name": "TVQ"
                  }
                ],
                "lines": [
                  {
                    "lineid": 1,
                    "name": "Yearly calendar pack",
                    "amount": {
                      "amount": "555.55",
                      "code": "USD"
                    },
                    "tax_name1": "TPS",
                    "tax_name2": "TVQ",
                    "qty": "1",
                    "tax_amount1": {
                      "amount": "23.61",
                      "code": "USD"
                    },
                    "rate": {
                      "amount": "555.55",
                      "code": "USD"
                    },
                    "tax_amount2": {
                      "amount": "47.10",
                      "code": "USD"
                    },
                    "taskno": 1,
                    "total": {
                      "amount": "626.26",
                      "code": "USD"
                    },
                    "description": "Enough calendars to last one full year!"
                  },
                  {
                    "lineid": 2,
                    "name": "Pencil",
                    "amount": {
                      "amount": "7.98",
                      "code": "USD"
                    },
                    "tax_name1": "TPS",
                    "tax_name2": "TVQ",
                    "qty": "1",
                    "tax_amount1": {
                      "amount": "0.34",
                      "code": "USD"
                    },
                    "rate": {
                      "amount": "7.98",
                      "code": "USD"
                    },
                    "tax_amount2": {
                      "amount": "0.68",
                      "code": "USD"
                    },
                    "taskno": 2,
                    "total": {
                      "amount": "9.00",
                      "code": "USD"
                    },
                    "description": "Enough pencil to write at least one short sentence!"
                  }
                ],
                "paid": {
                  "amount": "0.00",
                  "code": "USD"
                },
                "date_paid": null,
                "v3_status": "draft",
                "discount_total": {
                  "amount": "-84.53",
                  "code": "USD"
                },
                "invoice_number": "68901804",
                "total": {
                  "amount": "550.73",
                  "code": "USD"
                },
                "subtotal": {
                  "amount": "563.53",
                  "code": "USD"
                },
                "currency_code": "USD"
              },
              {
                "invoiceid": 129969,
                "create_date": "2018-04-30",
                "due_offset_days": 0,
                "outstanding": {
                  "amount": "550.73",
                  "code": "USD"
                },
                "po_number": null,
                "tax": {
                  "amount": "71.73",
                  "code": "USD"
                },
                "tax_summaries": [
                  {
                    "tax_total": {
                      "amount": "23.95",
                      "code": "USD"
                    },
                    "tax_number": "123",
                    "tax_rate": "5",
                    "tax_name": "TPS"
                  },
                  {
                    "tax_total": {
                      "amount": "47.78",
                      "code": "USD"
                    },
                    "tax_number": "456",
                    "tax_rate": "9.975",
                    "tax_name": "TVQ"
                  }
                ],
                "lines": [],
                "paid": {
                  "amount": "0.00",
                  "code": "USD"
                },
                "date_paid": null,
                "v3_status": "draft",
                "discount_total": {
                  "amount": "-84.53",
                  "code": "USD"
                },
                "invoice_number": "68901805",
                "total": {
                  "amount": "550.73",
                  "code": "USD"
                },
                "subtotal": {
                  "amount": "563.53",
                  "code": "USD"
                },
                "currency_code": "USD"
              },
              {
                "invoiceid": 131013,
                "create_date": "2018-04-30",
                "due_offset_days": 0,
                "outstanding": {
                  "amount": "549.71",
                  "code": "USD"
                },
                "po_number": null,
                "tax": {
                  "amount": "70.71",
                  "code": "USD"
                },
                "tax_summaries": [
                  {
                    "tax_total": {
                      "amount": "23.61",
                      "code": "USD"
                    },
                    "tax_number": "123",
                    "tax_rate": "5",
                    "tax_name": "TPS"
                  },
                  {
                    "tax_total": {
                      "amount": "47.10",
                      "code": "USD"
                    },
                    "tax_number": "456",
                    "tax_rate": "9.975",
                    "tax_name": "TVQ"
                  }
                ],
                "lines": [],
                "paid": {
                  "amount": "0.00",
                  "code": "USD"
                },
                "date_paid": null,
                "v3_status": "draft",
                "discount_total": {
                  "amount": "-84.53",
                  "code": "USD"
                },
                "invoice_number": "68901800",
                "total": {
                  "amount": "549.71",
                  "code": "USD"
                },
                "subtotal": {
                  "amount": "563.53",
                  "code": "USD"
                },
                "currency_code": "USD"
              }
            ],
            "userid": 163701,
            "summary": {
              "total": {
                "amount": "4698.76",
                "code": "USD"
              },
              "paid": {
                "amount": "2.00",
                "code": "USD"
              },
              "outstanding": {
                "amount": "4696.76",
                "code": "USD"
              }
            },
            "lname": "The test",
            "fname": "Testing",
            "organization": "Testing cool",
            "email": "testing.cool@example.com"
          },
          {
            "invoices": [],
            "userid": 165113,
            "summary": {
              "total": {
                "amount": "0.00",
                "code": "USD"
              },
              "paid": {
                "amount": "0.00",
                "code": "USD"
              },
              "outstanding": {
                "amount": "0.00",
                "code": "USD"
              }
            },
            "lname": "",
            "fname": "John",
            "organization": "John",
            "email": ""
          }
        ],
        "summary": {
          "total": {
            "amount": "4698.76",
            "code": "USD"
          },
          "paid": {
            "amount": "2.00",
            "code": "USD"
          },
          "outstanding": {
            "amount": "4696.76",
            "code": "USD"
          }
        },
        "download_token": "this download token",
        "company_name": "Company Inc.",
        "start_date": "2018-01-01",
        "currency_code": "USD"
      }
    }
  }
}
JSON;

        $client = $this->preSuccess($jsonResponse);
        $request = new ReportInvoiceDetailsReadRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("2018-07-17", $response->end_date->toDateString());
        $this->assertEquals("issue", $response->date_type);
        $this->assertEquals(2, count($response->clients));
        $this->assertEquals("this download token", $response->download_token);
        $this->assertEquals("Company Inc.", $response->company_name);
        $this->assertEquals("2018-01-01", $response->start_date->toDateString());
        $this->assertEquals("USD", $response->currency_code);

        // Summary test
        $this->assertEquals("4698.76", $response->summary->total->amount);
        $this->assertEquals("2.00", $response->summary->paid->amount);
        $this->assertEquals("4696.76", $response->summary->outstanding->amount);

        // Clients test
        $reportClient = $response->clients[0];
        $this->assertEquals(3, count($reportClient->invoices));
        $this->assertEquals(163701, $reportClient->userid);
        $this->assertEquals("The test", $reportClient->lname);
        $this->assertEquals("Testing", $reportClient->fname);
        $this->assertEquals("Testing cool", $reportClient->organization);
        $this->assertEquals("testing.cool@example.com", $reportClient->email);

        // Client->Invoice test
        $invoice = $reportClient->invoices[0];
        $this->assertEquals(129955, $invoice->invoiceid);
        $this->assertEquals("2018-04-30", $invoice->create_date->toDateString());
        $this->assertEquals(0, $invoice->due_offset_days);
        $this->assertEquals("550.73", $invoice->outstanding->amount);
        $this->assertNull($invoice->po_number);
        $this->assertEquals("71.73", $invoice->tax->amount);
        $this->assertEquals(2, count($invoice->tax_summaries));
        $this->assertEquals(2, count($invoice->lines));
        $this->assertEquals("0.00", $invoice->paid->amount);
        $this->assertNull($invoice->date_paid);
        $this->assertEquals("draft", $invoice->v3_status);
        $this->assertEquals("-84.53", $invoice->discount_total->amount);
        $this->assertEquals("68901804", $invoice->invoice_number);
        $this->assertEquals("550.73", $invoice->total->amount);
        $this->assertEquals("563.53", $invoice->subtotal->amount);
        $this->assertEquals("USD", $invoice->currency_code);

        // Client->Invoice->Tax Summary test
        $taxSummary = $invoice->tax_summaries[0];
        $this->assertEquals("23.95", $taxSummary->tax_total->amount);
        $this->assertEquals("123", $taxSummary->tax_number);
        $this->assertEquals("5", $taxSummary->tax_rate);
        $this->assertEquals("TPS", $taxSummary->tax_name);

        // Client->Invoice->Line
        $line = $invoice->lines[0];
        $this->assertEquals(1, $line->lineid);
        $this->assertEquals("Yearly calendar pack", $line->name);
        $this->assertEquals("555.55", $line->amount->amount);
        $this->assertEquals("TPS", $line->tax_name1);
        $this->assertEquals("TVQ", $line->tax_name2);
        $this->assertEquals("1", $line->qty);
        $this->assertEquals("23.61", $line->tax_amount1->amount);
        $this->assertEquals("555.55", $line->rate->amount);
        $this->assertEquals("47.10", $line->tax_amount2->amount);
        $this->assertEquals(1, $line->taskno);
        $this->assertEquals("626.26", $line->total->amount);
        $this->assertEquals("Enough calendars to last one full year!", $line->description);

        // Client->Summary test
        $this->assertEquals("4698.76", $reportClient->summary->total->amount);
        $this->assertEquals("2.00", $reportClient->summary->paid->amount);
        $this->assertEquals("4696.76", $reportClient->summary->outstanding->amount);
    }

    public function testReportExpenseDetails(): void
    {
        $jsonResponse = <<<JSON
{
  "response": {
    "result": {
      "expense_details": {
        "exclude_personal": false,
        "end_date": "2017-12-31",
        "clients": {
          "0": {
           "language": null,
           "userid": null,
           "email": "JaneDoe@Example.com",
           "lname": "Doe",
           "fname": "Jane",
           "organization": "Company and Co",
           "id": null
          },
          "144599": {
           "language": null,
           "userid": 144599,
           "email": "fake@email.com",
           "lname": "Wayne",
           "fname": "bruce",
           "organization": "Fake Company",
           "id": 144599
          }
        },
       "download_token": "A bunch of letters and numbers",
       "vendors": {
         "92d61cbb2aa3a9e323151955eb4484b2": "Vendor 1",
         "419107f1667df41b85d4eef9455ae41a": "Vendor 2"
       },
       "group_by": "category",
       "currency_code": "CAD",
       "authors": {
         "1": {
           "lname": "Parker",
           "organization": "Spurs",
           "userid": 1,
           "email": "tonyparker@spurs.com",
            "fname": "Tony"
         }
       },
       "data": [
        {
          "groupid": "5372370",
          "total": {
            "amount": "854.76",
            "code": "CAD"
          },
           "children": [],
          "expenses": [
            {
              "vendorid": "419107f1667df41b85d4eef9455ae41a",
              "vendor": "vendor 1",
              "notes": "",
              "amount": {
                "amount": "854.76",
                "code": "CAD"
              },
              "clientid": "144599",
              "taxPercent1": null,
              "authorid": "1",
              "taxName2": "Tax Two",
              "taxName1": "Tax One",
              "date": "2017-07-21",
              "taxAmount2": {
                "amount": "0.00",
                "code": "CAD"
              },
              "expenseid": 999712,
              "taxPercent2": null,
              "taxAmount1": {
                "amount": "0.00",
                "code": "CAD"
              },
              "categoryid": "5372366"
             }
           ]
         }
       ],
      "start_date": "2017-01-01",
      "categories": {
        "5372366": {
          "category": "Gas",
          "subcategory_name": "Gas",
          "categoryid": "5372366"
        },
        "5372370": {
          "category": "Personal",
          "subcategory_name": "personal (general)",
          "categoryid": 5372370
        }
      },
      "company_name": "My Company Name"
      }
    }
  }
}
JSON;

        $client = $this->preSuccess($jsonResponse);
        $request = new ReportExpenseDetailsReadRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertFalse($response->exclude_personal);
        $this->assertEquals("2017-12-31", $response->end_date->toDateString());
        $this->assertEquals(2, count($response->clients));
        $this->assertEquals("A bunch of letters and numbers", $response->download_token);
        $this->assertEquals(2, count($response->vendors));
        $this->assertEquals("category", $response->group_by);
        $this->assertEquals("CAD", $response->currency_code);
        $this->assertEquals(1, count($response->authors));
        $this->assertEquals(1, count($response->data));
        $this->assertEquals("2017-01-01", $response->start_date->toDateString());
        $this->assertEquals(2, count($response->categories));
        $this->assertEquals("My Company Name", $response->company_name);

        // Client test
        $this->assertArrayHasKey("0", $response->clients);
        $this->assertArrayHasKey("144599", $response->clients);
        $client = $response->clients["144599"];
        $this->assertNull($client->language);
        $this->assertEquals(144599, $client->userid);
        $this->assertEquals("fake@email.com", $client->email);
        $this->assertEquals("Wayne", $client->lname);
        $this->assertEquals("bruce", $client->fname);
        $this->assertEquals("Fake Company", $client->organization);
        $this->assertEquals(144599, $client->id);

        // Vendors test
        $this->assertArrayHasKey("92d61cbb2aa3a9e323151955eb4484b2", $response->vendors);
        $this->assertEquals("Vendor 1", $response->vendors["92d61cbb2aa3a9e323151955eb4484b2"]);
        $this->assertArrayHasKey("419107f1667df41b85d4eef9455ae41a", $response->vendors);
        $this->assertEquals("Vendor 2", $response->vendors["419107f1667df41b85d4eef9455ae41a"]);

        // Author test
        $this->assertArrayHasKey("1", $response->authors);
        $author = $response->authors["1"];
        $this->assertEquals("Parker", $author->lname);
        $this->assertEquals("Spurs", $author->organization);
        $this->assertEquals(1, $author->userid);
        $this->assertEquals("tonyparker@spurs.com", $author->email);
        $this->assertEquals("Tony", $author->fname);

        // Data test
        $data = $response->data[0];
        $this->assertEquals(5372370, $data->groupid);
        $this->assertEquals("854.76", $data->total->amount);
        $this->assertEquals(1, count($data->expenses));

        // Category test
        $this->assertArrayHasKey("5372366", $response->categories);
        $this->assertArrayHasKey("5372370", $response->categories);
        $category = $response->categories["5372370"];
        $this->assertEquals("Personal", $category->category);
        $this->assertEquals("personal (general)", $category->subcategory_name);
        $this->assertEquals(5372370, $category->categoryid);

        // Data->Expense test
        $expense = $data->expenses[0];
        $this->assertEquals("419107f1667df41b85d4eef9455ae41a", $expense->vendorid);
        $this->assertEquals("vendor 1", $expense->vendor);
        $this->assertEquals("", $expense->notes);
        $this->assertEquals("854.76", $expense->amount->amount);
        $this->assertEquals(144599, $expense->clientid);
        $this->assertNull($expense->taxPercent1);
        $this->assertEquals("Tax One", $expense->taxName1);
        $this->assertEquals("0.00", $expense->taxAmount1->amount);
        $this->assertNull($expense->taxPercent2);
        $this->assertEquals("Tax Two", $expense->taxName2);
        $this->assertEquals("0.00", $expense->taxAmount2->amount);
        $this->assertEquals("1", $expense->authorid);
        $this->assertEquals("2017-07-21", $expense->date->toDateString());
        $this->assertEquals(999712, $expense->expenseid);
        $this->assertEquals("5372366", $expense->categoryid);
    }

    public function testReportProfitLoss(): void
    {
        $jsonResponse = <<<JSON
{
 "response": {
   "result": {
     "profitloss": {
       "net_profit": {
         "entry_type": "credit",
         "total": {
           "amount": "-1572.18",
           "code": "CAD"
         },
         "data": [],
         "description": "Net Profit (CAD)",
         "children": []
       },
       "total_income": {
         "entry_type": "credit",
         "total": {
           "amount": "0.00",
           "code": "CAD"
         },
         "data": [],
         "description": "Gross Profit",
         "children": []
       },
       "end_date": "2017-12-31",
       "income": [
         {
           "entry_type": "credit",
           "total": {
             "amount": "0.00",
             "code": "CAD"
           },
           "data": [],
           "description": "Sales",
           "children": []
         },
         {
           "entry_type": "credit",
           "total": {
             "amount": "0.00",
             "code": "CAD"
           },
           "data": [],
           "description": "Cost of Goods Solds",
           "Children": []
         }
       ],
       "labels": [],
       "expenses": [
         {
           "entry_type": "credit",
           "total": {
             "amount": "854.76",
             "code": "CAD"
           },
           "data": [],
           "description": "Car & Truck Expenses",
           "children": [
          {
             "entry_type": "debit",
             "total": {
               "amount": "717.42",
               "code": "CAD"
             },
             "data": [],
             "description": "Gas",
             "children": []
           }
         ]
       },
       {
         "entry_type": "debit",
         "total": {
           "amount": "717.42",
           "code": "CAD"
         },
         "data": [],
         "description": "Personal",
         "children": [
           {
             "entry_type": "debit",
             "total": {
               "amount": "717.42",
               "code": "CAD"
             },
             "data": [],
             "description": "Personal (general)",
             "children": []
           }
         ]
       }
     ],
     "download_token": "A bunch of letters and numbers",
     "company_name": "My Company",
     "cash_based": false,
     "total_expenses": {
       "entry_type": "debit",
       "total": {
         "amount": "1572.18",
         "code": "CAD"
       },
       "data": [],
       "description": "Total Expenses",
       "children": []
     },
     "resolution": null,
     "start_date": "2017-01-01",
     "currency_code": "CAD"
   }
    }
   }
  }
JSON;

        $client = $this->preSuccess($jsonResponse);
        $request = new ReportProfitLossReadRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("2017-12-31", $response->end_date->toDateString());
        $this->assertEquals(2, count($response->income));
        $this->assertEquals(2, count($response->expenses));
        $this->assertEquals("A bunch of letters and numbers", $response->download_token);
        $this->assertEquals("My Company", $response->company_name);
        $this->assertFalse($response->cash_based);
        $this->assertNull($response->resolution);
        $this->assertEquals("2017-01-01", $response->start_date->toDateString());
        $this->assertEquals("CAD", $response->currency_code);

        // Net profit test
        $this->assertEquals("credit", $response->net_profit->entry_type);
        $this->assertEquals("-1572.18", $response->net_profit->total->amount);
        $this->assertEquals("Net Profit (CAD)", $response->net_profit->description);

        // Total income test
        $this->assertEquals("credit", $response->total_income->entry_type);
        $this->assertEquals("0.00", $response->total_income->total->amount);
        $this->assertEquals("Gross Profit", $response->total_income->description);

        // Income test
        $this->assertEquals("credit", $response->income[0]->entry_type);
        $this->assertEquals("0.00", $response->income[0]->total->amount);
        $this->assertEquals("Sales", $response->income[0]->description);

        // Expenses test
        $this->assertEquals("credit", $response->expenses[0]->entry_type);
        $this->assertEquals("854.76", $response->expenses[0]->total->amount);
        $this->assertEquals("Car & Truck Expenses", $response->expenses[0]->description);
        $this->assertEquals(1, count($response->expenses[0]->children));

        // Expense->Child test
        $this->assertEquals("debit", $response->expenses[0]->children[0]->entry_type);
        $this->assertEquals("717.42", $response->expenses[0]->children[0]->total->amount);
        $this->assertEquals("Gas", $response->expenses[0]->children[0]->description);

        // Total expenses test
        $this->assertEquals("debit", $response->total_expenses->entry_type);
        $this->assertEquals("1572.18", $response->total_expenses->total->amount);
        $this->assertEquals("Total Expenses", $response->total_expenses->description);
    }

    public function testReportTaxSummary(): void
    {
        $jsonResponse = <<<JSON
{
 "response": {
  "result": {
    "taxsummary": {
      "total_invoiced": {
        "amount": "0.00",
        "code": "CAD"
      },
      "end_date": "2017-12-31",
      "taxes": [
       {
        "taxable_amount_paid": {
          "amount": "854.76",
          "code": "CAD"
         },
        "tax_collected": {
          "amount": "0.00",
          "code": "CAD"
        },
        "tax_name": "Tax One",
        "net_tax": {
          "amount": "0.00",
          "code": "CAD"
        },
        "taxable_amount_collected": {
          "amount": "0.00",
          "code": "CAD"
        },
        "net_taxable_amount": {
          "amount": "-854.76",
          "code": "CAD"
        },
        "tax_paid": {
          "amount": "0.00",
          "code": "CAD"
        }
      },
      {
        "taxable_amount_paid": {
          "amount": "854.76",
          "code": "CAD"
        },
        "tax_collected": {
          "amount": "0.00",
          "code": "CAD"
        },
        "tax_name": "Tax Two",
        "net_tax": {
          "amount": "0.00",
          "code": "CAD"
        },
        "taxable_amount_collected": {
          "amount": "0.00",
          "code": "CAD"
        },
        "net_taxable_amount": {
          "amount": "-854.76",
          "code": "CAD"
        },
        "tax_paid": {
          "amount": "0.00",
          "code": "CAD"
        }
      }
    ],
    "download_token": "A bunch of Characters",
    "cash_based": false,
    "start_date": "2017-01-01",
    "currency_code": "CAD"
    }
   }
  }
}
JSON;
        $client = $this->preSuccess($jsonResponse);
        $request = new ReportTaxSummaryReadRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("0.00", $response->total_invoiced->amount);
        $this->assertEquals("2017-12-31", $response->end_date->toDateString());
        $this->assertEquals(2, count($response->taxes));
        $this->assertEquals("A bunch of Characters", $response->download_token);
        $this->assertFalse($response->cash_based);
        $this->assertEquals("2017-01-01", $response->start_date->toDateString());
        $this->assertEquals("CAD", $response->currency_code);

        // Taxes test
        $tax = $response->taxes[0];
        $this->assertEquals("854.76", $tax->taxable_amount_paid->amount);
        $this->assertEquals("0.00", $tax->tax_collected->amount);
        $this->assertEquals("Tax One", $tax->tax_name);
        $this->assertEquals("0.00", $tax->net_tax->amount);
        $this->assertEquals("0.00", $tax->taxable_amount_collected->amount);
        $this->assertEquals("-854.76", $tax->net_taxable_amount->amount);
        $this->assertEquals("0.00", $tax->tax_paid->amount);

    }

    public function testReportAccountsAging(): void
    {
        $jsonResponse = <<<JSON
{
  "response": {
    "result": {
      "accounts_aging": {
        "end_date": "2017-12-31",
        "totals": {
          "0-30": {
            "amount": "25.00",
            "code": "CAD"
          },
          "61-90": {
            "amount": "120.00",
            "code": "CAD"
          },
          "total": {
            "amount": "685.00",
            "code": "CAD"
          },
          "91+": {
            "amount": "500.00",
            "code": "CAD"
          }, "31-60": {
            "amount": "40.00",
            "code": "CAD"
          }
        },
        "download_token": "Lots of Characters",
        "accounts": [],
        "company_name": "FB",
        "currency_code": "CAD"
        }
      }
    }
  }
JSON;

        $client = $this->preSuccess($jsonResponse);
        $request = new ReportAccountsAgingReadRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("2017-12-31", $response->end_date->toDateString());
        $this->assertEquals("Lots of Characters", $response->download_token);
        $this->assertEquals("FB", $response->company_name);
        $this->assertEquals("CAD", $response->currency_code);

        // Totals test
        $totals = $response->totals;
        $this->assertArrayHasKey("0-30", $totals);
        $this->assertEquals("25.00", $totals["0-30"]->amount);
        $this->assertArrayHasKey("31-60", $totals);
        $this->assertEquals("40.00", $totals["31-60"]->amount);
        $this->assertArrayHasKey("61-90", $totals);
        $this->assertEquals("120.00", $totals["61-90"]->amount);
        $this->assertArrayHasKey("91+", $totals);
        $this->assertEquals("500.00", $totals["91+"]->amount);
        $this->assertArrayHasKey("total", $totals);
        $this->assertEquals("685.00", $totals["total"]->amount);
    }

    public function testReportPaymentsCollected(): void
    {
        $jsonResponse = <<<JSON
{
  "response": {
    "result": {
      "payments_collected": {
        "currency_codes": [],
        "end_date": "2017-12-31",
        "clientids": [],
        "payment_methods": [],
        "totals": [
          {
            "amount": "114.77",
            "code": "CAD"
          }
        ],
        "download_token": "A lot of characters",
        "payments": [
          {
            "invoiceid": 668361,
            "description": "",
            "clientid": 144599,
            "amount": {
              "amount": "114.77",
              "code": "CAD"
            },
            "client": "Magic",
            "date": "2017-07-26",
            "invoice_number": "0000012",
            "method": "Bank Transfer"
          }
        ],
        "start_date": "2017-07-26"
      }
    }
  }
}
JSON;

        $client = $this->preSuccess($jsonResponse);
        $request = new ReportPaymentsCollectedReadRequest();
        $request->setAccountId('id');
        $client->getOAuthTestClient()->processRequest($request);

        $response = $request->getResponse();

        $this->assertEquals("2017-12-31", $response->end_date->toDateString());
        $this->assertEquals(1, count($response->totals));
        $this->assertEquals("114.77", $response->totals[0]->amount);
        $this->assertEquals("A lot of characters", $response->download_token);
        $this->assertEquals(1, count($response->payments));
        $this->assertEquals("2017-07-26", $response->start_date->toDateString());

        // Payments test
        $payment = $response->payments[0];
        $this->assertEquals(668361, $payment->invoiceid);
        $this->assertEquals("", $payment->description);
        $this->assertEquals(144599, $payment->clientid);
        $this->assertEquals("114.77", $payment->amount->amount);
        $this->assertEquals("Magic", $payment->client);
        $this->assertEquals("2017-07-26", $payment->date->toDateString());
        $this->assertEquals("0000012", $payment->invoice_number);
        $this->assertEquals("Bank Transfer", $payment->method);
    }
}
