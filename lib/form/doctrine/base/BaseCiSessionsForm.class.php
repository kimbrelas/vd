<?php

/**
 * CiSessions form base class.
 *
 * @method CiSessions getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseCiSessionsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'session_id'    => new sfWidgetFormInputHidden(),
      'ip_address'    => new sfWidgetFormInputText(),
      'user_agent'    => new sfWidgetFormInputText(),
      'last_activity' => new sfWidgetFormInputText(),
      'user_data'     => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'session_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('session_id')), 'empty_value' => $this->getObject()->get('session_id'), 'required' => false)),
      'ip_address'    => new sfValidatorString(array('max_length' => 16, 'required' => false)),
      'user_agent'    => new sfValidatorString(array('max_length' => 50)),
      'last_activity' => new sfValidatorInteger(array('required' => false)),
      'user_data'     => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('ci_sessions[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'CiSessions';
  }

}
