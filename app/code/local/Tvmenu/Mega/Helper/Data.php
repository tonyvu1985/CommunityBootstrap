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
    
    public function getCategory($catId){
        return Mage::getModel('catalog/category')
                ->getCollection()
                ->addAttributeToSelect('name')
                ->addAttributeToSelect('url_path')
                ->addAttributeToSelect('description')
                ->addFieldToFilter('entity_id', array('eq' => $catId))
                ->load();
    }
    
    public function getProductBySku($arry_product_sku){        
         return Mage::getModel("catalog/product")
            ->getCollection()
            ->addAttributeToSelect('name')
            ->addAttributeToSelect('url_path')      
            ->addAttributeToSelect('price')    
            ->addAttributeToSelect('small_image')
            ->addAttributeToFilter('status', 1)
            ->addAttributeToFilter('sku', array('in'=> $arry_product_sku))
                ->load();
    }
    
    public function getCatergorybyLevel($rootid) {
    	//load only location category
    	$categories = $this->getSubCategories($rootid);
        $i = 0; 
        $html .= '<div class="row">';
    	foreach ($categories as $cat) {
            $html .= '<ul class="col-md-3 col-sm-6 col-xs-12">';
            $html .= '<li><a href="' . Mage::getBaseurl() . $cat->getUrlpath() . '" class="title">' . $cat->getName() . '</a></li>';
            $children = $this->getSubCategories($cat->getEntityId());
            foreach ($children as $child) {
                    $html .= '<li><a href="' . Mage::getBaseurl() . $child->getUrlpath() . '">' . $child->getName() . '</a></li>';
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
    
    /* get feature product list from their sku */
    public function getFeaturedCategory($catId){ 
        $cats = $this->getCategory($catId);     
        $html .= '<div class="row">';
        // it s collection so we have to do foreach to get result
        foreach($cats as $cat){
           $html .= '<div class="col-sm-6 col-xs-12">';
           
           $html .= '</div>';
           $html .= '<div class="col-sm-6 col-xs-12">';
           $html .= '<p><a href="' . Mage::getBaseUrl(). $cat->getUrl_path(). '" alt="' . $cat->getName() . '">' . $cat->getName() . '</a></p>';      
           $html .= '<p>' . $cat->getDescription() . '</p>';    
           $html .= '</div>';
           $html .= '</div>';
        }            
        $html .= '</div>';
        return $html;
    }
    
        /* get feature product list from their sku */
    public function getSaleProducts($arry_product_sku){        
        $products = $this->getProductBySku($arry_product_sku);        
        $html .= '<ul class="media-list">';            
        foreach($products as $product){
           $html .= '<li class="media"><a href="' . Mage::getBaseUrl(). $product->getUrl_path() . '" class="pull-right"><img src="' . Mage::helper('catalog/image')->init($product, 'small_image')->resize(135) . '" alt="" class="media-object"></a>';                             
           $html .= '<div class="media-body">';
           $html .= '<p class="media-heading"><a href="' . Mage::getBaseUrl(). $product->getUrl_path() . '">' . $product->getName() . '</a></p>';
           $html .= '<p class="description">' . $product->getShort_description() . '</p>';
           $html .= '<p class="price">' . Mage::helper('core')->currency($product->getPrice()) . '</p>';               
           $html .= '</div>';
           $html .= '</li>';
        }            
        $html .= '</ul>';
        return $html;
    }
    
     
                        
               
                            
                        
                       
                      
}
?>