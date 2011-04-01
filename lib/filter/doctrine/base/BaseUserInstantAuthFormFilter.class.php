<?php

/**
 * UserInstantAuth filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserInstantAuthFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'movie_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hash'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'authtime' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'movie_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'hash'     => new sfValidatorPass(array('required' => false)),
      'authtime' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_instant_auth_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserInstantAuth';
  }

  public function getFields()
  {
    return array(
      'user_id'  => 'Number',
      'movie_id' => 'Number',
      'hash'     => 'Text',
      'authtime' => 'Date',
    );
  }
}
