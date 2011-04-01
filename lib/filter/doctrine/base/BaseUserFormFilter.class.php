<?php

/**
 * User filter form base class.
 *
 * @package    dukaan
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'email'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'firstname'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'company'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'had_trial'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'trial_expire_date' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'dob'               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'gender'            => new sfWidgetFormFilterInput(),
      'primary_address'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'is_admin'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'email'             => new sfValidatorPass(array('required' => false)),
      'password'          => new sfValidatorPass(array('required' => false)),
      'firstname'         => new sfValidatorPass(array('required' => false)),
      'lastname'          => new sfValidatorPass(array('required' => false)),
      'company'           => new sfValidatorPass(array('required' => false)),
      'had_trial'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'trial_expire_date' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'dob'               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'gender'            => new sfValidatorPass(array('required' => false)),
      'primary_address'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'is_admin'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'email'             => 'Text',
      'password'          => 'Text',
      'firstname'         => 'Text',
      'lastname'          => 'Text',
      'company'           => 'Text',
      'had_trial'         => 'Number',
      'trial_expire_date' => 'Date',
      'dob'               => 'Date',
      'gender'            => 'Text',
      'primary_address'   => 'Number',
      'is_admin'          => 'Number',
    );
  }
}
