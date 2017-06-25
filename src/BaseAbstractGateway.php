<?php

namespace Omnipay\Yeepay;

use Omnipay\Common\AbstractGateway;
use Omnipay\Yeepay\Requests\YeepayCompletePurchaseRequest;

abstract class BaseAbstractGateway extends AbstractGateway
{

    public function getDefaultParameters()
    {
        return [];
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
