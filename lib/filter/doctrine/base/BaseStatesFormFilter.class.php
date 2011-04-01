<?php

/**
 * States filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStatesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'abbr'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'sales_tax'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'charge_tax' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'name'       => new sfValidatorPass(array('required' => false)),
      'abbr'       => new sfValidatorPass(array('required' => false)),
      'sales_tax'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'charge_tax' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('states_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'States';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'name'       => 'Text',
      'abbr'       => 'Text',
      'sales_tax'  => 'Number',
      'charge_tax' => 'Number',
    );
  }
}
