#nodiacritic

###Twig extention. Removes all diacritical signs from string such as accents. It even treats specific german and danmark characters in expected way. 

---
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
    vlad.twig.no_diacritic:
        class: VladRia\Twig\Extention\NoDiacritic
        arguments:  [@service_container]
        tags:
            - { name: twig.extension }
```

---
##Use

```twig
{{ "Révolution française"|nodiacritic }}
```