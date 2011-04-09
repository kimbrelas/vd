<?php

/**
 * BaseTop50
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $movie_id
 * @property integer $position
 * @property integer $last_position
 * 
 * @method integer getMovieId()       Returns the current record's "movie_id" value
 * @method integer getPosition()      Returns the current record's "position" value
 * @method integer getLastPosition()  Returns the current record's "last_position" value
 * @method Top50   setMovieId()       Sets the current record's "movie_id" value
 * @method Top50   setPosition()      Sets the current record's "position" value
 * @method Top50   setLastPosition()  Sets the current record's "last_position" value
 * 
 * @package    dukaan
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTop50 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('top50');
        $this->hasColumn('movie_id', 'integer', 4, array(
             'type' => 'integer',
             'default' => '0',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('position', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('last_position', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}