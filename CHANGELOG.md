CHANGELOG
=========

0.2.0
-----

* drop support for HHVM and PHP < 5.6

* made the package compatible with `3.x` releases of `ramsey/uuid`

* allow `2.x` and `3.x` releases of the `php-xapi/model` package

0.1.1
-----

* restrict dependency version to not pull in potentially BC breaking package
  versions

0.1.0
-----

First release containing validation rules to verify that xAPI statements and
related objects fulfill the requirements given by the API specs.

This package replaces the `xabbuh/xapi-validator` package which is now
deprecated and should no longer be used.
