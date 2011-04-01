<?php

/**
 * PlanTypes filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePlanTypesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'type'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'monthly_cost'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'active'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'instant_minutes' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dvds_out'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dvds_per_month'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'type'            => new sfValidatorPass(array('required' => false)),
      'name'            => new sfValidatorPass(array('required' => false)),
      'monthly_cost'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'description'     => new sfValidatorPass(array('required' => false)),
      'active'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'instant_minutes' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dvds_out'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dvds_per_month'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('plan_types_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PlanTypes';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'type'            => 'Text',
      'name'            => 'Text',
      'monthly_cost'    => 'Number',
      'description'     => 'Text',
      'active'          => 'Number',
      'instant_minutes' => 'Number',
      'dvds_out'        => 'Number',
      'dvds_per_month'  => 'Number',
    );
  }
}
