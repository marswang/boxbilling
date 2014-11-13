<?php
/**
 * BoxBilling
 *
 * LICENSE
 *
 * This source file is subject to the license that is bundled
 * with this package in the file LICENSE.txt
 * It is also available through the world-wide-web at this URL:
 * http://www.boxbilling.com/LICENSE.txt
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@boxbilling.com so we can send you a copy immediately.
 *
 * @copyright Copyright (c) 2010-2012 BoxBilling (http://www.boxbilling.com)
 * @license   http://www.boxbilling.com/LICENSE.txt
 * @version   $Id$
 */
class Server_Client
{
    private $id         = NULL;
    private $email      = NULL;
    private $full_name  = 'BoxBilling Client';
    private $company    = 'BoxBilling';
    private $www        = 'www.boxbilling.com';
    private $address_1  = NULL;
    private $address_2  = NULL;
    private $street     = NULL;
    private $state      = 'n/a';
    private $country    = 'US';
    private $city       = NULL;
    private $zip        = NULL;
    private $telephone  = NULL;
    private $fax  = NULL;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setFullName($param)
    {
        $this->full_name = $param;
        return $this;
    }

    public function getFullName()
    {
        return $this->full_name;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setEmail($param)
    {
        $this->email = $param;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setAddress1($param)
    {
        $this->address_1 = $param;
        return $this;
    }

    public function getAddress1()
    {
        return $this->address_1;
    }
    
    public function setAddress2($param)
    {
        $this->address_2 = $param;
        return $this;
    }

    public function getAddress2()
    {
        return $this->address_2;
    }
    
    public function setStreet($param)
    {
        $this->street = $param;
        return $this;
    }

    public function getStreet()
    {
        return $this->street;
    }
    
    public function setCity($param)
    {
        $this->city = $param;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setState($param)
    {
        $this->state = $param;
        return $this;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setCountry($param)
    {
        $this->country = $param;
        return $this;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setZip($param)
    {
        $this->zip = $param;
        return $this;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setTelephone($param)
    {
        $this->telephone = $param;
        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }
    
    public function setFax($param)
    {
        $this->fax = $param;
        return $this;
    }

    public function getFax()
    {
        return $this->fax;
    }
    
    public function setWww($param)
    {
        $this->www = $param;
        return $this;
    }

    public function getWww()
    {
        return $this->www;
    }
}