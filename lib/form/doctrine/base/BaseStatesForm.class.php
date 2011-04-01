<?php

/**
 * States form base class.
 *
 * @method States getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStatesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'abbr'       => new sfWidgetFormInputText(),
      'sales_tax'  => new sfWidgetFormInputText(),
      'charge_tax' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 255)),
      'abbr'       => new sfValidatorString(array('max_length' => 2)),
      'sales_tax'  => new sfValidatorNumber(array('required' => false)),
      'charge_tax' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('states[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'States';
  }

}
