<?php

namespace App\Adaptor\FaspayPayment\src\Message;

/**
 * Inquiry Payment Status
 * https://faspay.co.id/docs/index-business.html?json#inquiry-payment-status
 */
class DebitInquiryResponse extends DebitResponse
{        
    public function getData()
    {                        
        return $this->isSuccessfull() ? $this->data : $this->getMessage();
    }
}