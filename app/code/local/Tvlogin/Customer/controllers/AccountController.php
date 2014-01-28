<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Mage/Customer/controllers/AccountController.php';

class Tvlogin_Customer_AccountController extends Mage_Customer_AccountController {        
    public function loginAction(){        
        if (!$this->getRequest()->isAjax()){
            parent::loginAction();            
            return;
        }

        $result = array();
        $session = $this->_getSession();     
        $login = $this->getRequest()->getPost('login');   
        if (!empty($login['username']) && !empty($login['password'])) {
            try {
                if ($session->login($login['username'], $login['password'])){
                    $result['logined'] = 1;
                    $result['user'] = $session->getCustomer()->getName();
                    
                    /* refresh new content */
                    $this->loadLayout();
                    $toplink = $this->getLayout()->getBlock('top.links')->toHtml();
                    $result['toplink'] = $toplink;
                }

            // If this user just confirmed registration, it need to send him/her a confirmation email.
            } catch (Exception $e) {
                // Error handling
            }
        } 
        else{
            // Username or password is wrong.
        }       
        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    }
    
    public function createPostAction(){
        if(!$this->getRequest()->isAjax()){
            parent::createPostAction();
            return;
        }
        $result = array();
        $session = $this->_getSession(); 
        $register = $this->getRequest()->getPost('register');
        
        $customer = Mage::getModel('customer/customer');
        $customer->setWebsiteId(Mage::app()->getWebsite()->getId());
        
        $customer->setEmail($register['email']);
        $customer->setPassword($register['password']);
        $customer->setFirstname($register['firstname']);
        $customer->setLastname($register['lastname']);
        
        // check password and cofirm password
        
        if($register['password'] == $register['confirmation']){
            try{
                $customer->save();
                $customer->setConfirmation(null);
                $customer->save();

                // success to save a new customer 
                $result['register'] = 1;

                $storeId = $customer->getSendemailStoreId();
                $customer->sendNewAccountEmail('registered', '', $storeId);

            }
            catch (Exception $ex){

            }
        }
        else{
            $result['register'] = 0;
        }
        $this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
    }

}
?>
