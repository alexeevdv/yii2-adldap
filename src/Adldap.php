<?php

namespace alexeevdv\adldap;

class Adldap extends \yii\base\Component
{
    public $options = [];

    private $_instance;    

    public function init()
    {
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
