<?php

/**
 * Movie form base class.
 *
 * @method Movie getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMovieForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'title'          => new sfWidgetFormInputText(),
      'year'           => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'can_rent'       => new sfWidgetFormInputText(),
      'can_buy'        => new sfWidgetFormInputText(),
      'can_stream'     => new sfWidgetFormInputText(),
      'rating_average' => new sfWidgetFormInputText(),
      'rating_count'   => new sfWidgetFormInputText(),
      'film_type'      => new sfWidgetFormInputText(),
      'mpaa'           => new sfWidgetFormInputText(),
      'runtime'        => new sfWidgetFormInputText(),
      'active'         => new sfWidgetFormInputText(),
      'date_added'     => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'          => new sfValidatorString(array('max_length' => 75, 'required' => false)),
      'year'           => new sfValidatorInteger(array('required' => false)),
      'description'    => new sfValidatorString(array('required' => false)),
      'can_rent'       => new sfValidatorInteger(array('required' => false)),
      'can_buy'        => new sfValidatorInteger(array('required' => false)),
      'can_stream'     => new sfValidatorInteger(array('required' => false)),
      'rating_average' => new sfValidatorNumber(array('required' => false)),
      'rating_count'   => new sfValidatorInteger(array('required' => false)),
      'film_type'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'mpaa'           => new sfValidatorString(array('max_length' => 5, 'required' => false)),
      'runtime'        => new sfValidatorInteger(array('required' => false)),
      'active'         => new sfValidatorInteger(array('required' => false)),
      'date_added'     => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('movie[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Movie';
  }

}
