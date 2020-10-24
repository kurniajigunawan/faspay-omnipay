<?php

namespace App\Adaptor\FaspayPayment\src\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * Faspay Debit Response
 */
class DebitResponse extends AbstractResponse
{
    public function __construct(RequestInterface $request, $data)
    {
        $this->request = $request;
        $this->data = json_decode($data, true);        
    }    

    public function isSuccessfull()
    {                
        return isset($this->data['response_code']) && $this->data['response_code'] === '00' ? true : false;
    }

    public function getMessage()
    {        
        return $this->isSuccessfull() ? 'Code ' . $this->data['response_code'] . ': ' . $this->data['response_desc'] : (isset($this->data['response_error']) ? 'Code ' . $this->data['response_error']['response_code'] . ': ' . $this->data['response_error']['response_desc'] : ($this->isServerMaintenance() ? "Cannot Communication with Gateway" : "Something wrong on your connection"));
    }

    public function isServerMaintenance()
    {
        return is_string($this->data)? true : false;
    }

    public function isFailed()
    {
        return isset($this->data['response_code']) && $this->data['response_code'] === '01' ? true : false;
    }
}