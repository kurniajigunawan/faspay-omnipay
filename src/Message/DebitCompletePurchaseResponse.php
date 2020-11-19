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
        return $this->data;
    }    

    public function getFailedData()
    {
        $this->data['response_code'] = "01";
        $this->data['response_desc'] = "Gagal";
        return $this->data;
    }
}