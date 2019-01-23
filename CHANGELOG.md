## [2.6.2](https://github.com/zerospam/freshbooks-sdk/compare/v2.6.1...v2.6.2) (2019-01-23)


### Bug Fixes

* **Errors:** Add support for 413 code ([cdb2ea8](https://github.com/zerospam/freshbooks-sdk/commit/cdb2ea8))

## [2.6.1](https://github.com/zerospam/freshbooks-sdk/compare/v2.6.0...v2.6.1) (2019-01-23)


### Bug Fixes

* **Invoice:** Add missing visState to delete invoice ([5f0127f](https://github.com/zerospam/freshbooks-sdk/commit/5f0127f))

# [2.6.0](https://github.com/zerospam/freshbooks-sdk/compare/v2.5.2...v2.6.0) (2019-01-11)


### Features

* **AllowedGateway:** Add set gateway feature to accept payments ([1fac653](https://github.com/zerospam/freshbooks-sdk/commit/1fac653))

## [2.5.2](https://github.com/zerospam/freshbooks-sdk/compare/v2.5.1...v2.5.2) (2018-12-04)


### Bug Fixes

* **Taxes:** Http Method for Update ([004b8e8](https://github.com/zerospam/freshbooks-sdk/commit/004b8e8))

## [2.5.1](https://github.com/zerospam/freshbooks-sdk/compare/v2.5.0...v2.5.1) (2018-12-04)


### Bug Fixes

* **Taxes:** Url contained a space ([5c87872](https://github.com/zerospam/freshbooks-sdk/commit/5c87872))

# [2.5.0](https://github.com/zerospam/freshbooks-sdk/compare/v2.4.2...v2.5.0) (2018-12-04)


### Features

* **Configuration:** Set default middlewares ([13635a9](https://github.com/zerospam/freshbooks-sdk/commit/13635a9))
* **UnprocessableEntity:** Trigger Exception with error msg ([42ee32a](https://github.com/zerospam/freshbooks-sdk/commit/42ee32a))

## [2.4.2](https://github.com/zerospam/freshbooks-sdk/compare/v2.4.1...v2.4.2) (2018-11-07)


### Bug Fixes

* **deps:** fix problem with requests ([0d84c6b](https://github.com/zerospam/freshbooks-sdk/commit/0d84c6b))

## [2.4.1](https://github.com/zerospam/freshbooks-sdk/compare/v2.4.0...v2.4.1) (2018-10-23)


### Bug Fixes

* **Payment:** refactored setter usage in view of deprecation ([fb5b3a3](https://github.com/zerospam/freshbooks-sdk/commit/fb5b3a3))

# [2.4.0](https://github.com/zerospam/freshbooks-sdk/compare/v2.3.1...v2.4.0) (2018-09-26)


### Bug Fixes

* **Presentation:** Fix the use of presentation ([61d807b](https://github.com/zerospam/freshbooks-sdk/commit/61d807b))


### Features

* **Estimate:** Added payment method enumeration ([dfc6365](https://github.com/zerospam/freshbooks-sdk/commit/dfc6365))

## [2.3.1](https://github.com/zerospam/freshbooks-sdk/compare/v2.3.0...v2.3.1) (2018-09-26)


### Performance Improvements

* **Reminders-LatePayment:** Sets from response ([7e64672](https://github.com/zerospam/freshbooks-sdk/commit/7e64672))

# [2.3.0](https://github.com/zerospam/freshbooks-sdk/compare/v2.2.0...v2.3.0) (2018-09-26)


### Features

* **Argument:** Added search array argument ([18c0089](https://github.com/zerospam/freshbooks-sdk/commit/18c0089))
* **Invoice:** Add reminders and late payments ([0f65c5e](https://github.com/zerospam/freshbooks-sdk/commit/0f65c5e))
* **Invoice:** Adds presentation ([7c08e88](https://github.com/zerospam/freshbooks-sdk/commit/7c08e88))
* **Presentations:** Adds support for gathering the existing presentations ([82ae854](https://github.com/zerospam/freshbooks-sdk/commit/82ae854))
* **Presentations-Invoice:** Adds support to set presentation to invoice ([6b1d369](https://github.com/zerospam/freshbooks-sdk/commit/6b1d369))

# [2.2.0](https://github.com/zerospam/freshbooks-sdk/compare/v2.1.1...v2.2.0) (2018-09-18)


### Bug Fixes

* **LatePaymentFee:** Fix late fee request data nullability ([f78b205](https://github.com/zerospam/freshbooks-sdk/commit/f78b205))
* **LatePaymentReminder:** Fix body nullability ([35e15a6](https://github.com/zerospam/freshbooks-sdk/commit/35e15a6))


### Features

* **LatePaymentFee:** Add ability to add/edit the late payment fees of a client ([dec4c34](https://github.com/zerospam/freshbooks-sdk/commit/dec4c34))
* **LatePaymentFee:** Add late fee to client response ([3490ab0](https://github.com/zerospam/freshbooks-sdk/commit/3490ab0))
* **LatePaymentReminder:** Add ability to manage the late payment reminders of a client ([e04583e](https://github.com/zerospam/freshbooks-sdk/commit/e04583e)), closes [#30](https://github.com/zerospam/freshbooks-sdk/issues/30)
* **LatePaymentReminder:** Add late payment reminder in client response ([708a16f](https://github.com/zerospam/freshbooks-sdk/commit/708a16f))

## [2.1.1](https://github.com/zerospam/freshbooks-sdk/compare/v2.1.0...v2.1.1) (2018-09-11)


### Bug Fixes

* **AccountIdSetter:** Don't set account id if already set ([b40982f](https://github.com/zerospam/freshbooks-sdk/commit/b40982f))

# [2.1.0](https://github.com/zerospam/freshbooks-sdk/compare/v2.0.0...v2.1.0) (2018-08-15)


### Bug Fixes

* **Estimate:** Refactored Invoice Back into the business namespace ([2e35826](https://github.com/zerospam/freshbooks-sdk/commit/2e35826))


### Features

* **Estimate:** Add Estimate Read Request and response ([b7bffd4](https://github.com/zerospam/freshbooks-sdk/commit/b7bffd4))
* **Estimate:** Add update request for Estimates ([35042cf](https://github.com/zerospam/freshbooks-sdk/commit/35042cf))
* **Estimate:** Added Estimate Create Request and Create Data ([6724db1](https://github.com/zerospam/freshbooks-sdk/commit/6724db1))
* **Estimate:** Added Estimate delete request ([8b66f22](https://github.com/zerospam/freshbooks-sdk/commit/8b66f22))
* **Estimate:** Added Estimate Line ([56d6f51](https://github.com/zerospam/freshbooks-sdk/commit/56d6f51))
* **Estimate:** Added Estimate line attribute for Estimate ([a082785](https://github.com/zerospam/freshbooks-sdk/commit/a082785))

# [2.0.0](https://github.com/zerospam/freshbooks-sdk/compare/v1.1.0...v2.0.0) (2018-07-18)


* Merge pull request #23 from zerospam/restructure-project ([1f76192](https://github.com/zerospam/freshbooks-sdk/commit/1f76192)), closes [#23](https://github.com/zerospam/freshbooks-sdk/issues/23)


### Bug Fixes

* **Client:** Add field nullability ([8aa8b1b](https://github.com/zerospam/freshbooks-sdk/commit/8aa8b1b))
* **ClientList:** Use the right route ([9b640db](https://github.com/zerospam/freshbooks-sdk/commit/9b640db))
* **Invoice:** Add field nullability ([363bd45](https://github.com/zerospam/freshbooks-sdk/commit/363bd45))
* **Invoice:** Fix send invoice email method typing ([663dbb5](https://github.com/zerospam/freshbooks-sdk/commit/663dbb5))
* **Invoice:** Fix update invoice request problem with tests ([2909392](https://github.com/zerospam/freshbooks-sdk/commit/2909392))
* **Invoice:** Remove unchangeable fields for invoice creation ([4750493](https://github.com/zerospam/freshbooks-sdk/commit/4750493))
* **InvoiceProfile:** Fix field name ([86dd87e](https://github.com/zerospam/freshbooks-sdk/commit/86dd87e))
* **InvoiceProfile:** Fix fields in invoice profile response ([49e5cc8](https://github.com/zerospam/freshbooks-sdk/commit/49e5cc8))
* **Report:** Add report base request class ([41d936b](https://github.com/zerospam/freshbooks-sdk/commit/41d936b))
* **Report:** Fix variable name in some report response ([9801d30](https://github.com/zerospam/freshbooks-sdk/commit/9801d30))
* **Request:** Fix ArrayableData: Do not generate the nullableChanged field in the JSON request ([85326b6](https://github.com/zerospam/freshbooks-sdk/commit/85326b6))
* **Tax:** Fix missing date field in tax response ([d35b1c1](https://github.com/zerospam/freshbooks-sdk/commit/d35b1c1))


### chore

* **ClientList:** Refactor where the request is ([c076194](https://github.com/zerospam/freshbooks-sdk/commit/c076194))


### Code Refactoring

* **Requests:** Refactor Namespace of all the Requests ([79a93e1](https://github.com/zerospam/freshbooks-sdk/commit/79a93e1))
* **Structure:** Normalize class names and file structure ([6ab3b2c](https://github.com/zerospam/freshbooks-sdk/commit/6ab3b2c))


### Features

* **Client:** Add client creation request ([3427b21](https://github.com/zerospam/freshbooks-sdk/commit/3427b21))
* **Client:** Add client update request ([564cb0a](https://github.com/zerospam/freshbooks-sdk/commit/564cb0a))
* **Client:** Add delete client request ([4ac61ff](https://github.com/zerospam/freshbooks-sdk/commit/4ac61ff))
* **Client:** Get information about one client. ([f176068](https://github.com/zerospam/freshbooks-sdk/commit/f176068)), closes [#6](https://github.com/zerospam/freshbooks-sdk/issues/6)
* **Invoice:** Add delete invoice request ([8d1287e](https://github.com/zerospam/freshbooks-sdk/commit/8d1287e))
* **Invoice:** Add invoice creation request ([8bb0d37](https://github.com/zerospam/freshbooks-sdk/commit/8bb0d37))
* **Invoice:** Add invoice update request ([9e18ce1](https://github.com/zerospam/freshbooks-sdk/commit/9e18ce1))
* **Invoice:** Add request to get an invoice share link ([bed344c](https://github.com/zerospam/freshbooks-sdk/commit/bed344c))
* **Invoice:** Add send invoice email request ([e25a130](https://github.com/zerospam/freshbooks-sdk/commit/e25a130))
* **InvoiceProfile:** Add invoice profile create request ([f672976](https://github.com/zerospam/freshbooks-sdk/commit/f672976))
* **InvoiceProfile:** Add invoice profile delete request ([b0d4987](https://github.com/zerospam/freshbooks-sdk/commit/b0d4987))
* **InvoiceProfile:** Add invoice profile list request ([0146b22](https://github.com/zerospam/freshbooks-sdk/commit/0146b22))
* **InvoiceProfile:** Add invoice profile read request ([a296fa3](https://github.com/zerospam/freshbooks-sdk/commit/a296fa3))
* **InvoiceProfile:** Add invoice profile update request ([f69ffab](https://github.com/zerospam/freshbooks-sdk/commit/f69ffab))
* **Report:** Add accounts aging report request ([ba77cf6](https://github.com/zerospam/freshbooks-sdk/commit/ba77cf6))
* **Report:** Add expense details report request ([896aeda](https://github.com/zerospam/freshbooks-sdk/commit/896aeda))
* **Report:** Add invoice details report request ([6dac10a](https://github.com/zerospam/freshbooks-sdk/commit/6dac10a))
* **Report:** Add payment collected report request ([36c4b26](https://github.com/zerospam/freshbooks-sdk/commit/36c4b26))
* **Report:** Add profit/loss report request ([9139e16](https://github.com/zerospam/freshbooks-sdk/commit/9139e16))
* **Report:** Add tax summary report request ([f217507](https://github.com/zerospam/freshbooks-sdk/commit/f217507))
* **Tax:** Add delete tax request ([541fddb](https://github.com/zerospam/freshbooks-sdk/commit/541fddb))
* **Tax:** Add get/index tax requests ([30044c0](https://github.com/zerospam/freshbooks-sdk/commit/30044c0))
* **Tax:** Add tax creation request ([6441561](https://github.com/zerospam/freshbooks-sdk/commit/6441561))
* **Tax:** Add update tax request ([ef630e0](https://github.com/zerospam/freshbooks-sdk/commit/ef630e0))


### Performance Improvements

* **EmptyResponse:** Uses Empty Response from SDK Framework ([5f94fce](https://github.com/zerospam/freshbooks-sdk/commit/5f94fce))


### BREAKING CHANGES

* Classes moved and renamed
* **Structure:** Classes moved and renamed
* **Requests:** All the requests changed namespace: now Request/Call
* **ClientList:** The ClientListRequest moved into its own namespace.

# [1.1.0](https://github.com/zerospam/freshbooks-sdk/compare/v1.0.1...v1.1.0) (2018-07-10)


### Features

* **Invoice:** Add basic GET requests and responses ([a48329c](https://github.com/zerospam/freshbooks-sdk/commit/a48329c))
* **Invoice:** Add lines property to invoice response ([1992fc8](https://github.com/zerospam/freshbooks-sdk/commit/1992fc8))

## [1.0.1](https://github.com/zerospam/freshbooks-sdk/compare/v1.0.0...v1.0.1) (2018-06-20)


### Performance Improvements

* **Search:** Add search argument ([997d798](https://github.com/zerospam/freshbooks-sdk/commit/997d798))

# 1.0.0 (2018-06-20)


### Features

* **Account:** Request to get account info ([d1bd045](https://github.com/zerospam/freshbooks-sdk/commit/d1bd045))
* **Clients:** Adds support for List of Client ([5181c56](https://github.com/zerospam/freshbooks-sdk/commit/5181c56))
* **Me:** Get Own Account informations ([ffa0e54](https://github.com/zerospam/freshbooks-sdk/commit/ffa0e54))
* **Middleware:** Middleware to take care of setting account id ([a2cd534](https://github.com/zerospam/freshbooks-sdk/commit/a2cd534))


### Performance Improvements

* **Account:** Make the trait use the IsBindable ([d0d4439](https://github.com/zerospam/freshbooks-sdk/commit/d0d4439))
