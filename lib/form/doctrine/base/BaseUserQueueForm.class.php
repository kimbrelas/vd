<?php

/**
 * UserQueue form base class.
 *
 * @method UserQueue getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserQueueForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'  => new sfWidgetFormInputHidden(),
      'movie_id' => new sfWidgetFormInputHidden(),
      'position' => new sfWidgetFormInputText(),
      'format'   => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'user_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'movie_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('movie_id')), 'empty_value' => $this->getObject()->get('movie_id'), 'required' => false)),
      'position' => new sfValidatorInteger(),
      'format'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('format')), 'empty_value' => $this->getObject()->get('format'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_queue[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserQueue';
  }

}
