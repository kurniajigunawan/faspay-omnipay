<?php

namespace App\Adaptor\FaspayPayment\src\Message;

/**
 * Cancel Purchase
 * https://faspay.co.id/docs/index-business.html?json#url-endpoint-cancel-transaction
 */
class DebitCancelResponse extends DebitResponse
{        
    public function getData()
    {                        
        return $this->isSuccessfull() ? $this->data : $this->getMessage();
    }
}