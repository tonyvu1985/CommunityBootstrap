<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Mage/Contacts/controllers/IndexController.php';

class Tvlogin_Contacts_IndexController extends Mage_Contacts_IndexController{
    public function indexAction() {
        # Just to make sure
        error_log('Yes, I did it!');
        parent::indexAction();
    }
    public function postAction(){
        $result = 1;
        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    }
}
?>
