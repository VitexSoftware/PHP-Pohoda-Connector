xsd2php:
	rm -rf src/Pohoda src/metadata
	vendor/bin/xsd2php -v convert xsd2php.yml doc/xsd/*.xsd
