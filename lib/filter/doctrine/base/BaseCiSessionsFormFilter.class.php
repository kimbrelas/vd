<?php

/**
 * CiSessions filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCiSessionsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ip_address'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_agent'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_activity' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_data'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'ip_address'    => new sfValidatorPass(array('required' => false)),
      'user_agent'    => new sfValidatorPass(array('required' => false)),
      'last_activity' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'user_data'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('ci_sessions_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CiSessions';
  }

  public function getFields()
  {
    return array(
      'session_id'    => 'Text',
      'ip_address'    => 'Text',
      'user_agent'    => 'Text',
      'last_activity' => 'Number',
      'user_data'     => 'Text',
    );
  }
}
