[MarkShust Magento Setup](https://github.com/markshust/docker-magento?tab=readme-ov-file)


First remove the running containers, volumes, etc using: 

```
bin/stopall
bin/removall
```

Full running logs (Took around 900 seconds == ~15 minutes)

```
Initialized empty Git repository in /Users/rohith.boppey/Sites/magento/.git/
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
[+] Running 13/13
 ⠿ Network magento_default          Created                                                                                                                                                   0.3s
 ⠿ Volume "magento_rabbitmqdata"    Created                                                                                                                                                   0.0s
 ⠿ Volume "magento_appdata"         Created                                                                                                                                                   0.0s
 ⠿ Volume "magento_sockdata"        Created                                                                                                                                                   0.0s
 ⠿ Volume "magento_ssldata"         Created                                                                                                                                                   0.0s
 ⠿ Volume "magento_dbdata"          Created                                                                                                                                                   0.0s
 ⠿ Container magento_redis_1        Started                                                                                                                                                   1.5s
 ⠿ Container magento_db_1           Started                                                                                                                                                   1.1s
 ⠿ Container magento_opensearch_1   Started                                                                                                                                                   1.5s
 ⠿ Container magento_mailcatcher_1  Started                                                                                                                                                   1.3s
 ⠿ Container magento_rabbitmq_1     Started                                                                                                                                                   1.6s
 ⠿ Container magento_phpfpm_1       Started                                                                                                                                                  17.6s
 ⠿ Container magento_app_1          Started                                                                                                                                                  18.8s
Composer auth has already been set up.
Fixing filesystem ownerships...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
Filesystem ownerships fixed.
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Creating a "magento/project-community-edition=2.4.8" project at "./"
Installing magento/project-community-edition (2.4.8)
  - Downloading magento/project-community-edition (2.4.8)
  - Installing magento/project-community-edition (2.4.8): Extracting archive
Created project in /var/www/html/.
Loading composer repositories with package information

Updating dependencies
Lock file operations: 616 installs, 0 updates, 0 removals
  - Locking 2tvenom/cborencode (1.0.2)
  - Locking adobe-commerce/adobe-ims-metapackage (2.2.3)
  - Locking adobe-commerce/os-extensions-metapackage (1.0.1)
  - Locking allure-framework/allure-codeception (v2.4.0)
  - Locking allure-framework/allure-php-commons (v2.3.1)
  - Locking astock/stock-api-libphp (1.1.6)
  - Locking aws/aws-crt-php (v1.2.7)
  - Locking aws/aws-sdk-php (3.351.7)
  - Locking bacon/bacon-qr-code (v3.0.1)
  - Locking behat/gherkin (v4.14.0)
  - Locking braintree/braintree_php (6.21.0)
  - Locking brick/math (0.12.3)
  - Locking brick/varexporter (0.5.0)
  - Locking carlos-mg89/oauth (0.8.17)
  - Locking christian-riesen/base32 (1.6.0)
  - Locking clue/ndjson-react (v1.3.0)
  - Locking codeception/codeception (5.3.2)
  - Locking codeception/lib-asserts (2.2.0)
  - Locking codeception/lib-web (1.0.7)
  - Locking codeception/module-asserts (3.2.0)
  - Locking codeception/module-webdriver (4.0.3)
  - Locking codeception/stub (4.1.4)
  - Locking colinmollenhour/cache-backend-file (v1.4.8)
  - Locking colinmollenhour/cache-backend-redis (1.17.1)
  - Locking colinmollenhour/credis (v1.17.0)
  - Locking colinmollenhour/php-redis-session-abstract (v2.1.2)
  - Locking composer/ca-bundle (1.5.7)
  - Locking composer/class-map-generator (1.6.1)
  - Locking composer/composer (2.8.10)
  - Locking composer/metadata-minifier (1.0.0)
  - Locking composer/pcre (3.3.2)
  - Locking composer/semver (3.4.3)
  - Locking composer/spdx-licenses (1.5.9)
  - Locking composer/xdebug-handler (3.0.5)
  - Locking csharpru/vault-php (4.4.1)
  - Locking dasprid/enum (1.0.6)
  - Locking dealerdirect/phpcodesniffer-composer-installer (v1.1.2)
  - Locking dg/bypass-finals (v1.9.0)
  - Locking doctrine/annotations (2.0.2)
  - Locking doctrine/lexer (3.0.1)
  - Locking duosecurity/duo_api_php (1.2.0)
  - Locking duosecurity/duo_universal_php (1.1.0)
  - Locking egulias/email-validator (4.0.4)
  - Locking elastic/transport (v8.11.0)
  - Locking elasticsearch/elasticsearch (v8.18.0)
  - Locking endroid/qr-code (6.0.9)
  - Locking evenement/evenement (v3.0.2)
  - Locking ezimuel/guzzlestreams (3.1.0)
  - Locking ezimuel/ringphp (1.3.0)
  - Locking ezyang/htmlpurifier (v4.18.0)
  - Locking fidry/cpu-core-counter (1.2.0)
  - Locking firebase/php-jwt (v6.11.1)
  - Locking friendsofphp/php-cs-fixer (v3.84.0)
  - Locking guzzlehttp/guzzle (7.9.3)
  - Locking guzzlehttp/promises (2.2.0)
  - Locking guzzlehttp/psr7 (2.7.1)
  - Locking justinrainbow/json-schema (6.4.2)
  - Locking laminas/laminas-captcha (2.18.0)
  - Locking laminas/laminas-code (4.16.0)
  - Locking laminas/laminas-config (3.10.1)
  - Locking laminas/laminas-di (3.15.0)
  - Locking laminas/laminas-diactoros (3.6.0)
  - Locking laminas/laminas-escaper (2.17.0)
  - Locking laminas/laminas-eventmanager (3.14.0)
  - Locking laminas/laminas-feed (2.24.0)
  - Locking laminas/laminas-filter (2.41.0)
  - Locking laminas/laminas-http (2.22.0)
  - Locking laminas/laminas-i18n (2.30.0)
  - Locking laminas/laminas-json (3.7.1)
  - Locking laminas/laminas-loader (2.11.1)
  - Locking laminas/laminas-modulemanager (2.17.0)
  - Locking laminas/laminas-mvc (3.8.0)
  - Locking laminas/laminas-permissions-acl (2.17.0)
  - Locking laminas/laminas-recaptcha (3.8.0)
  - Locking laminas/laminas-router (3.14.0)
  - Locking laminas/laminas-server (2.18.0)
  - Locking laminas/laminas-servicemanager (3.23.0)
  - Locking laminas/laminas-session (2.24.0)
  - Locking laminas/laminas-soap (2.14.0)
  - Locking laminas/laminas-stdlib (3.20.0)
  - Locking laminas/laminas-text (2.12.1)
  - Locking laminas/laminas-translator (1.1.0)
  - Locking laminas/laminas-uri (2.13.0)
  - Locking laminas/laminas-validator (2.64.4)
  - Locking laminas/laminas-view (2.39.0)
  - Locking league/flysystem (3.30.0)
  - Locking league/flysystem-aws-s3-v3 (3.29.0)
  - Locking league/flysystem-local (3.30.0)
  - Locking league/mime-type-detection (1.16.0)
  - Locking magento/adobe-stock-integration (2.1.7-p1)
  - Locking magento/composer (1.10.1)
  - Locking magento/composer-dependency-version-audit-plugin (0.1.6)
  - Locking magento/composer-root-update-plugin (2.0.5)
  - Locking magento/framework (103.0.8)
  - Locking magento/framework-amqp (100.4.6)
  - Locking magento/framework-bulk (101.0.4)
  - Locking magento/framework-message-queue (100.4.8)
  - Locking magento/inventory-composer-installer (1.2.0)
  - Locking magento/inventory-metapackage (1.2.8)
  - Locking magento/language-de_de (100.4.0)
  - Locking magento/language-en_us (100.4.0)
  - Locking magento/language-es_es (100.4.0)
  - Locking magento/language-fr_fr (100.4.0)
  - Locking magento/language-nl_nl (100.4.0)
  - Locking magento/language-pt_br (100.4.0)
  - Locking magento/language-zh_hans_cn (100.4.0)
  - Locking magento/magento-allure-phpunit (3.0.2)
  - Locking magento/magento-coding-standard (38)
  - Locking magento/magento-composer-installer (0.4.0)
  - Locking magento/magento-zf-db (3.21.0)
  - Locking magento/magento2-base (2.4.8)
  - Locking magento/magento2-functional-testing-framework (5.0.5)
  - Locking magento/module-admin-adobe-ims (100.5.3)
  - Locking magento/module-admin-adobe-ims-two-factor-auth (1.0.2)
  - Locking magento/module-admin-analytics (100.4.7)
  - Locking magento/module-admin-graph-ql-server (1.0.4)
  - Locking magento/module-admin-notification (100.4.7)
  - Locking magento/module-adobe-ims (2.2.2)
  - Locking magento/module-adobe-ims-api (2.2.2)
  - Locking magento/module-adobe-stock-admin-ui (1.3.5)
  - Locking magento/module-adobe-stock-asset (1.3.4)
  - Locking magento/module-adobe-stock-asset-api (2.0.4)
  - Locking magento/module-adobe-stock-client (1.3.5)
  - Locking magento/module-adobe-stock-client-api (2.1.5)
  - Locking magento/module-adobe-stock-image (1.3.6)
  - Locking magento/module-adobe-stock-image-admin-ui (1.3.6)
  - Locking magento/module-adobe-stock-image-api (1.3.4)
  - Locking magento/module-advanced-pricing-import-export (100.4.8)
  - Locking magento/module-advanced-search (100.4.6)
  - Locking magento/module-amqp (100.4.5)
  - Locking magento/module-analytics (100.4.8)
  - Locking magento/module-application-performance-monitor (100.4.1)
  - Locking magento/module-application-performance-monitor-new-relic (100.4.1)
  - Locking magento/module-async-config (100.4.1)
  - Locking magento/module-asynchronous-operations (100.4.8)
  - Locking magento/module-authorization (100.4.8)
  - Locking magento/module-aws-s3 (100.4.6)
  - Locking magento/module-aws-s3-page-builder (1.0.5)
  - Locking magento/module-backend (102.0.8)
  - Locking magento/module-backup (100.4.8)
  - Locking magento/module-bundle (101.0.8)
  - Locking magento/module-bundle-graph-ql (100.4.8)
  - Locking magento/module-bundle-import-export (100.4.7)
  - Locking magento/module-cache-invalidate (100.4.6)
  - Locking magento/module-captcha (100.4.8)
  - Locking magento/module-cardinal-commerce (100.4.6)
  - Locking magento/module-catalog (104.0.8)
  - Locking magento/module-catalog-analytics (100.4.5)
  - Locking magento/module-catalog-cms-graph-ql (100.4.4)
  - Locking magento/module-catalog-customer-graph-ql (100.4.7)
  - Locking magento/module-catalog-graph-ql (100.4.8)
  - Locking magento/module-catalog-import-export (101.1.8)
  - Locking magento/module-catalog-inventory (100.4.8)
  - Locking magento/module-catalog-inventory-graph-ql (100.4.5)
  - Locking magento/module-catalog-page-builder-analytics (1.6.5)
  - Locking magento/module-catalog-rule (101.2.8)
  - Locking magento/module-catalog-rule-configurable (100.4.7)
  - Locking magento/module-catalog-rule-graph-ql (100.4.5)
  - Locking magento/module-catalog-search (102.0.8)
  - Locking magento/module-catalog-url-rewrite (100.4.8)
  - Locking magento/module-catalog-url-rewrite-graph-ql (100.4.6)
  - Locking magento/module-catalog-widget (100.4.8)
  - Locking magento/module-checkout (100.4.8)
  - Locking magento/module-checkout-agreements (100.4.7)
  - Locking magento/module-checkout-agreements-graph-ql (100.4.4)
  - Locking magento/module-cms (104.0.8)
  - Locking magento/module-cms-graph-ql (100.4.5)
  - Locking magento/module-cms-page-builder-analytics (1.6.5)
  - Locking magento/module-cms-url-rewrite (100.4.7)
  - Locking magento/module-cms-url-rewrite-graph-ql (100.4.6)
  - Locking magento/module-compare-list-graph-ql (100.4.4)
  - Locking magento/module-config (101.2.8)
  - Locking magento/module-configurable-import-export (100.4.6)
  - Locking magento/module-configurable-product (100.4.8)
  - Locking magento/module-configurable-product-graph-ql (100.4.8)
  - Locking magento/module-configurable-product-sales (100.4.5)
  - Locking magento/module-contact (100.4.7)
  - Locking magento/module-contact-graph-ql (100.4.1)
  - Locking magento/module-cookie (100.4.8)
  - Locking magento/module-cron (100.4.8)
  - Locking magento/module-csp (100.4.7)
  - Locking magento/module-currency-symbol (100.4.6)
  - Locking magento/module-customer (103.0.8)
  - Locking magento/module-customer-analytics (100.4.5)
  - Locking magento/module-customer-downloadable-graph-ql (100.4.4)
  - Locking magento/module-customer-graph-ql (100.4.8)
  - Locking magento/module-customer-import-export (100.4.8)
  - Locking magento/module-data-exporter (103.4.7)
  - Locking magento/module-deploy (100.4.8)
  - Locking magento/module-developer (100.4.8)
  - Locking magento/module-dhl (100.4.7)
  - Locking magento/module-directory (100.4.8)
  - Locking magento/module-directory-graph-ql (100.4.6)
  - Locking magento/module-downloadable (100.4.8)
  - Locking magento/module-downloadable-graph-ql (100.4.8)
  - Locking magento/module-downloadable-import-export (100.4.7)
  - Locking magento/module-eav (102.1.8)
  - Locking magento/module-eav-graph-ql (100.4.5)
  - Locking magento/module-elasticsearch (101.0.8)
  - Locking magento/module-elasticsearch-8 (101.0.0)
  - Locking magento/module-email (101.1.8)
  - Locking magento/module-encryption-key (100.4.6)
  - Locking magento/module-fedex (100.4.6)
  - Locking magento/module-gift-message (100.4.7)
  - Locking magento/module-gift-message-graph-ql (100.4.6)
  - Locking magento/module-google-adwords (100.4.5)
  - Locking magento/module-google-analytics (100.4.4)
  - Locking magento/module-google-gtag (100.4.3)
  - Locking magento/module-google-optimizer (100.4.7)
  - Locking magento/module-graph-ql (100.4.8)
  - Locking magento/module-graph-ql-cache (100.4.5)
  - Locking magento/module-graph-ql-new-relic (100.4.1)
  - Locking magento/module-graph-ql-resolver-cache (100.4.1)
  - Locking magento/module-graph-ql-server (1.0.3)
  - Locking magento/module-grouped-catalog-inventory (100.4.5)
  - Locking magento/module-grouped-import-export (100.4.6)
  - Locking magento/module-grouped-product (100.4.8)
  - Locking magento/module-grouped-product-graph-ql (100.4.8)
  - Locking magento/module-import-export (101.0.8)
  - Locking magento/module-indexer (100.4.8)
  - Locking magento/module-instant-purchase (100.4.7)
  - Locking magento/module-integration (100.4.8)
  - Locking magento/module-integration-graph-ql (100.4.1)
  - Locking magento/module-inventory (1.2.6)
  - Locking magento/module-inventory-admin-ui (1.2.6)
  - Locking magento/module-inventory-advanced-checkout (1.2.5)
  - Locking magento/module-inventory-api (1.2.6)
  - Locking magento/module-inventory-bundle-import-export (1.1.4)
  - Locking magento/module-inventory-bundle-product (1.2.5)
  - Locking magento/module-inventory-bundle-product-admin-ui (1.2.5)
  - Locking magento/module-inventory-bundle-product-indexer (1.1.5)
  - Locking magento/module-inventory-cache (1.2.6)
  - Locking magento/module-inventory-catalog (1.3.3)
  - Locking magento/module-inventory-catalog-admin-ui (1.2.6)
  - Locking magento/module-inventory-catalog-api (1.3.6)
  - Locking magento/module-inventory-catalog-frontend-ui (1.0.5)
  - Locking magento/module-inventory-catalog-rule (100.2.0)
  - Locking magento/module-inventory-catalog-search (1.2.6)
  - Locking magento/module-inventory-catalog-search-bundle-product (1.0.4)
  - Locking magento/module-inventory-catalog-search-configurable-product (1.0.4)
  - Locking magento/module-inventory-configurable-product (1.2.6)
  - Locking magento/module-inventory-configurable-product-admin-ui (1.2.6)
  - Locking magento/module-inventory-configurable-product-frontend-ui (1.0.6)
  - Locking magento/module-inventory-configurable-product-indexer (1.2.6)
  - Locking magento/module-inventory-configuration (1.2.5)
  - Locking magento/module-inventory-configuration-api (1.2.4)
  - Locking magento/module-inventory-distance-based-source-selection (1.2.5)
  - Locking magento/module-inventory-distance-based-source-selection-admin-ui (1.2.4)
  - Locking magento/module-inventory-distance-based-source-selection-api (1.2.4)
  - Locking magento/module-inventory-elasticsearch (1.2.5)
  - Locking magento/module-inventory-export-stock (1.2.5)
  - Locking magento/module-inventory-export-stock-api (1.2.4)
  - Locking magento/module-inventory-graph-ql (1.2.5)
  - Locking magento/module-inventory-grouped-product (1.3.3)
  - Locking magento/module-inventory-grouped-product-admin-ui (1.2.5)
  - Locking magento/module-inventory-grouped-product-indexer (1.2.6)
  - Locking magento/module-inventory-import-export (1.2.6)
  - Locking magento/module-inventory-in-store-pickup (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-admin-ui (1.1.5)
  - Locking magento/module-inventory-in-store-pickup-api (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-frontend (1.1.6)
  - Locking magento/module-inventory-in-store-pickup-graph-ql (1.1.5)
  - Locking magento/module-inventory-in-store-pickup-multishipping (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-quote (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-quote-graph-ql (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-sales (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-sales-admin-ui (1.1.6)
  - Locking magento/module-inventory-in-store-pickup-sales-api (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-shipping (1.1.5)
  - Locking magento/module-inventory-in-store-pickup-shipping-admin-ui (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-shipping-api (1.1.4)
  - Locking magento/module-inventory-in-store-pickup-webapi-extension (1.1.4)
  - Locking magento/module-inventory-indexer (2.2.3)
  - Locking magento/module-inventory-low-quantity-notification (1.2.5)
  - Locking magento/module-inventory-low-quantity-notification-admin-ui (1.2.5)
  - Locking magento/module-inventory-low-quantity-notification-api (1.2.5)
  - Locking magento/module-inventory-multi-dimensional-indexer-api (1.2.4)
  - Locking magento/module-inventory-product-alert (1.2.5)
  - Locking magento/module-inventory-quote-graph-ql (1.0.5)
  - Locking magento/module-inventory-requisition-list (1.2.6)
  - Locking magento/module-inventory-reservation-cli (1.2.5)
  - Locking magento/module-inventory-reservations (1.2.4)
  - Locking magento/module-inventory-reservations-api (1.2.4)
  - Locking magento/module-inventory-sales (1.3.3)
  - Locking magento/module-inventory-sales-admin-ui (1.2.6)
  - Locking magento/module-inventory-sales-api (1.2.5)
  - Locking magento/module-inventory-sales-async-order (100.2.2)
  - Locking magento/module-inventory-sales-frontend-ui (1.2.5)
  - Locking magento/module-inventory-setup-fixture-generator (1.2.4)
  - Locking magento/module-inventory-shipping (1.2.5)
  - Locking magento/module-inventory-shipping-admin-ui (1.2.6)
  - Locking magento/module-inventory-source-deduction-api (1.2.5)
  - Locking magento/module-inventory-source-selection (1.2.4)
  - Locking magento/module-inventory-source-selection-api (1.4.5)
  - Locking magento/module-inventory-swatches-frontend-ui (1.0.4)
  - Locking magento/module-inventory-visual-merchandiser (1.1.6)
  - Locking magento/module-inventory-wishlist (1.0.5)
  - Locking magento/module-jwt-framework-adapter (100.4.4)
  - Locking magento/module-jwt-user-token (100.4.3)
  - Locking magento/module-layered-navigation (100.4.8)
  - Locking magento/module-login-as-customer (100.4.8)
  - Locking magento/module-login-as-customer-admin-ui (100.4.8)
  - Locking magento/module-login-as-customer-api (100.4.7)
  - Locking magento/module-login-as-customer-assistance (100.4.7)
  - Locking magento/module-login-as-customer-frontend-ui (100.4.7)
  - Locking magento/module-login-as-customer-graph-ql (100.4.5)
  - Locking magento/module-login-as-customer-log (100.4.6)
  - Locking magento/module-login-as-customer-page-cache (100.4.7)
  - Locking magento/module-login-as-customer-quote (100.4.6)
  - Locking magento/module-login-as-customer-sales (100.4.7)
  - Locking magento/module-marketplace (100.4.6)
  - Locking magento/module-media-content (100.4.6)
  - Locking magento/module-media-content-api (100.4.7)
  - Locking magento/module-media-content-catalog (100.4.6)
  - Locking magento/module-media-content-cms (100.4.6)
  - Locking magento/module-media-content-synchronization (100.4.7)
  - Locking magento/module-media-content-synchronization-api (100.4.6)
  - Locking magento/module-media-content-synchronization-catalog (100.4.5)
  - Locking magento/module-media-content-synchronization-cms (100.4.5)
  - Locking magento/module-media-gallery (100.4.7)
  - Locking magento/module-media-gallery-api (101.0.7)
  - Locking magento/module-media-gallery-catalog (100.4.5)
  - Locking magento/module-media-gallery-catalog-integration (100.4.5)
  - Locking magento/module-media-gallery-catalog-ui (100.4.5)
  - Locking magento/module-media-gallery-cms-ui (100.4.5)
  - Locking magento/module-media-gallery-integration (100.4.7)
  - Locking magento/module-media-gallery-metadata (100.4.6)
  - Locking magento/module-media-gallery-metadata-api (100.4.5)
  - Locking magento/module-media-gallery-renditions (100.4.6)
  - Locking magento/module-media-gallery-renditions-api (100.4.5)
  - Locking magento/module-media-gallery-synchronization (100.4.7)
  - Locking magento/module-media-gallery-synchronization-api (100.4.6)
  - Locking magento/module-media-gallery-synchronization-metadata (100.4.4)
  - Locking magento/module-media-gallery-ui (100.4.7)
  - Locking magento/module-media-gallery-ui-api (100.4.6)
  - Locking magento/module-media-storage (100.4.7)
  - Locking magento/module-message-queue (100.4.8)
  - Locking magento/module-msrp (100.4.7)
  - Locking magento/module-msrp-configurable-product (100.4.5)
  - Locking magento/module-msrp-grouped-product (100.4.5)
  - Locking magento/module-multishipping (100.4.8)
  - Locking magento/module-mysql-mq (100.4.6)
  - Locking magento/module-new-relic-reporting (100.4.6)
  - Locking magento/module-newsletter (100.4.8)
  - Locking magento/module-newsletter-graph-ql (100.4.5)
  - Locking magento/module-offline-payments (100.4.6)
  - Locking magento/module-offline-shipping (100.4.7)
  - Locking magento/module-open-search (100.4.2)
  - Locking magento/module-order-cancellation (100.4.1)
  - Locking magento/module-order-cancellation-graph-ql (100.4.1)
  - Locking magento/module-order-cancellation-ui (100.4.1)
  - Locking magento/module-page-builder (2.2.6)
  - Locking magento/module-page-builder-admin-analytics (1.1.5)
  - Locking magento/module-page-builder-analytics (1.6.5)
  - Locking magento/module-page-builder-image-attribute (1.7.5)
  - Locking magento/module-page-cache (100.4.8)
  - Locking magento/module-payment (100.4.8)
  - Locking magento/module-payment-graph-ql (100.4.3)
  - Locking magento/module-payment-services-base (2.11.1)
  - Locking magento/module-payment-services-dashboard (2.11.1)
  - Locking magento/module-payment-services-paypal (2.11.1)
  - Locking magento/module-payment-services-paypal-graph-ql (2.11.1)
  - Locking magento/module-payment-services-saas-export (2.11.1)
  - Locking magento/module-paypal (101.0.8)
  - Locking magento/module-paypal-captcha (100.4.5)
  - Locking magento/module-paypal-graph-ql (100.4.6)
  - Locking magento/module-persistent (100.4.8)
  - Locking magento/module-product-alert (100.4.7)
  - Locking magento/module-product-video (100.4.8)
  - Locking magento/module-query-xml (103.4.7)
  - Locking magento/module-quote (101.2.8)
  - Locking magento/module-quote-analytics (100.4.7)
  - Locking magento/module-quote-bundle-options (100.4.4)
  - Locking magento/module-quote-configurable-options (100.4.4)
  - Locking magento/module-quote-downloadable-links (100.4.4)
  - Locking magento/module-quote-graph-ql (100.4.8)
  - Locking magento/module-re-captcha-admin-ui (1.1.5)
  - Locking magento/module-re-captcha-checkout (1.1.5)
  - Locking magento/module-re-captcha-checkout-sales-rule (1.1.4)
  - Locking magento/module-re-captcha-contact (1.1.4)
  - Locking magento/module-re-captcha-customer (1.1.6)
  - Locking magento/module-re-captcha-frontend-ui (1.1.6)
  - Locking magento/module-re-captcha-migration (1.1.5)
  - Locking magento/module-re-captcha-newsletter (1.1.5)
  - Locking magento/module-re-captcha-paypal (1.1.5)
  - Locking magento/module-re-captcha-resend-confirmation-email (1.1.0)
  - Locking magento/module-re-captcha-review (1.1.5)
  - Locking magento/module-re-captcha-send-friend (1.1.5)
  - Locking magento/module-re-captcha-store-pickup (1.0.4)
  - Locking magento/module-re-captcha-ui (1.1.5)
  - Locking magento/module-re-captcha-user (1.1.5)
  - Locking magento/module-re-captcha-validation (1.1.4)
  - Locking magento/module-re-captcha-validation-api (1.1.4)
  - Locking magento/module-re-captcha-version-2-checkbox (2.0.5)
  - Locking magento/module-re-captcha-version-2-invisible (2.0.5)
  - Locking magento/module-re-captcha-version-3-invisible (2.0.5)
  - Locking magento/module-re-captcha-webapi-api (1.0.4)
  - Locking magento/module-re-captcha-webapi-graph-ql (1.0.4)
  - Locking magento/module-re-captcha-webapi-rest (1.0.4)
  - Locking magento/module-re-captcha-webapi-ui (1.0.4)
  - Locking magento/module-re-captcha-wishlist (1.1.0)
  - Locking magento/module-related-product-graph-ql (100.4.5)
  - Locking magento/module-release-notification (100.4.6)
  - Locking magento/module-remote-storage (100.4.6)
  - Locking magento/module-reports (100.4.8)
  - Locking magento/module-require-js (100.4.4)
  - Locking magento/module-review (100.4.8)
  - Locking magento/module-review-analytics (100.4.5)
  - Locking magento/module-review-graph-ql (100.4.4)
  - Locking magento/module-robots (101.1.4)
  - Locking magento/module-rss (100.4.6)
  - Locking magento/module-rule (100.4.7)
  - Locking magento/module-saas-common (103.4.7)
  - Locking magento/module-sales (103.0.8)
  - Locking magento/module-sales-analytics (100.4.5)
  - Locking magento/module-sales-data-exporter (2.11.1)
  - Locking magento/module-sales-graph-ql (100.4.8)
  - Locking magento/module-sales-inventory (100.4.5)
  - Locking magento/module-sales-rule (101.2.8)
  - Locking magento/module-sales-rule-graph-ql (100.4.1)
  - Locking magento/module-sales-sequence (100.4.5)
  - Locking magento/module-sample-data (100.4.6)
  - Locking magento/module-search (101.1.8)
  - Locking magento/module-security (100.4.8)
  - Locking magento/module-securitytxt (1.1.4)
  - Locking magento/module-send-friend (100.4.6)
  - Locking magento/module-send-friend-graph-ql (100.4.4)
  - Locking magento/module-service-proxy (2.11.1)
  - Locking magento/module-services-id (3.3.1)
  - Locking magento/module-services-id-graph-ql-server (1.1.8)
  - Locking magento/module-services-id-layout (1.1.6)
  - Locking magento/module-shipping (100.4.8)
  - Locking magento/module-sitemap (100.4.7)
  - Locking magento/module-store (101.1.8)
  - Locking magento/module-store-data-exporter (2.11.1)
  - Locking magento/module-store-graph-ql (100.4.6)
  - Locking magento/module-swagger (100.4.7)
  - Locking magento/module-swagger-webapi (100.4.4)
  - Locking magento/module-swagger-webapi-async (100.4.4)
  - Locking magento/module-swatches (100.4.8)
  - Locking magento/module-swatches-graph-ql (100.4.6)
  - Locking magento/module-swatches-layered-navigation (100.4.4)
  - Locking magento/module-tax (100.4.8)
  - Locking magento/module-tax-graph-ql (100.4.4)
  - Locking magento/module-tax-import-export (100.4.7)
  - Locking magento/module-theme (101.1.8)
  - Locking magento/module-theme-graph-ql (100.4.5)
  - Locking magento/module-translation (100.4.8)
  - Locking magento/module-two-factor-auth (1.1.7)
  - Locking magento/module-ui (101.2.8)
  - Locking magento/module-ups (100.4.8)
  - Locking magento/module-url-rewrite (102.0.7)
  - Locking magento/module-url-rewrite-graph-ql (100.4.7)
  - Locking magento/module-user (101.2.8)
  - Locking magento/module-usps (100.4.7)
  - Locking magento/module-variable (100.4.6)
  - Locking magento/module-vault (101.2.8)
  - Locking magento/module-vault-graph-ql (100.4.4)
  - Locking magento/module-version (100.4.5)
  - Locking magento/module-webapi (100.4.7)
  - Locking magento/module-webapi-async (100.4.6)
  - Locking magento/module-webapi-security (100.4.5)
  - Locking magento/module-weee (100.4.8)
  - Locking magento/module-weee-graph-ql (100.4.5)
  - Locking magento/module-widget (101.2.8)
  - Locking magento/module-wishlist (101.2.8)
  - Locking magento/module-wishlist-analytics (100.4.6)
  - Locking magento/module-wishlist-graph-ql (100.4.8)
  - Locking magento/page-builder (1.7.5)
  - Locking magento/payment-services (2.11.1)
  - Locking magento/php-compatibility-fork (v0.1.0)
  - Locking magento/product-community-edition (2.4.8)
  - Locking magento/security-package (1.1.7)
  - Locking magento/services-connector (1.3.6)
  - Locking magento/services-id (3.3.1)
  - Locking magento/theme-adminhtml-backend (100.4.8)
  - Locking magento/theme-frontend-blank (100.4.8)
  - Locking magento/theme-frontend-luma (100.4.8)
  - Locking magento/zend-cache (1.16.1)
  - Locking magento/zend-db (1.16.2)
  - Locking magento/zend-exception (1.16.1)
  - Locking magento/zend-loader (1.16.1)
  - Locking magento/zend-log (1.16.1)
  - Locking magento/zend-memory (1.16.0)
  - Locking magento/zend-pdf (1.16.5)
  - Locking marc-mabe/php-enum (v4.7.1)
  - Locking monolog/monolog (3.9.0)
  - Locking mtdowling/jmespath.php (2.8.0)
  - Locking mustache/mustache (v2.14.2)
  - Locking myclabs/deep-copy (1.13.3)
  - Locking nikic/php-parser (v5.6.0)
  - Locking open-telemetry/api (1.4.0)
  - Locking open-telemetry/context (1.2.1)
  - Locking opensearch-project/opensearch-php (2.4.3)
  - Locking paragonie/constant_time_encoding (v3.0.0)
  - Locking paragonie/random_compat (v9.99.100)
  - Locking paragonie/sodium_compat (v2.1.0)
  - Locking paypal/module-braintree (4.7.0)
  - Locking paypal/module-braintree-core (4.7.0)
  - Locking paypal/module-braintree-customer-balance (4.7.0)
  - Locking paypal/module-braintree-gift-card (4.7.0)
  - Locking paypal/module-braintree-gift-card-account (4.7.0)
  - Locking paypal/module-braintree-gift-wrapping (4.7.0)
  - Locking paypal/module-braintree-graph-ql (4.7.0)
  - Locking paypal/module-braintree-reward (4.7.0)
  - Locking pdepend/pdepend (3.x-dev 0463270)
  - Locking pelago/emogrifier (v7.3.0)
  - Locking phar-io/manifest (2.0.4)
  - Locking phar-io/version (3.2.1)
  - Locking php-amqplib/php-amqplib (v3.7.3)
  - Locking php-http/discovery (1.20.0)
  - Locking php-http/httplug (2.4.1)
  - Locking php-http/promise (1.3.1)
  - Locking php-webdriver/webdriver (1.15.2)
  - Locking phpcsstandards/phpcsutils (1.1.0)
  - Locking phpfui/recaptcha (V2.0.0)
  - Locking phpgt/cssxpath (v1.3.0)
  - Locking phpgt/dom (v4.1.8)
  - Locking phpgt/propfunc (v1.0.1)
  - Locking phpmd/phpmd (3.x-dev 3a8f6ed)
  - Locking phpseclib/mcrypt_compat (2.0.6)
  - Locking phpseclib/phpseclib (3.0.46)
  - Locking phpstan/phpstan (1.12.28)
  - Locking phpunit/php-code-coverage (10.1.16)
  - Locking phpunit/php-file-iterator (4.1.0)
  - Locking phpunit/php-invoker (4.0.0)
  - Locking phpunit/php-text-template (3.0.1)
  - Locking phpunit/php-timer (6.0.0)
  - Locking phpunit/phpunit (10.5.48)
  - Locking psr/cache (3.0.0)
  - Locking psr/clock (1.0.0)
  - Locking psr/container (1.1.2)
  - Locking psr/event-dispatcher (1.0.0)
  - Locking psr/http-client (1.0.3)
  - Locking psr/http-factory (1.1.0)
  - Locking psr/http-message (2.0)
  - Locking psr/log (3.0.2)
  - Locking psy/psysh (v0.12.9)
  - Locking ralouphie/getallheaders (3.0.3)
  - Locking ramsey/collection (2.1.1)
  - Locking ramsey/uuid (4.9.0)
  - Locking react/cache (v1.2.0)
  - Locking react/child-process (v0.6.6)
  - Locking react/dns (v1.13.0)
  - Locking react/event-loop (v1.5.0)
  - Locking react/promise (v3.2.0)
  - Locking react/socket (v1.16.0)
  - Locking react/stream (v1.4.0)
  - Locking rector/rector (1.2.10)
  - Locking sabberworm/php-css-parser (v8.9.0)
  - Locking sebastian/cli-parser (2.0.1)
  - Locking sebastian/code-unit (2.0.0)
  - Locking sebastian/code-unit-reverse-lookup (3.0.0)
  - Locking sebastian/comparator (5.0.3)
  - Locking sebastian/complexity (3.2.0)
  - Locking sebastian/diff (5.1.1)
  - Locking sebastian/environment (6.1.0)
  - Locking sebastian/exporter (5.1.2)
  - Locking sebastian/global-state (6.0.2)
  - Locking sebastian/lines-of-code (2.0.2)
  - Locking sebastian/object-enumerator (5.0.0)
  - Locking sebastian/object-reflector (3.0.0)
  - Locking sebastian/recursion-context (5.0.0)
  - Locking sebastian/type (4.0.0)
  - Locking sebastian/version (4.0.1)
  - Locking seld/jsonlint (1.11.0)
  - Locking seld/phar-utils (1.2.1)
  - Locking seld/signal-handler (2.0.2)
  - Locking spomky-labs/aes-key-wrap (v7.0.0)
  - Locking spomky-labs/otphp (11.3.0)
  - Locking spomky-labs/pki-framework (1.3.0)
  - Locking squizlabs/php_codesniffer (3.13.2)
  - Locking symfony/config (v7.3.0)
  - Locking symfony/console (v6.4.23)
  - Locking symfony/css-selector (v7.3.0)
  - Locking symfony/dependency-injection (v7.3.1)
  - Locking symfony/deprecation-contracts (v3.6.0)
  - Locking symfony/dotenv (v6.4.16)
  - Locking symfony/error-handler (v7.3.1)
  - Locking symfony/event-dispatcher (v7.3.0)
  - Locking symfony/event-dispatcher-contracts (v3.6.0)
  - Locking symfony/filesystem (v7.3.0)
  - Locking symfony/finder (v6.4.17)
  - Locking symfony/http-client (v7.3.1)
  - Locking symfony/http-client-contracts (v3.6.0)
  - Locking symfony/http-foundation (v7.3.1)
  - Locking symfony/http-kernel (v7.3.1)
  - Locking symfony/intl (v6.4.23)
  - Locking symfony/mailer (v6.4.23)
  - Locking symfony/mime (v6.4.21)
  - Locking symfony/options-resolver (v7.3.0)
  - Locking symfony/polyfill-ctype (v1.32.0)
  - Locking symfony/polyfill-intl-grapheme (v1.32.0)
  - Locking symfony/polyfill-intl-idn (v1.32.0)
  - Locking symfony/polyfill-intl-normalizer (v1.32.0)
  - Locking symfony/polyfill-mbstring (v1.32.0)
  - Locking symfony/polyfill-php73 (v1.32.0)
  - Locking symfony/polyfill-php80 (v1.32.0)
  - Locking symfony/polyfill-php81 (v1.32.0)
  - Locking symfony/polyfill-php82 (v1.32.0)
  - Locking symfony/polyfill-php83 (v1.32.0)
  - Locking symfony/process (v6.4.20)
  - Locking symfony/service-contracts (v3.6.0)
  - Locking symfony/stopwatch (v7.3.0)
  - Locking symfony/string (v6.4.21)
  - Locking symfony/var-dumper (v7.3.1)
  - Locking symfony/var-exporter (v7.3.0)
  - Locking symfony/yaml (v7.3.1)
  - Locking tedivm/jshrink (v1.7.0)
  - Locking theseer/tokenizer (1.2.3)
  - Locking tubalmartin/cssmin (v4.1.1)
  - Locking web-token/jwt-framework (3.4.8)
  - Locking webimpress/safe-writer (2.2.0)
  - Locking webonyx/graphql-php (v15.21.3)
  - Locking weew/helpers-array (v1.3.1)
  - Locking wikimedia/less.php (v5.4.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 616 installs, 0 updates, 0 removals
  - Downloading php-http/discovery (1.20.0)
  - Downloading wikimedia/less.php (v5.4.0)
  - Downloading symfony/polyfill-mbstring (v1.32.0)
  - Downloading webonyx/graphql-php (v15.21.3)
  - Downloading tedivm/jshrink (v1.7.0)
  - Downloading symfony/process (v6.4.20)
  - Downloading symfony/polyfill-intl-normalizer (v1.32.0)
  - Downloading symfony/polyfill-intl-idn (v1.32.0)
  - Downloading symfony/deprecation-contracts (v3.6.0)
  - Downloading symfony/mime (v6.4.21)
  - Downloading psr/container (1.1.2)
  - Downloading symfony/service-contracts (v3.6.0)
  - Downloading psr/event-dispatcher (1.0.0)
  - Downloading symfony/event-dispatcher-contracts (v3.6.0)
  - Downloading symfony/event-dispatcher (v7.3.0)
  - Downloading psr/log (3.0.2)
  - Downloading doctrine/lexer (3.0.1)
  - Downloading egulias/email-validator (4.0.4)
  - Downloading symfony/mailer (v6.4.23)
  - Downloading symfony/intl (v6.4.23)
  - Downloading symfony/polyfill-intl-grapheme (v1.32.0)
  - Downloading symfony/polyfill-ctype (v1.32.0)
  - Downloading symfony/string (v6.4.21)
  - Downloading symfony/console (v6.4.23)
  - Downloading ramsey/collection (2.1.1)
  - Downloading brick/math (0.12.3)
  - Downloading ramsey/uuid (4.9.0)
  - Downloading monolog/monolog (3.9.0)
  - Downloading magento/zend-exception (1.16.1)
  - Downloading magento/zend-log (1.16.1)
  - Downloading magento/zend-cache (1.16.1)
  - Downloading magento/zend-memory (1.16.0)
  - Downloading magento/zend-pdf (1.16.5)
  - Downloading magento/zend-loader (1.16.1)
  - Downloading magento/zend-db (1.16.2)
  - Downloading symfony/polyfill-php81 (v1.32.0)
  - Downloading symfony/polyfill-php80 (v1.32.0)
  - Downloading symfony/polyfill-php73 (v1.32.0)
  - Downloading symfony/finder (v6.4.17)
  - Downloading symfony/filesystem (v7.3.0)
  - Downloading seld/signal-handler (2.0.2)
  - Downloading seld/phar-utils (1.2.1)
  - Downloading seld/jsonlint (1.11.0)
  - Downloading react/promise (v3.2.0)
  - Downloading marc-mabe/php-enum (v4.7.1)
  - Downloading justinrainbow/json-schema (6.4.2)
  - Downloading composer/pcre (3.3.2)
  - Downloading composer/xdebug-handler (3.0.5)
  - Downloading composer/spdx-licenses (1.5.9)
  - Downloading composer/semver (3.4.3)
  - Downloading composer/metadata-minifier (1.0.0)
  - Downloading composer/class-map-generator (1.6.1)
  - Downloading composer/ca-bundle (1.5.7)
  - Downloading composer/composer (2.8.10)
  - Downloading magento/composer-dependency-version-audit-plugin (0.1.6)
  - Downloading psr/http-message (2.0)
  - Downloading laminas/laminas-stdlib (3.20.0)
  - Downloading laminas/laminas-servicemanager (3.23.0)
  - Downloading laminas/laminas-validator (2.64.4)
  - Downloading laminas/laminas-escaper (2.17.0)
  - Downloading laminas/laminas-uri (2.13.0)
  - Downloading laminas/laminas-permissions-acl (2.17.0)
  - Downloading laminas/laminas-translator (1.1.0)
  - Downloading laminas/laminas-i18n (2.30.0)
  - Downloading laminas/laminas-loader (2.11.1)
  - Downloading laminas/laminas-http (2.22.0)
  - Downloading laminas/laminas-filter (2.41.0)
  - Downloading laminas/laminas-code (4.16.0)
  - Downloading psr/http-client (1.0.3)
  - Downloading ralouphie/getallheaders (3.0.3)
  - Downloading psr/http-factory (1.1.0)
  - Downloading guzzlehttp/psr7 (2.7.1)
  - Downloading guzzlehttp/promises (2.2.0)
  - Downloading guzzlehttp/guzzle (7.9.3)
  - Downloading ezyang/htmlpurifier (v4.18.0)
  - Downloading colinmollenhour/credis (v1.17.0)
  - Downloading colinmollenhour/php-redis-session-abstract (v2.1.2)
  - Downloading magento/framework (103.0.8)
  - Downloading magento/magento-composer-installer (0.4.0)
  - Downloading magento/composer-root-update-plugin (2.0.5)
  - Downloading magento/inventory-composer-installer (1.2.0)
  - Downloading squizlabs/php_codesniffer (3.13.2)
  - Downloading dealerdirect/phpcodesniffer-composer-installer (v1.1.2)
  - Downloading 2tvenom/cborencode (1.0.2)
  - Downloading magento/module-adobe-ims-api (2.2.2)
  - Downloading magento/module-user (101.2.8)
  - Downloading magento/module-ui (101.2.8)
  - Downloading magento/module-store (101.1.8)
  - Downloading magento/module-media-storage (100.4.7)
  - Downloading magento/module-config (101.2.8)
  - Downloading magento/module-theme (101.1.8)
  - Downloading magento/module-developer (100.4.8)
  - Downloading magento/module-require-js (100.4.4)
  - Downloading magento/module-deploy (100.4.8)
  - Downloading magento/module-backend (102.0.8)
  - Downloading magento/module-translation (100.4.8)
  - Downloading magento/module-security (100.4.8)
  - Downloading magento/module-sales (103.0.8)
  - Downloading magento/module-wishlist (101.2.8)
  - Downloading magento/module-tax (100.4.8)
  - Downloading magento/module-shipping (100.4.8)
  - Downloading magento/module-sales-sequence (100.4.5)
  - Downloading magento/module-quote (101.2.8)
  - Downloading magento/module-directory (100.4.8)
  - Downloading magento/module-widget (101.2.8)
  - Downloading magento/module-url-rewrite (102.0.7)
  - Downloading magento/module-variable (100.4.6)
  - Downloading magento/module-cms (104.0.8)
  - Downloading magento/module-email (101.1.8)
  - Downloading magento/module-catalog (104.0.8)
  - Downloading magento/module-cms-url-rewrite (100.4.7)
  - Downloading magento/module-eav (102.1.8)
  - Downloading magento/module-import-export (101.0.8)
  - Downloading magento/module-customer (103.0.8)
  - Downloading magento/module-catalog-url-rewrite (100.4.8)
  - Downloading magento/module-catalog-inventory (100.4.8)
  - Downloading league/mime-type-detection (1.16.0)
  - Downloading league/flysystem (3.30.0)
  - Downloading league/flysystem-local (3.30.0)
  - Downloading mtdowling/jmespath.php (2.8.0)
  - Downloading aws/aws-crt-php (v1.2.7)
  - Downloading aws/aws-sdk-php (3.351.7)
  - Downloading league/flysystem-aws-s3-v3 (3.29.0)
  - Downloading magento/module-remote-storage (100.4.6)
  - Downloading magento/module-aws-s3 (100.4.6)
  - Downloading magento/module-authorization (100.4.8)
  - Downloading magento/module-catalog-import-export (101.1.8)
  - Downloading magento/framework-message-queue (100.4.8)
  - Downloading magento/framework-bulk (101.0.4)
  - Downloading magento/module-asynchronous-operations (100.4.8)
  - Downloading magento/module-product-alert (100.4.7)
  - Downloading magento/module-page-cache (100.4.8)
  - Downloading magento/module-checkout (100.4.8)
  - Downloading magento/module-gift-message (100.4.7)
  - Downloading magento/module-downloadable (100.4.8)
  - Downloading magento/module-msrp (100.4.7)
  - Downloading paragonie/random_compat (v9.99.100)
  - Downloading paragonie/constant_time_encoding (v3.0.0)
  - Downloading phpseclib/phpseclib (3.0.46)
  - Downloading php-amqplib/php-amqplib (v3.7.3)
  - Downloading magento/framework-amqp (100.4.6)
  - Downloading magento/module-indexer (100.4.8)
  - Downloading magento/module-rule (100.4.7)
  - Downloading magento/module-catalog-rule (101.2.8)
  - Downloading magento/module-sales-rule (101.2.8)
  - Downloading magento/module-newsletter (100.4.8)
  - Downloading magento/module-review (100.4.8)
  - Downloading magento/module-reports (100.4.8)
  - Downloading magento/module-payment (100.4.8)
  - Downloading magento/magento-zf-db (3.21.0)
  - Downloading laminas/laminas-text (2.12.1)
  - Downloading laminas/laminas-eventmanager (3.14.0)
  - Downloading laminas/laminas-session (2.24.0)
  - Downloading laminas/laminas-recaptcha (3.8.0)
  - Downloading laminas/laminas-captcha (2.18.0)
  - Downloading magento/module-captcha (100.4.8)
  - Downloading magento/module-multishipping (100.4.8)
  - Downloading magento/module-csp (100.4.7)
  - Downloading magento/module-contact (100.4.7)
  - Downloading magento/module-integration (100.4.8)
  - Downloading magento/module-rss (100.4.6)
  - Downloading magento/module-encryption-key (100.4.6)
  - Downloading magento/module-bundle (101.0.8)
  - Downloading magento/module-cron (100.4.8)
  - Downloading magento/module-backup (100.4.8)
  - Downloading magento/module-adobe-ims (2.2.2)
  - Downloading psr/clock (1.0.0)
  - Downloading spomky-labs/otphp (11.3.0)
  - Downloading dasprid/enum (1.0.6)
  - Downloading bacon/bacon-qr-code (v3.0.1)
  - Downloading endroid/qr-code (6.0.9)
  - Downloading firebase/php-jwt (v6.11.1)
  - Downloading duosecurity/duo_universal_php (1.1.0)
  - Downloading duosecurity/duo_api_php (1.2.0)
  - Downloading christian-riesen/base32 (1.6.0)
  - Downloading magento/module-two-factor-auth (1.1.7)
  - Downloading magento/module-jwt-user-token (100.4.3)
  - Downloading magento/module-admin-adobe-ims (100.5.3)
  - Downloading magento/module-admin-adobe-ims-two-factor-auth (1.0.2)
  - Downloading behat/gherkin (v4.14.0)
  - Downloading nikic/php-parser (v5.6.0)
  - Downloading brick/varexporter (0.5.0)
  - Downloading carlos-mg89/oauth (0.8.17)
  - Downloading symfony/yaml (v7.3.1)
  - Downloading symfony/var-dumper (v7.3.1)
  - Downloading symfony/css-selector (v7.3.0)
  - Downloading sebastian/diff (5.1.1)
  - Downloading sebastian/recursion-context (5.0.0)
  - Downloading sebastian/exporter (5.1.2)
  - Downloading sebastian/comparator (5.0.3)
  - Downloading psy/psysh (v0.12.9)
  - Downloading sebastian/version (4.0.1)
  - Downloading sebastian/type (4.0.0)
  - Downloading sebastian/object-reflector (3.0.0)
  - Downloading sebastian/object-enumerator (5.0.0)
  - Downloading sebastian/global-state (6.0.2)
  - Downloading sebastian/environment (6.1.0)
  - Downloading sebastian/code-unit (2.0.0)
  - Downloading sebastian/cli-parser (2.0.1)
  - Downloading phpunit/php-timer (6.0.0)
  - Downloading phpunit/php-text-template (3.0.1)
  - Downloading phpunit/php-invoker (4.0.0)
  - Downloading phpunit/php-file-iterator (4.1.0)
  - Downloading theseer/tokenizer (1.2.3)
  - Downloading sebastian/lines-of-code (2.0.2)
  - Downloading sebastian/complexity (3.2.0)
  - Downloading sebastian/code-unit-reverse-lookup (3.0.0)
  - Downloading phpunit/php-code-coverage (10.1.16)
  - Downloading phar-io/version (3.2.1)
  - Downloading phar-io/manifest (2.0.4)
  - Downloading myclabs/deep-copy (1.13.3)
  - Downloading phpunit/phpunit (10.5.48)
  - Downloading codeception/stub (4.1.4)
  - Downloading codeception/lib-asserts (2.2.0)
  - Downloading codeception/codeception (5.3.2)
  - Downloading codeception/lib-web (1.0.7)
  - Downloading dg/bypass-finals (v1.9.0)
  - Downloading psr/cache (3.0.0)
  - Downloading doctrine/annotations (2.0.2)
  - Downloading php-http/promise (1.3.1)
  - Downloading php-http/httplug (2.4.1)
  - Downloading symfony/polyfill-php82 (v1.32.0)
  - Downloading open-telemetry/context (1.2.1)
  - Downloading open-telemetry/api (1.4.0)
  - Downloading elastic/transport (v8.11.0)
  - Downloading ezimuel/guzzlestreams (3.1.0)
  - Downloading symfony/stopwatch (v7.3.0)
  - Downloading symfony/options-resolver (v7.3.0)
  - Downloading react/event-loop (v1.5.0)
  - Downloading evenement/evenement (v3.0.2)
  - Downloading react/stream (v1.4.0)
  - Downloading react/cache (v1.2.0)
  - Downloading react/dns (v1.13.0)
  - Downloading react/socket (v1.16.0)
  - Downloading react/child-process (v0.6.6)
  - Downloading fidry/cpu-core-counter (1.2.0)
  - Downloading clue/ndjson-react (v1.3.0)
  - Downloading friendsofphp/php-cs-fixer (v3.84.0)
  - Downloading laminas/laminas-config (3.10.1)
  - Downloading laminas/laminas-router (3.14.0)
  - Downloading laminas/laminas-server (2.18.0)
  - Downloading laminas/laminas-json (3.7.1)
  - Downloading laminas/laminas-view (2.39.0)
  - Downloading magento/module-adobe-stock-image-api (1.3.4)
  - Downloading magento/module-media-gallery-ui-api (100.4.6)
  - Downloading magento/module-media-gallery-api (101.0.7)
  - Downloading magento/module-media-gallery-synchronization-api (100.4.6)
  - Downloading magento/module-media-gallery-metadata-api (100.4.5)
  - Downloading magento/module-media-content-api (100.4.7)
  - Downloading magento/module-media-gallery-ui (100.4.7)
  - Downloading magento/module-adobe-stock-client-api (2.1.5)
  - Downloading magento/module-adobe-stock-asset-api (2.0.4)
  - Downloading magento/module-adobe-stock-image-admin-ui (1.3.6)
  - Downloading magento/module-adobe-stock-image (1.3.6)
  - Downloading astock/stock-api-libphp (1.1.6)
  - Downloading magento/module-adobe-stock-client (1.3.5)
  - Downloading magento/module-media-gallery (100.4.7)
  - Downloading magento/module-adobe-stock-asset (1.3.4)
  - Downloading magento/module-adobe-stock-admin-ui (1.3.5)
  - Downloading allure-framework/allure-php-commons (v2.3.1)
  - Downloading magento/magento-allure-phpunit (3.0.2)
  - Downloading phpstan/phpstan (1.12.28)
  - Downloading rector/rector (1.2.10)
  - Downloading phpcsstandards/phpcsutils (1.1.0)
  - Downloading magento/php-compatibility-fork (v0.1.0)
  - Downloading magento/magento-coding-standard (38)
  - Downloading weew/helpers-array (v1.3.1)
  - Downloading symfony/dotenv (v6.4.16)
  - Downloading php-webdriver/webdriver (1.15.2)
  - Downloading mustache/mustache (v2.14.2)
  - Downloading laminas/laminas-diactoros (3.6.0)
  - Downloading csharpru/vault-php (4.4.1)
  - Downloading codeception/module-webdriver (4.0.3)
  - Downloading codeception/module-asserts (3.2.0)
  - Downloading allure-framework/allure-codeception (v2.4.0)
  - Downloading magento/magento2-functional-testing-framework (5.0.5)
  - Downloading magento/module-aws-s3-page-builder (1.0.5)
  - Downloading phpgt/propfunc (v1.0.1)
  - Downloading phpgt/cssxpath (v1.3.0)
  - Downloading phpgt/dom (v4.1.8)
  - Downloading magento/module-catalog-widget (100.4.8)
  - Downloading magento/module-page-builder (2.2.6)
  - Downloading magento/module-analytics (100.4.8)
  - Downloading magento/module-page-builder-analytics (1.6.5)
  - Downloading magento/module-catalog-page-builder-analytics (1.6.5)
  - Downloading magento/module-cms-page-builder-analytics (1.6.5)
  - Downloading magento/module-inventory-api (1.2.6)
  - Downloading magento/module-inventory-sales-api (1.2.5)
  - Downloading magento/module-inventory-catalog-api (1.3.6)
  - Downloading magento/module-inventory-advanced-checkout (1.2.5)
  - Downloading magento/module-bundle-import-export (100.4.7)
  - Downloading magento/module-inventory-bundle-import-export (1.1.4)
  - Downloading magento/module-inventory-configuration-api (1.2.4)
  - Downloading magento/module-inventory-bundle-product (1.2.5)
  - Downloading magento/module-sales-inventory (100.4.5)
  - Downloading magento/module-inventory-source-selection-api (1.4.5)
  - Downloading magento/module-inventory (1.2.6)
  - Downloading magento/module-inventory-source-deduction-api (1.2.5)
  - Downloading magento/module-inventory-reservations-api (1.2.4)
  - Downloading magento/module-inventory-sales (1.3.3)
  - Downloading magento/module-inventory-multi-dimensional-indexer-api (1.2.4)
  - Downloading magento/module-inventory-indexer (2.2.3)
  - Downloading magento/module-inventory-catalog-admin-ui (1.2.6)
  - Downloading magento/module-inventory-bundle-product-admin-ui (1.2.5)
  - Downloading magento/module-inventory-bundle-product-indexer (1.1.5)
  - Downloading magento/module-inventory-cache (1.2.6)
  - Downloading magento/module-inventory-catalog-rule (100.2.0)
  - Downloading magento/module-catalog-search (102.0.8)
  - Downloading magento/module-search (101.1.8)
  - Downloading magento/module-inventory-catalog-search (1.2.6)
  - Downloading magento/module-inventory-catalog-search-bundle-product (1.0.4)
  - Downloading magento/module-configurable-product (100.4.8)
  - Downloading magento/module-inventory-catalog-search-configurable-product (1.0.4)
  - Downloading magento/module-inventory-configuration (1.2.5)
  - Downloading magento/module-inventory-catalog (1.3.3)
  - Downloading magento/module-inventory-configurable-product (1.2.6)
  - Downloading magento/module-inventory-configurable-product-admin-ui (1.2.6)
  - Downloading magento/module-inventory-configurable-product-frontend-ui (1.0.6)
  - Downloading magento/module-inventory-configurable-product-indexer (1.2.6)
  - Downloading magento/module-inventory-distance-based-source-selection-api (1.2.4)
  - Downloading magento/module-inventory-distance-based-source-selection (1.2.5)
  - Downloading magento/module-inventory-distance-based-source-selection-admin-ui (1.2.4)
  - Downloading magento/module-inventory-elasticsearch (1.2.5)
  - Downloading magento/module-inventory-export-stock-api (1.2.4)
  - Downloading magento/module-grouped-product (100.4.8)
  - Downloading magento/module-inventory-export-stock (1.2.5)
  - Downloading magento/module-inventory-graph-ql (1.2.5)
  - Downloading magento/module-inventory-grouped-product (1.3.3)
  - Downloading magento/module-inventory-grouped-product-admin-ui (1.2.5)
  - Downloading magento/module-inventory-grouped-product-indexer (1.2.6)
  - Downloading magento/module-inventory-import-export (1.2.6)
  - Downloading magento/module-inventory-in-store-pickup-api (1.1.4)
  - Downloading magento/module-inventory-in-store-pickup (1.1.4)
  - Downloading magento/module-inventory-admin-ui (1.2.6)
  - Downloading magento/module-inventory-in-store-pickup-admin-ui (1.1.5)
  - Downloading magento/module-inventory-in-store-pickup-shipping-api (1.1.4)
  - Downloading magento/module-inventory-in-store-pickup-sales-api (1.1.4)
  - Downloading magento/module-inventory-in-store-pickup-frontend (1.1.6)
  - Downloading magento/module-inventory-in-store-pickup-graph-ql (1.1.5)
  - Downloading magento/module-inventory-in-store-pickup-multishipping (1.1.4)
  - Downloading magento/module-quote-graph-ql (100.4.8)
  - Downloading magento/module-webapi (100.4.7)
  - Downloading magento/module-graph-ql (100.4.8)
  - Downloading magento/module-graph-ql-resolver-cache (100.4.1)
  - Downloading magento/module-eav-graph-ql (100.4.5)
  - Downloading magento/module-advanced-search (100.4.6)
  - Downloading magento/module-catalog-graph-ql (100.4.8)
  - Downloading magento/module-sales-graph-ql (100.4.8)
  - Downloading magento/module-gift-message-graph-ql (100.4.6)
  - Downloading magento/module-graph-ql-cache (100.4.5)
  - Downloading magento/module-catalog-customer-graph-ql (100.4.7)
  - Downloading magento/module-customer-graph-ql (100.4.8)
  - Downloading magento/module-inventory-in-store-pickup-quote-graph-ql (1.1.4)
  - Downloading magento/module-inventory-in-store-pickup-sales (1.1.4)
  - Downloading magento/module-inventory-in-store-pickup-quote (1.1.4)
  - Downloading magento/module-inventory-in-store-pickup-sales-admin-ui (1.1.6)
  - Downloading magento/module-inventory-in-store-pickup-shipping (1.1.5)
  - Downloading magento/module-inventory-in-store-pickup-shipping-admin-ui (1.1.4)
  - Downloading magento/module-inventory-in-store-pickup-webapi-extension (1.1.4)
  - Downloading magento/module-inventory-low-quantity-notification-api (1.2.5)
  - Downloading magento/module-inventory-low-quantity-notification (1.2.5)
  - Downloading magento/module-inventory-low-quantity-notification-admin-ui (1.2.5)
  - Downloading magento/module-inventory-product-alert (1.2.5)
  - Downloading magento/module-inventory-quote-graph-ql (1.0.5)
  - Downloading magento/module-inventory-requisition-list (1.2.6)
  - Downloading magento/module-inventory-reservation-cli (1.2.5)
  - Downloading magento/module-inventory-reservations (1.2.4)
  - Downloading magento/module-inventory-sales-admin-ui (1.2.6)
  - Downloading magento/module-inventory-sales-async-order (100.2.2)
  - Downloading magento/module-inventory-catalog-frontend-ui (1.0.5)
  - Downloading magento/module-inventory-sales-frontend-ui (1.2.5)
  - Downloading magento/module-inventory-setup-fixture-generator (1.2.4)
  - Downloading magento/module-inventory-shipping (1.2.5)
  - Downloading magento/module-inventory-shipping-admin-ui (1.2.6)
  - Downloading magento/module-inventory-source-selection (1.2.4)
  - Downloading magento/module-inventory-swatches-frontend-ui (1.0.4)
  - Downloading magento/module-inventory-visual-merchandiser (1.1.6)
  - Downloading magento/module-inventory-wishlist (1.0.5)
  - Downloading magento/module-page-builder-admin-analytics (1.1.5)
  - Downloading magento/module-page-builder-image-attribute (1.7.5)
  - Downloading magento/module-query-xml (103.4.7)
  - Downloading magento/services-connector (1.3.6)
  - Downloading magento/module-services-id (3.3.1)
  - Downloading magento/module-data-exporter (103.4.7)
  - Downloading magento/module-saas-common (103.4.7)
  - Downloading magento/module-graph-ql-server (1.0.3)
  - Downloading magento/module-admin-graph-ql-server (1.0.4)
  - Downloading magento/module-services-id-graph-ql-server (1.1.8)
  - Downloading magento/module-services-id-layout (1.1.6)
  - Downloading magento/module-store-data-exporter (2.11.1)
  - Downloading magento/module-vault (101.2.8)
  - Downloading magento/module-service-proxy (2.11.1)
  - Downloading magento/module-payment-services-paypal (2.11.1)
  - Downloading magento/module-payment-services-base (2.11.1)
  - Downloading magento/module-payment-services-dashboard (2.11.1)
  - Downloading magento/module-instant-purchase (100.4.7)
  - Downloading magento/module-checkout-agreements (100.4.7)
  - Downloading magento/module-sales-data-exporter (2.11.1)
  - Downloading magento/module-payment-services-saas-export (2.11.1)
  - Downloading magento/module-payment-services-paypal-graph-ql (2.11.1)
  - Downloading symfony/polyfill-php83 (v1.32.0)
  - Downloading symfony/http-foundation (v7.3.1)
  - Downloading symfony/error-handler (v7.3.1)
  - Downloading symfony/http-kernel (v7.3.1)
  - Downloading symfony/http-client-contracts (v3.6.0)
  - Downloading symfony/http-client (v7.3.1)
  - Downloading symfony/var-exporter (v7.3.0)
  - Downloading symfony/dependency-injection (v7.3.1)
  - Downloading symfony/config (v7.3.0)
  - Downloading spomky-labs/pki-framework (1.3.0)
  - Downloading spomky-labs/aes-key-wrap (v7.0.0)
  - Downloading paragonie/sodium_compat (v2.1.0)
  - Downloading web-token/jwt-framework (3.4.8)
  - Downloading tubalmartin/cssmin (v4.1.1)
  - Downloading phpseclib/mcrypt_compat (2.0.6)
  - Downloading sabberworm/php-css-parser (v8.9.0)
  - Downloading pelago/emogrifier (v7.3.0)
  - Downloading ezimuel/ringphp (1.3.0)
  - Downloading opensearch-project/opensearch-php (2.4.3)
  - Downloading magento/theme-frontend-blank (100.4.8)
  - Downloading magento/theme-frontend-luma (100.4.8)
  - Downloading magento/theme-adminhtml-backend (100.4.8)
  - Downloading phpfui/recaptcha (V2.0.0)
  - Downloading magento/module-securitytxt (1.1.4)
  - Downloading magento/module-re-captcha-validation-api (1.1.4)
  - Downloading magento/module-re-captcha-ui (1.1.5)
  - Downloading magento/module-re-captcha-wishlist (1.1.0)
  - Downloading magento/module-re-captcha-frontend-ui (1.1.6)
  - Downloading magento/module-re-captcha-webapi-ui (1.0.4)
  - Downloading magento/module-re-captcha-webapi-api (1.0.4)
  - Downloading magento/module-re-captcha-webapi-rest (1.0.4)
  - Downloading magento/module-re-captcha-webapi-graph-ql (1.0.4)
  - Downloading magento/module-re-captcha-version-3-invisible (2.0.5)
  - Downloading magento/module-re-captcha-version-2-invisible (2.0.5)
  - Downloading magento/module-re-captcha-version-2-checkbox (2.0.5)
  - Downloading magento/module-re-captcha-validation (1.1.4)
  - Downloading magento/module-re-captcha-user (1.1.5)
  - Downloading magento/module-re-captcha-store-pickup (1.0.4)
  - Downloading magento/module-re-captcha-send-friend (1.1.5)
  - Downloading magento/module-re-captcha-review (1.1.5)
  - Downloading magento/module-re-captcha-resend-confirmation-email (1.1.0)
  - Downloading magento/module-re-captcha-admin-ui (1.1.5)
  - Downloading magento/module-re-captcha-checkout (1.1.5)
  - Downloading magento/module-paypal (101.0.8)
  - Downloading magento/module-re-captcha-paypal (1.1.5)
  - Downloading magento/module-re-captcha-newsletter (1.1.5)
  - Downloading magento/module-re-captcha-migration (1.1.5)
  - Downloading magento/module-re-captcha-customer (1.1.6)
  - Downloading magento/module-re-captcha-contact (1.1.4)
  - Downloading magento/module-re-captcha-checkout-sales-rule (1.1.4)
  - Downloading magento/module-wishlist-graph-ql (100.4.8)
  - Downloading magento/module-wishlist-analytics (100.4.6)
  - Downloading magento/module-weee (100.4.8)
  - Downloading magento/module-weee-graph-ql (100.4.5)
  - Downloading magento/module-webapi-security (100.4.5)
  - Downloading magento/module-webapi-async (100.4.6)
  - Downloading magento/module-version (100.4.5)
  - Downloading magento/module-vault-graph-ql (100.4.4)
  - Downloading magento/module-usps (100.4.7)
  - Downloading magento/module-url-rewrite-graph-ql (100.4.7)
  - Downloading magento/module-ups (100.4.8)
  - Downloading magento/module-theme-graph-ql (100.4.5)
  - Downloading magento/module-tax-import-export (100.4.7)
  - Downloading magento/module-tax-graph-ql (100.4.4)
  - Downloading magento/module-swatches-layered-navigation (100.4.4)
  - Downloading magento/module-swatches (100.4.8)
  - Downloading magento/module-swatches-graph-ql (100.4.6)
  - Downloading magento/module-swagger (100.4.7)
  - Downloading magento/module-swagger-webapi-async (100.4.4)
  - Downloading magento/module-swagger-webapi (100.4.4)
  - Downloading magento/module-store-graph-ql (100.4.6)
  - Downloading magento/module-robots (101.1.4)
  - Downloading magento/module-sitemap (100.4.7)
  - Downloading magento/module-send-friend (100.4.6)
  - Downloading magento/module-send-friend-graph-ql (100.4.4)
  - Downloading magento/module-sample-data (100.4.6)
  - Downloading magento/module-sales-rule-graph-ql (100.4.1)
  - Downloading magento/module-sales-analytics (100.4.5)
  - Downloading magento/module-review-graph-ql (100.4.4)
  - Downloading magento/module-review-analytics (100.4.5)
  - Downloading magento/module-release-notification (100.4.6)
  - Downloading magento/module-related-product-graph-ql (100.4.5)
  - Downloading magento/module-quote-downloadable-links (100.4.4)
  - Downloading magento/module-quote-configurable-options (100.4.4)
  - Downloading magento/module-quote-bundle-options (100.4.4)
  - Downloading magento/module-quote-analytics (100.4.7)
  - Downloading magento/module-product-video (100.4.8)
  - Downloading magento/module-persistent (100.4.8)
  - Downloading magento/module-paypal-graph-ql (100.4.6)
  - Downloading magento/module-paypal-captcha (100.4.5)
  - Downloading magento/module-payment-graph-ql (100.4.3)
  - Downloading magento/module-order-cancellation (100.4.1)
  - Downloading magento/module-order-cancellation-ui (100.4.1)
  - Downloading magento/module-order-cancellation-graph-ql (100.4.1)
  - Downloading elasticsearch/elasticsearch (v8.18.0)
  - Downloading magento/module-elasticsearch (101.0.8)
  - Downloading magento/module-open-search (100.4.2)
  - Downloading magento/module-async-config (100.4.1)
  - Downloading magento/module-offline-shipping (100.4.7)
  - Downloading magento/module-offline-payments (100.4.6)
  - Downloading magento/module-newsletter-graph-ql (100.4.5)
  - Downloading magento/module-new-relic-reporting (100.4.6)
  - Downloading magento/module-mysql-mq (100.4.6)
  - Downloading magento/module-msrp-grouped-product (100.4.5)
  - Downloading magento/module-msrp-configurable-product (100.4.5)
  - Downloading magento/module-message-queue (100.4.8)
  - Downloading magento/module-media-gallery-synchronization-metadata (100.4.4)
  - Downloading magento/module-media-gallery-synchronization (100.4.7)
  - Downloading magento/module-media-gallery-renditions-api (100.4.5)
  - Downloading magento/module-media-gallery-renditions (100.4.6)
  - Downloading magento/module-media-gallery-metadata (100.4.6)
  - Downloading magento/module-media-gallery-integration (100.4.7)
  - Downloading magento/module-media-gallery-cms-ui (100.4.5)
  - Downloading magento/module-media-gallery-catalog-ui (100.4.5)
  - Downloading magento/module-media-gallery-catalog-integration (100.4.5)
  - Downloading magento/module-media-gallery-catalog (100.4.5)
  - Downloading magento/module-media-content-synchronization-api (100.4.6)
  - Downloading magento/module-media-content-synchronization-cms (100.4.5)
  - Downloading magento/module-media-content-synchronization-catalog (100.4.5)
  - Downloading magento/module-media-content-synchronization (100.4.7)
  - Downloading magento/module-media-content-cms (100.4.6)
  - Downloading magento/module-media-content-catalog (100.4.6)
  - Downloading magento/module-media-content (100.4.6)
  - Downloading magento/module-marketplace (100.4.6)
  - Downloading magento/module-login-as-customer-api (100.4.7)
  - Downloading magento/module-login-as-customer-sales (100.4.7)
  - Downloading magento/module-login-as-customer-quote (100.4.6)
  - Downloading magento/module-login-as-customer-page-cache (100.4.7)
  - Downloading magento/module-login-as-customer-log (100.4.6)
  - Downloading magento/module-login-as-customer (100.4.8)
  - Downloading magento/module-login-as-customer-assistance (100.4.7)
  - Downloading magento/module-login-as-customer-graph-ql (100.4.5)
  - Downloading magento/module-login-as-customer-frontend-ui (100.4.7)
  - Downloading magento/module-login-as-customer-admin-ui (100.4.8)
  - Downloading magento/module-layered-navigation (100.4.8)
  - Downloading magento/module-jwt-framework-adapter (100.4.4)
  - Downloading magento/module-integration-graph-ql (100.4.1)
  - Downloading magento/module-grouped-product-graph-ql (100.4.8)
  - Downloading magento/module-grouped-import-export (100.4.6)
  - Downloading magento/module-grouped-catalog-inventory (100.4.5)
  - Downloading magento/module-graph-ql-new-relic (100.4.1)
  - Downloading magento/module-cookie (100.4.8)
  - Downloading magento/module-google-gtag (100.4.3)
  - Downloading magento/module-google-analytics (100.4.4)
  - Downloading magento/module-google-optimizer (100.4.7)
  - Downloading magento/module-google-adwords (100.4.5)
  - Downloading magento/module-fedex (100.4.6)
  - Downloading magento/module-elasticsearch-8 (101.0.0)
  - Downloading magento/module-downloadable-import-export (100.4.7)
  - Downloading magento/module-downloadable-graph-ql (100.4.8)
  - Downloading magento/module-directory-graph-ql (100.4.6)
  - Downloading magento/module-dhl (100.4.7)
  - Downloading magento/module-customer-import-export (100.4.8)
  - Downloading magento/module-customer-downloadable-graph-ql (100.4.4)
  - Downloading magento/module-customer-analytics (100.4.5)
  - Downloading magento/module-currency-symbol (100.4.6)
  - Downloading magento/module-contact-graph-ql (100.4.1)
  - Downloading magento/module-configurable-product-sales (100.4.5)
  - Downloading magento/module-configurable-product-graph-ql (100.4.8)
  - Downloading magento/module-configurable-import-export (100.4.6)
  - Downloading magento/module-compare-list-graph-ql (100.4.4)
  - Downloading magento/module-cms-graph-ql (100.4.5)
  - Downloading magento/module-cms-url-rewrite-graph-ql (100.4.6)
  - Downloading magento/module-checkout-agreements-graph-ql (100.4.4)
  - Downloading magento/module-catalog-url-rewrite-graph-ql (100.4.6)
  - Downloading magento/module-catalog-rule-graph-ql (100.4.5)
  - Downloading magento/module-catalog-rule-configurable (100.4.7)
  - Downloading magento/module-catalog-inventory-graph-ql (100.4.5)
  - Downloading magento/module-catalog-cms-graph-ql (100.4.4)
  - Downloading magento/module-catalog-analytics (100.4.5)
  - Downloading magento/module-cardinal-commerce (100.4.6)
  - Downloading magento/module-cache-invalidate (100.4.6)
  - Downloading magento/module-bundle-graph-ql (100.4.8)
  - Downloading magento/module-application-performance-monitor (100.4.1)
  - Downloading magento/module-application-performance-monitor-new-relic (100.4.1)
  - Downloading magento/module-amqp (100.4.5)
  - Downloading magento/module-advanced-pricing-import-export (100.4.8)
  - Downloading magento/module-admin-notification (100.4.7)
  - Downloading magento/module-admin-analytics (100.4.7)
  - Downloading magento/composer (1.10.1)
  - Downloading laminas/laminas-soap (2.14.0)
  - Downloading webimpress/safe-writer (2.2.0)
  - Downloading laminas/laminas-modulemanager (2.17.0)
  - Downloading laminas/laminas-mvc (3.8.0)
  - Downloading laminas/laminas-di (3.15.0)
  - Downloading magento/magento2-base (2.4.8)
  - Downloading magento/language-zh_hans_cn (100.4.0)
  - Downloading magento/language-pt_br (100.4.0)
  - Downloading magento/language-nl_nl (100.4.0)
  - Downloading magento/language-fr_fr (100.4.0)
  - Downloading magento/language-es_es (100.4.0)
  - Downloading magento/language-en_us (100.4.0)
  - Downloading magento/language-de_de (100.4.0)
  - Downloading laminas/laminas-feed (2.24.0)
  - Downloading colinmollenhour/cache-backend-redis (1.17.1)
  - Downloading colinmollenhour/cache-backend-file (v1.4.8)
  - Downloading braintree/braintree_php (6.21.0)
  - Downloading paypal/module-braintree-core (4.7.0)
  - Downloading paypal/module-braintree-reward (4.7.0)
  - Downloading paypal/module-braintree-graph-ql (4.7.0)
  - Downloading paypal/module-braintree-gift-wrapping (4.7.0)
  - Downloading paypal/module-braintree-gift-card-account (4.7.0)
  - Downloading paypal/module-braintree-gift-card (4.7.0)
  - Downloading paypal/module-braintree-customer-balance (4.7.0)
  - Downloading pdepend/pdepend (3.x-dev 0463270)
  - Downloading phpmd/phpmd (3.x-dev 3a8f6ed)
   0/606 [>---------------------------]   0%
  12/606 [>---------------------------]   1%
  30/606 [=>--------------------------]   4%
  55/606 [==>-------------------------]   9%
  64/606 [==>-------------------------]  10%
  80/606 [===>------------------------]  13%
  83/606 [===>------------------------]  13%
  85/606 [===>------------------------]  14%
  87/606 [====>-----------------------]  14%
  88/606 [====>-----------------------]  14%
  89/606 [====>-----------------------]  14%
  90/606 [====>-----------------------]  14%
  91/606 [====>-----------------------]  15%
  92/606 [====>-----------------------]  15%
  93/606 [====>-----------------------]  15%
  94/606 [====>-----------------------]  15%
  95/606 [====>-----------------------]  15%
  96/606 [====>-----------------------]  15%
  97/606 [====>-----------------------]  16%
  99/606 [====>-----------------------]  16%
 100/606 [====>-----------------------]  16%
 102/606 [====>-----------------------]  16%
 104/606 [====>-----------------------]  17%
 105/606 [====>-----------------------]  17%
 108/606 [====>-----------------------]  17%
 111/606 [=====>----------------------]  18%
 113/606 [=====>----------------------]  18%
 114/606 [=====>----------------------]  18%
 115/606 [=====>----------------------]  18%
 116/606 [=====>----------------------]  19%
 117/606 [=====>----------------------]  19%
 119/606 [=====>----------------------]  19%
 121/606 [=====>----------------------]  19%
 122/606 [=====>----------------------]  20%
 123/606 [=====>----------------------]  20%
 124/606 [=====>----------------------]  20%
 127/606 [=====>----------------------]  20%
 132/606 [======>---------------------]  21%
 134/606 [======>---------------------]  22%
 135/606 [======>---------------------]  22%
 136/606 [======>---------------------]  22%
 137/606 [======>---------------------]  22%
 138/606 [======>---------------------]  22%
 141/606 [======>---------------------]  23%
 147/606 [======>---------------------]  24%
 148/606 [======>---------------------]  24%
 150/606 [======>---------------------]  24%
 151/606 [======>---------------------]  24%
 152/606 [=======>--------------------]  25%
 153/606 [=======>--------------------]  25%
 155/606 [=======>--------------------]  25%
 156/606 [=======>--------------------]  25%
 158/606 [=======>--------------------]  26%
 159/606 [=======>--------------------]  26%
 161/606 [=======>--------------------]  26%
 162/606 [=======>--------------------]  26%
 165/606 [=======>--------------------]  27%
 166/606 [=======>--------------------]  27%
 170/606 [=======>--------------------]  28%
 179/606 [========>-------------------]  29%
 182/606 [========>-------------------]  30%
 191/606 [========>-------------------]  31%
 203/606 [=========>------------------]  33%
 208/606 [=========>------------------]  34%
 224/606 [==========>-----------------]  36%
 233/606 [==========>-----------------]  38%
 241/606 [===========>----------------]  39%
 242/606 [===========>----------------]  39%
 246/606 [===========>----------------]  40%
 247/606 [===========>----------------]  40%
 248/606 [===========>----------------]  40%
 249/606 [===========>----------------]  41%
 251/606 [===========>----------------]  41%
 252/606 [===========>----------------]  41%
 256/606 [===========>----------------]  42%
 259/606 [===========>----------------]  42%
 261/606 [============>---------------]  43%
 265/606 [============>---------------]  43%
 272/606 [============>---------------]  44%
 276/606 [============>---------------]  45%
 277/606 [============>---------------]  45%
 278/606 [============>---------------]  45%
 281/606 [============>---------------]  46%
 283/606 [=============>--------------]  46%
 287/606 [=============>--------------]  47%
 291/606 [=============>--------------]  48%
 294/606 [=============>--------------]  48%
 295/606 [=============>--------------]  48%
 296/606 [=============>--------------]  48%
 300/606 [=============>--------------]  49%
 303/606 [==============>-------------]  50%
 305/606 [==============>-------------]  50%
 306/606 [==============>-------------]  50%
 308/606 [==============>-------------]  50%
 309/606 [==============>-------------]  50%
 310/606 [==============>-------------]  51%
 313/606 [==============>-------------]  51%
 314/606 [==============>-------------]  51%
 315/606 [==============>-------------]  51%
 316/606 [==============>-------------]  52%
 317/606 [==============>-------------]  52%
 319/606 [==============>-------------]  52%
 320/606 [==============>-------------]  52%
 321/606 [==============>-------------]  52%
 322/606 [==============>-------------]  53%
 323/606 [==============>-------------]  53%
 325/606 [===============>------------]  53%
 330/606 [===============>------------]  54%
 332/606 [===============>------------]  54%
 334/606 [===============>------------]  55%
 335/606 [===============>------------]  55%
 336/606 [===============>------------]  55%
 338/606 [===============>------------]  55%
 339/606 [===============>------------]  55%
 341/606 [===============>------------]  56%
 342/606 [===============>------------]  56%
 345/606 [===============>------------]  56%
 346/606 [===============>------------]  57%
 347/606 [================>-----------]  57%
 348/606 [================>-----------]  57%
 354/606 [================>-----------]  58%
 355/606 [================>-----------]  58%
 361/606 [================>-----------]  59%
 364/606 [================>-----------]  60%
 368/606 [=================>----------]  60%
 373/606 [=================>----------]  61%
 379/606 [=================>----------]  62%
 380/606 [=================>----------]  62%
 388/606 [=================>----------]  64%
 390/606 [==================>---------]  64%
 395/606 [==================>---------]  65%
 406/606 [==================>---------]  66%
 409/606 [==================>---------]  67%
 415/606 [===================>--------]  68%
 417/606 [===================>--------]  68%
 420/606 [===================>--------]  69%
 423/606 [===================>--------]  69%
 424/606 [===================>--------]  69%
 427/606 [===================>--------]  70%
 429/606 [===================>--------]  70%
 432/606 [===================>--------]  71%
 436/606 [====================>-------]  71%
 438/606 [====================>-------]  72%
 440/606 [====================>-------]  72%
 446/606 [====================>-------]  73%
 448/606 [====================>-------]  73%
 452/606 [====================>-------]  74%
 455/606 [=====================>------]  75%
 457/606 [=====================>------]  75%
 461/606 [=====================>------]  76%
 464/606 [=====================>------]  76%
 467/606 [=====================>------]  77%
 468/606 [=====================>------]  77%
 473/606 [=====================>------]  78%
 476/606 [=====================>------]  78%
 480/606 [======================>-----]  79%
 482/606 [======================>-----]  79%
 485/606 [======================>-----]  80%
 489/606 [======================>-----]  80%
 491/606 [======================>-----]  81%
 493/606 [======================>-----]  81%
 495/606 [======================>-----]  81%
 501/606 [=======================>----]  82%
 503/606 [=======================>----]  83%
 507/606 [=======================>----]  83%
 509/606 [=======================>----]  83%
 514/606 [=======================>----]  84%
 516/606 [=======================>----]  85%
 519/606 [=======================>----]  85%
 520/606 [========================>---]  85%
 525/606 [========================>---]  86%
 526/606 [========================>---]  86%
 528/606 [========================>---]  87%
 533/606 [========================>---]  87%
 536/606 [========================>---]  88%
 540/606 [========================>---]  89%
 541/606 [========================>---]  89%
 544/606 [=========================>--]  89%
 546/606 [=========================>--]  90%
 551/606 [=========================>--]  90%
 554/606 [=========================>--]  91%
 556/606 [=========================>--]  91%
 558/606 [=========================>--]  92%
 564/606 [==========================>-]  93%
 566/606 [==========================>-]  93%
 570/606 [==========================>-]  94%
 576/606 [==========================>-]  95%
 580/606 [==========================>-]  95%
 581/606 [==========================>-]  95%
 585/606 [===========================>]  96%
 593/606 [===========================>]  97%
 594/606 [===========================>]  98%
 596/606 [===========================>]  98%
 597/606 [===========================>]  98%
 598/606 [===========================>]  98%
 603/606 [===========================>]  99%
 604/606 [===========================>]  99%
 605/606 [===========================>]  99%

 606/606 [============================] 100%
  - Installing php-http/discovery (1.20.0): Extracting archive
  - Installing wikimedia/less.php (v5.4.0): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.32.0): Extracting archive
  - Installing webonyx/graphql-php (v15.21.3): Extracting archive
  - Installing tedivm/jshrink (v1.7.0): Extracting archive
  - Installing symfony/process (v6.4.20): Extracting archive
  - Installing symfony/polyfill-intl-normalizer (v1.32.0): Extracting archive
  - Installing symfony/polyfill-intl-idn (v1.32.0): Extracting archive
  - Installing symfony/deprecation-contracts (v3.6.0): Extracting archive
  - Installing symfony/mime (v6.4.21): Extracting archive
  - Installing psr/container (1.1.2): Extracting archive
  - Installing symfony/service-contracts (v3.6.0): Extracting archive
  - Installing psr/event-dispatcher (1.0.0): Extracting archive
  - Installing symfony/event-dispatcher-contracts (v3.6.0): Extracting archive
  - Installing symfony/event-dispatcher (v7.3.0): Extracting archive
  - Installing psr/log (3.0.2): Extracting archive
  - Installing doctrine/lexer (3.0.1): Extracting archive
  - Installing egulias/email-validator (4.0.4): Extracting archive
  - Installing symfony/mailer (v6.4.23): Extracting archive
  - Installing symfony/intl (v6.4.23): Extracting archive
  - Installing symfony/polyfill-intl-grapheme (v1.32.0): Extracting archive
  - Installing symfony/polyfill-ctype (v1.32.0): Extracting archive
  - Installing symfony/string (v6.4.21): Extracting archive
  - Installing symfony/console (v6.4.23): Extracting archive
  - Installing ramsey/collection (2.1.1): Extracting archive
  - Installing brick/math (0.12.3): Extracting archive
  - Installing ramsey/uuid (4.9.0): Extracting archive
  - Installing monolog/monolog (3.9.0): Extracting archive
  - Installing magento/zend-exception (1.16.1): Extracting archive
  - Installing magento/zend-log (1.16.1): Extracting archive
  - Installing magento/zend-cache (1.16.1): Extracting archive
  - Installing magento/zend-memory (1.16.0): Extracting archive
  - Installing magento/zend-pdf (1.16.5): Extracting archive
  - Installing magento/zend-loader (1.16.1): Extracting archive
  - Installing magento/zend-db (1.16.2): Extracting archive
  - Installing symfony/polyfill-php81 (v1.32.0): Extracting archive
  - Installing symfony/polyfill-php80 (v1.32.0): Extracting archive
  - Installing symfony/polyfill-php73 (v1.32.0): Extracting archive
  - Installing symfony/finder (v6.4.17): Extracting archive
  - Installing symfony/filesystem (v7.3.0): Extracting archive
  - Installing seld/signal-handler (2.0.2): Extracting archive
  - Installing seld/phar-utils (1.2.1): Extracting archive
  - Installing seld/jsonlint (1.11.0): Extracting archive
  - Installing react/promise (v3.2.0): Extracting archive
  - Installing marc-mabe/php-enum (v4.7.1): Extracting archive
  - Installing justinrainbow/json-schema (6.4.2): Extracting archive
  - Installing composer/pcre (3.3.2): Extracting archive
  - Installing composer/xdebug-handler (3.0.5): Extracting archive
  - Installing composer/spdx-licenses (1.5.9): Extracting archive
  - Installing composer/semver (3.4.3): Extracting archive
  - Installing composer/metadata-minifier (1.0.0): Extracting archive
  - Installing composer/class-map-generator (1.6.1): Extracting archive
  - Installing composer/ca-bundle (1.5.7): Extracting archive
  - Installing composer/composer (2.8.10): Extracting archive
  0/53 [>---------------------------]   0%
 23/53 [============>---------------]  43%
 39/53 [====================>-------]  73%
 52/53 [===========================>]  98%
 53/53 [============================] 100%
  - Installing magento/composer-dependency-version-audit-plugin (0.1.6): Extracting archive
  - Installing psr/http-message (2.0): Extracting archive
  - Installing laminas/laminas-stdlib (3.20.0): Extracting archive
  - Installing laminas/laminas-servicemanager (3.23.0): Extracting archive
  - Installing laminas/laminas-validator (2.64.4): Extracting archive
  - Installing laminas/laminas-escaper (2.17.0): Extracting archive
  - Installing laminas/laminas-uri (2.13.0): Extracting archive
  - Installing laminas/laminas-permissions-acl (2.17.0): Extracting archive
  - Installing laminas/laminas-translator (1.1.0): Extracting archive
  - Installing laminas/laminas-i18n (2.30.0): Extracting archive
  - Installing laminas/laminas-loader (2.11.1): Extracting archive
  - Installing laminas/laminas-http (2.22.0): Extracting archive
  - Installing laminas/laminas-filter (2.41.0): Extracting archive
  - Installing laminas/laminas-code (4.16.0): Extracting archive
  - Installing psr/http-client (1.0.3): Extracting archive
  - Installing ralouphie/getallheaders (3.0.3): Extracting archive
  - Installing psr/http-factory (1.1.0): Extracting archive
  - Installing guzzlehttp/psr7 (2.7.1): Extracting archive
  - Installing guzzlehttp/promises (2.2.0): Extracting archive
  - Installing guzzlehttp/guzzle (7.9.3): Extracting archive
  - Installing ezyang/htmlpurifier (v4.18.0): Extracting archive
  - Installing colinmollenhour/credis (v1.17.0): Extracting archive
  - Installing colinmollenhour/php-redis-session-abstract (v2.1.2): Extracting archive
  - Installing magento/framework (103.0.8): Extracting archive
  0/23 [>---------------------------]   0%
 10/23 [============>---------------]  43%
 22/23 [==========================>-]  95%
 23/23 [============================] 100%
  - Installing magento/magento-composer-installer (0.4.0): Extracting archive
  - Installing magento/composer-root-update-plugin (2.0.5): Extracting archive
  - Installing magento/inventory-composer-installer (1.2.0): Extracting archive
  - Installing squizlabs/php_codesniffer (3.13.2): Extracting archive
  - Installing dealerdirect/phpcodesniffer-composer-installer (v1.1.2): Extracting archive
  - Installing 2tvenom/cborencode (1.0.2): Extracting archive
  - Installing magento/module-adobe-ims-api (2.2.2): Extracting archive
  - Installing magento/module-user (101.2.8): Extracting archive
  - Installing magento/module-ui (101.2.8): Extracting archive
  - Installing magento/module-store (101.1.8): Extracting archive
  - Installing magento/module-media-storage (100.4.7): Extracting archive
  - Installing magento/module-config (101.2.8): Extracting archive
  - Installing magento/module-theme (101.1.8): Extracting archive
  - Installing magento/module-developer (100.4.8): Extracting archive
  - Installing magento/module-require-js (100.4.4): Extracting archive
  - Installing magento/module-deploy (100.4.8): Extracting archive
  - Installing magento/module-backend (102.0.8): Extracting archive
  - Installing magento/module-translation (100.4.8): Extracting archive
  - Installing magento/module-security (100.4.8): Extracting archive
  - Installing magento/module-sales (103.0.8): Extracting archive
  - Installing magento/module-wishlist (101.2.8): Extracting archive
  - Installing magento/module-tax (100.4.8): Extracting archive
  - Installing magento/module-shipping (100.4.8): Extracting archive
  - Installing magento/module-sales-sequence (100.4.5): Extracting archive
  - Installing magento/module-quote (101.2.8): Extracting archive
  - Installing magento/module-directory (100.4.8): Extracting archive
  - Installing magento/module-widget (101.2.8): Extracting archive
  - Installing magento/module-url-rewrite (102.0.7): Extracting archive
  - Installing magento/module-variable (100.4.6): Extracting archive
  - Installing magento/module-cms (104.0.8): Extracting archive
  - Installing magento/module-email (101.1.8): Extracting archive
  - Installing magento/module-catalog (104.0.8): Extracting archive
  - Installing magento/module-cms-url-rewrite (100.4.7): Extracting archive
  - Installing magento/module-eav (102.1.8): Extracting archive
  - Installing magento/module-import-export (101.0.8): Extracting archive
  - Installing magento/module-customer (103.0.8): Extracting archive
  - Installing magento/module-catalog-url-rewrite (100.4.8): Extracting archive
  - Installing magento/module-catalog-inventory (100.4.8): Extracting archive
  - Installing league/mime-type-detection (1.16.0): Extracting archive
  - Installing league/flysystem (3.30.0): Extracting archive
  - Installing league/flysystem-local (3.30.0): Extracting archive
  - Installing mtdowling/jmespath.php (2.8.0): Extracting archive
  - Installing aws/aws-crt-php (v1.2.7): Extracting archive
  - Installing aws/aws-sdk-php (3.351.7): Extracting archive
  - Installing league/flysystem-aws-s3-v3 (3.29.0): Extracting archive
  - Installing magento/module-remote-storage (100.4.6): Extracting archive
  - Installing magento/module-aws-s3 (100.4.6): Extracting archive
  - Installing magento/module-authorization (100.4.8): Extracting archive
  - Installing magento/module-catalog-import-export (101.1.8): Extracting archive
  - Installing magento/framework-message-queue (100.4.8): Extracting archive
  - Installing magento/framework-bulk (101.0.4): Extracting archive
  - Installing magento/module-asynchronous-operations (100.4.8): Extracting archive
  - Installing magento/module-product-alert (100.4.7): Extracting archive
  - Installing magento/module-page-cache (100.4.8): Extracting archive
  - Installing magento/module-checkout (100.4.8): Extracting archive
  - Installing magento/module-gift-message (100.4.7): Extracting archive
  - Installing magento/module-downloadable (100.4.8): Extracting archive
  - Installing magento/module-msrp (100.4.7): Extracting archive
  - Installing paragonie/random_compat (v9.99.100): Extracting archive
  - Installing paragonie/constant_time_encoding (v3.0.0): Extracting archive
  - Installing phpseclib/phpseclib (3.0.46): Extracting archive
  - Installing php-amqplib/php-amqplib (v3.7.3): Extracting archive
  - Installing magento/framework-amqp (100.4.6): Extracting archive
  - Installing magento/module-indexer (100.4.8): Extracting archive
  - Installing magento/module-rule (100.4.7): Extracting archive
  - Installing magento/module-catalog-rule (101.2.8): Extracting archive
  - Installing magento/module-sales-rule (101.2.8): Extracting archive
  - Installing magento/module-newsletter (100.4.8): Extracting archive
  - Installing magento/module-review (100.4.8): Extracting archive
  - Installing magento/module-reports (100.4.8): Extracting archive
  - Installing magento/module-payment (100.4.8): Extracting archive
  - Installing magento/magento-zf-db (3.21.0): Extracting archive
  - Installing laminas/laminas-text (2.12.1): Extracting archive
  - Installing laminas/laminas-eventmanager (3.14.0): Extracting archive
  - Installing laminas/laminas-session (2.24.0): Extracting archive
  - Installing laminas/laminas-recaptcha (3.8.0): Extracting archive
  - Installing laminas/laminas-captcha (2.18.0): Extracting archive
  - Installing magento/module-captcha (100.4.8): Extracting archive
  - Installing magento/module-multishipping (100.4.8): Extracting archive
  - Installing magento/module-csp (100.4.7): Extracting archive
  - Installing magento/module-contact (100.4.7): Extracting archive
  - Installing magento/module-integration (100.4.8): Extracting archive
  - Installing magento/module-rss (100.4.6): Extracting archive
  - Installing magento/module-encryption-key (100.4.6): Extracting archive
  - Installing magento/module-bundle (101.0.8): Extracting archive
  - Installing magento/module-cron (100.4.8): Extracting archive
  - Installing magento/module-backup (100.4.8): Extracting archive
  - Installing magento/module-adobe-ims (2.2.2): Extracting archive
  - Installing psr/clock (1.0.0): Extracting archive
  - Installing spomky-labs/otphp (11.3.0): Extracting archive
  - Installing dasprid/enum (1.0.6): Extracting archive
  - Installing bacon/bacon-qr-code (v3.0.1): Extracting archive
  - Installing endroid/qr-code (6.0.9): Extracting archive
  - Installing firebase/php-jwt (v6.11.1): Extracting archive
  - Installing duosecurity/duo_universal_php (1.1.0): Extracting archive
  - Installing duosecurity/duo_api_php (1.2.0): Extracting archive
  - Installing christian-riesen/base32 (1.6.0): Extracting archive
  - Installing magento/module-two-factor-auth (1.1.7): Extracting archive
  - Installing magento/module-jwt-user-token (100.4.3): Extracting archive
  - Installing magento/module-admin-adobe-ims (100.5.3): Extracting archive
  - Installing magento/module-admin-adobe-ims-two-factor-auth (1.0.2): Extracting archive
  - Installing adobe-commerce/adobe-ims-metapackage (2.2.3)
  - Installing behat/gherkin (v4.14.0): Extracting archive
  - Installing nikic/php-parser (v5.6.0): Extracting archive
  - Installing brick/varexporter (0.5.0): Extracting archive
  - Installing carlos-mg89/oauth (0.8.17): Extracting archive
  - Installing symfony/yaml (v7.3.1): Extracting archive
  - Installing symfony/var-dumper (v7.3.1): Extracting archive
  - Installing symfony/css-selector (v7.3.0): Extracting archive
  - Installing sebastian/diff (5.1.1): Extracting archive
  - Installing sebastian/recursion-context (5.0.0): Extracting archive
  - Installing sebastian/exporter (5.1.2): Extracting archive
  - Installing sebastian/comparator (5.0.3): Extracting archive
  - Installing psy/psysh (v0.12.9): Extracting archive
  - Installing sebastian/version (4.0.1): Extracting archive
  - Installing sebastian/type (4.0.0): Extracting archive
  - Installing sebastian/object-reflector (3.0.0): Extracting archive
  - Installing sebastian/object-enumerator (5.0.0): Extracting archive
  - Installing sebastian/global-state (6.0.2): Extracting archive
  - Installing sebastian/environment (6.1.0): Extracting archive
  - Installing sebastian/code-unit (2.0.0): Extracting archive
  - Installing sebastian/cli-parser (2.0.1): Extracting archive
  - Installing phpunit/php-timer (6.0.0): Extracting archive
  - Installing phpunit/php-text-template (3.0.1): Extracting archive
  - Installing phpunit/php-invoker (4.0.0): Extracting archive
  - Installing phpunit/php-file-iterator (4.1.0): Extracting archive
  - Installing theseer/tokenizer (1.2.3): Extracting archive
  - Installing sebastian/lines-of-code (2.0.2): Extracting archive
  - Installing sebastian/complexity (3.2.0): Extracting archive
  - Installing sebastian/code-unit-reverse-lookup (3.0.0): Extracting archive
  - Installing phpunit/php-code-coverage (10.1.16): Extracting archive
  - Installing phar-io/version (3.2.1): Extracting archive
  - Installing phar-io/manifest (2.0.4): Extracting archive
  - Installing myclabs/deep-copy (1.13.3): Extracting archive
  - Installing phpunit/phpunit (10.5.48): Extracting archive
  - Installing codeception/stub (4.1.4): Extracting archive
  - Installing codeception/lib-asserts (2.2.0): Extracting archive
  - Installing codeception/codeception (5.3.2): Extracting archive
  - Installing codeception/lib-web (1.0.7): Extracting archive
  - Installing dg/bypass-finals (v1.9.0): Extracting archive
  - Installing psr/cache (3.0.0): Extracting archive
  - Installing doctrine/annotations (2.0.2): Extracting archive
  - Installing php-http/promise (1.3.1): Extracting archive
  - Installing php-http/httplug (2.4.1): Extracting archive
  - Installing symfony/polyfill-php82 (v1.32.0): Extracting archive
  - Installing open-telemetry/context (1.2.1): Extracting archive
  - Installing open-telemetry/api (1.4.0): Extracting archive
  - Installing elastic/transport (v8.11.0): Extracting archive
  - Installing ezimuel/guzzlestreams (3.1.0): Extracting archive
  - Installing symfony/stopwatch (v7.3.0): Extracting archive
  - Installing symfony/options-resolver (v7.3.0): Extracting archive
  - Installing react/event-loop (v1.5.0): Extracting archive
  - Installing evenement/evenement (v3.0.2): Extracting archive
  - Installing react/stream (v1.4.0): Extracting archive
  - Installing react/cache (v1.2.0): Extracting archive
  - Installing react/dns (v1.13.0): Extracting archive
  - Installing react/socket (v1.16.0): Extracting archive
  - Installing react/child-process (v0.6.6): Extracting archive
  - Installing fidry/cpu-core-counter (1.2.0): Extracting archive
  - Installing clue/ndjson-react (v1.3.0): Extracting archive
  - Installing friendsofphp/php-cs-fixer (v3.84.0): Extracting archive
  - Installing laminas/laminas-config (3.10.1): Extracting archive
  - Installing laminas/laminas-router (3.14.0): Extracting archive
  - Installing laminas/laminas-server (2.18.0): Extracting archive
  - Installing laminas/laminas-json (3.7.1): Extracting archive
  - Installing laminas/laminas-view (2.39.0): Extracting archive
  - Installing magento/module-adobe-stock-image-api (1.3.4): Extracting archive
  - Installing magento/module-media-gallery-ui-api (100.4.6): Extracting archive
  - Installing magento/module-media-gallery-api (101.0.7): Extracting archive
  - Installing magento/module-media-gallery-synchronization-api (100.4.6): Extracting archive
  - Installing magento/module-media-gallery-metadata-api (100.4.5): Extracting archive
  - Installing magento/module-media-content-api (100.4.7): Extracting archive
  - Installing magento/module-media-gallery-ui (100.4.7): Extracting archive
  - Installing magento/module-adobe-stock-client-api (2.1.5): Extracting archive
  - Installing magento/module-adobe-stock-asset-api (2.0.4): Extracting archive
  - Installing magento/module-adobe-stock-image-admin-ui (1.3.6): Extracting archive
  - Installing magento/module-adobe-stock-image (1.3.6): Extracting archive
  - Installing astock/stock-api-libphp (1.1.6): Extracting archive
  - Installing magento/module-adobe-stock-client (1.3.5): Extracting archive
  - Installing magento/module-media-gallery (100.4.7): Extracting archive
  - Installing magento/module-adobe-stock-asset (1.3.4): Extracting archive
  - Installing magento/module-adobe-stock-admin-ui (1.3.5): Extracting archive
  - Installing magento/adobe-stock-integration (2.1.7-p1)
  - Installing allure-framework/allure-php-commons (v2.3.1): Extracting archive
  - Installing magento/magento-allure-phpunit (3.0.2): Extracting archive
  - Installing phpstan/phpstan (1.12.28): Extracting archive
  - Installing rector/rector (1.2.10): Extracting archive
  - Installing phpcsstandards/phpcsutils (1.1.0): Extracting archive
  - Installing magento/php-compatibility-fork (v0.1.0): Extracting archive
  - Installing magento/magento-coding-standard (38): Extracting archive
  - Installing weew/helpers-array (v1.3.1): Extracting archive
  - Installing symfony/dotenv (v6.4.16): Extracting archive
  - Installing php-webdriver/webdriver (1.15.2): Extracting archive
  - Installing mustache/mustache (v2.14.2): Extracting archive
  - Installing laminas/laminas-diactoros (3.6.0): Extracting archive
  - Installing csharpru/vault-php (4.4.1): Extracting archive
  - Installing codeception/module-webdriver (4.0.3): Extracting archive
  - Installing codeception/module-asserts (3.2.0): Extracting archive
  - Installing allure-framework/allure-codeception (v2.4.0): Extracting archive
  - Installing magento/magento2-functional-testing-framework (5.0.5): Extracting archive
  - Installing magento/module-aws-s3-page-builder (1.0.5): Extracting archive
  - Installing phpgt/propfunc (v1.0.1): Extracting archive
  - Installing phpgt/cssxpath (v1.3.0): Extracting archive
  - Installing phpgt/dom (v4.1.8): Extracting archive
  - Installing magento/module-catalog-widget (100.4.8): Extracting archive
  - Installing magento/module-page-builder (2.2.6): Extracting archive
  - Installing magento/module-analytics (100.4.8): Extracting archive
  - Installing magento/module-page-builder-analytics (1.6.5): Extracting archive
  - Installing magento/module-catalog-page-builder-analytics (1.6.5): Extracting archive
  - Installing magento/module-cms-page-builder-analytics (1.6.5): Extracting archive
  - Installing magento/module-inventory-api (1.2.6): Extracting archive
  - Installing magento/module-inventory-sales-api (1.2.5): Extracting archive
  - Installing magento/module-inventory-catalog-api (1.3.6): Extracting archive
  - Installing magento/module-inventory-advanced-checkout (1.2.5): Extracting archive
  - Installing magento/module-bundle-import-export (100.4.7): Extracting archive
  - Installing magento/module-inventory-bundle-import-export (1.1.4): Extracting archive
  - Installing magento/module-inventory-configuration-api (1.2.4): Extracting archive
  - Installing magento/module-inventory-bundle-product (1.2.5): Extracting archive
  - Installing magento/module-sales-inventory (100.4.5): Extracting archive
  - Installing magento/module-inventory-source-selection-api (1.4.5): Extracting archive
  - Installing magento/module-inventory (1.2.6): Extracting archive
  - Installing magento/module-inventory-source-deduction-api (1.2.5): Extracting archive
  - Installing magento/module-inventory-reservations-api (1.2.4): Extracting archive
  - Installing magento/module-inventory-sales (1.3.3): Extracting archive
  - Installing magento/module-inventory-multi-dimensional-indexer-api (1.2.4): Extracting archive
  - Installing magento/module-inventory-indexer (2.2.3): Extracting archive
  - Installing magento/module-inventory-catalog-admin-ui (1.2.6): Extracting archive
  - Installing magento/module-inventory-bundle-product-admin-ui (1.2.5): Extracting archive
  - Installing magento/module-inventory-bundle-product-indexer (1.1.5): Extracting archive
  - Installing magento/module-inventory-cache (1.2.6): Extracting archive
  - Installing magento/module-inventory-catalog-rule (100.2.0): Extracting archive
  - Installing magento/module-catalog-search (102.0.8): Extracting archive
  - Installing magento/module-search (101.1.8): Extracting archive
  - Installing magento/module-inventory-catalog-search (1.2.6): Extracting archive
  - Installing magento/module-inventory-catalog-search-bundle-product (1.0.4): Extracting archive
  - Installing magento/module-configurable-product (100.4.8): Extracting archive
  - Installing magento/module-inventory-catalog-search-configurable-product (1.0.4): Extracting archive
  - Installing magento/module-inventory-configuration (1.2.5): Extracting archive
  - Installing magento/module-inventory-catalog (1.3.3): Extracting archive
  - Installing magento/module-inventory-configurable-product (1.2.6): Extracting archive
  - Installing magento/module-inventory-configurable-product-admin-ui (1.2.6): Extracting archive
  - Installing magento/module-inventory-configurable-product-frontend-ui (1.0.6): Extracting archive
  - Installing magento/module-inventory-configurable-product-indexer (1.2.6): Extracting archive
  - Installing magento/module-inventory-distance-based-source-selection-api (1.2.4): Extracting archive
  - Installing magento/module-inventory-distance-based-source-selection (1.2.5): Extracting archive
  - Installing magento/module-inventory-distance-based-source-selection-admin-ui (1.2.4): Extracting archive
  - Installing magento/module-inventory-elasticsearch (1.2.5): Extracting archive
  - Installing magento/module-inventory-export-stock-api (1.2.4): Extracting archive
  - Installing magento/module-grouped-product (100.4.8): Extracting archive
  - Installing magento/module-inventory-export-stock (1.2.5): Extracting archive
  - Installing magento/module-inventory-graph-ql (1.2.5): Extracting archive
  - Installing magento/module-inventory-grouped-product (1.3.3): Extracting archive
  - Installing magento/module-inventory-grouped-product-admin-ui (1.2.5): Extracting archive
  - Installing magento/module-inventory-grouped-product-indexer (1.2.6): Extracting archive
  - Installing magento/module-inventory-import-export (1.2.6): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-api (1.1.4): Extracting archive
  - Installing magento/module-inventory-in-store-pickup (1.1.4): Extracting archive
  - Installing magento/module-inventory-admin-ui (1.2.6): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-admin-ui (1.1.5): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-shipping-api (1.1.4): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-sales-api (1.1.4): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-frontend (1.1.6): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-graph-ql (1.1.5): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-multishipping (1.1.4): Extracting archive
  - Installing magento/module-quote-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-webapi (100.4.7): Extracting archive
  - Installing magento/module-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-graph-ql-resolver-cache (100.4.1): Extracting archive
  - Installing magento/module-eav-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-advanced-search (100.4.6): Extracting archive
  - Installing magento/module-catalog-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-sales-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-gift-message-graph-ql (100.4.6): Extracting archive
  - Installing magento/module-graph-ql-cache (100.4.5): Extracting archive
  - Installing magento/module-catalog-customer-graph-ql (100.4.7): Extracting archive
  - Installing magento/module-customer-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-quote-graph-ql (1.1.4): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-sales (1.1.4): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-quote (1.1.4): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-sales-admin-ui (1.1.6): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-shipping (1.1.5): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-shipping-admin-ui (1.1.4): Extracting archive
  - Installing magento/module-inventory-in-store-pickup-webapi-extension (1.1.4): Extracting archive
  - Installing magento/module-inventory-low-quantity-notification-api (1.2.5): Extracting archive
  - Installing magento/module-inventory-low-quantity-notification (1.2.5): Extracting archive
  - Installing magento/module-inventory-low-quantity-notification-admin-ui (1.2.5): Extracting archive
  - Installing magento/module-inventory-product-alert (1.2.5): Extracting archive
  - Installing magento/module-inventory-quote-graph-ql (1.0.5): Extracting archive
  - Installing magento/module-inventory-requisition-list (1.2.6): Extracting archive
  - Installing magento/module-inventory-reservation-cli (1.2.5): Extracting archive
  - Installing magento/module-inventory-reservations (1.2.4): Extracting archive
  - Installing magento/module-inventory-sales-admin-ui (1.2.6): Extracting archive
  - Installing magento/module-inventory-sales-async-order (100.2.2): Extracting archive
  - Installing magento/module-inventory-catalog-frontend-ui (1.0.5): Extracting archive
  - Installing magento/module-inventory-sales-frontend-ui (1.2.5): Extracting archive
  - Installing magento/module-inventory-setup-fixture-generator (1.2.4): Extracting archive
  - Installing magento/module-inventory-shipping (1.2.5): Extracting archive
  - Installing magento/module-inventory-shipping-admin-ui (1.2.6): Extracting archive
  - Installing magento/module-inventory-source-selection (1.2.4): Extracting archive
  - Installing magento/module-inventory-swatches-frontend-ui (1.0.4): Extracting archive
  - Installing magento/module-inventory-visual-merchandiser (1.1.6): Extracting archive
  - Installing magento/module-inventory-wishlist (1.0.5): Extracting archive
  - Installing magento/module-page-builder-admin-analytics (1.1.5): Extracting archive
  - Installing magento/module-page-builder-image-attribute (1.7.5): Extracting archive
  - Installing magento/module-query-xml (103.4.7): Extracting archive
  - Installing magento/services-connector (1.3.6): Extracting archive
  - Installing magento/module-services-id (3.3.1): Extracting archive
  - Installing magento/module-data-exporter (103.4.7): Extracting archive
  - Installing magento/module-saas-common (103.4.7): Extracting archive
  - Installing magento/module-graph-ql-server (1.0.3): Extracting archive
  - Installing magento/module-admin-graph-ql-server (1.0.4): Extracting archive
  - Installing magento/module-services-id-graph-ql-server (1.1.8): Extracting archive
  - Installing magento/module-services-id-layout (1.1.6): Extracting archive
  - Installing magento/services-id (3.3.1)
  - Installing magento/module-store-data-exporter (2.11.1): Extracting archive
  - Installing magento/module-vault (101.2.8): Extracting archive
  - Installing magento/module-service-proxy (2.11.1): Extracting archive
  - Installing magento/module-payment-services-paypal (2.11.1): Extracting archive
  - Installing magento/module-payment-services-base (2.11.1): Extracting archive
  - Installing magento/module-payment-services-dashboard (2.11.1): Extracting archive
  - Installing magento/module-instant-purchase (100.4.7): Extracting archive
  - Installing magento/module-checkout-agreements (100.4.7): Extracting archive
  - Installing magento/module-sales-data-exporter (2.11.1): Extracting archive
  - Installing magento/module-payment-services-saas-export (2.11.1): Extracting archive
  - Installing magento/module-payment-services-paypal-graph-ql (2.11.1): Extracting archive
  - Installing magento/payment-services (2.11.1)
  - Installing symfony/polyfill-php83 (v1.32.0): Extracting archive
  - Installing symfony/http-foundation (v7.3.1): Extracting archive
  - Installing symfony/error-handler (v7.3.1): Extracting archive
  - Installing symfony/http-kernel (v7.3.1): Extracting archive
  - Installing symfony/http-client-contracts (v3.6.0): Extracting archive
  - Installing symfony/http-client (v7.3.1): Extracting archive
  - Installing symfony/var-exporter (v7.3.0): Extracting archive
  - Installing symfony/dependency-injection (v7.3.1): Extracting archive
  - Installing symfony/config (v7.3.0): Extracting archive
  - Installing spomky-labs/pki-framework (1.3.0): Extracting archive
  - Installing spomky-labs/aes-key-wrap (v7.0.0): Extracting archive
  - Installing paragonie/sodium_compat (v2.1.0): Extracting archive
  - Installing web-token/jwt-framework (3.4.8): Extracting archive
  - Installing tubalmartin/cssmin (v4.1.1): Extracting archive
  - Installing phpseclib/mcrypt_compat (2.0.6): Extracting archive
  - Installing sabberworm/php-css-parser (v8.9.0): Extracting archive
  - Installing pelago/emogrifier (v7.3.0): Extracting archive
  - Installing ezimuel/ringphp (1.3.0): Extracting archive
  - Installing opensearch-project/opensearch-php (2.4.3): Extracting archive
  - Installing magento/theme-frontend-blank (100.4.8): Extracting archive
  - Installing magento/theme-frontend-luma (100.4.8): Extracting archive
  - Installing magento/theme-adminhtml-backend (100.4.8): Extracting archive
  - Installing phpfui/recaptcha (V2.0.0): Extracting archive
  - Installing magento/module-securitytxt (1.1.4): Extracting archive
  - Installing magento/module-re-captcha-validation-api (1.1.4): Extracting archive
  - Installing magento/module-re-captcha-ui (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-wishlist (1.1.0): Extracting archive
  - Installing magento/module-re-captcha-frontend-ui (1.1.6): Extracting archive
  - Installing magento/module-re-captcha-webapi-ui (1.0.4): Extracting archive
  - Installing magento/module-re-captcha-webapi-api (1.0.4): Extracting archive
  - Installing magento/module-re-captcha-webapi-rest (1.0.4): Extracting archive
  - Installing magento/module-re-captcha-webapi-graph-ql (1.0.4): Extracting archive
  - Installing magento/module-re-captcha-version-3-invisible (2.0.5): Extracting archive
  - Installing magento/module-re-captcha-version-2-invisible (2.0.5): Extracting archive
  - Installing magento/module-re-captcha-version-2-checkbox (2.0.5): Extracting archive
  - Installing magento/module-re-captcha-validation (1.1.4): Extracting archive
  - Installing magento/module-re-captcha-user (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-store-pickup (1.0.4): Extracting archive
  - Installing magento/module-re-captcha-send-friend (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-review (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-resend-confirmation-email (1.1.0): Extracting archive
  - Installing magento/module-re-captcha-admin-ui (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-checkout (1.1.5): Extracting archive
  - Installing magento/module-paypal (101.0.8): Extracting archive
  - Installing magento/module-re-captcha-paypal (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-newsletter (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-migration (1.1.5): Extracting archive
  - Installing magento/module-re-captcha-customer (1.1.6): Extracting archive
  - Installing magento/module-re-captcha-contact (1.1.4): Extracting archive
  - Installing magento/module-re-captcha-checkout-sales-rule (1.1.4): Extracting archive
  - Installing magento/security-package (1.1.7)
  - Installing magento/page-builder (1.7.5)
  - Installing magento/module-wishlist-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-wishlist-analytics (100.4.6): Extracting archive
  - Installing magento/module-weee (100.4.8): Extracting archive
  - Installing magento/module-weee-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-webapi-security (100.4.5): Extracting archive
  - Installing magento/module-webapi-async (100.4.6): Extracting archive
  - Installing magento/module-version (100.4.5): Extracting archive
  - Installing magento/module-vault-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-usps (100.4.7): Extracting archive
  - Installing magento/module-url-rewrite-graph-ql (100.4.7): Extracting archive
  - Installing magento/module-ups (100.4.8): Extracting archive
  - Installing magento/module-theme-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-tax-import-export (100.4.7): Extracting archive
  - Installing magento/module-tax-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-swatches-layered-navigation (100.4.4): Extracting archive
  - Installing magento/module-swatches (100.4.8): Extracting archive
  - Installing magento/module-swatches-graph-ql (100.4.6): Extracting archive
  - Installing magento/module-swagger (100.4.7): Extracting archive
  - Installing magento/module-swagger-webapi-async (100.4.4): Extracting archive
  - Installing magento/module-swagger-webapi (100.4.4): Extracting archive
  - Installing magento/module-store-graph-ql (100.4.6): Extracting archive
  - Installing magento/module-robots (101.1.4): Extracting archive
  - Installing magento/module-sitemap (100.4.7): Extracting archive
  - Installing magento/module-send-friend (100.4.6): Extracting archive
  - Installing magento/module-send-friend-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-sample-data (100.4.6): Extracting archive
  - Installing magento/module-sales-rule-graph-ql (100.4.1): Extracting archive
  - Installing magento/module-sales-analytics (100.4.5): Extracting archive
  - Installing magento/module-review-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-review-analytics (100.4.5): Extracting archive
  - Installing magento/module-release-notification (100.4.6): Extracting archive
  - Installing magento/module-related-product-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-quote-downloadable-links (100.4.4): Extracting archive
  - Installing magento/module-quote-configurable-options (100.4.4): Extracting archive
  - Installing magento/module-quote-bundle-options (100.4.4): Extracting archive
  - Installing magento/module-quote-analytics (100.4.7): Extracting archive
  - Installing magento/module-product-video (100.4.8): Extracting archive
  - Installing magento/module-persistent (100.4.8): Extracting archive
  - Installing magento/module-paypal-graph-ql (100.4.6): Extracting archive
  - Installing magento/module-paypal-captcha (100.4.5): Extracting archive
  - Installing magento/module-payment-graph-ql (100.4.3): Extracting archive
  - Installing magento/module-order-cancellation (100.4.1): Extracting archive
  - Installing magento/module-order-cancellation-ui (100.4.1): Extracting archive
  - Installing magento/module-order-cancellation-graph-ql (100.4.1): Extracting archive
  - Installing elasticsearch/elasticsearch (v8.18.0): Extracting archive
  - Installing magento/module-elasticsearch (101.0.8): Extracting archive
  - Installing magento/module-open-search (100.4.2): Extracting archive
  - Installing magento/module-async-config (100.4.1): Extracting archive
  - Installing magento/module-offline-shipping (100.4.7): Extracting archive
  - Installing magento/module-offline-payments (100.4.6): Extracting archive
  - Installing magento/module-newsletter-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-new-relic-reporting (100.4.6): Extracting archive
  - Installing magento/module-mysql-mq (100.4.6): Extracting archive
  - Installing magento/module-msrp-grouped-product (100.4.5): Extracting archive
  - Installing magento/module-msrp-configurable-product (100.4.5): Extracting archive
  - Installing magento/module-message-queue (100.4.8): Extracting archive
  - Installing magento/module-media-gallery-synchronization-metadata (100.4.4): Extracting archive
  - Installing magento/module-media-gallery-synchronization (100.4.7): Extracting archive
  - Installing magento/module-media-gallery-renditions-api (100.4.5): Extracting archive
  - Installing magento/module-media-gallery-renditions (100.4.6): Extracting archive
  - Installing magento/module-media-gallery-metadata (100.4.6): Extracting archive
  - Installing magento/module-media-gallery-integration (100.4.7): Extracting archive
  - Installing magento/module-media-gallery-cms-ui (100.4.5): Extracting archive
  - Installing magento/module-media-gallery-catalog-ui (100.4.5): Extracting archive
  - Installing magento/module-media-gallery-catalog-integration (100.4.5): Extracting archive
  - Installing magento/module-media-gallery-catalog (100.4.5): Extracting archive
  - Installing magento/module-media-content-synchronization-api (100.4.6): Extracting archive
  - Installing magento/module-media-content-synchronization-cms (100.4.5): Extracting archive
  - Installing magento/module-media-content-synchronization-catalog (100.4.5): Extracting archive
  - Installing magento/module-media-content-synchronization (100.4.7): Extracting archive
  - Installing magento/module-media-content-cms (100.4.6): Extracting archive
  - Installing magento/module-media-content-catalog (100.4.6): Extracting archive
  - Installing magento/module-media-content (100.4.6): Extracting archive
  - Installing magento/module-marketplace (100.4.6): Extracting archive
  - Installing magento/module-login-as-customer-api (100.4.7): Extracting archive
  - Installing magento/module-login-as-customer-sales (100.4.7): Extracting archive
  - Installing magento/module-login-as-customer-quote (100.4.6): Extracting archive
  - Installing magento/module-login-as-customer-page-cache (100.4.7): Extracting archive
  - Installing magento/module-login-as-customer-log (100.4.6): Extracting archive
  - Installing magento/module-login-as-customer (100.4.8): Extracting archive
  - Installing magento/module-login-as-customer-assistance (100.4.7): Extracting archive
  - Installing magento/module-login-as-customer-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-login-as-customer-frontend-ui (100.4.7): Extracting archive
  - Installing magento/module-login-as-customer-admin-ui (100.4.8): Extracting archive
  - Installing magento/module-layered-navigation (100.4.8): Extracting archive
  - Installing magento/module-jwt-framework-adapter (100.4.4): Extracting archive
  - Installing magento/module-integration-graph-ql (100.4.1): Extracting archive
  - Installing magento/module-grouped-product-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-grouped-import-export (100.4.6): Extracting archive
  - Installing magento/module-grouped-catalog-inventory (100.4.5): Extracting archive
  - Installing magento/module-graph-ql-new-relic (100.4.1): Extracting archive
  - Installing magento/module-cookie (100.4.8): Extracting archive
  - Installing magento/module-google-gtag (100.4.3): Extracting archive
  - Installing magento/module-google-analytics (100.4.4): Extracting archive
  - Installing magento/module-google-optimizer (100.4.7): Extracting archive
  - Installing magento/module-google-adwords (100.4.5): Extracting archive
  - Installing magento/module-fedex (100.4.6): Extracting archive
  - Installing magento/module-elasticsearch-8 (101.0.0): Extracting archive
  - Installing magento/module-downloadable-import-export (100.4.7): Extracting archive
  - Installing magento/module-downloadable-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-directory-graph-ql (100.4.6): Extracting archive
  - Installing magento/module-dhl (100.4.7): Extracting archive
  - Installing magento/module-customer-import-export (100.4.8): Extracting archive
  - Installing magento/module-customer-downloadable-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-customer-analytics (100.4.5): Extracting archive
  - Installing magento/module-currency-symbol (100.4.6): Extracting archive
  - Installing magento/module-contact-graph-ql (100.4.1): Extracting archive
  - Installing magento/module-configurable-product-sales (100.4.5): Extracting archive
  - Installing magento/module-configurable-product-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-configurable-import-export (100.4.6): Extracting archive
  - Installing magento/module-compare-list-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-cms-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-cms-url-rewrite-graph-ql (100.4.6): Extracting archive
  - Installing magento/module-checkout-agreements-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-catalog-url-rewrite-graph-ql (100.4.6): Extracting archive
  - Installing magento/module-catalog-rule-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-catalog-rule-configurable (100.4.7): Extracting archive
  - Installing magento/module-catalog-inventory-graph-ql (100.4.5): Extracting archive
  - Installing magento/module-catalog-cms-graph-ql (100.4.4): Extracting archive
  - Installing magento/module-catalog-analytics (100.4.5): Extracting archive
  - Installing magento/module-cardinal-commerce (100.4.6): Extracting archive
  - Installing magento/module-cache-invalidate (100.4.6): Extracting archive
  - Installing magento/module-bundle-graph-ql (100.4.8): Extracting archive
  - Installing magento/module-application-performance-monitor (100.4.1): Extracting archive
  - Installing magento/module-application-performance-monitor-new-relic (100.4.1): Extracting archive
  - Installing magento/module-amqp (100.4.5): Extracting archive
  - Installing magento/module-advanced-pricing-import-export (100.4.8): Extracting archive
  - Installing magento/module-admin-notification (100.4.7): Extracting archive
  - Installing magento/module-admin-analytics (100.4.7): Extracting archive
  - Installing magento/composer (1.10.1): Extracting archive
  - Installing laminas/laminas-soap (2.14.0): Extracting archive
  - Installing webimpress/safe-writer (2.2.0): Extracting archive
  - Installing laminas/laminas-modulemanager (2.17.0): Extracting archive
  - Installing laminas/laminas-mvc (3.8.0): Extracting archive
  - Installing laminas/laminas-di (3.15.0): Extracting archive
  - Installing magento/magento2-base (2.4.8): Extracting archive
  - Installing magento/language-zh_hans_cn (100.4.0): Extracting archive
  - Installing magento/language-pt_br (100.4.0): Extracting archive
  - Installing magento/language-nl_nl (100.4.0): Extracting archive
  - Installing magento/language-fr_fr (100.4.0): Extracting archive
  - Installing magento/language-es_es (100.4.0): Extracting archive
  - Installing magento/language-en_us (100.4.0): Extracting archive
  - Installing magento/language-de_de (100.4.0): Extracting archive
  - Installing magento/inventory-metapackage (1.2.8)
  - Installing laminas/laminas-feed (2.24.0): Extracting archive
  - Installing colinmollenhour/cache-backend-redis (1.17.1): Extracting archive
  - Installing colinmollenhour/cache-backend-file (v1.4.8): Extracting archive
  - Installing braintree/braintree_php (6.21.0): Extracting archive
  - Installing paypal/module-braintree-core (4.7.0): Extracting archive
  - Installing paypal/module-braintree-reward (4.7.0): Extracting archive
  - Installing paypal/module-braintree-graph-ql (4.7.0): Extracting archive
  - Installing paypal/module-braintree-gift-wrapping (4.7.0): Extracting archive
  - Installing paypal/module-braintree-gift-card-account (4.7.0): Extracting archive
  - Installing paypal/module-braintree-gift-card (4.7.0): Extracting archive
  - Installing paypal/module-braintree-customer-balance (4.7.0): Extracting archive
  - Installing paypal/module-braintree (4.7.0)
  - Installing adobe-commerce/os-extensions-metapackage (1.0.1)
  - Installing magento/product-community-edition (2.4.8)
  - Installing pdepend/pdepend (3.x-dev 0463270): Extracting archive
  - Installing phpmd/phpmd (3.x-dev 3a8f6ed): Extracting archive
   0/514 [>---------------------------]   0%
  60/514 [===>------------------------]  11%
 105/514 [=====>----------------------]  20%
 160/514 [========>-------------------]  31%
 212/514 [===========>----------------]  41%
 259/514 [==============>-------------]  50%
 298/514 [================>-----------]  57%
 315/514 [=================>----------]  61%
 352/514 [===================>--------]  68%
 362/514 [===================>--------]  70%
 402/514 [=====================>------]  78%
 419/514 [======================>-----]  81%
 448/514 [========================>---]  87%
 468/514 [=========================>--]  91%
 497/514 [===========================>]  96%
 514/514 [============================] 100%
    ...Module Magento_InventoryApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryApi module
    ...Module Magento_InventorySalesApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySalesApi module
    ...Module Magento_InventoryCatalogApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalogApi module
    ...Module Magento_InventoryAdvancedCheckout recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryAdvancedCheckout module
    ...Module Magento_InventoryBundleImportExport recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryBundleImportExport module
    ...Module Magento_InventoryConfigurationApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryConfigurationApi module
    ...Module Magento_InventoryBundleProduct recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryBundleProduct module
    ...Module Magento_InventorySourceSelectionApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySourceSelectionApi module
    ...Module Magento_Inventory recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_Inventory module
    ...Module Magento_InventorySourceDeductionApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySourceDeductionApi module
    ...Module Magento_InventoryReservationsApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryReservationsApi module
    ...Module Magento_InventorySales recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySales module
    ...Module Magento_InventoryMultiDimensionalIndexerApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryMultiDimensionalIndexerApi module
    ...Module Magento_InventoryIndexer recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryIndexer module
    ...Module Magento_InventoryCatalogAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalogAdminUi module
    ...Module Magento_InventoryBundleProductAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryBundleProductAdminUi module
    ...Module Magento_InventoryBundleProductIndexer recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryBundleProductIndexer module
    ...Module Magento_InventoryCache recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCache module
    ...Module Magento_InventoryCatalogRule recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalogRule module
    ...Module Magento_InventoryCatalogSearch recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalogSearch module
    ...Module Magento_InventoryCatalogSearchBundleProduct recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalogSearchBundleProduct module
    ...Module Magento_InventoryCatalogSearchConfigurableProduct recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalogSearchConfigurableProduct module
    ...Module Magento_InventoryConfiguration recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryConfiguration module
    ...Module Magento_InventoryCatalog recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalog module
    ...Module Magento_InventoryConfigurableProduct recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryConfigurableProduct module
    ...Module Magento_InventoryConfigurableProductAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryConfigurableProductAdminUi module
    ...Module Magento_InventoryConfigurableProductFrontendUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryConfigurableProductFrontendUi module
    ...Module Magento_InventoryConfigurableProductIndexer recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryConfigurableProductIndexer module
    ...Module Magento_InventoryDistanceBasedSourceSelectionApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryDistanceBasedSourceSelectionApi module
    ...Module Magento_InventoryDistanceBasedSourceSelection recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryDistanceBasedSourceSelection module
    ...Module Magento_InventoryDistanceBasedSourceSelectionAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryDistanceBasedSourceSelectionAdminUi module
    ...Module Magento_InventoryElasticsearch recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryElasticsearch module
    ...Module Magento_InventoryExportStockApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryExportStockApi module
    ...Module Magento_InventoryExportStock recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryExportStock module
    ...Module Magento_InventoryGraphQl recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryGraphQl module
    ...Module Magento_InventoryGroupedProduct recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryGroupedProduct module
    ...Module Magento_InventoryGroupedProductAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryGroupedProductAdminUi module
    ...Module Magento_InventoryGroupedProductIndexer recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryGroupedProductIndexer module
    ...Module Magento_InventoryImportExport recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryImportExport module
    ...Module Magento_InventoryInStorePickupApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupApi module
    ...Module Magento_InventoryInStorePickup recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickup module
    ...Module Magento_InventoryAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryAdminUi module
    ...Module Magento_InventoryInStorePickupAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupAdminUi module
    ...Module Magento_InventoryInStorePickupShippingApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupShippingApi module
    ...Module Magento_InventoryInStorePickupSalesApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupSalesApi module
    ...Module Magento_InventoryInStorePickupFrontend recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupFrontend module
    ...Module Magento_InventoryInStorePickupGraphQl recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupGraphQl module
    ...Module Magento_InventoryInStorePickupMultishipping recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupMultishipping module
    ...Module Magento_InventoryInStorePickupQuoteGraphQl recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupQuoteGraphQl module
    ...Module Magento_InventoryInStorePickupSales recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupSales module
    ...Module Magento_InventoryInStorePickupQuote recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupQuote module
    ...Module Magento_InventoryInStorePickupSalesAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupSalesAdminUi module
    ...Module Magento_InventoryInStorePickupShipping recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupShipping module
    ...Module Magento_InventoryInStorePickupShippingAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupShippingAdminUi module
    ...Module Magento_InventoryInStorePickupWebapiExtension recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryInStorePickupWebapiExtension module
    ...Module Magento_InventoryLowQuantityNotificationApi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryLowQuantityNotificationApi module
    ...Module Magento_InventoryLowQuantityNotification recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryLowQuantityNotification module
    ...Module Magento_InventoryLowQuantityNotificationAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryLowQuantityNotificationAdminUi module
    ...Module Magento_InventoryProductAlert recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryProductAlert module
    ...Module Magento_InventoryQuoteGraphQl recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryQuoteGraphQl module
    ...Module Magento_InventoryRequisitionList recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryRequisitionList module
    ...Module Magento_InventoryReservationCli recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryReservationCli module
    ...Module Magento_InventoryReservations recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryReservations module
    ...Module Magento_InventorySalesAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySalesAdminUi module
    ...Module Magento_InventorySalesAsyncOrder recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySalesAsyncOrder module
    ...Module Magento_InventoryCatalogFrontendUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryCatalogFrontendUi module
    ...Module Magento_InventorySalesFrontendUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySalesFrontendUi module
    ...Module Magento_InventorySetupFixtureGenerator recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySetupFixtureGenerator module
    ...Module Magento_InventoryShipping recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryShipping module
    ...Module Magento_InventoryShippingAdminUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryShippingAdminUi module
    ...Module Magento_InventorySourceSelection recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySourceSelection module
    ...Module Magento_InventorySwatchesFrontendUi recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventorySwatchesFrontendUi module
    ...Module Magento_InventoryVisualMerchandiser recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryVisualMerchandiser module
    ...Module Magento_InventoryWishlist recognized as part of Magento Multi Source Inventory implementation
    ...No special rule applied for Magento_InventoryWishlist module
104 package suggestions were added by new dependencies, use `composer suggest` to see details.
Package laminas/laminas-config is abandoned, you should avoid using it. No replacement was suggested.
Package laminas/laminas-json is abandoned, you should avoid using it. No replacement was suggested.
Package laminas/laminas-loader is abandoned, you should avoid using it. No replacement was suggested.
Package laminas/laminas-text is abandoned, you should avoid using it. No replacement was suggested.
Generating autoload files
137 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
PHP CodeSniffer Config installed_paths set to ../../magento/magento-coding-standard,../../magento/php-compatibility-fork,../../phpcsstandards/phpcsutils
No security vulnerability advisories found.
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Warning: magento.env file not found.
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
[+] Running 7/7
 ⠿ Container magento_app_1          Stopped                                                                                                                                                   2.1s
 ⠿ Container magento_mailcatcher_1  Stopped                                                                                                                                                   2.1s
 ⠿ Container magento_phpfpm_1       Stopped                                                                                                                                                   0.2s
 ⠿ Container magento_rabbitmq_1     Stopped                                                                                                                                                   1.4s
 ⠿ Container magento_opensearch_1   Stopped                                                                                                                                                  10.8s
 ⠿ Container magento_db_1           Stopped                                                                                                                                                   0.4s
 ⠿ Container magento_redis_1        Stopped                                                                                                                                                   0.2s
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
[+] Running 7/7
 ⠿ Container magento_db_1           Started                                                                                                                                                   1.0s
 ⠿ Container magento_rabbitmq_1     Started                                                                                                                                                   1.4s
 ⠿ Container magento_redis_1        Started                                                                                                                                                   1.2s
 ⠿ Container magento_mailcatcher_1  Started                                                                                                                                                   0.9s
 ⠿ Container magento_opensearch_1   Started                                                                                                                                                   1.3s
 ⠿ Container magento_phpfpm_1       Started                                                                                                                                                  17.4s
 ⠿ Container magento_app_1          Started                                                                                                                                                  18.6s
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Adding Magento modules to Composer allow-plugins directive...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Running, Magento setup:install...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
Starting Magento installation:
File permissions check...
[Progress: 1 / 1473]
Required extensions check...
[Progress: 2 / 1473]
Enabling Maintenance Mode...
[Progress: 3 / 1473]
Installing deployment configuration...
[Progress: 4 / 1473]
Cleaning up database...
Cleaning up database `magento`
[Progress: 5 / 1473]
Installing database schema:
Schema creation/updates:
Module 'Magento_Csp':
[Progress: 6 / 1473]
Module 'Magento_Store':
[Progress: 7 / 1473]
Module 'Magento_AdminAnalytics':
[Progress: 8 / 1473]
Module 'Magento_Directory':
[Progress: 9 / 1473]
Module 'Magento_AdminNotification':
[Progress: 10 / 1473]
Module 'Magento_AdobeIms':
[Progress: 11 / 1473]
Module 'Magento_AdobeImsApi':
[Progress: 12 / 1473]
Module 'Magento_AdobeStockAdminUi':
[Progress: 13 / 1473]
Module 'Magento_MediaGallery':
[Progress: 14 / 1473]
Module 'Magento_AdobeStockAssetApi':
[Progress: 15 / 1473]
Module 'Magento_AdobeStockClient':
[Progress: 16 / 1473]
Module 'Magento_AdobeStockClientApi':
[Progress: 17 / 1473]
Module 'Magento_AdobeStockImage':
[Progress: 18 / 1473]
Module 'Magento_Theme':
[Progress: 19 / 1473]
Module 'Magento_AdobeStockImageApi':
[Progress: 20 / 1473]
Module 'Magento_AdvancedPricingImportExport':
[Progress: 21 / 1473]
Module 'Magento_Backend':
[Progress: 22 / 1473]
Module 'Magento_Amqp':
[Progress: 23 / 1473]
Module 'Magento_Security':
[Progress: 24 / 1473]
Module 'Magento_ApplicationPerformanceMonitor':
[Progress: 25 / 1473]
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
[Progress: 26 / 1473]
Module 'Magento_Config':
[Progress: 27 / 1473]
Module 'Magento_User':
[Progress: 28 / 1473]
Module 'Magento_Authorization':
[Progress: 29 / 1473]
Module 'Magento_Eav':
[Progress: 30 / 1473]
Module 'Magento_Customer':
[Progress: 31 / 1473]
Module 'Magento_AdminAdobeIms':
[Progress: 32 / 1473]
Module 'Magento_Backup':
[Progress: 33 / 1473]
Module 'Magento_Indexer':
[Progress: 34 / 1473]
Module 'Magento_GraphQl':
[Progress: 35 / 1473]
Module 'Magento_BundleImportExport':
[Progress: 36 / 1473]
Module 'Magento_CacheInvalidate':
[Progress: 37 / 1473]
Module 'Magento_Variable':
[Progress: 38 / 1473]
Module 'Magento_Cms':
[Progress: 39 / 1473]
Module 'Magento_Rule':
[Progress: 40 / 1473]
Module 'Magento_Integration':
[Progress: 41 / 1473]
Module 'Magento_GraphQlResolverCache':
[Progress: 42 / 1473]
Module 'Magento_EavGraphQl':
[Progress: 43 / 1473]
Module 'Magento_Search':
[Progress: 44 / 1473]
Module 'Magento_CatalogImportExport':
[Progress: 45 / 1473]
Module 'Magento_Catalog':
[Progress: 46 / 1473]
Module 'Magento_CatalogInventory':
[Progress: 47 / 1473]
Module 'Magento_CatalogPageBuilderAnalytics':
[Progress: 48 / 1473]
Module 'Magento_CatalogRule':
[Progress: 49 / 1473]
Module 'Magento_Msrp':
[Progress: 50 / 1473]
Module 'Magento_CatalogRuleGraphQl':
[Progress: 51 / 1473]
Module 'Magento_CatalogSearch':
[Progress: 52 / 1473]
Module 'Magento_CatalogUrlRewrite':
[Progress: 53 / 1473]
Module 'Magento_StoreGraphQl':
[Progress: 54 / 1473]
Module 'Magento_MediaStorage':
[Progress: 55 / 1473]
Module 'Magento_Quote':
[Progress: 56 / 1473]
Module 'Magento_SalesSequence':
[Progress: 57 / 1473]
Module 'Magento_CheckoutAgreementsGraphQl':
[Progress: 58 / 1473]
Module 'Magento_MediaGalleryUi':
[Progress: 59 / 1473]
Module 'Magento_CmsGraphQl':
[Progress: 60 / 1473]
Module 'Magento_CmsPageBuilderAnalytics':
[Progress: 61 / 1473]
Module 'Magento_CmsUrlRewrite':
[Progress: 62 / 1473]
Module 'Magento_CmsUrlRewriteGraphQl':
[Progress: 63 / 1473]
Module 'Magento_CatalogGraphQl':
[Progress: 64 / 1473]
Module 'Magento_TwoFactorAuth':
[Progress: 65 / 1473]
Module 'Magento_Payment':
[Progress: 66 / 1473]
Module 'Magento_Sales':
[Progress: 67 / 1473]
Module 'Magento_QuoteGraphQl':
[Progress: 68 / 1473]
Module 'Magento_Checkout':
[Progress: 69 / 1473]
Module 'Magento_Contact':
[Progress: 70 / 1473]
Module 'Magento_ContactGraphQl':
[Progress: 71 / 1473]
Module 'Magento_Cookie':
[Progress: 72 / 1473]
Module 'Magento_Cron':
[Progress: 73 / 1473]
Module 'Magento_GraphQlServer':
[Progress: 74 / 1473]
Module 'Magento_Widget':
[Progress: 75 / 1473]
Module 'Magento_Robots':
[Progress: 76 / 1473]
Module 'Magento_Analytics':
[Progress: 77 / 1473]
Module 'Magento_Downloadable':
[Progress: 78 / 1473]
Module 'Magento_Newsletter':
[Progress: 79 / 1473]
Module 'Magento_CustomerImportExport':
[Progress: 80 / 1473]
Module 'Magento_DataExporter':
[Progress: 81 / 1473]
Module 'Magento_Deploy':
[Progress: 82 / 1473]
Module 'Magento_Developer':
[Progress: 83 / 1473]
Module 'Magento_Dhl':
[Progress: 84 / 1473]
Module 'Magento_AdvancedSearch':
[Progress: 85 / 1473]
Module 'Magento_DirectoryGraphQl':
[Progress: 86 / 1473]
Module 'Magento_DownloadableGraphQl':
[Progress: 87 / 1473]
Module 'Magento_CustomerDownloadableGraphQl':
[Progress: 88 / 1473]
Module 'Magento_ImportExport':
[Progress: 89 / 1473]
Module 'Magento_Bundle':
[Progress: 90 / 1473]
Module 'Magento_CatalogCustomerGraphQl':
[Progress: 91 / 1473]
Module 'Magento_Elasticsearch':
[Progress: 92 / 1473]
Module 'Magento_Elasticsearch8':
[Progress: 93 / 1473]
Module 'Magento_Email':
[Progress: 94 / 1473]
Module 'Magento_EncryptionKey':
[Progress: 95 / 1473]
Module 'Magento_Fedex':
[Progress: 96 / 1473]
Module 'Magento_GiftMessage':
[Progress: 97 / 1473]
Module 'Magento_GiftMessageGraphQl':
[Progress: 98 / 1473]
Module 'Magento_GoogleAdwords':
[Progress: 99 / 1473]
Module 'Magento_GoogleAnalytics':
[Progress: 100 / 1473]
Module 'Magento_GoogleGtag':
[Progress: 101 / 1473]
Module 'Magento_Ui':
[Progress: 102 / 1473]
Module 'Magento_BundleGraphQl':
[Progress: 103 / 1473]
Module 'Magento_PageCache':
[Progress: 104 / 1473]
Module 'Magento_GraphQlNewRelic':
[Progress: 105 / 1473]
Module 'Magento_CatalogCmsGraphQl':
[Progress: 106 / 1473]
Module 'Magento_AdminGraphQlServer':
[Progress: 107 / 1473]
Module 'Magento_GroupedProduct':
[Progress: 108 / 1473]
Module 'Magento_GroupedImportExport':
[Progress: 109 / 1473]
Module 'Magento_GroupedCatalogInventory':
[Progress: 110 / 1473]
Module 'Magento_GroupedProductGraphQl':
[Progress: 111 / 1473]
Module 'Magento_DownloadableImportExport':
[Progress: 112 / 1473]
Module 'Magento_Captcha':
[Progress: 113 / 1473]
Module 'Magento_InstantPurchase':
[Progress: 114 / 1473]
Module 'Magento_CatalogAnalytics':
[Progress: 115 / 1473]
Module 'Magento_IntegrationGraphQl':
[Progress: 116 / 1473]
Module 'Magento_Inventory':
[Progress: 117 / 1473]
Module 'Magento_InventoryAdminUi':
[Progress: 118 / 1473]
Module 'Magento_InventoryAdvancedCheckout':
[Progress: 119 / 1473]
Module 'Magento_InventoryApi':
[Progress: 120 / 1473]
Module 'Magento_InventoryBundleImportExport':
[Progress: 121 / 1473]
Module 'Magento_InventoryBundleProduct':
[Progress: 122 / 1473]
Module 'Magento_InventoryBundleProductAdminUi':
[Progress: 123 / 1473]
Module 'Magento_InventoryBundleProductIndexer':
[Progress: 124 / 1473]
Module 'Magento_InventoryCatalog':
[Progress: 125 / 1473]
Module 'Magento_InventorySales':
[Progress: 126 / 1473]
Module 'Magento_InventoryCatalogAdminUi':
[Progress: 127 / 1473]
Module 'Magento_InventoryCatalogApi':
[Progress: 128 / 1473]
Module 'Magento_InventoryCatalogFrontendUi':
[Progress: 129 / 1473]
Module 'Magento_InventoryCatalogRule':
[Progress: 130 / 1473]
Module 'Magento_InventoryCatalogSearch':
[Progress: 131 / 1473]
Module 'Magento_InventoryCatalogSearchBundleProduct':
[Progress: 132 / 1473]
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
[Progress: 133 / 1473]
Module 'Magento_ConfigurableProduct':
[Progress: 134 / 1473]
Module 'Magento_ConfigurableProductGraphQl':
[Progress: 135 / 1473]
Module 'Magento_InventoryConfigurableProduct':
[Progress: 136 / 1473]
Module 'Magento_InventoryConfigurableProductIndexer':
[Progress: 137 / 1473]
Module 'Magento_InventoryConfiguration':
[Progress: 138 / 1473]
Module 'Magento_InventoryConfigurationApi':
[Progress: 139 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelection':
[Progress: 140 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
[Progress: 141 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
[Progress: 142 / 1473]
Module 'Magento_InventoryElasticsearch':
[Progress: 143 / 1473]
Module 'Magento_InventoryExportStockApi':
[Progress: 144 / 1473]
Module 'Magento_InventoryIndexer':
[Progress: 145 / 1473]
Module 'Magento_InventorySalesApi':
[Progress: 146 / 1473]
Module 'Magento_InventoryGroupedProduct':
[Progress: 147 / 1473]
Module 'Magento_InventoryGroupedProductAdminUi':
[Progress: 148 / 1473]
Module 'Magento_InventoryGroupedProductIndexer':
[Progress: 149 / 1473]
Module 'Magento_InventoryImportExport':
[Progress: 150 / 1473]
Module 'Magento_InventoryInStorePickupApi':
[Progress: 151 / 1473]
Module 'Magento_InventoryInStorePickupAdminUi':
[Progress: 152 / 1473]
Module 'Magento_InventorySourceSelectionApi':
[Progress: 153 / 1473]
Module 'Magento_InventoryInStorePickup':
[Progress: 154 / 1473]
Module 'Magento_InventoryInStorePickupGraphQl':
[Progress: 155 / 1473]
Module 'Magento_Shipping':
[Progress: 156 / 1473]
Module 'Magento_InventoryInStorePickupShippingApi':
[Progress: 157 / 1473]
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
[Progress: 158 / 1473]
Module 'Magento_InventoryInStorePickupSales':
[Progress: 159 / 1473]
Module 'Magento_InventoryInStorePickupSalesApi':
[Progress: 160 / 1473]
Module 'Magento_InventoryInStorePickupQuote':
[Progress: 161 / 1473]
Module 'Magento_InventoryInStorePickupShipping':
[Progress: 162 / 1473]
Module 'Magento_InventoryInStorePickupShippingAdminUi':
[Progress: 163 / 1473]
Module 'Magento_Multishipping':
[Progress: 164 / 1473]
Module 'Magento_Webapi':
[Progress: 165 / 1473]
Module 'Magento_InventoryCache':
[Progress: 166 / 1473]
Module 'Magento_InventoryLowQuantityNotification':
[Progress: 167 / 1473]
Module 'Magento_Reports':
[Progress: 168 / 1473]
Module 'Magento_InventoryLowQuantityNotificationApi':
[Progress: 169 / 1473]
Module 'Magento_InventoryMultiDimensionalIndexerApi':
[Progress: 170 / 1473]
Module 'Magento_InventoryProductAlert':
[Progress: 171 / 1473]
Module 'Magento_InventoryQuoteGraphQl':
[Progress: 172 / 1473]
Module 'Magento_InventoryRequisitionList':
[Progress: 173 / 1473]
Module 'Magento_InventoryReservations':
[Progress: 174 / 1473]
Module 'Magento_InventoryReservationCli':
[Progress: 175 / 1473]
Module 'Magento_InventoryReservationsApi':
[Progress: 176 / 1473]
Module 'Magento_InventoryExportStock':
[Progress: 177 / 1473]
Module 'Magento_InventorySalesAdminUi':
[Progress: 178 / 1473]
Module 'Magento_CatalogInventoryGraphQl':
[Progress: 179 / 1473]
Module 'Magento_InventorySalesAsyncOrder':
[Progress: 180 / 1473]
Module 'Magento_InventorySalesFrontendUi':
[Progress: 181 / 1473]
Module 'Magento_InventorySetupFixtureGenerator':
[Progress: 182 / 1473]
Module 'Magento_InventoryShipping':
[Progress: 183 / 1473]
Module 'Magento_InventoryShippingAdminUi':
[Progress: 184 / 1473]
Module 'Magento_InventorySourceDeductionApi':
[Progress: 185 / 1473]
Module 'Magento_InventorySourceSelection':
[Progress: 186 / 1473]
Module 'Magento_InventoryInStorePickupFrontend':
[Progress: 187 / 1473]
Module 'Magento_InventorySwatchesFrontendUi':
[Progress: 188 / 1473]
Module 'Magento_InventoryVisualMerchandiser':
[Progress: 189 / 1473]
Module 'Magento_InventoryWishlist':
[Progress: 190 / 1473]
Module 'Magento_JwtFrameworkAdapter':
[Progress: 191 / 1473]
Module 'Magento_JwtUserToken':
[Progress: 192 / 1473]
Module 'Magento_LayeredNavigation':
[Progress: 193 / 1473]
Module 'Magento_LoginAsCustomer':
[Progress: 194 / 1473]
Module 'Magento_LoginAsCustomerAdminUi':
[Progress: 195 / 1473]
Module 'Magento_LoginAsCustomerApi':
[Progress: 196 / 1473]
Module 'Magento_LoginAsCustomerAssistance':
[Progress: 197 / 1473]
Module 'Magento_LoginAsCustomerFrontendUi':
[Progress: 198 / 1473]
Module 'Magento_LoginAsCustomerGraphQl':
[Progress: 199 / 1473]
Module 'Magento_LoginAsCustomerLog':
[Progress: 200 / 1473]
Module 'Magento_LoginAsCustomerPageCache':
[Progress: 201 / 1473]
Module 'Magento_LoginAsCustomerQuote':
[Progress: 202 / 1473]
Module 'Magento_LoginAsCustomerSales':
[Progress: 203 / 1473]
Module 'Magento_Marketplace':
[Progress: 204 / 1473]
Module 'Magento_MediaContent':
[Progress: 205 / 1473]
Module 'Magento_MediaContentApi':
[Progress: 206 / 1473]
Module 'Magento_MediaContentCatalog':
[Progress: 207 / 1473]
Module 'Magento_MediaContentCms':
[Progress: 208 / 1473]
Module 'Magento_MediaContentSynchronization':
[Progress: 209 / 1473]
Module 'Magento_MediaContentSynchronizationApi':
[Progress: 210 / 1473]
Module 'Magento_MediaContentSynchronizationCatalog':
[Progress: 211 / 1473]
Module 'Magento_MediaContentSynchronizationCms':
[Progress: 212 / 1473]
Module 'Magento_AdobeStockAsset':
[Progress: 213 / 1473]
Module 'Magento_MediaGalleryApi':
[Progress: 214 / 1473]
Module 'Magento_MediaGalleryCatalog':
[Progress: 215 / 1473]
Module 'Magento_MediaGalleryCatalogIntegration':
[Progress: 216 / 1473]
Module 'Magento_MediaGalleryCatalogUi':
[Progress: 217 / 1473]
Module 'Magento_MediaGalleryCmsUi':
[Progress: 218 / 1473]
Module 'Magento_MediaGalleryIntegration':
[Progress: 219 / 1473]
Module 'Magento_MediaGalleryMetadata':
[Progress: 220 / 1473]
Module 'Magento_MediaGalleryMetadataApi':
[Progress: 221 / 1473]
Module 'Magento_MediaGalleryRenditions':
[Progress: 222 / 1473]
Module 'Magento_MediaGalleryRenditionsApi':
[Progress: 223 / 1473]
Module 'Magento_MediaGallerySynchronization':
[Progress: 224 / 1473]
Module 'Magento_MediaGallerySynchronizationApi':
[Progress: 225 / 1473]
Module 'Magento_MediaGallerySynchronizationMetadata':
[Progress: 226 / 1473]
Module 'Magento_AdobeStockImageAdminUi':
[Progress: 227 / 1473]
Module 'Magento_MediaGalleryUiApi':
[Progress: 228 / 1473]
Module 'Magento_CatalogWidget':
[Progress: 229 / 1473]
Module 'Magento_MessageQueue':
[Progress: 230 / 1473]
Module 'Magento_ConfigurableImportExport':
[Progress: 231 / 1473]
Module 'Magento_MsrpConfigurableProduct':
[Progress: 232 / 1473]
Module 'Magento_MsrpGroupedProduct':
[Progress: 233 / 1473]
Module 'Magento_InventoryInStorePickupMultishipping':
[Progress: 234 / 1473]
Module 'Magento_MysqlMq':
[Progress: 235 / 1473]
Module 'Magento_NewRelicReporting':
[Progress: 236 / 1473]
Module 'Magento_CustomerGraphQl':
[Progress: 237 / 1473]
Module 'Magento_NewsletterGraphQl':
[Progress: 238 / 1473]
Module 'Magento_OfflinePayments':
[Progress: 239 / 1473]
Module 'Magento_SalesRule':
[Progress: 240 / 1473]
Module 'Magento_OpenSearch':
[Progress: 241 / 1473]
Module 'Magento_OrderCancellation':
[Progress: 242 / 1473]
Module 'Magento_OrderCancellationGraphQl':
[Progress: 243 / 1473]
Module 'Magento_OrderCancellationUi':
[Progress: 244 / 1473]
Module 'Magento_Sitemap':
[Progress: 245 / 1473]
Module 'Magento_PageBuilder':
[Progress: 246 / 1473]
Module 'Magento_PageBuilderAnalytics':
[Progress: 247 / 1473]
Module 'Magento_PageBuilderImageAttribute':
[Progress: 248 / 1473]
Module 'Magento_GraphQlCache':
[Progress: 249 / 1473]
Module 'Magento_CardinalCommerce':
[Progress: 250 / 1473]
Module 'Magento_PaymentGraphQl':
[Progress: 251 / 1473]
Module 'Magento_ServiceProxy':
[Progress: 252 / 1473]
Module 'Magento_Vault':
[Progress: 253 / 1473]
Module 'Magento_PaymentServicesDashboard':
[Progress: 254 / 1473]
Module 'Magento_PaymentServicesPaypalGraphQl':
[Progress: 255 / 1473]
Module 'Magento_QueryXml':
[Progress: 256 / 1473]
Module 'Magento_ServicesConnector':
[Progress: 257 / 1473]
Module 'Magento_Paypal':
[Progress: 258 / 1473]
Module 'Magento_PaypalGraphQl':
[Progress: 259 / 1473]
Module 'Magento_Persistent':
[Progress: 260 / 1473]
Module 'Magento_ProductAlert':
[Progress: 261 / 1473]
Module 'Magento_ProductVideo':
[Progress: 262 / 1473]
Module 'Magento_ServicesId':
[Progress: 263 / 1473]
Module 'Magento_CheckoutAgreements':
[Progress: 264 / 1473]
Module 'Magento_QuoteAnalytics':
[Progress: 265 / 1473]
Module 'Magento_QuoteBundleOptions':
[Progress: 266 / 1473]
Module 'Magento_QuoteConfigurableOptions':
[Progress: 267 / 1473]
Module 'Magento_QuoteDownloadableLinks':
[Progress: 268 / 1473]
Module 'Magento_InventoryConfigurableProductAdminUi':
[Progress: 269 / 1473]
Module 'Magento_ReCaptchaAdminUi':
[Progress: 270 / 1473]
Module 'Magento_ReCaptchaCheckout':
[Progress: 271 / 1473]
Module 'Magento_ReCaptchaCheckoutSalesRule':
[Progress: 272 / 1473]
Module 'Magento_ReCaptchaContact':
[Progress: 273 / 1473]
Module 'Magento_ReCaptchaCustomer':
[Progress: 274 / 1473]
Module 'Magento_ReCaptchaFrontendUi':
[Progress: 275 / 1473]
Module 'Magento_ReCaptchaMigration':
[Progress: 276 / 1473]
Module 'Magento_ReCaptchaNewsletter':
[Progress: 277 / 1473]
Module 'Magento_ReCaptchaPaypal':
[Progress: 278 / 1473]
Module 'Magento_ReCaptchaResendConfirmationEmail':
[Progress: 279 / 1473]
Module 'Magento_ReCaptchaReview':
[Progress: 280 / 1473]
Module 'Magento_ReCaptchaSendFriend':
[Progress: 281 / 1473]
Module 'Magento_ReCaptchaStorePickup':
[Progress: 282 / 1473]
Module 'Magento_ReCaptchaUi':
[Progress: 283 / 1473]
Module 'Magento_ReCaptchaUser':
[Progress: 284 / 1473]
Module 'Magento_ReCaptchaValidation':
[Progress: 285 / 1473]
Module 'Magento_ReCaptchaValidationApi':
[Progress: 286 / 1473]
Module 'Magento_ReCaptchaVersion2Checkbox':
[Progress: 287 / 1473]
Module 'Magento_ReCaptchaVersion2Invisible':
[Progress: 288 / 1473]
Module 'Magento_ReCaptchaVersion3Invisible':
[Progress: 289 / 1473]
Module 'Magento_ReCaptchaWebapiApi':
[Progress: 290 / 1473]
Module 'Magento_ReCaptchaWebapiGraphQl':
[Progress: 291 / 1473]
Module 'Magento_ReCaptchaWebapiRest':
[Progress: 292 / 1473]
Module 'Magento_ReCaptchaWebapiUi':
[Progress: 293 / 1473]
Module 'Magento_ReCaptchaWishlist':
[Progress: 294 / 1473]
Module 'Magento_RelatedProductGraphQl':
[Progress: 295 / 1473]
Module 'Magento_ReleaseNotification':
[Progress: 296 / 1473]
Module 'Magento_RemoteStorage':
[Progress: 297 / 1473]
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
[Progress: 298 / 1473]
Module 'Magento_RequireJs':
[Progress: 299 / 1473]
Module 'Magento_Review':
[Progress: 300 / 1473]
Module 'Magento_ReviewAnalytics':
[Progress: 301 / 1473]
Module 'Magento_ReviewGraphQl':
[Progress: 302 / 1473]
Module 'Magento_AwsS3':
[Progress: 303 / 1473]
Module 'Magento_Rss':
[Progress: 304 / 1473]
Module 'Magento_PageBuilderAdminAnalytics':
[Progress: 305 / 1473]
Module 'Magento_ServicesIdGraphQlServer':
[Progress: 306 / 1473]
Module 'Magento_CatalogRuleConfigurable':
[Progress: 307 / 1473]
Module 'Magento_SalesAnalytics':
[Progress: 308 / 1473]
Module 'Magento_ServicesIdLayout':
[Progress: 309 / 1473]
Module 'Magento_SalesGraphQl':
[Progress: 310 / 1473]
Module 'Magento_SalesInventory':
[Progress: 311 / 1473]
Module 'Magento_OfflineShipping':
[Progress: 312 / 1473]
Module 'Magento_SalesRuleGraphQl':
[Progress: 313 / 1473]
Module 'Magento_ConfigurableProductSales':
[Progress: 314 / 1473]
Module 'Magento_UrlRewrite':
[Progress: 315 / 1473]
Module 'Magento_UrlRewriteGraphQl':
[Progress: 316 / 1473]
Module 'Magento_CustomerAnalytics':
[Progress: 317 / 1473]
Module 'Magento_Securitytxt':
[Progress: 318 / 1473]
Module 'Magento_SendFriend':
[Progress: 319 / 1473]
Module 'Magento_SendFriendGraphQl':
[Progress: 320 / 1473]
Module 'Magento_PaymentServicesBase':
[Progress: 321 / 1473]
Module 'Magento_SaaSCommon':
[Progress: 322 / 1473]
Module 'Magento_SalesDataExporter':
[Progress: 323 / 1473]
Module 'Magento_StoreDataExporter':
[Progress: 324 / 1473]
Module 'Magento_PaymentServicesPaypal':
[Progress: 325 / 1473]
Module 'Magento_InventoryInStorePickupSalesAdminUi':
[Progress: 326 / 1473]
Module 'Magento_AwsS3PageBuilder':
[Progress: 327 / 1473]
Module 'Magento_AsyncConfig':
[Progress: 328 / 1473]
Module 'Magento_PaymentServicesSaaSExport':
[Progress: 329 / 1473]
Module 'Magento_CompareListGraphQl':
[Progress: 330 / 1473]
Module 'Magento_Swagger':
[Progress: 331 / 1473]
Module 'Magento_SwaggerWebapi':
[Progress: 332 / 1473]
Module 'Magento_SwaggerWebapiAsync':
[Progress: 333 / 1473]
Module 'Magento_Swatches':
[Progress: 334 / 1473]
Module 'Magento_SwatchesGraphQl':
[Progress: 335 / 1473]
Module 'Magento_SwatchesLayeredNavigation':
[Progress: 336 / 1473]
Module 'Magento_Tax':
[Progress: 337 / 1473]
Module 'Magento_TaxGraphQl':
[Progress: 338 / 1473]
Module 'Magento_TaxImportExport':
[Progress: 339 / 1473]
Module 'Magento_InventoryGraphQl':
[Progress: 340 / 1473]
Module 'Magento_ThemeGraphQl':
[Progress: 341 / 1473]
Module 'Magento_Translation':
[Progress: 342 / 1473]
Module 'Magento_AdminAdobeImsTwoFactorAuth':
[Progress: 343 / 1473]
Module 'Magento_GoogleOptimizer':
[Progress: 344 / 1473]
Module 'Magento_Ups':
[Progress: 345 / 1473]
Module 'Magento_SampleData':
[Progress: 346 / 1473]
Module 'Magento_CatalogUrlRewriteGraphQl':
[Progress: 347 / 1473]
Module 'Magento_AsynchronousOperations':
[Progress: 348 / 1473]
Module 'Magento_Usps':
[Progress: 349 / 1473]
Module 'Magento_InventoryConfigurableProductFrontendUi':
[Progress: 350 / 1473]
Module 'Magento_PaypalCaptcha':
[Progress: 351 / 1473]
Module 'Magento_VaultGraphQl':
[Progress: 352 / 1473]
Module 'Magento_Version':
[Progress: 353 / 1473]
Module 'Magento_InventoryInStorePickupWebapiExtension':
[Progress: 354 / 1473]
Module 'Magento_WebapiAsync':
[Progress: 355 / 1473]
Module 'Magento_WebapiSecurity':
[Progress: 356 / 1473]
Module 'Magento_Weee':
[Progress: 357 / 1473]
Module 'Magento_WeeeGraphQl':
[Progress: 358 / 1473]
Module 'Magento_CurrencySymbol':
[Progress: 359 / 1473]
Module 'Magento_Wishlist':
[Progress: 360 / 1473]
Module 'Magento_WishlistAnalytics':
[Progress: 361 / 1473]
Module 'Magento_WishlistGraphQl':
[Progress: 362 / 1473]
Module 'PayPal_Braintree':
[Progress: 363 / 1473]
Module 'PayPal_BraintreeCustomerBalance':
[Progress: 364 / 1473]
Module 'PayPal_BraintreeGiftCard':
[Progress: 365 / 1473]
Module 'PayPal_BraintreeGiftCardAccount':
[Progress: 366 / 1473]
Module 'PayPal_BraintreeGiftWrapping':
[Progress: 367 / 1473]
Module 'PayPal_BraintreeGraphQl':
[Progress: 368 / 1473]
Module 'PayPal_BraintreeReward':
[Progress: 369 / 1473]
Schema post-updates:
Module 'Magento_Csp':
[Progress: 370 / 1473]
Module 'Magento_Store':
[Progress: 371 / 1473]
Module 'Magento_AdminAnalytics':
[Progress: 372 / 1473]
Module 'Magento_Directory':
[Progress: 373 / 1473]
Module 'Magento_AdminNotification':
[Progress: 374 / 1473]
Module 'Magento_AdobeIms':
[Progress: 375 / 1473]
Module 'Magento_AdobeImsApi':
[Progress: 376 / 1473]
Module 'Magento_AdobeStockAdminUi':
[Progress: 377 / 1473]
Module 'Magento_MediaGallery':
[Progress: 378 / 1473]
Module 'Magento_AdobeStockAssetApi':
[Progress: 379 / 1473]
Module 'Magento_AdobeStockClient':
[Progress: 380 / 1473]
Module 'Magento_AdobeStockClientApi':
[Progress: 381 / 1473]
Module 'Magento_AdobeStockImage':
[Progress: 382 / 1473]
Module 'Magento_Theme':
[Progress: 383 / 1473]
Module 'Magento_AdobeStockImageApi':
[Progress: 384 / 1473]
Module 'Magento_AdvancedPricingImportExport':
[Progress: 385 / 1473]
Module 'Magento_Backend':
[Progress: 386 / 1473]
Module 'Magento_Amqp':
Running schema recurring...
[Progress: 387 / 1473]
Module 'Magento_Security':
[Progress: 388 / 1473]
Module 'Magento_ApplicationPerformanceMonitor':
[Progress: 389 / 1473]
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
[Progress: 390 / 1473]
Module 'Magento_Config':
[Progress: 391 / 1473]
Module 'Magento_User':
[Progress: 392 / 1473]
Module 'Magento_Authorization':
[Progress: 393 / 1473]
Module 'Magento_Eav':
[Progress: 394 / 1473]
Module 'Magento_Customer':
[Progress: 395 / 1473]
Module 'Magento_AdminAdobeIms':
[Progress: 396 / 1473]
Module 'Magento_Backup':
[Progress: 397 / 1473]
Module 'Magento_Indexer':
Running schema recurring...
[Progress: 398 / 1473]
Module 'Magento_GraphQl':
[Progress: 399 / 1473]
Module 'Magento_BundleImportExport':
[Progress: 400 / 1473]
Module 'Magento_CacheInvalidate':
[Progress: 401 / 1473]
Module 'Magento_Variable':
[Progress: 402 / 1473]
Module 'Magento_Cms':
[Progress: 403 / 1473]
Module 'Magento_Rule':
[Progress: 404 / 1473]
Module 'Magento_Integration':
Running schema recurring...
[Progress: 405 / 1473]
Module 'Magento_GraphQlResolverCache':
[Progress: 406 / 1473]
Module 'Magento_EavGraphQl':
[Progress: 407 / 1473]
Module 'Magento_Search':
[Progress: 408 / 1473]
Module 'Magento_CatalogImportExport':
[Progress: 409 / 1473]
Module 'Magento_Catalog':
Running schema recurring...
[Progress: 410 / 1473]
Module 'Magento_CatalogInventory':
Running schema recurring...
[Progress: 411 / 1473]
Module 'Magento_CatalogPageBuilderAnalytics':
[Progress: 412 / 1473]
Module 'Magento_CatalogRule':
[Progress: 413 / 1473]
Module 'Magento_Msrp':
[Progress: 414 / 1473]
Module 'Magento_CatalogRuleGraphQl':
[Progress: 415 / 1473]
Module 'Magento_CatalogSearch':
[Progress: 416 / 1473]
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
[Progress: 417 / 1473]
Module 'Magento_StoreGraphQl':
[Progress: 418 / 1473]
Module 'Magento_MediaStorage':
[Progress: 419 / 1473]
Module 'Magento_Quote':
[Progress: 420 / 1473]
Module 'Magento_SalesSequence':
Running schema recurring...
[Progress: 421 / 1473]
Module 'Magento_CheckoutAgreementsGraphQl':
[Progress: 422 / 1473]
Module 'Magento_MediaGalleryUi':
[Progress: 423 / 1473]
Module 'Magento_CmsGraphQl':
[Progress: 424 / 1473]
Module 'Magento_CmsPageBuilderAnalytics':
[Progress: 425 / 1473]
Module 'Magento_CmsUrlRewrite':
[Progress: 426 / 1473]
Module 'Magento_CmsUrlRewriteGraphQl':
[Progress: 427 / 1473]
Module 'Magento_CatalogGraphQl':
[Progress: 428 / 1473]
Module 'Magento_TwoFactorAuth':
[Progress: 429 / 1473]
Module 'Magento_Payment':
[Progress: 430 / 1473]
Module 'Magento_Sales':
[Progress: 431 / 1473]
Module 'Magento_QuoteGraphQl':
[Progress: 432 / 1473]
Module 'Magento_Checkout':
[Progress: 433 / 1473]
Module 'Magento_Contact':
[Progress: 434 / 1473]
Module 'Magento_ContactGraphQl':
[Progress: 435 / 1473]
Module 'Magento_Cookie':
[Progress: 436 / 1473]
Module 'Magento_Cron':
Running schema recurring...
[Progress: 437 / 1473]
Module 'Magento_GraphQlServer':
[Progress: 438 / 1473]
Module 'Magento_Widget':
[Progress: 439 / 1473]
Module 'Magento_Robots':
[Progress: 440 / 1473]
Module 'Magento_Analytics':
[Progress: 441 / 1473]
Module 'Magento_Downloadable':
[Progress: 442 / 1473]
Module 'Magento_Newsletter':
[Progress: 443 / 1473]
Module 'Magento_CustomerImportExport':
[Progress: 444 / 1473]
Module 'Magento_DataExporter':
Running schema recurring...
[Progress: 445 / 1473]
Module 'Magento_Deploy':
[Progress: 446 / 1473]
Module 'Magento_Developer':
[Progress: 447 / 1473]
Module 'Magento_Dhl':
[Progress: 448 / 1473]
Module 'Magento_AdvancedSearch':
[Progress: 449 / 1473]
Module 'Magento_DirectoryGraphQl':
[Progress: 450 / 1473]
Module 'Magento_DownloadableGraphQl':
[Progress: 451 / 1473]
Module 'Magento_CustomerDownloadableGraphQl':
[Progress: 452 / 1473]
Module 'Magento_ImportExport':
[Progress: 453 / 1473]
Module 'Magento_Bundle':
Running schema recurring...
[Progress: 454 / 1473]
Module 'Magento_CatalogCustomerGraphQl':
[Progress: 455 / 1473]
Module 'Magento_Elasticsearch':
[Progress: 456 / 1473]
Module 'Magento_Elasticsearch8':
[Progress: 457 / 1473]
Module 'Magento_Email':
[Progress: 458 / 1473]
Module 'Magento_EncryptionKey':
[Progress: 459 / 1473]
Module 'Magento_Fedex':
[Progress: 460 / 1473]
Module 'Magento_GiftMessage':
[Progress: 461 / 1473]
Module 'Magento_GiftMessageGraphQl':
[Progress: 462 / 1473]
Module 'Magento_GoogleAdwords':
[Progress: 463 / 1473]
Module 'Magento_GoogleAnalytics':
[Progress: 464 / 1473]
Module 'Magento_GoogleGtag':
[Progress: 465 / 1473]
Module 'Magento_Ui':
[Progress: 466 / 1473]
Module 'Magento_BundleGraphQl':
[Progress: 467 / 1473]
Module 'Magento_PageCache':
[Progress: 468 / 1473]
Module 'Magento_GraphQlNewRelic':
[Progress: 469 / 1473]
Module 'Magento_CatalogCmsGraphQl':
[Progress: 470 / 1473]
Module 'Magento_AdminGraphQlServer':
[Progress: 471 / 1473]
Module 'Magento_GroupedProduct':
[Progress: 472 / 1473]
Module 'Magento_GroupedImportExport':
[Progress: 473 / 1473]
Module 'Magento_GroupedCatalogInventory':
[Progress: 474 / 1473]
Module 'Magento_GroupedProductGraphQl':
[Progress: 475 / 1473]
Module 'Magento_DownloadableImportExport':
[Progress: 476 / 1473]
Module 'Magento_Captcha':
[Progress: 477 / 1473]
Module 'Magento_InstantPurchase':
[Progress: 478 / 1473]
Module 'Magento_CatalogAnalytics':
[Progress: 479 / 1473]
Module 'Magento_IntegrationGraphQl':
[Progress: 480 / 1473]
Module 'Magento_Inventory':
[Progress: 481 / 1473]
Module 'Magento_InventoryAdminUi':
[Progress: 482 / 1473]
Module 'Magento_InventoryAdvancedCheckout':
[Progress: 483 / 1473]
Module 'Magento_InventoryApi':
[Progress: 484 / 1473]
Module 'Magento_InventoryBundleImportExport':
[Progress: 485 / 1473]
Module 'Magento_InventoryBundleProduct':
[Progress: 486 / 1473]
Module 'Magento_InventoryBundleProductAdminUi':
[Progress: 487 / 1473]
Module 'Magento_InventoryBundleProductIndexer':
[Progress: 488 / 1473]
Module 'Magento_InventoryCatalog':
[Progress: 489 / 1473]
Module 'Magento_InventorySales':
[Progress: 490 / 1473]
Module 'Magento_InventoryCatalogAdminUi':
[Progress: 491 / 1473]
Module 'Magento_InventoryCatalogApi':
[Progress: 492 / 1473]
Module 'Magento_InventoryCatalogFrontendUi':
[Progress: 493 / 1473]
Module 'Magento_InventoryCatalogRule':
[Progress: 494 / 1473]
Module 'Magento_InventoryCatalogSearch':
[Progress: 495 / 1473]
Module 'Magento_InventoryCatalogSearchBundleProduct':
[Progress: 496 / 1473]
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
[Progress: 497 / 1473]
Module 'Magento_ConfigurableProduct':
Running schema recurring...
[Progress: 498 / 1473]
Module 'Magento_ConfigurableProductGraphQl':
[Progress: 499 / 1473]
Module 'Magento_InventoryConfigurableProduct':
[Progress: 500 / 1473]
Module 'Magento_InventoryConfigurableProductIndexer':
[Progress: 501 / 1473]
Module 'Magento_InventoryConfiguration':
[Progress: 502 / 1473]
Module 'Magento_InventoryConfigurationApi':
[Progress: 503 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelection':
[Progress: 504 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
[Progress: 505 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
[Progress: 506 / 1473]
Module 'Magento_InventoryElasticsearch':
[Progress: 507 / 1473]
Module 'Magento_InventoryExportStockApi':
[Progress: 508 / 1473]
Module 'Magento_InventoryIndexer':
[Progress: 509 / 1473]
Module 'Magento_InventorySalesApi':
[Progress: 510 / 1473]
Module 'Magento_InventoryGroupedProduct':
[Progress: 511 / 1473]
Module 'Magento_InventoryGroupedProductAdminUi':
[Progress: 512 / 1473]
Module 'Magento_InventoryGroupedProductIndexer':
[Progress: 513 / 1473]
Module 'Magento_InventoryImportExport':
[Progress: 514 / 1473]
Module 'Magento_InventoryInStorePickupApi':
[Progress: 515 / 1473]
Module 'Magento_InventoryInStorePickupAdminUi':
[Progress: 516 / 1473]
Module 'Magento_InventorySourceSelectionApi':
[Progress: 517 / 1473]
Module 'Magento_InventoryInStorePickup':
[Progress: 518 / 1473]
Module 'Magento_InventoryInStorePickupGraphQl':
[Progress: 519 / 1473]
Module 'Magento_Shipping':
[Progress: 520 / 1473]
Module 'Magento_InventoryInStorePickupShippingApi':
[Progress: 521 / 1473]
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
[Progress: 522 / 1473]
Module 'Magento_InventoryInStorePickupSales':
[Progress: 523 / 1473]
Module 'Magento_InventoryInStorePickupSalesApi':
[Progress: 524 / 1473]
Module 'Magento_InventoryInStorePickupQuote':
[Progress: 525 / 1473]
Module 'Magento_InventoryInStorePickupShipping':
[Progress: 526 / 1473]
Module 'Magento_InventoryInStorePickupShippingAdminUi':
[Progress: 527 / 1473]
Module 'Magento_Multishipping':
[Progress: 528 / 1473]
Module 'Magento_Webapi':
[Progress: 529 / 1473]
Module 'Magento_InventoryCache':
[Progress: 530 / 1473]
Module 'Magento_InventoryLowQuantityNotification':
[Progress: 531 / 1473]
Module 'Magento_Reports':
Running schema recurring...
[Progress: 532 / 1473]
Module 'Magento_InventoryLowQuantityNotificationApi':
[Progress: 533 / 1473]
Module 'Magento_InventoryMultiDimensionalIndexerApi':
[Progress: 534 / 1473]
Module 'Magento_InventoryProductAlert':
[Progress: 535 / 1473]
Module 'Magento_InventoryQuoteGraphQl':
[Progress: 536 / 1473]
Module 'Magento_InventoryRequisitionList':
[Progress: 537 / 1473]
Module 'Magento_InventoryReservations':
[Progress: 538 / 1473]
Module 'Magento_InventoryReservationCli':
[Progress: 539 / 1473]
Module 'Magento_InventoryReservationsApi':
[Progress: 540 / 1473]
Module 'Magento_InventoryExportStock':
[Progress: 541 / 1473]
Module 'Magento_InventorySalesAdminUi':
[Progress: 542 / 1473]
Module 'Magento_CatalogInventoryGraphQl':
[Progress: 543 / 1473]
Module 'Magento_InventorySalesAsyncOrder':
[Progress: 544 / 1473]
Module 'Magento_InventorySalesFrontendUi':
[Progress: 545 / 1473]
Module 'Magento_InventorySetupFixtureGenerator':
[Progress: 546 / 1473]
Module 'Magento_InventoryShipping':
[Progress: 547 / 1473]
Module 'Magento_InventoryShippingAdminUi':
[Progress: 548 / 1473]
Module 'Magento_InventorySourceDeductionApi':
[Progress: 549 / 1473]
Module 'Magento_InventorySourceSelection':
[Progress: 550 / 1473]
Module 'Magento_InventoryInStorePickupFrontend':
[Progress: 551 / 1473]
Module 'Magento_InventorySwatchesFrontendUi':
[Progress: 552 / 1473]
Module 'Magento_InventoryVisualMerchandiser':
[Progress: 553 / 1473]
Module 'Magento_InventoryWishlist':
[Progress: 554 / 1473]
Module 'Magento_JwtFrameworkAdapter':
[Progress: 555 / 1473]
Module 'Magento_JwtUserToken':
[Progress: 556 / 1473]
Module 'Magento_LayeredNavigation':
[Progress: 557 / 1473]
Module 'Magento_LoginAsCustomer':
[Progress: 558 / 1473]
Module 'Magento_LoginAsCustomerAdminUi':
[Progress: 559 / 1473]
Module 'Magento_LoginAsCustomerApi':
[Progress: 560 / 1473]
Module 'Magento_LoginAsCustomerAssistance':
[Progress: 561 / 1473]
Module 'Magento_LoginAsCustomerFrontendUi':
[Progress: 562 / 1473]
Module 'Magento_LoginAsCustomerGraphQl':
[Progress: 563 / 1473]
Module 'Magento_LoginAsCustomerLog':
[Progress: 564 / 1473]
Module 'Magento_LoginAsCustomerPageCache':
[Progress: 565 / 1473]
Module 'Magento_LoginAsCustomerQuote':
[Progress: 566 / 1473]
Module 'Magento_LoginAsCustomerSales':
[Progress: 567 / 1473]
Module 'Magento_Marketplace':
[Progress: 568 / 1473]
Module 'Magento_MediaContent':
[Progress: 569 / 1473]
Module 'Magento_MediaContentApi':
[Progress: 570 / 1473]
Module 'Magento_MediaContentCatalog':
[Progress: 571 / 1473]
Module 'Magento_MediaContentCms':
[Progress: 572 / 1473]
Module 'Magento_MediaContentSynchronization':
[Progress: 573 / 1473]
Module 'Magento_MediaContentSynchronizationApi':
[Progress: 574 / 1473]
Module 'Magento_MediaContentSynchronizationCatalog':
[Progress: 575 / 1473]
Module 'Magento_MediaContentSynchronizationCms':
[Progress: 576 / 1473]
Module 'Magento_AdobeStockAsset':
[Progress: 577 / 1473]
Module 'Magento_MediaGalleryApi':
[Progress: 578 / 1473]
Module 'Magento_MediaGalleryCatalog':
[Progress: 579 / 1473]
Module 'Magento_MediaGalleryCatalogIntegration':
[Progress: 580 / 1473]
Module 'Magento_MediaGalleryCatalogUi':
[Progress: 581 / 1473]
Module 'Magento_MediaGalleryCmsUi':
[Progress: 582 / 1473]
Module 'Magento_MediaGalleryIntegration':
[Progress: 583 / 1473]
Module 'Magento_MediaGalleryMetadata':
[Progress: 584 / 1473]
Module 'Magento_MediaGalleryMetadataApi':
[Progress: 585 / 1473]
Module 'Magento_MediaGalleryRenditions':
[Progress: 586 / 1473]
Module 'Magento_MediaGalleryRenditionsApi':
[Progress: 587 / 1473]
Module 'Magento_MediaGallerySynchronization':
[Progress: 588 / 1473]
Module 'Magento_MediaGallerySynchronizationApi':
[Progress: 589 / 1473]
Module 'Magento_MediaGallerySynchronizationMetadata':
[Progress: 590 / 1473]
Module 'Magento_AdobeStockImageAdminUi':
[Progress: 591 / 1473]
Module 'Magento_MediaGalleryUiApi':
[Progress: 592 / 1473]
Module 'Magento_CatalogWidget':
[Progress: 593 / 1473]
Module 'Magento_MessageQueue':
Running schema recurring...
[Progress: 594 / 1473]
Module 'Magento_ConfigurableImportExport':
[Progress: 595 / 1473]
Module 'Magento_MsrpConfigurableProduct':
[Progress: 596 / 1473]
Module 'Magento_MsrpGroupedProduct':
[Progress: 597 / 1473]
Module 'Magento_InventoryInStorePickupMultishipping':
[Progress: 598 / 1473]
Module 'Magento_MysqlMq':
Running schema recurring...
[Progress: 599 / 1473]
Module 'Magento_NewRelicReporting':
[Progress: 600 / 1473]
Module 'Magento_CustomerGraphQl':
[Progress: 601 / 1473]
Module 'Magento_NewsletterGraphQl':
[Progress: 602 / 1473]
Module 'Magento_OfflinePayments':
[Progress: 603 / 1473]
Module 'Magento_SalesRule':
[Progress: 604 / 1473]
Module 'Magento_OpenSearch':
[Progress: 605 / 1473]
Module 'Magento_OrderCancellation':
[Progress: 606 / 1473]
Module 'Magento_OrderCancellationGraphQl':
[Progress: 607 / 1473]
Module 'Magento_OrderCancellationUi':
[Progress: 608 / 1473]
Module 'Magento_Sitemap':
[Progress: 609 / 1473]
Module 'Magento_PageBuilder':
[Progress: 610 / 1473]
Module 'Magento_PageBuilderAnalytics':
[Progress: 611 / 1473]
Module 'Magento_PageBuilderImageAttribute':
[Progress: 612 / 1473]
Module 'Magento_GraphQlCache':
[Progress: 613 / 1473]
Module 'Magento_CardinalCommerce':
[Progress: 614 / 1473]
Module 'Magento_PaymentGraphQl':
[Progress: 615 / 1473]
Module 'Magento_ServiceProxy':
[Progress: 616 / 1473]
Module 'Magento_Vault':
[Progress: 617 / 1473]
Module 'Magento_PaymentServicesDashboard':
[Progress: 618 / 1473]
Module 'Magento_PaymentServicesPaypalGraphQl':
[Progress: 619 / 1473]
Module 'Magento_QueryXml':
[Progress: 620 / 1473]
Module 'Magento_ServicesConnector':
[Progress: 621 / 1473]
Module 'Magento_Paypal':
[Progress: 622 / 1473]
Module 'Magento_PaypalGraphQl':
[Progress: 623 / 1473]
Module 'Magento_Persistent':
[Progress: 624 / 1473]
Module 'Magento_ProductAlert':
Running schema recurring...
[Progress: 625 / 1473]
Module 'Magento_ProductVideo':
[Progress: 626 / 1473]
Module 'Magento_ServicesId':
[Progress: 627 / 1473]
Module 'Magento_CheckoutAgreements':
[Progress: 628 / 1473]
Module 'Magento_QuoteAnalytics':
[Progress: 629 / 1473]
Module 'Magento_QuoteBundleOptions':
[Progress: 630 / 1473]
Module 'Magento_QuoteConfigurableOptions':
[Progress: 631 / 1473]
Module 'Magento_QuoteDownloadableLinks':
[Progress: 632 / 1473]
Module 'Magento_InventoryConfigurableProductAdminUi':
[Progress: 633 / 1473]
Module 'Magento_ReCaptchaAdminUi':
[Progress: 634 / 1473]
Module 'Magento_ReCaptchaCheckout':
[Progress: 635 / 1473]
Module 'Magento_ReCaptchaCheckoutSalesRule':
[Progress: 636 / 1473]
Module 'Magento_ReCaptchaContact':
[Progress: 637 / 1473]
Module 'Magento_ReCaptchaCustomer':
[Progress: 638 / 1473]
Module 'Magento_ReCaptchaFrontendUi':
[Progress: 639 / 1473]
Module 'Magento_ReCaptchaMigration':
[Progress: 640 / 1473]
Module 'Magento_ReCaptchaNewsletter':
[Progress: 641 / 1473]
Module 'Magento_ReCaptchaPaypal':
[Progress: 642 / 1473]
Module 'Magento_ReCaptchaResendConfirmationEmail':
[Progress: 643 / 1473]
Module 'Magento_ReCaptchaReview':
[Progress: 644 / 1473]
Module 'Magento_ReCaptchaSendFriend':
[Progress: 645 / 1473]
Module 'Magento_ReCaptchaStorePickup':
[Progress: 646 / 1473]
Module 'Magento_ReCaptchaUi':
[Progress: 647 / 1473]
Module 'Magento_ReCaptchaUser':
[Progress: 648 / 1473]
Module 'Magento_ReCaptchaValidation':
[Progress: 649 / 1473]
Module 'Magento_ReCaptchaValidationApi':
[Progress: 650 / 1473]
Module 'Magento_ReCaptchaVersion2Checkbox':
[Progress: 651 / 1473]
Module 'Magento_ReCaptchaVersion2Invisible':
[Progress: 652 / 1473]
Module 'Magento_ReCaptchaVersion3Invisible':
[Progress: 653 / 1473]
Module 'Magento_ReCaptchaWebapiApi':
[Progress: 654 / 1473]
Module 'Magento_ReCaptchaWebapiGraphQl':
[Progress: 655 / 1473]
Module 'Magento_ReCaptchaWebapiRest':
[Progress: 656 / 1473]
Module 'Magento_ReCaptchaWebapiUi':
[Progress: 657 / 1473]
Module 'Magento_ReCaptchaWishlist':
[Progress: 658 / 1473]
Module 'Magento_RelatedProductGraphQl':
[Progress: 659 / 1473]
Module 'Magento_ReleaseNotification':
[Progress: 660 / 1473]
Module 'Magento_RemoteStorage':
[Progress: 661 / 1473]
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
[Progress: 662 / 1473]
Module 'Magento_RequireJs':
[Progress: 663 / 1473]
Module 'Magento_Review':
[Progress: 664 / 1473]
Module 'Magento_ReviewAnalytics':
[Progress: 665 / 1473]
Module 'Magento_ReviewGraphQl':
[Progress: 666 / 1473]
Module 'Magento_AwsS3':
[Progress: 667 / 1473]
Module 'Magento_Rss':
[Progress: 668 / 1473]
Module 'Magento_PageBuilderAdminAnalytics':
[Progress: 669 / 1473]
Module 'Magento_ServicesIdGraphQlServer':
[Progress: 670 / 1473]
Module 'Magento_CatalogRuleConfigurable':
[Progress: 671 / 1473]
Module 'Magento_SalesAnalytics':
[Progress: 672 / 1473]
Module 'Magento_ServicesIdLayout':
[Progress: 673 / 1473]
Module 'Magento_SalesGraphQl':
[Progress: 674 / 1473]
Module 'Magento_SalesInventory':
[Progress: 675 / 1473]
Module 'Magento_OfflineShipping':
[Progress: 676 / 1473]
Module 'Magento_SalesRuleGraphQl':
[Progress: 677 / 1473]
Module 'Magento_ConfigurableProductSales':
[Progress: 678 / 1473]
Module 'Magento_UrlRewrite':
[Progress: 679 / 1473]
Module 'Magento_UrlRewriteGraphQl':
[Progress: 680 / 1473]
Module 'Magento_CustomerAnalytics':
[Progress: 681 / 1473]
Module 'Magento_Securitytxt':
[Progress: 682 / 1473]
Module 'Magento_SendFriend':
[Progress: 683 / 1473]
Module 'Magento_SendFriendGraphQl':
[Progress: 684 / 1473]
Module 'Magento_PaymentServicesBase':
[Progress: 685 / 1473]
Module 'Magento_SaaSCommon':
[Progress: 686 / 1473]
Module 'Magento_SalesDataExporter':
[Progress: 687 / 1473]
Module 'Magento_StoreDataExporter':
[Progress: 688 / 1473]
Module 'Magento_PaymentServicesPaypal':
[Progress: 689 / 1473]
Module 'Magento_InventoryInStorePickupSalesAdminUi':
[Progress: 690 / 1473]
Module 'Magento_AwsS3PageBuilder':
[Progress: 691 / 1473]
Module 'Magento_AsyncConfig':
[Progress: 692 / 1473]
Module 'Magento_PaymentServicesSaaSExport':
[Progress: 693 / 1473]
Module 'Magento_CompareListGraphQl':
[Progress: 694 / 1473]
Module 'Magento_Swagger':
[Progress: 695 / 1473]
Module 'Magento_SwaggerWebapi':
[Progress: 696 / 1473]
Module 'Magento_SwaggerWebapiAsync':
[Progress: 697 / 1473]
Module 'Magento_Swatches':
[Progress: 698 / 1473]
Module 'Magento_SwatchesGraphQl':
[Progress: 699 / 1473]
Module 'Magento_SwatchesLayeredNavigation':
[Progress: 700 / 1473]
Module 'Magento_Tax':
[Progress: 701 / 1473]
Module 'Magento_TaxGraphQl':
[Progress: 702 / 1473]
Module 'Magento_TaxImportExport':
[Progress: 703 / 1473]
Module 'Magento_InventoryGraphQl':
[Progress: 704 / 1473]
Module 'Magento_ThemeGraphQl':
[Progress: 705 / 1473]
Module 'Magento_Translation':
[Progress: 706 / 1473]
Module 'Magento_AdminAdobeImsTwoFactorAuth':
[Progress: 707 / 1473]
Module 'Magento_GoogleOptimizer':
[Progress: 708 / 1473]
Module 'Magento_Ups':
[Progress: 709 / 1473]
Module 'Magento_SampleData':
[Progress: 710 / 1473]
Module 'Magento_CatalogUrlRewriteGraphQl':
[Progress: 711 / 1473]
Module 'Magento_AsynchronousOperations':
[Progress: 712 / 1473]
Module 'Magento_Usps':
[Progress: 713 / 1473]
Module 'Magento_InventoryConfigurableProductFrontendUi':
[Progress: 714 / 1473]
Module 'Magento_PaypalCaptcha':
[Progress: 715 / 1473]
Module 'Magento_VaultGraphQl':
[Progress: 716 / 1473]
Module 'Magento_Version':
[Progress: 717 / 1473]
Module 'Magento_InventoryInStorePickupWebapiExtension':
[Progress: 718 / 1473]
Module 'Magento_WebapiAsync':
[Progress: 719 / 1473]
Module 'Magento_WebapiSecurity':
[Progress: 720 / 1473]
Module 'Magento_Weee':
Running schema recurring...
[Progress: 721 / 1473]
Module 'Magento_WeeeGraphQl':
[Progress: 722 / 1473]
Module 'Magento_CurrencySymbol':
[Progress: 723 / 1473]
Module 'Magento_Wishlist':
Running schema recurring...
[Progress: 724 / 1473]
Module 'Magento_WishlistAnalytics':
[Progress: 725 / 1473]
Module 'Magento_WishlistGraphQl':
[Progress: 726 / 1473]
Module 'PayPal_Braintree':
[Progress: 727 / 1473]
Module 'PayPal_BraintreeCustomerBalance':
[Progress: 728 / 1473]
Module 'PayPal_BraintreeGiftCard':
[Progress: 729 / 1473]
Module 'PayPal_BraintreeGiftCardAccount':
[Progress: 730 / 1473]
Module 'PayPal_BraintreeGiftWrapping':
[Progress: 731 / 1473]
Module 'PayPal_BraintreeGraphQl':
[Progress: 732 / 1473]
Module 'PayPal_BraintreeReward':
[Progress: 733 / 1473]
[Progress: 734 / 1473]
Installing search configuration...
[Progress: 735 / 1473]
Validating remote storage configuration...
[Progress: 736 / 1473]
Installing user configuration...
[Progress: 737 / 1473]
Enabling caches:
Current status:
config: 1
layout: 1
block_html: 1
collections: 1
reflection: 1
db_ddl: 1
compiled_config: 1
eav: 1
customer_notification: 1
config_integration: 1
config_integration_api: 1
graphql_query_resolver_result: 1
full_page: 1
config_webservice: 1
translate: 1
[Progress: 738 / 1473]
Installing data...
Data install/update:
Module 'Magento_Csp':
[Progress: 739 / 1473]
Module 'Magento_Store':
[Progress: 740 / 1473]
Module 'Magento_AdminAnalytics':
[Progress: 741 / 1473]
Module 'Magento_Directory':
[Progress: 742 / 1473]
Module 'Magento_AdminNotification':
[Progress: 743 / 1473]
Module 'Magento_AdobeIms':
[Progress: 744 / 1473]
Module 'Magento_AdobeImsApi':
[Progress: 745 / 1473]
Module 'Magento_AdobeStockAdminUi':
[Progress: 746 / 1473]
Module 'Magento_MediaGallery':
[Progress: 747 / 1473]
Module 'Magento_AdobeStockAssetApi':
[Progress: 748 / 1473]
Module 'Magento_AdobeStockClient':
[Progress: 749 / 1473]
Module 'Magento_AdobeStockClientApi':
[Progress: 750 / 1473]
Module 'Magento_AdobeStockImage':
[Progress: 751 / 1473]
Module 'Magento_Theme':
[Progress: 752 / 1473]
Module 'Magento_AdobeStockImageApi':
[Progress: 753 / 1473]
Module 'Magento_AdvancedPricingImportExport':
[Progress: 754 / 1473]
Module 'Magento_Backend':
[Progress: 755 / 1473]
Module 'Magento_Amqp':
[Progress: 756 / 1473]
Module 'Magento_Security':
[Progress: 757 / 1473]
Module 'Magento_ApplicationPerformanceMonitor':
[Progress: 758 / 1473]
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
[Progress: 759 / 1473]
Module 'Magento_Config':
[Progress: 760 / 1473]
Module 'Magento_User':
[Progress: 761 / 1473]
Module 'Magento_Authorization':
[Progress: 762 / 1473]
Module 'Magento_Eav':
[Progress: 763 / 1473]
Module 'Magento_Customer':
[Progress: 764 / 1473]
Module 'Magento_AdminAdobeIms':
[Progress: 765 / 1473]
Module 'Magento_Backup':
[Progress: 766 / 1473]
Module 'Magento_Indexer':
[Progress: 767 / 1473]
Module 'Magento_GraphQl':
[Progress: 768 / 1473]
Module 'Magento_BundleImportExport':
[Progress: 769 / 1473]
Module 'Magento_CacheInvalidate':
[Progress: 770 / 1473]
Module 'Magento_Variable':
[Progress: 771 / 1473]
Module 'Magento_Cms':
[Progress: 772 / 1473]
Module 'Magento_Rule':
[Progress: 773 / 1473]
Module 'Magento_Integration':
[Progress: 774 / 1473]
Module 'Magento_GraphQlResolverCache':
[Progress: 775 / 1473]
Module 'Magento_EavGraphQl':
[Progress: 776 / 1473]
Module 'Magento_Search':
[Progress: 777 / 1473]
Module 'Magento_CatalogImportExport':
[Progress: 778 / 1473]
Module 'Magento_Catalog':
[Progress: 779 / 1473]
Module 'Magento_CatalogInventory':
[Progress: 780 / 1473]
Module 'Magento_CatalogPageBuilderAnalytics':
[Progress: 781 / 1473]
Module 'Magento_CatalogRule':
[Progress: 782 / 1473]
Module 'Magento_Msrp':
[Progress: 783 / 1473]
Module 'Magento_CatalogRuleGraphQl':
[Progress: 784 / 1473]
Module 'Magento_CatalogSearch':
[Progress: 785 / 1473]
Module 'Magento_CatalogUrlRewrite':
[Progress: 786 / 1473]
Module 'Magento_StoreGraphQl':
[Progress: 787 / 1473]
Module 'Magento_MediaStorage':
[Progress: 788 / 1473]
Module 'Magento_Quote':
[Progress: 789 / 1473]
Module 'Magento_SalesSequence':
[Progress: 790 / 1473]
Module 'Magento_CheckoutAgreementsGraphQl':
[Progress: 791 / 1473]
Module 'Magento_MediaGalleryUi':
[Progress: 792 / 1473]
Module 'Magento_CmsGraphQl':
[Progress: 793 / 1473]
Module 'Magento_CmsPageBuilderAnalytics':
[Progress: 794 / 1473]
Module 'Magento_CmsUrlRewrite':
[Progress: 795 / 1473]
Module 'Magento_CmsUrlRewriteGraphQl':
[Progress: 796 / 1473]
Module 'Magento_CatalogGraphQl':
[Progress: 797 / 1473]
Module 'Magento_TwoFactorAuth':
[Progress: 798 / 1473]
Module 'Magento_Payment':
[Progress: 799 / 1473]
Module 'Magento_Sales':
[Progress: 800 / 1473]
Module 'Magento_QuoteGraphQl':
[Progress: 801 / 1473]
Module 'Magento_Checkout':
[Progress: 802 / 1473]
Module 'Magento_Contact':
[Progress: 803 / 1473]
Module 'Magento_ContactGraphQl':
[Progress: 804 / 1473]
Module 'Magento_Cookie':
[Progress: 805 / 1473]
Module 'Magento_Cron':
[Progress: 806 / 1473]
Module 'Magento_GraphQlServer':
[Progress: 807 / 1473]
Module 'Magento_Widget':
[Progress: 808 / 1473]
Module 'Magento_Robots':
[Progress: 809 / 1473]
Module 'Magento_Analytics':
[Progress: 810 / 1473]
Module 'Magento_Downloadable':
[Progress: 811 / 1473]
Module 'Magento_Newsletter':
[Progress: 812 / 1473]
Module 'Magento_CustomerImportExport':
[Progress: 813 / 1473]
Module 'Magento_DataExporter':
[Progress: 814 / 1473]
Module 'Magento_Deploy':
[Progress: 815 / 1473]
Module 'Magento_Developer':
[Progress: 816 / 1473]
Module 'Magento_Dhl':
[Progress: 817 / 1473]
Module 'Magento_AdvancedSearch':
[Progress: 818 / 1473]
Module 'Magento_DirectoryGraphQl':
[Progress: 819 / 1473]
Module 'Magento_DownloadableGraphQl':
[Progress: 820 / 1473]
Module 'Magento_CustomerDownloadableGraphQl':
[Progress: 821 / 1473]
Module 'Magento_ImportExport':
[Progress: 822 / 1473]
Module 'Magento_Bundle':
[Progress: 823 / 1473]
Module 'Magento_CatalogCustomerGraphQl':
[Progress: 824 / 1473]
Module 'Magento_Elasticsearch':
[Progress: 825 / 1473]
Module 'Magento_Elasticsearch8':
[Progress: 826 / 1473]
Module 'Magento_Email':
[Progress: 827 / 1473]
Module 'Magento_EncryptionKey':
[Progress: 828 / 1473]
Module 'Magento_Fedex':
[Progress: 829 / 1473]
Module 'Magento_GiftMessage':
[Progress: 830 / 1473]
Module 'Magento_GiftMessageGraphQl':
[Progress: 831 / 1473]
Module 'Magento_GoogleAdwords':
[Progress: 832 / 1473]
Module 'Magento_GoogleAnalytics':
[Progress: 833 / 1473]
Module 'Magento_GoogleGtag':
[Progress: 834 / 1473]
Module 'Magento_Ui':
[Progress: 835 / 1473]
Module 'Magento_BundleGraphQl':
[Progress: 836 / 1473]
Module 'Magento_PageCache':
[Progress: 837 / 1473]
Module 'Magento_GraphQlNewRelic':
[Progress: 838 / 1473]
Module 'Magento_CatalogCmsGraphQl':
[Progress: 839 / 1473]
Module 'Magento_AdminGraphQlServer':
[Progress: 840 / 1473]
Module 'Magento_GroupedProduct':
[Progress: 841 / 1473]
Module 'Magento_GroupedImportExport':
[Progress: 842 / 1473]
Module 'Magento_GroupedCatalogInventory':
[Progress: 843 / 1473]
Module 'Magento_GroupedProductGraphQl':
[Progress: 844 / 1473]
Module 'Magento_DownloadableImportExport':
[Progress: 845 / 1473]
Module 'Magento_Captcha':
[Progress: 846 / 1473]
Module 'Magento_InstantPurchase':
[Progress: 847 / 1473]
Module 'Magento_CatalogAnalytics':
[Progress: 848 / 1473]
Module 'Magento_IntegrationGraphQl':
[Progress: 849 / 1473]
Module 'Magento_Inventory':
[Progress: 850 / 1473]
Module 'Magento_InventoryAdminUi':
[Progress: 851 / 1473]
Module 'Magento_InventoryAdvancedCheckout':
[Progress: 852 / 1473]
Module 'Magento_InventoryApi':
[Progress: 853 / 1473]
Module 'Magento_InventoryBundleImportExport':
[Progress: 854 / 1473]
Module 'Magento_InventoryBundleProduct':
[Progress: 855 / 1473]
Module 'Magento_InventoryBundleProductAdminUi':
[Progress: 856 / 1473]
Module 'Magento_InventoryBundleProductIndexer':
[Progress: 857 / 1473]
Module 'Magento_InventoryCatalog':
[Progress: 858 / 1473]
Module 'Magento_InventorySales':
[Progress: 859 / 1473]
Module 'Magento_InventoryCatalogAdminUi':
[Progress: 860 / 1473]
Module 'Magento_InventoryCatalogApi':
[Progress: 861 / 1473]
Module 'Magento_InventoryCatalogFrontendUi':
[Progress: 862 / 1473]
Module 'Magento_InventoryCatalogRule':
[Progress: 863 / 1473]
Module 'Magento_InventoryCatalogSearch':
[Progress: 864 / 1473]
Module 'Magento_InventoryCatalogSearchBundleProduct':
[Progress: 865 / 1473]
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
[Progress: 866 / 1473]
Module 'Magento_ConfigurableProduct':
[Progress: 867 / 1473]
Module 'Magento_ConfigurableProductGraphQl':
[Progress: 868 / 1473]
Module 'Magento_InventoryConfigurableProduct':
[Progress: 869 / 1473]
Module 'Magento_InventoryConfigurableProductIndexer':
[Progress: 870 / 1473]
Module 'Magento_InventoryConfiguration':
[Progress: 871 / 1473]
Module 'Magento_InventoryConfigurationApi':
[Progress: 872 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelection':
[Progress: 873 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
[Progress: 874 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
[Progress: 875 / 1473]
Module 'Magento_InventoryElasticsearch':
[Progress: 876 / 1473]
Module 'Magento_InventoryExportStockApi':
[Progress: 877 / 1473]
Module 'Magento_InventoryIndexer':
[Progress: 878 / 1473]
Module 'Magento_InventorySalesApi':
[Progress: 879 / 1473]
Module 'Magento_InventoryGroupedProduct':
[Progress: 880 / 1473]
Module 'Magento_InventoryGroupedProductAdminUi':
[Progress: 881 / 1473]
Module 'Magento_InventoryGroupedProductIndexer':
[Progress: 882 / 1473]
Module 'Magento_InventoryImportExport':
[Progress: 883 / 1473]
Module 'Magento_InventoryInStorePickupApi':
[Progress: 884 / 1473]
Module 'Magento_InventoryInStorePickupAdminUi':
[Progress: 885 / 1473]
Module 'Magento_InventorySourceSelectionApi':
[Progress: 886 / 1473]
Module 'Magento_InventoryInStorePickup':
[Progress: 887 / 1473]
Module 'Magento_InventoryInStorePickupGraphQl':
[Progress: 888 / 1473]
Module 'Magento_Shipping':
[Progress: 889 / 1473]
Module 'Magento_InventoryInStorePickupShippingApi':
[Progress: 890 / 1473]
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
[Progress: 891 / 1473]
Module 'Magento_InventoryInStorePickupSales':
[Progress: 892 / 1473]
Module 'Magento_InventoryInStorePickupSalesApi':
[Progress: 893 / 1473]
Module 'Magento_InventoryInStorePickupQuote':
[Progress: 894 / 1473]
Module 'Magento_InventoryInStorePickupShipping':
[Progress: 895 / 1473]
Module 'Magento_InventoryInStorePickupShippingAdminUi':
[Progress: 896 / 1473]
Module 'Magento_Multishipping':
[Progress: 897 / 1473]
Module 'Magento_Webapi':
[Progress: 898 / 1473]
Module 'Magento_InventoryCache':
[Progress: 899 / 1473]
Module 'Magento_InventoryLowQuantityNotification':
[Progress: 900 / 1473]
Module 'Magento_Reports':
[Progress: 901 / 1473]
Module 'Magento_InventoryLowQuantityNotificationApi':
[Progress: 902 / 1473]
Module 'Magento_InventoryMultiDimensionalIndexerApi':
[Progress: 903 / 1473]
Module 'Magento_InventoryProductAlert':
[Progress: 904 / 1473]
Module 'Magento_InventoryQuoteGraphQl':
[Progress: 905 / 1473]
Module 'Magento_InventoryRequisitionList':
[Progress: 906 / 1473]
Module 'Magento_InventoryReservations':
[Progress: 907 / 1473]
Module 'Magento_InventoryReservationCli':
[Progress: 908 / 1473]
Module 'Magento_InventoryReservationsApi':
[Progress: 909 / 1473]
Module 'Magento_InventoryExportStock':
[Progress: 910 / 1473]
Module 'Magento_InventorySalesAdminUi':
[Progress: 911 / 1473]
Module 'Magento_CatalogInventoryGraphQl':
[Progress: 912 / 1473]
Module 'Magento_InventorySalesAsyncOrder':
[Progress: 913 / 1473]
Module 'Magento_InventorySalesFrontendUi':
[Progress: 914 / 1473]
Module 'Magento_InventorySetupFixtureGenerator':
[Progress: 915 / 1473]
Module 'Magento_InventoryShipping':
[Progress: 916 / 1473]
Module 'Magento_InventoryShippingAdminUi':
[Progress: 917 / 1473]
Module 'Magento_InventorySourceDeductionApi':
[Progress: 918 / 1473]
Module 'Magento_InventorySourceSelection':
[Progress: 919 / 1473]
Module 'Magento_InventoryInStorePickupFrontend':
[Progress: 920 / 1473]
Module 'Magento_InventorySwatchesFrontendUi':
[Progress: 921 / 1473]
Module 'Magento_InventoryVisualMerchandiser':
[Progress: 922 / 1473]
Module 'Magento_InventoryWishlist':
[Progress: 923 / 1473]
Module 'Magento_JwtFrameworkAdapter':
[Progress: 924 / 1473]
Module 'Magento_JwtUserToken':
[Progress: 925 / 1473]
Module 'Magento_LayeredNavigation':
[Progress: 926 / 1473]
Module 'Magento_LoginAsCustomer':
[Progress: 927 / 1473]
Module 'Magento_LoginAsCustomerAdminUi':
[Progress: 928 / 1473]
Module 'Magento_LoginAsCustomerApi':
[Progress: 929 / 1473]
Module 'Magento_LoginAsCustomerAssistance':
[Progress: 930 / 1473]
Module 'Magento_LoginAsCustomerFrontendUi':
[Progress: 931 / 1473]
Module 'Magento_LoginAsCustomerGraphQl':
[Progress: 932 / 1473]
Module 'Magento_LoginAsCustomerLog':
[Progress: 933 / 1473]
Module 'Magento_LoginAsCustomerPageCache':
[Progress: 934 / 1473]
Module 'Magento_LoginAsCustomerQuote':
[Progress: 935 / 1473]
Module 'Magento_LoginAsCustomerSales':
[Progress: 936 / 1473]
Module 'Magento_Marketplace':
[Progress: 937 / 1473]
Module 'Magento_MediaContent':
[Progress: 938 / 1473]
Module 'Magento_MediaContentApi':
[Progress: 939 / 1473]
Module 'Magento_MediaContentCatalog':
[Progress: 940 / 1473]
Module 'Magento_MediaContentCms':
[Progress: 941 / 1473]
Module 'Magento_MediaContentSynchronization':
[Progress: 942 / 1473]
Module 'Magento_MediaContentSynchronizationApi':
[Progress: 943 / 1473]
Module 'Magento_MediaContentSynchronizationCatalog':
[Progress: 944 / 1473]
Module 'Magento_MediaContentSynchronizationCms':
[Progress: 945 / 1473]
Module 'Magento_AdobeStockAsset':
[Progress: 946 / 1473]
Module 'Magento_MediaGalleryApi':
[Progress: 947 / 1473]
Module 'Magento_MediaGalleryCatalog':
[Progress: 948 / 1473]
Module 'Magento_MediaGalleryCatalogIntegration':
[Progress: 949 / 1473]
Module 'Magento_MediaGalleryCatalogUi':
[Progress: 950 / 1473]
Module 'Magento_MediaGalleryCmsUi':
[Progress: 951 / 1473]
Module 'Magento_MediaGalleryIntegration':
[Progress: 952 / 1473]
Module 'Magento_MediaGalleryMetadata':
[Progress: 953 / 1473]
Module 'Magento_MediaGalleryMetadataApi':
[Progress: 954 / 1473]
Module 'Magento_MediaGalleryRenditions':
[Progress: 955 / 1473]
Module 'Magento_MediaGalleryRenditionsApi':
[Progress: 956 / 1473]
Module 'Magento_MediaGallerySynchronization':
[Progress: 957 / 1473]
Module 'Magento_MediaGallerySynchronizationApi':
[Progress: 958 / 1473]
Module 'Magento_MediaGallerySynchronizationMetadata':
[Progress: 959 / 1473]
Module 'Magento_AdobeStockImageAdminUi':
[Progress: 960 / 1473]
Module 'Magento_MediaGalleryUiApi':
[Progress: 961 / 1473]
Module 'Magento_CatalogWidget':
[Progress: 962 / 1473]
Module 'Magento_MessageQueue':
[Progress: 963 / 1473]
Module 'Magento_ConfigurableImportExport':
[Progress: 964 / 1473]
Module 'Magento_MsrpConfigurableProduct':
[Progress: 965 / 1473]
Module 'Magento_MsrpGroupedProduct':
[Progress: 966 / 1473]
Module 'Magento_InventoryInStorePickupMultishipping':
[Progress: 967 / 1473]
Module 'Magento_MysqlMq':
[Progress: 968 / 1473]
Module 'Magento_NewRelicReporting':
[Progress: 969 / 1473]
Module 'Magento_CustomerGraphQl':
[Progress: 970 / 1473]
Module 'Magento_NewsletterGraphQl':
[Progress: 971 / 1473]
Module 'Magento_OfflinePayments':
[Progress: 972 / 1473]
Module 'Magento_SalesRule':
[Progress: 973 / 1473]
Module 'Magento_OpenSearch':
[Progress: 974 / 1473]
Module 'Magento_OrderCancellation':
[Progress: 975 / 1473]
Module 'Magento_OrderCancellationGraphQl':
[Progress: 976 / 1473]
Module 'Magento_OrderCancellationUi':
[Progress: 977 / 1473]
Module 'Magento_Sitemap':
[Progress: 978 / 1473]
Module 'Magento_PageBuilder':
[Progress: 979 / 1473]
Module 'Magento_PageBuilderAnalytics':
[Progress: 980 / 1473]
Module 'Magento_PageBuilderImageAttribute':
[Progress: 981 / 1473]
Module 'Magento_GraphQlCache':
[Progress: 982 / 1473]
Module 'Magento_CardinalCommerce':
[Progress: 983 / 1473]
Module 'Magento_PaymentGraphQl':
[Progress: 984 / 1473]
Module 'Magento_ServiceProxy':
[Progress: 985 / 1473]
Module 'Magento_Vault':
[Progress: 986 / 1473]
Module 'Magento_PaymentServicesDashboard':
[Progress: 987 / 1473]
Module 'Magento_PaymentServicesPaypalGraphQl':
[Progress: 988 / 1473]
Module 'Magento_QueryXml':
[Progress: 989 / 1473]
Module 'Magento_ServicesConnector':
Upgrading data... 
[Progress: 990 / 1473]
Module 'Magento_Paypal':
[Progress: 991 / 1473]
Module 'Magento_PaypalGraphQl':
[Progress: 992 / 1473]
Module 'Magento_Persistent':
[Progress: 993 / 1473]
Module 'Magento_ProductAlert':
[Progress: 994 / 1473]
Module 'Magento_ProductVideo':
[Progress: 995 / 1473]
Module 'Magento_ServicesId':
[Progress: 996 / 1473]
Module 'Magento_CheckoutAgreements':
[Progress: 997 / 1473]
Module 'Magento_QuoteAnalytics':
[Progress: 998 / 1473]
Module 'Magento_QuoteBundleOptions':
[Progress: 999 / 1473]
Module 'Magento_QuoteConfigurableOptions':
[Progress: 1000 / 1473]
Module 'Magento_QuoteDownloadableLinks':
[Progress: 1001 / 1473]
Module 'Magento_InventoryConfigurableProductAdminUi':
[Progress: 1002 / 1473]
Module 'Magento_ReCaptchaAdminUi':
[Progress: 1003 / 1473]
Module 'Magento_ReCaptchaCheckout':
[Progress: 1004 / 1473]
Module 'Magento_ReCaptchaCheckoutSalesRule':
[Progress: 1005 / 1473]
Module 'Magento_ReCaptchaContact':
[Progress: 1006 / 1473]
Module 'Magento_ReCaptchaCustomer':
[Progress: 1007 / 1473]
Module 'Magento_ReCaptchaFrontendUi':
[Progress: 1008 / 1473]
Module 'Magento_ReCaptchaMigration':
[Progress: 1009 / 1473]
Module 'Magento_ReCaptchaNewsletter':
[Progress: 1010 / 1473]
Module 'Magento_ReCaptchaPaypal':
[Progress: 1011 / 1473]
Module 'Magento_ReCaptchaResendConfirmationEmail':
[Progress: 1012 / 1473]
Module 'Magento_ReCaptchaReview':
[Progress: 1013 / 1473]
Module 'Magento_ReCaptchaSendFriend':
[Progress: 1014 / 1473]
Module 'Magento_ReCaptchaStorePickup':
[Progress: 1015 / 1473]
Module 'Magento_ReCaptchaUi':
[Progress: 1016 / 1473]
Module 'Magento_ReCaptchaUser':
[Progress: 1017 / 1473]
Module 'Magento_ReCaptchaValidation':
[Progress: 1018 / 1473]
Module 'Magento_ReCaptchaValidationApi':
[Progress: 1019 / 1473]
Module 'Magento_ReCaptchaVersion2Checkbox':
[Progress: 1020 / 1473]
Module 'Magento_ReCaptchaVersion2Invisible':
[Progress: 1021 / 1473]
Module 'Magento_ReCaptchaVersion3Invisible':
[Progress: 1022 / 1473]
Module 'Magento_ReCaptchaWebapiApi':
[Progress: 1023 / 1473]
Module 'Magento_ReCaptchaWebapiGraphQl':
[Progress: 1024 / 1473]
Module 'Magento_ReCaptchaWebapiRest':
[Progress: 1025 / 1473]
Module 'Magento_ReCaptchaWebapiUi':
[Progress: 1026 / 1473]
Module 'Magento_ReCaptchaWishlist':
[Progress: 1027 / 1473]
Module 'Magento_RelatedProductGraphQl':
[Progress: 1028 / 1473]
Module 'Magento_ReleaseNotification':
[Progress: 1029 / 1473]
Module 'Magento_RemoteStorage':
[Progress: 1030 / 1473]
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
[Progress: 1031 / 1473]
Module 'Magento_RequireJs':
[Progress: 1032 / 1473]
Module 'Magento_Review':
[Progress: 1033 / 1473]
Module 'Magento_ReviewAnalytics':
[Progress: 1034 / 1473]
Module 'Magento_ReviewGraphQl':
[Progress: 1035 / 1473]
Module 'Magento_AwsS3':
[Progress: 1036 / 1473]
Module 'Magento_Rss':
[Progress: 1037 / 1473]
Module 'Magento_PageBuilderAdminAnalytics':
[Progress: 1038 / 1473]
Module 'Magento_ServicesIdGraphQlServer':
[Progress: 1039 / 1473]
Module 'Magento_CatalogRuleConfigurable':
[Progress: 1040 / 1473]
Module 'Magento_SalesAnalytics':
[Progress: 1041 / 1473]
Module 'Magento_ServicesIdLayout':
[Progress: 1042 / 1473]
Module 'Magento_SalesGraphQl':
[Progress: 1043 / 1473]
Module 'Magento_SalesInventory':
[Progress: 1044 / 1473]
Module 'Magento_OfflineShipping':
[Progress: 1045 / 1473]
Module 'Magento_SalesRuleGraphQl':
[Progress: 1046 / 1473]
Module 'Magento_ConfigurableProductSales':
[Progress: 1047 / 1473]
Module 'Magento_UrlRewrite':
[Progress: 1048 / 1473]
Module 'Magento_UrlRewriteGraphQl':
[Progress: 1049 / 1473]
Module 'Magento_CustomerAnalytics':
[Progress: 1050 / 1473]
Module 'Magento_Securitytxt':
[Progress: 1051 / 1473]
Module 'Magento_SendFriend':
[Progress: 1052 / 1473]
Module 'Magento_SendFriendGraphQl':
[Progress: 1053 / 1473]
Module 'Magento_PaymentServicesBase':
[Progress: 1054 / 1473]
Module 'Magento_SaaSCommon':
[Progress: 1055 / 1473]
Module 'Magento_SalesDataExporter':
[Progress: 1056 / 1473]
Module 'Magento_StoreDataExporter':
[Progress: 1057 / 1473]
Module 'Magento_PaymentServicesPaypal':
[Progress: 1058 / 1473]
Module 'Magento_InventoryInStorePickupSalesAdminUi':
[Progress: 1059 / 1473]
Module 'Magento_AwsS3PageBuilder':
[Progress: 1060 / 1473]
Module 'Magento_AsyncConfig':
[Progress: 1061 / 1473]
Module 'Magento_PaymentServicesSaaSExport':
[Progress: 1062 / 1473]
Module 'Magento_CompareListGraphQl':
[Progress: 1063 / 1473]
Module 'Magento_Swagger':
[Progress: 1064 / 1473]
Module 'Magento_SwaggerWebapi':
[Progress: 1065 / 1473]
Module 'Magento_SwaggerWebapiAsync':
[Progress: 1066 / 1473]
Module 'Magento_Swatches':
[Progress: 1067 / 1473]
Module 'Magento_SwatchesGraphQl':
[Progress: 1068 / 1473]
Module 'Magento_SwatchesLayeredNavigation':
[Progress: 1069 / 1473]
Module 'Magento_Tax':
[Progress: 1070 / 1473]
Module 'Magento_TaxGraphQl':
[Progress: 1071 / 1473]
Module 'Magento_TaxImportExport':
[Progress: 1072 / 1473]
Module 'Magento_InventoryGraphQl':
[Progress: 1073 / 1473]
Module 'Magento_ThemeGraphQl':
[Progress: 1074 / 1473]
Module 'Magento_Translation':
[Progress: 1075 / 1473]
Module 'Magento_AdminAdobeImsTwoFactorAuth':
[Progress: 1076 / 1473]
Module 'Magento_GoogleOptimizer':
[Progress: 1077 / 1473]
Module 'Magento_Ups':
[Progress: 1078 / 1473]
Module 'Magento_SampleData':
[Progress: 1079 / 1473]
Module 'Magento_CatalogUrlRewriteGraphQl':
[Progress: 1080 / 1473]
Module 'Magento_AsynchronousOperations':
[Progress: 1081 / 1473]
Module 'Magento_Usps':
[Progress: 1082 / 1473]
Module 'Magento_InventoryConfigurableProductFrontendUi':
[Progress: 1083 / 1473]
Module 'Magento_PaypalCaptcha':
[Progress: 1084 / 1473]
Module 'Magento_VaultGraphQl':
[Progress: 1085 / 1473]
Module 'Magento_Version':
[Progress: 1086 / 1473]
Module 'Magento_InventoryInStorePickupWebapiExtension':
[Progress: 1087 / 1473]
Module 'Magento_WebapiAsync':
[Progress: 1088 / 1473]
Module 'Magento_WebapiSecurity':
[Progress: 1089 / 1473]
Module 'Magento_Weee':
[Progress: 1090 / 1473]
Module 'Magento_WeeeGraphQl':
[Progress: 1091 / 1473]
Module 'Magento_CurrencySymbol':
[Progress: 1092 / 1473]
Module 'Magento_Wishlist':
[Progress: 1093 / 1473]
Module 'Magento_WishlistAnalytics':
[Progress: 1094 / 1473]
Module 'Magento_WishlistGraphQl':
[Progress: 1095 / 1473]
Module 'PayPal_Braintree':
[Progress: 1096 / 1473]
Module 'PayPal_BraintreeCustomerBalance':
[Progress: 1097 / 1473]
Module 'PayPal_BraintreeGiftCard':
[Progress: 1098 / 1473]
Module 'PayPal_BraintreeGiftCardAccount':
[Progress: 1099 / 1473]
Module 'PayPal_BraintreeGiftWrapping':
[Progress: 1100 / 1473]
Module 'PayPal_BraintreeGraphQl':
[Progress: 1101 / 1473]
Module 'PayPal_BraintreeReward':
[Progress: 1102 / 1473]
Data post-updates:
Module 'Magento_Csp':
[Progress: 1103 / 1473]
Module 'Magento_Store':
[Progress: 1104 / 1473]
Module 'Magento_AdminAnalytics':
[Progress: 1105 / 1473]
Module 'Magento_Directory':
[Progress: 1106 / 1473]
Module 'Magento_AdminNotification':
[Progress: 1107 / 1473]
Module 'Magento_AdobeIms':
[Progress: 1108 / 1473]
Module 'Magento_AdobeImsApi':
[Progress: 1109 / 1473]
Module 'Magento_AdobeStockAdminUi':
[Progress: 1110 / 1473]
Module 'Magento_MediaGallery':
[Progress: 1111 / 1473]
Module 'Magento_AdobeStockAssetApi':
[Progress: 1112 / 1473]
Module 'Magento_AdobeStockClient':
[Progress: 1113 / 1473]
Module 'Magento_AdobeStockClientApi':
[Progress: 1114 / 1473]
Module 'Magento_AdobeStockImage':
[Progress: 1115 / 1473]
Module 'Magento_Theme':
Running data recurring...
[Progress: 1116 / 1473]
Module 'Magento_AdobeStockImageApi':
[Progress: 1117 / 1473]
Module 'Magento_AdvancedPricingImportExport':
[Progress: 1118 / 1473]
Module 'Magento_Backend':
[Progress: 1119 / 1473]
Module 'Magento_Amqp':
[Progress: 1120 / 1473]
Module 'Magento_Security':
[Progress: 1121 / 1473]
Module 'Magento_ApplicationPerformanceMonitor':
[Progress: 1122 / 1473]
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
[Progress: 1123 / 1473]
Module 'Magento_Config':
[Progress: 1124 / 1473]
Module 'Magento_User':
[Progress: 1125 / 1473]
Module 'Magento_Authorization':
[Progress: 1126 / 1473]
Module 'Magento_Eav':
[Progress: 1127 / 1473]
Module 'Magento_Customer':
Running data recurring...
[Progress: 1128 / 1473]
Module 'Magento_AdminAdobeIms':
[Progress: 1129 / 1473]
Module 'Magento_Backup':
[Progress: 1130 / 1473]
Module 'Magento_Indexer':
[Progress: 1131 / 1473]
Module 'Magento_GraphQl':
[Progress: 1132 / 1473]
Module 'Magento_BundleImportExport':
[Progress: 1133 / 1473]
Module 'Magento_CacheInvalidate':
[Progress: 1134 / 1473]
Module 'Magento_Variable':
[Progress: 1135 / 1473]
Module 'Magento_Cms':
[Progress: 1136 / 1473]
Module 'Magento_Rule':
[Progress: 1137 / 1473]
Module 'Magento_Integration':
[Progress: 1138 / 1473]
Module 'Magento_GraphQlResolverCache':
[Progress: 1139 / 1473]
Module 'Magento_EavGraphQl':
[Progress: 1140 / 1473]
Module 'Magento_Search':
[Progress: 1141 / 1473]
Module 'Magento_CatalogImportExport':
[Progress: 1142 / 1473]
Module 'Magento_Catalog':
[Progress: 1143 / 1473]
Module 'Magento_CatalogInventory':
[Progress: 1144 / 1473]
Module 'Magento_CatalogPageBuilderAnalytics':
[Progress: 1145 / 1473]
Module 'Magento_CatalogRule':
[Progress: 1146 / 1473]
Module 'Magento_Msrp':
[Progress: 1147 / 1473]
Module 'Magento_CatalogRuleGraphQl':
[Progress: 1148 / 1473]
Module 'Magento_CatalogSearch':
[Progress: 1149 / 1473]
Module 'Magento_CatalogUrlRewrite':
[Progress: 1150 / 1473]
Module 'Magento_StoreGraphQl':
[Progress: 1151 / 1473]
Module 'Magento_MediaStorage':
[Progress: 1152 / 1473]
Module 'Magento_Quote':
[Progress: 1153 / 1473]
Module 'Magento_SalesSequence':
Running data recurring...
[Progress: 1154 / 1473]
Module 'Magento_CheckoutAgreementsGraphQl':
[Progress: 1155 / 1473]
Module 'Magento_MediaGalleryUi':
[Progress: 1156 / 1473]
Module 'Magento_CmsGraphQl':
[Progress: 1157 / 1473]
Module 'Magento_CmsPageBuilderAnalytics':
[Progress: 1158 / 1473]
Module 'Magento_CmsUrlRewrite':
[Progress: 1159 / 1473]
Module 'Magento_CmsUrlRewriteGraphQl':
[Progress: 1160 / 1473]
Module 'Magento_CatalogGraphQl':
[Progress: 1161 / 1473]
Module 'Magento_TwoFactorAuth':
[Progress: 1162 / 1473]
Module 'Magento_Payment':
[Progress: 1163 / 1473]
Module 'Magento_Sales':
[Progress: 1164 / 1473]
Module 'Magento_QuoteGraphQl':
[Progress: 1165 / 1473]
Module 'Magento_Checkout':
[Progress: 1166 / 1473]
Module 'Magento_Contact':
[Progress: 1167 / 1473]
Module 'Magento_ContactGraphQl':
[Progress: 1168 / 1473]
Module 'Magento_Cookie':
[Progress: 1169 / 1473]
Module 'Magento_Cron':
[Progress: 1170 / 1473]
Module 'Magento_GraphQlServer':
[Progress: 1171 / 1473]
Module 'Magento_Widget':
[Progress: 1172 / 1473]
Module 'Magento_Robots':
[Progress: 1173 / 1473]
Module 'Magento_Analytics':
[Progress: 1174 / 1473]
Module 'Magento_Downloadable':
[Progress: 1175 / 1473]
Module 'Magento_Newsletter':
[Progress: 1176 / 1473]
Module 'Magento_CustomerImportExport':
[Progress: 1177 / 1473]
Module 'Magento_DataExporter':
[Progress: 1178 / 1473]
Module 'Magento_Deploy':
[Progress: 1179 / 1473]
Module 'Magento_Developer':
[Progress: 1180 / 1473]
Module 'Magento_Dhl':
[Progress: 1181 / 1473]
Module 'Magento_AdvancedSearch':
[Progress: 1182 / 1473]
Module 'Magento_DirectoryGraphQl':
[Progress: 1183 / 1473]
Module 'Magento_DownloadableGraphQl':
[Progress: 1184 / 1473]
Module 'Magento_CustomerDownloadableGraphQl':
[Progress: 1185 / 1473]
Module 'Magento_ImportExport':
[Progress: 1186 / 1473]
Module 'Magento_Bundle':
[Progress: 1187 / 1473]
Module 'Magento_CatalogCustomerGraphQl':
[Progress: 1188 / 1473]
Module 'Magento_Elasticsearch':
[Progress: 1189 / 1473]
Module 'Magento_Elasticsearch8':
[Progress: 1190 / 1473]
Module 'Magento_Email':
[Progress: 1191 / 1473]
Module 'Magento_EncryptionKey':
[Progress: 1192 / 1473]
Module 'Magento_Fedex':
[Progress: 1193 / 1473]
Module 'Magento_GiftMessage':
[Progress: 1194 / 1473]
Module 'Magento_GiftMessageGraphQl':
[Progress: 1195 / 1473]
Module 'Magento_GoogleAdwords':
[Progress: 1196 / 1473]
Module 'Magento_GoogleAnalytics':
[Progress: 1197 / 1473]
Module 'Magento_GoogleGtag':
[Progress: 1198 / 1473]
Module 'Magento_Ui':
[Progress: 1199 / 1473]
Module 'Magento_BundleGraphQl':
[Progress: 1200 / 1473]
Module 'Magento_PageCache':
[Progress: 1201 / 1473]
Module 'Magento_GraphQlNewRelic':
[Progress: 1202 / 1473]
Module 'Magento_CatalogCmsGraphQl':
[Progress: 1203 / 1473]
Module 'Magento_AdminGraphQlServer':
[Progress: 1204 / 1473]
Module 'Magento_GroupedProduct':
[Progress: 1205 / 1473]
Module 'Magento_GroupedImportExport':
[Progress: 1206 / 1473]
Module 'Magento_GroupedCatalogInventory':
[Progress: 1207 / 1473]
Module 'Magento_GroupedProductGraphQl':
[Progress: 1208 / 1473]
Module 'Magento_DownloadableImportExport':
[Progress: 1209 / 1473]
Module 'Magento_Captcha':
[Progress: 1210 / 1473]
Module 'Magento_InstantPurchase':
[Progress: 1211 / 1473]
Module 'Magento_CatalogAnalytics':
[Progress: 1212 / 1473]
Module 'Magento_IntegrationGraphQl':
[Progress: 1213 / 1473]
Module 'Magento_Inventory':
[Progress: 1214 / 1473]
Module 'Magento_InventoryAdminUi':
[Progress: 1215 / 1473]
Module 'Magento_InventoryAdvancedCheckout':
[Progress: 1216 / 1473]
Module 'Magento_InventoryApi':
[Progress: 1217 / 1473]
Module 'Magento_InventoryBundleImportExport':
[Progress: 1218 / 1473]
Module 'Magento_InventoryBundleProduct':
[Progress: 1219 / 1473]
Module 'Magento_InventoryBundleProductAdminUi':
[Progress: 1220 / 1473]
Module 'Magento_InventoryBundleProductIndexer':
[Progress: 1221 / 1473]
Module 'Magento_InventoryCatalog':
[Progress: 1222 / 1473]
Module 'Magento_InventorySales':
[Progress: 1223 / 1473]
Module 'Magento_InventoryCatalogAdminUi':
[Progress: 1224 / 1473]
Module 'Magento_InventoryCatalogApi':
[Progress: 1225 / 1473]
Module 'Magento_InventoryCatalogFrontendUi':
[Progress: 1226 / 1473]
Module 'Magento_InventoryCatalogRule':
[Progress: 1227 / 1473]
Module 'Magento_InventoryCatalogSearch':
[Progress: 1228 / 1473]
Module 'Magento_InventoryCatalogSearchBundleProduct':
[Progress: 1229 / 1473]
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
[Progress: 1230 / 1473]
Module 'Magento_ConfigurableProduct':
[Progress: 1231 / 1473]
Module 'Magento_ConfigurableProductGraphQl':
[Progress: 1232 / 1473]
Module 'Magento_InventoryConfigurableProduct':
[Progress: 1233 / 1473]
Module 'Magento_InventoryConfigurableProductIndexer':
[Progress: 1234 / 1473]
Module 'Magento_InventoryConfiguration':
[Progress: 1235 / 1473]
Module 'Magento_InventoryConfigurationApi':
[Progress: 1236 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelection':
[Progress: 1237 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
[Progress: 1238 / 1473]
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
[Progress: 1239 / 1473]
Module 'Magento_InventoryElasticsearch':
[Progress: 1240 / 1473]
Module 'Magento_InventoryExportStockApi':
[Progress: 1241 / 1473]
Module 'Magento_InventoryIndexer':
[Progress: 1242 / 1473]
Module 'Magento_InventorySalesApi':
[Progress: 1243 / 1473]
Module 'Magento_InventoryGroupedProduct':
[Progress: 1244 / 1473]
Module 'Magento_InventoryGroupedProductAdminUi':
[Progress: 1245 / 1473]
Module 'Magento_InventoryGroupedProductIndexer':
[Progress: 1246 / 1473]
Module 'Magento_InventoryImportExport':
[Progress: 1247 / 1473]
Module 'Magento_InventoryInStorePickupApi':
[Progress: 1248 / 1473]
Module 'Magento_InventoryInStorePickupAdminUi':
[Progress: 1249 / 1473]
Module 'Magento_InventorySourceSelectionApi':
[Progress: 1250 / 1473]
Module 'Magento_InventoryInStorePickup':
[Progress: 1251 / 1473]
Module 'Magento_InventoryInStorePickupGraphQl':
[Progress: 1252 / 1473]
Module 'Magento_Shipping':
[Progress: 1253 / 1473]
Module 'Magento_InventoryInStorePickupShippingApi':
[Progress: 1254 / 1473]
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
[Progress: 1255 / 1473]
Module 'Magento_InventoryInStorePickupSales':
[Progress: 1256 / 1473]
Module 'Magento_InventoryInStorePickupSalesApi':
[Progress: 1257 / 1473]
Module 'Magento_InventoryInStorePickupQuote':
[Progress: 1258 / 1473]
Module 'Magento_InventoryInStorePickupShipping':
[Progress: 1259 / 1473]
Module 'Magento_InventoryInStorePickupShippingAdminUi':
[Progress: 1260 / 1473]
Module 'Magento_Multishipping':
[Progress: 1261 / 1473]
Module 'Magento_Webapi':
[Progress: 1262 / 1473]
Module 'Magento_InventoryCache':
[Progress: 1263 / 1473]
Module 'Magento_InventoryLowQuantityNotification':
[Progress: 1264 / 1473]
Module 'Magento_Reports':
[Progress: 1265 / 1473]
Module 'Magento_InventoryLowQuantityNotificationApi':
[Progress: 1266 / 1473]
Module 'Magento_InventoryMultiDimensionalIndexerApi':
[Progress: 1267 / 1473]
Module 'Magento_InventoryProductAlert':
[Progress: 1268 / 1473]
Module 'Magento_InventoryQuoteGraphQl':
[Progress: 1269 / 1473]
Module 'Magento_InventoryRequisitionList':
[Progress: 1270 / 1473]
Module 'Magento_InventoryReservations':
[Progress: 1271 / 1473]
Module 'Magento_InventoryReservationCli':
[Progress: 1272 / 1473]
Module 'Magento_InventoryReservationsApi':
[Progress: 1273 / 1473]
Module 'Magento_InventoryExportStock':
[Progress: 1274 / 1473]
Module 'Magento_InventorySalesAdminUi':
[Progress: 1275 / 1473]
Module 'Magento_CatalogInventoryGraphQl':
[Progress: 1276 / 1473]
Module 'Magento_InventorySalesAsyncOrder':
[Progress: 1277 / 1473]
Module 'Magento_InventorySalesFrontendUi':
[Progress: 1278 / 1473]
Module 'Magento_InventorySetupFixtureGenerator':
[Progress: 1279 / 1473]
Module 'Magento_InventoryShipping':
[Progress: 1280 / 1473]
Module 'Magento_InventoryShippingAdminUi':
[Progress: 1281 / 1473]
Module 'Magento_InventorySourceDeductionApi':
[Progress: 1282 / 1473]
Module 'Magento_InventorySourceSelection':
[Progress: 1283 / 1473]
Module 'Magento_InventoryInStorePickupFrontend':
[Progress: 1284 / 1473]
Module 'Magento_InventorySwatchesFrontendUi':
[Progress: 1285 / 1473]
Module 'Magento_InventoryVisualMerchandiser':
[Progress: 1286 / 1473]
Module 'Magento_InventoryWishlist':
[Progress: 1287 / 1473]
Module 'Magento_JwtFrameworkAdapter':
[Progress: 1288 / 1473]
Module 'Magento_JwtUserToken':
[Progress: 1289 / 1473]
Module 'Magento_LayeredNavigation':
[Progress: 1290 / 1473]
Module 'Magento_LoginAsCustomer':
[Progress: 1291 / 1473]
Module 'Magento_LoginAsCustomerAdminUi':
[Progress: 1292 / 1473]
Module 'Magento_LoginAsCustomerApi':
[Progress: 1293 / 1473]
Module 'Magento_LoginAsCustomerAssistance':
[Progress: 1294 / 1473]
Module 'Magento_LoginAsCustomerFrontendUi':
[Progress: 1295 / 1473]
Module 'Magento_LoginAsCustomerGraphQl':
[Progress: 1296 / 1473]
Module 'Magento_LoginAsCustomerLog':
[Progress: 1297 / 1473]
Module 'Magento_LoginAsCustomerPageCache':
[Progress: 1298 / 1473]
Module 'Magento_LoginAsCustomerQuote':
[Progress: 1299 / 1473]
Module 'Magento_LoginAsCustomerSales':
[Progress: 1300 / 1473]
Module 'Magento_Marketplace':
[Progress: 1301 / 1473]
Module 'Magento_MediaContent':
[Progress: 1302 / 1473]
Module 'Magento_MediaContentApi':
[Progress: 1303 / 1473]
Module 'Magento_MediaContentCatalog':
[Progress: 1304 / 1473]
Module 'Magento_MediaContentCms':
[Progress: 1305 / 1473]
Module 'Magento_MediaContentSynchronization':
[Progress: 1306 / 1473]
Module 'Magento_MediaContentSynchronizationApi':
[Progress: 1307 / 1473]
Module 'Magento_MediaContentSynchronizationCatalog':
[Progress: 1308 / 1473]
Module 'Magento_MediaContentSynchronizationCms':
[Progress: 1309 / 1473]
Module 'Magento_AdobeStockAsset':
[Progress: 1310 / 1473]
Module 'Magento_MediaGalleryApi':
[Progress: 1311 / 1473]
Module 'Magento_MediaGalleryCatalog':
[Progress: 1312 / 1473]
Module 'Magento_MediaGalleryCatalogIntegration':
[Progress: 1313 / 1473]
Module 'Magento_MediaGalleryCatalogUi':
[Progress: 1314 / 1473]
Module 'Magento_MediaGalleryCmsUi':
[Progress: 1315 / 1473]
Module 'Magento_MediaGalleryIntegration':
[Progress: 1316 / 1473]
Module 'Magento_MediaGalleryMetadata':
[Progress: 1317 / 1473]
Module 'Magento_MediaGalleryMetadataApi':
[Progress: 1318 / 1473]
Module 'Magento_MediaGalleryRenditions':
[Progress: 1319 / 1473]
Module 'Magento_MediaGalleryRenditionsApi':
[Progress: 1320 / 1473]
Module 'Magento_MediaGallerySynchronization':
[Progress: 1321 / 1473]
Module 'Magento_MediaGallerySynchronizationApi':
[Progress: 1322 / 1473]
Module 'Magento_MediaGallerySynchronizationMetadata':
[Progress: 1323 / 1473]
Module 'Magento_AdobeStockImageAdminUi':
[Progress: 1324 / 1473]
Module 'Magento_MediaGalleryUiApi':
[Progress: 1325 / 1473]
Module 'Magento_CatalogWidget':
[Progress: 1326 / 1473]
Module 'Magento_MessageQueue':
[Progress: 1327 / 1473]
Module 'Magento_ConfigurableImportExport':
[Progress: 1328 / 1473]
Module 'Magento_MsrpConfigurableProduct':
[Progress: 1329 / 1473]
Module 'Magento_MsrpGroupedProduct':
[Progress: 1330 / 1473]
Module 'Magento_InventoryInStorePickupMultishipping':
[Progress: 1331 / 1473]
Module 'Magento_MysqlMq':
[Progress: 1332 / 1473]
Module 'Magento_NewRelicReporting':
[Progress: 1333 / 1473]
Module 'Magento_CustomerGraphQl':
[Progress: 1334 / 1473]
Module 'Magento_NewsletterGraphQl':
[Progress: 1335 / 1473]
Module 'Magento_OfflinePayments':
[Progress: 1336 / 1473]
Module 'Magento_SalesRule':
[Progress: 1337 / 1473]
Module 'Magento_OpenSearch':
[Progress: 1338 / 1473]
Module 'Magento_OrderCancellation':
[Progress: 1339 / 1473]
Module 'Magento_OrderCancellationGraphQl':
[Progress: 1340 / 1473]
Module 'Magento_OrderCancellationUi':
[Progress: 1341 / 1473]
Module 'Magento_Sitemap':
[Progress: 1342 / 1473]
Module 'Magento_PageBuilder':
[Progress: 1343 / 1473]
Module 'Magento_PageBuilderAnalytics':
[Progress: 1344 / 1473]
Module 'Magento_PageBuilderImageAttribute':
[Progress: 1345 / 1473]
Module 'Magento_GraphQlCache':
[Progress: 1346 / 1473]
Module 'Magento_CardinalCommerce':
[Progress: 1347 / 1473]
Module 'Magento_PaymentGraphQl':
[Progress: 1348 / 1473]
Module 'Magento_ServiceProxy':
[Progress: 1349 / 1473]
Module 'Magento_Vault':
[Progress: 1350 / 1473]
Module 'Magento_PaymentServicesDashboard':
[Progress: 1351 / 1473]
Module 'Magento_PaymentServicesPaypalGraphQl':
[Progress: 1352 / 1473]
Module 'Magento_QueryXml':
[Progress: 1353 / 1473]
Module 'Magento_ServicesConnector':
[Progress: 1354 / 1473]
Module 'Magento_Paypal':
[Progress: 1355 / 1473]
Module 'Magento_PaypalGraphQl':
[Progress: 1356 / 1473]
Module 'Magento_Persistent':
[Progress: 1357 / 1473]
Module 'Magento_ProductAlert':
[Progress: 1358 / 1473]
Module 'Magento_ProductVideo':
[Progress: 1359 / 1473]
Module 'Magento_ServicesId':
Running data recurring...
[Progress: 1360 / 1473]
Module 'Magento_CheckoutAgreements':
[Progress: 1361 / 1473]
Module 'Magento_QuoteAnalytics':
[Progress: 1362 / 1473]
Module 'Magento_QuoteBundleOptions':
[Progress: 1363 / 1473]
Module 'Magento_QuoteConfigurableOptions':
[Progress: 1364 / 1473]
Module 'Magento_QuoteDownloadableLinks':
[Progress: 1365 / 1473]
Module 'Magento_InventoryConfigurableProductAdminUi':
[Progress: 1366 / 1473]
Module 'Magento_ReCaptchaAdminUi':
[Progress: 1367 / 1473]
Module 'Magento_ReCaptchaCheckout':
[Progress: 1368 / 1473]
Module 'Magento_ReCaptchaCheckoutSalesRule':
[Progress: 1369 / 1473]
Module 'Magento_ReCaptchaContact':
[Progress: 1370 / 1473]
Module 'Magento_ReCaptchaCustomer':
[Progress: 1371 / 1473]
Module 'Magento_ReCaptchaFrontendUi':
[Progress: 1372 / 1473]
Module 'Magento_ReCaptchaMigration':
[Progress: 1373 / 1473]
Module 'Magento_ReCaptchaNewsletter':
[Progress: 1374 / 1473]
Module 'Magento_ReCaptchaPaypal':
[Progress: 1375 / 1473]
Module 'Magento_ReCaptchaResendConfirmationEmail':
[Progress: 1376 / 1473]
Module 'Magento_ReCaptchaReview':
[Progress: 1377 / 1473]
Module 'Magento_ReCaptchaSendFriend':
[Progress: 1378 / 1473]
Module 'Magento_ReCaptchaStorePickup':
[Progress: 1379 / 1473]
Module 'Magento_ReCaptchaUi':
[Progress: 1380 / 1473]
Module 'Magento_ReCaptchaUser':
[Progress: 1381 / 1473]
Module 'Magento_ReCaptchaValidation':
[Progress: 1382 / 1473]
Module 'Magento_ReCaptchaValidationApi':
[Progress: 1383 / 1473]
Module 'Magento_ReCaptchaVersion2Checkbox':
[Progress: 1384 / 1473]
Module 'Magento_ReCaptchaVersion2Invisible':
[Progress: 1385 / 1473]
Module 'Magento_ReCaptchaVersion3Invisible':
[Progress: 1386 / 1473]
Module 'Magento_ReCaptchaWebapiApi':
[Progress: 1387 / 1473]
Module 'Magento_ReCaptchaWebapiGraphQl':
[Progress: 1388 / 1473]
Module 'Magento_ReCaptchaWebapiRest':
[Progress: 1389 / 1473]
Module 'Magento_ReCaptchaWebapiUi':
[Progress: 1390 / 1473]
Module 'Magento_ReCaptchaWishlist':
[Progress: 1391 / 1473]
Module 'Magento_RelatedProductGraphQl':
[Progress: 1392 / 1473]
Module 'Magento_ReleaseNotification':
[Progress: 1393 / 1473]
Module 'Magento_RemoteStorage':
[Progress: 1394 / 1473]
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
[Progress: 1395 / 1473]
Module 'Magento_RequireJs':
[Progress: 1396 / 1473]
Module 'Magento_Review':
[Progress: 1397 / 1473]
Module 'Magento_ReviewAnalytics':
[Progress: 1398 / 1473]
Module 'Magento_ReviewGraphQl':
[Progress: 1399 / 1473]
Module 'Magento_AwsS3':
[Progress: 1400 / 1473]
Module 'Magento_Rss':
[Progress: 1401 / 1473]
Module 'Magento_PageBuilderAdminAnalytics':
[Progress: 1402 / 1473]
Module 'Magento_ServicesIdGraphQlServer':
[Progress: 1403 / 1473]
Module 'Magento_CatalogRuleConfigurable':
[Progress: 1404 / 1473]
Module 'Magento_SalesAnalytics':
[Progress: 1405 / 1473]
Module 'Magento_ServicesIdLayout':
[Progress: 1406 / 1473]
Module 'Magento_SalesGraphQl':
[Progress: 1407 / 1473]
Module 'Magento_SalesInventory':
[Progress: 1408 / 1473]
Module 'Magento_OfflineShipping':
[Progress: 1409 / 1473]
Module 'Magento_SalesRuleGraphQl':
[Progress: 1410 / 1473]
Module 'Magento_ConfigurableProductSales':
[Progress: 1411 / 1473]
Module 'Magento_UrlRewrite':
[Progress: 1412 / 1473]
Module 'Magento_UrlRewriteGraphQl':
[Progress: 1413 / 1473]
Module 'Magento_CustomerAnalytics':
[Progress: 1414 / 1473]
Module 'Magento_Securitytxt':
[Progress: 1415 / 1473]
Module 'Magento_SendFriend':
[Progress: 1416 / 1473]
Module 'Magento_SendFriendGraphQl':
[Progress: 1417 / 1473]
Module 'Magento_PaymentServicesBase':
[Progress: 1418 / 1473]
Module 'Magento_SaaSCommon':
[Progress: 1419 / 1473]
Module 'Magento_SalesDataExporter':
[Progress: 1420 / 1473]
Module 'Magento_StoreDataExporter':
[Progress: 1421 / 1473]
Module 'Magento_PaymentServicesPaypal':
[Progress: 1422 / 1473]
Module 'Magento_InventoryInStorePickupSalesAdminUi':
[Progress: 1423 / 1473]
Module 'Magento_AwsS3PageBuilder':
[Progress: 1424 / 1473]
Module 'Magento_AsyncConfig':
[Progress: 1425 / 1473]
Module 'Magento_PaymentServicesSaaSExport':
[Progress: 1426 / 1473]
Module 'Magento_CompareListGraphQl':
[Progress: 1427 / 1473]
Module 'Magento_Swagger':
[Progress: 1428 / 1473]
Module 'Magento_SwaggerWebapi':
[Progress: 1429 / 1473]
Module 'Magento_SwaggerWebapiAsync':
[Progress: 1430 / 1473]
Module 'Magento_Swatches':
[Progress: 1431 / 1473]
Module 'Magento_SwatchesGraphQl':
[Progress: 1432 / 1473]
Module 'Magento_SwatchesLayeredNavigation':
[Progress: 1433 / 1473]
Module 'Magento_Tax':
[Progress: 1434 / 1473]
Module 'Magento_TaxGraphQl':
[Progress: 1435 / 1473]
Module 'Magento_TaxImportExport':
[Progress: 1436 / 1473]
Module 'Magento_InventoryGraphQl':
[Progress: 1437 / 1473]
Module 'Magento_ThemeGraphQl':
[Progress: 1438 / 1473]
Module 'Magento_Translation':
[Progress: 1439 / 1473]
Module 'Magento_AdminAdobeImsTwoFactorAuth':
[Progress: 1440 / 1473]
Module 'Magento_GoogleOptimizer':
[Progress: 1441 / 1473]
Module 'Magento_Ups':
[Progress: 1442 / 1473]
Module 'Magento_SampleData':
[Progress: 1443 / 1473]
Module 'Magento_CatalogUrlRewriteGraphQl':
[Progress: 1444 / 1473]
Module 'Magento_AsynchronousOperations':
[Progress: 1445 / 1473]
Module 'Magento_Usps':
[Progress: 1446 / 1473]
Module 'Magento_InventoryConfigurableProductFrontendUi':
[Progress: 1447 / 1473]
Module 'Magento_PaypalCaptcha':
[Progress: 1448 / 1473]
Module 'Magento_VaultGraphQl':
[Progress: 1449 / 1473]
Module 'Magento_Version':
[Progress: 1450 / 1473]
Module 'Magento_InventoryInStorePickupWebapiExtension':
[Progress: 1451 / 1473]
Module 'Magento_WebapiAsync':
[Progress: 1452 / 1473]
Module 'Magento_WebapiSecurity':
[Progress: 1453 / 1473]
Module 'Magento_Weee':
[Progress: 1454 / 1473]
Module 'Magento_WeeeGraphQl':
[Progress: 1455 / 1473]
Module 'Magento_CurrencySymbol':
[Progress: 1456 / 1473]
Module 'Magento_Wishlist':
[Progress: 1457 / 1473]
Module 'Magento_WishlistAnalytics':
[Progress: 1458 / 1473]
Module 'Magento_WishlistGraphQl':
[Progress: 1459 / 1473]
Module 'PayPal_Braintree':
[Progress: 1460 / 1473]
Module 'PayPal_BraintreeCustomerBalance':
[Progress: 1461 / 1473]
Module 'PayPal_BraintreeGiftCard':
[Progress: 1462 / 1473]
Module 'PayPal_BraintreeGiftCardAccount':
[Progress: 1463 / 1473]
Module 'PayPal_BraintreeGiftWrapping':
[Progress: 1464 / 1473]
Module 'PayPal_BraintreeGraphQl':
[Progress: 1465 / 1473]
Module 'PayPal_BraintreeReward':
[Progress: 1466 / 1473]
[Progress: 1467 / 1473]
Installing admin user...
[Progress: 1468 / 1473]
Caches clearing:
[SUCCESS]: Cache cleared successfully
[Progress: 1469 / 1473]
Disabling Maintenance Mode:
[Progress: 1470 / 1473]
Post installation file permissions check...
For security, remove write permissions from these directories: '/var/www/html/app/etc'
[Progress: 1471 / 1473]
Write installation date...
[Progress: 1472 / 1473]
Indexing...
14 indexer(s) are indexed.
[Progress: 1473 / 1473]
[SUCCESS]: Magento installation complete.
[SUCCESS]: Magento Admin URI: /admin
Nothing to import.
Copying files from container to host after install...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 

Completed copying all files from container to host
Forcing deploy of static content to speed up initial requests...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 

Deploy using quick strategy
frontend/Magento/blank/en_US            1908/1908           ============================ 100%   7 secs              
adminhtml/Magento/backend/en_US         2543/2543           ============================ 100%   9 secs              
frontend/Magento/luma/en_US             1924/1924           ============================ 100%   8 secs

Execution time: 26.238594055176
Re-indexing with Elasticsearch...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Stock index has been rebuilt successfully in 00:00:00
Design Config Grid index has been rebuilt successfully in 00:00:00
Customer Grid index has been rebuilt successfully in 00:00:00
Category Products index has been rebuilt successfully in 00:00:00
Product Categories index has been rebuilt successfully in 00:00:00
Catalog Rule Product index has been rebuilt successfully in 00:00:00
Product EAV index has been rebuilt successfully in 00:00:00
Inventory index has been rebuilt successfully in 00:00:00
Product Price index has been rebuilt successfully in 00:00:00
Catalog Product Rule index has been rebuilt successfully in 00:00:00
Catalog Search index has been rebuilt successfully in 00:00:00
Sales Order Feed index has been rebuilt successfully in 00:00:00
Sales Order Statuses Feed index has been rebuilt successfully in 00:00:00
Stores Feed index has been rebuilt successfully in 00:00:00
Setting basic URL and generating SSL certificate...
Set https://magento.test/ to web/secure/base_url and web/unsecure/base_url
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Value was saved.
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Value was saved.
Generating SSL certificate...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
cat: can't open '/root/.local/share/mkcert/rootCA.pem': No such file or directory
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
Created a new local CA 💥
The local CA is now installed in the system trust store! ⚡️

WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
System password requested to install certificate authority on host...
Password:
Sorry, try again.
Password:
{"policies": {"Certificates": {"ImportEnterpriseRoots": true}}}
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 

Created a new certificate valid for the following names 📜
 - "magento.test"

The certificate is at "nginx.crt" and the key at "nginx.key" ✅

It will expire on 28 October 2027 🗓

Moving key and cert to /etc/nginx/certs/...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Restarting containers to apply updates...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
[+] Running 7/7
 ⠿ Container magento_mailcatcher_1  Stopped                                                                                                                                                   0.4s
 ⠿ Container magento_app_1          Stopped                                                                                                                                                   0.5s
 ⠿ Container magento_phpfpm_1       Stopped                                                                                                                                                   0.2s
 ⠿ Container magento_db_1           Stopped                                                                                                                                                   1.1s
 ⠿ Container magento_opensearch_1   Stopped                                                                                                                                                  10.6s
 ⠿ Container magento_redis_1        Stopped                                                                                                                                                   0.4s
 ⠿ Container magento_rabbitmq_1     Stopped                                                                                                                                                   1.5s
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
[+] Running 8/8
 ⠿ Container magento_mailcatcher_1  Started                                                                                                                                                   1.2s
 ⠿ Container magento_opensearch_1   Started                                                                                                                                                   2.1s
 ⠿ Container magento_db_1           Started                                                                                                                                                   1.6s
 ⠿ Container magento_redis_1        Started                                                                                                                                                   1.5s
 ⠿ Container magento_rabbitmq_1     Started                                                                                                                                                   1.8s
 ⠿ Container magento_phpmyadmin_1   Started                                                                                                                                                   3.1s
 ⠿ Container magento_phpfpm_1       Started                                                                                                                                                  23.9s
 ⠿ Container magento_app_1          Started                                                                                                                                                  25.1s
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Installing devtools metapackage, just a moment...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
Devtools installed.
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
Fixing owner and permissions...
Fixing filesystem ownerships...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
Filesystem ownerships fixed.
Fixing filesystem permissions...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Filesystem permissions fixed.
Clearing the cache to apply updates...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Flushed cache types:
config
layout
block_html
collections
reflection
db_ddl
compiled_config
eav
customer_notification
config_integration
config_integration_api
graphql_query_resolver_result
full_page
config_webservice
translate
Installing cron, run 'bin/cron start' to enable...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
Crontab has been generated and saved
Turning on developer mode...
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
Enabled developer mode.
Docker development environment setup complete.
You may now access your Magento instance at https://magento.test/
You may now access your Magento backend instance at https://magento.test/admin/
Use the following default credentials to log in:
Username: 
Password: 
```

Load the sample data using: `bin/magento sampledata:deploy && bin/magento setup:upgrade`

```
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
./composer.json has been updated
Running composer update magento/module-bundle-sample-data magento/module-theme-sample-data magento/module-wishlist-sample-data magento/module-sales-sample-data magento/module-tax-sample-data magento/module-catalog-sample-data magento/module-widget-sample-data magento/module-cms-sample-data magento/module-customer-sample-data magento/module-downloadable-sample-data magento/module-review-sample-data magento/module-catalog-rule-sample-data magento/module-configurable-sample-data magento/module-product-links-sample-data magento/module-sales-rule-sample-data magento/module-msrp-sample-data magento/module-grouped-product-sample-data magento/module-swatches-sample-data magento/module-offline-shipping-sample-data magento/sample-data-media
Loading composer repositories with package information
Updating dependencies
Lock file operations: 20 installs, 0 updates, 0 removals
  - Locking magento/module-bundle-sample-data (100.4.4)
  - Locking magento/module-catalog-rule-sample-data (100.4.4)
  - Locking magento/module-catalog-sample-data (100.4.4)
  - Locking magento/module-cms-sample-data (100.4.4)
  - Locking magento/module-configurable-sample-data (100.4.4)
  - Locking magento/module-customer-sample-data (100.4.4)
  - Locking magento/module-downloadable-sample-data (100.4.4)
  - Locking magento/module-grouped-product-sample-data (100.4.4)
  - Locking magento/module-msrp-sample-data (100.4.4)
  - Locking magento/module-offline-shipping-sample-data (100.4.4)
  - Locking magento/module-product-links-sample-data (100.4.4)
  - Locking magento/module-review-sample-data (100.4.4)
  - Locking magento/module-sales-rule-sample-data (100.4.4)
  - Locking magento/module-sales-sample-data (100.4.4)
  - Locking magento/module-swatches-sample-data (100.4.4)
  - Locking magento/module-tax-sample-data (100.4.4)
  - Locking magento/module-theme-sample-data (100.4.4)
  - Locking magento/module-widget-sample-data (100.4.4)
  - Locking magento/module-wishlist-sample-data (100.4.4)
  - Locking magento/sample-data-media (100.4.0)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 20 installs, 0 updates, 0 removals
  - Downloading magento/module-catalog-sample-data (100.4.4)
  - Downloading magento/module-bundle-sample-data (100.4.4)
  - Downloading magento/module-theme-sample-data (100.4.4)
  - Downloading magento/module-cms-sample-data (100.4.4)
  - Downloading magento/module-customer-sample-data (100.4.4)
  - Downloading magento/module-downloadable-sample-data (100.4.4)
  - Downloading magento/module-grouped-product-sample-data (100.4.4)
  - Downloading magento/module-msrp-sample-data (100.4.4)
  - Downloading magento/module-offline-shipping-sample-data (100.4.4)
  - Downloading magento/module-product-links-sample-data (100.4.4)
  - Downloading magento/module-review-sample-data (100.4.4)
  - Downloading magento/module-catalog-rule-sample-data (100.4.4)
  - Downloading magento/module-sales-rule-sample-data (100.4.4)
  - Downloading magento/module-configurable-sample-data (100.4.4)
  - Downloading magento/module-sales-sample-data (100.4.4)
  - Downloading magento/module-swatches-sample-data (100.4.4)
  - Downloading magento/module-tax-sample-data (100.4.4)
  - Downloading magento/module-widget-sample-data (100.4.4)
  - Downloading magento/module-wishlist-sample-data (100.4.4)
  - Downloading magento/sample-data-media (100.4.0)
  - Installing magento/module-catalog-sample-data (100.4.4): Extracting archive
  - Installing magento/module-bundle-sample-data (100.4.4): Extracting archive
  - Installing magento/module-theme-sample-data (100.4.4): Extracting archive
  - Installing magento/module-cms-sample-data (100.4.4): Extracting archive
  - Installing magento/module-customer-sample-data (100.4.4): Extracting archive
  - Installing magento/module-downloadable-sample-data (100.4.4): Extracting archive
  - Installing magento/module-grouped-product-sample-data (100.4.4): Extracting archive
  - Installing magento/module-msrp-sample-data (100.4.4): Extracting archive
  - Installing magento/module-offline-shipping-sample-data (100.4.4): Extracting archive
  - Installing magento/module-product-links-sample-data (100.4.4): Extracting archive
  - Installing magento/module-review-sample-data (100.4.4): Extracting archive
  - Installing magento/module-catalog-rule-sample-data (100.4.4): Extracting archive
  - Installing magento/module-sales-rule-sample-data (100.4.4): Extracting archive
  - Installing magento/module-configurable-sample-data (100.4.4): Extracting archive
  - Installing magento/module-sales-sample-data (100.4.4): Extracting archive
  - Installing magento/module-swatches-sample-data (100.4.4): Extracting archive
  - Installing magento/module-tax-sample-data (100.4.4): Extracting archive
  - Installing magento/module-widget-sample-data (100.4.4): Extracting archive
  - Installing magento/module-wishlist-sample-data (100.4.4): Extracting archive
  - Installing magento/sample-data-media (100.4.0): Extracting archive
<warning>Package laminas/laminas-config is abandoned, you should avoid using it. No replacement was suggested.</warning>
<warning>Package laminas/laminas-json is abandoned, you should avoid using it. No replacement was suggested.</warning>
<warning>Package laminas/laminas-loader is abandoned, you should avoid using it. No replacement was suggested.</warning>
<warning>Package laminas/laminas-text is abandoned, you should avoid using it. No replacement was suggested.</warning>
Generating autoload files
137 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Sample data modules have been added via composer. Please run bin/magento setup:upgrade
WARN[0000] The ES_HOST variable is not set. Defaulting to a blank string. 
WARN[0000] The index.blocks.read_only_allow_delete variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_ID variable is not set. Defaulting to a blank string. 
WARN[0000] The BLACKFIRE_CLIENT_TOKEN variable is not set. Defaulting to a blank string. 
[SUCCESS]: Cache types config flushed successfully
[SUCCESS]: Cache cleared successfully
File system cleanup:
/var/www/html/generated/code/Aws
/var/www/html/generated/code/Composer
/var/www/html/generated/code/Magento
/var/www/html/generated/code/PayPal
/var/www/html/generated/code/Psr
/var/www/html/generated/code/Symfony
The directory '/var/www/html/generated/metadata/' doesn't exist - skipping cleanup
/var/www/html/pub/static/deployed_version.txt
/var/www/html/pub/static/frontend
Updating modules:
Schema creation/updates:
Module 'Magento_Csp':
Module 'Magento_Store':
Module 'Magento_AdminAnalytics':
Module 'Magento_Directory':
Module 'Magento_AdminNotification':
Module 'Magento_AdobeIms':
Module 'Magento_AdobeImsApi':
Module 'Magento_AdobeStockAdminUi':
Module 'Magento_MediaGallery':
Module 'Magento_AdobeStockAssetApi':
Module 'Magento_AdobeStockClient':
Module 'Magento_AdobeStockClientApi':
Module 'Magento_AdobeStockImage':
Module 'Magento_Theme':
Module 'Magento_AdobeStockImageApi':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Security':
Module 'Magento_ApplicationPerformanceMonitor':
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
Module 'Magento_Config':
Module 'Magento_User':
Module 'Magento_Authorization':
Module 'Magento_Eav':
Module 'Magento_Customer':
Module 'Magento_AdminAdobeIms':
Module 'Magento_Backup':
Module 'Magento_Indexer':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_Variable':
Module 'Magento_CacheInvalidate':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_Rule':
Module 'Magento_Integration':
Module 'Magento_GraphQlResolverCache':
Module 'Magento_EavGraphQl':
Module 'Magento_Search':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogInventory':
Module 'Magento_CatalogPageBuilderAnalytics':
Module 'Magento_CatalogSearch':
Module 'Magento_Msrp':
Module 'Magento_CatalogRuleGraphQl':
Module 'Magento_Quote':
Module 'Magento_Bundle':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_StoreGraphQl':
Module 'Magento_MediaStorage':
Module 'Magento_Payment':
Module 'Magento_Sales':
Module 'Magento_CheckoutAgreementsGraphQl':
Module 'Magento_MediaGalleryUi':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsPageBuilderAnalytics':
Module 'Magento_Downloadable':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_CatalogGraphQl':
Module 'Magento_TwoFactorAuth':
Module 'Magento_Checkout':
Module 'Magento_UrlRewrite':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Tax':
Module 'Magento_Contact':
Module 'Magento_ContactGraphQl':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_GraphQlServer':
Module 'Magento_Widget':
Module 'Magento_Robots':
Module 'Magento_Analytics':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_Newsletter':
Module 'Magento_CustomerImportExport':
Module 'Magento_SampleData':
Module 'Magento_DataExporter':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_Dhl':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_GroupedProduct':
Module 'Magento_CustomerDownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_Weee':
Module 'Magento_CatalogSampleData':
Module 'Magento_CatalogCustomerGraphQl':
Module 'Magento_Elasticsearch':
Module 'Magento_Elasticsearch8':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Fedex':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageGraphQl':
Module 'Magento_GoogleAdwords':
Module 'Magento_GoogleAnalytics':
Module 'Magento_GoogleGtag':
Module 'Magento_Ui':
Module 'Magento_BundleGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GraphQlNewRelic':
Module 'Magento_CatalogCmsGraphQl':
Module 'Magento_AdminGraphQlServer':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedImportExport':
Module 'Magento_BundleSampleData':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_DownloadableImportExport':
Module 'Magento_CardinalCommerce':
Module 'Magento_InstantPurchase':
Module 'Magento_CatalogAnalytics':
Module 'Magento_IntegrationGraphQl':
Module 'Magento_Inventory':
Module 'Magento_InventoryAdminUi':
Module 'Magento_InventoryAdvancedCheckout':
Module 'Magento_InventoryApi':
Module 'Magento_InventoryBundleImportExport':
Module 'Magento_InventoryBundleProduct':
Module 'Magento_InventoryBundleProductAdminUi':
Module 'Magento_InventoryBundleProductIndexer':
Module 'Magento_InventoryCatalog':
Module 'Magento_InventorySales':
Module 'Magento_InventoryCatalogAdminUi':
Module 'Magento_InventoryCatalogApi':
Module 'Magento_InventoryCatalogFrontendUi':
Module 'Magento_InventoryCatalogRule':
Module 'Magento_InventoryCatalogSearch':
Module 'Magento_InventoryCatalogSearchBundleProduct':
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_InventoryConfigurableProduct':
Module 'Magento_InventoryConfigurableProductFrontendUi':
Module 'Magento_InventoryConfigurableProductIndexer':
Module 'Magento_InventoryConfiguration':
Module 'Magento_InventoryConfigurationApi':
Module 'Magento_InventoryDistanceBasedSourceSelection':
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
Module 'Magento_InventoryElasticsearch':
Module 'Magento_InventoryExportStockApi':
Module 'Magento_InventoryIndexer':
Module 'Magento_InventorySalesApi':
Module 'Magento_InventoryGroupedProduct':
Module 'Magento_InventoryGroupedProductAdminUi':
Module 'Magento_InventoryGroupedProductIndexer':
Module 'Magento_InventoryImportExport':
Module 'Magento_InventoryInStorePickupApi':
Module 'Magento_InventoryInStorePickupAdminUi':
Module 'Magento_InventorySourceSelectionApi':
Module 'Magento_InventoryInStorePickup':
Module 'Magento_InventoryInStorePickupGraphQl':
Module 'Magento_Shipping':
Module 'Magento_InventoryInStorePickupShippingApi':
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
Module 'Magento_InventoryInStorePickupSales':
Module 'Magento_InventoryInStorePickupSalesApi':
Module 'Magento_InventoryInStorePickupQuote':
Module 'Magento_InventoryInStorePickupShipping':
Module 'Magento_InventoryInStorePickupShippingAdminUi':
Module 'Magento_Multishipping':
Module 'Magento_Webapi':
Module 'Magento_InventoryCache':
Module 'Magento_InventoryLowQuantityNotification':
Module 'Magento_Reports':
Module 'Magento_InventoryLowQuantityNotificationApi':
Module 'Magento_InventoryMultiDimensionalIndexerApi':
Module 'Magento_InventoryProductAlert':
Module 'Magento_InventoryQuoteGraphQl':
Module 'Magento_InventoryRequisitionList':
Module 'Magento_InventoryReservations':
Module 'Magento_InventoryReservationCli':
Module 'Magento_InventoryReservationsApi':
Module 'Magento_InventoryExportStock':
Module 'Magento_InventorySalesAdminUi':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_InventorySalesAsyncOrder':
Module 'Magento_InventorySalesFrontendUi':
Module 'Magento_InventorySetupFixtureGenerator':
Module 'Magento_InventoryShipping':
Module 'Magento_InventoryShippingAdminUi':
Module 'Magento_InventorySourceDeductionApi':
Module 'Magento_InventorySourceSelection':
Module 'Magento_InventoryInStorePickupFrontend':
Module 'Magento_InventorySwatchesFrontendUi':
Module 'Magento_InventoryVisualMerchandiser':
Module 'Magento_InventoryWishlist':
Module 'Magento_JwtFrameworkAdapter':
Module 'Magento_JwtUserToken':
Module 'Magento_LayeredNavigation':
Module 'Magento_LoginAsCustomer':
Module 'Magento_LoginAsCustomerAdminUi':
Module 'Magento_LoginAsCustomerApi':
Module 'Magento_LoginAsCustomerAssistance':
Module 'Magento_LoginAsCustomerFrontendUi':
Module 'Magento_LoginAsCustomerGraphQl':
Module 'Magento_LoginAsCustomerLog':
Module 'Magento_LoginAsCustomerPageCache':
Module 'Magento_LoginAsCustomerQuote':
Module 'Magento_LoginAsCustomerSales':
Module 'Magento_Marketplace':
Module 'Magento_MediaContent':
Module 'Magento_MediaContentApi':
Module 'Magento_MediaContentCatalog':
Module 'Magento_MediaContentCms':
Module 'Magento_MediaContentSynchronization':
Module 'Magento_MediaContentSynchronizationApi':
Module 'Magento_MediaContentSynchronizationCatalog':
Module 'Magento_MediaContentSynchronizationCms':
Module 'Magento_AdobeStockAsset':
Module 'Magento_MediaGalleryApi':
Module 'Magento_MediaGalleryCatalog':
Module 'Magento_MediaGalleryCatalogIntegration':
Module 'Magento_MediaGalleryCatalogUi':
Module 'Magento_MediaGalleryCmsUi':
Module 'Magento_MediaGalleryIntegration':
Module 'Magento_MediaGalleryMetadata':
Module 'Magento_MediaGalleryMetadataApi':
Module 'Magento_MediaGalleryRenditions':
Module 'Magento_MediaGalleryRenditionsApi':
Module 'Magento_MediaGallerySynchronization':
Module 'Magento_MediaGallerySynchronizationApi':
Module 'Magento_MediaGallerySynchronizationMetadata':
Module 'Magento_AdobeStockImageAdminUi':
Module 'Magento_MediaGalleryUiApi':
Module 'Magento_CatalogWidget':
Module 'Magento_MessageQueue':
Module 'Magento_GroupedProductSampleData':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_DownloadableSampleData':
Module 'Magento_InventoryInStorePickupMultishipping':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_CustomerGraphQl':
Module 'Magento_NewsletterGraphQl':
Module 'Magento_OfflinePayments':
Module 'Magento_SalesRule':
Module 'Magento_OfflineShipping':
Module 'Magento_OpenSearch':
Module 'Magento_OrderCancellation':
Module 'Magento_OrderCancellationGraphQl':
Module 'Magento_OrderCancellationUi':
Module 'Magento_Sitemap':
Module 'Magento_PageBuilder':
Module 'Magento_PageBuilderAnalytics':
Module 'Magento_PageBuilderImageAttribute':
Module 'Magento_GraphQlCache':
Module 'Magento_ThemeSampleData':
Module 'Magento_PaymentGraphQl':
Module 'Magento_ServiceProxy':
Module 'Magento_Vault':
Module 'Magento_PaymentServicesDashboard':
Module 'Magento_PaymentServicesPaypalGraphQl':
Module 'Magento_QueryXml':
Module 'Magento_ServicesConnector':
Module 'Magento_Captcha':
Module 'Magento_Paypal':
Module 'Magento_Persistent':
Module 'Magento_ProductAlert':
Module 'Magento_ConfigurableSampleData':
Module 'Magento_ProductVideo':
Module 'Magento_ServicesId':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_QuoteAnalytics':
Module 'Magento_QuoteBundleOptions':
Module 'Magento_QuoteConfigurableOptions':
Module 'Magento_QuoteDownloadableLinks':
Module 'Magento_InventoryConfigurableProductAdminUi':
Module 'Magento_ReCaptchaAdminUi':
Module 'Magento_ReCaptchaCheckout':
Module 'Magento_ReCaptchaCheckoutSalesRule':
Module 'Magento_ReCaptchaContact':
Module 'Magento_ReCaptchaCustomer':
Module 'Magento_ReCaptchaFrontendUi':
Module 'Magento_ReCaptchaMigration':
Module 'Magento_ReCaptchaNewsletter':
Module 'Magento_ReCaptchaPaypal':
Module 'Magento_ReCaptchaResendConfirmationEmail':
Module 'Magento_ReCaptchaReview':
Module 'Magento_ReCaptchaSendFriend':
Module 'Magento_ReCaptchaStorePickup':
Module 'Magento_ReCaptchaUi':
Module 'Magento_ReCaptchaUser':
Module 'Magento_ReCaptchaValidation':
Module 'Magento_ReCaptchaValidationApi':
Module 'Magento_ReCaptchaVersion2Checkbox':
Module 'Magento_ReCaptchaVersion2Invisible':
Module 'Magento_ReCaptchaVersion3Invisible':
Module 'Magento_ReCaptchaWebapiApi':
Module 'Magento_ReCaptchaWebapiGraphQl':
Module 'Magento_ReCaptchaWebapiRest':
Module 'Magento_ReCaptchaWebapiUi':
Module 'Magento_ReCaptchaWishlist':
Module 'Magento_RelatedProductGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_RemoteStorage':
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
Module 'Magento_RequireJs':
Module 'Magento_Review':
Module 'Magento_ReviewAnalytics':
Module 'Magento_ReviewGraphQl':
Module 'Magento_ReviewSampleData':
Module 'Magento_AwsS3':
Module 'Magento_Rss':
Module 'Magento_PageBuilderAdminAnalytics':
Module 'Magento_ServicesIdGraphQlServer':
Module 'Magento_PaypalCaptcha':
Module 'Magento_SalesAnalytics':
Module 'Magento_ServicesIdLayout':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_OfflineShippingSampleData':
Module 'Magento_SalesRuleGraphQl':
Module 'Magento_CatalogRuleSampleData':
Module 'Magento_TaxSampleData':
Module 'Magento_CheckoutAgreements':
Module 'Magento_SalesRuleSampleData':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_CustomerAnalytics':
Module 'Magento_Securitytxt':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_PaymentServicesBase':
Module 'Magento_SaaSCommon':
Module 'Magento_SalesDataExporter':
Module 'Magento_StoreDataExporter':
Module 'Magento_PaymentServicesPaypal':
Module 'Magento_InventoryInStorePickupSalesAdminUi':
Module 'Magento_AwsS3PageBuilder':
Module 'Magento_AsyncConfig':
Module 'Magento_PaymentServicesSaaSExport':
Module 'Magento_CompareListGraphQl':
Module 'Magento_Swagger':
Module 'Magento_SwaggerWebapi':
Module 'Magento_SwaggerWebapiAsync':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_SwatchesSampleData':
Module 'Magento_MsrpSampleData':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_CustomerSampleData':
Module 'Magento_InventoryGraphQl':
Module 'Magento_ThemeGraphQl':
Module 'Magento_CmsSampleData':
Module 'Magento_Translation':
Module 'Magento_AdminAdobeImsTwoFactorAuth':
Module 'Magento_GoogleOptimizer':
Module 'Magento_Ups':
Module 'Magento_SalesSampleData':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_Usps':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_PaypalGraphQl':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_InventoryInStorePickupWebapiExtension':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_ProductLinksSampleData':
Module 'Magento_WeeeGraphQl':
Module 'Magento_CurrencySymbol':
Module 'Magento_WidgetSampleData':
Module 'Magento_Wishlist':
Module 'Magento_WishlistAnalytics':
Module 'Magento_WishlistGraphQl':
Module 'Magento_WishlistSampleData':
Module 'PayPal_Braintree':
Module 'PayPal_BraintreeCustomerBalance':
Module 'PayPal_BraintreeGiftCard':
Module 'PayPal_BraintreeGiftCardAccount':
Module 'PayPal_BraintreeGiftWrapping':
Module 'PayPal_BraintreeGraphQl':
Module 'PayPal_BraintreeReward':
Schema post-updates:
Module 'Magento_Csp':
Module 'Magento_Store':
Module 'Magento_AdminAnalytics':
Module 'Magento_Directory':
Module 'Magento_AdminNotification':
Module 'Magento_AdobeIms':
Module 'Magento_AdobeImsApi':
Module 'Magento_AdobeStockAdminUi':
Module 'Magento_MediaGallery':
Module 'Magento_AdobeStockAssetApi':
Module 'Magento_AdobeStockClient':
Module 'Magento_AdobeStockClientApi':
Module 'Magento_AdobeStockImage':
Module 'Magento_Theme':
Module 'Magento_AdobeStockImageApi':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Running schema recurring...
Module 'Magento_Security':
Module 'Magento_ApplicationPerformanceMonitor':
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
Module 'Magento_Config':
Module 'Magento_User':
Module 'Magento_Authorization':
Module 'Magento_Eav':
Module 'Magento_Customer':
Module 'Magento_AdminAdobeIms':
Module 'Magento_Backup':
Module 'Magento_Indexer':
Running schema recurring...
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_Variable':
Module 'Magento_CacheInvalidate':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Running schema recurring...
Module 'Magento_Rule':
Module 'Magento_Integration':
Running schema recurring...
Module 'Magento_GraphQlResolverCache':
Module 'Magento_EavGraphQl':
Module 'Magento_Search':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogInventory':
Running schema recurring...
Module 'Magento_CatalogPageBuilderAnalytics':
Module 'Magento_CatalogSearch':
Module 'Magento_Msrp':
Module 'Magento_CatalogRuleGraphQl':
Module 'Magento_Quote':
Module 'Magento_Bundle':
Running schema recurring...
Module 'Magento_SalesSequence':
Running schema recurring...
Module 'Magento_CatalogUrlRewrite':
Running schema recurring...
Module 'Magento_StoreGraphQl':
Module 'Magento_MediaStorage':
Module 'Magento_Payment':
Module 'Magento_Sales':
Module 'Magento_CheckoutAgreementsGraphQl':
Module 'Magento_MediaGalleryUi':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsPageBuilderAnalytics':
Module 'Magento_Downloadable':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_CatalogGraphQl':
Module 'Magento_TwoFactorAuth':
Module 'Magento_Checkout':
Module 'Magento_UrlRewrite':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ConfigurableProduct':
Running schema recurring...
Module 'Magento_Tax':
Module 'Magento_Contact':
Module 'Magento_ContactGraphQl':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Running schema recurring...
Module 'Magento_GraphQlServer':
Module 'Magento_Widget':
Module 'Magento_Robots':
Module 'Magento_Analytics':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_Newsletter':
Module 'Magento_CustomerImportExport':
Module 'Magento_SampleData':
Module 'Magento_DataExporter':
Running schema recurring...
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_Dhl':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_GroupedProduct':
Module 'Magento_CustomerDownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_Weee':
Running schema recurring...
Module 'Magento_CatalogSampleData':
Module 'Magento_CatalogCustomerGraphQl':
Module 'Magento_Elasticsearch':
Module 'Magento_Elasticsearch8':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Fedex':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageGraphQl':
Module 'Magento_GoogleAdwords':
Module 'Magento_GoogleAnalytics':
Module 'Magento_GoogleGtag':
Module 'Magento_Ui':
Module 'Magento_BundleGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GraphQlNewRelic':
Module 'Magento_CatalogCmsGraphQl':
Module 'Magento_AdminGraphQlServer':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedImportExport':
Module 'Magento_BundleSampleData':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_DownloadableImportExport':
Module 'Magento_CardinalCommerce':
Module 'Magento_InstantPurchase':
Module 'Magento_CatalogAnalytics':
Module 'Magento_IntegrationGraphQl':
Module 'Magento_Inventory':
Module 'Magento_InventoryAdminUi':
Module 'Magento_InventoryAdvancedCheckout':
Module 'Magento_InventoryApi':
Module 'Magento_InventoryBundleImportExport':
Module 'Magento_InventoryBundleProduct':
Module 'Magento_InventoryBundleProductAdminUi':
Module 'Magento_InventoryBundleProductIndexer':
Module 'Magento_InventoryCatalog':
Module 'Magento_InventorySales':
Module 'Magento_InventoryCatalogAdminUi':
Module 'Magento_InventoryCatalogApi':
Module 'Magento_InventoryCatalogFrontendUi':
Module 'Magento_InventoryCatalogRule':
Module 'Magento_InventoryCatalogSearch':
Module 'Magento_InventoryCatalogSearchBundleProduct':
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_InventoryConfigurableProduct':
Module 'Magento_InventoryConfigurableProductFrontendUi':
Module 'Magento_InventoryConfigurableProductIndexer':
Module 'Magento_InventoryConfiguration':
Module 'Magento_InventoryConfigurationApi':
Module 'Magento_InventoryDistanceBasedSourceSelection':
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
Module 'Magento_InventoryElasticsearch':
Module 'Magento_InventoryExportStockApi':
Module 'Magento_InventoryIndexer':
Module 'Magento_InventorySalesApi':
Module 'Magento_InventoryGroupedProduct':
Module 'Magento_InventoryGroupedProductAdminUi':
Module 'Magento_InventoryGroupedProductIndexer':
Module 'Magento_InventoryImportExport':
Module 'Magento_InventoryInStorePickupApi':
Module 'Magento_InventoryInStorePickupAdminUi':
Module 'Magento_InventorySourceSelectionApi':
Module 'Magento_InventoryInStorePickup':
Module 'Magento_InventoryInStorePickupGraphQl':
Module 'Magento_Shipping':
Module 'Magento_InventoryInStorePickupShippingApi':
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
Module 'Magento_InventoryInStorePickupSales':
Module 'Magento_InventoryInStorePickupSalesApi':
Module 'Magento_InventoryInStorePickupQuote':
Module 'Magento_InventoryInStorePickupShipping':
Module 'Magento_InventoryInStorePickupShippingAdminUi':
Module 'Magento_Multishipping':
Module 'Magento_Webapi':
Module 'Magento_InventoryCache':
Module 'Magento_InventoryLowQuantityNotification':
Module 'Magento_Reports':
Running schema recurring...
Module 'Magento_InventoryLowQuantityNotificationApi':
Module 'Magento_InventoryMultiDimensionalIndexerApi':
Module 'Magento_InventoryProductAlert':
Module 'Magento_InventoryQuoteGraphQl':
Module 'Magento_InventoryRequisitionList':
Module 'Magento_InventoryReservations':
Module 'Magento_InventoryReservationCli':
Module 'Magento_InventoryReservationsApi':
Module 'Magento_InventoryExportStock':
Module 'Magento_InventorySalesAdminUi':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_InventorySalesAsyncOrder':
Module 'Magento_InventorySalesFrontendUi':
Module 'Magento_InventorySetupFixtureGenerator':
Module 'Magento_InventoryShipping':
Module 'Magento_InventoryShippingAdminUi':
Module 'Magento_InventorySourceDeductionApi':
Module 'Magento_InventorySourceSelection':
Module 'Magento_InventoryInStorePickupFrontend':
Module 'Magento_InventorySwatchesFrontendUi':
Module 'Magento_InventoryVisualMerchandiser':
Module 'Magento_InventoryWishlist':
Module 'Magento_JwtFrameworkAdapter':
Module 'Magento_JwtUserToken':
Module 'Magento_LayeredNavigation':
Module 'Magento_LoginAsCustomer':
Module 'Magento_LoginAsCustomerAdminUi':
Module 'Magento_LoginAsCustomerApi':
Module 'Magento_LoginAsCustomerAssistance':
Module 'Magento_LoginAsCustomerFrontendUi':
Module 'Magento_LoginAsCustomerGraphQl':
Module 'Magento_LoginAsCustomerLog':
Module 'Magento_LoginAsCustomerPageCache':
Module 'Magento_LoginAsCustomerQuote':
Module 'Magento_LoginAsCustomerSales':
Module 'Magento_Marketplace':
Module 'Magento_MediaContent':
Module 'Magento_MediaContentApi':
Module 'Magento_MediaContentCatalog':
Module 'Magento_MediaContentCms':
Module 'Magento_MediaContentSynchronization':
Module 'Magento_MediaContentSynchronizationApi':
Module 'Magento_MediaContentSynchronizationCatalog':
Module 'Magento_MediaContentSynchronizationCms':
Module 'Magento_AdobeStockAsset':
Module 'Magento_MediaGalleryApi':
Module 'Magento_MediaGalleryCatalog':
Module 'Magento_MediaGalleryCatalogIntegration':
Module 'Magento_MediaGalleryCatalogUi':
Module 'Magento_MediaGalleryCmsUi':
Module 'Magento_MediaGalleryIntegration':
Module 'Magento_MediaGalleryMetadata':
Module 'Magento_MediaGalleryMetadataApi':
Module 'Magento_MediaGalleryRenditions':
Module 'Magento_MediaGalleryRenditionsApi':
Module 'Magento_MediaGallerySynchronization':
Module 'Magento_MediaGallerySynchronizationApi':
Module 'Magento_MediaGallerySynchronizationMetadata':
Module 'Magento_AdobeStockImageAdminUi':
Module 'Magento_MediaGalleryUiApi':
Module 'Magento_CatalogWidget':
Module 'Magento_MessageQueue':
Running schema recurring...
Module 'Magento_GroupedProductSampleData':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_DownloadableSampleData':
Module 'Magento_InventoryInStorePickupMultishipping':
Module 'Magento_MysqlMq':
Running schema recurring...
Module 'Magento_NewRelicReporting':
Module 'Magento_CustomerGraphQl':
Module 'Magento_NewsletterGraphQl':
Module 'Magento_OfflinePayments':
Module 'Magento_SalesRule':
Module 'Magento_OfflineShipping':
Module 'Magento_OpenSearch':
Module 'Magento_OrderCancellation':
Module 'Magento_OrderCancellationGraphQl':
Module 'Magento_OrderCancellationUi':
Module 'Magento_Sitemap':
Module 'Magento_PageBuilder':
Module 'Magento_PageBuilderAnalytics':
Module 'Magento_PageBuilderImageAttribute':
Module 'Magento_GraphQlCache':
Module 'Magento_ThemeSampleData':
Module 'Magento_PaymentGraphQl':
Module 'Magento_ServiceProxy':
Module 'Magento_Vault':
Module 'Magento_PaymentServicesDashboard':
Module 'Magento_PaymentServicesPaypalGraphQl':
Module 'Magento_QueryXml':
Module 'Magento_ServicesConnector':
Module 'Magento_Captcha':
Module 'Magento_Paypal':
Module 'Magento_Persistent':
Module 'Magento_ProductAlert':
Running schema recurring...
Module 'Magento_ConfigurableSampleData':
Module 'Magento_ProductVideo':
Module 'Magento_ServicesId':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_QuoteAnalytics':
Module 'Magento_QuoteBundleOptions':
Module 'Magento_QuoteConfigurableOptions':
Module 'Magento_QuoteDownloadableLinks':
Module 'Magento_InventoryConfigurableProductAdminUi':
Module 'Magento_ReCaptchaAdminUi':
Module 'Magento_ReCaptchaCheckout':
Module 'Magento_ReCaptchaCheckoutSalesRule':
Module 'Magento_ReCaptchaContact':
Module 'Magento_ReCaptchaCustomer':
Module 'Magento_ReCaptchaFrontendUi':
Module 'Magento_ReCaptchaMigration':
Module 'Magento_ReCaptchaNewsletter':
Module 'Magento_ReCaptchaPaypal':
Module 'Magento_ReCaptchaResendConfirmationEmail':
Module 'Magento_ReCaptchaReview':
Module 'Magento_ReCaptchaSendFriend':
Module 'Magento_ReCaptchaStorePickup':
Module 'Magento_ReCaptchaUi':
Module 'Magento_ReCaptchaUser':
Module 'Magento_ReCaptchaValidation':
Module 'Magento_ReCaptchaValidationApi':
Module 'Magento_ReCaptchaVersion2Checkbox':
Module 'Magento_ReCaptchaVersion2Invisible':
Module 'Magento_ReCaptchaVersion3Invisible':
Module 'Magento_ReCaptchaWebapiApi':
Module 'Magento_ReCaptchaWebapiGraphQl':
Module 'Magento_ReCaptchaWebapiRest':
Module 'Magento_ReCaptchaWebapiUi':
Module 'Magento_ReCaptchaWishlist':
Module 'Magento_RelatedProductGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_RemoteStorage':
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
Module 'Magento_RequireJs':
Module 'Magento_Review':
Module 'Magento_ReviewAnalytics':
Module 'Magento_ReviewGraphQl':
Module 'Magento_ReviewSampleData':
Module 'Magento_AwsS3':
Module 'Magento_Rss':
Module 'Magento_PageBuilderAdminAnalytics':
Module 'Magento_ServicesIdGraphQlServer':
Module 'Magento_PaypalCaptcha':
Module 'Magento_SalesAnalytics':
Module 'Magento_ServicesIdLayout':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_OfflineShippingSampleData':
Module 'Magento_SalesRuleGraphQl':
Module 'Magento_CatalogRuleSampleData':
Module 'Magento_TaxSampleData':
Module 'Magento_CheckoutAgreements':
Module 'Magento_SalesRuleSampleData':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_CustomerAnalytics':
Module 'Magento_Securitytxt':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_PaymentServicesBase':
Module 'Magento_SaaSCommon':
Module 'Magento_SalesDataExporter':
Module 'Magento_StoreDataExporter':
Module 'Magento_PaymentServicesPaypal':
Module 'Magento_InventoryInStorePickupSalesAdminUi':
Module 'Magento_AwsS3PageBuilder':
Module 'Magento_AsyncConfig':
Module 'Magento_PaymentServicesSaaSExport':
Module 'Magento_CompareListGraphQl':
Module 'Magento_Swagger':
Module 'Magento_SwaggerWebapi':
Module 'Magento_SwaggerWebapiAsync':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_SwatchesSampleData':
Module 'Magento_MsrpSampleData':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_CustomerSampleData':
Module 'Magento_InventoryGraphQl':
Module 'Magento_ThemeGraphQl':
Module 'Magento_CmsSampleData':
Module 'Magento_Translation':
Module 'Magento_AdminAdobeImsTwoFactorAuth':
Module 'Magento_GoogleOptimizer':
Module 'Magento_Ups':
Module 'Magento_SalesSampleData':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_Usps':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_PaypalGraphQl':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_InventoryInStorePickupWebapiExtension':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_ProductLinksSampleData':
Module 'Magento_WeeeGraphQl':
Module 'Magento_CurrencySymbol':
Module 'Magento_WidgetSampleData':
Module 'Magento_Wishlist':
Running schema recurring...
Module 'Magento_WishlistAnalytics':
Module 'Magento_WishlistGraphQl':
Module 'Magento_WishlistSampleData':
Module 'PayPal_Braintree':
Module 'PayPal_BraintreeCustomerBalance':
Module 'PayPal_BraintreeGiftCard':
Module 'PayPal_BraintreeGiftCardAccount':
Module 'PayPal_BraintreeGiftWrapping':
Module 'PayPal_BraintreeGraphQl':
Module 'PayPal_BraintreeReward':
[SUCCESS]: Cache cleared successfully
Data install/update:
Module 'Magento_Csp':
Module 'Magento_Store':
Module 'Magento_AdminAnalytics':
Module 'Magento_Directory':
Module 'Magento_AdminNotification':
Module 'Magento_AdobeIms':
Module 'Magento_AdobeImsApi':
Module 'Magento_AdobeStockAdminUi':
Module 'Magento_MediaGallery':
Module 'Magento_AdobeStockAssetApi':
Module 'Magento_AdobeStockClient':
Module 'Magento_AdobeStockClientApi':
Module 'Magento_AdobeStockImage':
Module 'Magento_Theme':
Module 'Magento_AdobeStockImageApi':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Security':
Module 'Magento_ApplicationPerformanceMonitor':
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
Module 'Magento_Config':
Module 'Magento_User':
Module 'Magento_Authorization':
Module 'Magento_Eav':
Module 'Magento_Customer':
Module 'Magento_AdminAdobeIms':
Module 'Magento_Backup':
Module 'Magento_Indexer':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_Variable':
Module 'Magento_CacheInvalidate':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_Rule':
Module 'Magento_Integration':
Module 'Magento_GraphQlResolverCache':
Module 'Magento_EavGraphQl':
Module 'Magento_Search':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogInventory':
Module 'Magento_CatalogPageBuilderAnalytics':
Module 'Magento_CatalogSearch':
Module 'Magento_Msrp':
Module 'Magento_CatalogRuleGraphQl':
Module 'Magento_Quote':
Module 'Magento_Bundle':
Module 'Magento_SalesSequence':
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_StoreGraphQl':
Module 'Magento_MediaStorage':
Module 'Magento_Payment':
Module 'Magento_Sales':
Module 'Magento_CheckoutAgreementsGraphQl':
Module 'Magento_MediaGalleryUi':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsPageBuilderAnalytics':
Module 'Magento_Downloadable':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_CatalogGraphQl':
Module 'Magento_TwoFactorAuth':
Module 'Magento_Checkout':
Module 'Magento_UrlRewrite':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Tax':
Module 'Magento_Contact':
Module 'Magento_ContactGraphQl':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_GraphQlServer':
Module 'Magento_Widget':
Module 'Magento_Robots':
Module 'Magento_Analytics':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_Newsletter':
Module 'Magento_CustomerImportExport':
Module 'Magento_SampleData':
Module 'Magento_DataExporter':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_Dhl':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_GroupedProduct':
Module 'Magento_CustomerDownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_Weee':
Module 'Magento_CatalogSampleData':
Module 'Magento_CatalogCustomerGraphQl':
Module 'Magento_Elasticsearch':
Module 'Magento_Elasticsearch8':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Fedex':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageGraphQl':
Module 'Magento_GoogleAdwords':
Module 'Magento_GoogleAnalytics':
Module 'Magento_GoogleGtag':
Module 'Magento_Ui':
Module 'Magento_BundleGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GraphQlNewRelic':
Module 'Magento_CatalogCmsGraphQl':
Module 'Magento_AdminGraphQlServer':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedImportExport':
Module 'Magento_BundleSampleData':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_DownloadableImportExport':
Module 'Magento_CardinalCommerce':
Module 'Magento_InstantPurchase':
Module 'Magento_CatalogAnalytics':
Module 'Magento_IntegrationGraphQl':
Module 'Magento_Inventory':
Module 'Magento_InventoryAdminUi':
Module 'Magento_InventoryAdvancedCheckout':
Module 'Magento_InventoryApi':
Module 'Magento_InventoryBundleImportExport':
Module 'Magento_InventoryBundleProduct':
Module 'Magento_InventoryBundleProductAdminUi':
Module 'Magento_InventoryBundleProductIndexer':
Module 'Magento_InventoryCatalog':
Module 'Magento_InventorySales':
Module 'Magento_InventoryCatalogAdminUi':
Module 'Magento_InventoryCatalogApi':
Module 'Magento_InventoryCatalogFrontendUi':
Module 'Magento_InventoryCatalogRule':
Module 'Magento_InventoryCatalogSearch':
Module 'Magento_InventoryCatalogSearchBundleProduct':
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_InventoryConfigurableProduct':
Module 'Magento_InventoryConfigurableProductFrontendUi':
Module 'Magento_InventoryConfigurableProductIndexer':
Module 'Magento_InventoryConfiguration':
Module 'Magento_InventoryConfigurationApi':
Module 'Magento_InventoryDistanceBasedSourceSelection':
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
Module 'Magento_InventoryElasticsearch':
Module 'Magento_InventoryExportStockApi':
Module 'Magento_InventoryIndexer':
Module 'Magento_InventorySalesApi':
Module 'Magento_InventoryGroupedProduct':
Module 'Magento_InventoryGroupedProductAdminUi':
Module 'Magento_InventoryGroupedProductIndexer':
Module 'Magento_InventoryImportExport':
Module 'Magento_InventoryInStorePickupApi':
Module 'Magento_InventoryInStorePickupAdminUi':
Module 'Magento_InventorySourceSelectionApi':
Module 'Magento_InventoryInStorePickup':
Module 'Magento_InventoryInStorePickupGraphQl':
Module 'Magento_Shipping':
Module 'Magento_InventoryInStorePickupShippingApi':
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
Module 'Magento_InventoryInStorePickupSales':
Module 'Magento_InventoryInStorePickupSalesApi':
Module 'Magento_InventoryInStorePickupQuote':
Module 'Magento_InventoryInStorePickupShipping':
Module 'Magento_InventoryInStorePickupShippingAdminUi':
Module 'Magento_Multishipping':
Module 'Magento_Webapi':
Module 'Magento_InventoryCache':
Module 'Magento_InventoryLowQuantityNotification':
Module 'Magento_Reports':
Module 'Magento_InventoryLowQuantityNotificationApi':
Module 'Magento_InventoryMultiDimensionalIndexerApi':
Module 'Magento_InventoryProductAlert':
Module 'Magento_InventoryQuoteGraphQl':
Module 'Magento_InventoryRequisitionList':
Module 'Magento_InventoryReservations':
Module 'Magento_InventoryReservationCli':
Module 'Magento_InventoryReservationsApi':
Module 'Magento_InventoryExportStock':
Module 'Magento_InventorySalesAdminUi':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_InventorySalesAsyncOrder':
Module 'Magento_InventorySalesFrontendUi':
Module 'Magento_InventorySetupFixtureGenerator':
Module 'Magento_InventoryShipping':
Module 'Magento_InventoryShippingAdminUi':
Module 'Magento_InventorySourceDeductionApi':
Module 'Magento_InventorySourceSelection':
Module 'Magento_InventoryInStorePickupFrontend':
Module 'Magento_InventorySwatchesFrontendUi':
Module 'Magento_InventoryVisualMerchandiser':
Module 'Magento_InventoryWishlist':
Module 'Magento_JwtFrameworkAdapter':
Module 'Magento_JwtUserToken':
Module 'Magento_LayeredNavigation':
Module 'Magento_LoginAsCustomer':
Module 'Magento_LoginAsCustomerAdminUi':
Module 'Magento_LoginAsCustomerApi':
Module 'Magento_LoginAsCustomerAssistance':
Module 'Magento_LoginAsCustomerFrontendUi':
Module 'Magento_LoginAsCustomerGraphQl':
Module 'Magento_LoginAsCustomerLog':
Module 'Magento_LoginAsCustomerPageCache':
Module 'Magento_LoginAsCustomerQuote':
Module 'Magento_LoginAsCustomerSales':
Module 'Magento_Marketplace':
Module 'Magento_MediaContent':
Module 'Magento_MediaContentApi':
Module 'Magento_MediaContentCatalog':
Module 'Magento_MediaContentCms':
Module 'Magento_MediaContentSynchronization':
Module 'Magento_MediaContentSynchronizationApi':
Module 'Magento_MediaContentSynchronizationCatalog':
Module 'Magento_MediaContentSynchronizationCms':
Module 'Magento_AdobeStockAsset':
Module 'Magento_MediaGalleryApi':
Module 'Magento_MediaGalleryCatalog':
Module 'Magento_MediaGalleryCatalogIntegration':
Module 'Magento_MediaGalleryCatalogUi':
Module 'Magento_MediaGalleryCmsUi':
Module 'Magento_MediaGalleryIntegration':
Module 'Magento_MediaGalleryMetadata':
Module 'Magento_MediaGalleryMetadataApi':
Module 'Magento_MediaGalleryRenditions':
Module 'Magento_MediaGalleryRenditionsApi':
Module 'Magento_MediaGallerySynchronization':
Module 'Magento_MediaGallerySynchronizationApi':
Module 'Magento_MediaGallerySynchronizationMetadata':
Module 'Magento_AdobeStockImageAdminUi':
Module 'Magento_MediaGalleryUiApi':
Module 'Magento_CatalogWidget':
Module 'Magento_MessageQueue':
Module 'Magento_GroupedProductSampleData':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_DownloadableSampleData':
Module 'Magento_InventoryInStorePickupMultishipping':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_CustomerGraphQl':
Module 'Magento_NewsletterGraphQl':
Module 'Magento_OfflinePayments':
Module 'Magento_SalesRule':
Module 'Magento_OfflineShipping':
Module 'Magento_OpenSearch':
Module 'Magento_OrderCancellation':
Module 'Magento_OrderCancellationGraphQl':
Module 'Magento_OrderCancellationUi':
Module 'Magento_Sitemap':
Module 'Magento_PageBuilder':
Module 'Magento_PageBuilderAnalytics':
Module 'Magento_PageBuilderImageAttribute':
Module 'Magento_GraphQlCache':
Module 'Magento_ThemeSampleData':
Module 'Magento_PaymentGraphQl':
Module 'Magento_ServiceProxy':
Module 'Magento_Vault':
Module 'Magento_PaymentServicesDashboard':
Module 'Magento_PaymentServicesPaypalGraphQl':
Module 'Magento_QueryXml':
Module 'Magento_ServicesConnector':
Module 'Magento_Captcha':
Module 'Magento_Paypal':
Module 'Magento_Persistent':
Module 'Magento_ProductAlert':
Module 'Magento_ConfigurableSampleData':
Module 'Magento_ProductVideo':
Module 'Magento_ServicesId':
Module 'Magento_ConfigurableImportExport':
Module 'Magento_QuoteAnalytics':
Module 'Magento_QuoteBundleOptions':
Module 'Magento_QuoteConfigurableOptions':
Module 'Magento_QuoteDownloadableLinks':
Module 'Magento_InventoryConfigurableProductAdminUi':
Module 'Magento_ReCaptchaAdminUi':
Module 'Magento_ReCaptchaCheckout':
Module 'Magento_ReCaptchaCheckoutSalesRule':
Module 'Magento_ReCaptchaContact':
Module 'Magento_ReCaptchaCustomer':
Module 'Magento_ReCaptchaFrontendUi':
Module 'Magento_ReCaptchaMigration':
Module 'Magento_ReCaptchaNewsletter':
Module 'Magento_ReCaptchaPaypal':
Module 'Magento_ReCaptchaResendConfirmationEmail':
Module 'Magento_ReCaptchaReview':
Module 'Magento_ReCaptchaSendFriend':
Module 'Magento_ReCaptchaStorePickup':
Module 'Magento_ReCaptchaUi':
Module 'Magento_ReCaptchaUser':
Module 'Magento_ReCaptchaValidation':
Module 'Magento_ReCaptchaValidationApi':
Module 'Magento_ReCaptchaVersion2Checkbox':
Module 'Magento_ReCaptchaVersion2Invisible':
Module 'Magento_ReCaptchaVersion3Invisible':
Module 'Magento_ReCaptchaWebapiApi':
Module 'Magento_ReCaptchaWebapiGraphQl':
Module 'Magento_ReCaptchaWebapiRest':
Module 'Magento_ReCaptchaWebapiUi':
Module 'Magento_ReCaptchaWishlist':
Module 'Magento_RelatedProductGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_RemoteStorage':
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
Module 'Magento_RequireJs':
Module 'Magento_Review':
Module 'Magento_ReviewAnalytics':
Module 'Magento_ReviewGraphQl':
Module 'Magento_ReviewSampleData':
Module 'Magento_AwsS3':
Module 'Magento_Rss':
Module 'Magento_PageBuilderAdminAnalytics':
Module 'Magento_ServicesIdGraphQlServer':
Module 'Magento_PaypalCaptcha':
Module 'Magento_SalesAnalytics':
Module 'Magento_ServicesIdLayout':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_OfflineShippingSampleData':
Module 'Magento_SalesRuleGraphQl':
Module 'Magento_CatalogRuleSampleData':
Module 'Magento_TaxSampleData':
Module 'Magento_CheckoutAgreements':
Module 'Magento_SalesRuleSampleData':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_CustomerAnalytics':
Module 'Magento_Securitytxt':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_PaymentServicesBase':
Module 'Magento_SaaSCommon':
Module 'Magento_SalesDataExporter':
Module 'Magento_StoreDataExporter':
Module 'Magento_PaymentServicesPaypal':
Module 'Magento_InventoryInStorePickupSalesAdminUi':
Module 'Magento_AwsS3PageBuilder':
Module 'Magento_AsyncConfig':
Module 'Magento_PaymentServicesSaaSExport':
Module 'Magento_CompareListGraphQl':
Module 'Magento_Swagger':
Module 'Magento_SwaggerWebapi':
Module 'Magento_SwaggerWebapiAsync':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_SwatchesSampleData':
Module 'Magento_MsrpSampleData':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_CustomerSampleData':
Module 'Magento_InventoryGraphQl':
Module 'Magento_ThemeGraphQl':
Module 'Magento_CmsSampleData':
Module 'Magento_Translation':
Module 'Magento_AdminAdobeImsTwoFactorAuth':
Module 'Magento_GoogleOptimizer':
Module 'Magento_Ups':
Module 'Magento_SalesSampleData':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_Usps':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_PaypalGraphQl':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_InventoryInStorePickupWebapiExtension':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_ProductLinksSampleData':
Module 'Magento_WeeeGraphQl':
Module 'Magento_CurrencySymbol':
Module 'Magento_WidgetSampleData':
Module 'Magento_Wishlist':
Module 'Magento_WishlistAnalytics':
Module 'Magento_WishlistGraphQl':
Module 'Magento_WishlistSampleData':
Module 'PayPal_Braintree':
Module 'PayPal_BraintreeCustomerBalance':
Module 'PayPal_BraintreeGiftCard':
Module 'PayPal_BraintreeGiftCardAccount':
Module 'PayPal_BraintreeGiftWrapping':
Module 'PayPal_BraintreeGraphQl':
Module 'PayPal_BraintreeReward':
Data post-updates:
Module 'Magento_Csp':
Module 'Magento_Store':
Module 'Magento_AdminAnalytics':
Module 'Magento_Directory':
Module 'Magento_AdminNotification':
Module 'Magento_AdobeIms':
Module 'Magento_AdobeImsApi':
Module 'Magento_AdobeStockAdminUi':
Module 'Magento_MediaGallery':
Module 'Magento_AdobeStockAssetApi':
Module 'Magento_AdobeStockClient':
Module 'Magento_AdobeStockClientApi':
Module 'Magento_AdobeStockImage':
Module 'Magento_Theme':
Running data recurring...
Module 'Magento_AdobeStockImageApi':
Module 'Magento_AdvancedPricingImportExport':
Module 'Magento_Backend':
Module 'Magento_Amqp':
Module 'Magento_Security':
Module 'Magento_ApplicationPerformanceMonitor':
Module 'Magento_ApplicationPerformanceMonitorNewRelic':
Module 'Magento_Config':
Module 'Magento_User':
Module 'Magento_Authorization':
Module 'Magento_Eav':
Module 'Magento_Customer':
Running data recurring...
Module 'Magento_AdminAdobeIms':
Module 'Magento_Backup':
Module 'Magento_Indexer':
Module 'Magento_GraphQl':
Module 'Magento_BundleImportExport':
Module 'Magento_Variable':
Module 'Magento_CacheInvalidate':
Module 'Magento_Cms':
Module 'Magento_Catalog':
Module 'Magento_Rule':
Module 'Magento_Integration':
Module 'Magento_GraphQlResolverCache':
Module 'Magento_EavGraphQl':
Module 'Magento_Search':
Module 'Magento_CatalogImportExport':
Module 'Magento_CatalogRule':
Module 'Magento_CatalogInventory':
Module 'Magento_CatalogPageBuilderAnalytics':
Module 'Magento_CatalogSearch':
Module 'Magento_Msrp':
Module 'Magento_CatalogRuleGraphQl':
Module 'Magento_Quote':
Module 'Magento_Bundle':
Module 'Magento_SalesSequence':
Running data recurring...
Module 'Magento_CatalogUrlRewrite':
Module 'Magento_StoreGraphQl':
Module 'Magento_MediaStorage':
Module 'Magento_Payment':
Module 'Magento_Sales':
Module 'Magento_CheckoutAgreementsGraphQl':
Module 'Magento_MediaGalleryUi':
Module 'Magento_CmsGraphQl':
Module 'Magento_CmsPageBuilderAnalytics':
Module 'Magento_Downloadable':
Module 'Magento_CmsUrlRewrite':
Module 'Magento_CmsUrlRewriteGraphQl':
Module 'Magento_CatalogGraphQl':
Module 'Magento_TwoFactorAuth':
Module 'Magento_Checkout':
Module 'Magento_UrlRewrite':
Module 'Magento_QuoteGraphQl':
Module 'Magento_ConfigurableProduct':
Module 'Magento_Tax':
Module 'Magento_Contact':
Module 'Magento_ContactGraphQl':
Module 'Magento_Cookie':
Module 'Magento_Cron':
Module 'Magento_GraphQlServer':
Module 'Magento_Widget':
Module 'Magento_Robots':
Module 'Magento_Analytics':
Module 'Magento_DownloadableGraphQl':
Module 'Magento_Newsletter':
Module 'Magento_CustomerImportExport':
Module 'Magento_SampleData':
Module 'Magento_DataExporter':
Module 'Magento_Deploy':
Module 'Magento_Developer':
Module 'Magento_Dhl':
Module 'Magento_AdvancedSearch':
Module 'Magento_DirectoryGraphQl':
Module 'Magento_GroupedProduct':
Module 'Magento_CustomerDownloadableGraphQl':
Module 'Magento_ImportExport':
Module 'Magento_Weee':
Module 'Magento_CatalogSampleData':
Module 'Magento_CatalogCustomerGraphQl':
Module 'Magento_Elasticsearch':
Module 'Magento_Elasticsearch8':
Module 'Magento_Email':
Module 'Magento_EncryptionKey':
Module 'Magento_Fedex':
Module 'Magento_GiftMessage':
Module 'Magento_GiftMessageGraphQl':
Module 'Magento_GoogleAdwords':
Module 'Magento_GoogleAnalytics':
Module 'Magento_GoogleGtag':
Module 'Magento_Ui':
Module 'Magento_BundleGraphQl':
Module 'Magento_PageCache':
Module 'Magento_GraphQlNewRelic':
Module 'Magento_CatalogCmsGraphQl':
Module 'Magento_AdminGraphQlServer':
Module 'Magento_GroupedCatalogInventory':
Module 'Magento_GroupedImportExport':
Module 'Magento_BundleSampleData':
Module 'Magento_GroupedProductGraphQl':
Module 'Magento_CatalogRuleConfigurable':
Module 'Magento_DownloadableImportExport':
Module 'Magento_CardinalCommerce':
Module 'Magento_InstantPurchase':
Module 'Magento_CatalogAnalytics':
Module 'Magento_IntegrationGraphQl':
Module 'Magento_Inventory':
Module 'Magento_InventoryAdminUi':
Module 'Magento_InventoryAdvancedCheckout':
Module 'Magento_InventoryApi':
Module 'Magento_InventoryBundleImportExport':
Module 'Magento_InventoryBundleProduct':
Module 'Magento_InventoryBundleProductAdminUi':
Module 'Magento_InventoryBundleProductIndexer':
Module 'Magento_InventoryCatalog':
Module 'Magento_InventorySales':
Module 'Magento_InventoryCatalogAdminUi':
Module 'Magento_InventoryCatalogApi':
Module 'Magento_InventoryCatalogFrontendUi':
Module 'Magento_InventoryCatalogRule':
Module 'Magento_InventoryCatalogSearch':
Module 'Magento_InventoryCatalogSearchBundleProduct':
Module 'Magento_InventoryCatalogSearchConfigurableProduct':
Module 'Magento_ConfigurableProductGraphQl':
Module 'Magento_InventoryConfigurableProduct':
Module 'Magento_InventoryConfigurableProductFrontendUi':
Module 'Magento_InventoryConfigurableProductIndexer':
Module 'Magento_InventoryConfiguration':
Module 'Magento_InventoryConfigurationApi':
Module 'Magento_InventoryDistanceBasedSourceSelection':
Module 'Magento_InventoryDistanceBasedSourceSelectionAdminUi':
Module 'Magento_InventoryDistanceBasedSourceSelectionApi':
Module 'Magento_InventoryElasticsearch':
Module 'Magento_InventoryExportStockApi':
Module 'Magento_InventoryIndexer':
Module 'Magento_InventorySalesApi':
Module 'Magento_InventoryGroupedProduct':
Module 'Magento_InventoryGroupedProductAdminUi':
Module 'Magento_InventoryGroupedProductIndexer':
Module 'Magento_InventoryImportExport':
Module 'Magento_InventoryInStorePickupApi':
Module 'Magento_InventoryInStorePickupAdminUi':
Module 'Magento_InventorySourceSelectionApi':
Module 'Magento_InventoryInStorePickup':
Module 'Magento_InventoryInStorePickupGraphQl':
Module 'Magento_Shipping':
Module 'Magento_InventoryInStorePickupShippingApi':
Module 'Magento_InventoryInStorePickupQuoteGraphQl':
Module 'Magento_InventoryInStorePickupSales':
Module 'Magento_InventoryInStorePickupSalesApi':
Module 'Magento_InventoryInStorePickupQuote':
Module 'Magento_InventoryInStorePickupShipping':
Module 'Magento_InventoryInStorePickupShippingAdminUi':
Module 'Magento_Multishipping':
Module 'Magento_Webapi':
Module 'Magento_InventoryCache':
Module 'Magento_InventoryLowQuantityNotification':
Module 'Magento_Reports':
Module 'Magento_InventoryLowQuantityNotificationApi':
Module 'Magento_InventoryMultiDimensionalIndexerApi':
Module 'Magento_InventoryProductAlert':
Module 'Magento_InventoryQuoteGraphQl':
Module 'Magento_InventoryRequisitionList':
Module 'Magento_InventoryReservations':
Module 'Magento_InventoryReservationCli':
Module 'Magento_InventoryReservationsApi':
Module 'Magento_InventoryExportStock':
Module 'Magento_InventorySalesAdminUi':
Module 'Magento_CatalogInventoryGraphQl':
Module 'Magento_InventorySalesAsyncOrder':
Module 'Magento_InventorySalesFrontendUi':
Module 'Magento_InventorySetupFixtureGenerator':
Module 'Magento_InventoryShipping':
Module 'Magento_InventoryShippingAdminUi':
Module 'Magento_InventorySourceDeductionApi':
Module 'Magento_InventorySourceSelection':
Module 'Magento_InventoryInStorePickupFrontend':
Module 'Magento_InventorySwatchesFrontendUi':
Module 'Magento_InventoryVisualMerchandiser':
Module 'Magento_InventoryWishlist':
Module 'Magento_JwtFrameworkAdapter':
Module 'Magento_JwtUserToken':
Module 'Magento_LayeredNavigation':
Module 'Magento_LoginAsCustomer':
Module 'Magento_LoginAsCustomerAdminUi':
Module 'Magento_LoginAsCustomerApi':
Module 'Magento_LoginAsCustomerAssistance':
Module 'Magento_LoginAsCustomerFrontendUi':
Module 'Magento_LoginAsCustomerGraphQl':
Module 'Magento_LoginAsCustomerLog':
Module 'Magento_LoginAsCustomerPageCache':
Module 'Magento_LoginAsCustomerQuote':
Module 'Magento_LoginAsCustomerSales':
Module 'Magento_Marketplace':
Module 'Magento_MediaContent':
Module 'Magento_MediaContentApi':
Module 'Magento_MediaContentCatalog':
Module 'Magento_MediaContentCms':
Module 'Magento_MediaContentSynchronization':
Module 'Magento_MediaContentSynchronizationApi':
Module 'Magento_MediaContentSynchronizationCatalog':
Module 'Magento_MediaContentSynchronizationCms':
Module 'Magento_AdobeStockAsset':
Module 'Magento_MediaGalleryApi':
Module 'Magento_MediaGalleryCatalog':
Module 'Magento_MediaGalleryCatalogIntegration':
Module 'Magento_MediaGalleryCatalogUi':
Module 'Magento_MediaGalleryCmsUi':
Module 'Magento_MediaGalleryIntegration':
Module 'Magento_MediaGalleryMetadata':
Module 'Magento_MediaGalleryMetadataApi':
Module 'Magento_MediaGalleryRenditions':
Module 'Magento_MediaGalleryRenditionsApi':
Module 'Magento_MediaGallerySynchronization':
Module 'Magento_MediaGallerySynchronizationApi':
Module 'Magento_MediaGallerySynchronizationMetadata':
Module 'Magento_AdobeStockImageAdminUi':
Module 'Magento_MediaGalleryUiApi':
Module 'Magento_CatalogWidget':
Module 'Magento_MessageQueue':
Module 'Magento_GroupedProductSampleData':
Module 'Magento_MsrpConfigurableProduct':
Module 'Magento_MsrpGroupedProduct':
Module 'Magento_DownloadableSampleData':
Module 'Magento_InventoryInStorePickupMultishipping':
Module 'Magento_MysqlMq':
Module 'Magento_NewRelicReporting':
Module 'Magento_CustomerGraphQl':
Module 'Magento_NewsletterGraphQl':
Module 'Magento_OfflinePayments':
Module 'Magento_SalesRule':
Module 'Magento_OfflineShipping':
Module 'Magento_OpenSearch':
Module 'Magento_OrderCancellation':
Module 'Magento_OrderCancellationGraphQl':
Module 'Magento_OrderCancellationUi':
Module 'Magento_Sitemap':
Module 'Magento_PageBuilder':
Module 'Magento_PageBuilderAnalytics':
Module 'Magento_PageBuilderImageAttribute':
Module 'Magento_GraphQlCache':
Module 'Magento_ThemeSampleData':
Module 'Magento_PaymentGraphQl':
Module 'Magento_ServiceProxy':
Module 'Magento_Vault':
Module 'Magento_PaymentServicesDashboard':
Module 'Magento_PaymentServicesPaypalGraphQl':
Module 'Magento_QueryXml':
Module 'Magento_ServicesConnector':
Module 'Magento_Captcha':
Module 'Magento_Paypal':
Module 'Magento_Persistent':
Module 'Magento_ProductAlert':
Module 'Magento_ConfigurableSampleData':
Running data recurring...
Module 'Magento_ProductVideo':
Module 'Magento_ServicesId':
Running data recurring...
Module 'Magento_ConfigurableImportExport':
Module 'Magento_QuoteAnalytics':
Module 'Magento_QuoteBundleOptions':
Module 'Magento_QuoteConfigurableOptions':
Module 'Magento_QuoteDownloadableLinks':
Module 'Magento_InventoryConfigurableProductAdminUi':
Module 'Magento_ReCaptchaAdminUi':
Module 'Magento_ReCaptchaCheckout':
Module 'Magento_ReCaptchaCheckoutSalesRule':
Module 'Magento_ReCaptchaContact':
Module 'Magento_ReCaptchaCustomer':
Module 'Magento_ReCaptchaFrontendUi':
Module 'Magento_ReCaptchaMigration':
Module 'Magento_ReCaptchaNewsletter':
Module 'Magento_ReCaptchaPaypal':
Module 'Magento_ReCaptchaResendConfirmationEmail':
Module 'Magento_ReCaptchaReview':
Module 'Magento_ReCaptchaSendFriend':
Module 'Magento_ReCaptchaStorePickup':
Module 'Magento_ReCaptchaUi':
Module 'Magento_ReCaptchaUser':
Module 'Magento_ReCaptchaValidation':
Module 'Magento_ReCaptchaValidationApi':
Module 'Magento_ReCaptchaVersion2Checkbox':
Module 'Magento_ReCaptchaVersion2Invisible':
Module 'Magento_ReCaptchaVersion3Invisible':
Module 'Magento_ReCaptchaWebapiApi':
Module 'Magento_ReCaptchaWebapiGraphQl':
Module 'Magento_ReCaptchaWebapiRest':
Module 'Magento_ReCaptchaWebapiUi':
Module 'Magento_ReCaptchaWishlist':
Module 'Magento_RelatedProductGraphQl':
Module 'Magento_ReleaseNotification':
Module 'Magento_RemoteStorage':
Module 'Magento_InventoryLowQuantityNotificationAdminUi':
Module 'Magento_RequireJs':
Module 'Magento_Review':
Module 'Magento_ReviewAnalytics':
Module 'Magento_ReviewGraphQl':
Module 'Magento_ReviewSampleData':
Module 'Magento_AwsS3':
Module 'Magento_Rss':
Module 'Magento_PageBuilderAdminAnalytics':
Module 'Magento_ServicesIdGraphQlServer':
Module 'Magento_PaypalCaptcha':
Module 'Magento_SalesAnalytics':
Module 'Magento_ServicesIdLayout':
Module 'Magento_SalesGraphQl':
Module 'Magento_SalesInventory':
Module 'Magento_OfflineShippingSampleData':
Module 'Magento_SalesRuleGraphQl':
Module 'Magento_CatalogRuleSampleData':
Module 'Magento_TaxSampleData':
Module 'Magento_CheckoutAgreements':
Module 'Magento_SalesRuleSampleData':
Module 'Magento_UrlRewriteGraphQl':
Module 'Magento_CustomerAnalytics':
Module 'Magento_Securitytxt':
Module 'Magento_SendFriend':
Module 'Magento_SendFriendGraphQl':
Module 'Magento_PaymentServicesBase':
Module 'Magento_SaaSCommon':
Module 'Magento_SalesDataExporter':
Module 'Magento_StoreDataExporter':
Module 'Magento_PaymentServicesPaypal':
Module 'Magento_InventoryInStorePickupSalesAdminUi':
Module 'Magento_AwsS3PageBuilder':
Module 'Magento_AsyncConfig':
Module 'Magento_PaymentServicesSaaSExport':
Module 'Magento_CompareListGraphQl':
Module 'Magento_Swagger':
Module 'Magento_SwaggerWebapi':
Module 'Magento_SwaggerWebapiAsync':
Module 'Magento_Swatches':
Module 'Magento_SwatchesGraphQl':
Module 'Magento_SwatchesLayeredNavigation':
Module 'Magento_SwatchesSampleData':
Module 'Magento_MsrpSampleData':
Module 'Magento_TaxGraphQl':
Module 'Magento_TaxImportExport':
Module 'Magento_CustomerSampleData':
Module 'Magento_InventoryGraphQl':
Module 'Magento_ThemeGraphQl':
Module 'Magento_CmsSampleData':
Module 'Magento_Translation':
Module 'Magento_AdminAdobeImsTwoFactorAuth':
Module 'Magento_GoogleOptimizer':
Module 'Magento_Ups':
Module 'Magento_SalesSampleData':
Module 'Magento_CatalogUrlRewriteGraphQl':
Module 'Magento_AsynchronousOperations':
Module 'Magento_Usps':
Module 'Magento_ConfigurableProductSales':
Module 'Magento_PaypalGraphQl':
Module 'Magento_VaultGraphQl':
Module 'Magento_Version':
Module 'Magento_InventoryInStorePickupWebapiExtension':
Module 'Magento_WebapiAsync':
Module 'Magento_WebapiSecurity':
Module 'Magento_ProductLinksSampleData':
Module 'Magento_WeeeGraphQl':
Module 'Magento_CurrencySymbol':
Module 'Magento_WidgetSampleData':
Module 'Magento_Wishlist':
Module 'Magento_WishlistAnalytics':
Module 'Magento_WishlistGraphQl':
Module 'Magento_WishlistSampleData':
Module 'PayPal_Braintree':
Module 'PayPal_BraintreeCustomerBalance':
Module 'PayPal_BraintreeGiftCard':
Module 'PayPal_BraintreeGiftCardAccount':
Module 'PayPal_BraintreeGiftWrapping':
Module 'PayPal_BraintreeGraphQl':
Module 'PayPal_BraintreeReward':
Nothing to import.
Media files stored outside of 'Media Gallery Allowed' folders will not be available to the media gallery.
Please refer to Developer Guide for more details.
```

and magento.test should work!