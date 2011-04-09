<?php

/**
 * MovieCreditPerson form base class.
 *
 * @method MovieCreditPerson getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMovieCreditPersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'movie_id'  => new sfWidgetFormInputHidden(),
      'credit_id' => new sfWidgetFormInputHidden(),
      'person_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'movie_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('movie_id')), 'empty_value' => $this->getObject()->get('movie_id'), 'required' => false)),
      'credit_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('credit_id')), 'empty_value' => $this->getObject()->get('credit_id'), 'required' => false)),
      'person_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('person_id')), 'empty_value' => $this->getObject()->get('person_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('movie_credit_person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MovieCreditPerson';
  }

}
