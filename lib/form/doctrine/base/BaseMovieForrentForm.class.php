<?php

/**
 * MovieForrent form base class.
 *
 * @method MovieForrent getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMovieForrentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'movie_id' => new sfWidgetFormInputText(),
      'price'    => new sfWidgetFormInputText(),
      'format'   => new sfWidgetFormInputText(),
      'active'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'movie_id' => new sfValidatorInteger(),
      'price'    => new sfValidatorNumber(),
      'format'   => new sfValidatorString(array('max_length' => 3)),
      'active'   => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('movie_forrent[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MovieForrent';
  }

}
