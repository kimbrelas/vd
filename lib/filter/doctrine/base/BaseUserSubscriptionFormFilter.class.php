<?php

/**
 * UserSubscription filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserSubscriptionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'plan_id'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'start_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'renewal_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'monthly_cost'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'dvds_this_month'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'minutes_remaining' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'plan_id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'start_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'renewal_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'monthly_cost'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'dvds_this_month'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'minutes_remaining' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_subscription_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserSubscription';
  }

  public function getFields()
  {
    return array(
      'user_id'           => 'Number',
      'plan_id'           => 'Number',
      'start_date'        => 'Date',
      'renewal_date'      => 'Date',
      'monthly_cost'      => 'Number',
      'dvds_this_month'   => 'Number',
      'minutes_remaining' => 'Number',
    );
  }
}
