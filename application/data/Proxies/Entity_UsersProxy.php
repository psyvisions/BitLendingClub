<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Entity_UsersProxy extends \Entity_Users implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setIsActive($isActive)
    {
        $this->__load();
        return parent::setIsActive($isActive);
    }

    public function getIsActive()
    {
        $this->__load();
        return parent::getIsActive();
    }

    public function setFirstname($firstname)
    {
        $this->__load();
        return parent::setFirstname($firstname);
    }

    public function getFirstname()
    {
        $this->__load();
        return parent::getFirstname();
    }

    public function setLastname($lastname)
    {
        $this->__load();
        return parent::setLastname($lastname);
    }

    public function getLastname()
    {
        $this->__load();
        return parent::getLastname();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function getFullname()
    {
        $this->__load();
        return parent::getFullname();
    }

    public function setAddress($address)
    {
        $this->__load();
        return parent::setAddress($address);
    }

    public function getAddress()
    {
        $this->__load();
        return parent::getAddress();
    }

    public function setRole(\Entity_Roles $role)
    {
        $this->__load();
        return parent::setRole($role);
    }

    public function getRole()
    {
        $this->__load();
        return parent::getRole();
    }

    public function getIsAdmin()
    {
        $this->__load();
        return parent::getIsAdmin();
    }

    public function setFbUserId($userId)
    {
        $this->__load();
        return parent::setFbUserId($userId);
    }

    public function getFbUserId()
    {
        $this->__load();
        return parent::getFbUserId();
    }

    public function addLoan($loan)
    {
        $this->__load();
        return parent::addLoan($loan);
    }

    public function getLoans()
    {
        $this->__load();
        return parent::getLoans();
    }

    public function addPayment($payment)
    {
        $this->__load();
        return parent::addPayment($payment);
    }

    public function getPayments()
    {
        $this->__load();
        return parent::getPayments();
    }

    public function addRating($rating)
    {
        $this->__load();
        return parent::addRating($rating);
    }

    public function getRatings()
    {
        $this->__load();
        return parent::getRatings();
    }

    public function addRate($rate)
    {
        $this->__load();
        return parent::addRate($rate);
    }

    public function getRatedList()
    {
        $this->__load();
        return parent::getRatedList();
    }

    public function getRatingPercentage()
    {
        $this->__load();
        return parent::getRatingPercentage();
    }

    public function getPositiveRating()
    {
        $this->__load();
        return parent::getPositiveRating();
    }

    public function getNegativeRating()
    {
        $this->__load();
        return parent::getNegativeRating();
    }

    public function getDocuments()
    {
        $this->__load();
        return parent::getDocuments();
    }

    public function addDocument($document)
    {
        $this->__load();
        return parent::addDocument($document);
    }

    public function getCreditRating()
    {
        $this->__load();
        return parent::getCreditRating();
    }

    public function addWallet($wallet)
    {
        $this->__load();
        return parent::addWallet($wallet);
    }

    public function getWallets()
    {
        $this->__load();
        return parent::getWallets();
    }

    public function getWallet()
    {
        $this->__load();
        return parent::getWallet();
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'username', 'email', 'password', 'isActive', 'fbUserId', 'firstname', 'lastname', 'createdAt', 'role', 'address', 'loans', 'ratings', 'ratedList', 'payments', 'documents', 'wallets');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}