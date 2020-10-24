<?php

namespace App\Adaptor\FaspayPayment\src;

use Omnipay\Common\AbstractGateway;

class DebitGateway extends AbstractGateway
{
    public function getName()
    {
        return 'Faspay Debit';
    }

    public function getDefaultParameters()
    {
        return [
            'request' => '',
            'merchant' => '',
            'merchant_id' => '',
            'password' => '',
            'user_id' => '',
            'production_mode' => '',
            'signature' => ''
        ];
    }

    public function getRequest()
    {
        return $this->getParameter('password');
    }

    public function setRequest($request)
    {
        return $this->setParameter('request', $request);
    }

    public function getMerchant()
    {
        return $this->getParameter('merchant');
    }

    public function setMerchant($merchantName)
    {
        return $this->setParameter('merchant', $merchantName);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchant_id');
    }

    public function setMerchantId($merchantId)
    {
        return $this->setParameter('merchant_id', $merchantId);
    }

    public function getUserId()
    {
        return $this->getParameter('user_id');
    }

    public function setUserId($userId)
    {
        return $this->setParameter('user_id', $userId);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($password)
    {
        return $this->setParameter('password', $password);
    }

    public function getProductionMode()
    {
        return $this->getParameter('production_mode');
    }

    public function setProductionMode($production_mode)
    {
        return $this->setParameter('production_mode', $production_mode);
    }

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setSignature($signature)
    {
        return $this->setParameter('signature', $signature);
    }

    public function channel(array $parameters = array())
    {
        return $this->createRequest('App\Adaptor\FaspayPayment\src\Message\DebitChannelRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('App\Adaptor\FaspayPayment\src\Message\DebitPurchaseRequest', $parameters);
    }

    public function inquiry(array $parameters = array())
    {
        return $this->createRequest('App\Adaptor\FaspayPayment\src\Message\DebitInquiryRequest', $parameters);
    }

    public function cancel(array $parameters = array())
    {
        return $this->createRequest('App\Adaptor\FaspayPayment\src\Message\DebitCancelRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('App\Adaptor\FaspayPayment\src\Message\DebitCompletePurchaseRequest', $parameters);
    }
    
}
