#nodiacritic

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/a4b5fc34-3340-49f6-b593-ea9737c2ea82/mini.png)](https://insight.sensiolabs.com/projects/a4b5fc34-3340-49f6-b593-ea9737c2ea82)
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
