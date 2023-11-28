<?php

namespace FddCloud\client;


class VoucherClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }


}
