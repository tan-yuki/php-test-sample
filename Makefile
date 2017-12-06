.PHONY: composer-install
composer-install:
	docker-compose run composer-install

.PHONY: test
test:
	docker-compose run phpunit
