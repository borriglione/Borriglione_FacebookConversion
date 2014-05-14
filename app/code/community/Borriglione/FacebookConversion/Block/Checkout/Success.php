<?php
/**
 * Checkout Success Block
 * 
 * @category   Borriglione
 * @package    Borriglione_FacebookConversion
 * @copyright  Copyright (c) 2014 Andre Herrn <info@andre-herrn.de>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author     André Herrn <info@andre-herrn.de>
 */
class Borriglione_FacebookConversion_Block_Checkout_Success extends Mage_Core_Block_Template
{
    /**
     * Load last order
     * 
     * @return Mage_Sales_Model_Order
     */
    public function getOrder()
    {
        $order = Mage::getSingleton('sales/order');
        $order->loadByIncrementId(
            Mage::getSingleton('checkout/session')->getLastRealOrderId()
        );
        
        return $order;
    }   
}
 