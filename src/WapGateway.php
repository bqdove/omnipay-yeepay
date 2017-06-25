<?php

namespace Omnipay\Yeepay;

use Omnipay\Yeepay\BaseAbstractGateway;
use Omnipay\Yeepay\Requests\YeepayWapPurchaseRequest;

class WapGateway extends BaseAbstractGateway
{

    public function getDefaultParameters()
    {
        return [];
    }
    
    public function getName()
    {
        return 'Yeepay Wap Gateway';
    }

    public function purchase(array $parameters = [])
    {
        return $this->createRequest(YeepayWapPurchaseRequest::class, $parameters);
    }
}
