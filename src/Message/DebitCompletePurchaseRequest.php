<?php

namespace Omnipay\FaspayPayment\Message;

/**
 * Payment Notification
 * https://faspay.co.id/docs/index-en-business.html?json#payment-notification
 */
class DebitCompletePurchaseRequest extends DebitRequest
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

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setSignature($signature)
    {
        return $this->setParameter('signature', $signature);
    }

    public function getBillNo()
    {
        return $this->getParameter('bill_no');
    }

    public function setBillNo($value)
    {
        return $this->setParameter('bill_no', $value);
    }

    public function getBillTotal()
    {
        return $this->getParameter('bill_total');
    }

    public function setBillTotal($value)
    {
        return $this->setParameter('bill_total', $value);
    }

    public function getTrxId()
    {
        return $this->getParameter('trx_id');
    }

    public function setTrxId($value)
    {
        return $this->setParameter('trx_id', $value);
    }

    public function getPaymentReff()
    {
        return $this->getParameter('payment_reff');
    }

    public function setPaymentReff($value)
    {
        return $this->setParameter('payment_reff', $value);
    }

    public function getPaymentDate()
    {
        return $this->getParameter('payment_date');
    }

    public function setPaymentDate($value)
    {
        return $this->setParameter('payment_date', $value);
    }

    public function getPaymentStatusCode()
    {
        return $this->getParameter('payment_status_code');
    }

    public function setPaymentStatusCode($value)
    {
        return $this->setParameter('payment_status_code', $value);
    }

    public function getPaymentStatusDesc()
    {
        return $this->getParameter('payment_status_desc');
    }

    public function setPaymentStatusDesc($value)
    {
        return $this->setParameter('payment_status_desc', $value);
    }

    public function getPaymentTotal()
    {
        return $this->getParameter('payment_total');
    }

    public function setPaymentTotal($value)
    {
        return $this->setParameter('payment_total', $value);
    }

    public function getPaymentChannelUid()
    {
        return $this->getParameter('payment_channel_uid');
    }

    public function setPaymentChannelUid($value)
    {
        return $this->setParameter('payment_channel_uid', $value);
    }

    public function getPaymentChannel()
    {
        return $this->getParameter('payment_channel');
    }

    public function setPaymentChannel($value)
    {
        return $this->setParameter('payment_channel', $value);
    }    

    public function validateParameter()
    {
        $this->validate(
            'trx_id',
            'merchant_id',
            'bill_no',
            'signature',
            'payment_reff',
            'payment_date',
            'payment_status_code',
            'payment_status_desc',
            'bill_total',
            'payment_total',
            'payment_channel_uid',
            'payment_channel'
        );
    }

    protected function isValidSignature()
    {                
        return sha1(md5($this->getUserId() . $this->getPassword() . $this->getBillNo() . 2)) == $this->getSignature() ? true : false;
    }

    public function getData()
    {
        $this->validateParameter();
        $data = $this->getBaseData();
        $data['request'] = $this->getRequest();
        $data['bill_no'] = $this->getBillNo();
        $data['trx_id'] = $this->getTrxId();
        $data['payment_reff'] = $this->getPaymentReff();
        $data['payment_date'] = $this->getPaymentDate();
        $data['payment_status_code'] = $this->getPaymentStatusCode();
        $data['payment_status_desc'] = $this->getPaymentStatusDesc();
        $data['bill_total'] = $this->getBillTotal();
        $data['payment_total'] = $this->getPaymentTotal();
        $data['payment_channel_uid'] = $this->getPaymentChannelUid();
        $data['payment_channel'] = $this->getPaymentChannel();        
        return $data;
    }

    public function sendData($data)
    {                
        $response = array();
        $response['request'] = 'Payment Notification';
        $response['trx_id'] = $data['trx_id'];
        $response['merchant_id'] = $data['merchant_id'];
        $response['merchant'] = $data['merchant'];
        $response['bill_no'] = $data['bill_no'];
        switch ($this->isValidSignature()) {
            case true:
                $response['response_code'] = "00";
                $response['response_desc'] = "Sukses";
                break;
            case false:
                $response['response_code'] = "01";
                $response['response_desc'] = "Gagal";
                break;
        }
        return $this->createResponse(json_encode($response));
    }

    protected function createResponse($data)
    {        
        return $this->response = new DebitCompletePurchaseResponse($this, $data);
    }
}
