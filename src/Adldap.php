<?php

namespace alexeevdv\adldap;

class Adldap extends \yii\base\Component
{
    /**
     * Options that will be passed to original Adldap class
     */
    public $options = [];

    /**
     * Original class instance
     */
    private $_instance;    

    public function init()
    {
        parent::init():        
        $this->_instance = new \Adldap\Adldap($this->options);
    }

    public function __call($methodName, $methodParams)
    {
        if ( method_exists($this->_instance, $methodName))
        {
            return call_user_func_array([$this->_instance, $methodName], $methodParams);
        }       
    }
}
