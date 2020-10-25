<?php

namespace Omnipay\FaspayPayment\Message;

/**
 * Payment Channel Inquiry
 * https://faspay.co.id/docs/index-en-business.html?json#payment-channel-inquiry
 */
class DebitChannelResponse extends DebitResponse
{        
    public function getData()
    {                        
        return $this->isSuccessfull() ? $this->data['payment_channel'] : $this->getMessage();
    }
}