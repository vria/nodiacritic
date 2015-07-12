<?php

use VladRia\Utils\NoDiacritic;
	
class NoDiacriticTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var NoDiacritic
     */
    private $noDiacritic;

    protected function setUp()
    {
        $this->noDiacritic = new NoDiacritic();
    }

    public function testDoNotReplaceChars()
    {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ,./?'\"!@#$%^&*()_-+=";
        $this->assertEquals($chars, $this->noDiacritic->filter($chars));
    }

    public function testChangeChars()
    {
        $charsWithDiacritics    = "àçé";
        $charsWithoutDiacritics = "ace";
        $this->assertEquals($charsWithoutDiacritics, $this->noDiacritic->filter($charsWithDiacritics));
    }
}