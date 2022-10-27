JANE_VERSION = dev-next

install:
	composer require \
		jane-php/open-api-3:$(JANE_VERSION) \
		jane-php/open-api-common:$(JANE_VERSION) \
		jane-php/open-api-runtime:$(JANE_VERSION) \
		jane-php/json-schema:$(JANE_VERSION) \
		jane-php/json-schema-runtime:$(JANE_VERSION)

open-api:
	vendor/bin/jane-openapi generate -c config/open-api/config.php
	composer dump-autoload

json-schema:
	vendor/bin/jane generate -c config/json-schema/config.php
	composer dump-autoload