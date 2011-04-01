<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UserRentals', 'doctrine');

/**
 * BaseUserRentals
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $user_id
 * @property integer $movie_id
 * @property string $format
 * @property integer $out_now
 * @property timestamp $date_rented
 * @property timestamp $date_returned
 * 
 * @method integer     getUserId()        Returns the current record's "user_id" value
 * @method integer     getMovieId()       Returns the current record's "movie_id" value
 * @method string      getFormat()        Returns the current record's "format" value
 * @method integer     getOutNow()        Returns the current record's "out_now" value
 * @method timestamp   getDateRented()    Returns the current record's "date_rented" value
 * @method timestamp   getDateReturned()  Returns the current record's "date_returned" value
 * @method UserRentals setUserId()        Sets the current record's "user_id" value
 * @method UserRentals setMovieId()       Sets the current record's "movie_id" value
 * @method UserRentals setFormat()        Sets the current record's "format" value
 * @method UserRentals setOutNow()        Sets the current record's "out_now" value
 * @method UserRentals setDateRented()    Sets the current record's "date_rented" value
 * @method UserRentals setDateReturned()  Sets the current record's "date_returned" value
 * 
 * @package    dukaan
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserRentals extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_rentals');
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('movie_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('format', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('out_now', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('date_rented', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('date_returned', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0000-00-00 00:00:00',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}