<?php

/**
 * PlanTypes form base class.
 *
 * @method PlanTypes getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePlanTypesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'type'            => new sfWidgetFormInputText(),
      'name'            => new sfWidgetFormInputText(),
      'monthly_cost'    => new sfWidgetFormInputText(),
      'description'     => new sfWidgetFormTextarea(),
      'active'          => new sfWidgetFormInputText(),
      'instant_minutes' => new sfWidgetFormInputText(),
      'dvds_out'        => new sfWidgetFormInputText(),
      'dvds_per_month'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'type'            => new sfValidatorString(array('max_length' => 50)),
      'name'            => new sfValidatorString(array('max_length' => 50)),
      'monthly_cost'    => new sfValidatorNumber(),
      'description'     => new sfValidatorString(),
      'active'          => new sfValidatorInteger(array('required' => false)),
      'instant_minutes' => new sfValidatorInteger(),
      'dvds_out'        => new sfValidatorInteger(),
      'dvds_per_month'  => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('plan_types[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlanTypes';
  }

}
