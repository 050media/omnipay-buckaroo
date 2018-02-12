<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\CompletePurchaseRequest;
use Omnipay\Buckaroo\Message\DynamicPurchaseRequest;

final class DynamicBuckarooGateway extends BuckarooGateway
{
    public function purchase(array $parameters = [])
    {
        return $this->createRequest(DynamicPurchaseRequest::class, $parameters);
    }

    public function completePurchase(array $parameters = [])
    {
        return $this->createRequest(CompletePurchaseRequest::class, $parameters);
    }
}