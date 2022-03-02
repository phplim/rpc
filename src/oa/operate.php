<?php
declare(strict_types=1);

namespace rpc\oa;

interface UserServiceInter
{
    public function getUserInfo(int $userId) : string;

    public function getUserList(int $page, int $pageSize, array $params = []) : string;
}