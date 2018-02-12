<?php

namespace Omnipay\Buckaroo\Message;

final class DynamicPurchaseRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('paymentMethod');

        $data = parent::getData();

        $paymentMethod = $this->getPaymentMethod();
        if ($paymentMethod !== null) {
            $data['Brq_payment_method'] = $this->getPaymentMethod();
        }

        if ($this->getPaymentMethod() === 'ideal' && $this->getIssuer()) {
            $data['Brq_service_ideal_issuer'] = $this->getIssuer();
        }
        return $data;
    }
}