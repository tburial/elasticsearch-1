<?php
namespace ElasticSearch\tests;
require_once getcwd() . '/vendor/autoload.php';
require_once __DIR__ . '/Helper.php';

class Base extends \mageekguy\atoum\test
{
    protected function getTag()
    {
        return uniqid(getmypid());
    }
}
