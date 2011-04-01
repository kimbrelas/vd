<?php

/**
 * Top50 form base class.
 *
 * @method Top50 getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTop50Form extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'movie_id'      => new sfWidgetFormInputText(),
      'position'      => new sfWidgetFormInputHidden(),
      'last_position' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'movie_id'      => new sfValidatorInteger(array('required' => false)),
      'position'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('position')), 'empty_value' => $this->getObject()->get('position'), 'required' => false)),
      'last_position' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('top50[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Top50';
  }

}
