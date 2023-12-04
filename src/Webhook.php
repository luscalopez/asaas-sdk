<?php

namespace Luscalopez\Asaas;


class Webhook {

    public $http;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }
}
