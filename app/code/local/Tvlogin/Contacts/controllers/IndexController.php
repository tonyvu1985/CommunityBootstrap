<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Mage/Contacts/controllers/IndexController.php';

class Tvlogin_Contacts_IndexController extends Mage_Contacts_IndexController{
    public function postAction(){
        if (!$this->getRequest()->isAjax()){
            parent::postAction();
            return;
        }
        
        $result;
        $post = $this->getRequest()->getPost('contact');
        if ( $post ) {
            try {
                $postObject = new Varien_Object();
                $postObject->setData($post);

                $mailTemplate = Mage::getModel('core/email_template');
                /* @var $mailTemplate Mage_Core_Model_Email_Template */
                $mailTemplate->setDesignConfig(array('area' => 'frontend'))
                    ->setReplyTo($post['email'])
                    ->sendTransactional(
                        Mage::getStoreConfig(self::XML_PATH_EMAIL_TEMPLATE),
                        Mage::getStoreConfig(self::XML_PATH_EMAIL_SENDER),
                        Mage::getStoreConfig(self::XML_PATH_EMAIL_RECIPIENT),
                        null,
                        array('data' => $postObject)
                    );

                if (!$mailTemplate->getSentSuccess()) {
                    throw new Exception();
                }
                $result = 1;
            } catch (Exception $e) {
            }
        }
        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    }    
}
?>
