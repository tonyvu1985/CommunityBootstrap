<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Mage/Customer/controllers/AccountController.php';

class Tvlogin_Customer_AccountController extends Mage_Customer_AccountController {
    public function ajaxloginPostAction(){
        $result = array();      
        $session = $this->_getSession();     
        $login = $this->getRequest()->getPost('login');   
        if (!empty($login['username']) && !empty($login['password'])) {
            try {
                if ($session->login($login['username'], $login['password'])){
                    $result['logined'] = 1;
                    $result['user'] = $session->getCustomer()->getName();
                }

            // If this user just confirmed registration, it need to send him/her a confirmation email.
            } catch (Exception $e) {
                // Error handling
            }
        } 
        else{
            // Username or password is wrong.
        }
       $this->getResponse()->setBody($result);
    }
}

?>
