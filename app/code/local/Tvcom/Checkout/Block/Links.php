<?php
/** 
 * @author      Tony Vu <vuductrung2003@gmail.com>
 */
class Tvcom_Checkout_Block_Links extends Mage_Checkout_Block_Links{
    public function addCartLink(){
        $parentBlock = $this->getParentBlock();
        if ($parentBlock && Mage::helper('core')->isModuleOutputEnabled('Mage_Checkout')) {
            $count = $this->getSummaryQty() ? $this->getSummaryQty()
                : $this->helper('checkout/cart')->getSummaryCount();
            if ($count >= 1) {
                $text = $this->__('My Cart (%s)', $count);
            } else {
                $text = $this->__('My Cart');
            }

            $parentBlock->removeLinkByUrl($this->getUrl('checkout/cart'));
            $parentBlock->addLink($text, 'checkout/cart', $text, true, array(), 50, null, 'class="top-link-cart"');
        }
        return $this;
    }
}
