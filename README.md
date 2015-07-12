#nodiacritic

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/a4b5fc34-3340-49f6-b593-ea9737c2ea82/mini.png)](https://insight.sensiolabs.com/projects/a4b5fc34-3340-49f6-b593-ea9737c2ea82)

Twig extention. Removes all diacritical signs from string such as accents. It even treats specific german and danmark characters in expected way. 

##Installation

composer.json
```yml
"require": {
    "vladria/nodiacritic": "0.*"
}
```

Include these parameters in your services.yml
```yml
services:
    nodiacritic:
        class: VladRia\Utils\NoDiacritic
        arguments: [@?request_stack]
        tags:
            - { name: twig.extension }
```

##Use

In a template
```twig
{{ "Révolution française"|nodiacritic }}
```

In a controller
```php
$this->get('nodiacritic')->nodiacriticFilter('Révolution française');
```

As expected a result would be 'Revolution francaise'.
