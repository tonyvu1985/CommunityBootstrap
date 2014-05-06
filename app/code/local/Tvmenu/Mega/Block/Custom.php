<?php
/**/
 

class Tvmenu_Mega_Block_Custom extends Mage_Adminhtml_Block_System_Config_Form_Field_Array_Abstract
{
    public function __construct()
    {        
        $this->addColumn('value', array(
            'label' => Mage::helper('adminhtml')->__('Product Sku'),
            'style' => 'width:120px',
        ));
        $this->_addAfter = false;
        $this->_addButtonLabel = Mage::helper('adminhtml')->__('Add Product');
        parent::__construct();
    }
} 
