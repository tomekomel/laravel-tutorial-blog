<?php

namespace App\Billing;

class Stripe
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
}
