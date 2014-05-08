#nodiacritic

Twig extention. Removes all diacritical signs from string such as accents. It even treats specific german and danmark characters in expected way. 
___
##Installation

composer.json
```yml
"require": {
    "vladria/nodiacritic": "dev-master"
}
```

Include these parameters in your services.yml
```yml
services:
    no_diacritic:
        class: VladRia\Twig\Extention\NoDiacritic
        arguments:  [@service_container]
        tags:
            - { name: twig.extension }
```
___
##Use

In a template
```twig
{{ "Révolution française"|nodiacritic }}
```

In a controller
```php
$this->get('no_diacritic')->nodiacriticFilter('Révolution française');
```

As expected a result would be 'Revolution francaise'.