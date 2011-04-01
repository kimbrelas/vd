<?php

/**
 * UserInstantAuth form base class.
 *
 * @method UserInstantAuth getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserInstantAuthForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'  => new sfWidgetFormInputHidden(),
      'movie_id' => new sfWidgetFormInputText(),
      'hash'     => new sfWidgetFormInputText(),
      'authtime' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'user_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'movie_id' => new sfValidatorInteger(),
      'hash'     => new sfValidatorString(array('max_length' => 32)),
      'authtime' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('user_instant_auth[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserInstantAuth';
  }

}
