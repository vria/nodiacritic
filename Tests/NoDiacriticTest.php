<?php

use VRia\Utils\NoDiacritic;
	
class NoDiacriticTest extends \PHPUnit_Framework_TestCase
{
    public function testDoNotReplaceChars()
    {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,./?'\"!@#$%^&*()_-+=";
        $this->assertEquals($chars, NoDiacritic::filter($chars));
    }

    public function testChangeChars()
    {
        $charsWithDiacritics    = "àâä ç éèêë ïî ôö ùûü ÿ ÀÂÄ Ç ÉÈÊË ÎÏ ÔÖ ÙÛÜ";
        $charsWithoutDiacritics = "aaa c eeee ii oo uuu y AAA C EEEE II OO UUU";
        $this->assertEquals($charsWithoutDiacritics, NoDiacritic::filter($charsWithDiacritics));
    }

    public function testWithFrenchLocale()
    {
        $charsWithDiacritics    = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,./?'\"!@#$%^&*()_-+= àâäçéèêëïîôöùûüÿÀÂÄÇÉÈÊËÎÏÔÖÙÛÜ";
        $charsWithoutDiacritics = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,./?'\"!@#$%^&*()_-+= aaaceeeeiioouuuyAAACEEEEIIOOUUU";

        $this->assertEquals($charsWithoutDiacritics, NoDiacritic::filter($charsWithDiacritics, "fr"));
    }

    public function testWithGermanLocale()
    {
        $charsWithDiacritics    = "Ä A ä a Ö O ö o Ü U ü u ß s";
        $charsWithoutDiacritics = "Ae A ae a Oe O oe o Ue U ue u ss s";

        $this->assertEquals($charsWithoutDiacritics, NoDiacritic::filter($charsWithDiacritics, "de"));
    }
}