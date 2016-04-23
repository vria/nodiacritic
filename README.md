#nodiacritic

[![Build Status](https://travis-ci.org/riabchenkovlad/nodiacritic.svg?branch=master)](https://travis-ci.org/riabchenkovlad/nodiacritic)

Tiny helper function that removes all diacritical signs from characters. Function is aware of German and Danish diacritic particularities.


##Installation

composer.json
```yml
"require": {
    "vria/nodiacritic": "0.*"
}
```

##Use

```php
$noDiacriticString = NoDiacritic::filter("Révolution française");
```

As expected, the result is `Révolution française`
