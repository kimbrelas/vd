<?php

/**
 * BaseAddress
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property integer $is_billing
 * @property string $name_person
 * @property string $name_company
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone_1
 * @property string $phone_2
 * @property string $phone_3
 * 
 * @method integer getId()           Returns the current record's "id" value
 * @method integer getUserId()       Returns the current record's "user_id" value
 * @method integer getIsBilling()    Returns the current record's "is_billing" value
 * @method string  getNamePerson()   Returns the current record's "name_person" value
 * @method string  getNameCompany()  Returns the current record's "name_company" value
 * @method string  getAddress1()     Returns the current record's "address1" value
 * @method string  getAddress2()     Returns the current record's "address2" value
 * @method string  getCity()         Returns the current record's "city" value
 * @method string  getState()        Returns the current record's "state" value
 * @method string  getZip()          Returns the current record's "zip" value
 * @method string  getPhone1()       Returns the current record's "phone_1" value
 * @method string  getPhone2()       Returns the current record's "phone_2" value
 * @method string  getPhone3()       Returns the current record's "phone_3" value
 * @method Address setId()           Sets the current record's "id" value
 * @method Address setUserId()       Sets the current record's "user_id" value
 * @method Address setIsBilling()    Sets the current record's "is_billing" value
 * @method Address setNamePerson()   Sets the current record's "name_person" value
 * @method Address setNameCompany()  Sets the current record's "name_company" value
 * @method Address setAddress1()     Sets the current record's "address1" value
 * @method Address setAddress2()     Sets the current record's "address2" value
 * @method Address setCity()         Sets the current record's "city" value
 * @method Address setState()        Sets the current record's "state" value
 * @method Address setZip()          Sets the current record's "zip" value
 * @method Address setPhone1()       Sets the current record's "phone_1" value
 * @method Address setPhone2()       Sets the current record's "phone_2" value
 * @method Address setPhone3()       Sets the current record's "phone_3" value
 * 
 * @package    dukaan
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAddress extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('address');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'default' => '0',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('is_billing', 'integer', 1, array(
             'type' => 'integer',
             'default' => '0',
             'notnull' => true,
             'length' => 1,
             ));
        $this->hasColumn('name_person', 'string', 60, array(
             'type' => 'string',
             'default' => '0',
             'notnull' => true,
             'length' => 60,
             ));
        $this->hasColumn('name_company', 'string', 60, array(
             'type' => 'string',
             'default' => '0',
             'notnull' => true,
             'length' => 60,
             ));
        $this->hasColumn('address1', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
        $this->hasColumn('address2', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
        $this->hasColumn('city', 'string', 60, array(
             'type' => 'string',
             'length' => 60,
             ));
        $this->hasColumn('state', 'string', 2, array(
             'type' => 'string',
             'length' => 2,
             ));
        $this->hasColumn('zip', 'string', 12, array(
             'type' => 'string',
             'length' => 12,
             ));
        $this->hasColumn('phone_1', 'string', 16, array(
             'type' => 'string',
             'length' => 16,
             ));
        $this->hasColumn('phone_2', 'string', 16, array(
             'type' => 'string',
             'length' => 16,
             ));
        $this->hasColumn('phone_3', 'string', 16, array(
             'type' => 'string',
             'length' => 16,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}