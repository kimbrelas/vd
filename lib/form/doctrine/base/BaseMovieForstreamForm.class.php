<?php

/**
 * MovieForstream form base class.
 *
 * @method MovieForstream getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMovieForstreamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'movie_id'        => new sfWidgetFormInputText(),
      'bucket_name'     => new sfWidgetFormInputText(),
      'domain_name'     => new sfWidgetFormInputText(),
      'distribution_id' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'movie_id'        => new sfValidatorInteger(array('required' => false)),
      'bucket_name'     => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'domain_name'     => new sfValidatorString(array('max_length' => 128, 'required' => false)),
      'distribution_id' => new sfValidatorString(array('max_length' => 128, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('movie_forstream[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MovieForstream';
  }

}
