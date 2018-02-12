<?php

namespace Omnipay\Buckaroo;

use Omnipay\Buckaroo\Message\DynamicPurchaseRequest;
use Omnipay\Tests\GatewayTestCase;

class DynamicBuckarooGatewayTest extends GatewayTestCase
{
    /**
     * @var DynamicBuckarooGateway
     */
    protected $gateway;

    public function setUp()
    {
        parent::setUp();

        $this->gateway = new DynamicBuckarooGateway($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testPurchase()
    {
        $request = $this->gateway->purchase(['amount' => '10.00']);

        $this->assertInstanceOf(DynamicPurchaseRequest::class, $request);
        $this->assertSame('10.00', $request->getAmount());
    }
}
