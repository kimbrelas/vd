<?php

/**
 * UserSubscription form base class.
 *
 * @method UserSubscription getObject() Returns the current form's model object
 *
 * @package    dukaan
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserSubscriptionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'           => new sfWidgetFormInputHidden(),
      'plan_id'           => new sfWidgetFormInputText(),
      'start_date'        => new sfWidgetFormDateTime(),
      'renewal_date'      => new sfWidgetFormDateTime(),
      'monthly_cost'      => new sfWidgetFormInputText(),
      'dvds_this_month'   => new sfWidgetFormInputText(),
      'minutes_remaining' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'user_id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('user_id')), 'empty_value' => $this->getObject()->get('user_id'), 'required' => false)),
      'plan_id'           => new sfValidatorInteger(),
      'start_date'        => new sfValidatorDateTime(),
      'renewal_date'      => new sfValidatorDateTime(array('required' => false)),
      'monthly_cost'      => new sfValidatorNumber(),
      'dvds_this_month'   => new sfValidatorInteger(),
      'minutes_remaining' => new sfValidatorInteger(),
    ));

    $this->widgetSchema->setNameFormat('user_subscription[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserSubscription';
  }

}
