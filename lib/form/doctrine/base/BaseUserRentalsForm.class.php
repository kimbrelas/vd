<?php

/**
 * UserRentals form base class.
 *
 * @method UserRentals getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserRentalsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'       => new sfWidgetFormInputHidden(),
      'movie_id'      => new sfWidgetFormInputHidden(),
      'format'        => new sfWidgetFormInputText(),
      'out_now'       => new sfWidgetFormInputText(),
      'date_rented'   => new sfWidgetFormDateTime(),
      'date_returned' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'user_id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'movie_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('movie_id')), 'empty_value' => $this->getObject()->get('movie_id'), 'required' => false)),
      'format'        => new sfValidatorString(array('max_length' => 50)),
      'out_now'       => new sfValidatorInteger(),
      'date_rented'   => new sfValidatorDateTime(),
      'date_returned' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_rentals[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserRentals';
  }

}
