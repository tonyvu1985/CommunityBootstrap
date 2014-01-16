<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Mage/Customer/controllers/AccountController.php';

class Tvlogin_Customer_AccountController extends Mage_Customer_AccountController {
    
    public function indexAction(){
        echo 'tonychen sd';
        //Mage::chenlog(Mage::getBacktrace());
        return;
    }
    public function ajaxloginPostAction(){        
    echo 'tonychen sd';
    }
        
    public function preDispatch()
    {
        // a brute-force protection here would be nice

        if (!$this->getRequest()->isDispatched()) {
            return;
        }

        $action = $this->getRequest()->getActionName();
        $openActions = array(
            'create',
            'login',
            'logoutsuccess',
            'forgotpassword',
            'forgotpasswordpost',
            'resetpassword',
            'resetpasswordpost',
            'confirm',
            'confirmation',
            'ajaxloginpost'
        );
        $pattern = '/^(' . implode('|', $openActions) . ')/i';

        if (!preg_match($pattern, $action)) {
            if (!$this->_getSession()->authenticate($this)) {
                $this->setFlag('', 'no-dispatch', true);
            }
        } else {
            $this->_getSession()->setNoReferer(true);
        }
    }
    public function LoginAction(){
        $result = array();      
        $session = $this->_getSession();     
        $login = $this->getRequest()->getPost('login');   
        if (!empty($login['username']) && !empty($login['password'])) {
            try {
                //if ($session->login($login['username'], $login['password'])){
                //    $result['logined'] = 1;
                //    $result['user'] = $session->getCustomer()->getName();
                //}

            // If this user just confirmed registration, it need to send him/her a confirmation email.
            } catch (Exception $e) {
                // Error handling
            }
        } 
        else{
            // Username or password is wrong.
        }
       //$this->getResponse()->setBody($result);
         //$this->getResponse()->setBody(Mage::helper('core')->jsonEncode($result));
        echo "test tonychen<br>";
         return; 
    }
}

?>
