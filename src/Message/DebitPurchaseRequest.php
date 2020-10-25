<?php

namespace Omnipay\FaspayPayment\Message;

use Omnipay\Common\ItemBag;
use App\Adaptor\FaspayPayment\src\DebitFaspayItem;
use App\Adaptor\FaspayPayment\src\DebitFaspayItemBag;

/**
 * Payment Purchase Data
 * https://faspay.co.id/docs/index-en-business.html?json#post-data
 */
class DebitPurchaseRequest extends DebitRequest
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

    public function setSignature()
    {        
        return $this->setParameter('signature', $this->createSignature());
    }

    public function getBillNo()
    {
        return $this->getParameter('bill_no');
    }

    public function setBillNo($value)
    {
        return $this->setParameter('bill_no', $value);
    }

    public function getBillDate()
    {
        return $this->getParameter('bill_date');
    }

    public function setBillDate($value)
    {
        return $this->setParameter('bill_date', $value);
    }

    public function getBillExpired()
    {
        return $this->getParameter('bill_expired');
    }

    public function setBillExpired($value)
    {
        return $this->setParameter('bill_expired', $value);
    }

    public function getBillDesc()
    {
        return $this->getParameter('bill_desc');
    }

    public function setBillDesc($value)
    {
        return $this->setParameter('bill_desc', $value);
    }

    public function getBillCurrency()
    {
        return $this->getParameter('bill_currency');
    }

    public function setBillCurrency($value)
    {
        return $this->setParameter('bill_currency', $value);
    }

    public function getBillGross()
    {
        return $this->getParameter('bill_gross');
    }

    public function setBillGross($value)
    {
        return $this->setParameter('bill_gross', $value);
    }

    public function getBillMiscfee()
    {
        return $this->getParameter('bill_miscfee');
    }

    public function setBillMiscfee($value)
    {
        return $this->setParameter('bill_miscfee', $value);
    }

    public function getBillTotal()
    {
        return $this->getParameter('bill_total');
    }

    public function setBillTotal($value)
    {
        return $this->setParameter('bill_total', $value);
    }

    public function getBillReff()
    {
        return $this->getParameter('bill_reff');
    }

    public function setBillReff($value)
    {
        return $this->setParameter('bill_reff', $value);
    }

    public function getCustNo()
    {
        return $this->getParameter('cust_no');
    }

    public function setCustNo($value)
    {
        return $this->setParameter('cust_no', $value);
    }

    public function getCustName()
    {
        return $this->getParameter('cust_name');
    }

    public function setCustName($value)
    {
        return $this->setParameter('cust_name', $value);
    }

    public function getPaymentChannel()
    {
        return $this->getParameter('payment_channel');
    }

    public function setPaymentChannel($value)
    {
        return $this->setParameter('payment_channel', $value);
    }

    public function getPayType()
    {
        return $this->getParameter('pay_type');
    }

    public function setPayType($value)
    {
        return $this->setParameter('pay_type', $value);
    }

    public function getTerminal()
    {
        return $this->getParameter('terminal');
    }

    public function setTerminal($value)
    {
        return $this->setParameter('terminal', $value);
    }

    public function getBillingName()
    {
        return $this->getParameter('billing_name');
    }

    public function setBillingName($value)
    {
        return $this->setParameter('billing_name', $value);
    }

    public function getBillingLastname()
    {
        return $this->getParameter('billing_lastname');
    }

    public function setBillingLastname($value)
    {
        return $this->setParameter('billing_lastname', $value);
    }

    public function getBillingAddress()
    {
        return $this->getParameter('billing_address');
    }

    public function setBillingAddress($value)
    {
        return $this->setParameter('billing_address', $value);
    }

    public function getBillingAddressCity()
    {
        return $this->getParameter('billing_address_city');
    }

    public function setBillingAddressCity($value)
    {
        return $this->setParameter('billing_address_city', $value);
    }

    public function getBillingAddressRegion()
    {
        return $this->getParameter('billing_address_region');
    }

    public function setBillingAddressRegion($value)
    {
        return $this->setParameter('billing_address_region', $value);
    }

    public function getBillingAddressState()
    {
        return $this->getParameter('billing_address_state');
    }

    public function setBillingAddressState($value)
    {
        return $this->setParameter('billing_address_state', $value);
    }

    public function getBillingAddressPoscode()
    {
        return $this->getParameter('billing_address_poscode');
    }

    public function setBillingAddressPoscode($value)
    {
        return $this->setParameter('billing_address_poscode', $value);
    }

    public function getBillingMsisdn()
    {
        return $this->getParameter('billing_msisdn');
    }

    public function setBillingMsisdn($value)
    {
        return $this->setParameter('billing_msisdn', $value);
    }

    public function getBillingAddressCountryCode()
    {
        return $this->getParameter('billing_address_country_code');
    }

    public function setBillingAddressCountryCode($value)
    {
        return $this->setParameter('billing_address_country_code', $value);
    }

    public function getReceiverNameForShipping()
    {
        return $this->getParameter('receiver_name_for_shipping');
    }

    public function setReceiverNameForShipping($value)
    {
        return $this->setParameter('receiver_name_for_shipping', $value);
    }

    public function getShippingLastname()
    {
        return $this->getParameter('shipping_lastname');
    }

    public function setShippingLastname($value)
    {
        return $this->setParameter('shipping_lastname', $value);
    }

    public function getShippingAddress()
    {
        return $this->getParameter('shipping_address');
    }

    public function setShippingAddress($value)
    {
        return $this->setParameter('shipping_address', $value);
    }

    public function getShippingAddressCity()
    {
        return $this->getParameter('shipping_address_city');
    }

    public function setShippingAddressCity($value)
    {
        return $this->setParameter('shipping_address_city', $value);
    }

    public function getShippingAddressRegion()
    {
        return $this->getParameter('shipping_address_region');
    }

    public function setShippingAddressRegion($value)
    {
        return $this->setParameter('shipping_address_region', $value);
    }

    public function getShippingAddressState()
    {
        return $this->getParameter('shipping_address_state');
    }

    public function setShippingAddressState($value)
    {
        return $this->setParameter('shipping_address_state', $value);
    }

    public function getShippingAddressPoscode()
    {
        return $this->getParameter('shipping_address_poscode');
    }

    public function setShippingAddressPoscode($value)
    {
        return $this->setParameter('shipping_address_poscode', $value);
    }

    public function getShippingAddressCountryCode()
    {
        return $this->getParameter('shipping_address_country_code');
    }

    public function setShippingAddressCountryCode($value)
    {
        return $this->setParameter('shipping_address_country_code', $value);
    }

    public function getShippingMsisdn()
    {
        return $this->getParameter('shipping_msisdn');
    }

    public function setShippingMsisdn($value)
    {
        return $this->setParameter('shipping_msisdn', $value);
    }

    public function getMsisdn()
    {
        return $this->getParameter('msisdn');
    }

    public function setMsisdn($value)
    {
        return $this->setParameter('msisdn', $value);
    }

    public function getEmail()
    {
        return $this->getParameter('email');
    }

    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }

    public function setItems($items)
    {        
        if ($items && !$items instanceof ItemBag) {
            $items = new DebitFaspayItemBag($items);
        }

        return $this->setParameter('items', $items);        
    }

    public function getItems()
    {
        return $this->getParameter('items');
    }

    public function validateParameter()
    {
        $this->validate(
            'merchant',
            'merchant_id',
            'signature',
            'bill_no',
            'bill_date',
            'bill_expired',
            'bill_desc',
            'bill_currency',
            'bill_total',
            'payment_channel',
            'pay_type',
            'cust_no',
            'cust_name',
            'msisdn',
            'email',
            'terminal'
        );
    }

    public function getData()
    {
        $this->validateParameter();                
        $data = $this->getBaseData();
        $data['request'] = $this->getRequest();
        $data['bill_no'] = $this->getBillNo();
        $data['bill_reff'] = $this->getBillReff();
        $data['bill_date'] = $this->getBillDate();
        $data['bill_expired'] = $this->getBillExpired();
        $data['bill_desc'] = $this->getBillDesc();
        $data['bill_currency'] = $this->getBillCurrency();
        $data['bill_gross'] = $this->getBillGross();
        $data['bill_miscfee'] = $this->getBillMiscfee();
        $data['bill_total'] = $this->getBillTotal();
        $data['cust_no'] = $this->getCustNo();
        $data['cust_name'] = $this->getCustName();
        $data['payment_channel'] = $this->getPaymentChannel();
        $data['pay_type'] = $this->getPayType();
        $data['bank_userid'] = ''; //kosong
        $data['msisdn'] = $this->getMsisdn();
        $data['email'] = $this->getEmail();
        $data['terminal'] = $this->getTerminal();
        $data['billing_name'] = $this->getBillingName();
        $data['billing_lastname'] = $this->getBillingLastname();
        $data['billing_address'] = $this->getBillingAddress();
        $data['billing_address_city'] = $this->getBillingAddressCity();
        $data['billing_address_region'] = $this->getBillingAddressRegion();
        $data['billing_address_state'] = $this->getBillingAddressState();
        $data['billing_address_poscode'] = $this->getBillingAddressPoscode();
        $data['billing_msisdn'] = $this->getBillingMsisdn();
        $data['billing_address_country_code'] = $this->getBillingAddressCountryCode();
        $data['receiver_name_for_shipping'] = $this->getReceiverNameForShipping();
        $data['shipping_lastname'] = $this->getShippingLastname();
        $data['shipping_address'] = $this->getShippingAddress();
        $data['shipping_address_city'] = $this->getShippingAddressCity();
        $data['shipping_address_region'] = $this->getShippingAddressRegion();
        $data['shipping_address_state'] = $this->getShippingAddressState();
        $data['shipping_address_poscode'] = $this->getShippingAddressPoscode();
        $data['shipping_msisdn'] = $this->getShippingMsisdn();
        $data['shipping_address_country_code'] = $this->getShippingAddressCountryCode();
        $data['item'] = array();
        if ($items = $this->getItems()) {
            foreach($items as $item){
                array_push($data['item'], $item->getParameters());
            }
        }
        $data['reserve1'] = ''; //kosong
        $data['reserve2'] = ''; //kosong
        return $data;
    }

    public function getEndpoint()
    {
        return parent::getEndpoint() . '/cvr/300011/10';
    }

    protected function createSignature()
    {
        return sha1(md5($this->getUserId() . $this->getPassword() . $this->getBillNo()));
    }

    protected function createResponse($data)
    {
        return $this->response = new DebitPurchaseResponse($this, $data);
    }
}