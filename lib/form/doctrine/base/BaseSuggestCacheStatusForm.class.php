<?php

/**
 * SuggestCacheStatus form base class.
 *
 * @method SuggestCacheStatus getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSuggestCacheStatusForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'    => new sfWidgetFormInputHidden(),
      'list_type'  => new sfWidgetFormInputHidden(),
      'lastcheck'  => new sfWidgetFormDateTime(),
      'countsince' => new sfWidgetFormInputText(),
      'numrows'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'user_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'list_type'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('list_type')), 'empty_value' => $this->getObject()->get('list_type'), 'required' => false)),
      'lastcheck'  => new sfValidatorDateTime(),
      'countsince' => new sfValidatorInteger(),
      'numrows'    => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('suggest_cache_status[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SuggestCacheStatus';
  }

}
