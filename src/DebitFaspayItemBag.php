<?php
/**
 * Faspay Debit Item bag
 */

namespace App\Adaptor\FaspayPayment\src;

use Omnipay\Common\ItemBag;
use Omnipay\Common\ItemInterface;

class DebitFaspayItemBag extends ItemBag
{
    /**
     * Add an item to the bag
     *
     * @see Item
     *
     * @param ItemInterface|array $item An existing item, or associative array of item parameters
     */
    
    public function add($item)
    {        
        if ($item instanceof ItemInterface) {
            $this->items[] = $item;
        } else {            
            $this->items[] = new DebitFaspayItem($item);
        }
    }
}