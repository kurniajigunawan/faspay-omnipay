<?php

namespace App\Adaptor\FaspayPayment\src\Message;

/**
 * Payment Purchase Data
 * https://faspay.co.id/docs/index-en-business.html?json#post-data
 */
class DebitPurchaseResponse extends DebitResponse
{        
    public function getData()
    {                        
        return $this->isSuccessfull() ? $this->data : $this->getMessage();
    }
}