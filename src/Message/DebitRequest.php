<?php

namespace Omnipay\FaspayPayment\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Faspay Debit Request
 */

abstract class DebitRequest extends AbstractRequest
{
    protected $liveEndpoint = 'https://web.faspay.co.id';
    protected $testEndpoint = 'https://dev.faspay.co.id';

    public function getProductionMode()
    {
        return $this->getParameter('production_mode');
    }

    public function setProductionMode($production_mode)
    {
        return $this->setParameter('production_mode', $production_mode);
    }

    public function getMerchant()
    {
        return $this->getParameter('merchant');
    }

    public function setMerchant($merchantName)
    {
        return $this->setParameter('merchant', $merchantName);
    }

    public function setRequest($request)
    {
        return $this->setParameter('request', $request);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchant_id');
    }

    public function setMerchantId($merchantId)
    {
        return $this->setParameter('merchant_id', $merchantId);
    }

    public function getSignature()
    {
        return $this->getParameter('signature');
    }

    public function setBulkData(array $values): void
    {
        foreach ($values as $key => $value) {
            $this->setParameter($key, $value);
        }
    }

    public function getBaseData()
    {
        $data = array();
        $data['merchant'] = $this->getMerchant();
        $data['merchant_id'] = $this->getMerchantId();
        $data['signature'] = $this->getSignature();
        return $data;
    }

    public function sendData($data)
    {
        $httpResponse = $this->httpClient->request($this->getHttpMethod(), $this->getEndpoint(), $this->getHeaders(), json_encode($data));
        return $this->createResponse($httpResponse->getBody()->getContents());
    }

    protected function createResponse($data)
    {
        return $this->response = new DebitResponse($this, $data);
    }

    public function getHttpMethod()
    {
        return 'POST';
    }

    public function getHeaders()
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];
    }

    public function getEndpoint()
    {
        return $this->getProductionMode() ? $this->liveEndpoint : $this->testEndpoint;
    }
}
