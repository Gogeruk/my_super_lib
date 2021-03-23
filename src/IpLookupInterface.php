<?php

namespace Hillel\Iplookup;

interface IpLookupInterface
{
    public function ipParse($ip);
    public function continentCode();
    public function isoCOde();
}
