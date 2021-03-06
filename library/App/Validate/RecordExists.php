<?php

class App_Validate_RecordExists extends Zend_Validate_Abstract
{   
    protected $_repository;
    protected $_field;
    protected $_excludeValue;
    protected $_entityId = null;
    const ITEM_EXISTS = 'itemExists';
    
    protected $_messageTemplates = array(
        self::ITEM_EXISTS => 'This record exists in the database.'
    );

    public function __construct($entityName, $field, $excludeValue = null, $entityId = null) {
        $entityManager = Zend_Registry::get('em');
        $this->_repository = $entityManager->getRepository($entityName);
        $this->_field = $field;        
        $this->_excludeValue = $excludeValue;
        $this->_entityId = $entityId;
    }
    
    public function setRepository($repository)
    {
        $this->_repository = $repository;
    }
    
    public function getRepository()
    {
        return $this->_repository;
    }
    
    public function setField($fieldName) 
    {
        $this->_field = $fieldName;
    }
    
    public function getField()
    {
        return $this->_field;
    }
    
    public function setExcludeValue($value)
    {
        $this->_excludeValue = $value;
    }
    
    public function getExcludeValue()
    {
        return $this->_excludeValue;
    }        

    public function isValid($value)
    {
        $value = (string) $value;
        $this->_setValue($value);

        $queryParams = array();
        $queryParams[$this->_field] = $value;

        if ($this->_excludeValue != null) {
            return ($value == $this->_excludeValue);
        }
        $entity = $this->_repository->find($this->_entityId);
        if ($entity) {
            $getter = join('', array('get', ucfirst($this->_field)));
            if (call_user_func(array($entity, $getter)) == $value)  {
                return true;
            }
        }
        
        $result = $this->_repository->findBy($queryParams);

        if (count($result) > 0) {
            $this->_error(self::ITEM_EXISTS);
            return false;
        }

        return true;
    }
}