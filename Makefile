.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t ohce-php-kata .

build-container:
	docker run -dt --name ohce-php-kata -v .:/540/Boilerplate ohce-php-kata
	docker exec ohce-php-kata composer install

start:
	docker start ohce-php-kata

test: start
	docker exec ohce-php-kata ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it ohce-php-kata /bin/bash

stop:
	docker stop ohce-php-kata

clean: stop
	docker rm ohce-php-kata
	rm -rf vendor
