# nodiacritic

[![Build Status](https://travis-ci.org/vria/nodiacritic.svg?branch=master)](https://travis-ci.org/vria/nodiacritic)
[![Total Downloads](https://poser.pugx.org/vria/nodiacritic/downloads)](https://packagist.org/packages/vria/nodiacritic)

Tiny helper function that removes all diacritical signs from characters. Function is aware of German and Danish diacritic particularities.


## Installation

composer.json
```yml
"require": {
    "vria/nodiacritic": "0.*"
}
```

## Use

```php
use VRia\Utils\NoDiacritic;

$noDiacriticString = NoDiacritic::filter("Révolution française");
```

As expected, the result is `Revolution francaise`.

The library is aware of particularities in German and Danish language:

```php
use VRia\Utils\NoDiacritic;

$noAccentsNiceStreet = NoDiacritic::filter("Schöne straße", "de");
```

The result is `Schoene strasse`.

The code is inspired by WordPress' `remove_accents` function.
