<?php

/**
 * ListLookup form base class.
 *
 * @method ListLookup getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseListLookupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'list_id'  => new sfWidgetFormInputHidden(),
      'movie_id' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'list_id'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('list_id')), 'empty_value' => $this->getObject()->get('list_id'), 'required' => false)),
      'movie_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('movie_id')), 'empty_value' => $this->getObject()->get('movie_id'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('list_lookup[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ListLookup';
  }

}
