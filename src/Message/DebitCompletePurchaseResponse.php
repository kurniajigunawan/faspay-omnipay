<?php

namespace Omnipay\FaspayPayment\Message;

/**
 * Payment Notification
 * https://faspay.co.id/docs/index-en-business.html?json#payment-notification
 */
class DebitCompletePurchaseResponse extends DebitResponse
{        
    public function getData()
    {                        
        return $this->isSuccessfull() ? $this->data : $this->getMessage();
    }    
}