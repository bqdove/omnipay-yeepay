<?php

namespace Omnipay\Yeepay;

use Omnipay\Yeepay\Requests\YeepayCompletePurchaseRequest;
use Omnipay\Yeepay\Requests\YeepayPurchaseRequest;
use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{

    public function getDefaultParameters()
    {
        return [];
    }
    
    public function getName()
    {
        return 'Yeepay Gateway';
    }

    public function purchase(array $parameters = [])
    {
        return $this->createRequest(YeepayPurchaseRequest::class, $parameters);
    }

    public function completePurchase(array $parameters = [])
    {
        return $this->createRequest(YeepayCompletePurchaseRequest::class, $parameters);
    }

    public function refund(array $parameters = [])
    {
    }

    public function completeRefund(array $parameters = [])
    {
    }

    public function query(array $parameters = [])
    {
    }
    
    public function getEndpoint()
    {
        return $this->getParameter('endpoint');
    }
    
    public function setEndpoint($value)
    {
        return $this->setParameter('endpoint', $value);
    }
    
    public function getSignType()
    {
        return $this->getParameter('sign_type');
    }
    
    public function setSignType($value)
    {
        return $this->setParameter('sign_type', $value);
    }
    
    public function getKey()
    {
        return $this->getParameter('key');
    }
    
    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }
}
