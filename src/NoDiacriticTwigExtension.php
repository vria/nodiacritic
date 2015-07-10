<?php

namespace VladRia\Utils;

class NoDiacriticTwigExtension extends \Twig_Extension
{
    /**
     * @var NoDiacritic
     */
    protected $noDiacritic;

    public function __construct(NoDiacritic $noDiacritic)
    {
        $this->noDiacritic = $noDiacritic;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('nodiacritic', array($this->noDiacritic, 'noDiacriticFilter'))
        );
    }

    public function getName()
    {
        return 'nodiacritic';
    }
} 