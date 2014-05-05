#nodiacritic

Twig extention. Removes all diacritic signs from string. 
---
##Installation

composer.json
```yml
{
    "repositories": [{
        "type": "package",
        "package": {
            "name": "vladria/nodiacritic",
            "version": "dev-master",
            "source": {
                "url": "git@github.com:riabchenkovlad/nodiacritic.git",
                "type": "git",
                "reference": "master"
            },
            "autoload": {
                "psr-0" : {
                    "VladRia\\Twig\\Extention" : ""
                }
            }
        }
    }],

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