<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Tvmenu_Mega_Helper_Data extends Mage_Core_Helper_Abstract{  
   public function getSubCategories($parent_id){
    	return Mage::getModel("catalog/category")
    	->getCollection()
    	->addAttributeToSelect('name')
        ->addAttributeToSelect('url_path')                      
    	->addFieldToFilter('is_active', array('eq'=>'1'))
    	->addFieldToFilter('parent_id', array($parent_id))
    	->load();
    }
    
    public function getCatergorybyLevel($rootid) {
    	//load only location category
    	$categories = $this->getSubCategories($rootid);
        $i = 0; 
        $html .= '<div class="row">';
    	foreach ($categories as $cat) {
            $html .= '<ul class="col-md-3 col-sm-6 col-xs-12">';
            $html .= '<li><a href="' . $cat->getUrlpath() . '" class="title">' . $cat->getName() . '</a></li>';
            $children = $this->getSubCategories($cat->getEntityId());
            foreach ($children as $child) {
                    $html .= '<li><a href="' . $child->getUrlpath() . '">' . $child->getName() . '</a></li>';
            }
            $html .= '</ul>';
            $i++;
            if ($i % 4 == 0){
                $html .= '</div><div class="row">';  
            }
    	}
        $html .= '</div>';
    	return $html;
    }
    
    
}
?>