<?php
declare(strict_types=1);

namespace rpc\oa;

interface operate
{
    public function add(int $a,int $b) : int;
}