<?php

use VladRia\Utils\NoDiacritic;

class NoDiacriticWithRequestStackTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $locale
     * @return NoDiacritic
     */
    private function getNoDiacriticWithRequestStack($locale)
    {
        $request = $this->getMockBuilder("Symfony\\Component\\HttpFoundation\\Request")->getMock();
        $request->method("getLocale")
            ->willReturn($locale);

        $requestStack = $this->getMockBuilder("Symfony\\Component\\HttpFoundation\\RequestStack")->getMock();
        $requestStack->method("getCurrentRequest")
            ->willReturn($request);

        return new NoDiacritic($requestStack);
    }

    public function testWithFrenchLocale()
    {
        $charsWithDiacritics    = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,./?'\"!@#$%^&*()_-+= àâäçéèêëïîôöùûüÿÀÂÄÇÉÈÊËÎÏÔÖÙÛÜ";
        $charsWithoutDiacritics = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,./?'\"!@#$%^&*()_-+= aaaceeeeiioouuuyAAACEEEEIIOOUUU";
        $noDiacritic = $this->getNoDiacriticWithRequestStack("fr");

        $this->assertEquals($charsWithoutDiacritics, $noDiacritic->filter($charsWithDiacritics));
    }

    public function testWithGermanLocale()
    {
        $charsWithDiacritics    = "Ä A ä a Ö O ö o Ü U ü u ß s";
        $charsWithoutDiacritics = "Ae A ae a Oe O oe o Ue U ue u ss s";
        $noDiacritic = $this->getNoDiacriticWithRequestStack("de");

        $this->assertEquals($charsWithoutDiacritics, $noDiacritic->filter($charsWithDiacritics));
    }
}