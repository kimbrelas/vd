<?php

/**
 * Log form base class.
 *
 * @method Log getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLogForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'action_type' => new sfWidgetFormInputText(),
      'user_id'     => new sfWidgetFormInputText(),
      'movie_id'    => new sfWidgetFormInputText(),
      'detailtext'  => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'action_type' => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'user_id'     => new sfValidatorInteger(array('required' => false)),
      'movie_id'    => new sfValidatorInteger(array('required' => false)),
      'detailtext'  => new sfValidatorString(),
    ));

    $this->widgetSchema->setNameFormat('log[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Log';
  }

}
