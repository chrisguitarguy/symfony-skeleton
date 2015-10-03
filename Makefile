.PHONY: test

unit:
	php vendor/bin/phpunit --testsuite unit

accept:
	php vendor/bin/phpunit --testsuite accept

alltest:
	php vendor/bin/phpunit
