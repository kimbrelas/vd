<?php

/**
 * BaseListTypes
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $type
 * 
 * @method integer   getId()   Returns the current record's "id" value
 * @method string    getType() Returns the current record's "type" value
 * @method ListTypes setId()   Sets the current record's "id" value
 * @method ListTypes setType() Sets the current record's "type" value
 * 
 * @package    dukaan
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseListTypes extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('list_types');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('type', 'string', 50, array(
             'type' => 'string',
             'default' => '',
             'notnull' => true,
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}