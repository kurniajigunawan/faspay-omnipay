<?php

namespace Omnipay\FaspayPayment\Message;

/**
 * Cancel Purchase
 * https://faspay.co.id/docs/index-business.html?json#url-endpoint-cancel-transaction
 */
class DebitCancelRequest extends DebitRequest
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

    public function getBillNo()
    {
        return $this->getParameter('bill_no');
    }

    public function setBillNo($value)
    {
        return $this->setParameter('bill_no', $value);
    }

    public function getTrxId()
    {
        return $this->getParameter('trx_id');
    }

    public function setTrxId($value)
    {
        return $this->setParameter('trx_id', $value);
    }

    public function getPaymentCancel()
    {
        return $this->getParameter('payment_cancel');
    }

    public function setPaymentCancel($value)
    {
        return $this->setParameter('payment_cancel', $value);
    }

    public function validateParameter()
    {
        $this->validate(
            'trx_id',
            'merchant_id',
            'bill_no',
            'payment_cancel',
            'signature'
        );
    }

    public function getData()
    {
        $this->validateParameter();                
        $data = $this->getBaseData();
        $data['request'] = $this->getRequest();
        $data['bill_no'] = $this->getBillNo();
        $data['trx_id'] = $this->getTrxId();
        $data['payment_cancel'] = $this->getPaymentCancel();
        return $data;
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/cvr/100005/10';
    }

    protected function createSignature()
    {
        return sha1(md5($this->getUserId() . $this->getPassword() . $this->getBillNo()));
    }

    protected function createResponse($data)
    {
        return $this->response = new DebitCancelResponse($this, $data);
    }
}