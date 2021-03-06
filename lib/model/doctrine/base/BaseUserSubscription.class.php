<?php

/**
 * BaseUserSubscription
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $plan_id
 * @property timestamp $start_date
 * @property timestamp $renewal_date
 * @property float $monthly_cost
 * @property integer $dvds_this_month
 * @property integer $minutes_remaining
 * @property User $User
 * 
 * @method integer          getUserId()            Returns the current record's "user_id" value
 * @method integer          getPlanId()            Returns the current record's "plan_id" value
 * @method timestamp        getStartDate()         Returns the current record's "start_date" value
 * @method timestamp        getRenewalDate()       Returns the current record's "renewal_date" value
 * @method float            getMonthlyCost()       Returns the current record's "monthly_cost" value
 * @method integer          getDvdsThisMonth()     Returns the current record's "dvds_this_month" value
 * @method integer          getMinutesRemaining()  Returns the current record's "minutes_remaining" value
 * @method User             getUser()              Returns the current record's "User" value
 * @method UserSubscription setUserId()            Sets the current record's "user_id" value
 * @method UserSubscription setPlanId()            Sets the current record's "plan_id" value
 * @method UserSubscription setStartDate()         Sets the current record's "start_date" value
 * @method UserSubscription setRenewalDate()       Sets the current record's "renewal_date" value
 * @method UserSubscription setMonthlyCost()       Sets the current record's "monthly_cost" value
 * @method UserSubscription setDvdsThisMonth()     Sets the current record's "dvds_this_month" value
 * @method UserSubscription setMinutesRemaining()  Sets the current record's "minutes_remaining" value
 * @method UserSubscription setUser()              Sets the current record's "User" value
 * 
 * @package    dukaan
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserSubscription extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_subscription');
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('plan_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('start_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'notnull' => true,
             'length' => 25,
             ));
        $this->hasColumn('renewal_date', 'timestamp', 25, array(
             'type' => 'timestamp',
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'length' => 25,
             ));
        $this->hasColumn('monthly_cost', 'float', 5, array(
             'type' => 'float',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('dvds_this_month', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('minutes_remaining', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id'));
    }
}