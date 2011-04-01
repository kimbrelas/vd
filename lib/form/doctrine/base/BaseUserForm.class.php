<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'email'             => new sfWidgetFormInputText(),
      'password'          => new sfWidgetFormInputText(),
      'firstname'         => new sfWidgetFormInputText(),
      'lastname'          => new sfWidgetFormInputText(),
      'company'           => new sfWidgetFormInputText(),
      'had_trial'         => new sfWidgetFormInputText(),
      'trial_expire_date' => new sfWidgetFormDateTime(),
      'dob'               => new sfWidgetFormDateTime(),
      'gender'            => new sfWidgetFormInputText(),
      'primary_address'   => new sfWidgetFormInputText(),
      'is_admin'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'email'             => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'password'          => new sfValidatorString(array('max_length' => 32)),
      'firstname'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'lastname'          => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'company'           => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'had_trial'         => new sfValidatorInteger(array('required' => false)),
      'trial_expire_date' => new sfValidatorDateTime(array('required' => false)),
      'dob'               => new sfValidatorDateTime(array('required' => false)),
      'gender'            => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'primary_address'   => new sfValidatorInteger(array('required' => false)),
      'is_admin'          => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
