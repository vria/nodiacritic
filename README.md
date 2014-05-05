#nodiacritic

Twig extention. Removes all diacritic signs from string. 
---
##Installation

composer.json
```yml
    "require": {
        "vladria/nodiacritic": "dev-master"
    },
}
```

services.yml
```yml
services:
    vlad.twig.no_diacritic:
        class: VladRia\Twig\Extention\NoDiacritic
        arguments:  [@service_container]
        tags:
            - { name: twig.extension }
```

##Use

```twig
{{ "Révolution française"|nodiacritic }}
```