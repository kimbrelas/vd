<?php

/**
 * Rating form base class.
 *
 * @method Rating getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseRatingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'  => new sfWidgetFormInputHidden(),
      'movie_id' => new sfWidgetFormInputHidden(),
      'rating'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'user_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'movie_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('movie_id')), 'empty_value' => $this->getObject()->get('movie_id'), 'required' => false)),
      'rating'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('rating[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Rating';
  }

}
