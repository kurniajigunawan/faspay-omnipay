<?php

/**
 * Debit Faspay Item
 */

namespace Omnipay\FaspayPayment;

use Omnipay\Common\Item;

class DebitFaspayItem extends Item
{
    public function getProduct()
    {
        return $this->getParameter('product');
    }

    public function setProduct($value)
    {
        return $this->setParameter('product', $value);
    }

    public function getQty()
    {
        return $this->getParameter('qty');
    }

    public function setQty($value)
    {
        return $this->setParameter('qty', $value);
    }

    /**
     * @param value Add 00 at the end of value because he will read as format *.00 
     */

    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    public function setPaymentPlan($value)
    {
        return $this->setParameter('payment_plan', $value);
    }

    public function getPaymentPlan()
    {
        return $this->getParameter('payment_plan');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchant_id', $value);
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchant_id');
    }

    public function setTenor($value)
    {
        return $this->setParameter('tenor', $value);
    }

    public function getTenor()
    {
        return $this->getParameter('tenor');
    }
}