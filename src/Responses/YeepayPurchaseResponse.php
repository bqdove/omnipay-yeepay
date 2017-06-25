<?php

namespace Omnipay\Yeepay\Responses;

use Omnipay\Yeepay\Requests\YeepayPurchaseRequest;
use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;

class YeepayPurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{

    /**
     * @var YeepayPurchaseRequest
     */
    protected $request;


    /**
     * Is the response successful
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        return true;
    }


    public function isRedirect()
    {
        return true;
    }


    public function getRedirectUrl()
    {
        return $this->request->getEndpoint() . 'unifiedorder/?' . http_build_query($this->getRedirectData());
    }


    /**
     * Gets the redirect form data array, if the redirect method is POST.
     */
    public function getRedirectData()
    {
        return $this->data;
    }


    /**
     * Get the required redirect method (either GET or POST).
     */
    public function getRedirectMethod()
    {
        return 'GET';
    }
}
