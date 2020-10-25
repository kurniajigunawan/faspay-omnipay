<?php

namespace Omnipay\FaspayPayment\Message;

/**
 * Payment Channel Inquiry
 * https://faspay.co.id/docs/index-en-business.html?json#payment-channel-inquiry
 */
class DebitChannelRequest extends DebitRequest
{
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

    public function getRequest()
    {
        return $this->getParameter('request');
    }

    public function setRequest($request)
    {
        return $this->setParameter('request', $request);
    }

    public function setSignature()
    {
        return $this->setParameter('signature', $this->createSignature());
    }

    public function validateParameter()
    {
        $this->validate('merchant', 'merchant_id', 'signature');
    }

    public function getData()
    {
        $this->validateParameter();
        $data = $this->getBaseData();
        $data['request'] = $this->getRequest();

        return $data;
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/cvr/100001/10';
    }

    protected function createSignature()
    {
        return sha1(md5($this->getUserId() . $this->getPassword()));
    }

    protected function createResponse($data)
    {
        return $this->response = new DebitChannelResponse($this, $data);
    }
}