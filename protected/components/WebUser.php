<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class WebUser extends CWebUser {
    private $_model = null;
 
    function getRole() {
        if($user = $this->getModel()){
            // в таблице User есть поле role
            return $user->rid;
        }
    }
 
    private function getModel(){
        if (!$this->isGuest && $this->_model === null){
            $this->_model = Users::model()->findByPk($this->id, array('select' => 'rid'));
        }
        return $this->_model;
    }
}
?>
