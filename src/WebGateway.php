<?php

namespace Omnipay\Yeepay;

use Omnipay\Yeepay\BaseAbstractGateway;
use Omnipay\Yeepay\Requests\YeepayWebPurchaseRequest;

class WebGateway extends BaseAbstractGateway
{

    public function getDefaultParameters()
    {
        return [];
    }
    
    public function getName()
    {
        return 'Yeepay Web Gateway';
    }

    public function purchase(array $parameters = [])
    {
        return $this->createRequest(YeepayWebPurchaseRequest::class, $parameters);
    }
}
